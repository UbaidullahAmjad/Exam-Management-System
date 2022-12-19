@extends('layouts.invigilator')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
        <div class="container">
            <div class="card">
            <div class="row mt-5 ml-5">
                <div class="col-6">
                    <h2>Report</h2>
                </div>
               

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                <table id="notificationTable" class="table table-striped table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Candidate Name</th>
                                <th>Exam</th>
                                <th>Exam Date</th>
                                <th>Exam Status</th>
                              
                            </tr>
                        </thead>
                        @foreach($cand_exam as $c)
                        <?php
                             $exam = App\Models\Exam::find($c->exam_id);
                            $candidate = App\Models\User::find($c->candidate_id);
                            // dd($candidate);
                        ?>
                        <tbody>
                            <tr>
                                <td>{{ $candidate->name}}</td>
                                <td>{{$exam->name}}</td>
                                <td>{{$c->exam_date}}</td>
                                <td>{{$c->exam_take_status}}</td>
                                


                            </tr>
                        </tbody>
                        @endforeach
                    </table>
            </div>
        </div>

        </div>
   </div>
</div>

@endsection