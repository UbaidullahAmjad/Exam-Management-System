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
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
		<link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.css')}}" rel='stylesheet' />
		<link href="{{ asset('/assets/plugins/fullcalendar/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />

 <!-- floara editotr -->
 <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <?php $detail = App\Models\CompanyDetail::where('admin_id',1)->first();
              $detail1 = App\Models\User::where('role',"invigilator")->first();
            ?>
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <!-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> -->
                    <!--App-Header-->
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="/dashboard">
								<h3 class="logo-name"><img src="{{ asset('/storage/'. $detail->logo) }}" style="background-color: white;border-radius:10px;width: 100px;height: 50px;" alt="" height="80" width="100"></h3>
								<!-- <img src="" class="header-brand-img" alt="Lmslist logo"> -->
							</a>
							<!--<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>-->
							<!--<div class="header-navicon">
								<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
									<i class="fe fe-search"></i>
								</a>
							</div>
							<div class="header-navsearch">
								<form class="form-inline mr-auto">
									<div class="nav-search">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
										<button class="btn" type="submit"><i class="fe fe-search"></i></button>
									</div>
								</form>
							</div> -->
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex" >
									<!--<a  class="nav-link icon full-screen-link">-->
									<!--	<i class="fe fe-maximize-2"  id="fullscreen-button"></i>-->
									<!--</a>-->
								</div>
								<!-- <div class="dropdown d-none d-md-flex country-selector">
									<a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
										<img src="{{ asset('/assets/images/flags/us_flag.jpg')}}" alt="flag-img" class="avatar avatar-xs mr-1 align-self-center">
										<div>
											<span class="text-white">English</span>
										</div>
									</a>
									<div class="language-width dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('assets/images/flags/french_flag.jpg')}}"  alt="flag-img" class="avatar mr-3 align-self-center" />
											<div>
												<strong>French</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/flags/germany_flag.jpg')}}"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Germany</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/flags/italy_flag.jpg')}}"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Italy</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/flags/russia_flag.jpg')}}"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Russia</strong>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/flags/spain_flag.jpg')}}"  alt="flag-img" class="avatar  mr-3 align-self-center" >
											<div>
												<strong>Spain</strong>
											</div>
										</a>
									</div>
								</div> -->
								<div class="dropdown d-none d-md-flex">
									<!-- <a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class=" nav-unread badge badge-danger  badge-pill">4</span>
									</a> -->
									<!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item text-center">You have 4 notification</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-envelope-o"></i>
											</div>
											<div>
												<strong>2 new Messages</strong>
												<div class="small text-muted">17:50 Pm</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-calendar"></i>
											</div>
											<div>
												<strong> 1 Event Soon</strong>
												<div class="small text-muted">19-10-2019</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-comment-o"></i>
											</div>
											<div>
												<strong> 3 new Comments</strong>
												<div class="small text-muted">05:34 Am</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-exclamation-triangle"></i>
											</div>
											<div>
												<strong> Application Error</strong>
												<div class="small text-muted">13:45 Pm</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Notification</a>
									</div> -->
								</div>
								<!-- <div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-envelope-o"></i>
										<span class=" nav-unread badge badge-warning  badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/users/male/41.jpg')}}" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Blake</strong> I've finished it! See you so.......
												<div class="small text-muted">30 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/users/female/1.jpg')}}" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Caroline</strong> Just see the my Admin....
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/users/male/18.jpg')}}" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Jonathan</strong> Hi! I'am singer......
												<div class="small text-muted">1 hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="{{ asset('/assets/images/users/female/18.jpg')}}" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Emily</strong> Just a reminder you have.....
												<div class="small text-muted">45 mins ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Messages</a>
									</div>
								</div> -->
								<!-- <div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  app-selector">
										<ul class="drop-icon-wrap">
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-speech text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-map text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>

											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-bubbles text-dark"></i>
													<span class="block">Messages</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-user-follow text-dark"></i>
													<span class="block">Followers</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-picture text-dark"></i>
													<span class="block">Photos</span>
												</a>
											</li>
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-settings text-dark"></i>
													<span class="block">Settings</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div> -->
								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
										<img src="{{ asset('/assets/images/user1.jpg')}}" alt="profile-img" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<!--<a class="dropdown-item" href="#">-->
										<!--	<i class="dropdown-icon icon icon-user"></i> My Profile-->
										<!--</a>-->
										<!--<a class="dropdown-item" href="#">-->
										<!--	<i class="dropdown-icon icon icon-speech"></i> Inbox-->
										<!--</a>-->
										<!--<a class="dropdown-item" href="#">-->
										<!--	<i class="dropdown-icon  icon icon-settings"></i> Account Settings-->
										<!--</a>-->

										<a class="dropdown-item" href="{{ route('user.logout') }}">
											<i class="dropdown-icon icon icon-power"></i> Log out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--/App-Header-->
                <!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="{{ asset('/assets/images/user1.jpg')}}" alt="user-img" class="avatar avatar-lg brround">
								<!--<a href="#" class="profile-img">-->
								<!--	<span class="fa fa-pencil" aria-hidden="true"></span>-->
								<!--</a>-->
							</div>
							<div class="user-info">
								<h2>{{ auth()->user()->name }}</h2>

							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ route('invigilator.dashboard') }}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>

							<!-- <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="index.html">Dashboard 1</a></li>
								<li><a class="slide-item" href="index2.html">Dashboard 2</a></li>
								<li><a class="slide-item" href="index3.html">Dashboard 3</a></li>
								<li><a class="slide-item" href="index4.html">Dashboard 4</a></li>
								<li><a class="slide-item" href="index5.html">Dashboard 5</a></li>
							</ul> -->
						</li>
						<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ route('invigilator.reports') }}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Reports</span></a>
						</li>
						<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ route('invigilator.notification.index') }}"><i class="side-menu__icon fe fe-bell"></i><span class="side-menu__label">Notifications</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="{{ route('invigilator.setting.index') }}"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Settings</span></a>
						</li>


						<!-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="cards.html" class="slide-item">Cards design</a>
								</li>
								<li>
									<a href="chat.html" class="slide-item">Default Chat</a>
								</li>
								<li>
									<a href="notify.html" class="slide-item">Notifications</a>
								</li>
								<li>
									<a href="email.html" class="slide-item">Email</a>
								</li>
								<li>
									<a href="emailservices.html" class="slide-item">Email Inbox</a>
								</li>
								<li>
									<a href="sweetalert.html" class="slide-item">Sweet alerts</a>
								</li>
								<li>
									<a href="rangeslider.html" class="slide-item">Range slider</a>
								</li>
								<li>
									<a href="scroll.html" class="slide-item">Content Scroll bar</a>
								</li>
								<li>
									<a href="counters.html" class="slide-item">Counters</a>
								</li>
								<li>
									<a href="loaders.html" class="slide-item">Loaders</a>
								</li>
								<li>
									<a href="time-line.html" class="slide-item">Time Line</a>
								</li>
								<li>
									<a href="rating.html" class="slide-item">Rating </a>
								</li>
								<li>
									<a href="users-list.html" class="slide-item">User List</a>
								</li>
								<li>
									<a href="search.html" class="slide-item">Search page</a>
								</li>
								<li>
									<a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Widget</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Calendar</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="calendar.html" class="slide-item">Default calendar</a>
								</li>
								<li>
									<a href="calendar2.html" class="slide-item">Full calendar</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-activity"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="chart-chartist.html" class="slide-item">Chartjs Charts </a>
								</li>
								<li>
									<a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a>
								</li>
								<li>
									<a href="chart-echart.html" class="slide-item">Echart Charts</a>
								</li>
								<li>
									<a href="chart-flot.html" class="slide-item">Flot Charts</a>
								</li>
								<li>
									<a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
								</li>
								<li>
									<a href="sparklinechart.html" class="slide-item">Sparkline Chart</a>
								</li>
								<li>
									<a href="chart-morris.html" class="slide-item">Morris Charts</a>
								</li>
								<li>
									<a href="charts.html" class="slide-item">C3 Bar Charts</a>
								</li>
								<li>
									<a href="chart-line.html" class="slide-item">C3 Line Charts</a>
								</li>
								<li>
									<a href="chart-donut.html" class="slide-item">C3 Donut Charts</a>
								</li>
								<li>
									<a href="chart-pie.html" class="slide-item">C3 Pie charts</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-aperture"></i><span class="side-menu__label"> Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="alerts.html" class="slide-item">Alerts</a>
								</li>
								<li>
									<a href="buttons.html" class="slide-item">Buttons</a>
								</li>
								<li>
									<a href="colors.html" class="slide-item">Colors</a>
								</li>
								<li>
									<a href="avatars.html" class="slide-item">Avatar-Square</a>
								</li>
								<li>
									<a href="avatar-round.html" class="slide-item">Avatar-Rounded</a>
								</li>
								<li>
									<a href="avatar-radius.html" class="slide-item">Avatar-Radius</a>
								</li>
								<li>
									<a href="dropdown.html" class="slide-item">Drop downs</a>
								</li>
								<li>
									<a href="thumbnails.html" class="slide-item">Thumbnails</a>
								</li>
								<li>
									<a href="mediaobject.html" class="slide-item">Media Object</a>
								</li>
								<li>
									<a href="list.html" class="slide-item">List</a>
								</li>
								<li>
									<a href="tags.html" class="slide-item">Tags</a>
								</li>
								<li>
									<a href="pagination.html" class="slide-item">Pagination</a>
								</li>
								<li>
									<a href="navigation.html" class="slide-item">Navigation</a>
								</li>
								<li>
									<a href="typography.html" class="slide-item">Typography</a>
								</li>
								<li>
									<a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
								</li>
								<li>
									<a href="badge.html" class="slide-item">Badges</a>
								</li>
								<li>
									<a href="jumbotron.html" class="slide-item">Jumbotron</a>
								</li>
								<li>
									<a href="panels.html" class="slide-item">Panels</a>
								</li>
								<li>
									<a href="modal.html" class="slide-item">Modal</a>
								</li>
								<li>
									<a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
								</li>
								<li>
									<a href="progress.html" class="slide-item">Progress</a>
								</li>
								<li>
									<a href="carousel.html" class="slide-item">Carousels</a>
								</li>
								<li>
									<a href="accordion.html" class="slide-item">Accordions</a>
								</li>
								<li>
									<a href="tabs.html" class="slide-item">Tabs</a>
								</li>
								<li>
									<a href="headers.html" class="slide-item">Headers</a>
								</li>
								<li>
									<a href="footers.html" class="slide-item">Footers</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="form-elements.html" class="slide-item">Form Elements</a>
								</li>
								<li>
									<a href="form-wizard.html" class="slide-item">Form-wizard Elements</a>
								</li>
								<li>
									<a href="wysiwyag.html" class="slide-item">Text Editor</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="tables.html" class="slide-item">Default table</a>
								</li>
								<li>
									<a href="datatable.html" class="slide-item">Data Table</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="maps.html"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label"> Maps</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shield"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="icons.html" class="slide-item">Font Awesome</a>
								</li>
								<li>
									<a href="icons2.html" class="slide-item">Material Design Icons</a>
								</li>
								<li>
									<a href="icons3.html" class="slide-item">Simple Line Iocns</a>
								</li>
								<li>
									<a href="icons4.html" class="slide-item">Feather Icons</a>
								</li>
								<li>
									<a href="icons5.html" class="slide-item">Ionic Icons</a>
								</li>
								<li>
									<a href="icons6.html" class="slide-item">Flag Icons</a>
								</li>
								<li>
									<a href="icons7.html" class="slide-item">pe7 Icons</a>
								</li>
								<li>
									<a href="icons8.html" class="slide-item">Themify Icons</a>
								</li>
								<li>
									<a href="icons9.html" class="slide-item">Typicons Icons</a>
								</li>
								<li>
									<a href="icons10.html" class="slide-item">Weather Icons</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="profile.html" class="slide-item">Profile</a>
								</li>
								<li>
									<a href="editprofile.html" class="slide-item">Edit Profile</a>
								</li>
								<li>
									<a href="gallery.html" class="slide-item">Gallery</a>
								</li>
								<li>
									<a href="about.html" class="slide-item">About Company</a>
								</li>
								<li>
									<a href="company-history.html" class="slide-item">Company History</a>
								</li>
								<li>
									<a href="services.html" class="slide-item">Services</a>
								</li>
								<li>
									<a href="faq.html" class="slide-item">FAQS</a>
								</li>
								<li>
									<a href="terms.html" class="slide-item">Terms and Conditions</a>
								</li>
								<li>
									<a href="empty.html" class="slide-item">Empty Page</a>
								</li>
								<li>
									<a href="construction.html" class="slide-item">Under Construction</a>
								</li>
								<li>
									<a href="blog.html" class="slide-item">Blog</a>
								</li>
								<li>
									<a href="invoice.html" class="slide-item">Invoice</a>
								</li>
								<li>
									<a href="pricing.html" class="slide-item">Pricing Tables</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="shop.html" class="slide-item">Products</a>
								</li>
								<li>
									<a href="shop-des.html" class="slide-item">Product Details</a>
								</li>
								<li>
									<a href="cart.html" class="slide-item">Shopping Cart</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-anchor"></i><span class="side-menu__label">Custom  Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="login.html" class="slide-item">Login</a>
								</li>
								<li>
									<a href="register.html" class="slide-item">Register</a>
								</li>
								<li>
									<a href="forgot-password.html" class="slide-item">Forgot password</a>
								</li>
								<li>
									<a href="lockscreen.html" class="slide-item">Lock screen</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-alert-circle"></i><span class="side-menu__label">Error pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="400.html" class="slide-item">400 Error</a>
								</li>
								<li>
									<a href="401.html" class="slide-item">401 Error</a>
								</li>
								<li>
									<a href="403.html" class="slide-item">403 Error</a>
								</li>
								<li>
									<a href="404.html" class="slide-item">404 Error</a>
								</li>
								<li>
									<a href="500.html" class="slide-item">500 Error</a>
								</li>
								<li>
									<a href="503.html" class="slide-item">503 Error</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a href="{{ asset('/../../../Documentation/index.html')}}" class="btn btn-light btn-block mt-3">Documentation</a>
						</li> -->
					</ul>
				</aside>
				<!-- /Sidebar menu-->
                <!-- </div> -->
            </header>

            <!-- Page Content -->
            <main>
            @yield('content')
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
		<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.js"></script>
		<script src="{{ asset('/assets/js/myscript.js') }}"></script>
		<script src="{{ asset('/assets/plugins/fullcalendar/moment.min.js')}}"></script>
		<script src="{{ asset('/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
		<script src="{{ asset('/assets/js/fullcalendar.js')}}"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
		<script>




                </script>

    </body>
</html>
