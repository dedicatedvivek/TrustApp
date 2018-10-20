<?php

namespace App\Http\Controllers;
use App\Expense;
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
        $acc_number = $req->input('acc_number');
        
        $acc_code= Expense::select('acc_code')
        ->where('acc_number',$acc_number)
          ->get();

        $acc_code_value = $acc_code[0];
        $fo_acc_code = $acc_code_value["acc_code"];
    	
    	
    	
    	

        $data=$arrayName = array('fo_acc_code' =>$fo_acc_code ,'expense_type' =>$expense_type ,'expense_amount' =>$expense_amount);

        DB::table('expenses')->insert($data);

        $applicants = \App\Expense::decrement('acc_balance', $expense_amount);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";



        
        return view('test');
    }
}

