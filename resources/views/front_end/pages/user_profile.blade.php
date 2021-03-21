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
                        <a class="h4 author-name" href="about.html">{{ $user->name }}</a>
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
                        <a class="" href="timeline-photos.html">Photos</a>
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