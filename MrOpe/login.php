<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="import" href="./welcome.html">
</head>
<body>
    <div>
        <form action="" method="POST">
            <label for=""><h2>Username and Password</h2></label>
            <input type="text" name="username" placeholder="username"> <br><br>
            <input type="password" name="password" placeholder="password" required> <br><br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>




<?php


function validate($input_user, $input_pass){
    $user = "Tola";
    $pass = "123456";

    if ($input_user === $user && $input_pass === $pass){
        // $success = "Welcome";
        // return $success;
        echo "Welcome";
    } else {
        echo "username or password is incorrect";
    }
}

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo validate($username, $password);

}





?>