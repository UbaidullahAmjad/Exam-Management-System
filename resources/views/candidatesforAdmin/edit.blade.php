@extends('layouts.app')

@section('content')
<div class="page">
   <div class="page-main h-100">
		<div class="app-content">

        <div class="row container">
							<!-- BASIC WIZARD -->
							<div class="col-xl-12">
								<div class="card m-b-20">
									<h5 class="card-header">Please fill in the necessary information below</h5>
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <div class="card-body">
										<form action="{{ route('candidate.update',$candidate_info->candidate_id) }}" enctype="multipart/form-data" method="POST">
											@csrf
											<div id="basicwizard" class="border pt-0">
												<ul class="nav nav-tabs nav-justified">
													<li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link font-bold">Step 1</a></li>
													<li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link font-bold">Step 2</a></li>
													<li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link font-bold">Step 3</a></li>
												</ul>
												<div class="tab-content card-body mt-3 b-0 mb-0">
													<div class="tab-pane m-t-10 fade" id="tab1">
                                                    <h4 class="update_settings text-center">Personal Information</h4>
														<div class="row">

															<div class="col-md-6">
                                                                <div>
                                                                    <label for="username">Username</label>
                                                                    <input type="text" id="username" name="username" value="{{ $candidate_info->username }}" class="form-control" readonly><br>
                                                                </div>
                                                                <div>
                                                                    <label for="fname">First Name </label>
                                                                    <input type="text" id="fname" name="fname" value="{{ $candidate_info->fname }}" class="form-control" ><br>
                                                                </div>
                                                                <div>
                                                                    <label for="lname">Last Name </label>
                                                                    <input type="text" id="lname" name="lname" value="{{ $candidate_info->lname }}" class="form-control" ><br>
                                                                </div>
                                                                <div>
                                                                    <label for="username">Place of Birth </label>

                                                                    <select name="Location" class="form-control" id="Location" value="{{ $candidate_info->place_of_birth }}" >

                                                                        <option value="{{ $candidate_info->place_of_birth }}" selected>{{ $candidate_info->place_of_birth }}</option>
                                                                        <option value="Islamabad">Islamabad</option>
                                                                        <option value="" disabled>Punjab Cities</option>
                                                                        <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                                                        <option value="Ahmadpur East">Ahmadpur East</option>
                                                                        <option value="Ali Khan Abad">Ali Khan Abad</option>
                                                                        <option value="Alipur">Alipur</option>
                                                                        <option value="Arifwala">Arifwala</option>
                                                                        <option value="Attock">Attock</option>
                                                                        <option value="Bhera">Bhera</option>
                                                                        <option value="Bhalwal">Bhalwal</option>
                                                                        <option value="Bahawalnagar">Bahawalnagar</option>
                                                                        <option value="Bahawalpur">Bahawalpur</option>
                                                                        <option value="Bhakkar">Bhakkar</option>
                                                                        <option value="Burewala">Burewala</option>
                                                                        <option value="Chillianwala">Chillianwala</option>
                                                                        <option value="Chakwal">Chakwal</option>
                                                                        <option value="Chichawatni">Chichawatni</option>
                                                                        <option value="Chiniot">Chiniot</option>
                                                                        <option value="Chishtian">Chishtian</option>
                                                                        <option value="Daska">Daska</option>
                                                                        <option value="Darya Khan">Darya Khan</option>
                                                                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                                        <option value="Dhaular">Dhaular</option>
                                                                        <option value="Dina">Dina</option>
                                                                        <option value="Dinga">Dinga</option>
                                                                        <option value="Dipalpur">Dipalpur</option>
                                                                        <option value="Faisalabad">Faisalabad</option>
                                                                        <option value="Ferozewala">Ferozewala</option>
                                                                        <option value="Fateh Jhang">Fateh Jang</option>
                                                                        <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                                        <option value="Gojra">Gojra</option>
                                                                        <option value="Gujranwala">Gujranwala</option>
                                                                        <option value="Gujrat">Gujrat</option>
                                                                        <option value="Gujar Khan">Gujar Khan</option>
                                                                        <option value="Hafizabad">Hafizabad</option>
                                                                        <option value="Haroonabad">Haroonabad</option>
                                                                        <option value="Hasilpur">Hasilpur</option>
                                                                        <option value="Haveli Lakha">Haveli Lakha</option>
                                                                        <option value="Jatoi">Jatoi</option>
                                                                        <option value="Jalalpur">Jalalpur</option>
                                                                        <option value="Jattan">Jattan</option>
                                                                        <option value="Jampur">Jampur</option>
                                                                        <option value="Jaranwala">Jaranwala</option>
                                                                        <option value="Jhang">Jhang</option>
                                                                        <option value="Jhelum">Jhelum</option>
                                                                        <option value="Kalabagh">Kalabagh</option>
                                                                        <option value="Karor Lal Esan">Karor Lal Esan</option>
                                                                        <option value="Kasur">Kasur</option>
                                                                        <option value="Kamalia">Kamalia</option>
                                                                        <option value="Kamoke">Kamoke</option>
                                                                        <option value="Khanewal">Khanewal</option>
                                                                        <option value="Khanpur">Khanpur</option>
                                                                        <option value="Kharian">Kharian</option>
                                                                        <option value="Khushab">Khushab</option>
                                                                        <option value="Kot Addu">Kot Addu</option>
                                                                        <option value="Jauharabad">Jauharabad</option>
                                                                        <option value="Lahore">Lahore</option>
                                                                        <option value="Lalamusa">Lalamusa</option>
                                                                        <option value="Layyah">Layyah</option>
                                                                        <option value="Liaquat Pur">Liaquat Pur</option>
                                                                        <option value="Lodhran">Lodhran</option>
                                                                        <option value="Malakwal">Malakwal</option>
                                                                        <option value="Mamoori">Mamoori</option>
                                                                        <option value="Mailsi">Mailsi</option>
                                                                        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                                        <option value="Mian Channu">Mian Channu</option>
                                                                        <option value="Mianwali">Mianwali</option>
                                                                        <option value="Multan">Multan</option>
                                                                        <option value="Murree">Murree</option>
                                                                        <option value="Muridke">Muridke</option>
                                                                        <option value="Mianwali Bangla">Mianwali Bangla</option>
                                                                        <option value="Muzaffargarh">Muzaffargarh</option>
                                                                        <option value="Narowal">Narowal</option>
                                                                        <option value="Nankana Sahib">Nankana Sahib</option>
                                                                        <option value="Okara">Okara</option>
                                                                        <option value="Renala Khurd">Renala Khurd</option>
                                                                        <option value="Pakpattan">Pakpattan</option>
                                                                        <option value="Pattoki">Pattoki</option>
                                                                        <option value="Pir Mahal">Pir Mahal</option>
                                                                        <option value="Qaimpur">Qaimpur</option>
                                                                        <option value="Qila Didar Singh">Qila Didar Singh</option>
                                                                        <option value="Rabwah">Rabwah</option>
                                                                        <option value="Raiwind">Raiwind</option>
                                                                        <option value="Rajanpur">Rajanpur</option>
                                                                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                                        <option value="Rawalpindi">Rawalpindi</option>
                                                                        <option value="Sadiqabad">Sadiqabad</option>
                                                                        <option value="Safdarabad">Safdarabad</option>
                                                                        <option value="Sahiwal">Sahiwal</option>
                                                                        <option value="Sangla Hill">Sangla Hill</option>
                                                                        <option value="Sarai Alamgir">Sarai Alamgir</option>
                                                                        <option value="Sargodha">Sargodha</option>
                                                                        <option value="Shakargarh">Shakargarh</option>
                                                                        <option value="Sheikhupura">Sheikhupura</option>
                                                                        <option value="Sialkot">Sialkot</option>
                                                                        <option value="Sohawa">Sohawa</option>
                                                                        <option value="Soianwala">Soianwala</option>
                                                                        <option value="Siranwali">Siranwali</option>
                                                                        <option value="Talagang">Talagang</option>
                                                                        <option value="Taxila">Taxila</option>
                                                                        <option value="Toba Tek Singh">Toba Tek Singh</option>
                                                                        <option value="Vehari">Vehari</option>
                                                                        <option value="Wah Cantonment">Wah Cantonment</option>
                                                                        <option value="Wazirabad">Wazirabad</option>
                                                                        <option value="" disabled>Sindh Cities</option>
                                                                        <option value="Badin">Badin</option>
                                                                        <option value="Bhirkan">Bhirkan</option>
                                                                        <option value="Rajo Khanani">Rajo Khanani</option>
                                                                        <option value="Chak">Chak</option>
                                                                        <option value="Dadu">Dadu</option>
                                                                        <option value="Digri">Digri</option>
                                                                        <option value="Diplo">Diplo</option>
                                                                        <option value="Dokri">Dokri</option>
                                                                        <option value="Ghotki">Ghotki</option>
                                                                        <option value="Haala">Haala</option>
                                                                        <option value="Hyderabad">Hyderabad</option>
                                                                        <option value="Islamkot">Islamkot</option>
                                                                        <option value="Jacobabad">Jacobabad</option>
                                                                        <option value="Jamshoro">Jamshoro</option>
                                                                        <option value="Jungshahi">Jungshahi</option>
                                                                        <option value="Kandhkot">Kandhkot</option>
                                                                        <option value="Kandiaro">Kandiaro</option>
                                                                        <option value="Karachi">Karachi</option>
                                                                        <option value="Kashmore">Kashmore</option>
                                                                        <option value="Keti Bandar">Keti Bandar</option>
                                                                        <option value="Khairpur">Khairpur</option>
                                                                        <option value="Kotri">Kotri</option>
                                                                        <option value="Larkana">Larkana</option>
                                                                        <option value="Matiari">Matiari</option>
                                                                        <option value="Mehar">Mehar</option>
                                                                        <option value="Mirpur Khas">Mirpur Khas</option>
                                                                        <option value="Mithani">Mithani</option>
                                                                        <option value="Mithi">Mithi</option>
                                                                        <option value="Mehrabpur">Mehrabpur</option>
                                                                        <option value="Moro">Moro</option>
                                                                        <option value="Nagarparkar">Nagarparkar</option>
                                                                        <option value="Naudero">Naudero</option>
                                                                        <option value="Naushahro Feroze">Naushahro Feroze</option>
                                                                        <option value="Naushara">Naushara</option>
                                                                        <option value="Nawabshah">Nawabshah</option>
                                                                        <option value="Nazimabad">Nazimabad</option>
                                                                        <option value="Qambar">Qambar</option>
                                                                        <option value="Qasimabad">Qasimabad</option>
                                                                        <option value="Ranipur">Ranipur</option>
                                                                        <option value="Ratodero">Ratodero</option>
                                                                        <option value="Rohri">Rohri</option>
                                                                        <option value="Sakrand">Sakrand</option>
                                                                        <option value="Sanghar">Sanghar</option>
                                                                        <option value="Shahbandar">Shahbandar</option>
                                                                        <option value="Shahdadkot">Shahdadkot</option>
                                                                        <option value="Shahdadpur">Shahdadpur</option>
                                                                        <option value="Shahpur Chakar">Shahpur Chakar</option>
                                                                        <option value="Shikarpaur">Shikarpaur</option>
                                                                        <option value="Sukkur">Sukkur</option>
                                                                        <option value="Tangwani">Tangwani</option>
                                                                        <option value="Tando Adam Khan">Tando Adam Khan</option>
                                                                        <option value="Tando Allahyar">Tando Allahyar</option>
                                                                        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                                                        <option value="Thatta">Thatta</option>
                                                                        <option value="Umerkot">Umerkot</option>
                                                                        <option value="Warah">Warah</option>
                                                                        <option value="" disabled>Khyber Cities</option>
                                                                        <option value="Abbottabad">Abbottabad</option>
                                                                        <option value="Adezai">Adezai</option>
                                                                        <option value="Alpuri">Alpuri</option>
                                                                        <option value="Akora Khattak">Akora Khattak</option>
                                                                        <option value="Ayubia">Ayubia</option>
                                                                        <option value="Banda Daud Shah">Banda Daud Shah</option>
                                                                        <option value="Bannu">Bannu</option>
                                                                        <option value="Batkhela">Batkhela</option>
                                                                        <option value="Battagram">Battagram</option>
                                                                        <option value="Birote">Birote</option>
                                                                        <option value="Chakdara">Chakdara</option>
                                                                        <option value="Charsadda">Charsadda</option>
                                                                        <option value="Chitral">Chitral</option>
                                                                        <option value="Daggar">Daggar</option>
                                                                        <option value="Dargai">Dargai</option>
                                                                        <option value="Darya Khan">Darya Khan</option>
                                                                        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                                        <option value="Doaba">Doaba</option>
                                                                        <option value="Dir">Dir</option>
                                                                        <option value="Drosh">Drosh</option>
                                                                        <option value="Hangu">Hangu</option>
                                                                        <option value="Haripur">Haripur</option>
                                                                        <option value="Karak">Karak</option>
                                                                        <option value="Kohat">Kohat</option>
                                                                        <option value="Kulachi">Kulachi</option>
                                                                        <option value="Lakki Marwat">Lakki Marwat</option>
                                                                        <option value="Latamber">Latamber</option>
                                                                        <option value="Madyan">Madyan</option>
                                                                        <option value="Mansehra">Mansehra</option>
                                                                        <option value="Mardan">Mardan</option>
                                                                        <option value="Mastuj">Mastuj</option>
                                                                        <option value="Mingora">Mingora</option>
                                                                        <option value="Nowshera">Nowshera</option>
                                                                        <option value="Paharpur">Paharpur</option>
                                                                        <option value="Pabbi">Pabbi</option>
                                                                        <option value="Peshawar">Peshawar</option>
                                                                        <option value="Saidu Sharif">Saidu Sharif</option>
                                                                        <option value="Shorkot">Shorkot</option>
                                                                        <option value="Shewa Adda">Shewa Adda</option>
                                                                        <option value="Swabi">Swabi</option>
                                                                        <option value="Swat">Swat</option>
                                                                        <option value="Tangi">Tangi</option>
                                                                        <option value="Tank">Tank</option>
                                                                        <option value="Thall">Thall</option>
                                                                        <option value="Timergara">Timergara</option>
                                                                        <option value="Tordher">Tordher</option>
                                                                        <option value="" disabled>Balochistan Cities</option>
                                                                        <option value="Awaran">Awaran</option>
                                                                        <option value="Barkhan">Barkhan</option>
                                                                        <option value="Chagai">Chagai</option>
                                                                        <option value="Dera Bugti">Dera Bugti</option>
                                                                        <option value="Gwadar">Gwadar</option>
                                                                        <option value="Harnai">Harnai</option>
                                                                        <option value="Jafarabad">Jafarabad</option>
                                                                        <option value="Jhal Magsi">Jhal Magsi</option>
                                                                        <option value="Kacchi">Kacchi</option>
                                                                        <option value="Kalat">Kalat</option>
                                                                        <option value="Kech">Kech</option>
                                                                        <option value="Kharan">Kharan</option>
                                                                        <option value="Khuzdar">Khuzdar</option>
                                                                        <option value="Killa Abdullah">Killa Abdullah</option>
                                                                        <option value="Killa Saifullah">Killa Saifullah</option>
                                                                        <option value="Kohlu">Kohlu</option>
                                                                        <option value="Lasbela">Lasbela</option>
                                                                        <option value="Lehri">Lehri</option>
                                                                        <option value="Loralai">Loralai</option>
                                                                        <option value="Mastung">Mastung</option>
                                                                        <option value="Musakhel">Musakhel</option>
                                                                        <option value="Nasirabad">Nasirabad</option>
                                                                        <option value="Nushki">Nushki</option>
                                                                        <option value="Panjgur">Panjgur</option>
                                                                        <option value="Pishin Valley">Pishin Valley</option>
                                                                        <option value="Quetta">Quetta</option>
                                                                        <option value="Sherani">Sherani</option>
                                                                        <option value="Sibi">Sibi</option>
                                                                        <option value="Sohbatpur">Sohbatpur</option>
                                                                        <option value="Washuk">Washuk</option>
                                                                        <option value="Zhob">Zhob</option>
                                                                        <option value="Ziarat">Ziarat</option>

                                                                    </select><br>
                                                                </div>
                                                                <div>
                                                                    <label for="passport">Passport Number</label>
                                                                    <input type="text" id="passport" name="passport" value="{{ $candidate_info->passport_no }}" class="form-control"><br>
                                                                </div>
                                                                <div>
                                                                    <label for="mobno">Mobile No </label>
                                                                    <input type="text" id="mobno" name="mobno" value="{{ $candidate_info->mobile_no }}" class="form-control" ><br>
                                                                </div>
                                                                <div>
                                                                    <label for="emiratesid">Emirates ID</label>
                                                                    <input type="text" id="emiratesid" name="emiratesid" value="{{ $candidate_info->emirates_id }}" class="form-control"  readonly><br>
                                                                </div>
                                                                <div>
                                                                    <label for="gender">Gender</label><br>
                                                                    @if($candidate_info->gender == NULL)
                                                                    <input type="radio" name="gender" value="male"> <span>Male</span>
                                                                    <input type="radio"name="gender" value="female"> <span>Female</span>

                                                                    @elseif($candidate_info->gender == "male")
                                                                    <input type="radio" name="gender" value="male" checked> <span>Male</span>
                                                                    <input type="radio"name="gender" value="female"> <span>Female</span>
                                                                    @elseif($candidate_info->gender == "female")
                                                                    <input type="radio" name="gender" value="male" > <span>Male</span>
                                                                    <input type="radio"name="gender" value="female" checked> <span>Female</span>
                                                                    @endif
                                                                    <br>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="prefix">Prefix </label><br>
                                                                    <select name="prefix" id="prefix" class="form-control" >
                                                                        @if($candidate_info->prefix == "Mr")
                                                                        <option value="Mr" selected>Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        @elseif($candidate_info->prefix == "Mrs")
                                                                        <option value="Mr" >Mr</option>
                                                                        <option value="Mrs" selected>Mrs</option>
                                                                        @else
                                                                        <option value="select" >Select Prefix</option>
                                                                        <option value="Mr" >Mr</option>
                                                                        <option value="Mrs" >Mrs</option>
                                                                        @endif
                                                                    </select><br>
                                                                </div>
                                                                <div>
                                                                    <label for="middlename">Middle Name</label>
                                                                    <input type="text" name="middlename" value="{{ $candidate_info->middle_name}}" id="middlename" class="form-control"><br>
                                                                </div>
                                                                <div>
                                                                    <label for="status">Status</label>
                                                                    <select name="status" id="status" class="form-control">
                                                                        <option value="{{ $candidate_info->status}}" selected>{{ $candidate_info->status}}</option>
                                                                        <option value="Approved">Approved</option>
                                                                        <option value="Rejected">Rejected</option>
                                                                    </select><br>
                                                                </div>
                                                                <div>
                                                                    <label for="nationality">Nationality </label>
                                                                    <select id="country" name="country" class="form-control">
                                                                        <option value="{{ $candidate_info->nationality}}" selected>{{ $candidate_info->nationality}}</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>


                                                                        </select><br>
                                                                </div>
                                                                <div>
                                                                    <label for="dob">Date of Birth </label>
                                                                    <input type="date" name="dob" id="dob" value="{{ $candidate_info->dob }}" class="form-control" ><br>
                                                                </div>
                                                                <div>
                                                                    <label for="email">Email</label>
                                                                    <input type="email" name="email" id="email" value="{{ $candidate_info->email }}"  class="form-control"><br>
                                                                </div>
                                                                <div>
                                                                    <label for="phoneno">Phone Number</label>
                                                                    <input type="text" name="phoneno" id="phoneno" value="{{ $candidate_info->phone_no }}" class="form-control"><br>
                                                                </div>
                                                                <div>
                                                                    <label for="gid">Generated ID</label>
                                                                    <input type="text" name="gid" id="gid" value="{{ $candidate_info->generated_id }}" class="form-control" readonly><br>
                                                                </div>
                                                                <div>
                                                                    <label for="postcode">Post Code </label>
                                                                    <input type="number" name="postcode" id="postcode" value="{{ $candidate_info->post_code }}" class="form-control" ><br>
                                                                </div>

                                                            </div>
														</div>
														<ul class="list-inline wizard mb-0">
														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
														</li>
														<li class="next list-inline-item float-right"><a id="next_button" href="#" class="btn btn-info mb-0 waves-effect waves-light">Next</a></li>
													</ul>
													</div>
													<div class="tab-pane m-t-10 fade" id="tab2">
                                                    <h4 class="update_settings text-center">Other Information</h4>
														<div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="emirates">Emirates </label>
                                                                    <select name="emirates" id="emirates" class="form-control" >
                                                                        <option value="{{ $candidate_info->emirates }}" selected>{{ $candidate_info->emirates }}</option>
                                                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                                                        <option value="Ajman">Ajman</option>
                                                                        <option value="Dubai">Dubai</option>
                                                                        <option value="Fujairah">Fujairah</option>
                                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                                        <option value="Sharjah">Sharjah</option>
                                                                        <option value="Umm Al Quwain">Umm Al Quwain</option>
                                                                    </select><br>
                                                                </div>
                                                                <div>
                                                                    
                                                                    <label for="spoken_lang">Spoken Language</label>
                                                                    
                                                                    <select name="spoken_lang" id="spoken_lang"class="form-control" value="{{ $candidate_info->spoken_language }}"data-placeholder="{{ $candidate_info->spoken_language }}">
                                                                        <option value="{{ $candidate_info->spoken_language }}" selected>{{ $candidate_info->spoken_language }}</option>
                                                                        <option value="AF">Afrikaans</option>
                                                                        <option value="SQ">Albanian</option>
                                                                        <option value="AR">Arabic</option>
                                                                        <option value="HY">Armenian</option>
                                                                        <option value="EU">Basque</option>
                                                                        <option value="BN">Bengali</option>
                                                                        <option value="BG">Bulgarian</option>
                                                                        <option value="CA">Catalan</option>
                                                                        <option value="KM">Cambodian</option>
                                                                        <option value="ZH">Chinese (Mandarin)</option>
                                                                        <option value="HR">Croatian</option>
                                                                        <option value="CS">Czech</option>
                                                                        <option value="DA">Danish</option>
                                                                        <option value="NL">Dutch</option>
                                                                        <option value="EN">English</option>
                                                                        <option value="ET">Estonian</option>
                                                                        <option value="FJ">Fiji</option>
                                                                        <option value="FI">Finnish</option>
                                                                        <option value="FR">French</option>
                                                                        <option value="KA">Georgian</option>
                                                                        <option value="DE">German</option>
                                                                        <option value="EL">Greek</option>
                                                                        <option value="GU">Gujarati</option>
                                                                        <option value="HE">Hebrew</option>
                                                                        <option value="HI">Hindi</option>
                                                                        <option value="HU">Hungarian</option>
                                                                        <option value="IS">Icelandic</option>
                                                                        <option value="ID">Indonesian</option>
                                                                        <option value="GA">Irish</option>
                                                                        <option value="IT">Italian</option>
                                                                        <option value="JA">Japanese</option>
                                                                        <option value="JW">Javanese</option>
                                                                        <option value="KO">Korean</option>
                                                                        <option value="LA">Latin</option>
                                                                        <option value="LV">Latvian</option>
                                                                        <option value="LT">Lithuanian</option>
                                                                        <option value="MK">Macedonian</option>
                                                                        <option value="MS">Malay</option>
                                                                        <option value="ML">Malayalam</option>
                                                                        <option value="MT">Maltese</option>
                                                                        <option value="MI">Maori</option>
                                                                        <option value="MR">Marathi</option>
                                                                        <option value="MN">Mongolian</option>
                                                                        <option value="NE">Nepali</option>
                                                                        <option value="NO">Norwegian</option>
                                                                        <option value="FA">Persian</option>
                                                                        <option value="PL">Polish</option>
                                                                        <option value="PT">Portuguese</option>
                                                                        <option value="PA">Punjabi</option>
                                                                        <option value="QU">Quechua</option>
                                                                        <option value="RO">Romanian</option>
                                                                        <option value="RU">Russian</option>
                                                                        <option value="SM">Samoan</option>
                                                                        <option value="SR">Serbian</option>
                                                                        <option value="SK">Slovak</option>
                                                                        <option value="SL">Slovenian</option>
                                                                        <option value="ES">Spanish</option>
                                                                        <option value="SW">Swahili</option>
                                                                        <option value="SV">Swedish </option>
                                                                        <option value="TA">Tamil</option>
                                                                        <option value="TT">Tatar</option>
                                                                        <option value="TE">Telugu</option>
                                                                        <option value="TH">Thai</option>
                                                                        <option value="BO">Tibetan</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TR">Turkish</option>
                                                                        <option value="UK">Ukrainian</option>
                                                                        <option value="UR">Urdu</option>
                                                                        <option value="UZ">Uzbek</option>
                                                                        <option value="VI">Vietnamese</option>
                                                                        <option value="CY">Welsh</option>
                                                                        <option value="XH">Xhosa</option>
                                                                        </select><br>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="marital_status">Marital Status </label><br>
                                                                    <select name="marital_status" id="marital_status" class="form-control" >
                                                                        @if($candidate_info->marital_status == NULL)
                                                                        <option value="Married"><b>Married</b></option>
                                                                        <option value="Single"><b>Single</b></option>
                                                                        @elseif($candidate_info->marital_status == "Married")
                                                                        <option value="Married" selected><b>Married</b></option>
                                                                        <option value="Single"><b>Single</b></option>
                                                                        @elseif($candidate_info->marital_status == "Single")
                                                                        <option value="Married" ><b>Married</b></option>
                                                                        <option value="Single" selected><b>Single</b></option>
                                                                        @endif
                                                                    </select><br>
                                                                </div>
                                                                <div>
                                                                    <label for="experince">Experiance</label>
                                                                    <textarea type="text" name="experince" value="{{ $candidate_info->experience }}" id="experince" class="form-control"></textarea><br>
                                                                </div>
                                                            </div>
														</div>
                                                        <div class="">
                                                            <div>
                                                                <label for="address">Address</label>
                                                                <textarea type="text" name="address" value="{{ $candidate_info->address }}" id="address" class="form-control"></textarea><br>
                                                            </div>
                                                        </div>
                                                        <ul class="list-inline wizard mb-0">
														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
														</li>
														<li class="next list-inline-item float-right"><a id="next_button" href="#" class="btn btn-info mb-0 waves-effect waves-light">Next</a></li>
													</ul>
													</div>
													<div class="tab-pane m-t-10 fade" id="tab3">
                                                        <table class="table">
                                                                <tr>
                                                                    <th>Approved from AUTH</th>
                                                                    <td><input type="radio" name="approvedbyauth" onclick="approvedByAuth()" id="yes"> <span>Yes</span>
                                                                    <input type="radio"name="approvedbyauth" onclick="approvedByAuth()" id="no"> <span>No</span></td>
                                                                </tr>
                                                            </table>
														<div class="row" id="non-auth" style="display: none;">
                                                            <p>some info</p>
														</div>
                                                        <div class="row" id="auth" style="display: none;">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label for="approval_id">Approval ID</label>
                                                                    <input type="text" id="approval_id" name="approval_id" class="form control" >
                                                                </div><br>
                                                                <div>
                                                                    <h4 class="update_settings">Attacments</h4><br>
                                                                </div>
                                                                <div>
                                                                    <label for="passport_attach">Passport Attacments </label>
                                                                    <input type="file" name="passports[]" id="passports" class="form-control">
                                                                </div>
                                                                <div>
                                                                    <label for="emirates_id_attach">Emirates ID Attacments </label>
                                                                    <input type="file" name="emirates_id_attachs[]" id="emirates_id_attach" class="form-control">
                                                                </div>
                                                                <div>
                                                                    <label for="personal_photo_attach">Personal Photo Attacments </label>
                                                                    <input type="file" name="personal_photo_attach[]" id="personal_photo_attach" class="form-control">
                                                                </div>
                                                                <div>
                                                                    <label for="qualification_attach">Qualification Attacments </label>
                                                                    <input type="file" name="qualification_attach[]" id="qualification_attach" class="form-control">
                                                                </div>
                                                            </div>


														</div>
                                                        <p class="text-center"><button type="submit" class="btn btn-info">Save</button></p>
                                                        <ul class="list-inline wizard mb-0">
														<li class="previous list-inline-item"><a href="#" class="btn btn-info mb-0 waves-effect waves-light">Previous</a>
														
													</ul>
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