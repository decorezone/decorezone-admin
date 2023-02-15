<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use File;
use App\slider;
use Image;
class SettingController extends Controller
{
    //
    function AddSliderImage($value='')
    {
    	# code...
    	$slider=slider::all();
		return view('adminpannel.Slider.AddSliderImage',compact('slider'));

    }

    function AddSliderImageDb(Request $request){
    	$this->validate($request, [
			'slider_name' => 'required',
			'slider_image' => 'required|mimes:jpeg,jpg,png',

		]);
		$slider =  new slider;
		$slider->slider_name = $request->slider_name;
		$slider->slider_status=$request->slider_status;
		$fileExtension = 'jpg';
		if ($request->has('slider_image')) {
			$data=time();
			$result = \File::makeDirectory('Slider/' . $data . '/', 0777, true, true);

			$mainpic=time().'slider.'.$fileExtension;;
			$image_resize = Image::make($request->slider_image);
			$image_resize->resize(850,445);
			$image_resize->save('Slider/' . $data .'/'.$mainpic); 

			$slider->slider_image = $mainpic;
			$slider->slider_folder = $data;
		}
		$slider->save();

		return redirect()->back()->with('status_ok', ' Brand Data Insereted');
    }

    function EditSlider($slider_id){
    	$slider=slider::find($slider_id);
		return view('adminpannel.Slider.EditSlider',compact('slider'));
    }

    function UpdateSliderImage(Request $request){
    	$this->validate($request, [
			'slider_name' => 'required', 
		]);

		$slider=slider::find($request->slider_id);
		$slider->slider_name = $request->slider_name;
		$slider->slider_status=$request->slider_status;
		$fileExtension = 'jpg';

		if ($request->has('slider_image')) {
			$dirpath='Slider/'.$slider->slider_folder;
			if( File::delete($dirpath.'/'.$slider->slider_image)){

			$mainpic=time().'slider.'.$fileExtension;;
			$image_resize = Image::make($request->slider_image);
			$image_resize->resize(850,445);
			$image_resize->save('Slider/' . $slider->slider_folder .'/'.$mainpic); 
			$slider->slider_image = $mainpic;
			}
		}

		$slider->save();
		return redirect()->back()->with('status_ok', ' Slider Data Updated');
    }
    function SliderDelete($slider_id){
    	$slider=slider::find($slider_id);

    	$dirpath='Slider/'.$slider->slider_folder;

		if (File::exists($dirpath)){
			File::deleteDirectory($dirpath);
			$slider->delete();
			return redirect()->back()->with('status_ok', 'Slider Deleted');
		}else{
			
			return redirect()->back()->with('warning', 'Slider Not Deleted');
		}
    }
}
