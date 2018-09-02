<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UploadController as Upload;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
//	public function __construct()
//	{
//		$this->middleware('auth');
//	}
//
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$title = '';
		
		if(Auth::check()){
			$title = 'Мод Админ';
		}else{
			$title = 'Добро пожаловать';
		}
		
		
		$data = [
			  'title' => $title,
		];
		return view('welcome', $data);
	}
}
