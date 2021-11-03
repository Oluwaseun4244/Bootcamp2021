<?php

if (isset($_POST["score"])){
  $score = $_POST['score'];
  if ($score >= 80 && $score <= 100){
    echo "A";
  } else if ($score >= 60 && $score <= 79) {
    echo "B";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>

<h3>Student grade</h3>
<form action="" method="POST">
<input type="number"  name="score" id="">
<button type="submit"> submit</button>


</form>
  
</body>
</html>


