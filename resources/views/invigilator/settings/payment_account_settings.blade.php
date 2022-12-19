@extends('layouts.app')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
                <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
				@endif
                    <form action="{{ route('candidate.setpaymentsettings') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(count($account_setting) > 0)
                        <label for="stripe_key">Stripe Key</label>
                        <input type="text" class="form-control" value="{{ $account_setting[0]->stripe_key }}" name="stripe_key" id="stripe_key">
                        <label for="stripe_secret">Stripe Secret</label>
                        <input type="text" class="form-control" value="{{ $account_setting[0]->stripe_secret }}" name="stripe_secret" id="stripe_secret">

                        <button type="submit" class="btn btn-success mt-5">Update Details</button>
                        <a href="{{ route('setting.index')}}" class="btn btn-info mt-5">Go to Settings</a>
                        @else
                        <label for="stripe_key">Stripe Key</label>
                        <input type="text" class="form-control" value="" name="stripe_key" id="stripe_key">
                        <label for="stripe_secret">Stripe Secret</label>
                        <input type="text" class="form-control" value="" name="stripe_secret" id="stripe_secret">

                        <button type="submit" class="btn btn-success mt-5">Update Details</button>
                        
                        
                        @endif
                    </form>
                </div>
            </div>
        </div>
   </div>
</div>




@endsection