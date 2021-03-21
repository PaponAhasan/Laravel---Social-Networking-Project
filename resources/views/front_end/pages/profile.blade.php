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
                                        <img src="{{ asset('frontend/images/resources/profile-image.jpg')}}" alt="">
                                        <ul class="profile-controls">
                                            {{-- <li><a href="#" title="Add friend" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a></li>
                                            <li><a href="#" title="Follow" data-toggle="tooltip"><i class="fa fa-star"></i></a></li> --}}
                                            <li><a class="send-mesg" href="#" title="Send Message" data-toggle="tooltip"><i class="fa fa-comment"></i></a></li>
                                            {{-- <li>
                                                <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                                                    <ul class="more-dropdown">
                                                        <li><a href="setting.html" title="">Update Profile Photo</a></li>
                                                        <li><a href="setting.html" title="">Update Header Photo</a></li>
                                                        <li><a href="setting.html" title="">Account Settings</a></li>
                                                        <li><a href="support-and-help.html" title="">Find Support</a></li>
                                                        <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                                                        <li><a href="#" title="">Block Profile</a></li>
                                                    </ul>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </figure>

                                    <div class="profile-section">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3">
                                                <div class="profile-author">
                                                    <a class="profile-author-thumb" href="about.html">
                                                        {{-- <img alt="author" src="{{ asset('frontend/images/resources/papon_photo.jpg')}}"> --}}
                                                        @if (Auth::user()->image == '')
                                                          <img src="{{ asset('frontend/images\resources\paceholder1.jpg') }}" alt="user_image">
                                                        @else
                                                        <br><br>
                                                          <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="author">	
                                                        @endif
                                                    </a>
                                                    <div class="author-content">
                                                        <a class="h4 author-name" href="">{{ $user->name }}</a>
                                                        <div class="country">{{ $user->country }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-9">
                                                <ul class="profile-menu">
                                                    <li>
                                                        <a class="" href="{{ route('home') }}">Timeline</a>
                                                    </li>
                                                    <li>
                                                        <a class="active" href="{{ route('home.profile.index',Auth::user()->id) }}">About</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ route('profile.friends') }}">Friends</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="{{ route('profile.photos',Auth::user()->id) }}">Photos</a>
                                                    </li>
                                                    <li>
                                                        <a class="" href="timeline-videos.html">Videos</a>
                                                    </li>
                                                    {{-- <li>
                                                        <div class="more">
                                                            <i class="fa fa-ellipsis-h"></i>
                                                            <ul class="more-dropdown">
                                                                <li>
                                                                    <a href="timeline-groups.html">Profile Groups</a>
                                                                </li>
                                                                <li>
                                                                    <a href="statistics.html">Profile Analytics</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- user profile banner  -->
                                <div class="col-lg-4 col-md-4">
                                    <div class="central-meta stick-widget">
                                        <span class="create-post">Personal Info</span>
                                        <div class="personal-head">
                                            <span class="f-title"><i class="fa fa-user"></i> About Me:</span>
                                            <p>
                                                {{-- Hi, I’m Rakibul Ahasan, I’m 24 and I am student at Bangladesh Universiy of Business and Technology, Mirpur,Dhaka --}}
                                                {{ $user->about }}
                                            </p>
                                            <span class="f-title"><i class="fa fa-birthday-cake"></i> Birthday:</span>
                                            <p>
                                                September, 1997
                                            </p>
                                            <span class="f-title"><i class="fa fa-phone"></i> Phone Number:</span>
                                            <p>
                                                01741885987
                                            </p>
                                            <span class="f-title"><i class="fa fa-medkit"></i> Blood group:</span>
                                            <p>
                                                A+
                                            </p>
                                            <span class="f-title"><i class="fa fa-male"></i> Gender:</span>
                                            <p>
                                                {{ $user->gender }}
                                            </p>
                                            <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                            <p>
                                                {{ $user->location.','.$user->country }}
                                            </p>
                                            <span class="f-title"><i class="fa fa-briefcase"></i> Occupation:</span>
                                            <p>
                                                Student
                                            </p>
                                            <span class="f-title"><i class="fa fa-handshake-o"></i> Joined:</span>
                                            <p>
                                                {{-- Jun 18, 2018 --}}
                
                                                    {{ $user->created_at }}
                                                
                                            </p>

                                            <span class="f-title"><i class="fa fa-envelope"></i> Email & Website:</span>
                                            <p>
                                                {{-- <a href="wpkixx.html" title="">www.wpkixx.com</a> <a href="http://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84d4edf0eaedefc4fdebf1f6e9e5ede8aae7ebe9">[email&#160;protected]</a> --}}
                                                <a>{{ $user->email }}</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="central-meta">
                                        <span class="create-post">General Info
                                            {{-- <a href="#" title="">See All</a> --}}
                                        </span>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-puzzle-piece"></i> Hobbies</span>
                                                    <p>
                                                        I like to ride the bicycle, swimming, and working out. I also like reading Story books, and searching on internet, and also binge watching a good hollywood Movies while it’s raining outside.
                                                    </p>
                                                </div>
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-plus"></i> Others Interests</span>
                                                    <p>
                                                        Coding,Swimming, Photography.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-mortar-board"></i> Education</span>
                                                    <p>
                                                       B.Sc. in computer science, third years degree From <a href="#" title="">BUBT Uniersity, Dhaka</a>
                                                    </p>
                                                </div>
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-certificate"></i> Work and experience</span>
                                                    <p>
                                                        I am a student of bubt and third year student <a href="#" title="">Student</a>
                                                    </p>
                                                </div>
                                                <div class="gen-metabox">
                                                    <span><i class="fa fa-certificate"></i> BUBT Info</span>
                                                    <p>
                
                                                        Name : <a href="#" title=""> Rakibul Ahasan</a><br>
                                                        ID :<a href="#" title=""> 17183103022</a><br>
                                                        Intake :<a href="#" title=""> 39</a><br>
                                                        Section :<a href="#" title=""> 01</a><br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="gen-metabox no-margin">
                                                    <span><i class="fa fa-sitemap"></i> BUBT Family</span>
                                                    <ul class="sociaz-media">
                                                        <li><a class="facebook" href="https://www.facebook.com/" title="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a class="twitter" href="https://twitter.com/" title="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a class="google" href="https://www.google.com/" title="" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        {{-- <li><a class="vk" href="#" title=""><i class="fa fa-vk"></i></a></li> --}}
                                                        <li><a class="instagram" href="https://www.instagram.com/" title="" target="_blank"><i class="fa fa-instagram"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-6">
                                                <div class="gen-metabox no-margin">
                                                    <span><i class="fa fa-trophy"></i> Badges</span>
                                                    <ul class="badged">
                                                        <li><img src="{{ asset('frontend/images/badges/badge2.png')}}" alt=""></li>
                                                        <li><img src="{{ asset('frontend/images/badges/badge19.png')}}" alt=""></li>
                                                        <li><img src="{{ asset('frontend/images/badges/badge21.png')}}" alt=""></li>
                                                        <li><img src="{{ asset('frontend/images/badges/badge3.png')}}" alt=""></li>
                                                        <li><img src="{{ asset('frontend/images/badges/badge4.png')}}" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="central-meta">
                                        <span class="create-post">Favourit Movies & TV Shows (33) <a href="#" title="">See All</a></span>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="fav-play">
                                                    <figure>
                                                        <img src="{{ asset('frontend/images/resources/tvplay1.jpg')}}" alt="">
                                                    </figure>
                                                    <span class="tv-play-title">Attaturk Tv Series 2017 </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="fav-play">
                                                    <figure>
                                                        <img src="{{ asset('frontend/images/resources/tvplay2.jpg')}}" alt="">
                                                    </figure>
                                                    <span class="tv-play-title">Thor Hollywood Movie 2017 </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="fav-play">
                                                    <figure>
                                                        <img src="{{ asset('frontend/images/resources/tvplay3.jpg')}}" alt="">
                                                    </figure>
                                                    <span class="tv-play-title">Spider Men 2015 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="central-meta">
                                        <span class="create-post">Friend's (320) <a href="timeline-friends2.html" title="">See All</a></span>
                                        <ul class="frndz-list">
                                            <li>
                                                <img src="{{ asset('frontend/images/resources/recent1.jpg')}}" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Olivia</a>
                                                    <span>1 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#" title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/resources/recent2.jpg')}}" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Emma watson</a>
                                                    <span>2 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#" title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/resources/recent3.jpg')}}" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Isabella</a>
                                                    <span><a href="#" title="">Emmy</a> is mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#" title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/resources/recent4.jpg')}}" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Amelia</a>
                                                    <span>5 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#" title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/resources/recent5.jpg')}}" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Sophia</a>
                                                    <span>1 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#" title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/resources/recent6.jpg')}}" alt="">
                                                <div class="sugtd-frnd-meta">
                                                    <a href="#" title="">Amelia</a>
                                                    <span>3 mutual friend</span>
                                                    <ul class="add-remove-frnd">
                                                        <li class="add-tofrndlist"><a class="send-mesg" href="#" title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                        <li class="remove-frnd"><a href="#" title="remove friend"><i class="fa fa-user-times"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <!-- friends list -->
                                    {{-- <div class="central-meta">
                                        <span class="create-post">Photos (580) <a href="timeline-photos.html" title="">See All</a></span>
                                        <ul class="photos-list">
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-22.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo2.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>15</span></div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-33.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo3.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>20</span></div>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-44.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo4.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>155</span></div>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-55.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo5.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>201</span></div>
                                                        <span>3 weeks ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-66.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo6.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>81</span></div>
                                                        <span>2 months ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-77.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo7.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>98</span></div>
                                                        <span>1 day</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a class="strip" href="{{ asset('frontend/images/resources/photo-88.jpg')}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="{{ asset('frontend/images/resources/photo8.jpg')}}" alt=""></a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>87</span></div>
                                                        <span>23 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    {{-- <div class="central-meta">
                                        <span class="create-post">Videos (33) <a href="timeline-videos.html" title="">See All</a></span>
                                        <ul class="videos-list">
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/vid-11.jpg" alt="">
                                                        <i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
												  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
												</i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>15</span></div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/vid-12.jpg" alt="">
                                                        <i>
													<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px"
													 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>20</span></div>
                                                        <span>20 hours ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/vid-10.jpg" alt="">
                                                        <i>
														<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px"
														 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>49</span></div>
                                                        <span>20 days ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/vid-9.jpg" alt="">
                                                        <i>
														<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px"
														 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>156</span></div>
                                                        <span>Yesterday</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-box">
                                                    <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="images/resources/vid-6.jpg" alt="">
                                                        <i>
														<svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px"
														 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
													  <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
													</i>
                                                    </a>
                                                    <div class="over-photo">
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>202</span></div>
                                                        <span>3 weeks ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection