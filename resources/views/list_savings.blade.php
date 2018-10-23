<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body{
	background-color: #f4f2ef;
	background-repeat: no-repeat;
	background-size:cover;
}

table{
	
	border:2px solid black;
	width: auto;
	background-repeat: no-repeat;
	background-size: cover;

}
table,th,td
{
	border: 2px solid black;
	padding: 2px;
	font-family: monospace;
	font-size: 17px;
	color: #19303A;
	font-weight: bold;
	font-style: italic;
	width: auto;
}

input {
	padding: 1px;
	color: #19303A;
	border: 2px solid #19303A;
	width: auto;
}

.one {
	width: 100px;
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

#table1 th {
    background-color: #2A88AD;
    color: white;
}



</style>

<script type="text/javascript">
	
</script>
@include('mynav')
<h2 style="color: #19303A" align="center">ACCOUNT DETAILS</h2>
<br><br>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT savings_master.fo_b_code, savings_master.acc_holder, savings_master.acc_number, savings_master.acc_balance, banks_master.b_name FROM savings_master,banks_master WHERE savings_master.fo_b_code = banks_master.b_code";
$result = $conn->query($sql);

echo"<center>";
if ($result->num_rows > 0) {


    echo "<table id='table1'><tr><th>Bank Code</th><th>Account Holder</th><th>Account Number</th><th>Account Balance</th><th>Bank Name</th></tr>";
    
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fo_b_code"]."</td><td>".$row["acc_holder"]."</td><td>".$row["acc_number"]."</td><td>".$row["acc_balance"]."</td><td>".$row["b_name"]."</td></tr>";
    }

        echo "</table>";
} 

echo"</center>";
$conn->close();
?>
<br><br>

</center>
</body>
</html>