<?php namespace App\Http\Controllers;
use App\Helpers\Contracts\HelperContract;

class FigureController extends Controller {

	protected $helpers; //Helpers Implementation
	public function __construct(HelperContract $h)
	{
		$this->middleware('guest');
		$this->helpers = $h;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}
	
	
	public function getDisenadoLogos()
	{
		return view('7figure.disenado');
	}

}
