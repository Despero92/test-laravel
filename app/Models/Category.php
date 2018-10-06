<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';
	public $timestamps = false;
	
    public function addCategory($category){
    	$this->category = $category['category'];
    	$this->alias = $category['alias'];
    	$this->save();
    	return true;
	}
	
}
