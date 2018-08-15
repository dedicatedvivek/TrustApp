<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class SavingsController extends Controller
{
    //class BanksController extends Controller

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertsaving(Request $req)

    {
    	$acc_holder= $req->input('acc_holder');
    	$acc_number= $req->input('acc_number');
    	$acc_balance= $req->input('acc_balance');
    	
    	
    	
    	

        $data=$arrayName = array('acc_holder' =>$acc_holder ,'acc_number' =>$acc_number ,'acc_balance' =>$acc_balance);

        DB::table('savings_master')->insert($data);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";

        
        return view('welcome');
    }
}


