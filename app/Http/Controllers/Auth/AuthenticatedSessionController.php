<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ActivityCandidate;
use App\Models\CandidateInformation;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        if(auth()->user()->role == "admin"){
            return redirect()->intended(RouteServiceProvider::HOME);
        }else if(auth()->user()->role == "candidate"){
            $cand_name = "CAN_" .auth()->user()->id ."-". auth()->user()->name;
            $cand_activity = new ActivityCandidate();
            $cand_activity->candidate = $cand_name;
            $cand_activity->activity = "Login to EMS";
            $cand_activity->ip_address = \Request::ip();
            $cand_activity->date = date('Y-m-d H:i:s');
            $cand_activity->save();

            $cand_info = CandidateInformation::where('candidate_id',auth()->user()->id)->first();
            if($cand_info->status == "Approved"){
                return redirect()->route('candidate.exam.index');
            }else{
                return redirect()->route('candidate.account');
            }


        }else if(auth()->user()->role == "invigilator"){
            return redirect()->route('invigilator.dashboard');
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function logout(Request $request)
    {
        $cand_name = "CAN_" .auth()->user()->id ."-". auth()->user()->name;
            $cand_activity = new ActivityCandidate();
            $cand_activity->candidate = $cand_name;
            $cand_activity->activity = "logout";
            $cand_activity->ip_address = \Request::ip();
            $cand_activity->date = date('Y-m-d H:i:s');
            $cand_activity->save();
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();



        return redirect('/login');
    }
}
