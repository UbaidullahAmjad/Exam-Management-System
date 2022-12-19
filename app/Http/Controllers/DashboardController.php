<?php

namespace App\Http\Controllers;

use App\Models\CandidateInformation;
use App\Models\Exam;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\CompanyDetail;

class DashboardController extends Controller
{
    public function index(){
        $candidates = User::join('candidate_information','candidate_information.candidate_id','users.id')
                        ->join('candidate_exams','candidate_exams.candidate_id','users.id')
                        ->join('exams','exams.id','candidate_exams.exam_id')
                    ->where('users.role','candidate')
                    // ->where('users.deleted_at','=','NULL')
                    ->paginate(5);
        $rejected_cands = User::join('candidate_information','candidate_information.candidate_id','users.id')
                        ->where('users.role','candidate')
                        ->where('candidate_information.status',"Rejected")->paginate(5);
        $pending_candidates = User::join('candidate_information','candidate_information.candidate_id','users.id')
                        ->where('users.role','candidate')
                        ->where('deleted_at',NULL)
                        ->where('candidate_information.status',NULL)
                        ->paginate(5);
        // dd($pending_candidates);



        return view('dashboard',[
            'candidates' => $candidates,
            'rejected_cands' =>$rejected_cands,
            'pending_candidates' => $pending_candidates
        ]);
    }


    public function showPendingCandidate($id){
        $candidate = User::find($id);
        $candidate_info = CandidateInformation::where('candidate_id',$id)->first();

        return view('viewpendingcand',[
            'candidate' => $candidate,
            'candidate_info' => $candidate_info
        ]);

    }

    public function setAdminDetails(Request $request){

        $user = User::find(auth()->user()->id);
        if(isset($request->admin)){
                if(!empty($request->password)){
                $user->password = Hash::make($request->password);
                $user->save();
                }
    
            return redirect()->route('setting.myaccount')->with('success','Account Detail has been updated');
        }else{
            if(!empty($request->password)){
                $user->password = Hash::make($request->password);
                $user->save();
                }
    
            return redirect()->route('invigilator.setting.myaccount')->with('success','Account Detail has been updated');
        }
        
    }


    public function setCompanyDetails(Request $request){
        $details = CompanyDetail::where('admin_id',auth()->user()->id)->first();
        // dd($request->all());
        $fileName = $details->logo;
        if(!empty($request->logo)){
            $logo = $request->logo;
        $name = $logo->getClientOriginalName();

                    $fileName = time() . $name;
                    $attachment = $logo->move(storage_path() . '/app/public/', $fileName);
        }


        if(empty($details)){
            $details =new CompanyDetail();
            $details->admin_id = auth()->user()->id;
            $details->organization_name = $request->organization;
            $details->time_zone = $request->time_zone;
            $details->logo = $fileName;
            $details->daylight = $request->daylight;
            $details->save();
        }else{
            $details->admin_id = auth()->user()->id;
            $details->organization_name = $request->organization;
            $details->time_zone = $request->time_zone;
            $details->logo = $fileName;
            $details->daylight = $request->daylight;
            $details->save();
        }

        return redirect()->route('setting.myaccount')->with('success','Company Detail has been updated');
    }
}
