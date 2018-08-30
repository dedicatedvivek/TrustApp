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
		if (document.appl.acc_holder.value=="" ||
			!isNaN(document.appl.acc_holder.value)){
			alert("Kindly Provide Valid account Holder Name!!!");
			document.appl.acc_holder.focus();  
			return false;

		}
		
		if (document.appl.acc_number.value=="")
		
		 {
			alert("Account Number is either empty or inappropriate!!!");
			document.appl.acc_number.focus();
			return false;

		}
		

		if (document.appl.acc_balance.value=="" ||
			isNaN(document.appl.acc_balance.value)) 
		 {
	alert("Please enter a valid account balance !!!");
	document.appl.acc_balance.focus();
		return false;
	}

		
		

</script>
</head>

<body>

<h2 align="center" style="color: #fefe70">ADD A NEW SAVINGS ACCOUNT</h2>

<center>

<form action="/insertsaving" method="post" name="appl"> 

	{{ csrf_field() }}
<table id="formtable">



<tr>
	<td>
        <label for="ACCOUNT HOLDER">ACCOUNT HOLDER:</label>
    </td>
    <td>   
    	<input type="text" name="acc_holder" placeholder="Enter Account Holder's Name"  />
    </td>
</tr>
<tr>
    
<tr>
	<td>
        <label for="ACCOUNT NUMBER">ACCOUNT NUMBER:</label>
    </td>
    <td>   
    	<input type="text" name="acc_number"  />
    </td>
</tr>
<tr>
	<td>
        <label for="ACCOUNT BALANCE">ACCOUNT BALANCE:</label> 
    </td>
    <td>    
    	<input type="text" name="acc_balance"  />
    </td> 
</tr>
</table>

<br> 

<input type="submit" name="submit" value="SUBMIT"> 

<input type="button" value="BACK" onclick="window.location='/saving'" / ><br />

</form>
</center>



</body>

</html>




