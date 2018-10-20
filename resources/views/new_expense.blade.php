<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>BANK MASTER</title>

<style>

body{
	background-image: url("abc.png");
    font-size: 1.2vw;
}

#formtable{
	background-image: url("abc.png");
	border:2px solid black;
	width: auto;

}

table,th,td
{
	border: 2px solid #19303A;
	padding: 2px;
	font-family: monospace;
	font-size: 1.2vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;
    width: auto;
}

table,th,td,input{
	width: auto;
    border: 2px solid #19303A;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.expense_options{
    font-variant: sans-serif;
    font-weight: bold;
}

</style>
<script type="text/javascript">
    function validation(){
        
         if (document.appl.expense_amount.value=="" ||
            isNaN(document.appl.expense_amount.value)){
            alert("Kindly Provide Valid Amount!!!");
            document.appl.expense_amount.focus();  
            return false;
         
         }
</script>
</head>

<body>

 

<?php

use App\Expense;


$savings= Expense::select('acc_code','acc_number')
          ->get();

$length= count($savings);



?>



@include('mynav')
<h2 align="center" style="color: #19303A">ADMINISTRATION EXPENSES</h2>

<center>

<form action="/insertexpense" method="post" name="appl" onsubmit="return validation()"> 

	{{ csrf_field() }}
<table id="formtable">



<tr>
	<td>
        <label for="EXPENSE TYPE">EXPENSE TYPE:</label>
    </td>
    <td>   
    	<SELECT name="expense_type">
         <option  class="expense_options" name="expense_type">SALARY</option>
         <option class="expense_options" name="expense_type">ELECTRICITY BILL</option>
         <option class="expense_options" name="expense_type">WATER BILL</option>
         <option class="expense_options" name="expense_type">MUNICIPAL TAXES</option>
         <option class="expense_options" name="expense_type">TELEPHONE EXPENSE</option>
         <option class="expense_options" name="expense_type">CONVEYANCE</option>   
         <option class="expense_options" name="expense_type">STAFF WELFARE</option>
         <option class="expense_options" name="expense_type">MISCELLANEOUS</option>
        </SELECT>
    </td>
</tr>
<tr>
    
<tr>
	<td>
        <label for="EXPENSE AMOUNT">EXPENSE AMOUNT:</label>
    </td> 
    <td>   
    	<input type="float" name="expense_amount">
    </td>
</tr>

<tr>
  <td>
        <label for="SAVINGS ACCOUNT">SAVINGS ACCOUNT:</label>
    </td>
    <td>   
      <select id="saving_select" name= "acc_number">
        <?php
        for ($i=0; $i <$length ; $i++) { 
           $list_elem = $savings[$i];
           echo "<option>";
           echo $list_elem["acc_number"];
           echo "</option>";
         } 
        ?>
      </select>
       
      
    </td>
</tr>

</table>

<br> 

<input  type="submit" name="submit" value="SUBMIT"> 
&nbsp &nbsp &nbsp &nbsp
<input  type="button" value="BACK" onclick="window.location='/transaction'" / ><br />

</form>
</center>
 

<!-- <script type="text/javascript">
  var savings ='<?php echo $savings; ?>';
  var length = '<?php echo  $length ?>';
  var select= document.getElementById('saving_select');
  

 

  

  
 


 
 var opt = document.createElement('option')
  opt.value = acc_num;
  opt.innerHTML= acc_num;
  select.appendChild(opt);

 </script> -->



 
  












</body>

</html>




