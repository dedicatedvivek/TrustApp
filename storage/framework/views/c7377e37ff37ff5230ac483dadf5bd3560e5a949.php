<html>
<head>
<style>
body{
	background-image: url("simple.png");
}
table{
	background-image: url("simple.png");
	border:2px solid black;
	width: 45%;
}
table, th, td {
    border: 2px dotted black;
	padding: 2px;
	color: cyan;
	font-family: monospace;
	font-size: 14px;
	
	font-weight: bold;
	font-style: unset;
}
</style>
<script type="text/javascript">
	function UpdateApplicant()
	{
		return window.location='/'
	}
</script>



<h2 style="color: white" align="center">LIST OF APPLICANTS</h2>

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
$sql = "SELECT id,formnum,firstname, lastname,age,gender,nationality,address,city,pincode,category,email,phone,image,doc1,doc2 FROM applicants";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {
    echo "<table id='table1'><tr><th>id</th><th>Form Number</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Nationality</th><th>Address</th><th>City</th><th>Pincode</th><th>Category</th><th>Email id</th><th>Phone Number</th><th>Image</th><th>Doc1</th><th>Doc2</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row["formnum"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["nationality"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["category"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["image"]."</td><td>".$row["doc1"]."</td><td>".$row["doc2"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo"</center>";
$conn->close();
?>
<center>
<form id='form1' action='listapplicant' method='post'>
	<?php echo e(csrf_field()); ?>

	<table id='table_form'>
		<tr>
			<td>id</td> <td><input type="number" id="id" name="id" ></td>
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
		<tr>
			<tr>
			<td>image</td> <td><input type="file" id="image" name="image" ></td>
		</tr>
		<tr>
			<tr>
			<td>doc1</td> <td><input type="file" id="doc1" name="doc1" ></td>
		</tr>
		<tr>
			<tr>
			<td>doc2</td> <td><input type="file" id="doc2" name="doc2" ></td>
		</tr>
		<tr>
		<td><input type="submit" onclick="listapplicant"/></td>
		</tr>

	</table>
</form>
</center>
		

<script type="text/javascript">
	let table= document.getElementById('table1'), iIndex;
	for(let i=0; i<table.rows.length; i++){
		table.rows[i].onclick= function(){
			rIndex=this.rowIndex;
			document.getElementById('id').value=this.cells[0].innerHTML;
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
			document.getElementById('image').value=this.cells[13].innerHTML;
			document.getElementById('doc1').value=this.cells[14].innerHTML;
			document.getElementById('doc2').value=this.cells[15].innerHTML;
		}
	}
</script>
<br /><br />
<center>

<input type="button" value="BACK" style="width: 5%" align="center" onclick="window.location='/'" />
</center>

<?php	
echo "hi";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "auth";
		$db = new mysqli($servername, $username, $password, $dbname);
		$query = "UPDATE applicants set formnum = '$_POST[formnum]', firstname = '$_POST[firstname]', lastname = 'BABA', age = $_POST[age] gender = '$_POST[gender]', nationality = $_POST[nationality], address = '$_POST[address]', city =' $_POST[city]', pincode = '$_POST[pincode]', category = '$_POST[category]', email = '$_POST[email]', phone = $_POST[phone] where formnum = '$_POST[formnum]'";
		$result = $db->query($query); 
	}
?>
</body>
</html>