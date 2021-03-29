<div class="responsive-header">
    <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
        <span class="mh-text">
            {{-- <a>Bubt Family</a> --}}
				<a href="newsfeed.html" title=""><img src="{{asset('frontend/images\logo_bubt6.png')}}" alt=""></a>
			</span>
        <span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
		</span>
    </div>

    <div class="mh-head second">
        <form class="mh-form">
            <input placeholder="search" name="country" id="country">
            <a href="#/" class="fa fa-search"></a>
        </form>
    </div>

    <nav id="shoppingbag">
        <div>
               <div class="setting-row">
                   <li><a href="{{ route('home.profile.index',Auth::user()->id) }}" title=""><i class="ti-user"></i> view profile</a></li>
                </div>
                <div class="setting-row">
                     <li><a href="{{ route('home.profile.edit',Auth::user()->id) }}" title=""><i class="ti-pencil-alt"></i>edit profile</a></li>
                 </div>
                 <div class="setting-row">
                     <a href="logout.html" title="" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                         <i class="ti-power-off"></i>log out
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                 </div>
        </div>
    </nav>

</div><!-- responsive header(Mobile) -->
<div class="topbar stick">
    <div class="logo">
        <a title="" href="{{ route('home') }}"><img width="60" src="{{asset('frontend/images\logo_bubt5.png')}}" alt=""></a>
    </div>
    <div class="top-area">

       <div class="main-menu">
				<span>
			    	<i class="fa fa-braille"></i>
			    </span>
        </div>

        <div class="top-search">
            <form action="{{ route('web.find') }}" method="GET">
                <input type="text" placeholder="Search People" name="query" id="query" value="{{ request()->input('query') }}">
                <button data-ripple=""><i class="ti-search"></i></button>
            </form>
            <div id="country_list"></div>
        </div>

       <div class="page-name">
            <span>About</span>
        </div>
        <ul class="">
            <li><a href="{{ route('home') }}" title="Home" data-ripple=""><i class="fa fa-home"></i></a></li>
            <li>
                <a href="" title="Friend Requests" data-ripple="">
                    <i class="fa fa-user"></i>
                    {{-- <em class="bg-red">5</em> --}}
                </a>
            
            </li>
            <li>
                <a href="#" title="Notification" data-ripple="">
                    <i class="fa fa-bell"></i>
                    {{-- <em class="bg-purple">7</em> --}}
                </a>
               
            </li>
           
                <a href="{{ route('profile.friends') }}" title="Messages" data-ripple=""><i class="fa fa-commenting"></i>
                    {{-- <em class="bg-blue">9</em> --}}
                </a>
               
            </li>
            
        </ul>
        <div class="user-img">
            <h5>{{ Auth::user()->name }}</h5>
            <!-- <img src="{{asset('frontend/images\resources\admin.jpg')}}" alt=""> -->
            @if (Auth::user()->image == '')
             <img src="{{asset('frontend/images\resources\paceholder1.jpg')}}" alt="" width="50" height="50">
            @else
             <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="" width="50" height="50">
            @endif
            <span class="status f-online"></span>
            <div class="user-setting">
                <ul class="log-out">
                    <li><a href="{{ route('home.profile.index',Auth::user()->id) }}" title=""><i class="ti-user"></i> view profile</a></li>
                    <li><a href="{{ route('home.profile.edit',Auth::user()->id) }}" title=""><i class="ti-pencil-alt"></i>edit profile</a></li>
                    <li>
                        <a href="logout.html" title="" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"></i>log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{--<span class="ti-settings main-menu" data-ripple=""></span>--}}
    </div>
   
    <!-- nav menu -->
</div><!-- topbar(DeskTop) -->

