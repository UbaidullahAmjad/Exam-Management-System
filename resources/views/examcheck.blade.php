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
 <?php 
 $exam1 = App\Models\CandidateExam::where('candidate_id',auth()->user()->id)->where('exam_id',$id)->orderBy('candidate_exams.id','desc')->get();
            
          if($exam1[0]->exam_take_status == "Taken"){
                return redirect()->route('candidate.exam.showresult',$id);
             
          }
          else 
          {
              return redirect()->route('candidate.exam.takeexam',$id);
             
          }
 
 ?>

 </head>

 <body style="background:#14a0bb;font-size: 18px;">



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>