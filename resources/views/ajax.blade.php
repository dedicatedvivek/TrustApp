<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>



<button type="button" onclick="loadDoc()">VIEW BANK CODES</button>
<br><br>
<table id="code_display"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "bank_codes.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>BANK-CODE</th><th>BANK-NAME</th></tr>";
  var x = xmlDoc.getElementsByTagName("BANK");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("BCODE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("BNAME")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("code_display").innerHTML = table;
}
</script>

</body>
</html>
