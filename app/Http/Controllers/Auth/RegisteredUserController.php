<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CandidateInformation;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyCandidateEmail;
use App\Models\RoleUser;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function candidateRegister()
    {
        return view('candidates.auth.register');
    }

    public function invigilatorRegister()
    {
        return view('invigilator.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {


        if($request->role == "candidate"){
            $request->validate([
                'fname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'profile_pic' => 'mimes:jpg,png,jpeg',
            ]);

            if($request->email == $request->username){
                $password = rand(100000,999999);
                $password1 = Hash::make($password);
                $user = User::create([
                    'name' => $request->fname,
                    'email' => $request->email,
                    'password' => $password1,
                    'role' => 'candidate',

                ]);
                if(!empty($request->profile_pic)){
                    $avatar = $request->profile_pic;
                    $avatar_name = $avatar->getClientOriginalName();
                    $ava_name = time() . $avatar_name;
                    $ava_attachment = $avatar->move(storage_path() . '/app/public/', $ava_name);
                    $us = User::where('id',$user->id)->first();
                    $us->avatar = $ava_name;
                    $us->save();
                }
                $candidate_other_info = new CandidateInformation();
                $candidate_other_info->candidate_id = $user->id;
                $candidate_other_info->fname = $request->fname;
                $candidate_other_info->lname = $request->lname;
                $candidate_other_info->username = $request->username;
                $candidate_other_info->nationality = $request->country;

                $candidate_other_info->save();

                $role_user = new RoleUser();
                $role_user->role_id = $request->role_id;
                $role_user->user_id = $user->id;
                $role_user->save();

                Mail::to($user->email)->send(new VerifyCandidateEmail($password));

                return redirect()->route('login')->with('success','Please Check your email. we have sent you a password');
            }else{
                return redirect()->route('candidate.register')->with('success','Please Enter both email and username same');
            }



        }else if($request->role == "invigilator"){
            $request->validate([
                'fname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'profile_pic' => 'mimes:jpg,png,jpeg',
            ]);


                // $password = rand(100000,999999);
                // $password1 = Hash::make($password);
                $user = User::create([
                    'name' => $request->fname,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => 'invigilator',

                ]);
                if(!empty($request->profile_pic)){
                    $avatar = $request->profile_pic;
                    $avatar_name = $avatar->getClientOriginalName();
                    $ava_name = time() . $avatar_name;
                    $ava_attachment = $avatar->move(storage_path() . '/app/public/', $ava_name);
                    $us = User::where('id',$user->id)->first();
                    $us->avatar = $ava_name;
                    $us->save();
                }


                $role_user = new RoleUser();
                $role_user->role_id = $request->role_id;
                $role_user->user_id = $user->id;
                $role_user->save();

                // Mail::to($user->email)->send(new VerifyCandidateEmail($password));

                return redirect()->route('login')->with('success','Please Login now');




        }
        else{// admin

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|confirmed|min:8',
            ]);

            Auth::login($user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'admin'
            ]));

            $role_user = new RoleUser();
            $role_user->role_id = 1;
            $role_user->user_id = $user->id;
            $role_user->save();

            event(new Registered($user));

            return redirect(RouteServiceProvider::HOME);
        }


    }

    public function checkEmail(Request $request){

        $user = User::where('email',$request->email)->first();

        if(!empty($user)){

            $response = array(

            'status' => 'success',
            'msg'    => 'Email Exists',
        );

        return json_encode($response);
        }
    }
}
