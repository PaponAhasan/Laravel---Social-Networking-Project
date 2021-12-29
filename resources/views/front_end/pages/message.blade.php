@extends('front_end.layouts.app')

@section('content')

<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">

                        <div class="col-lg-3">
                            
                        </div><!-- sidebar -->

                        <div class="col-lg-6 border border-secondar">

                            <div class="chat-head">
                                <span class="status f-online"></span>
                                <h6>{{ $user->name }}</h6>
                                <div class="more">
                                   
                                    <span class="close-mesage"><i class="ti-close"></i></span>
                                </div>
                            </div>
                
                         
                            <div class="chat-list">

                                
                                <div class="mesge-area">
                                    
                                    <ul class="conversations">
                                        @foreach($messages as $message)
                                          @if($user->id == $message->user_id )
                                            @if (Auth::user()->id == $message->sender_id)
                                        <li>
                                            <figure>
                                                @if($user->image == '')
                                                <img src="{{ asset('frontend/images\resources\paceholder1.jpg') }}" alt="user_image" width="50">
                                                @else
                                                <img src="{{ asset('storage/'.$user->image) }}" alt="user" width="50">   
                                                @endif
                                            </figure>
                                            <div class="text-box">
                                                {{ $message->body }}
                                                @if ($message->image != '')
                                                <img src="{{ asset('storage/'.$message->image) }}"  alt="" width="200" height="100"> 
                                                @endif
                                                <br>
                                                <span> {{\Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                                            </div>
                                        </li>
                                          @endif
                                        @endif

                                        @if($user->id == $message->sender_id)
                                         @if (Auth::user()->id == $message->user_id)
                                        <li class="me">
                                            <figure>@if($user->image == '')
                                                <img src="{{ asset('frontend/images\resources\paceholder1.jpg') }}" alt="user_image" width="50">
                                                @else
                                                <img src="{{ asset('storage/'.$Auth::user()->image) }}" alt="user" width="50">   
                                                @endif
                                            </figure>
                                            <div class="text-box">
                                                {{ $message->body }}
                                                @if ($message->image != '')
                                                 <img src="{{ asset('storage/'.$message->image) }}"  alt="" width="200" height="100"> 
                                               @endif
                                               <br>
                                                <span> {{\Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                                            </div>
                                        </li>
                                         @endif
                                        @endif
                                        @endforeach

                                        <li class="you">
                                            <figure><img src="images/resources/user1.jpg" alt=""></figure>
                                            <div class="text-box">
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                   
                                </div>
                               
                                
                               {{-- @foreach($messages as $message)
                                    <ul>
                                     @if($user->id == $message->user_id )
                                       @if (Auth::user()->id == $message->sender_id)
                                        <li class="me">
                                            <div class="chat-thumb">
                                                @if($user->image == '')
                                                <img src="{{ asset('frontend/images\resources\paceholder1.jpg') }}" alt="user_image" width="50">
                                                @else
                                                <img src="{{ asset('storage/'.$user->image) }}" alt="user" width="50">   
                                                @endif
                                            </div>
                                            
                                            <div class="notification-event">
                                                {{ $message->name }}<br>
                                                <span class="chat-message-item"> 
                                                    {{ $message->body }} 
                                                    @if ($message->image != '')
                                                        <img src="{{ asset('storage/'.$message->image) }}"  alt="" width="200" height="100"> 
                                                    @endif
                                                </span>
                                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{\Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</time></span>
                                            </div>
                                        </li>
                                       @endif
                                    @endif   
                    
                                    @if($user->id == $message->sender_id)
                                        @if (Auth::user()->id == $message->user_id)
                                        <li class="you">
                                            <div class="chat-thumb">
                                                
                                                @if(Auth::user()->image == '')
                                                <img src="{{ asset('frontend/images\resources\paceholder1.jpg') }}" alt="user_image" width="50">
                                                @else
                                                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="">  
                                                @endif
                                            </div>
                                            <div class="notification-event text-right">
                                                {{ $message->name }}<br>
                                                <span class="chat-message-item">
                                                      {{ $message->body }}
                                                      @if ($message->image != '')
                                                        <img src="{{ asset('storage/'.$message->image) }}"  alt="" width="200" height="100"> 
                                                      @endif
                                                </span>
                                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{\Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</time></span>
                                            </div>
                                        </li>
                                        @endif
                                     @endif
                                </ul>

                               @endforeach --}}
                                
                                <div class="message-writing-box">
                                    <form method="post" action="{{ route('message.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="text-area">
                                            <input type="text" name="body" id="body" placeholder="write your message here..">
                                            <input type="hidden" name="sender_id" id="sender_id" value="{{ $user->id }}" />
                                            <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                        
                                        <div class="attach-file">
                                            <label class="fileContainer">
                                            <i class="ti-clip"></i>
                                            <input type="file" name="image" id="image">
                                        </label>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                       
                        <div class="col-lg-3">
                        </div><!-- sidebar -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection