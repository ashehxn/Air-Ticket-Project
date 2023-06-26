<?php 
    include "../../db/db.php";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if(isset($_POST["submit"])) {

        $Error = "";

        $name = test_input($_POST["fname"]);

        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $Error = "Only letters and white spaces allowed";
        }

        $name = test_input($_POST["mname"]);

        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $Error = "Only letters and white spaces allowed";
        }

        $name = test_input($_POST["lname"]);

        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $Error = "Only letters and white spaces allowed";
        }
                 
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $Error = "Invalid email format";
        }
            
        

        if($Error === "") {

            $staffID = $_POST["id"];
            $first_name = $_POST["fname"];
            $middle_name = $_POST["mname"];
            $last_name = $_POST["lname"];

            $email = $_POST["email"];
            $password = $_POST["password"];
            $staffType = $_POST["staff"];
            $contact = $_POST["contact"];

            $qur4 = "SELECT COUNT(*) AS count FROM staff_email WHERE Email = '$email';";

            $result3 = $conn->query($qur4);

            if($result3 === false){
                 echo "Error executing the query: " . $conn->error;
            }else{

              $row = $result3->fetch_assoc();
              $emailCount = $row['count'];
            
            if($emailCount === '0'){
        
            $sql = "INSERT INTO staff VALUES('{$staffID}', '{$first_name}', '{$middle_name}', '{$last_name}', '{$staffType}', '{$password}');".
                   "INSERT INTO staff_email VALUES('{$staffID}', '{$email}');".
                   "INSERT INTO staff_phone VALUES('{$staffID}', '{$contact}');";
    
            $result = $conn->multi_query($sql);

            if($result === TRUE){
                header("Location: ./createAdminMessage.php");
            } else {
                echo "Error: " . $conn->error;
            }

        } else{
            echo "Email already exists. Please choose a different email.";
        }
    }
    }else {

        echo "<script> 
                alert('" . $Error . "');
                window.location.href = './addAdmin.php'; 
            </script>";
    }

    }
?>

<?php $conn->close() ?>