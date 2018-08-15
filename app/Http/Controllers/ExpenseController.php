<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class ExpenseController extends Controller
{
    
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertexpense(Request $req)

    {
    	$expense_type= $req->input('expense_type');
    	$expense_amount= $req->input('expense_amount');
    	
    	
    	
    	

        $data=$arrayName = array('expense_type' =>$expense_type ,'expense_amount' =>$expense_amount);

        DB::table('expenses')->insert($data);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";

        
        return view('welcome');
    }
}

