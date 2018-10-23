<?php

namespace App\Http\Controllers;
use App\Expense;
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
        $deposit_amount= $req->input('deposit_amount');
    	$maturity_amount= $req->input('maturity_amount');
    	$maturity_date= $req->input('maturity_date');	
    	 $acc_number = $req->input('maturity_transfer_acc');
         

         $acc_code= Expense::select('acc_code','acc_balance')
        ->where('acc_number',$acc_number)
          ->get();
        $acc_code_value = $acc_code[0];
        $fo_acc_code = $acc_code_value["acc_code"];
        $acc_balance = $acc_code_value["acc_balance"];
    	
    	

        $data=$arrayName = array('deposit_date' =>$deposit_date ,'fo_tr_code' =>$fo_acc_code ,'rate_of_interest' =>$rate_of_interest ,'deposit_amount' =>$deposit_amount ,'maturity_amount' =>$maturity_amount,'maturity_date' =>$maturity_date,'maturity_transfer_acc'=>$acc_number);

        if ($deposit_amount< $acc_balance){

        DB::table('fixed_deposits')->insert($data);
         $applicants = Expense::where('acc_code',$fo_acc_code)
        ->decrement('acc_balance', $deposit_amount);



        echo "<script>
        window.alert('RECORD SUBMITTED SUCCESSFULLY');
        </script>";
        
        return view('test');
    }
    else{
         echo "<script>
        window.alert('INSUFFICIENT BALANCE');
        </script>";

        return view('new_fd');
    }
    }
}
