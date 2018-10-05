<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>BANK MASTER</title>

<style>

body{
	background-image: url("abc.png");
}

#formtable{
	background-image: url("abc.png");
	border:2px solid black;
	width: auto;
    font-size: 1.5vw;


}

table,th,td
{
	border: 2px solid black;
	padding: 2px;
	color: white;
	font-family: monospace;
	font-size: 1.5vw;
	color: #19303A;
	font-weight: bold;
	font-style: italic;


    
}

table,th,td,input{
	width: auto;
	border: 2px solid #19303A;
	padding: 1px;

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
<script type="text/javascript">
    function validation(){
        
        
        if (document.appl.b_name.value=="" ||
            !isNaN(document.appl.b_name.value)){
            alert("Kindly Provide Valid Bank Name!!!");
            document.appl.b_name.focus();
            return false;

         if (document.appl.b_city.value=="" ||
            !isNaN(document.appl.b_city.value)){
            alert("Kindly Provide Valid City Name!!!");
            document.appl.b_city.focus();  
            return false;

          if (document.appl.b_branch.value=="" ||
            !isNaN(document.appl.b_branch.value)){
            alert("Kindly Provide Valid Branch Name!!!");
            document.appl.b_branch.focus();  
            return false;  
 }
</script>
</head>

<body>
@include('mynav')
<h2 align="center" style="color: #19303A">ADD A NEW BANK</h2>


<center>

<form action="/insertbank" method="post" name="appl"> 

	{{ csrf_field() }}
<table id="formtable">



<tr>
    <td>
	    <label for="BANK NAME">BANK NAME:</label> 
	</td>
   
    <td>    
	    <input type="text" name="b_name"  />
    </td>
</tr>
<tr>
	<td>
        <label for="BANK CITY">BANK CITY:</label>
    </td>
    <td>   
    	<input type="text" name="b_city"  />
    </td>
</tr>
<tr>
	<td>
        <label for="BANK BRANCH">BANK BRANCH:</label> 
    </td>
    <td>    
    	<input type="text" name="b_branch"  />
    </td> 
</tr>
</table>

<br> 

<input type="submit" name="submit" value="SUBMIT" style="width: auto;border: 2px solid #19303A; font-size: 1.2vw"> 
&nbsp &nbsp &nbsp
<input type="button" value="BACK" onclick="window.location='/bank'" style="width: auto;border: 2px solid #19303A; font-size: 1.2vw"><br />

</form>
</center>



</body>

</html>




