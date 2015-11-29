@extends('pages.template')

@section('content')
<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<!--div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div-->
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="{{asset('images/memoria.png')}}" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li><a class="no-scroll " href="{{route('home')}}/#home">Home</a></li>
		                    <li><a class="no-scroll" href="{{route('home')}}/#about">About</a></li>                     
		                    <li><a href="{{route('home')}}/#event" class="no-scroll ">Schedule</a></li>
		                    <li><a href="{{route('register')}}" class="no-scroll ">REGISTER</a></li>
		                    <li  class="scroll active"><a href="{{route('team')}}" class="no-scroll ">Team</a></li>
		                    <li><a href="{{route('home')}}/#contact" class="no-scroll ">Contact</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
 </header>

  <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				
				<div class="item active">
					<img class="img-responsive" src="{{asset('images/slider/cropbg.jpg')}}" alt="slider" >						
				</div>	
			</div>
		</div>    	
    </section>
	<!--/#home-->
    
    <section id="twitter">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading" style="margin-bottom:0px">OUR TEAM</h2>
						<p style="font-size:1.1em;margin-bottom:20px">Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results.
						</p>
						<p style="font-size:1.1em;margin-bottom:40px">Our team comprises of following people</p>
					</div>
				</div>
			</div>	
			{{-- 
			@foreach($pics as $key => $pic)
			@if($key%4==0)
			<div class="row"> </div> <!-- row begin -->
			@endif
				<div class="col-md-3">
					<div class="team-member">
						<img src="{{asset('images/team/'.$pic)}}" class="img-responsive img-circle" alt="">
						<h4>{{$names[$key]}}</h4>
					</div>
				</div>
			@if($key%4==3)
			</div> <!-- row end -->
			@endif
			@endforeach

			@if(sizeof($pics) %4 !=0)
			</div> </div> <!-- row end -->
			@endif
			--}}
			<ul>
				@foreach($pics as $key => $pic)
					<li>{{$names[$key]}}</li>
				@endforeach
			</ul>
		</div>
	</section><!--/#event-->

@endsection