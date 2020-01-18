<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\post;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function retriveData(){
	    $data = post::orderBy('created_at', 'desc')->get();
        return view('welcome',compact('data'));
	}
	public function editData(){
	    $data = post::orderBy('created_at', 'desc')->get();
        return view('profile.profile',compact('data'));
	}
	public function getGallery(){
		$data=  post::all()->toArray();
        return view('gallery/gallery',compact('data'));
    }
    public function uploadpic(){
        
	$target_dir="C:/xampp/htdocs/OnlineBazzar/public/assets/upload/";
	$target_file=$target_dir.basename($_FILES["upload"]["name"]);
	$uploadOk=1;
	$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
		if (isset($_POST["submit"])) {
			$check=getimagesize($_FILES["upload"]["tmp_name"]);
			if ($check!=false) {
				echo"File is an image_".$check["mime"].".";
				$uploadOk=1;
			}else{
				echo"File is not an image";
				$uploadOk=0;
			}

		}
	if (file_exists($target_file)) {
		echo "sorry file already exists";
		$uploadOk=0;
	}
	if($_FILES["upload"]["size"]>500000){
		echo "sorry your file is too large";
		$uploadOk=0;
	}
	if($imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="png" && $imageFileType!="gif"){
		echo "sorry only jpg,jpeg,png & gif are allowed";
		$uploadOk=0;
	}
	if($uploadOk==0)
	{
		echo "sorry your file was not uploaded";
	}else{
		if(move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)){
            storeRegisterForm();
		}
		else{
			echo "sorry there was an error uploading your file";
		}
	}
    }
    public function storeRegisterForm(Request $request){
		$registerObj = new post();
		$userId = Auth::user()->id;
		$registerObj->user_id = $request->input('user_id',$userId);
        $registerObj->category = $request->input('category');
        $registerObj->product_name = $request->input('product_name');
        $registerObj->detail = $request->input('detail');
		$registerObj->price = $request->input('price');
		
        $registerObj->phone_number = $request->input('phone_number');

        $registerObj->upload = $request->input('upload');
        $registerObj->created_at = Carbon::now();
        $registerObj->updated_at = Carbon::now();
        // $registerObj->password = Hash::make($request->input('password'));
        $registerObj->save();
        if($registerObj->save()){
            return redirect('/');
        }else{
            return 'not saved data';
        }

    }
    
}
