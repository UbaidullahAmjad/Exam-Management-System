@extends('layouts.candidate')
@section('script')
<script>

</script>


@endsection
@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="container">
            <div class="card">

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h3>Examination History</h3>

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
                            <th>Pass/Fail</th>
                            <!-- <th>See Result</th> -->

                        </tr>
                    </thead>
                    @foreach($exams as $exam)
                    <tbody>
                    <?php $question_answers = App\Models\QuestionAnswer::where('exam_id',$exam->id)->first();
                        $cand_exam = App\Models\CandidateExam::where('candidate_id',auth()->user()->id)
                        ->where('exam_id',$exam->id)
                        ->where('exam_take_status',"Taken")->first();
                    ?>
                        <tr>
                            <td>{{$exam->id}}</td>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->duration}}</td>
                            <td>{{$exam->select_question_type}}</td>
                            <td>
                            <p>Taken</p>
                            </td>
                            @if(isset($cand_exam->exam_result_status))
                            <td>{{ $cand_exam->exam_result_status }}</td>
                            @else
                            <td>N/A</td>
                            @endif
                            <!-- <td>
                                <a href="{{ route('candidate.exam.showresult',$exam->id) }}" class="btn btn-info"><i class="fa fa-eye" title="View Result"></i></a>
                            </td> -->


                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
   </div>
</div>

<script>
// (function (global) {

//     if(typeof (global) === "undefined") {
//         throw new Error("window is undefined");
//     }

//     var _hash = "!";
//     var noBackPlease = function () {
//         global.location.href += "#";

//         // Making sure we have the fruit available for juice (^__^)
//         global.setTimeout(function () {
//             global.location.href += "!";
//         }, 5);
//     };

//     global.onhashchange = function () {
//         if (global.location.hash !== _hash) {
//             global.location.hash = _hash;
//         }
//     };

//     global.onload = function () {
//         noBackPlease();

//         // Disables backspace on page except on input fields and textarea..
//         document.body.onkeydown = function (e) {
//             var elm = e.target.nodeName.toLowerCase();
//             if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
//                 e.preventDefault();
//             }
//             // Stopping the event bubbling up the DOM tree...
//             e.stopPropagation();
//         };
//     }
// })(window);




 document.onmousedown=disableclick;status="You can't inspect this";function disableclick(event){ if(event.button==2) { alert(status); return false; }}



            // $(document).ready( function () {
            //     $('#examTable').DataTable();
            // } );
        //   window.onbeforeunload = function() { return false; };

        </script>
@endsection