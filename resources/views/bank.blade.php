<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  @include('mynav')
  <center>
  <h2 style="color: #19303A; font-size: 3vw">BANKS</h2>
  </center>
</head>

<center>




<style>

body{
	background-image: url("abc.png");
	font-size: 1.2vw;
}

button {

	border: 2px solid #19303A;
	color: #19303A;
	padding: 1px;
	width: auto;
	font-size: 1.2vw;

}


</style>

<body>
<br> <br><br>

&nbsp &nbsp &nbsp &nbsp
<button name="NEW BANK" onclick="window.location='/new_bank'">NEW BANK</button>	
&nbsp &nbsp &nbsp &nbsp
<button name="LIST OF BANKS" onclick="window.location='/list_bank'">BANK DETAILS</button>
&nbsp &nbsp &nbsp &nbsp
<button name="ajax" onclick="window.location='/ajax'">ajax</button>

<br><br><br>
<button name="BACK" onclick="window.location='/'">BACK</button>

</center>
</body>
</html>