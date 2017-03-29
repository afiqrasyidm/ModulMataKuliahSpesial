<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Form;

class UploadFileController extends Controller {
     
	 
	 public function imageUpload()

    {

    	return view('contoh_upload_file/uploadfile');

    }


    /**

    * Manage Post Request

    *

    * @return void

    */

    public function imageUploadPost(Request $request)

    {

    	$this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $imageName);
		
    	return back()

    		->with('success','Image Uploaded successfully.')

    		->with('path',$imageName);

    }
   
}