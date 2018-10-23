<?php


namespace App\Http\Controllers;
use App\Expense;
use App\Update;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;


    


class DisbursementController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function sanction_amount(Request $req){
     	$fo_id= $req->input('id');
    	$sanction_amount= $req->input('sanction_amount');
        $sanction_date = $req->input('sanction_date');
        $cheque_number = $req->input('cheque_number');

        $acc_number = $req->input('acc_number');
        $acc_code= Expense::select('acc_code')
        ->where('acc_number',$acc_number)
          ->get();
        $acc_code_value = $acc_code[0];
        $fo_acc_code = $acc_code_value["acc_code"];
        $acc_balance= Expense::select('acc_balance')
        ->where('acc_code',$fo_acc_code)
          ->get();
        $acc_balance_list_elem = $acc_balance[0];
        $acc_balance_value = $acc_balance_list_elem['acc_balance'];
        if ($sanction_amount< $acc_balance_value) {
        	
        
        $data=$arrayName = array('fo_id' =>$fo_id ,'fo_acc_code' =>$fo_acc_code ,'sanction_amount' =>$sanction_amount ,'cheque_number' =>$cheque_number,'sanction_date' =>$sanction_date);
        DB::table('disbursements')->insert($data);

        $applicants = Expense::where('acc_code',$fo_acc_code)
        ->decrement('acc_balance', $sanction_amount);


        

        $update_sanction_status = Update::where('id',$fo_id)
        							->update(['sanction_status' =>'Accepted']);

       	return view('list_applicant');
       }
       else{
       	echo "<script>
       	alert('Insufficient Account Balance');
       	</script>
       	";
       	return view('list_applicant');
       }
     }

}
