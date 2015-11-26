<?php namespace App\Http\Controllers;

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
		return view('pages.register');
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

}
