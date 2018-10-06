<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function addCategory(Request $request, Category $category){
    
		$this->validate($request, array(
			  'category' => 'max:20|string',
			'alias' => 'max:10|string',
		));
		
		$category->addCategory($request->all());
		
		return redirect()->route( 'admin.index' );
	}
}
