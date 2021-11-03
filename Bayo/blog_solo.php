<?php

function validator(array $fields){
    $errMg = '';
    foreach($fields as $key => $field){
        if ($field == NULL && $field == ''  ) {
            $errMg .= $key . ' is required';
            
          }
    }
    return $errMg;
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $image = $_FILES['image']['name'];
    $content = $_POST['content'];

    $slug = str_replace(' ', '-', $title);
    
    $errMg = validator(['title'=>$title,'author'=>$author,'image'=>$image,'content'=>$content ]);

    echo $errMg;





    if($errMg == ''){

        $db_host = 'localhost'; // Server Name
        $db_user = 'root'; // Username
        $db_pass = ''; // Password
        $db_name = 'bootcamp2021'; // Database Name

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
        }
        // syntax for connecting to database
        $query = "INSERT INTO blogs (Title, Slug, Author, Image, Content) VALUES ('$title', '$slug', '$author', '$image', '$content')";

        if($conn->query($query)){

            $errMg = "Entered data successfully . <br>";
          }else{
            $errMg = 'could not enter data: '. $conn->error . '. <br>';
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
    <title>Document</title>
</head>
<body>
    <style>

    .form{
        margin: 20px 350px;
        background: #ccc;
        padding: 25px;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;

    }
    input{
        margin: auto;
        background: #fff;
        border: 0;
    }
    label{
        margin: 10px 50px;
        width: 100px;
        
    }
    button{
        margin: 10px 5px;
        background: white;
        color: black;
        width: 100%;
        height: 35px;
        border-radius: 10px;
        text-transform: uppercase;
        transition-delay: 2s;
        transition: 3s;

    }
    textarea{
        margin: 10px 50px;
        
    }
    .row{
        background: #ccc32e;
        padding: 5px;
    }
    </style>

    <div class="form">
    <form action="" method="POST" enctype="multipart/form-data">
    <?php 
            if(isset($errMg)):
        ?>
            <?=$errMg;?>
        <?php endif; ?>
    <div class="row">
        <label for="">Title:</label>
        <input type="text" name="title" id="">
    </div>
    <div class="row">
        <label for="">Authors Name:</label>
        <input type="text" name="author" id="">
    </div>
    <div class="row">
        <label for="">Upload Image:</label>
        <input type="file" name="image" id="">
    </div>
    <div class="row">
        <label for="">Content:</label>
        <textarea name="content" id="" cols="40" rows="13"></textarea>
    </div>
    <div>
       <button type="submit" name="submit">Submit</button>
    </div>
    


    </form>
    </div>
   
</body>
</html>