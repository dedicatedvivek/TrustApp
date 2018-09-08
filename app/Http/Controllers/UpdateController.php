<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class UpdateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function update()
    {
        

       if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $formnum = clean_input($_POST["formnum"]);
        $firstname = clean_input($_POST["firstname"]);
        $lastname = clean_input($_POST["lastname"]);
        $age = clean_input($_POST["age"]);
        $gender = clean_input($_POST["gender"]);
        $nationality = clean_input($_POST["nationality"]);
        $address = clean_input($_POST["address"]);
        $city = clean_input($_POST["city"]);
        $pincode = clean_input($_POST["pincode"]);
        $category = clean_input($_POST["category"]);
        $email = clean_input($_POST["email"]);
        $phone = clean_input($_POST["phone"]);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "auth";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        if(isset($_POST['Update'])) {
            $stmt = $conn->prepare("UPDATE applicants set formnum = ?, firstname = ?, lastname = ?, age = ?, gender = ?, nationality = ?, address = ?, city = ?, pincode = ?, category = ?, email = ?, phone = ? where id = ?");
            $stmt->bind_param("ississssissii", $formnum, $firstname, $lastname, $age, $gender, $nationality, $address, $city, $pincode, $category, $email, $phone , $id);    
            $stmt->execute();
        } 
        $conn->close();
        }
    }
     function clean_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }          
        
    }  
?>

