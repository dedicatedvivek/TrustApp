<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class UpdateController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function update(Request $req1)

    {
    	$id=$req1->input('id');
    	$formnum= $req1->input('formnum');
    	$firstname= $req1->input('firstname');
    	$lastname= $req1->input('lastname');
    	$age= $req1->input('age');
    	$gender= $req1->input('gender');
    	$nationality= $req1->input('nationality');
    	$address= $req1->input('address');
    	$city= $req1->input('city');
    	$pincode= $req1->input('pincode');
    	$category= $req1->input('category');
    	$email= $req1->input('email');
    	$phone=$req1->input('phone');
    	
    	
    	

        $data1= array('id' =>$id ,'formnum' =>$formnum ,'firstname' =>$firstname ,'lastname' =>$lastname , 'age' =>$age , 'gender' =>$gender , 'nationality' =>$nationality , 'address' =>$address , 'city' =>$city , 'pincode' =>$pincode ,'category' =>$category ,'email' =>$email,'phone' =>$phone);


        DB::table('applicants') //tableconnectivity
        		->where('id',$id)
        		->update($data1);

        echo "<script>
        window.alert('RECORD UPDATED SUCCESSFULLY');
        </script>";

        
        return view('list_applicant');
    }
}

