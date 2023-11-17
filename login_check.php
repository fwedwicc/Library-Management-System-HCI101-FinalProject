<?php 
session_start();
require('db.php');

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
    $data = "SELECT * FROM accounts WHERE username='$email' AND password='$pass'";
    $result = mysqli_query($conn, $data);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['type'] = $row['type'];
        
        if ($_SESSION['type']=="admin"){
            header("Location:admin_employee_s_data.php");
        }
        else if ($_SESSION['type']=="librarian"){
            header("Location:librarian_book_s_data.php");
        }
    }
    else{
        header("Location:login.php?error=Wrong username and password!");
    }
}
?>