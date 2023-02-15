<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use File;
class ImageStore extends Model
{
	public static function image_save($folder_name_parent,$file) {
		$extension = '';
		$files = $file;

		$mime = Image::make($files->getRealPath())->mime();
		if ($mime == 'image/jpeg') {
			$extension = '.jpg';
		} elseif ($mime == 'image/png') {
			$extension = '.png';
		} elseif ($mime == 'image/jpg') {
			$extension = '.jpg';
		} else {
			$extension = '';
		}
		$folder_name=time();
		$result = \File::makeDirectory($folder_name_parent.'/' . $folder_name . '/', 0777, true, true);
		$path=$folder_name_parent.'/'. $folder_name;
		$originalName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
		$filename = time() . '_' . $originalName . $extension;
		$storagePath = $path;
		$image_resize = Image::make($file);
		$image_resize->resize(150,150);
		$image_resize->save($storagePath.'/'.$filename);



		return  [$filename, $folder_name];
	}


	public static function image_delete($folder_name_parent,$folder_name,$file){
		$dirpath=$folder_name_parent.'/'.$folder_name;
		File::deleteDirectory($dirpath);
	}

   //multiple

	public static function multipleImageUpload($folder_name_parent,$folder_name,$files){
		// $files = $request->file;

		$uploadcount = 0;
		foreach($files as $file) {
			$rules = array('file' => 'required|mimes:jpeg,jpg,png'); 

			$validator = \Validator::make(array('file'=> $file), $rules);
			if($validator->passes()){
        $extension='.jpg';

				$path=$folder_name_parent.'/'. $folder_name;
				$originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
				$filename = time() . '_' . $originalName . $extension;
				$storagePath = $path;
				$image_resize = Image::make($file);
				$image_resize->save($storagePath.'/'.$filename);
			}
		}
	}

   //end
	public static function folder_fix($folder_name_parent,$folder_name){

		$dir_path=$folder_name_parent.'/' . $folder_name;
		if(is_dir($dir_path)){

		}else{
			$result = \File::makeDirectory($folder_name_parent.'/' . $folder_name . '/', 0777, true, true);
		}

	}


	public static function storeImage($folder_name_parent,$file) {
		$extension = '';
		$files = $file;

		$mime = Image::make($files->getRealPath())->mime();
		if ($mime == 'image/jpeg') {
			$extension = '.jpg';
		} elseif ($mime == 'image/png') {
			$extension = '.png';
		} elseif ($mime == 'image/jpg') {
			$extension = '.jpg';
		} else {
			$extension = '';
		}
		$folder_name=time();
		$result = \File::makeDirectory($folder_name_parent.'/' . $folder_name . '/', 0777, true, true);
		$path=$folder_name_parent.'/'. $folder_name;
		$originalName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
		$filename = time() . '_' . $originalName . $extension;
		$storagePath = $path;
		$image_resize = Image::make($file);
		//$image_resize->resize(150,150);
		$image_resize->save($storagePath.'/'.$filename);



		return  [$filename, $folder_name];
	}

	public static function updateImage($folder_name_parent,$folder_name,$file) {
		$extension = '';
		$files = $file;

		$mime = Image::make($files->getRealPath())->mime();
		if ($mime == 'image/jpeg') {
			$extension = '.jpg';
		} elseif ($mime == 'image/png') {
			$extension = '.png';
		} elseif ($mime == 'image/jpg') {
			$extension = '.jpg';
		} else {
			$extension = '';
		}
		$result = \File::makeDirectory($folder_name_parent.'/' . $folder_name . '/', 0777, true, true);
		$path=$folder_name_parent.'/'. $folder_name;
		$originalName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
		$filename = time() . '_' . $originalName . $extension;
		$storagePath = $path;
		$image_resize = Image::make($file);
		//$image_resize->resize(150,150);
		$image_resize->save($storagePath.'/'.$filename);



		return  [$filename, $folder_name];
	}



}
