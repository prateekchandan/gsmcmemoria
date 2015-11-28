@extends('pages.template')

@section('content')
<?php

$total = intval($data['donation']) + 3000;
if($data['spouse_coming']=="true")
$total+=2000;
?>
<style type="text/css">
    .razorpay-payment-button{
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 0;
        font-family: 'Yanone Kaffeesatz','sans-serif';
        font-size: 20px;
        padding: 9px 23px;
        background-color: #C34C39;
    border-color: #C34C39;
    margin-bottom: 10px;
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
                        <li><a href="{{route('team')}}" class="no-scroll ">Team</a>
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
                    <h2 class="heading" style="margin-bottom:0px">CONFIRMATION</h2>
                    
                    <p>
                        Please Confirm Your details and proceed to payment.
                    </p>
                </div>
            </div>
        </div>
        	<div class="row">
        		<div class="col-md-12">
        			<i style="color:#FFB500">Note: All fileds are compulsory</i>
        		</div>
        	</div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>PERSONAL DETAILS</h3>
                    <div class="row">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            {{$data['name']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10">
                            {{$data['mobile']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Landline</label>
                        <div class="col-sm-10">
                            {{$data['landline']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            {{$data['email']}}
                        </div>
                    </div>
                    <hr>
                    <h3>RESIDENTIAL ADDRESS</h3>
                    <div class="row">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            {{$data['r_address']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                            {{$data['r_state']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                            {{$data['r_country']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">PIN</label>
                        <div class="col-sm-10">
                            {{$data['r_zip']}}
                        </div>
                    </div>
                    <hr>
                    <h3>HOSPITAL ADDRESS</h3>
                    <div class="row">
                        <label class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            {{$data['h_address']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                            {{$data['h_state']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                            {{$data['h_country']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">PIN</label>
                        <div class="col-sm-10">
                            {{$data['h_zip']}}
                        </div>
                    </div>
                    <hr>
                    <h3>UNDER GRADUATE INFORMATION</h3>
                    <div class="row">
                        <label class="col-sm-2 control-label">College</label>
                        <div class="col-sm-10">
                            {{$data['ug_college']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
                        <div class="col-sm-10">
                            {{$data['ug_year']}}
                        </div>
                    </div>
                    <hr>
                    <h3>POST GRADUATE INFORMATION</h3>
                    <div class="row">
                        <label class="col-sm-2 control-label">College</label>
                        <div class="col-sm-10">
                            {{$data['pg_college']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
                        <div class="col-sm-10">
                            {{$data['pg_year']}}
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">Department</label>
                        <div class="col-sm-10">
                            {{$data['pg_dept']}}
                        </div>
                    </div>
                    <br>
                </div>
                @if($data['spouse_coming']=="true")
                <div class="col-sm-6">
                    <h3>SPOUSE DETAILS</h3>
                    
                    <div id="spouse_coming_block">
                        <div class="row">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                {{$data['spouse_name']}}
                            </div>
                        </div>

                       @if($data['spouse_alumni']=="true")
	                    <div id="spouse_alumni_block">
	                        <h3>HOSPITAL ADDRESS</h3>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">Address</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_h_address']}}
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">State</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_h_state']}}
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">Country</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_h_country']}}
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">PIN</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_h_zip']}}
	                            </div>
	                        </div>
	                        <hr>
	                        <h3>UNDER GRADUATE INFORMATION</h3>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">College</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_ug_college']}}
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_ug_year']}}
	                            </div>
	                        </div>
	                        <hr>
	                        <h3>POST GRADUATE INFORMATION</h3>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">College</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_pg_college']}}
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">Batch (Year of Admission)</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_pg_year']}}
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-sm-2 control-label">Department</label>
	                            <div class="col-sm-10">
	                                {{$data['spouse_pg_dept']}}
	                            </div>
	                        </div>
	                    </div>
                        @endif
                    </div>
	                    
                </div>
                @else
                <div class="col-md-6">
                    No Spouse
                </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                	<div class="row">
                        <label class="col-sm-12 control-label">Donation Amount (in Rs) : {{$data['donation']}}</label>
	                    <label class="col-sm-12 control-label">Total Amount (in Rs) &nbsp;&nbsp;&nbsp;&nbsp;: {{$total}}</label>
	                </div>
                    <form action="{{route('result')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <script
                            src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="rzp_test_C4BqVMbrkIGbL7"
                            data-amount="{{$total*100}}"
                            data-name="Seth GS Medical College Gymkhana"
                            data-description="Registration Payment"
                            data-image="http://www.gsmcmemoria.in/images/memoria.png"
                            data-prefill.name="{{$data['name']}}"
                            data-prefill.email="{{$data['email']}}"
                            data-prefill.contact="{{$data['mobile']}}"
                            data-theme.color="#33888F"
                        ></script>
                    </form>
                    <a class="btn btn-success" href="{{route('register')}}">Edit Details</a>
                    <br>
                    <br>
                </div>
            </div>


        
    </div>
</section>
<!--/#event-->

@endsection
