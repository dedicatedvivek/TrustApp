<!DOCTYPE html>
<html>
<head>
    <title>NewApplicant</title>
</head>
<body>

<form action="store" method="post">
    <label for="fname"></label>
    <input type="text" name="fname" value=""><br/>

    <label for="mname"></label>
    <input type="text" name="mname" value=""><br/>

    <label for="lname"></label>
    <input type="text" name="lname" value=""><br/>


    <label for="gender"></label>
    <input type="radio" name="gender" value="male">
    <input type="radio" name="gender" value="female">
    <input type="ratio" name="gender" value="other">
<br/>

    <label for="purpose"></label>
    <input type="text" name="purpose" value=""><br/>

     <label for="locality"></label>
    <input type="text" name="locality" value=""><br/>

    I Agree<input type="checkbox" name="agree" value="null"><br/>

    <input type="hidden" name="_token" value="{{crsf_token()}}"><br/>

    <label for=""></label>
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>