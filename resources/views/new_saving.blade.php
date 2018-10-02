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
	font-family: monospace;
	font-size: 1.2vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;


    
}

table,th,td,input{
	width: auto;
	border: 2px solid #19303A;

}




</style>
<script type="text/javascript">
	function validation(){
		if (document.appl.acc_holder.value=="" ||
			!isNaN(document.appl.acc_holder.value)){
			alert("Kindly Provide Valid Name!!!");
			document.appl.acc_holder.focus();  
			return false;
        
        if (document.appl.acc_number.value==""){
			alert("Kindly Provide Account Number!!!");
			document.appl.acc_number.focus();  
			return false;
		
		if (document.appl.acc_balance.value=="" ||
			isNaN(document.appl.acc_balance.value)){
			alert("Kindly Provide Valid Account Balance!!!");
			document.appl.acc_balance.focus();  
			return false;

		}
</script>		
</head>

<body>

<h2 align="center" style="color: #19303A;font-size: 2vw">ADD A NEW SAVINGS ACCOUNT</h2>

<center>

<form action="/insertsaving" method="post" name="appl" onsubmit="return validation()"> 

	{{ csrf_field() }}
<table id="formtable">



<tr>
	<td>
        <label for="ACCOUNT HOLDER">ACCOUNT HOLDER:</label>
    </td>
    <td>   
    	<input type="text" name="acc_holder" >
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

<input type="submit" name="submit" value="SUBMIT" style="font-size: 1.2vw"> 
&nbsp &nbsp &nbsp
<input type="button" value="BACK" onclick="window.location='/saving'" style="font-size: 1.2vw" ><br />

</form>
</center>



</body>

</html>




