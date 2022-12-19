@extends('layouts.app')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
        <div class="container">
            <div class="card">
            <div class="row mt-5 ml-5">
                <div class="col-6">
                    <h2>View Question</h2>
                </div>


            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                <table id="examTable" class="table table-striped table-bordered mt-5">
                            <?php $exam = App\Models\Exam::find($question->exam_id); 
                            //  $question_description = explode("--",$question->description);
                            //  $question_description = str_replace("&nbsp;","",$question_description[1]);
                            ?>
                            <tr>
                                <th>Question ID</th>
                                <td>{{$question->id}}</td>
                            </tr>
                            <tr>
                                <th>Question</th>
                                <td>{!! html_entity_decode($question->description) !!}</td>
                            </tr>
                            <tr>
                                <th>Exam Title</th>
                                <td>{{$exam->name}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$question->status}}</td>
                            </tr>
                            <tr>
                                <th>Question Marks</th>
                                <td>{{$question->question_marks}}</td>
                            </tr>
                            <tr>
                                <th>Explaination</th>
                                <td>{{$question->explanation}}</td>
                            </tr>
                            <tr>
                                <th>Publish Draft</th>
                                <td>{{$question->publish_draft}}</td>
                            </tr>


                    </table>
            </div>
        </div>

        </div>
   </div>
</div>

@endsection