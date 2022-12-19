@extends('layouts.candidate')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">

        <div class="row container">
							<!-- BASIC WIZARD -->
							<div class="col-xl-12">
								<div class="card m-b-20">
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <h5 class="card-header">Approved Examination by AUTH</h5>
                                        </div>

                                    </div>
									@if ($message = Session::get('success'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @endif
									<div class="card-body">
										<form action="{{ route('candidate.exam.paymentmade') }}" enctype="multipart/form-data" method="POST">
											@csrf
											<div id="basicwizard" class="border pt-0">
												<ul class="nav nav-tabs nav-justified">
													<li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold">Step 1</a></li>
													<li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link font-bold">Step 2</a></li>
													<li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link font-bold">Step 3</a></li>
												</ul>
												<input type="hidden" id="exam" name="exam" value="{{ $exam }}">
												<input type="hidden" id="exam_id" name="exam_id" value="{{ $exam->id }}">
												<input type="hidden" id="payment_id" name="payment_id" value="{{ $payment_id }}">
												<input type="hidden" id="card_brand" name="card_brand" value="{{ $card_brand }}">
												<input type="hidden" id="type" name="type" value="{{ $type }}">
												<input type="hidden" id="payment_method" name="payment_method" value="{{ $payment_method }}">


												<div class="tab-content card-body mt-3 b-0 mb-0">
													<div class="tab-pane m-t-10 fade" id="tab1">
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">

																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="authid">AUTH Approval ID</label>
																		</div>
																		<div class="col-md-9">
																			<input class="form-control required" value="{{ $cand_info->auth_approval_id }}" id="authapprovalid" name="authapprovalid" type="text" readonly>
																		</div>
																	</div>
																</div>
																<div class="form-group  clearfix">
																	<div class="row">
																		<div class="col-md-3">
																			<label class="control-label form-label " for="exameligible"> Exam Eligible for</label>
																		</div>
																		<div class="col-md-9">
																			<input id="exameligible" name="exameligible" value="{{ $exam->name }}" type="text" class="required form-control" readonly>
																		</div>
																	</div>
																</div>
																<!-- <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="examdate">Exam Date </label>
																		</div>
																		<div class="col-md-9">
																			<input id="examdate" name="examdate" type="date" class="form-control" required>
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
													<div class="tab-pane m-t-10 fade" id="tab2">
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="fee"> Exam Fee + VAT</label>
																		</div>
																		<div class="col-md-9">
																			<input id="fee" name="fee" type="text" value="{{ $charge['amount'] }}" class="required form-control" readonly>
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="credit_debit">Card Type</label>
																		</div>
																		<div class="col-md-9">
																			<input id="credit_debit" name="credit_debit" type="text" value="{{ $charge['payment_method_details']['card']['funding'] }}" class="required form-control" readonly>
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="expiry">Expiry Date</label>
																		</div>
																		<div class="col-md-9">
																			<input id="expiry" name="expiry" value="{{ $card_expiry }}"  type="text" class="required form-control" readonly>
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
													<div class="tab-pane m-t-10 fade" id="tab3">
														<div class="">
															<h3><b>Dear Candidate,</b></h3>
                                                            <p>You have successfully paid the amount.</p>
                                                            <p>Please see the payment receipt below and the schedule for the exam.</p>
                                                            <p>Please follow the instructions given below:</p>
                                                            <p><b>1. </b>Please login 30 mins before exam to FW Exam Portal with your login credentials</p>
                                                            <p><b>2. </b>Select the exam you booked.</p>
                                                            <p><b>3. </b>Click on Start Exam.</p>
                                                            <p><b>4. </b> the exam and click on End Exam</p>
														</div>
														<div class="form-group">
														    <ul class="list-inline wizard mb-0">
        														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-info">Save</button>
        														</li>
        														<li>
        														    
        														</li>
														
													    </ul>
																<p class="text-center"></p>
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

<script>
    
     document.onmousedown=disableclick;status="You can't inspect this";function disableclick(event){ if(event.button==2) { alert(status); return false; }}
</script>
@endsection