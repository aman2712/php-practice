<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <h2>Registration Page</h2>
    <h3>Fill up the form for Registeration</h3>
    <hr>
    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
        Enter Your Name: <input type="text" name="uname" placeholder="John Smith">
        <br><br>
        Enter Your Email: <input type="email" name="uemail" placeholder="xyz@gmail.com">
        <br><br>
        Choose a Password: <input type="password" name="upass">
        <br><br>
        Select Your Gender: <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br><br>
        Enter your city: <input type="text" name="ucity" placeholder="Pune">
        <br><br>
        Choose Your Profile Picture: <input type="file" name="file">
        <br><br>
        <input type="submit" value="Register" name="register">
        <br><br>
        <input type="submit" name="login" value="Already a user? click here">
    </form>

    <?php
        if(isset($_POST['register'])){
            // Step 1: Create A Connection String
            include('dbConfig.php');

            // Step 2: Write a query

            // File uploading code
            $fileName = $_FILES["file"]["name"];                // get the file name
            $fileTmpName = $_FILES["file"]["tmp_name"];         // get the temporary location of file
            $targetDir = "userpictures/";                       // location where we save our file
            $uploadPath = $targetDir.$fileName;                 // userpictures/1.jpg

            // move_uploaded_file(locationOfImage, targetDir)

            move_uploaded_file($fileTmpName, $uploadPath);

            $uname = $_POST['uname'];
            $uemail = $_POST['uemail'];
            $upass = $_POST['upass'];
            $gender = $_POST['gender'];
            $city = $_POST['ucity'];

            $myQuery = "INSERT INTO userdetails(username, useremail, password, gender, city, userimg)
                        VALUES ('".$uname."', '".$uemail."', '".$upass."', '".$gender."', '".$city."', '".$uploadPath."')";

            // Step 3: execute the query
            // query() will perform a query against database 
            // will return TRUE if the query is successful else it will return false

            $result = $conn->query($myQuery);

            if($result){
                echo "<script>alert('User registration successful')</script>";
            }else{
                echo "<script>alert('Error: Unable to register. Try Again')</script>";
            }
        }

        if(isset($_POST['login'])){
            header('Location: login.php');
        }
    ?>

</body>
</html>