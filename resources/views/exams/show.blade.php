@extends('layouts.app')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
                <div class="card">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h3>Examination</h3>
                        <p>Welcome Exam Admin</p>

                    </div>

                </div>

                <table id="examTable" class="table table-striped table-bordered" >
                    <thead>
                        <tr>
                            <th>Exam ID</th>
                            <th>Exam Name</th>
                            <th>Duration</th>
                            <th>Question Type</th>
                            <th>Passing Marks</th>
                            <th>Exam Price</th>


                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$exam->id}}</td>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->duration}}</td>
                            <td>{{$exam->select_question_type}}</td>
                            <td>{{$exam->passing_marks}}</td>
                            <td>{{$exam->price_of_exam}}</td>

                        </tr>
                    </tbody>

                </table>
            </div>
            </div>
        </div>
   </div>
</div>
@endsection