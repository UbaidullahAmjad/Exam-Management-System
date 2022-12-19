<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\NotificationAttachment;
use App\Mail\SendNotificationToCandidate;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class NotificationController extends Controller
{
    public function index(){
        $notifications = Notification::paginate(10);
        return view('notifications.index',[
            'notifications' => $notifications
        ]);
    }

    public function create(){
        return view('notifications.create');
    }

    public function store(Request $request){
       
        $request->validate([

            'files.*' => 'mimes:docx,jpg,pdf,png,jpeg',
            'subject' => 'required',
            'notification' => 'required',
            'notification_group' => 'required',
        ]);
        if($request->notification_group == "All"){
            $candidates = User::where('role','candidate')->get();
            foreach($candidates as $candidate){

                $email = new SendNotificationToCandidate($candidate->name,$request->subject,$request->notification);
                Mail::to($candidate->email)->send($email);
            }
        }else if($request->notification_group == "Selected"){
            $cand_array = $request->cand;

            for($i = 0;$i < count($request->cand);$i++){
                $cand = User::find($cand_array[$i]);
                // dd($cand);
                $email = new SendNotificationToCandidate($cand->name,$request->subject,$request->notification);
                Mail::to($cand->email)->send($email);
            }
        }

        $notification = new Notification();
        $notification->subject = $request->subject;
        $notification->description = $request->notification;
        $notification->all_active = $request->notification_group;
        $notification->email_notification = "on";

        $notification->save();

        $files = $request->files;
        $i = 0;
        $j = 0;
        foreach($files as $file){
            foreach($file as $f){
                // dd($f);
                if($i < count($file)){

                    $name = $f->getClientOriginalName();

                    $fileName = time() . $name;
                    $attachment = $f->move(storage_path() . '/app/public/', $fileName);

                    $notification_attachment = new NotificationAttachment();
                    $notification_attachment->notification_id = $notification->id;
                    $notification_attachment->attachment = $attachment;

                    $notification_attachment->save();
                }

                $i++;
            }


        }

        return redirect()->route('notification.index')->with('success','Notification has been created');


    }

    public function edit($id){
        $notification = Notification::find($id);
        
        return view('notifications.edit',[
            'notification' => $notification
        ]);
    }


    public function update(Request $request,$id){

        $request->validate([

            'files.*' => 'mimes:docx,jpg,pdf,png,jpeg',
            'subject' => 'required',
            'notification' => 'required',
            'notification_group' => 'required',
        ]);
        // dd($request->all());
        if($request->notification_group == "All"){
            $candidates = User::where('role','candidate')->get();
            foreach($candidates as $candidate){

                $email = new SendNotificationToCandidate($candidate->name,$request->subject,$request->notification);
                Mail::to($candidate->email)->send($email);
            }
        }else if($request->notification_group == "Selected"){
            $cand_array = $request->cand;
            if(!empty($cand_array)){
                for($i = 0;$i < count($request->cand);$i++){
                $cand = User::find($cand_array[$i]);
                // dd($cand);
                $email = new SendNotificationToCandidate($cand->name,$request->subject,$request->notification);
                Mail::to($cand->email)->send($email);
                }
            }else{
                return redirect()->route('notification.create')->with('success','Please select atleast one checkbox if click on selected group');
            }

        }

        $notification = Notification::find($id);
        $notification->subject = $request->subject;
        $notification->description = $request->notification;
        $notification->all_active = $request->notification_group;
        $notification->email_notification = "on";

        $notification->save();

        $notification_attachments = NotificationAttachment::where('notification_id',$id)->get();
            // dd(count($notification_attachments));
        $files = $request->files;
        $i = 0;
        foreach($files as $file){
            foreach($file as $f){

                if($i < count($file)){

                    // if(count($notification_attachments) > )
                    if($i < count($notification_attachments)){
                        $notification_attachment = $notification_attachments[$i];
                    }else{
                        $notification_attachment = new NotificationAttachment();
                    }
                    // dd(($notification_attachment->attachment));
                    if (file_exists($notification_attachment->attachment)) {

                        unlink($notification_attachment->attachment);
                    }
                    $name = $f->getClientOriginalName();

                    $fileName = time() . $name;
                    $attachment = $f->move(storage_path() . '/app/public/', $fileName);
                    $notification_attachment->notification_id = $notification->id;
                    $notification_attachment->attachment = $attachment;

                    $notification_attachment->save();

                }

                $i++;
            }


        }

        return redirect()->route('notification.index')->with('success','Notification has been updated');


    }


    public function destroy($id){
        $notification_attachments = NotificationAttachment::where('notification_id',$id)->get();
        foreach($notification_attachments as $notification_attachment){
            unlink($notification_attachment->attachment);
            $notification_attachment->delete();
        }

        $notification = Notification::find($id);
        $notification->delete();

        return redirect()->route('notification.index')->with('success','Notification has been deleted');
    }
}
