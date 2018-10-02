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
}

.one {
	width: auto;
}

</style>

<script type="text/javascript">
	
</script>

<h2 style="color: #19303A" align="center">LIST OF BANKS</h2>
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

$sql = "SELECT b_code, b_name, b_city, b_branch FROM banks_master";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table id='table1'><tr><th>Sr No.</th><th>Bank Name</th><th>Bank City</th><th>Bank Branch</th></tr>";
    
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["b_code"]."</td><td>".$row["b_name"]."</td><td>".$row["b_city"]."</td><td>".$row["b_branch"]."</td></tr>";
    }

        echo "</table>";
} 

echo"</center>";
$conn->close();
?>
<br><br>
<center>
<input class="one" type="button" value="BACK" onclick="window.location='/bank'" /> 
</center>

</center>
</body>
</html>