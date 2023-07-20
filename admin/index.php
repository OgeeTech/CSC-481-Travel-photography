<?php
include('connect.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Admin Login</title>
 
</head>
</head>
<body class="form-body">
      <div class = "admin-form">
        <h2>Admin Login!</h2>
        <form class = "flex">
            <input type = "email" placeholder="Enter Email" class = "form-control">
            <input type = "password" placeholder="Enter Password" class = "form-control">
            <input type = "submit" class = "btn" value = "Login" name="admin">
        </form>
       </div>

                  
    
</body>
</html>

<?php

global $con;

if(isset($_POST['admin'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $select_query = "Select * from `admin` where email='$email' ";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);

    

    
    if($rows_count>0){
        $_SESSION['email'] = $email;
        if(password_verify($password,$row_data['password'])){
            // echo "<script>alert('Login Successful')</script>";
            if($rows_count==1){
                $_SESSION['email'] = $email;
                echo "<script>alert('Login Successful')</script>";
                echo "<script>window.open('dashboard.php', '_self')</script>";
            }
        }else{
            echo "<script>alert('Wrong password')</script>";
        }

    }else{
        echo "<script>alert('Admin does not exist')</script>";
    }
}

?>