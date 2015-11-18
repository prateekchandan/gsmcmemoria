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
		                    <li><a href="{{route('home')}}/#explore" class="no-scroll ">Explore</a></li>                         
		                    <li><a href="{{route('home')}}/#event" class="no-scroll ">Schedule</a></li>
		                    <li class="scroll active"><a href="{{route('register')}}">REGISTER</a></li>
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
    
    <section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading" style="margin-bottom:0px">REGISTRATION</h2>
						<h3 style="margin-bottom:20px">Enjoy the little things in life, because one day you will look back, and realise they were the big things
						</h3>
						<p>
							To become a part of Memoria, register with us here by filling this form and sending Rs. 3000/- for a single's pass and Rs. 5000/- for a couple's pass. Any amount greater than the aforementioned one is welcome and the donations shall be utilized for the cultural activities of the college. 
						</p>
						<p>
							We look forward to your presence with warm hearts and open arms.
						</p>
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="col-sm-6">
						<form class="form-horizontal">
							<h3>PERSONAL DETAILS</h3>
						  <div class="form-group">
						    <label for="name" class="col-sm-2 control-label">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="name" id="name" placeholder="name">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Mobile</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="mobile" placeholder="Enter 10 digit phone number">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Mobile</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="mobile" placeholder="Enter 10 digit phone number">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Landline</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="landline" placeholder="STD Code - Number">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" name="email" placeholder="Enter your email">
						    </div>
						  </div>
						  <hr>
						  <h3>RESIDENTIAL ADDRESS</h3>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Address</label>
						    <div class="col-sm-10">
						      <textarea class="form-control" name="r_address" placeholder="Enter your address"></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">State</label>
						    <div class="col-sm-10">
						      <select class="form-control" name="r_state">
						      	<option value=''>-Select State-</option>
						      	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Lakshadweep">Lakshadweep</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Orissa">Orissa</option>
								<option value="Pondicherry">Pondicherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttaranchal">Uttaranchal</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="West Bengal">West Bengal</option>
						      </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">PIN</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control" name="r_zip" placeholder="Enter 6 digit Zip Code">
						    </div>
						  </div>
						  <hr>
						  <h3>HOSPITAL ADDRESS</h3>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Address</label>
						    <div class="col-sm-10">
						      <textarea class="form-control" name="h_address" placeholder="Enter your address"></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">State</label>
						    <div class="col-sm-10">
						      <select class="form-control" name="h_state">
						      	<option value=''>-Select State-</option>
						      	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chandigarh">Chandigarh</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
								<option value="Daman and Diu">Daman and Diu</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh">Himachal Pradesh</option>
								<option value="Jammu and Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Lakshadweep">Lakshadweep</option>
								<option value="Madhya Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Orissa">Orissa</option>
								<option value="Pondicherry">Pondicherry</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttaranchal">Uttaranchal</option>
								<option value="Uttar Pradesh">Uttar Pradesh</option>
								<option value="West Bengal">West Bengal</option>
						      </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">PIN</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control" name="h_zip" placeholder="Enter 6 digit Zip Code">
						    </div>
						  </div>
						  <hr>
						  <h3>UNDER GRADUATE INFORMATION</h3>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">College</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="ug_college" placeholder="Enter College Name">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control" name="ug_year" placeholder="YYYY">
						    </div>
						  </div>
						  <hr>
						  <h3>POST GRADUATE INFORMATION</h3>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">College</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="pg_college" placeholder="Enter College Name">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
						    <div class="col-sm-10">
						      <input type="number" class="form-control" name="pg_year" placeholder="YYYY">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Department</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="pg_college" placeholder="Enter Department Name">
						    </div>
						  </div>
						  <br>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">REGISTER</button>
						    </div>
						  </div>
						</form>
					</div>
			</div>		
		</div>
	</section><!--/#event-->

@endsection