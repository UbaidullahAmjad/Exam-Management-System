<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CandidateInformation;
use Illuminate\Support\Facades\Mail;
use App\Mail\MoreDocumentEmail;
use App\Mail\ApproveCandidateMail;
use App\Models\CandidateExam;
use App\Models\Exam;
use Symfony\Component\HttpFoundation\Response;
use App\Models\RoleUser;
use App\Models\QuestionAnswer;

class CandidateController extends Controller
{
    public function index(){
        $candidates = User::join('candidate_information','candidate_information.candidate_id','users.id')
                    ->where('users.role','candidate')->where('deleted_at',NULL)->get();

        return view('candidatesforAdmin.index',[
            'candidates' => $candidates
        ]);
    }

    public function show($id){
        $candidate_info = CandidateInformation::where('candidate_id',$id)->first();
        $candidate = User::find($id);
        // dd($candidate_info);
        return view('candidatesforAdmin.show',[
            'candidate_info' => $candidate_info,
            'candidate' => $candidate,
        ]);
    }

    public function edit($id){
        $candidate_info = CandidateInformation::where('candidate_id',$id)->first();

        return view('candidatesforAdmin.edit',[
            'candidate_info' => $candidate_info
        ]);
    }

    public function update(Request $request,$id){

        $request->validate([
            'file' => 'required',
            'file' => 'mimes:docx,jpg,pdf,png,jpeg,txt,exe',
        ]);


        $candidate_info = CandidateInformation::where('candidate_id',$id)->first();

        // file managing

        if (file_exists($candidate_info->passport_attachs)) {
            unlink($candidate_info->passport_attachs);
        }
        if (file_exists($candidate_info->photo_attachs)) {
            unlink($candidate_info->photo_attachs);
        }
        if (file_exists($candidate_info->qualification_attachs)) {
            unlink($candidate_info->qualification_attachs);
        }
        if (file_exists($candidate_info->emirates_attachs)) {
            unlink($candidate_info->emirates_attachs);
        }
        if(!empty($request->passports)){
            $passport = $request->passports[0];
            $passport_name = $passport->getClientOriginalName();
            $PfileName = time() . $passport_name;
            $passport_attachment = $passport->move(storage_path() . '/app/public/', $PfileName);

            $candidate_info->passport_attachs = $PfileName;
        }
        if(!empty($request->emirates_id_attachs)){
            $emirates_id_attach = $request->emirates_id_attachs[0];
            $emirates_name = $emirates_id_attach->getClientOriginalName();
            $EfileName = time() . $emirates_name;
            $emirate_attachment = $emirates_id_attach->move(storage_path() . '/app/public/', $EfileName);

            $candidate_info->emirates_attachs = $EfileName;
        }

        if(!empty($request->personal_photo_attach)){
            $pic_attach = $request->personal_photo_attach[0];
            $image_name = $pic_attach->getClientOriginalName();
            $ImagefileName = time() . $image_name;
            $image_attachment = $pic_attach->move(storage_path() . '/app/public/', $ImagefileName);

            $candidate_info->photo_attachs = $ImagefileName;
        }

        if(!empty($request->qualification_attach)){
            $qualification = $request->qualification_attach[0];
            $qualification_file_name = $qualification->getClientOriginalName();
            $QfileName = time() . $qualification_file_name;
            $qualification_attachment = $qualification->move(storage_path() . '/app/public/', $QfileName);

            $candidate_info->qualification_attachs = $QfileName;
        }

        //file managing end



        $candidate_info->prefix = $request->prefix;
        $candidate_info->fname = $request->fname;
        $candidate_info->lname = $request->lname;
        $candidate_info->middle_name = $request->middlename;
        $candidate_info->nationality = $request->country;
        $candidate_info->place_of_birth = $request->Location;
        $candidate_info->dob = $request->dob;
        $candidate_info->passport_no = $request->passport;
        $candidate_info->email = $request->email;
        $candidate_info->mobile_no = $request->mobno;
        $candidate_info->phone_no = $request->phoneno;
        $candidate_info->emirates_id = $request->emiratesid;
        $candidate_info->generated_id = $request->gid;
        $candidate_info->gender = $request->gender;
        $candidate_info->emirates = $request->emirates;
        $candidate_info->marital_status = $request->marital_status;
        $candidate_info->spoken_language = $request->spoken_lang;
        $candidate_info->experience = $request->experience;
        $candidate_info->address = $request->address;
        $candidate_info->approval_id = $request->approval_id;
        $candidate_info->status = $request->status;

        $candidate_info->save();

        return redirect()->route('candidate.index')->with('success','Details has been updated');


    }

    public function destroy($id){
        $info = CandidateInformation::where('candidate_id',$id)->first();
        // dd($info);
        if(!empty($info)){
            $info->delete();
        }
        $role_user = RoleUser::where('user_id',$id)->first();
        if(!empty($role_user)){
            $role_user->delete();
        }
        

        $cand_exams = CandidateExam::where('candidate_id',$id)->get();

        if(count($cand_exams) > 0){
            foreach($cand_exams as $cand_exam){
            $cand_exam->delete();

            }
        }
        

        $question_ans = QuestionAnswer::where('candidate_id',$id)->get();

        if(count($question_ans) > 0){
            foreach($question_ans as $question_an){
            $question_an->delete();

            }
        }
        
        $user = User::find($id);

        $user->delete();

        return redirect()->route('candidate.index')->with('success','Candidate Deleted Successfully');
    }


    public function approveCandidate(Request $request,$id){

        $cand_info = CandidateInformation::where('candidate_id',$id)->first();
        $exam = Exam::find($request->exams);
        $auth_approval_id = "ac%b^" . rand(5000,1000000000) . "%uy#";
        $paper = $exam->name;
        $cand_info->status = "Approved";
        $cand_info->save();
        $cand = User::find($id);

        $candidate_exam = new CandidateExam();
        $candidate_exam->exam_id = $exam->id;
        $candidate_exam->candidate_id = $id;
        $candidate_exam->candidate_status = $cand_info->status;
        $candidate_exam->document_verification = "Yes";
        $candidate_exam->save();


        Mail::to($cand->email)->send(new ApproveCandidateMail($auth_approval_id,$cand->name,$exam->name));

        return redirect()->route('candidate.index')->with('success','Candidate Approved');
    }

    public function rejectCandidate(Request $request,$id){

        $cand_info = CandidateInformation::where('candidate_id',$request->id)->first();

        $comments = $request->rejected;
        $comments = str_replace("<p>","",$comments);
        $comments = str_replace("</p>","",$comments);
        $cand_info->status = "Rejected";
        $cand_info->comments = $comments;
        $cand_info->save();
        $cand = User::find($request->id);

        $candidate_exam = new CandidateExam();

        $candidate_exam->candidate_id = $request->id;
        $candidate_exam->candidate_status = $cand_info->status;

        $candidate_exam->save();
        // dd($request->all());



        return redirect()->route('candidate.index')->with('success','Candidate Rejected');
    }

    public function newToPending(Request $request){

        $cand_info = CandidateInformation::where('candidate_id',$request->id)->first();

        if($cand_info->status == ""){
            $cand_info->status = "Pending";

            $cand_info->save();
        }
        $response = array(
            'status' => 'success',
            'msg'    => 'Status changed successfully',
        );

        return json_encode($response);
    }

    public function askForDocuments(Request $request){

        $candidate = User::where('id',$request->id)->first();
        $subject = $request->subject;
        $message = $request->message;
        $message = str_replace("<p>","",$message);
        $message = str_replace("</p>","",$message);
        $details = [
            'subject'=> $subject,
            'message'=> $message,
            'candidate_name' => $candidate->name
        ];
        // dd($details);

        Mail::to($candidate->email)->send(new MoreDocumentEmail($details));

        $response = array(

            'status' => 'success',
            'msg'    => 'Email for documents sent successfully',
        );

        return json_encode($response);
    }

    public function downloadAttachment($file){
        // dd($file);

        // public function download(Request $request, $file)
        // {
            $filePath = Storage_path('app/public/' . $file);
            $fileExt = explode('.',$file);
            $fileName = time() . '.' . end($fileExt);
            // dd($fileName);
            return response()->download($filePath, $fileName);
        // }

        // return response()->download($file, 'filename.jpg');
    }
    
     public function changeDate(Request $request,$id){
        // dd($request->all());
        $cand_info = CandidateInformation::where('candidate_id',$id)->first();

        if(isset($request->request_date)){
            
            $timestamp = strtotime($request->request_date);
    
            $day = date('D', $timestamp);
            if($day == "Sat" || $day == "Fri"){
                return redirect()->route('candidate.show',$id)->with('success','You cannot book exam on Friday or Saturday');
            }
            $cand_info->request_date = $request->request_date;
            $cand_info->save();

            return redirect()->route('candidate.show',$id)->with('success','date changed successfully');
        }else if(isset($request->request_date_e)){
            
             $timestamp = strtotime($request->request_date_e);
    
            $day = date('D', $timestamp);
            if($day == "Sat" || $day == "Fri"){
                return redirect()->route('viewcandidateexam',[$request->exam_id,$id])->with('success','You cannot book exam on Friday or Saturday');
            }
            $cand_info->request_date = $request->request_date_e;
            $cand_info->save();

            return redirect()->route('viewcandidateexam',[$request->exam_id,$id])->with('success','date changed successfully');
        }



    }
}
