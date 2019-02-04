<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script type="text/javascript">
	$(window).load(function() {
		$(".main-body").fadeIn(4000);
		$(".se-pre-con").fadeOut(800);
	});
</script>

<title>APPLICANT REGISTRATION</title>

<style>

body{
	background-color:#f4f2ef;
	background-size: cover;
	background-repeat: no-repeat;

}
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: center;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url("spinner-animation.gif") center no-repeat #fff;
}

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
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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

.form-style-10{
    width:80%;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
.file-upload{
	

}


</style>
<script type="text/javascript">
	function validation(){
		if (document.appl.firstname.value=="" ||
			!isNaN(document.appl.firstname.value)){
			alert("Kindly Provide Valid First Name!!!");
			document.appl.firstname.focus();  
			return false;

		}
		if (document.appl.lastname.value=="" ||
		!isNaN(document.appl.lastname.value)) {
			alert("Kindly Provide Valid Last Name!!!");
			document.appl.lastname.focus();
			return false;

		}
		if (document.appl.address.value=="") {
			alert("Kindly Specify the Address!!!");    
			document.appl.address.focus();
			return false;

		}
		if (document.appl.city.value=="" ||
		!isNaN(document.appl.city.value)) {
			alert("Kindly Specify Valid City Name!!!");
			document.appl.city.focus();
			return false;

		}
		if (document.appl.pincode.value=="" ||
		isNaN(document.appl.pincode.value) ||
		document.appl.pincode.value.length !=6) {
			alert("Pincode is either empty or inappropriate!!!");
			document.appl.pincode.focus();
			return false;

		}
		if (document.appl.email.value=="") {
			alert("Kindly Specify the Email ID!!!");
			document.appl.email.focus();
			return false;

		}

		if (document.appl.phone.value=="" ||
			isNaN(document.appl.phone.value) ||
		document.appl.phone.value.length !=10) {
	alert("Please enter a valid 10 Digit Phone Number!!!");
	document.appl.phone.focus();
		return false;
	}

		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(appl.email.value))
  {
    return (true);
  }
    alert("You have entered an invalid email address!");
    return (false);
}

</script>
</head>

<body class="main-body">

<div class="se-pre-con"></div>
@include('mynav')


<div class= "form-style-10">

<h1>ADD A NEW APPLICANT<span>Fill in the details carefully</span></h1>

<form action="/insert" method="post" name="appl" onsubmit="return validation()"> 

	{{ csrf_field() }}

<div class = "section"><span>1</span>FORM NUMBER</div>
<div class = "inner-wrap">
	<label for="Form Number">UNIQUE FORM NUMBER <input type="text" name="formnum"  /></label>
</div>

    


<div class = "section"><span>2</span>NAME &amp; PERSONAL DETAILS</div>
<div class = "inner-wrap">

    
	    <label for="First Name">First Name <input type="text" name="firstname" /></label>
   		<label for="Last Name">Last Name <input type="text" name="lastname"  /></label>
   		<label for="Age">Age <input type="number" name="age" /></label>
        <label for="Gender">Gender 
       
              <select name="gender"> 
        	<option name="gender" value="male" >Male</option>
        	<option name="gender" value="female" >Female</option>
        	<option name="gender" value="other" >Other</option>
        </select>
       </label>
 </div>


<div class = "section"><span>3</span>NATIONALITY &amp; ADDRESS</div>
<div class = "inner-wrap">
 
        <label for="Nationality">Nationality 
        
     <select name="nationality">
    <option value="India">India</option>
	<option value="United States">United States</option> 
	<option value="United Kingdom">United Kingdom</option> 
	<option value="Afghanistan">Afghanistan</option> 
	<option value="Albania">Albania</option> 
	<option value="Algeria">Algeria</option> 
	<option value="American Samoa">American Samoa</option> 
	<option value="Andorra">Andorra</option> 
	<option value="Angola">Angola</option> 
	<option value="Anguilla">Anguilla</option> 
	<option value="Antarctica">Antarctica</option> 
	<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
	<option value="Argentina">Argentina</option> 
	<option value="Armenia">Armenia</option> 
	<option value="Aruba">Aruba</option> 
	<option value="Australia">Australia</option> 
	<option value="Austria">Austria</option> 
	<option value="Azerbaijan">Azerbaijan</option> 
	<option value="Bahamas">Bahamas</option> 
	<option value="Bahrain">Bahrain</option> 
	<option value="Bangladesh">Bangladesh</option> 
	<option value="Barbados">Barbados</option> 
	<option value="Belarus">Belarus</option> 
	<option value="Belgium">Belgium</option> 
	<option value="Belize">Belize</option> 
	<option value="Benin">Benin</option> 
	<option value="Bermuda">Bermuda</option> 
	<option value="Bhutan">Bhutan</option> 
	<option value="Bolivia">Bolivia</option> 
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
	<option value="Botswana">Botswana</option> 
	<option value="Bouvet Island">Bouvet Island</option> 
	<option value="Brazil">Brazil</option> 
	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
	<option value="Brunei Darussalam">Brunei Darussalam</option> 
	<option value="Bulgaria">Bulgaria</option> 
	<option value="Burkina Faso">Burkina Faso</option> 
	<option value="Burundi">Burundi</option> 
	<option value="Cambodia">Cambodia</option> 
	<option value="Cameroon">Cameroon</option> 
	<option value="Canada">Canada</option> 
	<option value="Cape Verde">Cape Verde</option> 
	<option value="Cayman Islands">Cayman Islands</option> 
	<option value="Central African Republic">Central African Republic</option> 
	<option value="Chad">Chad</option> 
	<option value="Chile">Chile</option> 
	<option value="China">China</option> 
	<option value="Christmas Island">Christmas Island</option> 
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
	<option value="Colombia">Colombia</option> 
	<option value="Comoros">Comoros</option> 
	<option value="Congo">Congo</option> 
	<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
	<option value="Cook Islands">Cook Islands</option> 
	<option value="Costa Rica">Costa Rica</option> 
	<option value="Cote D'ivoire">Cote D'ivoire</option> 
	<option value="Croatia">Croatia</option> 
	<option value="Cuba">Cuba</option> 
	<option value="Cyprus">Cyprus</option> 
	<option value="Czech Republic">Czech Republic</option> 
	<option value="Denmark">Denmark</option> 
	<option value="Djibouti">Djibouti</option> 
	<option value="Dominica">Dominica</option> 
	<option value="Dominican Republic">Dominican Republic</option> 
	<option value="Ecuador">Ecuador</option> 
	<option value="Egypt">Egypt</option> 
	<option value="El Salvador">El Salvador</option> 
	<option value="Equatorial Guinea">Equatorial Guinea</option> 
	<option value="Eritrea">Eritrea</option> 
	<option value="Estonia">Estonia</option> 
	<option value="Ethiopia">Ethiopia</option> 
	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
	<option value="Faroe Islands">Faroe Islands</option> 
	<option value="Fiji">Fiji</option> 
	<option value="Finland">Finland</option> 
	<option value="France">France</option> 
	<option value="French Guiana">French Guiana</option> 
	<option value="French Polynesia">French Polynesia</option> 
	<option value="French Southern Territories">French Southern Territories</option> 
	<option value="Gabon">Gabon</option> 
	<option value="Gambia">Gambia</option> 
	<option value="Georgia">Georgia</option> 
	<option value="Germany">Germany</option> 
	<option value="Ghana">Ghana</option> 
	<option value="Gibraltar">Gibraltar</option> 
	<option value="Greece">Greece</option> 
	<option value="Greenland">Greenland</option> 
	<option value="Grenada">Grenada</option> 
	<option value="Guadeloupe">Guadeloupe</option> 
	<option value="Guam">Guam</option> 
	<option value="Guatemala">Guatemala</option> 
	<option value="Guinea">Guinea</option> 
	<option value="Guinea-bissau">Guinea-bissau</option> 
	<option value="Guyana">Guyana</option> 
	<option value="Haiti">Haiti</option> 
	<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
	<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
	<option value="Honduras">Honduras</option> 
	<option value="Hong Kong">Hong Kong</option> 
	<option value="Hungary">Hungary</option> 
	<option value="Iceland">Iceland</option> 
	<option value="India">India</option> 
	<option value="Indonesia">Indonesia</option> 
	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
	<option value="Iraq">Iraq</option> 
	<option value="Ireland">Ireland</option> 
	<option value="Israel">Israel</option> 
	<option value="Italy">Italy</option> 
	<option value="Jamaica">Jamaica</option> 
	<option value="Japan">Japan</option> 
	<option value="Jordan">Jordan</option> 
	<option value="Kazakhstan">Kazakhstan</option> 
	<option value="Kenya">Kenya</option> 
	<option value="Kiribati">Kiribati</option> 
	<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
	<option value="Korea, Republic of">Korea, Republic of</option> 
	<option value="Kuwait">Kuwait</option> 
	<option value="Kyrgyzstan">Kyrgyzstan</option> 
	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
	<option value="Latvia">Latvia</option> 
	<option value="Lebanon">Lebanon</option> 
	<option value="Lesotho">Lesotho</option> 
	<option value="Liberia">Liberia</option> 
	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
	<option value="Liechtenstein">Liechtenstein</option> 
	<option value="Lithuania">Lithuania</option> 
	<option value="Luxembourg">Luxembourg</option> 
	<option value="Macao">Macao</option> 
	<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
	<option value="Madagascar">Madagascar</option> 
	<option value="Malawi">Malawi</option> 
	<option value="Malaysia">Malaysia</option> 
	<option value="Maldives">Maldives</option> 
	<option value="Mali">Mali</option> 
	<option value="Malta">Malta</option> 
	<option value="Marshall Islands">Marshall Islands</option> 
	<option value="Martinique">Martinique</option> 
	<option value="Mauritania">Mauritania</option> 
	<option value="Mauritius">Mauritius</option> 
	<option value="Mayotte">Mayotte</option> 
	<option value="Mexico">Mexico</option> 
	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
	<option value="Moldova, Republic of">Moldova, Republic of</option> 
	<option value="Monaco">Monaco</option> 
	<option value="Mongolia">Mongolia</option> 
	<option value="Montserrat">Montserrat</option> 
	<option value="Morocco">Morocco</option> 
	<option value="Mozambique">Mozambique</option> 
	<option value="Myanmar">Myanmar</option> 
	<option value="Namibia">Namibia</option> 
	<option value="Nauru">Nauru</option> 
	<option value="Nepal">Nepal</option> 
	<option value="Netherlands">Netherlands</option> 
	<option value="Netherlands Antilles">Netherlands Antilles</option> 
	<option value="New Caledonia">New Caledonia</option> 
	<option value="New Zealand">New Zealand</option> 
	<option value="Nicaragua">Nicaragua</option> 
	<option value="Niger">Niger</option> 
	<option value="Nigeria">Nigeria</option> 
	<option value="Niue">Niue</option> 
	<option value="Norfolk Island">Norfolk Island</option> 
	<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
	<option value="Norway">Norway</option> 
	<option value="Oman">Oman</option> 
	<option value="Pakistan">Pakistan</option> 
	<option value="Palau">Palau</option> 
	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
	<option value="Panama">Panama</option> 
	<option value="Papua New Guinea">Papua New Guinea</option> 
	<option value="Paraguay">Paraguay</option> 
	<option value="Peru">Peru</option> 
	<option value="Philippines">Philippines</option> 
	<option value="Pitcairn">Pitcairn</option> 
	<option value="Poland">Poland</option> 
	<option value="Portugal">Portugal</option> 
	<option value="Puerto Rico">Puerto Rico</option> 
	<option value="Qatar">Qatar</option> 
	<option value="Reunion">Reunion</option> 
	<option value="Romania">Romania</option> 
	<option value="Russian Federation">Russian Federation</option> 
	<option value="Rwanda">Rwanda</option> 
	<option value="Saint Helena">Saint Helena</option> 
	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
	<option value="Saint Lucia">Saint Lucia</option> 
	<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
	<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
	<option value="Samoa">Samoa</option> 
	<option value="San Marino">San Marino</option> 
	<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
	<option value="Saudi Arabia">Saudi Arabia</option> 
	<option value="Senegal">Senegal</option> 
	<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
	<option value="Seychelles">Seychelles</option> 
	<option value="Sierra Leone">Sierra Leone</option> 
	<option value="Singapore">Singapore</option> 
	<option value="Slovakia">Slovakia</option> 
	<option value="Slovenia">Slovenia</option> 
	<option value="Solomon Islands">Solomon Islands</option> 
	<option value="Somalia">Somalia</option> 
	<option value="South Africa">South Africa</option> 
	<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
	<option value="Spain">Spain</option> 
	<option value="Sri Lanka">Sri Lanka</option> 
	<option value="Sudan">Sudan</option> 
	<option value="Suriname">Suriname</option> 
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
	<option value="Swaziland">Swaziland</option> 
	<option value="Sweden">Sweden</option> 
	<option value="Switzerland">Switzerland</option> 
	<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
	<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
	<option value="Tajikistan">Tajikistan</option> 
	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
	<option value="Thailand">Thailand</option> 
	<option value="Timor-leste">Timor-leste</option> 
	<option value="Togo">Togo</option> 
	<option value="Tokelau">Tokelau</option> 
	<option value="Tonga">Tonga</option> 
	<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
	<option value="Tunisia">Tunisia</option> 
	<option value="Turkey">Turkey</option> 
	<option value="Turkmenistan">Turkmenistan</option> 
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
	<option value="Tuvalu">Tuvalu</option> 
	<option value="Uganda">Uganda</option> 
	<option value="Ukraine">Ukraine</option> 
	<option value="United Arab Emirates">United Arab Emirates</option> 
	<option value="United Kingdom">United Kingdom</option> 
	<option value="United States">United States</option> 
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
	<option value="Uruguay">Uruguay</option> 
	<option value="Uzbekistan">Uzbekistan</option> 
	<option value="Vanuatu">Vanuatu</option> 
	<option value="Venezuela">Venezuela</option> 
	<option value="Viet Nam">Viet Nam</option> 
	<option value="Virgin Islands, British">Virgin Islands, British</option> 
	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
	<option value="Wallis and Futuna">Wallis and Futuna</option> 
	<option value="Western Sahara">Western Sahara</option> 
	<option value="Yemen">Yemen</option> 
	<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>
     </select>
 </label>
	

        <label for="Address">Address <input type="text" name="address"  /></label>

 



        <label for="City">City <input type="text" name="city"  /></label>
 

        <label for="Pincode">Pincode <input type="text" name="pincode"  /></label> 
   </div>
   <div class = "section"><span>4</span>PURPOSE</div>
   <div class = "inner-wrap">
        <label for="Purpose">ADD THE PURPOSE  
       
    	<select name="category" >
    		<option value="educational">Educational</option>
    		<option value="medical">Medical</option>
    		<option value="Financial">Financial</option>
    		<option value="other">Other</option>
    	</select>
    </label>

 </div>
    <div class = "section"><span>5</span>CONTACT DETAILS</div>
    <div class = "inner-wrap">

        <label for="E-mail Address">E-mail Address <input type="text" name="email"  /></label>



        <label for="Phone Number">Phone Number <input type="text" name="phone"  /></label>
 </div>
 <div class = "section"><span>6</span>REQUIRED DOCUMENTS</div>
    <div class = "inner-wrap">

		<label class="file-upload" for="image">Add Profile Image <input class="file-upload" type="file" name="image" /></label>

		<label for="image">Document 1(Aadhar Card)	<input type="file" name="doc1" /></label>

		<label for="image">Document 2(Salary Certificate/Letter) <input type="file" name="doc2" /></label>

</div>
<center>
<input class="one" type="submit" name="submit" value="SUBMIT" style="color:white;font-size: 1.2vw" >
</center>

</form>
</div>

</form>
</body>
</html>




