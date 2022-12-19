<?php

namespace App\Http\Controllers\Invigilator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\SendEmailToCandidatesJob;
use App\Mail\SendNotificationToCandidate;
use Illuminate\Support\Facades\Mail;
use App\Models\AccountSetting;
use App\Models\ActivityCandidate;
use App\Models\CandidateExam;
use App\Models\CompanyDetail;

class SettingsController extends Controller
{
    public function index(){

        return view('invigilator.settings.index');
    }


    public function writeEmail(){
        return view('invigilator.settings.emailsend');
    }

    public function sendEmail(Request $request){

            $subject = $request->subject;
            $description = $request->message;
            $description = str_replace('<p>',"",$description);
            $description = str_replace('</p>',"",$description);

            if($request->email_group == "1"){


                $candidates = User::where('role','candidate')->get();
                foreach($candidates as $candidate){

                    $email = new SendNotificationToCandidate($candidate->name,$subject,$description);
                    Mail::to($candidate->email)->send($email);
                }
                return redirect()->route('invigilator.setting.writeemail')->with('success','Email send to all candidates');
            }else if($request->email_group == "2"){
                $cand_array = $request->cand;
                if(!empty($cand_array)){
                    for($i = 0;$i < count($request->cand);$i++){
                        $cand = User::find($cand_array[$i]);
                        // dd($cand);
                        $email = new SendNotificationToCandidate($cand->name,$subject,$description);
                        Mail::to($cand->email)->send($email);
                    }
                    return redirect()->route('invigilator.setting.writeemail')->with('success','Email send to selected candidates');
                }else{
                    return redirect()->route('invigilator.setting.writeemail')->with('success','Please select atleast one checkbox if click on selected group');
                }
            }



    }

    public function candidateActivity(){
        $candidates_activities = ActivityCandidate::paginate(10);
        return view('invigilator.settings.candidateactivity',[
            'candidates_activities' => $candidates_activities
        ]);
    }

    public function myAccount(){
        $details = CompanyDetail::where('admin_id',auth()->user()->id)->first();
        return view('invigilator.settings.myaccount',[
            'details' => $details
            ]);
    }

    public function stripeCredentialsView(){
        $account_setting = AccountSetting::all();

// dd($account_setting);
        return view('invigilator.settings.payment_account_settings',[
            'account_setting' => $account_setting
        ]);
    }

    public function setStripeCredentials(Request $request){
        $request->validate([

            'stripe_key' => 'required',
            'stripe_secret' => 'required',
        ]);
        $account_setting = AccountSetting::all();
        if(count($account_setting) > 0){

        // dd($account_setting);
            $account_setting_e = $account_setting[0];

            $account_setting_e->stripe_key = $request->stripe_key;
            $account_setting_e->stripe_secret = $request->stripe_secret;

            $account_setting_e->save();
            return redirect()->route('candidate.paymentsettings')->with('success','Payment Account Details has been updated');
        }else{
                    $account_setting = new AccountSetting();
                // dd($account_setting);


                $account_setting->stripe_key = $request->stripe_key;
                $account_setting->stripe_secret = $request->stripe_secret;

                $account_setting->save();
                return redirect()->route('candidate.paymentsettings')->with('success','Payment Account Details has been updated');
        }


    }

    public function changeStatus(Request $request){
        // dd($request->all());

        $candidate = User::find($request->cand_id);


        $cand_exam = CandidateExam::where('candidate_id',$candidate->id)
                            ->where('exam_id',$request->exam_id)
                            ->where('exam_take_status',"Taken")->first();
        $cand_exam->exam_result_status = $request->status;
        $cand_exam->comments = $request->comments;

        $cand_exam->save();
        if(isset($request->admin)){
            return redirect()->route('exams.candidate.show',$request->request_date);
        }else{
            return redirect()->route('examss.candidate.show',$request->request_date);
        }
    }
    
    public function reports(){
        $cand_exam = CandidateExam::where('exam_take_status',"Taken")->get();
        
        return view('invigilator.settings.report',[
            'cand_exam' => $cand_exam
            ]);
    }
}
