<?php
    // $ques_ans = App\Models\QuestionAnswer::join('candidate_exams','candidate_exams.exam_id','question_answers.exam_id')->
    // where('candidate_exams.candidate_id',auth()->user()->id)
    // ->orderBy('candidate_exams.created_at')
    // ->select('candidate_exams.*')
    // ->first();

?>

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
        <style>
            .green p{
                background-color: green;
                background-image: url(/images/tick.jpg);
                background-repeat: no-repeat;
                background-size: 21px 21px;
                background-position: right;
                padding: 8px;
                color: white;
            }
            .red p{
                background-color: red;
                background-image: url(/images/cross.png);
                background-repeat: no-repeat;
                background-size: 21px 21px;
                background-position: right;
                padding: 8px;
                color: white;
            }
            .grey p{
                background-color: grey;
                padding: 8px;
                color: white;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
    <?php
        // $conduct_datetime = explode(" ",$exam->conduct_time);
        // $conduct_time = $conduct_datetime[1];

        $duration = $exam->duration;
        // $cond_time = date("H:i:s", strtotime('+'.$duration . 'minutes', strtotime($conduct_time)));
        // $cond_time = explode(":",$cond_time);
        // $hours = $cond_time[0];
        // $minutes = $cond_time[1];
        // $seconds = $cond_time[2];
        // $time_seconds = $hours * 3600 + $minutes * 60 + $seconds;
        // dd($cond_time);
    ?>
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <!-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> -->

                <!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar vertical-bar">

                    <div id="basicwizard" class="pt-0">
					<ul class="side-menu nav nav-tabs nav-justified">
						<li class="slide">
                            <?php $i = 1; ?>
                            @foreach($questions as $question)
                            @if($i <= count($questions))
                            <li class="nav-item"><a id="aa<?php echo $i; ?>" href="#tab<?php echo $i; ?>" data-toggle="tab" class="nav-link test font-bold">{{$i}}</a></li>

                            @endif
                            <?php $i++; ?>
                            @endforeach
						</li>
					</ul>
                    </div>
				</aside>
				<!-- /Sidebar menu-->
                <!-- </div> -->
            </header>

            <!-- Page Content -->
            <main>
            <form id="MyForm" name="MyForm" action="#">
                @csrf
                <?php $i = 1; $j = 0;?>
                <div class="container">
                    <div class="top_bar">
                        <div class="row">
                            <div class="col-md-6">
                                Student : {{ auth()->user()->name }}
                            </div>

                        </div>
                    </div>
                    <div id="basicwizard" class="pt-0">
                            <div class="tab-content card-body mt-3 b-0 mb-0">
                                @foreach($questions as $question)
                                    @if($i <= count($questions))
                                        <div class="tab-pane m-t-10 fade card p-5 tab-class" name="tab_name" id="tab<?php echo $i; ?>" >
                                                <?php $question_options = App\Models\QuestionOption::where('question_id',$question->id)->get('option');
                                                    $k = 1;
                                                ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>Question {{$i}} of {{ count($questions) }}</p>
                                                    <div>
                                                        {!! html_entity_decode($question->description) !!}
                                                    </div>
                                                    <input type="hidden" id="question" name="question[]" value="{{ $question->description }}">
                                                    @foreach($question_options as $question_option)
                                                    <div class="col-6">
                                                        <?php $selected = App\Models\QuestionAnswer::where('exam_id',$exam->id)
                                                            ->where('candidate_id',$candidate->id)
                                                            ->where('question',$question->description)

                                                            ->first();
                                                            $correct = App\Models\QuestionOption::where('question_id',$question->id)->first();

                                                         ?>
                                                    <!--<input type="hidden" name="option[]" id="q_option" value="">-->
                                                    @if($selected->answer == $correct->correct_answer && $selected->answer == $question_option->option)

                                                         <span class="green" style="background-color: green !important;">{!! html_entity_decode($question_option->option) !!}</span>
                                                    @else
                                                        @if($question_option->option == $correct->correct_answer)
                                                            <span class="green" style="background-color: red !important;">{!! html_entity_decode($question_option->option) !!}</span>
                                                        @endif
                                                        @if($selected->answer == $question_option->option && $selected->answer != $correct->correct_answer)
                                                            <span class="red" style="background-color: green !important;">{!! html_entity_decode($question_option->option) !!}</span>

                                                        @elseif($question_option->option != $correct->correct_answer)

                                                            <span class="grey" style="background-color: red !important;">{!! html_entity_decode($question_option->option) !!}</span>
                                                        @endif
                                                    @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <ul class="list-inline wizard mb-0 mt-5">
                                                    @if($i != 1 && count($questions) >= 2)
                                                    <li class="previous list-inline-item ml-5 mb-5"><a href="#" onclick="preTab(<?php echo $i ?>)"  id="previous" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
                                                    </li>
                                                    @endif
                                                    @if($i < count($questions))
                                                        <li class="next list-inline-item float-right"><a onclick="nextTab(<?php echo $i ?>)" id="next_button" href="#" class="btn btn-info mb-0 waves-effect waves-light">Next</a></li>
                                                    @endif
                                                    <li class="mt-5">
                                                        <p class="text-center"><a href="{{ route('invigilatorprintcandidateexam',[$exam->id,$candidate->id]) }}" class="btn btn-success">Print Result</a></p>
                                                    </li>

                                                </ul>
                                            </div>
                                             @if(count($question_options) == $loop->last)
                                        @if($loop->last)

                                        @endif
                                    @endif
                                </div>
                                    @endif

                                    <?php $i++;$j++; ?>

                                @endforeach

                                <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                <input type="hidden" name="candidate_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" id="q_count" name="question_count" value="{{ count($questions) }}">
                                <?php \Session::put('question_count',count($questions));
                                    \Session::put('candidate_id',auth()->user()->id);
                                    \Session::put('exam_id',auth()->user()->id);


                                ?>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
            </main>
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
            });
            var count = $("#q_count").val();

            var tab = document.getElementsByClassName("tab-class")[0].id;
            // alert(tab)
           function nextTab(id){
            var next = id+1;
                $('#aa'+next).trigger('click')
                // var next = id+1;
                // $("#tab"+id).removeClass('active');
                // $("#tab"+next).addClass('active');
                // $("#tab"+next).tab('show');
            }

            function preTab(id){
                var next = id-1;
                $('#aa'+next).trigger('click')
                // $("#tab"+(parseInt(id)-1)).tab('show');
            }






            $headings = $('.nav-tabs li a');
            $('.tab-content .tab-pane').each(function(i, el){
                $(this)
                .addClass('active')

            });






            var countDownDate = new Date().getTime() + 1 * 30000 //+ <?php //echo $duration * 60000; ?>;
            var time = setTimeout(function() {
                timer();
            }, 1000);

   // DOM Events









function timer(){
console.log('some');
    $('#timer').show();

    countDownDate = new Date().getTime() + <?php echo $duration * 60000; ?>;

   // Update the count down every 1 second
    var x = setInterval(function() {

    //Get today's date and time
    now = new Date().getTime();

   // Find the distance between now and the count down date
    var distance = countDownDate - now;
    //Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

   // Output the result in an element with id="demo"
    document.getElementById("timer").innerHTML =  hours + "h "+
    minutes + "m " + seconds + "s ";
    document.getElementById("total_time").innerHTML = "Total Time: " +<?php echo $duration; ?> + " minutes";
    console.log(distance);
   // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.MyForm.submit();
    }
    }, 1000);

}


(function (global) {

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // Making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {
        noBackPlease();

        // Disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // Stopping the event bubbling up the DOM tree...
            e.stopPropagation();
        };
    }
})(window);

//  document.onmousedown=disableclick;status="You can't inspect this";function disableclick(event){ if(event.button==2) { alert(status); return false; }}

        </script>
    </body>
</html>
