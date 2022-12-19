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
                <div class="row">
                    <div class="col-6">
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
                                        <td> <form action="{{ route('admin.datechange',$candidate->id) }}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <input type="date" class="form-control" name="request_date_e" id="request_date" value="{{ $candidate_info->request_date }}">
                                            <input type="hidden" id="exam_id" name="exam_id" value="{{ $exam->id }}" >
                                            <button type="submit" class="btn btn-success">Change Date</button>
                                            </form></td>
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


                            </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                        <h3 class="text-center mt-5 mb-5"><b>Exam Information</b></h3>
                            <table class="table">
                                <tr>
                                    <th>Exam</th>
                                    <td>{{ $exam->name }}</td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td>{{ $exam->duration }} minutes</td>
                                </tr>
                                <tr>
                                    <th>Exam Status</th>
                                    @if($exam->status == "on")
                                    <td>Active</td>
                                    @else
                                    <td>Not Active</td>
                                    @endif
                                </tr>
                                <tr>
                                    <th>Question Type</th>
                                    <td>{{ $exam->select_question_type }}</td>
                                </tr>
                                <tr>
                                    <th>Show Result in</th>
                                    <td>{{ $exam->percentage }}</td>
                                </tr>
                                <tr>
                                    <th>Result Type</th>
                                    <td>{{ $exam->result_type }}</td>
                                </tr>
                                <tr>
                                    <th>Record Audio or Video</th>
                                    <td>{{ $exam->record_audio_or_video }}</td>
                                </tr>
                                <tr>
                                    <th>Passing</th>
                                    <td>{{ $exam->passing_marks}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-2 mb-5">
                                <a href="{{ route('dashboard') }}"  class="btn btn-info" >Go To Dashboard</a>

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