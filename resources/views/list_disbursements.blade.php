<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
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
	font-size: 1vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;
}

#table1 tr:hover{background-color: #dde;}





#table1 tr{
	cursor: default;
}

#table1 th {
	 padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2A88AD;
    color: white;
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

	</style>

</head>
@include('mynav')
<h2 style="color: #19303A" align="center">DISBURSEMENT LIST</h2>
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

$sql = "SELECT disbursements.sanction_id, savings_master.acc_number,applicants.firstname,disbursements.sanction_amount,disbursements.cheque_number,disbursements.sanction_date FROM savings_master,disbursements,applicants where disbursements.fo_acc_code = savings_master.acc_code AND disbursements.fo_id = applicants.id";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table class='appl-list-table' id='table1'><tr><th>Sr.No</th><th>First Name</th><th>Account Number</th><th>Sanction Amount</th><th>Cheque Number</th><th>Sanction Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sanction_id"]."</td><td>".$row["firstname"]."</td><td>".$row["acc_number"]."</td><td>".$row["sanction_amount"]."</td><td>".$row["cheque_number"]."</td><td>".$row["sanction_date"]."</td> </tr>";
    }

        echo "</table>";
} 

?>
</body>
</html>