<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageCropController extends Controller
{
    public function index(){
    	return view('image_handling.crop_image');
    }

    public function imageCrop(Request $request){
    	$image_file = $request->image;
    	list($type, $image_file) = explode(';', $image_file);
        list(, $image_file)      = explode(',', $image_file);
        $image_file = base64_decode($image_file);
        $image_name= time().'_'.rand(100,999).'.png';
        $path = public_path('uploads/'.$image_name);

        file_put_contents($path, $image_file);
        return response()->json(['status'=>true]);
    }
}
