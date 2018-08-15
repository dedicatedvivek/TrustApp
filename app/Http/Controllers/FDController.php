<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class FDController extends Controller
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertfd(Request $req)

    {
    	$deposit_date= $req->input('deposit_date');
    	$rate_of_interest= $req->input('rate_of_interest');
    	$maturity_amount= $req->input('maturity_amount');
    	$maturity_date= $req->input('maturity_date');
    	$maturity_transfer_acc= $req->input('maturity_transfer_acc');
    	
    	
    	

        $data=$arrayName = array('deposit_date' =>$deposit_date ,'rate_of_interest' =>$rate_of_interest ,'maturity_amount' =>$maturity_amount,'maturity_date' =>$maturity_date,'maturity_transfer_acc'=>$maturity_transfer_acc);

        DB::table('fixed_deposits')->insert($data);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";
        
        return view('welcome');
    }
}
