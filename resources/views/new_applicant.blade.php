<html>

<head>

<title>APPLICANT REGISTRATION</title>

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

<h2 align="center" style="color: fefe70">APPLICANT REGISTRATION</h2>

<center>

<form action="/insert" method="post">

	{{ csrf_field() }}
<table id="formtable">
<tr>
    <td>
	    <label for="First Name">First Name:</label> 
	</td>
   
    <td>    
	    <input type="text" name="firstname" id="one"/>
    </td>
</tr>
<tr>
	<td>
        <label for="Last Name">Last Name:</label>
    </td>
    <td>   
    	<input type="text" name="lastname" id="one" />
    </td>
</tr>
<tr>
	<td>
        <label for="Date Of Birth">Date Of Birth:</label> 
    </td>
    <td>    
    	<input type="date" name="dob" id="one" />
    </td> 
</tr>

<tr>
	<td> 

        <label for="Gender">Gender: </label>  
    </td>
    <td>    
      <input type="text" name="gender" id="one" />
    </td>
</tr>
<tr>
	<td>
        <label for="Nationality">Nationality: </label>
    </td>
    <td>      
     <input type="text" name="nationality" id="one" />
    </td>
</tr>

<tr>
	<td>

        <label for="Address">Address: </label> 
    </td>
    <td>   
     <input type="text" name="address" id="one" />
    </td>
</tr>

<tr>
	<td> 

        <label for="City">City: </label> 
    </td>
    <td>   
    	<input type="text" name="city" id="one" />
    </td>
</tr>
<tr>
	<td>

        <label for="Pincode">Pincode: </label>
    </td>
    <td>      
    	<input type="text" name="pincode" id="one" /> 
    </td>
</tr>
<tr>
	<td>
        <label for="Purpose">Purpose: </label>  
    </td>
    <td>    
    	<input type="text" name="category" id="one" />
    </td>
</tr>
 <tr>
 	<td>
        <label for="Status">Status: </label>  
    </td>
    <td>    
    	<input type="text" name="status" id="one" />
    </td>
</tr>
<tr>
	<td>
        <label for="E-mail Address">E-mail Address: </label>  
    </td>
    <td>    
    	<input type="text" name="email" id="one" />
    </td>
</tr>

<tr>
	<td>

        <label for="Phone Number">Phone Number: </label>  
    </td>
    <td>    
    	<input type="text" name="phone" id="one" />
    </td>
</tr>

<tr>
	<td>
		<label for="image">Add Profile Image: </label>
	</td>

	<td>
		<input type="file" name="image" />
	</td>
</tr>



 

</table>

<br> 

<input type="submit" name="submit" value="SUBMIT"> 



<input type="button" value="BACK" onclick="window.location='/'" /><br />

</form>
</center>



</body>

</html>




