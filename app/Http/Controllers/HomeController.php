<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UploadController as Upload;

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
		$filesArray = Upload::getFiles('public/images');
		$files = array();
		foreach ($filesArray as $value){
			if(strpos($value, 'public/images/image')===0){
				$value = str_replace('public/', '',$value);
				$files[] = $value;
			}
		}
		
		$data = [
			  'title' => 'Главная страница',
				'files' => $files,
		];
		return view('index', $data);
	}
}
