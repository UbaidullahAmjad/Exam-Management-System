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
                            <h3 class="text-center mt-5 mb-5"><b>Candidate Information</b></h3>
                                <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $candidate->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $candidate->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>DOB</th>
                                        <td>{{ $candidate_info->dob }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ $candidate_info->gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Marital_status</th>
                                        <td>{{ $candidate_info->marital_status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $candidate_info->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Experience</th>
                                        <td>{{ $candidate_info->experience }}</td>
                                    </tr>
                                    <tr>
                                        <th>Request Date</th>
                                        <td>{{ $candidate_info->request_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Approval ID</th>
                                        <td>{{ $candidate_info->auth_approval_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Emirates Attachment</th>
                                        @if(!empty($candidate_info->emirates_attachs))
                                        <td><a href="{{ route('candidate.downloadattachment',$candidate_info->emirates_attachs) }}" style="color:blue"><u>Download Emirates Attachment</u></a></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Passport Attachment</th>
                                        @if(!empty($candidate_info->passport_attachs))
                                        <td><a href="{{ route('candidate.downloadattachment',$candidate_info->passport_attachs) }}" style="color:blue"><u>Download Passport Attachment</u></a></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Photo Attachment</th>
                                        @if(!empty($candidate_info->photo_attachs))
                                        <td><a href="{{ route('candidate.downloadattachment',$candidate_info->photo_attachs) }}" style="color:blue"><u>Download Photo Attachment</u></a></td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Qualification Attachment</th>
                                        @if(!empty($candidate_info->qualification_attachs))
                                        <td><a href="{{ route('candidate.downloadattachment',$candidate_info->qualification_attachs) }}" style="color:blue"><u>Download Qualification Attachment</u></a></td>
                                        @endif
                                    </tr>
                                </table>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                    <div class="col-1"></div>
                                    <div class="col-1">
                                        <button id="approved" name="approved" value="Approved" data-toggle="modal" data-target="#selectexams<?php echo $candidate->id ?>" class="badge badge-success">Approved</button>
                                    </div>
                                    <div class="col-1">
                                        <button id="rejected" value="Rejected" data-toggle="modal" data-target="#rejection<?php echo $candidate->id ?>"  class="badge badge-danger" >Rejected</button>
                                    </div>
                                    <div class="col-1">
                                        <button id="document" value="document" data-toggle="modal"  data-target="#moredocus" title="Ask for more documents"  class="badge badge-info"  ><i class="fa fa-paperclip"></i></button>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
</div>


<!-- modal for approval -->
								<div class="modal fade"  id="selectexams<?php echo $candidate->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Alot Exam to candidate</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{ route('candidate.approveCandidate',$candidate->id) }}" method="POST" enctype="multipart/form-data">
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
                                                    ->where('users.id',$candidate->id)
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
								<div class="modal fade"  id="rejection<?php echo $candidate->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Reject Candidate</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{route('candidate.rejectCandidate',$candidate->id)}}" method="POST" enctype="multipart/form-data">
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
												<button type="button" onclick="askForDocuments(<?php echo  $candidate->id?>)" class="btn btn-primary">Send Message</button>
											</div>

									</div>
								</div>
							</div>
					</form>

@endsection