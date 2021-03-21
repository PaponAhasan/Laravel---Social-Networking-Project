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
                                <img src="{{asset('frontend/images/resources/profile-image.jpg') }}" alt="">
                                <ul class="profile-controls">
                                    {{-- <li><a href="#" title="Add friend" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a></li>
                                    <li><a href="#" title="Follow" data-toggle="tooltip"><i class="fa fa-star"></i></a></li> --}}
                                    <li><a class="send-mesg" href="#" title="Send Message" data-toggle="tooltip"><i class="fa fa-comment"></i></a></li>
                                    <li>
                                        <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                                            <ul class="more-dropdown">
                                                <li><a href="setting.html" title="">Update Profile Photo</a></li>
                                                <li><a href="setting.html" title="">Update Header Photo</a></li>
                                                <li><a href="setting.html" title="">Account Settings</a></li>
                                                {{-- <li><a href="support-and-help.html" title="">Find Support</a></li>
                                                <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                                                <li><a href="#" title="">Block Profile</a></li> --}}
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </figure>
                            
                            <div class="profile-section">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3">
                                        <div class="profile-author">
                                            <a class="profile-author-thumb" href="about.html">
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
                                                <a class="" href="{{ route('home.profile.index',Auth::user()->id) }}">About</a>
                                            </li>
                                            <li>
                                                <a class="" href="{{ route('profile.friends') }}">Friends</a>
                                            </li>
                                            <li>
                                                <a class="active" href="{{ route('profile.photos',Auth::user()->id) }}">Photos</a>
                                            </li>
                                            <li>
                                                <a class="" href="">Videos</a>
                                            </li>
                                            <li>
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
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>	
                        </div><!-- user profile banner  -->
                        
                        <div class="col-lg-12">
                            <div class="central-meta">
                                <div class="title-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="align-left">
                                                <h5>Photos <span>{{ sizeof($post)+1 }}</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row merged20">
                                                <div class="col-lg-7 col-md-7 col-sm-7">
                                                    <form method="post">
                                                        <input type="text" placeholder="Search Photo">
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="select-options">
                                                        {{-- <select class="select">
                                                            <option>Sort by</option>
                                                            <option>A to Z</option>
                                                            <option>See All</option>
                                                            <option>Newest</option>
                                                            <option>oldest</option>
                                                        </select> --}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1">
                                                    <div class="option-list">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                        {{-- <ul>
                                                            <li class="active"><i class="fa fa-check"></i><a title="" href="#">Show Public</a></li>
                                                            <li><a title="" href="#">Show only Friends</a></li>
                                                            <li><a title="" href="#">Hide all Posts</a></li>
                                                            <li><a title="" href="#">Mute Notifications</a></li>
                                                        </ul> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- title block -->
                              <div class="central-meta">
                                <div class="row merged5">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="item-box">
                                            <label class="fileContainer">
                                            <div class="item-upload album">
                                                <i class="fa fa-plus-circle"></i>
                                                <div class="upload-meta">
                                                    <h5>Upload photo or album</h5>
                                                    <span>its only take a few seconds!</span>
                                                    <input type="file" id="image" name="image" >
                                                </div>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="item-box">
                                            
                                              <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="" >
                                            <div class="over-photo">
                                                <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                                                <span>{{\Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                     </div>

                                    @foreach ($post as $img)
                                        @if ($img->user_id == Auth::user()->id)
                                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="item-box">
                                            {{-- <a class="strip" href="{{ asset('storage/'.$img->image) }}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false"> --}}
                                            <img src="{{ asset('storage/'.$img->image) }}" alt="">
                                            <div class="over-photo">
                                                <a href="#" title=""><i class="fa fa-heart"></i> 15</a>
                                                <span>{{\Carbon\Carbon::parse($img->created_at)->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                     </div>
                                      @endif
                                    @endforeach
                                </div>
                                
                                <div class="lodmore">
                                    {{-- <span>Viewing 1-15 of 62 Pictures</span> --}}
                                    <button class="btn-view btn-load-more"></button>
                                </div>
                            </div><!-- photos -->
                        </div><!-- centerl meta -->
                    </div>	
                </div>
            </div>
        </div>
    </div>	
</section>
@endsection
<!-- centerl meta -->