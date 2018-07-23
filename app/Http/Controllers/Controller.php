<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)

    {
    	$firstname= $req->input('firstname');
    	$lastname= $req->input('lastname');
    	$dob= $req->input('dob');
    	$gender= $req->input('gender');
    	$nationality= $req->input('nationality');
    	$address= $req->input('address');
    	$city= $req->input('city');
    	$pincode= $req->input('pincode');
    	$category= $req->input('category');
    	$email= $req->input('email');
    	$phone=$req->input('phone');
    	$image=$req->input('image');
    	
    	

        $data=$arrayName = array('firstname' =>$firstname ,'lastname' =>$lastname , 'dob' =>$dob , 'gender' =>$gender , 'nationality' =>$nationality , 'address' =>$address , 'city' =>$city , 'pincode' =>$pincode ,'category' =>$category ,'email' =>$email,'phone' =>$phone,'image' =>$image);

        DB::table('applicants')->insert($data);

        
        return view('list_applicant');
    }
}


