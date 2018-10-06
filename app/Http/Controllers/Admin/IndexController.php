<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
	{
		$categories = Category::all();
		
		$data = array(
			  'categories' => $categories,
		);
		
		return view('admin.index', $data);
	}
}
