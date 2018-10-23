<?php


namespace App\Http\Controllers;
use App\Update;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class UpdateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function update(Request $req1)
  {

        $id= $req1->input('id');
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


        $data1=$arrayName = array('formnum' =>$formnum ,'firstname' =>$firstname ,'lastname' =>$lastname , 'age' =>$age , 'gender' =>$gender , 'nationality' =>$nationality , 'address' =>$address , 'city' =>$city , 'pincode' =>$pincode ,'category' =>$category ,'email' =>$email,'phone' =>$phone);
         
         $applicants = \App\Update::where('id',$id)
                       ->update($data1);

                       

         return view('list_applicant');     

     }
     	
     
}     
    
?>

    