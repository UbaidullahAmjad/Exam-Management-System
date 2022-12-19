@extends('layouts.candidate')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
                <div class="card">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h3>Approved Exams</h3>

                    </div>

                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="examTable" class="table table-striped table-bordered" >
                    <thead>
                        <tr>
                            <th>Exam ID</th>
                            <th>Exam Name</th>
                            <th>Duration</th>
                            <th>Questions</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>EEL 01</td>
                            <td>Islamiyat</td>
                            <td>2h</td>
                            <td>100</td>
                            <td><a class="btn btn-info" href="{{ route('candidate.exam.instructions',$exam->id) }}"><i class="fas fa-dollar-sign"></i>Take Exam</a>


                            </td>
                        </tr>
                    </tbody>

                </table>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection