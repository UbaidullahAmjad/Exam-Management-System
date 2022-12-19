@extends('layouts.app')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">

        <div class="row container">
							<!-- BASIC WIZARD -->
							<div class="col-xl-12">
								<div class="card m-b-20">
									<h5 class="card-header">Approved Examination by AUTH</h5>
									<div class="card-body">
										<form action="{{ route('exam.store') }}" enctype="multipart/form-data" method="POST">
											@csrf
											<div id="basicwizard" class="border pt-0">
												<ul class="nav nav-tabs nav-justified">
													<li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold">Step 1</a></li>
													<li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link font-bold">Step 2</a></li>
													<li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link font-bold">Step 3</a></li>
												</ul>
												<div class="tab-content card-body mt-3 b-0 mb-0">
													<div class="tab-pane m-t-10 fade" id="tab1">
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">

																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="title">Exam Title</label>
																		</div>
																		<div class="col-md-9">
																			<input class="form-control required" id="examtitle" name="examtitle" type="text" required>
																		</div>
																	</div>
																</div>
																<div class="form-group  clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label " for="duration"> Exam Duration</label>
																		</div>
																		<div class="col-md-9">
																			<input id="examduration" name="examduration" placeholder="minutes" type="number" class="required form-control" required>
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="confirm">Exam Status</label>
																		</div>
																		<div class="col-md-9">
																			<input id="examstatus" name="examstatus" type="checkbox" class="" >&nbsp;&nbsp;<span>Check to Active Exam</span>
																		</div>
																	</div>
																</div>

															</div>
															<ul class="list-inline wizard mb-0">
        														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
        														</li>
        														<li class="next list-inline-item float-right"><a id="next_button" href="#" class="btn btn-info mb-0 waves-effect waves-light">Next</a></li>
        													</ul>
														</div>
													</div>
													<div class="tab-pane m-t-10 fade" id="tab2">
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="auth"> Valid AUTH No</label>
																		</div>
																		<div class="col-md-9">
																			<input id="authno" name="authno" type="text" class="form-control">
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="questions"> No of Questions</label>
																		</div>
																		<div class="col-md-9">
																			<input id="questions" name="questions" type="number" class="required form-control" required>
																		</div>
																	</div>
																</div>
																<!-- <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="time">Time</label>
																		</div>
																		<div class="col-md-9">
																			<input id="time" name="time"  type="datetime-local" class="required email form-control" required>
																		</div>
																	</div>
																</div> -->

															</div>
															<ul class="list-inline wizard mb-0">
        														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
        														</li>
        														<li class="next list-inline-item float-right"><a id="next_button" href="#" class="btn btn-info mb-0 waves-effect waves-light">Next</a></li>
        													</ul>
														</div>
													</div>
													<div class="tab-pane m-t-10 fade" id="tab3">
														<div class="row">
															<div class="col-12">
                                                            <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="selectquestions">Select Questions</label>
																		</div>
																		<div class="col-md-9">
																			<input id="selectquestions" name="selectquestions" value="multilist" type="text" class="required form-control" readonly required>
																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="showresult">Show Result In</label>
																		</div>
																		<div class="col-md-9">
																			<input id="showresult" name="showresult" value="percentage" type="text" class="required form-control" readonly required>
																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="resulttype">Result Type</label>
																		</div>
																		<div class="col-md-9">
                                                                            <input id="resulttype" name="resulttype" value="Pass/Fail" type="text" class="required" readonly required>
                                                                            <label class="control-label " for="minscore">Minimum Score Required</label>
                                                                            <input id="minscore" name="minscore" value="80%" type="text" class="required">

																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="sendresult">Send Result via Email</label>
																		</div>
																		<div class="col-md-9">
                                                                        <select class="form-control" name="sendresult" id="sendresult" required>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="examprice">Price for Exam</label>
																		</div>
																		<div class="col-md-9">
                                                                        <select class="form-control" name="examprice" id="examprice" required>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                        </select>
																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="recordaudiovideo">Record audio and video</label>
																		</div>
																		<div class="col-md-9">
                                                                            <select class="form-control" name="recordaudiovideo" id="recordaudiovideo" required>
                                                                                <option value="yes">Yes</option>
                                                                                <option value="no">No</option>
                                                                            </select>
																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-12">
																			<p class="text-center"><button class="btn btn-info" type="submit">Save Exam</button></p>
																		</div>
																	</div>
                                                                </div>
															</div>
																<ul class="list-inline wizard mb-0">
        														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
        														</li>


        										            	</ul>
														</div>
													</div>

												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!-- end row -->
        </div>
   </div>
</div>
@endsection