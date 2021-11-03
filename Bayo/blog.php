<?php

function validator(array $fields)
{

   $errMsg = "";

   foreach ($fields as $key => $field) {

      if ($field == null && $field == "") {

         $errMsg .= $key . " is required" . "<br>";
      }
   }
   return $errMsg;
}


if (isset($_POST['Post'])) {

   // echo "What are you doing";
   $title = $_POST["title"];
   $author = $_POST["author"];
   $image = $_FILES["image"]["name"];
   $content = $_POST["content"];
   $slug = str_replace(' ', '-', $title);


   $errMsg =  validator(["title" => $title, "author" => $author, "image" => $image, "content" => $content]);
   echo $errMsg;






   if ($errMsg == "") {

      $db_host = 'localhost'; // Server Name
      $db_user = 'root'; // Username
      $db_pass = ''; // Password
      $db_name = 'bootcamp2021'; // Database Name

      $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
      if (!$conn) {
         die('Failed to connect to MySQL: ' . mysqli_connect_error());
      }

      $query = "INSERT INTO blogs (Title, slug, author, image, content) VALUES ('$title', '$slug', '$author', '$image', '$content')";

      if ($conn->query($query)) {

         $errMg = "Entered data successfully . <br>";
      } else {
         $errMg = 'could not enter data: ' . $conn->error . '. <br>';
      }
   }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
   <div class="container">
      <div class="card" style="width: 30rem; background-color:#889185;; border: 1px solid black; ">
         <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
               <?php
               if (isset($errMg)) :
               ?>
                  <?= $errMg; ?>
               <?php endif; ?>
               <label for="">Blog Title</label>
               <input type="text" name="title"><br>
               <label for="">Author</label>
               <input type="text" name="author"><br>
               <label for="">Image</label>
               <input type="file" name="image"><br>
               <label>Content</label>
               <!-- <input id="content" style="height: 150px;" type="text "><br> -->
               <textarea name="content" id="" cols="30" rows="10"></textarea>
               <button class="btn btn-primary" name="Post">Post</button>

            </form>
         </div>
      </div>
   </div>
</body>

</html>