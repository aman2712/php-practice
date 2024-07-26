<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h3>Login Page</h3>
    <hr>
    <form action="<?php $_PHP_SELF ?>" method="post">
        Enter Your Email: <input type="email" name="uemail" placeholder="xyz@gmail.com">
        <br><br>
        Choose a Password: <input type="password" name="upass">
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
        if(isset($_POST['login'])){
            include('dbConfig.php');

            $uemail = $_POST['uemail'];
            $upass = $_POST['upass'];

            $loginQuery = "SELECT * FROM userdetails WHERE useremail='".$uemail."' AND password='".$upass."'";

            $result = $conn->query($loginQuery);

            if($result->num_rows>0){
                echo "<script>alert('Valid user')</script>";
            }else{
                echo "<script>alert('Invalid user')</script>";
            }
        }
    ?>
</body>
</html>