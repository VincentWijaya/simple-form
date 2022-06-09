<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UploadController extends Controller
{
	public function upload(){
		return view('upload');
	}
 
	public function process(Request $request){
		$this->validate($request, [
			'fullName' => 'required',
			'gender' => 'required',
      'birthPlace' => 'required',
      'birthday' => 'required'
		]);

    $image = $request->file('image');
    if ($image == "") {
      return redirect()->back()->with('alert', 'Gambar tidak ada!');
    }

    return redirect()->back()->with('alert', 'Data berhasil diupload!');
	}
}