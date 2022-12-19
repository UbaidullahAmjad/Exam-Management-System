@extends('layouts.app')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
            <div class="mt-5 ml-5">
                @if($errors->any())
                    {{ implode('', $errors->all(':message')) }}<br>
                    @endif
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
				@endif
        <div class="container">
            <div class="card">
            <h2 class="mt-5 ml-5">Questions</h2>
            <h3 class="ml-5">Welcome Exam Admin</h3>
            <h4 class="ml-5">Add Remove Questions for Examinations </h4>

            <form action="{{ route('question.update', $question->id) }}" enctype="multipart/form-data" class="mt-5 ml-5" method="POST">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="questiontype">Question Type <i class="fa fa-question-circle"></i></label>
                                <select class="form-control" name="questiontype" id="questiontype" required>
                                    <option value="MulipleChoice (RadioButton)">MulipleChoice (RadioButton)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="exam">Exams <i class="fa fa-question-circle"></i></label>
                                <select class="form-control" name="exam_id" id="exam_id" required>
                                    @foreach($exams as $exam)
                                        <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group clearfix">
                        <div class="">
                            <label class="control-label" for="questions">Questions <i class="fa fa-question-circle"></i></label>
                            <textarea id="editor1" value="{{ $question->description }}" name="questioneditor" required>{{ $question->description }}</textarea>

                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label" for="answers">Answer <i class="fa fa-question-circle"></i></label>
                        <div id="options">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="optionA">A
                                    @if($question_options[0]->correct_answer == $question_options[0]->option)
                                    <input type="radio" name="opt" value="A" checked>
                                    @else
                                    <input type="radio" name="opt" value="A">
                                    @endif
                                    </label>
                                    <textarea class="form-control" id="editor2" name="options[]" required>{{ $question_options[0]->option }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="optionB">B
                                    @if($question_options[0]->correct_answer == $question_options[1]->option)
                                    <input type="radio" name="opt" value="B" checked>
                                    @else
                                    <input type="radio" name="opt" value="B">
                                    @endif
                                    </label>
                                    <textarea class="form-control" id="editor3" name="options[]" required>{{ $question_options[1]->option }}</textarea>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label class="control-label" for="optionC">C
                                    @if($question_options[0]->correct_answer == $question_options[2]->option)
                                    <input type="radio" name="opt" value="C" checked>
                                    @else
                                    <input type="radio" name="opt" value="C">
                                    @endif
                                    </label>
                                    <textarea class="form-control" id="editor4" name="options[]" required>{{ $question_options[2]->option }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="optionD">D
                                    @if($question_options[0]->correct_answer == $question_options[3]->option)
                                    <input type="radio" name="opt" value="D" checked>
                                    @else
                                    <input type="radio" name="opt" value="D">
                                    @endif
                                    </label>
                                    <textarea class="form-control" id="editor5" name="options[]" required>{{ $question_options[3]->option }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5 clearfix">
                        <div class="">
                            <div>
                                <button class="control-label" type="button" id="addnewchoice"  for="addnewchoice"><i class="fa fa-plus"></i> Add New Choice</button><br>
                            </div>
                            <div id="addchoiceeditor" class="mt-5" style="display:none">
                                <label class="control-label" for="optionE">E
                            @if(isset($question_options[4]->option))
                                @if($question_options[0]->correct_answer == $question_options[4]->option)
                                    <input type="radio" name="opt" value="E" checked>
                                @else
                                    <input type="radio" name="opt" value="E">
                                @endif
                            @else
                            <input type="radio" name="opt" value="E">
                            @endif

                                </label>
                                @if(isset($question_options[4]->option))
                                <textarea class="form-control" id="editor6" name="options[]">{{ $question_options[4]->option }}</textarea>
                                @else
                                <textarea class="form-control" id="editor6" name="options[]"></textarea>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group clearfix">
                        <div class="row">
                            <div>
                                <input class="control-label form-control" type="button" id="addexplanation" value="+ Add Explanation"  for="addexplanation" readonly><br>
                            </div>
                            <div id="addexplanationeditor" class="mt-5" style="display:none">
                                <textarea class="form-control" id="addexplan" value="{{ $question->explanation }}" name="addexplan"></textarea>
                            </div>
                        </div>
                    </div> -->
                    <!--<div class="form-group clearfix">-->
                        <!--    <div class="row">-->
                        <!--        <div>-->
                        <!--            <input class="control-label form-control" type="button" id="advanceoption" value="+ Advance Option"  for="advanceoption" readonly><br>-->
                        <!--        </div>-->
                        <!--        <div id="advanceoptioneditor" class="mt-5" style="display:none">-->
                        <!--            <textarea class="form-control" id="advanceoptionid" name="advanceoptionname"></textarea>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group clearfix">-->
                        <!--    <div class="row">-->
                        <!--        <span><input type="radio" name="savepublishdraft" value="{{ $question->publish_draft }}">  Save & Publish <i class="fa fa-question-circle"></i></span>&nbsp;&nbsp;-->
                        <!--        <span><input type="radio" name="savepublishdraft" value="{{ $question->publish_draft }}">  Save as Draft <i class="fa fa-question-circle"></i></span>-->
                        <!--    </div>-->
                    <!--</div>-->
                    <input type="hidden" id="saveandclose" name="saveandclose" value="">
                    <input type="hidden" id="saveandnew" name="saveandnew" value="">
                    <div class="form-group clearfix">
                        <div class="row">
                            <span><button id="saveandclose" onclick="saveAndClose()" type="submit" class="btn btn-info"> <i class="fa fa-save"></i> Save & Close </button></span>&nbsp;&nbsp;
                            <span><button id="saveandnew"  onclick="saveAndNew()" type="submit" class="btn btn-info"> <i class="fa fa-save"></i> Save & New </button></span>&nbsp;&nbsp;
                            <span><a href="{{ route('question.index') }}" class="btn btn-default"> <i class="fa fa-times"></i> Cancel </a></span>&nbsp;&nbsp;
                        </div>
                    </div>

            </div>

            </form>
            </div>
        </div>
        </div>
   </div>
</div>

@endsection