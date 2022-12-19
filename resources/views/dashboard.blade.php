@extends('layouts.app')

@section('content')
<?php $cand_exams = App\Models\CandidateExam::where('candidate_status','Approved')->distinct()->get();
	$i = 0;
?>
@foreach($cand_exams as $cand_exam)
<?php $request_date = App\Models\CandidateInformation::where('candidate_id',$cand_exam->candidate_id)->select('candidate_information.request_date')->first();
	$candidate_name = App\Models\User::where('role','candidate')->where('id',$cand_exam->candidate_id)->select('users.name')->first();
	$exam_name = App\Models\Exam::where('status','on')->where('id',$cand_exam->exam_id)->select('exams.name')->first();

?>
<input type="hidden" id="request_date<?php echo $i; ?>" name="request_date[]" value="{{ $request_date->request_date }}">
<input type="hidden" id="candidate_name<?php echo $i; ?>" name="candidate_name[]" value="{{ $candidate_name->name }}">
<input type="hidden" id="exam<?php echo $i; ?>" name="exams[]" value="{{ $exam_name->name }}">
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
					<div class="row mt-5">
						<div class="col-12">
							<h2>Welcome Exam Admin</h2>
							<h4 class="update_settings">Candidate Request for Approval</h4>
				<h2>Pending Approvals</h2>
				<table id="examTable" class="table table-striped table-bordered mt-5">
                        <thead>
						<tr>
                                <th>ID</th>
                                <th>Name</th>

                                <th>Request Date</th>
								<th>Documents</th>
								<th>Action</th>


                            </tr>
                        </thead>
						@foreach($pending_candidates as $pending_candidate)
                        <tbody>
                            <tr>

								<td>CAN {{ $pending_candidate->id }}</td>
								<td>{{ $pending_candidate->name }}</td>
								<td>{{ $pending_candidate->request_date }}</td>

								<td>
								@if($pending_candidate->emirates_attachs != NULL)
								<a href="{{ route('candidate.downloadattachment',$pending_candidate->emirates_attachs) }}">Emirates</a>&nbsp;|&nbsp;
								@endif
								@if($pending_candidate->emirates_attachs != NULL)
								<a href="{{ route('candidate.downloadattachment',$pending_candidate->passport_attachs) }}">Passport</a>&nbsp;|&nbsp;
								@endif
								@if($pending_candidate->emirates_attachs != NULL)
								<a href="{{ route('candidate.downloadattachment',$pending_candidate->photo_attachs) }}">Picture</a>&nbsp;|&nbsp;
								@endif
								@if($pending_candidate->emirates_attachs != NULL)
								<a href="{{ route('candidate.downloadattachment',$pending_candidate->qualification_attachs) }}">Qualification</a>
								@endif
								</td>
								<td>
								<a href="{{ route('show.pending.cands',$pending_candidate->candidate_id) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
								</td>
								<!-- modal for approval -->
								<div class="modal fade"  id="selectexams<?php echo $pending_candidate->candidate_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Alot Exam to candidate</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{ route('candidate.approveCandidate',$pending_candidate->candidate_id) }}" method="POST" enctype="multipart/form-data">
												@csrf
												<input type="hidden" name="candi_id" id="candi_id" value="">
												<?php $exams = App\Models\Exam::all(); ?>
												<label for="exams">Exams</label>
												<select name="exams" id="exams" class="form-control">
												@foreach($exams as $exam)
												<?php
												    $ex = App\Models\Exam::join('candidate_exams','candidate_exams.exam_id','exams.id')
                                                    ->join('users','users.id','candidate_exams.candidate_id')
                                                    ->where('candidate_exams.candidate_status',"Approved")
                                                    ->where('candidate_exams.exam_take_status',"Not Taken")
                                                    ->where('users.id',$pending_candidate->candidate_id)
                                                    ->first();


												?>

												@if(!empty($ex))
												@if($ex['exam_id'] != $exam->id && $ex['exam_take_status'] != "Taken")
												<option value="{{$exam->id}}">{{$exam->name}}</option>
											    @endif
												@else
												<option value="{{$exam->id}}">{{$exam->name}}</option>

												@endif
												@endforeach
												</select>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Alot Exam</button>
											</div>
											</form>
										</div>
									</div>
								</div>


								<!-- modal for rejection -->
								<div class="modal fade"  id="rejection<?php echo $pending_candidate->candidate_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Reject Candidate</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{route('candidate.rejectCandidate',$pending_candidate->candidate_id)}}" method="POST" enctype="multipart/form-data">
											@csrf
											<input type="hidden" name="candiii_id" id="candi_id" value="">
												<label for="comments">Comments</label>
												<textarea name="rejected" class="form-control" id="rejected" cols="30" rows="10"></textarea>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Rejected</button>
											</div>
											</form>
										</div>
									</div>
								</div>

									<!-- modal for asking more documents -->
						<form>
						@csrf
							<div class="modal fade"  id="moredocus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Ask for more documents</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>

											<div class="modal-body">
												<input type="hidden" name="candii_id" id="candii_id" value="">
												<label for="subject">Subject:</label>
												<input type="text" id="subject" class="form-control" name="subject" value="">
												<label for="message">Message</label>
												<textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" onclick="askForDocuments(<?php echo  $pending_candidate->candidate_id?>)" class="btn btn-primary">Send Message</button>
											</div>

									</div>
								</div>
							</div>
					</form>
                            </tr>
                        </tbody>
						@endforeach
					</table>

					{{ $pending_candidates->links() }}
						</div>

					</div>


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
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Calendar</h4>

						</div>
						<!--Page-Header-->

						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										 <div id='calendar1'></div>
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