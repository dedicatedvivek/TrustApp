<html>

<head>

<title>BANK MASTER</title>

<style>

body{
	background-image: url("formback.png");
}

#formtable{
	background-image: url("table.png");
	border:2px solid black;
	width: 45%;

}

table,th,td
{
	border: 2px dotted black;
	padding: 2px;
	color: white;
	font-family: monospace;
	font-size: 24px;
	color: #fefe70;
	font-weight: bold;
	font-style: italic;


    
}

table,th,td,input{
	width: 270px;

}




</style>
<script type="text/javascript">
    function validation(){
        if (document.appl.expense_amount.value=="" ||
        isNaN(document.appl.rate_of_interest.value))
        {
            alert("Kindly Provide Valid Amount!!!");
            document.appl.expense_amount.focus();  
            return false;

        }
</script>
</head>

<body>

<h2 align="center" style="color: #fefe70">ADD A NEW SAVINGS ACCOUNT</h2>

<center>

<form action="/insertexpense" method="post" name="appl"> 

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
    	<input type="float" name="expense_amount" placeholder="SPECIFY THE AMOUNT IN RUPEES" />
    </td>
</tr>
</table>

<br> 

<input type="submit" name="submit" value="SUBMIT"> 

<input type="button" value="BACK" onclick="window.location='/'" / ><br />

</form>
</center>



</body>

</html>




