@extends('front_end.layouts.app')

@section('content')
		
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
						<div class="user-profile">
							<figure>
								<img src="{{ asset('frontend/images/resources/profile-image.jpg') }}" alt="">
								<ul class="profile-controls">
									{{-- <li><a href="#" title="Add friend" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a></li> --}}
									{{-- <li><a href="#" title="Follow" data-toggle="tooltip"><i class="fa fa-star"></i></a></li> --}}
									<li><a href="#" title="Send Message" data-toggle="tooltip"><i class="fa fa-comment"></i></a></li>
									<li>
										<div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
											<ul class="more-dropdown">
												<li><a href="#" title="">Update Profile Photo</a></li>
												<li><a href="#" title="">Update Header Photo</a></li>
												<li><a href="setting.html" title="">Account Settings</a></li>
												{{-- <li><a href="support-and-help.html" title="">Find Support</a></li> --}}
												{{-- <li><a href="#" title="">Block Profile</a></li> --}}
											</ul>
										</div>
									</li>
								</ul>
							</figure>
							<div class="profile-section">
								<div class="row">
									<div class="col-lg-2">
										<div class="profile-author">
											<a class="profile-author-thumb" href="02-ProfilePage.html">
												@if (Auth::user()->image == '')
												 <img src="{{ asset('frontend/images\resources\paceholder1.jpg') }}" alt="user_image">
												@else
												  <br><br>
												 <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="author">	
												@endif
							
											</a>
											
											<div class="author-content">
												<a class="h4 author-name" href="02-ProfilePage.html">{{ Auth::user()->name }}</a>
												<div class="country">{{ Auth::user()->location }}</div>
											</div>
										</div>
									</div>
									<div class="col-lg-10">
										<ul class="profile-menu">
											<li>
												<a class="" href="{{ route('home') }}">Timeline</a>
											</li>
											<li>
												<a class="" href="{{ route('home.profile.index',Auth::user()->id) }}">About</a>
											</li>
											<li>
												<a class="" href="{{ route('profile.friends') }}">Friends</a>
											</li>
											<li>
												<a class="" href="{{ route('profile.photos',Auth::user()->id) }}">Photos</a>
											</li>
											<li>
												<a class="" href="">Videos</a>
											</li>
											{{-- <li>
												<div class="more">
													<i class="fa fa-ellipsis-h"></i>
													<ul class="more-dropdown">
														<li>
															<a href="#">Report Profile</a>
														</li>
														<li>
															<a href="#">Block Profile</a>
														</li>
													</ul>
												</div>
											</li> --}}
										</ul>
									</div>
								</div>
							</div>	
						</div><!-- user profile banner  -->
							<div class="col-lg-12">
								<div class="central-meta">
									<div class="about">
										<div class="d-flex flex-row mt-2">
											<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
												<li class="nav-item">
													<a href="#gen-setting" class="nav-link active" data-toggle="tab" ><i class="fa fa-gear"></i> General Setting</a>
												</li>
												<li class="nav-item">
													<a href="#edit-profile" class="nav-link" data-toggle="tab" ><i class="fa fa-pencil"></i> Edit Profile</a>
												</li>
												{{-- <li class="nav-item">
													<a href="#notifi" class="nav-link" data-toggle="tab" ><i class="fa fa-bell"></i> Notification</a>
												</li> --}}
												<li class="nav-item">
													<a href="#messages" class="nav-link" data-toggle="tab" ><i class="fa fa-comment"></i> Messages</a>
												</li>
												{{-- <li class="nav-item">
													<a href="#weather" class="nav-link" data-toggle="tab" ><i class="fa fa-cloud"></i> Weather Setting</a>
												</li> --}}
												{{-- <li class="nav-item">
													<a href="#page-manage" class="nav-link" data-toggle="tab" ><i class="fa fa-pencil-square-o"></i>Widgets Setting</a>
												</li> --}}
												{{-- <li class="nav-item">
													<a href="#privacy" class="nav-link" data-toggle="tab"  ><i class="fa fa-shield"></i> Privacy & Data</a>
												</li> --}}
												<li class="nav-item">
													<a href="#security" class="nav-link" data-toggle="tab" ><i class="fa fa-lock"></i> Security</a>
												</li>
												{{-- <li class="nav-item">
													<a href="#apps" class="nav-link" data-toggle="tab" ><i class="fa fa-th"></i> Apps</a>
												</li> --}}
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="gen-setting" >
													<div class="set-title">
														<h5>General Setting</h5>
														<span>People make account change here.</span>
													</div>
													{{-- <div class="onoff-options ">
														<form method="post">
															<div class="setting-row">
																<span>Sub users</span>
																<p>Enable this if you want people to follow you</p>
																<input type="checkbox" id="switch00" /> 
																<label for="switch00" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable follow me</span>
																<p>Enable this if you want people to follow you</p>
																<input type="checkbox" id="switch01" /> 
																<label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Send me notifications</span>
																<p>Send me notification emails my friends like, share or message me</p>
																<input type="checkbox" id="switch02" /> 
																<label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Text messages</span>
																<p>Send me messages to my cell phone</p>
																<input type="checkbox" id="switch03" /> 
																<label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable tagging</span>
																<p>Enable my friends to tag me on their posts</p>
																<input type="checkbox" id="switch04" /> 
																<label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Enable sound Notification</span>
																<p>You'll hear notification sound when someone sends you a private message</p>
																<input type="checkbox" id="switch05" checked=""/> 
																<label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															
															<div class="submit-btns">
																<button type="button" class="main-btn" data-ripple=""><span>Save</span></button>
																<button type="button" class="main-btn3" data-ripple=""><span>Cancel</span></button>
															</div>
														</form>
													</div> --}}
													<div class="account-delete">
														<h5>Account Changes</h5>
														<div>
															<span>Hide Your Posts and profile </span>
															<button type="button" class=""><span>Deactivate account</span></button>
														</div>	
														<div>
															<span>Delete your account and data </span>
															<button type="button" class=""><a href="{{ route('user.delete',Auth::user()->id) }}"><span>close account</span></a></button>
														</div>
													</div>
												</div><!-- general setting -->
												<div class="tab-pane fade" id="edit-profile" >
													<div class="set-title">
														<h5>Edit Profile</h5>
														<span>People on BUBT Family will get to know you with the info below</span>
													</div>
													<div class="setting-meta">
														<div class="change-photo">
															@if (Auth::user()->image == '')
															 <img src="{{asset('frontend/images\resources\paceholder1.jpg')}}" width="50" height="50" alt="user_image">
															@else
															 <figure><img src="{{ asset('storage/'.Auth::user()->image) }}" width="50" height="50" alt="user_image"></figure>	
															@endif
															<div class="edit-img">
																<form class="edit-phto" enctype="multipart/form-data" method="post" action="{{ route('picture.update',Auth::user()->id) }}">
																	@method('put')
																	@csrf
																	<label class="fileContainer">
																		<i class="fa fa-camera-retro"></i>
																		Chage DP
																	<input type="file" id="image" name="image">
																	</label>
																	<button type="submit" class="btn-sm">Uplode</button>
																</form>
															</div>
														</div>
													</div>
													<div class="stg-form-area">
														<form method="post" class="c-form" action="{{ route('profile.update',Auth::user()->id) }}">
															@method('put')
															@csrf
															<div>
																<label>Display Name</label>
																<input type="text" value="{{ $user->name }}" id="name" name="name">
															</div>
															
															<div class="uzer-nam">
																<label>User Name</label>
																<span>www.bubt.com/</span><input type="text" value="{{ $user->name }}" id="name" name="name">
															</div>
															<div>
																<label>Email Address</label>
																<input type="text" value="{{ $user->email }}" id="email" name="eamil">
															</div>
															<div>
																<label>Gender</label>
																<div class="form-radio">
																  <div class="radio">
																	<label>
																	  <input type="radio" checked="checked" id="male" name="gender" value="Male"><i class="check-box" ></i>Male
																	</label>
																  </div>
																  <div class="radio">
																	<label>
																	  <input type="radio" id="female" name="gender" value="Female"><i class="check-box"></i>Female
																	</label>
																  </div>
																	<div class="radio">
																	<label>
																	  <input type="radio"  id="other" name="gender" value="Other"><i class="check-box"></i>Other
																	</label>
																  </div>
																</div>
															</div>
															<div>
																<label>about your profile</label>
																<textarea rows="3" id="about" name="about">{{ $user->about }}</textarea>
															</div>	
																	
															<div>
																<label>Location</label>
																<input type="text" value="{{ $user->location }}" id="location" name="location">
															</div>

															<div>
																<label>Phone Number</label>
																<input type="text" value="01741885987" id="number" name="number">
															</div>

															<div>
																<label>Blood Group</label>
																<input type="text" value="A+" id="blood_group" name="blood_group">
															</div>

															<div>
																<label>Occupation</label>
																<input type="text" value="Student" id="occupation" name="occupation">
															</div>

															<div>
																<label>Hobbies</label>
																<input type="text" value="I like to ride the bicycle, swimming, and working out. I also like reading Story books, and searching on internet, and also binge watching a good hollywood Movies while it’s raining outside." id="hobbies" name="hobbies">
															</div>

															<div>
																<label>Education</label>
																<input type="text" value="B.Sc. in computer science, third years degree From BUBT Uniersity, Dhaka" id="education" name="education">
															</div>

															<div>
																<label>Interested</label>
																<input type="text" value="Coding,Swimming, Photography." id="interested" name="interested">
															</div>

															<div>
																<label>Work and experience</label>
																<input type="text" value="I am a student of bubt and third year student Student" id="work_experience" name="work_experience">
															</div>

															<div>
																<label>Country</label>
																<select id="country" name="country">
																  <option value="" selected>{{ $user->country }}</option>
																  <option value="country">Country</option>
																  <option value="AFG">Afghanistan</option>
																  <option value="ALA">Ƭand Islands</option>
																  <option value="ALB">Albania</option>
																  <option value="DZA">Algeria</option>
																  <option value="ASM">American Samoa</option>
																  <option value="AND">Andorra</option>
																  <option value="AGO">Angola</option>
																  <option value="AIA">Anguilla</option>
																  <option value="ATA">Antarctica</option>
																  <option value="ATG">Antigua and Barbuda</option>
																  <option value="ARG">Argentina</option>
																  <option value="ARM">Armenia</option>
																  <option value="ABW">Aruba</option>
																  <option value="AUS">Australia</option>
																  <option value="AUT">Austria</option>
																  <option value="AZE">Azerbaijan</option>
																  <option value="BHS">Bahamas</option>
																  <option value="BHR">Bahrain</option>
																  <option value="BGD">Bangladesh</option>
																  <option value="BRB">Barbados</option>
																  <option value="BLR">Belarus</option>
																  <option value="BEL">Belgium</option>
																  <option value="BLZ">Belize</option>
																  <option value="BEN">Benin</option>
																  <option value="BMU">Bermuda</option>
																  <option value="BTN">Bhutan</option>
																  <option value="BOL">Bolivia, Plurinational State of</option>
																  <option value="BES">Bonaire, Sint Eustatius and Saba</option>
																  <option value="BIH">Bosnia and Herzegovina</option>
																  <option value="BWA">Botswana</option>
																  <option value="BVT">Bouvet Island</option>
																  <option value="BRA">Brazil</option>
																  <option value="IOT">British Indian Ocean Territory</option>
																  <option value="BRN">Brunei Darussalam</option>
																  <option value="BGR">Bulgaria</option>
																  <option value="BFA">Burkina Faso</option>
																  <option value="BDI">Burundi</option>
																  <option value="KHM">Cambodia</option>
																  <option value="CMR">Cameroon</option>
																  <option value="CAN">Canada</option>
																  <option value="CPV">Cape Verde</option>
																  <option value="CYM">Cayman Islands</option>
																  <option value="CAF">Central African Republic</option>
																  <option value="TCD">Chad</option>
																  <option value="CHL">Chile</option>
																  <option value="CHN">China</option>
																  <option value="CXR">Christmas Island</option>
																  <option value="CCK">Cocos (Keeling) Islands</option>
																  <option value="COL">Colombia</option>
																  <option value="COM">Comoros</option>
																  <option value="COG">Congo</option>
																  <option value="COD">Congo, the Democratic Republic of the</option>
																  <option value="COK">Cook Islands</option>
																  <option value="CRI">Costa Rica</option>
																  <option value="CIV">C𴥠d'Ivoire</option>
																  <option value="HRV">Croatia</option>
																  <option value="CUB">Cuba</option>
																  <option value="CUW">Cura袯</option>
																  <option value="CYP">Cyprus</option>
																  <option value="CZE">Czech Republic</option>
																  <option value="DNK">Denmark</option>
																  <option value="DJI">Djibouti</option>
																  <option value="DMA">Dominica</option>
																  <option value="DOM">Dominican Republic</option>
																  <option value="ECU">Ecuador</option>
																  <option value="EGY">Egypt</option>
																  <option value="SLV">El Salvador</option>
																  <option value="GNQ">Equatorial Guinea</option>
																  <option value="ERI">Eritrea</option>
																  <option value="EST">Estonia</option>
																  <option value="ETH">Ethiopia</option>
																  <option value="FLK">Falkland Islands (Malvinas)</option>
																  <option value="FRO">Faroe Islands</option>
																  <option value="FJI">Fiji</option>
																  <option value="FIN">Finland</option>
																  <option value="FRA">France</option>
																  <option value="GUF">French Guiana</option>
																  <option value="PYF">French Polynesia</option>
																  <option value="ATF">French Southern Territories</option>
																  <option value="GAB">Gabon</option>
																  <option value="GMB">Gambia</option>
																  <option value="GEO">Georgia</option>
																  <option value="DEU">Germany</option>
																  <option value="GHA">Ghana</option>
																  <option value="GIB">Gibraltar</option>
																  <option value="GRC">Greece</option>
																  <option value="GRL">Greenland</option>
																  <option value="GRD">Grenada</option>
																  <option value="GLP">Guadeloupe</option>
																  <option value="GUM">Guam</option>
																  <option value="GTM">Guatemala</option>
																  <option value="GGY">Guernsey</option>
																  <option value="GIN">Guinea</option>
																  <option value="GNB">Guinea-Bissau</option>
																  <option value="GUY">Guyana</option>
																  <option value="HTI">Haiti</option>
																  <option value="HMD">Heard Island and McDonald Islands</option>
																  <option value="VAT">Holy See (Vatican City State)</option>
																  <option value="HND">Honduras</option>
																  <option value="HKG">Hong Kong</option>
																  <option value="HUN">Hungary</option>
																  <option value="ISL">Iceland</option>
																  <option value="IND">India</option>
																  <option value="IDN">Indonesia</option>
																  <option value="IRN">Iran, Islamic Republic of</option>
																  <option value="IRQ">Iraq</option>
																  <option value="IRL">Ireland</option>
																  <option value="IMN">Isle of Man</option>
																  <option value="ISR">Israel</option>
																  <option value="ITA">Italy</option>
																  <option value="JAM">Jamaica</option>
																  <option value="JPN">Japan</option>
																  <option value="JEY">Jersey</option>
																  <option value="JOR">Jordan</option>
																  <option value="KAZ">Kazakhstan</option>
																  <option value="KEN">Kenya</option>
																  <option value="KIR">Kiribati</option>
																  <option value="PRK">Korea, Democratic People's Republic of</option>
																  <option value="KOR">Korea, Republic of</option>
																  <option value="KWT">Kuwait</option>
																  <option value="KGZ">Kyrgyzstan</option>
																  <option value="LAO">Lao People's Democratic Republic</option>
																  <option value="LVA">Latvia</option>
																  <option value="LBN">Lebanon</option>
																  <option value="LSO">Lesotho</option>
																  <option value="LBR">Liberia</option>
																  <option value="LBY">Libya</option>
																  <option value="LIE">Liechtenstein</option>
																  <option value="LTU">Lithuania</option>
																  <option value="LUX">Luxembourg</option>
																  <option value="MAC">Macao</option>
																  <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
																  <option value="MDG">Madagascar</option>
																  <option value="MWI">Malawi</option>
																  <option value="MYS">Malaysia</option>
																  <option value="MDV">Maldives</option>
																  <option value="MLI">Mali</option>
																  <option value="MLT">Malta</option>
																  <option value="MHL">Marshall Islands</option>
																  <option value="MTQ">Martinique</option>
																  <option value="MRT">Mauritania</option>
																  <option value="MUS">Mauritius</option>
																  <option value="MYT">Mayotte</option>
																  <option value="MEX">Mexico</option>
																  <option value="FSM">Micronesia, Federated States of</option>
																  <option value="MDA">Moldova, Republic of</option>
																  <option value="MCO">Monaco</option>
																  <option value="MNG">Mongolia</option>
																  <option value="MNE">Montenegro</option>
																  <option value="MSR">Montserrat</option>
																  <option value="MAR">Morocco</option>
																  <option value="MOZ">Mozambique</option>
																  <option value="MMR">Myanmar</option>
																  <option value="NAM">Namibia</option>
																  <option value="NRU">Nauru</option>
																  <option value="NPL">Nepal</option>
																  <option value="NLD">Netherlands</option>
																  <option value="NCL">New Caledonia</option>
																  <option value="NZL">New Zealand</option>
																  <option value="NIC">Nicaragua</option>
																  <option value="NER">Niger</option>
																  <option value="NGA">Nigeria</option>
																  <option value="NIU">Niue</option>
																  <option value="NFK">Norfolk Island</option>
																  <option value="MNP">Northern Mariana Islands</option>
																  <option value="NOR">Norway</option>
																  <option value="OMN">Oman</option>
																  <option value="PAK">Pakistan</option>
																  <option value="PLW">Palau</option>
																  <option value="PSE">Palestinian Territory, Occupied</option>
																  <option value="PAN">Panama</option>
																  <option value="PNG">Papua New Guinea</option>
																  <option value="PRY">Paraguay</option>
																  <option value="PER">Peru</option>
																  <option value="PHL">Philippines</option>
																  <option value="PCN">Pitcairn</option>
																  <option value="POL">Poland</option>
																  <option value="PRT">Portugal</option>
																  <option value="PRI">Puerto Rico</option>
																  <option value="QAT">Qatar</option>
																  <option value="REU">R궮ion</option>
																  <option value="ROU">Romania</option>
																  <option value="RUS">Russian Federation</option>
																  <option value="RWA">Rwanda</option>
																  <option value="BLM">Saint Barthꭥmy</option>
																  <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
																  <option value="KNA">Saint Kitts and Nevis</option>
																  <option value="LCA">Saint Lucia</option>
																  <option value="MAF">Saint Martin (French part)</option>
																  <option value="SPM">Saint Pierre and Miquelon</option>
																  <option value="VCT">Saint Vincent and the Grenadines</option>
																  <option value="WSM">Samoa</option>
																  <option value="SMR">San Marino</option>
																  <option value="STP">Sao Tome and Principe</option>
																  <option value="SAU">Saudi Arabia</option>
																  <option value="SEN">Senegal</option>
																  <option value="SRB">Serbia</option>
																  <option value="SYC">Seychelles</option>
																  <option value="SLE">Sierra Leone</option>
																  <option value="SGP">Singapore</option>
																  <option value="SXM">Sint Maarten (Dutch part)</option>
																  <option value="SVK">Slovakia</option>
																  <option value="SVN">Slovenia</option>
																  <option value="SLB">Solomon Islands</option>
																  <option value="SOM">Somalia</option>
																  <option value="ZAF">South Africa</option>
																  <option value="SGS">South Georgia and the South Sandwich Islands</option>
																  <option value="SSD">South Sudan</option>
																  <option value="ESP">Spain</option>
																  <option value="LKA">Sri Lanka</option>
																  <option value="SDN">Sudan</option>
																  <option value="SUR">Suriname</option>
																  <option value="SJM">Svalbard and Jan Mayen</option>
																  <option value="SWZ">Swaziland</option>
																  <option value="SWE">Sweden</option>
																  <option value="CHE">Switzerland</option>
																  <option value="SYR">Syrian Arab Republic</option>
																  <option value="TWN">Taiwan, Province of China</option>
																  <option value="TJK">Tajikistan</option>
																  <option value="TZA">Tanzania, United Republic of</option>
																  <option value="THA">Thailand</option>
																  <option value="TLS">Timor-Leste</option>
																  <option value="TGO">Togo</option>
																  <option value="TKL">Tokelau</option>
																  <option value="TON">Tonga</option>
																  <option value="TTO">Trinidad and Tobago</option>
																  <option value="TUN">Tunisia</option>
																  <option value="TUR">Turkey</option>
																  <option value="TKM">Turkmenistan</option>
																  <option value="TCA">Turks and Caicos Islands</option>
																  <option value="TUV">Tuvalu</option>
																  <option value="UGA">Uganda</option>
																  <option value="UKR">Ukraine</option>
																  <option value="ARE">United Arab Emirates</option>
																  <option value="GBR">United Kingdom</option>
																  <option value="USA">United States</option>
																  <option value="UMI">United States Minor Outlying Islands</option>
																  <option value="URY">Uruguay</option>
																  <option value="UZB">Uzbekistan</option>
																  <option value="VUT">Vanuatu</option>
																  <option value="VEN">Venezuela, Bolivarian Republic of</option>
																  <option value="VNM">Viet Nam</option>
																  <option value="VGB">Virgin Islands, British</option>
																  <option value="VIR">Virgin Islands, U.S.</option>
																  <option value="WLF">Wallis and Futuna</option>
																  <option value="ESH">Western Sahara</option>
																  <option value="YEM">Yemen</option>
																  <option value="ZMB">Zambia</option>
																  <option value="ZWE">Zimbabwe</option>
															  </select>
															</div>

															<div>
																<a href="{{ route('home') }}"><button type="submit" data-ripple="">Cancel</button></a>
																<button type="submit" data-ripple="">Save</button>
															</div>
														</form>
													</div>
												</div><!-- edit profile -->
												<div class="tab-pane fade" id="notifi" role="tabpanel">
													<div class="set-title">
														<h5>Notification Setting</h5>
														<span>Select push and email notifications you'd like to receive.</span>
													</div>
													<div class="notifi-seting">
														<div class="form-radio">
														  <div class="radio">
															<label>
															  <input type="radio" checked="checked" name="radio"><i class="check-box"></i>
																Send Me emails about my activity except emails i have unsubscribe from
															</label>
														  </div>
														  <div class="radio">
															<label>
															  <input type="radio" name="radio"><i class="check-box"></i>
																Only send me required services announcements.
															</label>
														  </div>
														</div>
														<div class="set-title">
															<h6>i'd like to receive emails and updates from Pitnik about</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Always General announcement, updates, posts, and videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Personalise tips for my page. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Announcements and recommendations. 
														  </label>
															<p><a href="#" title="">learn more</a> about emails from pitnik</p>
														</div>
														<div class="set-title">
															<h6>Other Notifications</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Recommended videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  activity on my page or channel. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Activity on my comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Reply to comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Mentions. 
														  </label>
															
														</div>
														<div class="set-title">
															<h6>Language Preference</h6>
															<span>Select your email language</span>
														</div>
														<select class="select">
															<option value="">Eglish US</option>
															<option value="">Eglish UK</option>
															<option value="">Russia</option>
														</select>
														<p>
															you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
														</p>
													</div>
												</div><!-- notification -->
												<div class="tab-pane fade" id="messages" role="tabpanel">
													<div class="set-title">
														<h5>Messages Setting</h5>
														<span>Set your login preference, help us personalize your experience and make big account change here.</span>
														<div class="mesg-seting">
{{-- 														
														<div class="set-title">
															<h6>i'd like to receive emails and updates from Pitnik about</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Always General announcement, updates, posts, and videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Personalise tips for my page. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Announcements and recommendations. 
														  </label>
															<p><a href="#" title="">learn more</a> about emails from pitnik</p>
														</div>
														<div class="set-title">
															<h6>Other Messages</h6>
														</div>	
														<div class="checkbox">
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  From Recommended videos. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Messages from activity on my page or channel. 
														  </label>
														  <label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Message me the replyer Activity on my comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Reply to comments. 
														  </label>
															<label>
															<input type="checkbox" checked="checked"><i class="check-box"></i>
															  Mentions. 
														  </label>
															
														</div>
														<div class="set-title">
															<h6>Language Preference</h6>
															<span>Select your Messages language</span>
														</div>
														<select class="select">
															<option value="">Eglish US</option>
															<option value="">Eglish UK</option>
															<option value="">Russia</option>
														</select>
														<p>
															you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
														</p> --}}
													</div>
													</div>
												</div><!-- messages -->
												<div class="tab-pane fade" id="weather" role="tabpanel">
													<div class="set-title">
														<h5>Weather Widget Setting</h5>
														<span>Set your weather widget or page setting.</span>
														<div class="mesg-seting">
															<div class="set-title">
																<h6>Country & Timezone</h6>
																<span>Select your Country Time Zone</span>
															</div>
															<select class="select">
																<option value="">US (UTC-8)</option>
																<option value="">Ontario(UTC-7)</option>
																<option value="">Nova Scotia(UTC-5)</option>
															</select>
															<div class="set-title">
																<h6>Temperature Unit</h6>
															</div>
															<select class="select">
																<option value="">F° (Farenheit)</option>
																<option value="">C° (Celsius)</option>
															</select>
															<div class="set-title">
																<h6>Show Extended forecast</h6>
															</div>
															<div class="checkbox">
															  <label>
																<input type="checkbox" checked="checked"><i class="check-box"></i>
																  Show Extended Forecast on Widget. 
															  </label>
																<p><a href="#" title="">learn more</a></p>
															</div>
															<div class="set-title">
																<h6>Forecast Days</h6>
															</div>
															<select class="select">
																<option value="">Next Day</option>
																<option value="">Next week</option>
																<option value="">Next Month</option>
																<option value="">Next Year</option>
															</select>
															<p>
																you will always get Daily notifications you have turned on for individual.
															</p>
															<div>
															<form>
																<button class="main-btn" data-ripple="" type="submit">Save</button>
																<button class="main-btn3" data-ripple="" type="submit">Cancel</button>
																
															</form>	
															</div>
														</div>
													</div>
												</div><!-- weather widget setting -->
												<div class="tab-pane fade" id="page-manage" role="tabpanel">
													<div class="set-title">
														<h5>Page & sidebar</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info"><a href="manage-page.html">Click here</a> to go widget and page setting area</p>
												</div><!-- privacy -->
												<div class="tab-pane fade" id="privacy" role="tabpanel">
													<div class="set-title">
														<h5>Privacy & data</h5>
														<span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
													</div>
													<div class="onoff-options ">
														<form method="post">
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>Hide your profile from search engine (Ex.google) <a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0001" /> 
																<label for="switch0001" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="set-title">
																<h5>Personalization</h5>
															</div>	
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>use sites you visit to improve which recommendation and ads you see. <a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0002" /> 
																<label for="switch0002" data-on-label="ON" data-off-label="OFF"></label>
															</div>
															<div class="setting-row">
																<span>Search Privacy</span>
																<p>use information from our partners to improve which ads you see<a href="#" title="">Learn more</a>
																</p>
																<input type="checkbox" id="switch0003" /> 
																<label for="switch0003" data-on-label="ON" data-off-label="OFF"></label>
															</div>
														</form>
													</div>
												</div><!-- privacy -->
												<div class="tab-pane fade" id="security" role="tabpanel">
													<div class="set-title">
														<h5>Security Setting</h5>
														<span>trun on two factor authentication and check your list of connected device to keep your account posts safe <a href="#" title="">Learn More</a>.</span>
													</div>
													{{-- <div class="seting-box">
														<p>to turn on two-factor authentication, you must <a href="#" title=""> confirm Your Email </a> and <a href="#" title="">Set Password</a></p>
														<div class="set-title">
															<h5>Connected Devicese</h5>
														</div>
														<p>This is a list of devices that have logged into your account, Revok any session that you do not recognize. <a href="#" title="">Hide Sessions</a></p>
														<span>Last Accessed</span>
														<p>August 30, 2020 12:25AM</p>
														<span>Location</span>
														<p>Berlin, Germany (based on IP = 103.233.24.5)</p>
														<span>Device Type</span>
														<p>Chrome on windows 10</p>
													</div> --}}
												</div><!-- security -->
												<div class="tab-pane fade" id="apps" role="tabpanel">
													<div class="set-title">
														<h5>Apps</h5>
														<span>Keep track of everywhere you have login with your pintik profile and remove access from apps you are no longer using with pitnik <a href="#" title="">Learn more</a></span>
													</div>
													<p class="p-info">You have not approved any app</p>
												</div><!-- apps -->
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
							{{-- <div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<h4 class="widget-title">Your page</h4>	
											<div class="your-page">
												<figure>
													<a title="" href="#"><img alt="" src="{{ asset('frontend/images/resources/friend-avatar9.jpg') }}"></a>
												</figure>
												<div class="page-meta">
													<a class="underline" title="" href="#">My page</a>
													<span><i class="ti-comment"></i>Messages <em class="bg-blue">9</em></span>
													<span><i class="ti-bell"></i>Notifications <em class="bg-purple">2</em></span>
												</div>
												<div class="page-likes">
													<ul class="nav nav-tabs likes-btn">
														<li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
														 <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
													  <div id="link1" class="tab-pane active fade show">
														<span><i class="ti-heart"></i>884</span>
														  <a title="weekly-likes" href="#">35 new likes this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-1.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-2.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-3.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-4.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-5.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-6.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-7.jpg') }}">  
															</a>  
														  </div>
													  </div>
													  <div id="link2" class="tab-pane fade">
														  <span><i class="ti-eye"></i>445</span>
														  <a title="weekly-likes" href="#">440 new views this week</a>
														  <div class="users-thumb-list">
														  	<a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-1.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="frank">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-2.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-3.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-4.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-5.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-6.jpg') }}">  
															</a>
															<a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
																<img alt="" src="{{ asset('frontend/images/resources/userlist-7.jpg') }}">  
															</a>  
														  </div>
													  </div>
													</div>
												</div>
											</div>
										</div>
								</aside>
							</div><!-- sidebar --> --}}
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

@endsection