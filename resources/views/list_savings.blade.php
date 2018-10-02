<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body{
	background-image: url("abc.png");
	background-repeat: no-repeat;
	background-size:cover;
}

table{
	background-image: url("abc.png");
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

</style>

<script type="text/javascript">
	
</script>

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

$sql = "SELECT fo_b_code, acc_holder, acc_number, acc_balance FROM savings_master";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table id='table1'><tr><th>Sr No.</th><th>Account Holder</th><th>Account Number</th><th>Account Balance</th></tr>";
    
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fo_b_code"]."</td><td>".$row["acc_holder"]."</td><td>".$row["acc_number"]."</td><td>".$row["acc_balance"]."</td></tr>";
    }

        echo "</table>";
} 

echo"</center>";
$conn->close();
?>
<br><br>
<center>
<input class="one" type="button" value="BACK" onclick="window.location='/saving'" style="width: auto;" /> 
</center>

</center>
</body>
</html>