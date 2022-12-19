<!DOCTYPE html>

<html lang="en">

 <head>

   <meta charset="utf-8">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <title>Payment</title>

   <!-- Bootstrap -->



<!-- Optional theme -->

<link href="{{ asset('/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
<!-- Latest compiled and minified JavaScript -->



 <style>

 .submit-button {

 margin-top: 10px;

}

 </style>

 </head>

 <body style="background:#14a0bb;font-size: 18px;">

<div class="container">
<div class="card">
<div class='row'>

<div class='col-md-4'></div>

<div class='col-md-4'>
@if ($message = Session::get('success'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @endif
<form class="form-horizontal card" method="POST" id="payment-form" role="form" action="{!!route('addmoney.stripe',$exam_id)!!}" >

{{ csrf_field() }}

<div class='form-row'>

<div class='col-xs-12 form-group required'>

<label class='control-label'>Card Number</label>

<input autocomplete='off' class='form-control card-number' maxlength="16" size="16" type='text' name="card_no">

</div>

</div>

<div class='form-row'>

<div class='col-xs-4 form-group cvc required'>

<label class='control-label'>CVV</label>

<input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvvNumber">

</div>

<div class='col-xs-4 form-group expiration required'>

<label class='control-label'>Expiration</label>

<input class='form-control card-expiry-month' placeholder='MM' size='4' type='text' name="ccExpiryMonth">
</div>

<div class='col-xs-4 form-group expiration required'>
<div class="row">
     <label class='control-label'>&nbsp;Date</label>
</div>
   

<input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="ccExpiryYear">



</div>

</div>

<div class='form-row mb-5'>

<div class='col-md-12'>
<label for="amount">Amount ($)</label>
<input class='form-control card-expiry-year' placeholder='Amount' type='number' name="amount">


</div>

</div>

<div class='form-row'>

<div class='col-md-12 form-group'>

<button class='form-control btn btn-success' type='submit'>Pay »</button>

</div>

</div>

<div class='form-row'>

<div class='col-md-12 error form-group hide'>



</div>

</div>

</form>

</div>

<div class='col-md-4'></div>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>