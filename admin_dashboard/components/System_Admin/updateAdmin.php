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

            if(empty($_POST["fname"])) {
                $Error = "First name is required";
            } else {
                $name = test_input($_POST["fname"]);

                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $Error = "Only letters and white spaces allowed";
                }
            }

            if(empty($_POST["surname"])) {
                $Error = "Surname is required";
            } else {
                $name = test_input($_POST["surname"]);

                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $Error = "Only letters and white spaces allowed";
                }
            }

            if(empty($_POST["email"])){
                $Error = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $Error = "Invalid email format";
                }
            }


        }

        if($Error === "") {

            $fname = $_POST["fname"];
            $surname = $_POST["surname"];
            $mname = $_POST["mname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $contact = $_POST["contact"];
            $id = $_POST["id"];

            $sql =  "UPDATE staff SET FirstName = '{$fname}', MiddleName = '{$mname}', SurName = '{$surname}', StaffPassword = '{$password}' WHERE StaffID = '{$id}';".
                    "UPDATE staff_email SET Email = '{$email}' WHERE StaffID = '{$id}';".        
                    "UPDATE staff_phone SET PhoneNo = '{$contact}' WHERE StaffID = '{$id}';";                  

            $result = $conn->multi_query($sql);

            if($result === TRUE){
                header("Location: ./updateAdminMessage.php");
            } else {
                echo "Error: " . $conn->error;
            }

        } else {

            echo "<script> 
                    alert('" . $Error . "');
                    window.location.href = '../../Staff_dashboard.php'; 
                </script>";
        }

    
?>

<?php $conn->close() ?>