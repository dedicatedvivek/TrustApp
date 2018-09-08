<html>

<head>

<title>BANK MASTER</title>

<style>

body{
	background-image: url("formback.png");
}

#formtable{
	background-image: url("table.png");
	border:2px solid black;
	width: 45%;

}

table,th,td
{
	border: 2px dotted black;
	padding: 2px;
	color: white;
	font-family: monospace;
	font-size: 24px;
	color: #fefe70;
	font-weight: bold;
	font-style: italic;


    
}

table,th,td,input{
	width: 270px;

}




</style>

</head>

<body>

<h2 align="center" style="color: #fefe70">ADD A NEW BANK</h2>

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

<input type="submit" name="submit" value="SUBMIT"> 

<input type="button" value="BACK" onclick="window.location='/bank'" / ><br />

</form>
</center>



</body>

</html>




