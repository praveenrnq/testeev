<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use Image;


class ImageController extends Controller
{


	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grayScaleImage()
    {
    	return view('image_handling.gray_scale_image');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grayScaleImagePost(Request $request)
    {
	    $this->validate($request, [
	    	'title' => 'required',
            'imagefile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('imagefile');
        $input['image_name'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/uploads');
        $img = Image::make($image->getRealPath());
        $img->greyscale()->save($destinationPath.'/'.$input['image_name']);

        return back()
        	->with('success','Image Uploaded successfully.')
        	->with('image_name',$input['image_name']);
    }


}
