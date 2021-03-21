@extends('front_end.layouts.app')

@section('content')

    <section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							
							<div class="col-lg-12">

								
								<div class="central-meta">
									<div class="author-info">
										<h4>People</h4>
										<p>Search results for</p>
									</div>
                                        <ul class="related-groups">
                                            @foreach ($users as $user)
                                            @if (Auth::user()->id != $user->id)
                                            <li>
                                                <div class="group-box">
                                                    <figure>
                                                        @if ($user->image == '')
                                                        <img src="{{asset('frontend/images/resources/paceholder1.jpg')}}" alt="" class="img-resposive img-circle">
                                                        @else
                                                        <img src="{{ asset('storage/'.$user->image) }}" alt="" class="img-resposive img-circle"> 
                                                        @endif
                                                    </figure>
                                                    <a href="{{ route("search.friend",$user->id) }}" title="">{{ $user->name }}</a>
                                                    <a href="{{ route("message.friend",$user->id) }}">message</a>
                                                    
                                                </div>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
								</div>
							</div>	
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section><!-- content -->
@endsection