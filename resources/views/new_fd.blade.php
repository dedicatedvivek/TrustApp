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
        if (document.appl.deposit_date.value=="" )
        {
            alert("Kindly Provide Valid deposit date!!!");
            document.appl.deposit_date.focus();  
            return false;

        }
        if (document.appl.rate_of_interest.value=="" ||
        isNaN(document.appl.rate_of_interest.value)) {
            alert("Kindly Provide Valid rate of interest!!!");
            document.appl.rate_of_interest.focus();
            return false;

        }
        if (document.appl.maturity_amount.value=="" ||
           isNaN(document.appl.maturity_amount.value) ) {
            alert("Kindly Specify the Amount!!");    
            document.appl.maturity_amount.focus();
            return false;

        }
        if (document.appl.maturity_date.value=="" ||
        !isNaN(document.appl.maturity_date.value)) {
            alert("Kindly Specify Valid maturity date!!!");
            document.appl.maturity_date.focus();
            return false;

        }
        if (document.appl.maturity_transfer_acc.value=="" ||
        isNaN(document.appl.maturity_transfer_acc.value) ||
        document.appl.maturity_transfer_acc.value.length !=6) {
            alert(" Transfer Acoount is either empty or inappropriate!!!");
            document.appl.maturity_transfer_acc.focus();
            return false;

        }
        

</script>
</head>

<body>

<h2 align="center" style="color: #fefe70">ADD A NEW SAVINGS ACCOUNT</h2>

<center>

<form action="/insertfd" method="post" name="appl"> 

	{{ csrf_field() }}
<table id="formtable">



<tr>
	<td>
        <label for="DEPOSIT DATE">DEPOSIT DATE:</label>
    </td>
    <td>   
    	<input type="date" name="deposit_date" placeholder="DEPOSIT DATE"  />
    </td>
</tr>
<tr>
    
<tr>
	<td>
        <label for="INTEREST RATE">INTEREST RATE:</label>
    </td>
    <td>   
    	<input type="text" name="rate_of_interest" placeholder="DONT ADD SPECIAL CHARACTER"  />
    </td>
</tr>
<tr>
	<td>
        <label for="MATURITY AMOUNT">MATURITY AMOUNT:</label> 
    </td>
    <td>    
    	<input type="text" name="maturity_amount"  />
    </td> 
</tr>
<tr>
	<td>
        <label for="MATURITY DATE ">MATURITY DATE:</label> 
    </td>
    <td>    
    	<input type="date" name="maturity_date"  />
    </td> 
</tr>
<tr>
	<td>
        <label for="MATURITY TRANSFER ACCOUNT ">MATURITY TRANSFER ACCOUNT:</label> 
    </td>
    <td>    
    	<input type="text" name="maturity_transfer_acc" placeholder="ENTER THE SAVINGS ACCOUNT NUMBER TO WHICH THE MATURITY IS TO BE TRANSFERRED"  />
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




