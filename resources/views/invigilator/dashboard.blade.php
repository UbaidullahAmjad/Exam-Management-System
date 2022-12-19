@extends('layouts.invigilator')

@section('content')
<?php $cand_exams = App\Models\CandidateExam::where('candidate_status','Approved')->distinct()->get();
	$i = 0;
?>
@foreach($cand_exams as $cand_exam)
<?php $request_date = App\Models\CandidateInformation::where('candidate_id',$cand_exam->candidate_id)->select('candidate_information.request_date')->first();
	$candidate_name = App\Models\User::where('role','candidate')->where('id',$cand_exam->candidate_id)->select('users.name')->first();
	$exam_name = App\Models\Exam::where('status','on')->where('id',$cand_exam->exam_id)->select('exams.name')->first();
	$exam_status = App\Models\CandidateExam::find($cand_exam->id);

?>
<input type="hidden" id="request_date<?php echo $i; ?>" name="request_date[]" value="{{ $request_date->request_date }}">
<input type="hidden" id="candidate_name<?php echo $i; ?>" name="candidate_name[]" value="{{ $candidate_name->name }}">
<input type="hidden" id="exam<?php echo $i; ?>" name="exams[]" value="{{ $exam_name->name }}">
<input type="hidden" id="status<?php echo $i; ?>" name="status[]" value="{{ $exam_status->exam_take_status }}">
<?php $i++; ?>
@endforeach
<input type="hidden" name="count" id="count" value="{{ count($cand_exams) }}">

<div class="page">
			<div class="page-main h-100">

				<!--App-Content-->
				<div class="app-content">
				@if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
				@endif
				<div class="container">
				<div class="card">



					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Calendar</h4>

						</div>
						<!--Page-Header-->
						<div class="">
							<p><span style="width:10px;height:10px;border-radius:30px;background-color:green;color:green;display: inline-block;"></span> Candidate Exam Taken</p>
							<p><span style="width:10px;height:10px;border-radius:30px;background-color:red;color:red;display: inline-block;"></span> Candidate Exam Pending</p>

						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										 <div id='calendar2'></div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										 <div id='calendar'></div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>

				<!--Page-Header-->


					<div>
					<?php $exams = App\Models\Exam::all();
						$k=0;
						foreach($exams as $exam){
							$conduct_datetime = explode(" ",$exam->conduct_time);
							$conduct_date = $conduct_datetime[0];

							?>
							<input type="hidden" id="exam_id" name="exam_ids[]" value="{{ $exam->id }}">
							<input type="hidden" id="exam_name<?php echo $k; ?>" name="exam_name[]" value="{{ $exam->name }}">
							<input type="hidden" id="conduct_date<?php echo $k; ?>" name="conduct_date[]" value="{{ $conduct_date }}">
							<input type="hidden" id="count" name="count" value="{{ count($exams) }}">
						<?php $k++; }
					?>

				</div>

				</div>
				</div>
				</div>
			</div>

			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 text-center">
							Copyright © 2020 <a href="#" class="fs-14 text-primary">Cplus Soft</a>. Designed  by <a href="#" class="fs-14 text-primary"> cplussoft Pvt.Ltd </a>All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!--/Footer-->

		</div>
@endsection