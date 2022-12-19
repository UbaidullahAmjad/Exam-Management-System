@extends('layouts.app')

@section('content')

<div class="page">
			<div class="page-main h-100">

				<!--App-Content-->
				<div class="app-content">

				<div class="container">
				<div class="card">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
				@endif
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

                            <td>
                            <form action="{{ route('admin.datechange',$candidate->id) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="date" class="form-control" name="request_date" id="request_date" value="{{ $candidate_info->request_date }}">
                            <button type="submit" class="btn btn-success">Change Date</button>
                            </form>
                            </td>
                        </tr>
                        <tr>
                            <th>Emirates Attachment</th>
                            @if(!empty($candidate_info->emirates_attachs))
                            <td><a href="{{ route('candidate.downloadattachment',$candidate_info->emirates_attachs) }}">Download Emirates Attachment</a></td>
                            @endif
                        </tr>
                        <tr>
                            <th>Passport Attachment</th>
                            @if(!empty($candidate_info->passport_attachs))
                            <td><a href="{{ route('candidate.downloadattachment',$candidate_info->passport_attachs) }}">Download Passport Attachment</a></td>
                            @endif
                        </tr>
                        <tr>
                            <th>Photo Attachment</th>
                            @if(!empty($candidate_info->photo_attachs))
                            <td><a href="{{ route('candidate.downloadattachment',$candidate_info->photo_attachs) }}">Download Photo Attachment</a></td>
                            @endif
                        </tr>
                        <tr>
                            <th>Qualification Attachment</th>
                            @if(!empty($candidate_info->qualification_attachs))
                            <td><a href="{{ route('candidate.downloadattachment',$candidate_info->qualification_attachs) }}">Download Qualification Attachment</a></td>
                            @endif
                        </tr>
                    </table>


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