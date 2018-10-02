<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        
        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                    }
                };
                xhttp.open("GET", "cd_catalog.xml", true);
                xhttp.send();
            }
            function myFunction(xml) {
                var i;
                var xmlDoc = xml.responseXML;
                var table="<tr><th>Artist</th><th>Title</th></tr>";
                var x = xmlDoc.getElementsByTagName("cd");
                for (i = 0; i < x.length; i++) { 
                    table += "<tr><td>" +
                    x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
                    "</td><td>" +
                    x[i].getElementsByTagName("artist")[0].childNodes[0].nodeValue +
                    "</td></tr>";
                }
                document.getElementById("demo").innerHTML = table;
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="loadDoc()">Get my CD collection</button>
        <br><br>
        <table id="demo">
            
        </table>
    </body>
</html>