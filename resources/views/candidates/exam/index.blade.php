@extends('layouts.candidate')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
            <div class="card">

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h3>Examinations</h3>


                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="examTable" class="table table-striped table-bordered text-center" >
                    <thead>
                        <tr>
                            <th>Exam ID</th>
                            <th>Exam Name</th>
                            <th>Duration</th>
                            <th>Questions</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 0; ?>
                    @foreach($exams as $exam)
                    <tbody>
                    <?php $question_answers = App\Models\QuestionAnswer::where('exam_id',$exam->id)->where('candidate_id',auth()->user()->id)->where('attempted',"No")->orWhere('attempted',"NULL")->first();
                        

                    ?>
                        <tr>
                            <td>{{$exam->id}}</td>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->duration}}</td>
                            <td>{{$exam->select_question_type}}</td>
                            <td>
                            @if($candidate_exam_status[$i]->payment_status == "Paid" && $question_answers != NULL)
                            <p>{{$candidate_exam_status[$i]->exam_take_status}}</p>
                            @else
                            <p>{{$candidate_exam_status[$i]->exam_take_status}}</p>
                            @endif
                            <td>
                            @if($candidate_exam_status[$i]->payment_status == "Paid" && $question_answers != NULL)
                            <a class="btn btn-info" href="{{ route('addmoney.paystripe',$exam->id) }}" style="display: none;"><i class="fas fa-dollar-sign"></i>Make Payment</a>
                            <a class="btn btn-info" href="{{ route('candidate.exam.instructions',$exam->id) }}" style="display: none;"><i class="fas fa-dollar-sign"></i>Take Exam</a>
                            <p class="text-center">No Action</p>
                            @elseif($candidate_exam_status[$i]->payment_status == NULL && $question_answers == NULL)
                            
                            <a class="btn btn-info" href="{{ route('candidate.exam.instructions',$exam->id) }}" style="display: none;"><i class="fas fa-dollar-sign"></i>Take Exam</a>
                            <a class="btn btn-info" href="{{ route('addmoney.paystripe',$exam->id) }}" ><i class="fas fa-dollar-sign"></i>Make Payment</a>

                            @elseif($candidate_exam_status[$i]->payment_status == "Paid" && $question_answers == NULL)

                            <a class="btn btn-info" href="{{ route('candidate.exam.instructions',$exam->id) }}" ><i class="fas fa-dollar-sign"></i>Take Exam</a>

                            @endif
                            </td>

                        </tr>
                    </tbody>
                    <?php $i++; ?>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
   </div>
</div>
@endsection