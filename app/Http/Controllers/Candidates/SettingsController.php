<?php

namespace App\Http\Controllers\Candidates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateInformation;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function myAccount(){
        $id = auth()->user()->id;
        $candidate_info = CandidateInformation::where('candidate_id',$id)->first();
        
        
        // dd($candidate_info);
        return view('candidates.setting.myaccount',[
            'candidate_info' => $candidate_info
        ]);
    }

    public function setAccountDetails(Request $request){
        // dd($request->all());
        $request->validate([
            // 'file' => 'required',
            'file' => 'mimes:docx,jpg,pdf,png,jpeg,txt,exe',
            'fname' => 'required',
            'lname' => 'required',
            // 'nationality' => 'required',
            'username' => 'required'
        ]);

        $id = auth()->user()->id;
        $user = User::find($id);
        if($request->password != null){
            $user->password = Hash::make($request->password);
            $user->save();
        }
        
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

        if (file_exists($user->avatar)) {
            unlink($user->avatar);
        }

        if(!empty($request->profile_pic)){
            $avatar = $request->profile_pic;
            $avatar_name = $avatar->getClientOriginalName();

            $ava_name = time() . $avatar_name;

            $ava_attachment = $avatar->move(storage_path() . '/app/public/', $ava_name);

            $user->avatar = $ava_name;
            $user->save();
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
        $candidate_info->emirates_id = rand(900000,1000000000). "fft%$^";
        $candidate_info->generated_id = rand(900000,1000000000). "567%$^";
        $candidate_info->gender = $request->gender;
        $candidate_info->emirates = $request->emirates;
        $candidate_info->marital_status = $request->marital_status;
        $candidate_info->spoken_language = $request->spoken_lang;
        $candidate_info->experience = $request->experince;
        $candidate_info->address = $request->address;
        
        $timestamp = strtotime($request->request_date);
        $day = date('D', $timestamp);
        if($day == "Sat" || $day == "Fri"){
            return redirect()->route('candidate.account')->with('success','You cannot book exam on Friday or Saturday');
        }
        
        
        $candidate_info->request_date = $request->request_date;
        $candidate_info->post_code = $request->postcode;
        $candidate_info->auth_approval_id = $request->approval_id;
        if($request->approval_id == null){
            $candidate_info->auth_approval_id = $candidate_info->approval_id;
        }

        // dd($candidate_info);
        $candidate_info->save();

        return redirect()->route('candidate.account')->with('success','Account details has been updated');


    }

    public function setAuthID(Request $request){

        $cand_info = CandidateInformation::where('candidate_id',$request->id)->first();

        $cand_info->auth_approval_id = $request->auth_id;
        $cand_info->save();

        $response = array(

            'status' => 'success',
            'msg'    => 'Success',
        );

        return json_encode($response);
    }

    public function Notifications(){
        $notifications = Notification::all();
        return view('candidates.notifications.index',[
            'notifications' => $notifications
        ]);
    }
    
    public function showNotification($id){
        $notification = Notification::find($id);
        return view('candidates.notifications.show',[
            'notification' => $notification
        ]);
    }
}
