@extends('layouts.candidate')

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
                    <table class="table">
                        <tr>
                            <th>Subject</th>
                            <td>{{ $notification->subject }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $notification->description }}</td>
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