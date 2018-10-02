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
         <option name="expense_type">SALARY</option>
         <option name="expense_type">ELECTRICITY BILL</option>
         <option name="expense_type">WATER BILL</option>
         <option name="expense_type">MUNICIPAL TAXES</option>
         <option name="expense_type">TELEPHONE EXPENSE</option>
         <option name="expense_type">CONVEYANCE</option>   
         <option name="expense_type">STAFF WELFARE</option>
         <option name="expense_type">MISCELLANEOUS</option>
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
</table>

<br> 

<input  type="submit" name="submit" value="SUBMIT"> 
&nbsp &nbsp &nbsp &nbsp
<input  type="button" value="BACK" onclick="window.location='/transaction'" / ><br />

</form>
</center>



</body>

</html>




