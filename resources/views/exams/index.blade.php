@extends('layouts.app')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
            <div class="card">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h3>Examinations</h3>
                        <p>Welcome Exam Admin</p>
                        <p>Candidate Request for Approval</p>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('exam.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Create</a>
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
                    @foreach($exams as $exam)
                    <tbody>
                        <tr>
                            <td>ELE {{$exam->id}}</td>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->duration}} minutes</td>
                            <td>{{$exam->select_question_type}}</td>
                            <td><a href="{{ route('exam.edit',$exam->id) }}"><i class="fa fa-edit btn btn-info" title="Edit Examination"></i></a>
                                <a href="{{ route('exam.show',$exam->id) }}"><i class="fa fa-eye btn btn-success" title="View Examination"></i></a>
                                <a href="{{ route('exam.destroy',$exam->id) }}"><i class="fa fa-trash btn btn-danger" title="Delete Examination"></i></a>

                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            </div>
            {{ $exams->links() }}
        </div>
   </div>
</div>
@endsection