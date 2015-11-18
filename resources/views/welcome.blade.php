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
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#about">About</a></li>                     
		                    <li class="scroll"><a href="#explore">Explore</a></li>                         
		                    <li class="scroll"><a href="#event">Schedule</a></li>
		                    <li><a class="no-scroll" href="{{route('register')}}">REGISTER</a></li>
		                    <li class="scroll"><a href="#contact">Contact</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
 </header>
    <!--/#header--> 


    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="{{asset('images/slider/cc1.jpg')}}" alt="slider">						
					<div class="carousel-caption">
						<h2>We don't remember days,we remember moments.</h2>
						<h4>-Cesare Pavese</h4>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="{{asset('images/slider/cc2.jpg')}}" alt="slider">						
					<div class="carousel-caption">
						<h2>We don't remember days,we remember moments.</h2>
						<h4>-Cesare Pavese</h4>
					</div>
				</div>	
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<section id="about">
		<div class="col-md-3 hidden-xs">				
			<img class="img-responsive" src="{{asset('images/guitar2.jpg')}}" alt="guitar" style="margin-top:100px">
		</div>
		<div class="about-content col-md-9">					
					<h2>About Memoria</h2>
					As the hallowed corridors of Seth GS Medical College and KEM Hospital turn <b>90</b>, as the leaves age further, as the sun glows further in the noon, come, relive all the times you have spent under the stone arches.
					<br><ul>
					<li>Come, relive, all those piping hot tea sessions at the katta, or the tennis matches at the court.</li>

					<li>Come, relive, the times you bunked a lecture, or studied hard sitting at the 'fistula'.</li>

					<li>Come, relive, all the times your alma mater moulded your life. </li>

					<li>Come, relive a walk down memory lane.</li>
					</ul>

					<p>'Memoria', an event hosted by the GOSUMEC Alumni Association and the Core Committee of Aavishkaar 2016, will refresh you with an amazing evening filled with nostalgia and joy. </p>

					<p>On 24th January, 2016 (Sunday) from 4 pm to 10 pm, all invitees can spend their time, walking through the sprawling campus, meeting batchmates, and rekindling long forgotten friendships.</p>

					<p>Make new friendships, and discover the strongest bond you could ever have- the one which links you to your home- this institution, this college.</p>
				
		</div>
	</section><!--/#about-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="{{asset('images/watch.png')}}" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>Event is in</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>days </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">hours </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">minutes</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">seconds</p>
						</li>				
					</ul>
				</div>
			</div>
			<div class="cart">
				<a href="{{route('register')}}"><i class="fa fa-sign-in"></i> <span>Register</span></a>
			</div>
		</div>
	</section><!--/#explore-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading" style="margin-bottom:0px">Schedule</h2>
						<p style="margin-bottom:20px">"Sometimes you will never know the true value of a moment until it becomes a memory". <br>
						Memoria seeks to revive all those cherished memories of your college years that were spent in this glorious institution. ...and what better way to do it than with the very batchmates you made those memories with. The following is a tentative schedule of events on the programme day: 
						</p>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-6">
										<div class="single-event">
											<img class="img-responsive" src="{{asset('images/slider/cc1.jpg')}}" alt="event-image">
											<h4>CAMPUS VISIT</h4>
											<p>On the 24th of January, we shall keep the college and hospital gates open for all those who wish to walk through the hallways of these hallowed precincts once again. Escorted tours to various departments will be available from 3.00 PM until 5.00 PM. </p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single-event">
											<img class="img-responsive" src="{{asset('images/event/event3.jpg')}}" alt="event-image">
											<h4>FELICITATION</h4>
											<p>Memoria promises to be a night of cheer and entertainment as we have an array of performances and events lined for the night.
 											The felicitation of our dear former Deans and senior alumni, who have witnessed this college's 90-year-old legacy will definitely be a moment of pride and poignancy. </p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-6">
										<div class="single-event">
											<img class="img-responsive" src="{{asset('images/event/event2.jpg')}}" alt="event-image">
											<h4>REVIVAL OF ORGY</h4>
											<p> musical extravaganza presented by a band that is very much a product of GS. This shall be followed by dances and other entertaining acts. </p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single-event">
											<img class="img-responsive" src="{{asset('images/event/dinner.jpg')}}" alt="event-image">
											<h4>DINNER</h4>
											<p> Last but certainly not the least, a delicious dinner to bring the night to a close, as you sit with old friends and recount all the indelible memories of college-life and make some new ones as well.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</section><!--/#event-->

	


	<section id="contact">
	
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="{{asset('images/ear-piece.png')}}" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: promo@party.com<br>
								Phone: +1 (123) 456 7890<br>
								Fax: +1 (123) 456 7891
							</address>
						</div>
						<div class="contact-address">
							<h3>Contact</h3>
							<address>
								Unit C2, St.Vincent's Trading Est.,<br>
								Feeder Road,<br>
								Bristol, BS2 0UY<br>
								United Kingdom
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->
@endsection