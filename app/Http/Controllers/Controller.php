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
    	$formnum= $req->input('formnum');
    	$firstname= $req->input('firstname');
    	$lastname= $req->input('lastname');
    	$age= $req->input('age');
    	$gender= $req->input('gender');
    	$nationality= $req->input('nationality');
    	$address= $req->input('address');
    	$city= $req->input('city');
    	$pincode= $req->input('pincode');
    	$category= $req->input('category');
    	$email= $req->input('email');
    	$phone=$req->input('phone');
    	$image=$req->input('image');
    	$doc1=$req->input('doc1');
    	$doc2=$req->input('doc2');
    	
    	

        $data=$arrayName = array('formnum' =>$formnum ,'firstname' =>$firstname ,'lastname' =>$lastname , 'age' =>$age , 'gender' =>$gender , 'nationality' =>$nationality , 'address' =>$address , 'city' =>$city , 'pincode' =>$pincode ,'category' =>$category ,'email' =>$email,'phone' =>$phone,'image' =>$image,'doc1' =>$doc1,'doc2' =>$doc2);

        DB::table('applicants')->insert($data);

        
        return view('list_applicant');
    }
}


