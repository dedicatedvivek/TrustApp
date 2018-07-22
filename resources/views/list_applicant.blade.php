<html>
<head>
<style>
body{
	background-image: url("formback.png");
}

table{
	background-image: url("table.png");
	border:2px solid black;
	width: 45%;

}
table, th, td {
    border: 2px dotted black;
	padding: 2px;
	color: white;
	font-family: monospace;
	font-size: 24px;
	color: #fefe70;
	font-weight: bold;
	font-style: italic;
}
</style>
<h2 style="color: #fefe70" align="center">LIST OF APPLICANTS</h2>

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

$sql = "SELECT firstname, lastname,dob,gender,nationality,address,city,pincode,category,status,email,phone FROM applicants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Nationality</th><th>Address</th><th>City</th><th>Pincode</th><th>Category</th><th>Status</th><th>Email id</th><th>Phone Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["nationality"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["category"]."</td><td>".$row["status"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<br /><br />
<center>
<input type="button" value="BACK" style="width: 270px" align="center" onclick="window.location='/'" />
</center>
</body>
</html>