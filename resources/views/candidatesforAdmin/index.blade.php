@extends('layouts.app')

@section('content')

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
						</div>

					</div>

				<table id="examTable" class="table table-striped table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
								<th>Status</th>
								<th>Action</th>

                            </tr>
                        </thead>
						@foreach($candidates as $candidate)
                        <tbody>
                            <tr>

								<td>CAN {{ $candidate->id }}</td>
								<td>{{ $candidate->name }}</td>
								<td>@if($candidate->status == NULL)
										<button id="approved" name="approved" value="Approved" data-toggle="modal" data-target="#selectexams<?php echo $candidate->candidate_id ?>" class="badge badge-success">Approved</button>
										<button id="rejected" value="Rejected" data-toggle="modal" data-target="#rejection<?php echo $candidate->candidate_id ?>"  class="badge badge-danger" >Rejected</button>
									@elseif($candidate->status == "Approved")
										<button id="approved" name="approved" value="Approved" data-toggle="modal" data-target="#selectexams<?php echo $candidate->candidate_id ?>"  class="badge badge-success">Approved</button>
									@elseif($candidate->status == "Rejected")
										<button id="rejected" value="Rejected"  class="badge badge-danger" >Rejected</button>


									@endif
										<button id="document" value="document" data-toggle="modal"  data-target="#moredocus" title="Ask for more documents"  class="badge badge-info"  ><i class="fa fa-paperclip"></i></button>

								</td>

								<td>
								    <a class="btn btn-info" href="{{ route('candidate.show',$candidate->candidate_id) }}"><i title="view candidate" class="fa fa-eye"></i></a>
                                <a class="btn btn-info" href="{{ route('candidate.edit',$candidate->candidate_id) }}"><i title="edit candidate" class="fa fa-edit"></i></a>
                                <a class="btn btn-danger" href="{{ route('candidate.destroy',$candidate->candidate_id) }}"><i title="delete candidate" class="fa fa-trash"></i></a>

								</td>

								<!-- modal for approval -->
								<div class="modal fade"  id="selectexams<?php echo $candidate->candidate_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Alot Exam to candidate</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{ route('candidate.approveCandidate',$candidate->candidate_id) }}" method="POST" enctype="multipart/form-data">
												@csrf
												<input type="hidden" name="candi_id" id="candi_id" value="">
												<?php $exams = App\Models\Exam::where('status','on')->get(); ?>
												<label for="exams">Exams</label>
												<select name="exams" id="exams" class="form-control">
												@foreach($exams as $exam)
												<?php
												    $ex = App\Models\Exam::join('candidate_exams','candidate_exams.exam_id','exams.id')
                                                    ->join('users','users.id','candidate_exams.candidate_id')
                                                    ->where('candidate_exams.candidate_status',"Approved")
                                                    ->where('candidate_exams.exam_take_status',"Not Taken")
                                                    ->where('users.id',$candidate->candidate_id)
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
								<div class="modal fade"  id="rejection<?php echo $candidate->candidate_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Reject Candidate</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{route('candidate.rejectCandidate',$candidate->candidate_id)}}" method="POST" enctype="multipart/form-data">
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
												<button type="button" onclick="askForDocuments(<?php echo  $candidate->candidate_id?>)" class="btn btn-primary">Send Message</button>
											</div>

									</div>
								</div>
							</div>
					</form>
                            </tr>
                        </tbody>
						@endforeach
					</table>
					<div>
						<div id='calendar'></div>
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