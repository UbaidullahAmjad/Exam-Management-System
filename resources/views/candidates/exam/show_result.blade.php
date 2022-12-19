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
    <?php
        $percentage = ($right_ans * 100) / $ques_count;
    ?>
    <body class="font-sans antialiased" style="background:#14a0bb">
        <div class="container">
            <div>
            <h2 class="text-center result mt-5 mb-5">Result</h2>
                <div class="row">

                    <div class="col-md-3 card">
                        <p class="right">Right Answers : {{ $right_ans }}</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 card">
                        <p class="wrong">Wrong Answers : {{ $wrong_ans }}</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 card">
                        <p class="percentage">Percentage : {{ (int)$percentage }} %</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="thankyou text-center mt-5 mb-5">Thank you for Your Participation</h2>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-12" style="text-align: center;">
                        <p class="text-center"><a href="{{ route('candidate.exam.history') }}" class="btn btn-success text-center">Go to Exam History</a></p>
                    </div>
                </div> 
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

window.onbeforeunload = function() { return false; };





        </script>
    </body>
</html>
