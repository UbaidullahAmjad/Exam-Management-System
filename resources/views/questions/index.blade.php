@extends('layouts.app')

@section('content')

<div class="page">
   <div class="page-main h-100">
		<div class="app-content">
        <div class="container">
            <div class="card">
            <div class="row mt-5 ml-5">
                <div class="col-6">
                    <h2>Questions</h2>
                </div>
                <div class="col-6 mb-5">
                    <a href="{{ route('question.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add / Remove Questions</a>
                </div>

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                <table id="examTable" style="table-layout: fixed;" class="table table-striped table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Question ID</th>
                                <th>Question</th>
                                <th>Exam</th>
                                <th style="width:100px">status</th>
                                 <th style="width:200px">Question Marks</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach($questions as $question)
                        <?php
                            // // $question_description = str_replace("<p>","",$question->description);
                            // $question_description = explode("--",$question->description);
                            // $question_description = str_replace("&nbsp;","",$question_description[1]);
                            // str_replace(<img([\w\W]+?)/>,'$question->description',);
                           
                                
                            
                            $exam = App\Models\Exam::find($question->exam_id);
                        ?>
                        <tbody>
                            <tr>
                                <?php
                                $result = preg_replace('/(<img[^>]+>(?:<\/img>)?)/i', '$1</amp-img>', $question->description);
                                ?>
                                <td>QUE {{$question->id}}</td>
                                <td>{!! html_entity_decode(str_replace('<img', '<amp-img', $result)) !!}</td>
                                <td>{{ $exam->name }}</td>
                                <td style="width:100px">{{$question->status}}</td>
                                <td style="width:100px">{{$question->question_marks}}</td>
                                <td>
                                <a href="{{ route('question.edit',$question->id) }}"><i class="fa fa-edit btn btn-info" title="Edit Question"></i></a>
                                <a href="{{ route('question.show',$question->id) }}"><i class="fa fa-eye btn btn-success" title="View Question"></i></a>
                                <a href="{{ route('question.destroy',$question->id) }}"><i class="fa fa-trash btn btn-danger" title="Delete Question"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

        </div>
        </div>
        {{ $questions->links()}}
        </div>
   </div>
</div>

@endsection