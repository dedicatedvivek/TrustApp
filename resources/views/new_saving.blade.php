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
@include('mynav')
<h2 align="center" style="color: #19303A;font-size: 2vw">ADD A NEW SAVINGS ACCOUNT</h2>

<center>

<form action="/insertsaving" method="post" name="appl" onsubmit="return validation()"> 

	{{ csrf_field() }}
<table id="formtable">

<tr>
	<td>
        <label for="BANK CODE">BANK CODE:</label>
    </td>
    <td>   
    	<input type="text" name="fo_b_code" >
    </td>
    <td>
    	<input type ="button" name="show_b_code" value="SHOW BANK CODES">
    <td>
</tr>

<tr>
	<td>
        <label for="ACCOUNT HOLDER">ACCOUNT HOLDER:</label>
    </td>
    <td>   
    	<input type="text" name="acc_holder" >
    </td>
</tr>

    
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




