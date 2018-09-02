<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
	public static function getFiles($folder)
	{
		$files = Storage::files($folder);
		return $files;
	}
	
	public function delete(Request $request)
	{
		$f = Storage::disk('images');
		$f->delete($request->filename);
		
		return redirect('upload/all');
	}
}
