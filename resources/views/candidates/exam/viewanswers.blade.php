<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Exam Management System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="{{ asset('/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="{{ asset('/assets/css/sidemenu.css')}}" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{ asset('/assets/css/admin-custom.css')}}" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="{{ asset('/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

		<!-- p-scroll bar css-->
		<link href="{{ asset('/assets/plugins/pscrollbar/pscrollbar.css')}}" rel="stylesheet" />

		<!---Font icons-->
		<link href="{{ asset('/assets/css/icons.css')}}" rel="stylesheet"/>

		<!---P-scroll Bar css -->
		<link href="{{ asset('/assets/plugins/pscrollbar/pscrollbar.css')}}" rel="stylesheet"/>

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('/assets/color-skins/color6.css')}}" />

        <link rel="icon" href="{{ asset('/assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/brand/favicon.ico')}}" />

        <!-- Data table css -->
		<link href="{{ asset('/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('/assets/plugins/datatable/jquery.dataTables.min.css')}}" rel="stylesheet" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.css"/>

    </head>

    <body class="font-sans antialiased" style="background:#14a0bb">
        <div class="container">
            <div class="card">
                @foreach($questions as $question)
                <?php $question_options = App\Models\QuestionOption::where('question_id',$question->id)->get() ?>
                <div class="row">
                    <div class="col-12">
                    <?php $question_desc = $question->description;
                    $question_desc = str_replace("<p>","",$question_desc);
                    $question_desc= str_replace("</p>","",$question_desc);

                ?>
                    <p class="mt-5">Question : {{ $question_desc }}</p>
                    @foreach($question_options as $question_option)
                    <?php $question_option_o = $question_option->option;
                            $question_option_o = str_replace("<p>","",$question_option_o);
                            $question_option_o= str_replace("</p>","",$question_option_o);
                    ?>
                        @foreach($question_answer as $q_ans)
                            @if($q_ans->answer == $question_option->correct_answer)
                            <input type="radio" name="option" value="{{$question_option_o}}"><i class="fa fa-check-circle"></i> {{$q_ans->answer}}   Your Answer<br>
                            @else
                            <input type="radio" name="option" value="{{$question_option_o}}"><i class="fa fa-check-circle"></i> {{$question_option->correct_answer}} Correct Answer<br>

                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Data tables -->
    <script src="{{ asset('/assets/js/jquery-3.2.1.min.js')}}"></script>

		<!-- Bootstrap js -->
		<script src="{{ asset('/assets/plugins/bootstrap-4.3.1/js/popper.min.js')}}"></script>
		<script src="{{ asset('/assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
        <script src="{{ asset('/assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
		<script src="{{ asset('/assets/js/wizard.js')}}"></script>
        <script src="{{ asset('/assets/js/myscript.js')}}"></script>
        <script src="{{ asset('/assets/js/datatable.js')}}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.js"></script>
		<script src="{{ asset('/assets/js/myscript.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#examTable').DataTable();
            } );







        </script>
    </body>
</html>
