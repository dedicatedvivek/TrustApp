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
    font-size: 1.2vw;

}

table,th,td
{
	border: 2px solid black;
	padding: 2px;
	color: white;
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




</style>
<script type="text/javascript">
    function validation(){
        if (document.appl.deposit_date.value==""){
            alert("Kindly Provide Deposit Date!!!");
            document.appl.deposit_date.focus();  
            return false;
        
        if (document.appl.maturity_date.value==""){
            alert("Kindly Provide Maturity Date!!!");
            document.appl.maturity_date.focus();  
            return false;
        
        if (document.appl.rate_of_interest.value=="" ||
            isNaN(document.appl.rate_of_interest.value)){
            alert("Kindly Provide Valid Interest Rate!!!");
            document.appl.rate_of_interest.focus();  
            return false;

         if (document.appl.maturity_amount.value=="" ||
            isNaN(document.appl.maturity_amount.value)){
            alert("Kindly Provide Valid Amount!!!");
            document.appl.maturity_amount.focus();  
            return false;
         
         if (document.appl.maturity_transfer_acc.value==""){
            alert("Kindly Provide Account Number!!!");
            document.appl.maturity_transfer_acc.focus();  
            return false;
        }
</script>
</head>

<body>
@include('mynav')
<h2 align="center" style="color: #19303A">FIXED DEPOSIT</h2>

<center>

<form action="/insertfd" method="post" name="appl" onsubmit="return validation()"> 

	{{ csrf_field() }}
<table id="formtable">



<tr>
	<td>
        <label for="DEPOSIT DATE">DEPOSIT DATE:</label>
    </td>
    <td>   
    	<input type="date" name="deposit_date" >
    </td>
</tr>
<tr>
    
<tr>
	<td>
        <label for="INTEREST RATE">INTEREST RATE:</label>
    </td>
    <td>   
    	<input type="text" name="rate_of_interest" placeholder="ENTER NUMBER ONLY">
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
    	<input type="text" name="maturity_transfer_acc">
    </td> 
</tr>
</table>

<br> 

<input type="submit" name="submit" value="SUBMIT" style="font-size: 1.2vw"> 
&nbsp &nbsp &nbsp
<input type="button" value="BACK" onclick="window.location='/transaction'" style="font-size: 1.2vw" ><br />

</form>
</center>



</body>

</html>




