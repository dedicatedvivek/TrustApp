<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class BanksController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertbank(Request $req)

    {
    	$b_name= $req->input('b_name');
    	$b_city= $req->input('b_city');
    	$b_branch= $req->input('b_branch');
    	
    	
    	
    	

        $data=$arrayName = array('b_name' =>$b_name ,'b_city' =>$b_city ,'b_branch' =>$b_branch);

        DB::table('banks_master')->insert($data);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";
        
        return view('new_bank');
    }
}




