@extends('pages.template')

@section('content')
<style type="text/css">
    #reg-form {
        display: none;
    }
</style>
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
                        <li><a class="no-scroll " href="{{route('home')}}/#home">Home</a>
                        </li>
                        <li><a class="no-scroll" href="{{route('home')}}/#about">About</a>
                        </li>
                        <li><a href="{{route('home')}}/#event" class="no-scroll ">Schedule</a>
                        </li>
                        <li class="scroll active"><a href="{{route('register')}}">REGISTER</a>
                        </li>
                        <li><a href="{{route('team')}}" class="no-scroll ">Merchandise</a>
                        </li>
                        <li><a href="{{route('home')}}/#contact" class="no-scroll ">Contact</a>
                        </li>
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
                <img class="img-responsive" src="{{asset('images/slider/cropbg.jpg')}}" alt="slider">
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
                    <p>
                        We are also accepting International Payments
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="start-block">
            <div class="col-md-12">
                <button class=" btn btn-success" id="start">Register Now</button>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <form class="form-horizontal" id="reg-form" method="POST">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
        	<div class="row">
        		<div class="col-md-12">
        			<i style="color:#FFB500">Note: All fileds are compulsory</i>
        		</div>
        	</div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>PERSONAL DETAILS</h3>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="name" id="name" placeholder="name" value="{{$data['name']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="mobile" value="{{$data['mobile']}}" placeholder="Enter 10 digit phone number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Landline</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="landline" value="{{$data['landline']}}" placeholder="STD Code - Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" required name="email" value="{{$data['email']}}" placeholder="Enter your email">
                        </div>
                    </div>
                    <hr>
                    <h3>RESIDENTIAL ADDRESS</h3>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="r_address" required placeholder="Enter your address">{{$data['r_address']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$data['r_state']}}" name="r_state" required placeholder="State">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$data['r_country']}}" name="r_country" required placeholder="Country">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">PIN</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{$data['r_zip']}}" name="r_zip" required placeholder="Enter Zip Code">
                        </div>
                    </div>
                    <hr>
                    <h3>HOSPITAL ADDRESS</h3>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="h_address"  required placeholder="Enter your address">{{$data['h_address']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="h_state" value="{{$data['h_state']}}" required placeholder="State">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="h_country" value="{{$data['h_country']}}" required placeholder="Country">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">PIN</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="h_zip" value="{{$data['h_zip']}}" required placeholder="Enter Zip Code">
                        </div>
                    </div>
                    <hr>
                    <h3>UNDER GRADUATE INFORMATION</h3>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">College</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ug_college" value="{{$data['ug_college']}}" required placeholder="Enter College Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="ug_year" value="{{$data['ug_year']}}" required placeholder="YYYY">
                        </div>
                    </div>
                    <hr>
                    <h3>POST GRADUATE INFORMATION</h3>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">College</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pg_college" value="{{$data['pg_college']}}" placeholder="Enter College Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="pg_year" value="{{$data['pg_year']}}" placeholder="YYYY">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pg_dept" value="{{$data['pg_dept']}}" placeholder="Enter Department Name">
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-sm-6">
                    <h3>SPOUSE DETAILS</h3>
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Is your spouse coming with you?</label>
                        <div class="col-md-offset-4 col-sm-2">
                            <input type="checkbox" class="form-control" name="spouse_coming" id="spouse_coming" {{($data['spouse_coming']=="true")?'checked="false"':""}}>
                        </div>
                    </div>
                    <div id="spouse_coming_block" style="display:{{($data['spouse_coming']=="true")?"block":"none"}}">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control s_coming" required name="spouse_name" value="{{$data['spouse_name']}}" id="name" placeholder="name">
                            </div>
                        </div>

                        <div class="form-group">
	                        <label for="name" class="col-sm-7 control-label">Is your spouse also an alumni of KEM?</label>
	                        <div class="col-md-offset-3 col-sm-2">
	                            <input type="checkbox" class="form-control" name="spouse_alumni" id="spouse_alumni" {{($data['spouse_alumni']=="true")?'checked="false"':""}}>
	                        </div>
	                    </div>
	                    <div id="spouse_alumni_block" style="display:{{($data['spouse_alumni']=="true")?"block":"none"}}">
	                        <h3>HOSPITAL ADDRESS</h3>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">Address</label>
	                            <div class="col-sm-10">
	                                <textarea class="form-control s_coming s_alumni" name="spouse_h_address" placeholder="Enter your address">{{$data['spouse_h_address']}}</textarea>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">State</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control s_coming s_alumni" name="spouse_h_state" value="{{$data['spouse_h_state']}}" placeholder="State">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">Country</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control s_coming s_alumni" name="spouse_h_country" value="{{$data['spouse_h_country']}}" placeholder="Country">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">PIN</label>
	                            <div class="col-sm-10">
	                                <input type="number" class="form-control s_coming s_alumni" name="spouse_h_zip" value="{{$data['spouse_h_zip']}}" placeholder="Enter Zip Code">
	                            </div>
	                        </div>
	                        <hr>
	                        <h3>UNDER GRADUATE INFORMATION</h3>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">College</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control s_coming s_alumni"  name="spouse_ug_college" value="{{$data['spouse_ug_college']}}" placeholder="Enter College Name">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
	                            <div class="col-sm-10">
	                                <input type="number" class="form-control s_coming s_alumni" name="spouse_ug_year"  value="{{$data['spouse_ug_year']}}" placeholder="YYYY">
	                            </div>
	                        </div>
	                        <hr>
	                        <h3>POST GRADUATE INFORMATION</h3>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">College</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control s_pg s_coming s_alumni" name="spouse_pg_college" value="{{$data['spouse_pg_college']}}" placeholder="Enter College Name">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
	                            <div class="col-sm-10">
	                                <input type="number" class="form-control s_pg s_coming s_alumni" name="spouse_pg_year" value="{{$data['spouse_pg_year']}}" placeholder="YYYY">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-sm-2 control-label">Department</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control s_pg s_coming s_alumni" name="spouse_pg_dept" value="{{$data['spouse_pg_dept']}}" placeholder="Enter Department Name">
	                            </div>
	                        </div>
	                    </div>

                    </div>
	                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                	<div class="form-group">
	                    <label class="col-sm-3 control-label">Donation Amount (in Rs)</label>
	                    <div class="col-sm-9">
	                    <input type="number" value="0" required min="0" class="form-control" name="donation" id="donation">
	                    </div>
	                </div>

                    <button class="btn btn-success">Proceed with Rs <span id="amount">5000</span></button>
                    <br>
                    <br>
                </div>
            </div>

        </form>

    </div>
</section>
<!--/#event-->

@endsection

@section('script')
<script type="text/javascript">
	var amount = 5000;

	$('#start').click(function(){
		$( "#reg-form" ).slideToggle( "slow" );
		$('#start-block').toggle("fast");
	});

	$('#spouse_coming').change(function(){
		$('#spouse_coming_block').slideToggle("slow" );  

		if($(this).is(':checked')){
			$('.s_coming').attr('required','required');
            $('.s_alumni').removeAttr('required');
			$('.s_pg').removeAttr('required');
			amount = 5000;
		}else{
			$('.s_coming').removeAttr('required');
			$('.s_alumni').removeAttr('required');
			$('.s_alumni').val('');
			$('.s_coming').val('');
			$('#spouse_alumni').attr('checked', false);
			$('#spouse_alumni_block').hide();
			amount = 3000;
		}
		update_amount();
	});

	function update_amount(){
		var d = parseInt($("#donation").val());
		if(isNaN(d))
			d=0;
		d = d+amount;
		$('#amount').html(d);
	}
	update_amount();

	$('#donation').on('keyup',update_amount);
	$('#spouse_alumni').change(function(){
		$('#spouse_alumni_block').slideToggle("slow" ); 
		if($(this).is(':checked')){
			$('.s_coming').attr('required','required');
			$('.s_alumni').attr('required','required');
            $('.s_pg').removeAttr('required');
		} else{
			$('.s_alumni').removeAttr('required');
		}
		$('.s_alumni').val('');
	});



</script>

@endsection