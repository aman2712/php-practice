<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>">
        <label for="fname">First Name</label>
        <input name="fname" type="text" id="fname">
        <br><br>
        <label for="lname">Last Name</label>
        <input name="lname" type="text" id="lname">
        <br><br>
        <label for="email">Email</label>
        <input name="email" type="email" id="email">
        <br><br>
        <label for="password">Password</label>
        <input name="password" type="password" id="password">
        <br><br>
        <input type='submit' name='submit' value="Submit"></input>
    </form>
</body>
</html>

<?php
    if(isset($_GET['submit'])){
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        echo "<h3>User Details:</h3>";
        echo $fname . "<br>";
        echo $lname . "<br>";
        echo $email . "<br>";
        echo $password . "<br>";
    }
?>