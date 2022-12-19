@extends('layouts.app')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
        <div class="container">
        <div class="card">
            <div class="row mt-5 ml-5">
                <div class="col-12">
                    <h2>Settings</h2>
                    <h4 class="update_settings">Update Settings</h4>
                </div>

            </div>
            <div class="row mt-5 ml-5">
                <div class="col-12">
                    <div class="row text-center">
                        <!-- <div class="col-2">
                            <a href=""><i class="fa fa-tv settings_icons"></i></a>
                        </div> -->
                        <div class="col-2">
                            <a href="{{ route('setting.writeemail') }}"><i class="fa fa-paper-plane settings_icons"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('setting.candidateactivity') }}"><i class="fa fa-users settings_icons"></i></a>
                        </div>
                        <!-- <div class="col-2">
                            <a href=""><img src="{{ asset('/images/shield.png') }}" alt="" width="100" height="100"></a>
                        </div> -->
                         <div class="col-2">
                            <a href="{{ route('setting.myaccount') }}"><i class="fa fa-user settings_icons"></i></a>
                        </div> 
                        <div class="col-2">
                            <a href="{{ route('candidate.paymentsettings') }}"><i class="fa fa-dollar settings_icons"></i></a>
                        </div>


                    </div>
                    <div class="row mt-3 text-center">
                        <!-- <div class="col-2">
                            <a href="" class="text-center setting_text">Exam Monitor</a>
                        </div> -->
                        <div class="col-2">
                            <a href="{{ route('setting.writeemail') }}" class="text-center setting_text">Send Emails</spana>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('setting.candidateactivity') }}" class="text-center setting_text">Candidate Activity</a>
                        </div>
                        <!-- <div class="col-2">
                            <a href="" class="text-center setting_text">Exam Security</a>
                        </div> -->
                        <div class="col-2">
                            <a href="{{ route('setting.myaccount') }}" class="text-center setting_text">My Account</a>
                        </div> 
                        <div class="col-2">
                            <a href="{{ route('candidate.paymentsettings') }}" class="text-center setting_text">Payment Account Settings</a>
                        </div>


                    </div>
                </div>

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


        </div>
        </div>

        </div>
   </div>
</div>

@endsection