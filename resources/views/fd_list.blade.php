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
<h2 style="color: #19303A" align="center">FD LIST</h2>
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

$sql = "SELECT fixed_deposits.fd_no, fixed_deposits.deposit_date,fixed_deposits.rate_of_interest,fixed_deposits.deposit_amount,fixed_deposits.maturity_amount,fixed_deposits.maturity_date,savings_master.acc_number FROM savings_master,fixed_deposits where fixed_deposits.fo_tr_code = savings_master.acc_code";
$result = $conn->query($sql);
echo"<center>";
if ($result->num_rows > 0) {


    echo "<table class='appl-list-table' id='table1'><tr><th>Sr.No</th><th>Deposit Date</th><th>Rate Of Interest</th><th>DEPOSIT AMOUNT</th><th>Maturity Amount</th><th>Maturity Date</th><th>Savings Account Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["fd_no"]."</td><td>".$row["deposit_date"]."</td><td>".$row["rate_of_interest"]."</td><td>".$row["deposit_amount"]."</td><td>".$row["maturity_amount"]."</td><td>".$row["maturity_date"]."</td><td>".$row["acc_number"]."</td> </tr>";
    }

        echo "</table>";
} 

?>
</body>
</html>