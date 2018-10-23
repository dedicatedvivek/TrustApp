
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	 $(function(){ $('tr:contains(Accepted)').addClass('accepted'); });
	 $(function(){ $('tr:contains(Pending/Rejected)').addClass('pending'); });
	





	 
</script>
<style>
body{
	background-color: #f4f2ef;
	background-repeat: no-repeat;
	background-size:cover;
}



#table1{
	 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;


}
#table1 td, #table1 th
{
	border: 2px solid black;
	padding: 2px;
	font-family: monospace;
	font-size: 0.8vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;
}

.accepted:hover{background-color: #c6f733;}
.pending:hover{background-color: #ed1a47;}






#table1 tr{
	cursor: pointer;
}

#table1 th {
	 padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2A88AD;
    color: white;
}

input {
	padding: 1px;
	color: #19303A;
	border: 2px solid #19303A;
	
}
.one {
	width: 100px;
}
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
   }
  .close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
   }
  .close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.click-btn {
    background-color: #4187a3;
    border: none;
    color: white;
    padding: 2px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}


</style>


	
</script>
@include('mynav')
<h2 style="color: #19303A" align="center">LIST OF APPLICANTS</h2>

</head>
<body>






<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "SELECT id,formnum,firstname, lastname,age,gender,nationality,address,city,pincode,category,email,phone,sanction_status FROM applicants";
$result = $conn->query($sql);
echo"<center>";






    echo "<table class='appl-list-table' id='table1'><tr><th>id</th><th>Form Number</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Nationality</th><th>Address</th><th>City</th><th>Pincode</th><th>Category</th><th>Email id</th><th>Phone Number</th><th>SANCTION STATUS</th><th>Sanction Amount</th><th>EDIT/DELETE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo "<tr><td>".$row["id"]."</td><td>".$row["formnum"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["nationality"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["category"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["sanction_status"]."</td><td><button class='click-btn' onclick='modalopen_delete()'>CLICK HERE</button></td><td><button class='click-btn' onclick='modalopen()'>EDIT</button>&nbsp;&nbsp;<button class='click-btn' type='submit' onclick='/delete_applicant(this)' >DELETE</button></td> </tr>";
    }

        echo "</table>";


echo"</center>";

?>

<?php

use App\Expense;


$savings= Expense::select('acc_code','acc_number')
          ->get();

$length= count($savings);



?>

<center> <br>
<div id="myModal" class="modal">
	<div class="modal-content">
		<span class= "close">&times;</span>



<form id='form1' action="/update" method='POST'>
	{{ csrf_field() }}
	<table id='table_form'>
		<tr>
			<td>id</td> <td><input type="number" id="id" name="id" readonly></td>
		</tr>
	
		<tr>
			<td>FormNumber</td> <td><input type="text" id="formnum" name="formnum"></td>
		</tr>
		<tr>
			<td>FirstName</td> <td><input type="text" id="firstname" name="firstname"></td>
		</tr>
		<tr>
			<td>LastName</td> <td><input type="text" id="lastname" name="lastname"></td>
		</tr>
		<tr>
			<td>Age</td> <td><input type="text" id="age" name="age"></td>
		</tr>
		<tr>
			<td>Gender</td> <td><input type="text" id="gender" name="gender"></td>
		</tr>
		<tr>
			<td>Nationality</td> <td><input type="text" id="nationality" name="nationality"></td>
		</tr>
		<tr>
			<td>Address</td> <td><input type="text" id="address" name="address"></td>
		</tr>
		<tr>
			<td>City</td> <td><input type="text" id="city" name="city"></td>
		</tr>
		<tr>
			<td>Pincode</td> <td><input type="text" id="pincode" name="pincode"></td>
		</tr>
		<tr>
			<td>Category</td> <td><input type="text" id="category" name="category"></td>
		</tr>
		<tr>
			<td>Email</td> <td><input type="text" id="email" name="email"></td>
		</tr>
		<tr>
			<td>Phone</td> <td><input type="text" id="phone" name="phone"></td>
		</tr>
		
</table> <br>
         <input class="one" type="submit" name="submit" value="UPDATE" style="font-size: 1.2vw; width: auto">
         &nbsp &nbsp &nbsp &nbsp
         

</form>
</center>
</div>
</div>
<div id="myModal1" class="modal1">
	<div class="modal-content1">
		<span class= "close1">&times;</span>

<form id="form1" action="/sanction_amount" method="post">
	{{ csrf_field() }}
	<table id='table_form'>
		<tr>
			<td>id</td> <td><input type="number" id="idi" name="id" readonly></td>
		</tr>
			
		<tr>
			<td>Sanction Date: </td> <td><input type="date" id="sanction_date" name="sanction_date"></td>
		</tr>
		<tr>
			<td>Sanction Amount: </td> <td><input type="number" id="sanction_amount" name="sanction_amount"></td>
		</tr>
		<tr>
			<td>Cheque Number: </td> <td><input type="text" id="cheque_number" name="cheque_number"></td>
		</tr>
		<tr>
			<td>Savings Account Number: </td> <td><select id="saving_select" name= "acc_number">
        <?php
        for ($i=0; $i <$length ; $i++) { 
           $list_elem = $savings[$i];
           echo "<option>";
           echo $list_elem["acc_number"];
           echo "</option>";
         } 
        ?>
      </select></td>
		</tr>
		
</table> <br>
         <input class="one" type="submit" name="submit" value="UPDATE" style="font-size: 1.2vw; width: auto">
         &nbsp &nbsp &nbsp &nbsp

</form>
</div>
</div>
</center>

    



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

	

 function modalopen() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 

	

 function modalopen_delete() {
    modal1.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>



     		

<script type="text/javascript">
	let table= document.getElementById('table1'), iIndex;
	for(let i=0; i<table.rows.length; i++){
		table.rows[i].onclick= function(){
			rIndex=this.rowIndex;
			
			document.getElementById('id').value=this.cells[0].innerHTML;
			document.getElementById('idi').value=this.cells[0].innerHTML;
			document.getElementById('formnum').value=this.cells[1].innerHTML;
			document.getElementById('firstname').value=this.cells[2].innerHTML;
			document.getElementById('lastname').value=this.cells[3].innerHTML;
			document.getElementById('age').value=this.cells[4].innerHTML;
			document.getElementById('gender').value=this.cells[5].innerHTML;
			document.getElementById('nationality').value=this.cells[6].innerHTML;
			document.getElementById('address').value=this.cells[7].innerHTML;
			document.getElementById('city').value=this.cells[8].innerHTML;
			document.getElementById('pincode').value=this.cells[9].innerHTML;
			document.getElementById('category').value=this.cells[10].innerHTML;
			document.getElementById('email').value=this.cells[11].innerHTML;
			document.getElementById('phone').value=this.cells[12].innerHTML;

		}
	}
</script>



</body>
</html>