
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
	width: 20%;
	background-repeat: no-repeat;
	background-size: cover;
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

</style>


	
</script>
<?php echo $__env->make('mynav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

$sql = "SELECT id,formnum,firstname, lastname,age,gender,nationality,address,city,pincode,category,email,phone FROM applicants";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table id='table1'><tr><th>id</th><th>Form Number</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Gender</th><th>Nationality</th><th>Address</th><th>City</th><th>Pincode</th><th>Category</th><th>Email id</th><th>Phone Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["formnum"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["nationality"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["pincode"]."</td><td>".$row["category"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
    }

        echo "</table>";
} 

echo"</center>";

?>

<center> <br>
<form id='form1' action="/update" method='POST'>
	<?php echo e(csrf_field()); ?>

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
         <input class="one" type="submit" name="submit" value="SUBMIT" style="font-size: 1.2vw; width: auto">
         &nbsp &nbsp &nbsp &nbsp
         <input class="one" type="button" value="BACK"  align="center" onclick="window.location='/'" style="font-size: 1.2vw; width: auto" > 

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

		}
	}
</script>

</body>
</html>