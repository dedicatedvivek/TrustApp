<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>FIXED DEPOSITS</title>

<style>

body{
	 background-color:#f4f2ef;
    background-size: cover;
    background-repeat: no-repeat;
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



.form-style-10{
    width:80%;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
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

<?php

use App\Expense;


$savings= Expense::select('acc_code','acc_number')
          ->get();

$length= count($savings);



?>
@include('mynav')

<div class= "form-style-10">

<h1>ADD A NEW FD ACCOUNT<span>Fill in the details carefully</span></h1>

<form action="/insertfd" method="post" name="appl" onsubmit="return validation()"> 

	{{ csrf_field() }}


<div class = "section"><span>1</span>ACCOUNT DETAILS</div>
<div class = "inner-wrap">


        <label for="DEPOSIT DATE">DEPOSIT DATE
    
    	<input type="date" name="deposit_date" ></label>
    
        <label for="DEPOSIT AMOUNT">DEPOSIT AMOUNT
     
        <input type="text" name="deposit_amount" placeholder="ENTER DEPOSIT AMOUNT"></label>
 
        <label for="INTEREST RATE">INTEREST RATE
     
    	<input type="text" name="rate_of_interest" placeholder="ENTER NUMBER ONLY"></label>
 
        <label for="MATURITY AMOUNT">MATURITY AMOUNT
       
    	<input type="text" name="maturity_amount"  /></label> 
  
        <label for="MATURITY DATE ">MATURITY DATE:
      
    	<input type="date" name="maturity_date"  /></label> 

        <label for="MATURITY TRANSFER ACCOUNT ">MATURITY TRANSFER ACCOUNT 
      
    	<select id="saving_select" name= "maturity_transfer_acc">
        <?php
        for ($i=0; $i <$length ; $i++) { 
           $list_elem = $savings[$i];
           echo "<option>";
           echo $list_elem["acc_number"];
           echo "</option>";
         } 
        ?>
      </select></label> 
      <center>
      <label><input type="submit" name="submit" value="SUBMIT" style="font-size: 1.2vw"> 
&nbsp &nbsp &nbsp

  </div>
</form>
</div>
      


<br> 



</form>
</center>



</body>

</html>




