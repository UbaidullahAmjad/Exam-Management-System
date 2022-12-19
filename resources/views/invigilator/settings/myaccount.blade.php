@extends('layouts.invigilator')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">

        <div class="row container">
							<!-- BASIC WIZARD -->
							<div class="col-xl-12">
								<div class="card m-b-20">
									<h2 class="card-header">My Account</h2>
									<div class="card-body">

											<div id="basicwizard" class="border pt-0">
												<ul class="nav nav-tabs nav-justified">
                                                <!-- <li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold"><i class="fa fa-globe"></i> General Information</a></li> -->
													<!--<li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link font-bold"><i class="fa fa-tools"></i>  Customization</a></li>-->
													<!--<li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link font-bold"><i class="fa fa-share-alt"></i> Share Candidate Site</a></li>-->
													<li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold"><i class="fa fa-phone"></i> Contact Information</a></li>
												</ul>
												<div class="tab-content card-body mt-3 b-0 mb-0">
													<div class="tab-pane m-t-10 fade" id="tab3">
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <h4 class="text-center">Update Your Company Details</h4>
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">

																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="organization">Organization Name</label>
																		</div>
																		<div class="col-md-9">
																			<input class="form-control required" id="organization" value="" name="organization" type="text" required>
																		</div>
																	</div>
																</div>
																<div class="form-group  clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label " for="timezone">Time Zone</label>
																		</div>
																		<div class="col-md-9">
                                                                            <select class="form-control" name="time_zone" id="time_zone">
                                                                                <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="(GMT-12:00) International Date Line West">(GMT-12:00) International Date Line West</option>
                                                                                <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="(GMT-11:00) Midway Island, Samoa">(GMT-11:00) Midway Island, Samoa</option>
                                                                                <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="(GMT-10:00) Hawaii">(GMT-10:00) Hawaii</option>
                                                                                <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="(GMT-09:00) Alaska">(GMT-09:00) Alaska</option>
                                                                                <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="(GMT-08:00) Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                                                <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="(GMT-08:00) Tijuana, Baja California">(GMT-08:00) Tijuana, Baja California</option>
                                                                                <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="(GMT-07:00) Arizona">(GMT-07:00) Arizona</option>
                                                                                <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="(GMT-07:00) Chihuahua, La Paz, Mazatlan">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                                                <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="(GMT-07:00) Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                                                <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="(GMT-06:00) Central America">(GMT-06:00) Central America</option>
                                                                                <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="(GMT-06:00) Central Time (US & Canada)">(GMT-06:00) Central Time (US & Canada)</option>
                                                                                <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="(GMT-06:00) Guadalajara, Mexico City, Monterrey">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                                                <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="(GMT-06:00) Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                                                <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="(GMT-05:00) Bogota, Lima, Quito, Rio Branco">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                                                <!--<option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>-->
                                                                                <!--<option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>-->
                                                                                <!--<option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>-->
                                                                                <!--<option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>-->
                                                                                <!--<option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>-->
                                                                                <!--<option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>-->
                                                                                <!--<option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>-->
                                                                                <!--<option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>-->
                                                                                <!--<option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>-->
                                                                                <!--<option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>-->
                                                                                <!--<option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>-->
                                                                                <!--<option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>-->
                                                                                <!--<option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>-->
                                                                                <!--<option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>-->
                                                                                <!--<option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>-->
                                                                                <!--<option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>-->
                                                                                <!--<option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>-->
                                                                                <!--<option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>-->
                                                                                <!--<option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>-->
                                                                                <!--<option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>-->
                                                                                <!--<option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>-->
                                                                                <!--<option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>-->
                                                                                <!--<option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>-->
                                                                                <!--<option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>-->
                                                                                <!--<option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>-->
                                                                                <!--<option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>-->
                                                                                <!--<option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>-->
                                                                                <!--<option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>-->
                                                                                <!--<option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>-->
                                                                                <!--<option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>-->
                                                                                <!--<option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>-->
                                                                                <!--<option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>-->
                                                                                <!--<option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>-->
                                                                                <!--<option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>-->
                                                                                <!--<option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>-->
                                                                                <!--<option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>-->
                                                                                <!--<option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>-->
                                                                                <!--<option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>-->
                                                                                <!--<option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>-->
                                                                                <!--<option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>-->
                                                                                <!--<option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>-->
                                                                                <!--<option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>-->
                                                                                <!--<option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>-->
                                                                                <!--<option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>-->
                                                                                <!--<option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>-->
                                                                                <!--<option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>-->
                                                                                <!--<option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>-->
                                                                                <!--<option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>-->
                                                                                <!--<option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>-->
                                                                                <!--<option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>-->
                                                                                <!--<option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>-->
                                                                                <!--<option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>-->
                                                                                <!--<option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>-->
                                                                                <!--<option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>-->
                                                                                <!--<option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>-->
                                                                                <!--<option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>-->
                                                                                <!--<option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>-->
                                                                                <!--<option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>-->
                                                                                <!--<option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>-->
                                                                                <!--<option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>-->
                                                                                <!--<option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>-->
                                                                                <!--<option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>-->
                                                                                <!--<option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>-->
                                                                                <!--<option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>-->
                                                                                <!--<option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>-->
                                                                                <!--<option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>-->
                                                                                <!--<option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>-->
                                                                                <!--<option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>-->
                                                                            </select>
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="daylight">Apply Day Light Saving Time</label>
																		</div>
																		<div class="col-md-9">


																		</div>
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="">Your Logo</label>
																		</div>
																		<!-- <div class="col-md-9">
                                                                            <label class="control-label form-label" for="logo">

                                                                            </label>
																			<input id="logo" name="logo" type="file" >
																		</div> -->
																	</div>
                                                                </div>
                                                                <div class="form-group clearfix">
																	<div class="row ">
                                                                        <button type="submit" class="btn btn-info">Update Changes</button>&nbsp;&nbsp;&nbsp;
                                                                        <!--<button class="btn btn-default"><i class="fa fa-times"></i> Cancel</button>-->
																	</div>
																</div>

															</div>
                                                        </div>
                                                    </form>
													</div>
													<div class="tab-pane m-t-10 fade" id="tab22">
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="auth"> Valid AUTH No</label>
																		</div>
																		<div class="col-md-9">
																			<input id="authno" name="authno" type="text" class="required form-control" required>
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
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label " for="time">Time</label>
																		</div>
																		<div class="col-md-9">
																			<input id="time" name="time"  type="time" class="required email form-control" required>
																		</div>
																	</div>
																</div>

															</div>
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
														</div>
                                                    </div>

                                                    <div class="tab-pane m-t-10 fade" id="tab1">
                                                        <form action="{{ route('admin.account.update') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
														<div class="row">
															<div class="col-12">
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="name"> Name</label>
																		</div>
																		<div class="col-md-9">
																			<input id="name" name="name" value="{{ auth()->user()->name }}" type="text" class="form-control" readonly>
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="email"> Email</label>
																		</div>
																		<div class="col-md-9">
																			<input id="email" name="email" value="{{ auth()->user()->email }}" type="email" class="form-control" readonly>
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<div class="col-md-3">
																			<label class="control-label form-label" for="email"> Password</label>
																		</div>
																		<div class="col-md-9">
																			<input id="password" name="password"  type="password" class="form-control">
																		</div>
																	</div>
																</div>
																<div class="form-group clearfix">
																	<div class="row ">
																		<button class="btn btn-info" type="submit">Save</button>
																	</div>
																</div>

															</div>
														</div>
														</form>
													</div>
													<!-- <ul class="list-inline wizard mb-0">
														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
														</li>
														<li class="next list-inline-item float-right"><a id="next_button" href="#" class="btn btn-info mb-0 waves-effect waves-light">Next</a></li>
													</ul> -->
												</div>
											</div>

									</div>
								</div>
							</div>
						</div><!-- end row -->
        </div>
   </div>
</div>
@endsection