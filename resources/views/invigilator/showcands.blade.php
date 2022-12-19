@extends('layouts.invigilator')

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
                <h2>Candidates Who have Taken Exam</h2>
                    <table class="table">
                        <tr>
                            <th>Candidate ID</th>
                            <th>Candidate Name</th>
                            <th>Email</th>
                            <th>Exam</th>
                            <th>Request Date</th>
                            <th>Default Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @if(count($data) > 0)
                            @foreach($data as $d)
                            <?php
                                $candidate = App\Models\User::find($d->candidate_id);
                                $exam = App\Models\Exam::find($d->exam_id);

                                $cand_exam = App\Models\CandidateExam::where('candidate_id',$candidate->id)
                                ->where('exam_id',$exam->id)
                                ->where('exam_take_status',"Taken")->first();

                                $questions = App\Models\Question::where('exam_id',$exam->id)->get();
                                $i = 0;
                                $right = 0;
                                $wrong = 0;
                                foreach($questions as $question){
                                    $question_options = App\Models\QuestionOption::where('question_id',$question->id)->get();
                                    foreach($question_options as $question_option){
                                        $selected = App\Models\QuestionAnswer::where('exam_id',$exam->id)
                                        ->where('candidate_id',$candidate->id)
                                        ->where('question',$question->description)

                                        ->first();
                                        $correct = App\Models\QuestionOption::where('question_id',$question->id)->first();

                                        if($selected->answer == $correct->correct_answer && $selected->answer == $question_option->option){

                                            $right++;
                                        }elseif($selected->answer != $correct->correct_answer && $selected->answer == $question_option->option){

                                            $wrong++;
                                        }
                                    }
                                }
                                $percentage = 0;
                                if(count($questions) > 0){
                                    $percentage = ($right * 100) / count($questions);
                                }
                            ?>
                            <tr>
                                <td>CAN-{{ $candidate->id }}</td>
                                <td>{{ $candidate->name }}</td>
                                <td>{{ $candidate->email }}</td>
                                <td>{{$exam->name }}</td>
                                <td>{{ $request_date }}</td>
                                @if(isset($cand_exam->exam_result_status))
                                <td>{{ $cand_exam->exam_result_status }}</td>
                                @else
                                    @if($percentage > 40)
                                    <td>Pass</td>
                                    @else
                                    <td>Fail</td>
                                    @endif
                                @endif
                                <td>
                                    <form action="{{ route('invigilator.changestatus') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <select id="status" name="status" class="form-control">
                                    @if(isset($cand_exam->exam_result_status))
                                        <option value="{{ $cand_exam->exam_result_status }}" >{{ $cand_exam->exam_result_status }}</option>

                                    @endif
                                        <!-- <option value="Select Status" disabled>Select Status</option> -->
                                        <option value="Pass" >Pass</option>
                                        <option value="Fail">Fail</option>
                                        <option value="Rejected" >Rejected</option>
                                    </select>
                                    <input type="hidden" id="cand_id" name="cand_id" value="{{ $candidate->id }}">
                                    <input type="hidden" id="exam_id" name="exam_id" value="{{ $exam->id }}">
                                    <input type="hidden" id="request_date" name="request_date" value="{{ $request_date }}">

                                    <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea name="comments" class="form-control"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>



                                    </form>
                                </td>
                                <td><a href="{{ route('invigilatorprintcandidateexam',[$exam->id,$candidate->id]) }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                            </tr>
                            @endforeach
                        @else
                        <p class="text-center" style="color: red;">No Record found on {{ $request_date }}</p>
                        @endif



                    </table>

                    <h2 style="margin-top: 80px;">Candidates Who have Not Taken Exam</h2>
                    <table class="table">
                        <tr>
                            <th>Candidate ID</th>
                            <th>Candidate Name</th>
                            <th>Email</th>
                            <th>Exam</th>
                            <th>Request Date</th>

                        @if(count($nottaken) > 0)
                            @foreach($nottaken as $d)
                            <?php
                                $candidate = App\Models\User::find($d->candidate_id);
                                $exam = App\Models\Exam::find($d->exam_id);
                            ?>
                            <tr>
                                <td>CAN-{{ $candidate->id }}</td>
                                <td>{{ $candidate->name }}</td>
                                <td>{{ $candidate->email }}</td>
                                <td>{{$exam->name }}</td>
                                <td>{{ $request_date }}</td>

                            </tr>
                            @endforeach
                        @else
                        <p class="text-center" style="color: red;">No Record found on {{ $request_date }}</p>
                        @endif



                    </table>
                    <div class="row">
                        <div class="col-2">
                                <a href="{{ route('invigilator.dashboard') }}"  class="btn btn-info" >Go To Dashboard</a>

                        </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$('#status').change(function(){
  //this is just getting the value that is selected

  $('.modal').modal('show');
});
</script>

@endsection