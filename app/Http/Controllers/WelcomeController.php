<?php namespace App\Http\Controllers;
use Input;
use Razorpay\Api\Api;
use DB;
use Mail;
use PDF;
use App;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}


	public function show_register()
	{

		$data = session('data',json_decode('{"error":1,"pg_dept":"","spouse_pg_dept":"","name": "","mobile": "","landline": "","email": "","r_address": "","r_state": "","r_country": "","r_zip": "", "h_address": "","h_state": "","h_country": "","h_zip": "","ug_college": "","ug_year": "","pg_college": "","pg_year": "","spouse_coming": "true","spouse_alumni":"false","spouse_name": "","spouse_h_address": "","spouse_h_state": "","spouse_h_country": "","spouse_h_zip": "","spouse_ug_college": "","spouse_ug_year": "","spouse_pg_college": "","spouse_pg_year": ""}',true));
		//session(['data'=>json_decode('{"error":1,"pg_dept":"","spouse_pg_dept":"","name": "","mobile": "","landline": "","email": "","r_address": "","r_state": "","r_country": "","r_zip": "", "h_address": "","h_state": "","h_country": "","h_zip": "","ug_college": "","ug_year": "","pg_college": "","pg_year": "","spouse_coming": "true","spouse_alumni":"false","spouse_name": "","spouse_h_address": "","spouse_h_state": "","spouse_h_country": "","spouse_h_zip": "","spouse_ug_college": "","spouse_ug_year": "","spouse_pg_college": "","spouse_pg_year": ""}',true)]);
		return view('pages.register',array('data'=>$data));
	}

	public function tnc()
	{
		return view('pages.tnc');
	}

	public function privacypolicy()
	{
		return view('pages.privacypolicy');
	}

	public function show_team()
	{
		$team = array('Ashnik Chauhan.jpg','Kingshuk Ganguly.JPG','Swastika Lamture.PNG','Ayush Shah.jpg','Niharika Sabnis.jpg','Vaibhavi Bhoir.JPG','Devanshi Shah.jpg','Renuka Ashtekar.JPG','Divya Srinivasan.jpg','Shraddha Parekh.jpg');
		$names = array();
		foreach ($team as $key => $value) {
			$nm = explode('.', $value)[0];
			array_push($names, $nm);
		}
		return view('pages.team',['pics'=>$team,'names'=>$names]);
	}

	public function register()
	{
		$data = Input::all();
		if(array_key_exists('spouse_coming',$data))
			$data['spouse_coming']="true";
		else
			$data['spouse_coming']="false";

		if(array_key_exists('spouse_alumni',$data))
			$data['spouse_alumni']="true";
		else
			$data['spouse_alumni']="false";

		session(['data'=>$data]);
		return redirect()->route('confirm');
	}

	public function register_confirm()
	{
		$data = session('data',json_decode('{"error":1,"pg_dept":"","spouse_pg_dept":"","name": "","mobile": "","landline": "","email": "","r_address": "","r_state": "","r_country": "","r_zip": "", "h_address": "","h_state": "","h_country": "","h_zip": "","ug_college": "","ug_year": "","pg_college": "","pg_year": "","spouse_coming": "true","spouse_alumni":"false","spouse_name": "","spouse_h_address": "","spouse_h_state": "","spouse_h_country": "","spouse_h_zip": "","spouse_ug_college": "","spouse_ug_year": "","spouse_pg_college": "","spouse_pg_year": ""}',true));
		if(array_key_exists('error', $data))
			return redirect()->route("register");

		return view('pages.confirm',array('data'=>$data));
	}

	public function register_result()
	{
		if(!Input::has("razorpay_payment_id"))
		{
			return redirect()->route('confirm');
		}
		$id = Input::get("razorpay_payment_id");
		$api = new Api("rzp_test_C4BqVMbrkIGbL7","uzxtYS7Hy2XlBqIxwjKvzKbT");
		$payment = $api->payment->fetch($id); // Returns a particular payment
		$data = session('data',json_decode('{"error":1,"pg_dept":"","spouse_pg_dept":"","name": "","mobile": "","landline": "","email": "","r_address": "","r_state": "","r_country": "","r_zip": "", "h_address": "","h_state": "","h_country": "","h_zip": "","ug_college": "","ug_year": "","pg_college": "","pg_year": "","spouse_coming": "true","spouse_alumni":"false","spouse_name": "","spouse_h_address": "","spouse_h_state": "","spouse_h_country": "","spouse_h_zip": "","spouse_ug_college": "","spouse_ug_year": "","spouse_pg_college": "","spouse_pg_year": ""}',true));
		$data['id']=$payment->id;;
		$data['amount']=$payment->amount;
		unset($data['_token']);
		if(is_null(DB::table('users')->where('id','=',$payment->id)->first()))
		{
			DB::table('users')->insert($data);
		}
		else{
			DB::table('users')->where('id','=',$payment->id)->update($data);
		}
		$env = env('APP_ENV','local');
		$subject = "Payment Confirmation of Memoria";
		

		$html =  view('pages.invoice',$data);
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML($html);
		$path =  public_path().'/invoice/'.$id.'.pdf';
		$pdf->save($path);
		$url = asset('invoice/'.$id.'.pdf');

		if($env != 'local'){
			Mail::send('emails.confirm', $data,   function($message) use ($data,$subject,$path){
                $message->to($data['email'],$data['name'])->
                replyTo("aavishkaarfest@gmail.com", "Kem Hospital")->
                subject($subject);
                $message->attach($path, []);
            });
		}else{
			Mail::pretend('emails.cofirm', $data,   function($message) use ($data,$subject,$path){
                $message->to($data['email'],$data['name'])->
                replyTo("aavishkaarfest@gmail.com", "Kem Hospital")->
                subject($subject);
                $message->attach($path,[]);
            });
		}

		$data['url']=$url;
		return view('pages.success',$data);
	}

}
