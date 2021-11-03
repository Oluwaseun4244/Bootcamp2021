

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="firstname">
            <input type="text" name="lastname">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>


<?php
if (isset($_POST["firstname"]) && isset($_POST["lastname"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    {
        echo "Your fullname is " . $firstname . " " . $lastname;
    }
  }

?>