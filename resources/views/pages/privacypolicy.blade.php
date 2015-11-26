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
		                    <li><a href="{{route('team')}}" class="no-scroll ">Team</a></li>
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
					<h2 class="heading" style="margin-bottom:0px">Privacy Policy</h2>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</h3>
					<p>When you purchase the pass from us, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.</p>
					<p>When you browse the website, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.</p>
				</div>
				<div class="col-sm-12 col-md-12">
					<h3>SECTION 2 - CONSENT</h3>
					<p>How do you get my consent?</p>
					<p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 3 - DISCLOSURE</h3>
					<p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 4 - PAYMENT</h3>
					<p>We use Razorpay for processing payments. We/Razorpay do not store your card data on their servers. The data is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS) when processing payment. Your purchase transaction data is only used as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is not saved.</p>
					<p>Our payment gateway adheres to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.</p>
					<p>PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.</p>
					<p>For more insight, you may also want to read terms and conditions of razorpay on <a href="https://razorpay.com">https://razorpay.com</a></p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 5 - THIRD-PARTY SERVICES</h3>
					<p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.</p>
					<p>However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>
					<p>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.</p>
					<p>In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>
					<p>Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.</p>
					<p>Links</p>
					<p>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 6 - SECURITY</h3>
					<p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 7 - COOKIES</h3>
					<p>We use cookies to maintain session of your user. It is not used to personally identify you on other websites.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 8 - AGE OF CONSENT</h3>
					<p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>SECTION 9 - CHANGES TO THIS PRIVACY POLICY</h3>
					<p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.</p>
					<p>If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.</p>
				</div>

				<div class="col-sm-12 col-md-12">
					<h3>QUESTIONS AND CONTACT INFORMATION</h3>
					<p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at <a href="mailto:aavishkaarfest@gmail.com">aavishkaarfest@gmail.com</a> or by mail at <b>Seth GS Medical College Gymkhana, KEM Hospital Campus, Parel, Mumbai</b></p>
				</div>

			</div>	
			
		</div>
	</section><!--/#event-->

@endsection