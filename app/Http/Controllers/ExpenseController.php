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

        $acc_bal = Expense::select('acc_balance')
        ->where('acc_number',$acc_number)
        ->get();

        $acc_bal_list_elem = $acc_bal[0];
        $acc_balance = $acc_bal_list_elem['acc_balance'];

        if ($expense_amount < $acc_balance) {
            $acc_code= Expense::select('acc_code')
        ->where('acc_number',$acc_number)
          ->get();

        $acc_code_value = $acc_code[0];
        $fo_acc_code = $acc_code_value["acc_code"];
        
        
        
        

        $data=$arrayName = array('fo_acc_code' =>$fo_acc_code ,'expense_type' =>$expense_type ,'expense_amount' =>$expense_amount);

        DB::table('expenses')->insert($data);

        $applicants = Expense::where('acc_code',$fo_acc_code)
        ->decrement('acc_balance', $expense_amount);

        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";



        
        return view('test');

        }

        else{
            echo "
            <script> alert('Account Balance is insufficient');</script>
            ";

            return view('new_expense');
        }
        
            }
}

