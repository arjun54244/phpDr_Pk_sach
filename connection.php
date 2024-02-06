<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dr_pk_sach";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (mysqli_sql_exception) {
    echo "could not connect❌✖️";
}

// insertdata


if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $email_add = $_POST['email_add'];
    $phone_no = $_POST['phone_no'];
    $user_message = $_POST['user_message'];
    $sql = "INSERT INTO `contacts`(`user_name`, `email_add`, `phone_no`, `user_message`) 
    VALUES ('$user_name','$email_add','$phone_no','$user_message')";
    
    try {
        $result = mysqli_query($conn, $sql);
        
    } catch (mysqli_sql_exception) {
        echo "This username is taken";
    }
}
?>