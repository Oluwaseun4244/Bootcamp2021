<?php
    function validator(array $fields){
        $errMsg = '';
        foreach($fields as $key => $field){
            if($field == null && strlen($field) == ''){
                $errMsg .= $key . ' is required <br>';
            }
        }
        return $errMsg;
    }

    // var_dump(isset($errMsg));
    if(isset($_POST['title'])){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $image = $_FILES['image']['name'];
        $content = $_POST['content'];

        $slug = str_replace(' ', '-', $title);

        $errMsg = validator([ 'title' =>$title, 'image' => $image,'author' => $author, 'content' => $content]);
        echo $errMsg;

        // if($errMsg == ''){

        //     $db_host = 'localhost'; // Server Name
	    //     $db_user = 'root'; // Username
	    //     $db_pass = ''; // Password
	    //     $db_name = 'bootcamp2021'; // Database Name

        //     $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        //     if (!$conn) {
        //     	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
        //     }

        //     $query = "INSERT INTO blogs (title, slug, author, image, content) VALUES ('$title', '$slug', '$author', '$image', '$content')";

        //     if($conn->query($query)){
        //         $errMsg = "Entered data successfully . <br>";
        //       }else{
        //         $errMsg = 'could not enter data: '. $conn->error . '. <br>';
        //     }

        // }
        
        
    }

    // $query = "SELECT * FROM blogs";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
</head>

<body>
	<h1>Add user</h1>
	<form method="POST" enctype="multipart/form-data">
        <?php 
            if(isset($errMsg)):
        ?>
            <?=$errMsg;?>
        <?php endif; ?>
		<label>Title:</label> <input type="text" name="title" placeholder="enter the title" value=""><br><br>
		<label>Author:</label> <input type="text" name="author" placeholder="enter the author" value=""><br><br>
		<label>image:</label> <input type="file" name="image"  value=""><br><br>
		<label>Content:</label> <textarea name="content" id="" cols="30" rows="10"></textarea><br><br>
		
		<input type="submit" name="submit" value="submit">
	</form>

    <!-- <table>
        <thead>
            <th>
                <tr>Title</tr>
                <tr>Slug</tr>
                <tr>Content</tr>
                <tr>Author</tr>
                <tr>Image</tr>
                <tr>Created</tr>
            </th>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table> -->

</body>
</html>