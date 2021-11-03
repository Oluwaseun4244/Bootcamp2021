<?php
if (isset($_POST['submit'])){
  $username = $_POST["username"];
  $DOB = $_POST["DOB"];
  $id = $_POST["id"];
  $issued = $_POST["issued"];
  $expiration = $_POST["expiration"];
  $lastname = $_POST["lastname"];

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <style>
    .card {
      border: 2px solid black;
      margin: 50px 385px;
      position: relative;
      height: 279px;
      border-radius: 15px;
    }

    .card-top {
      background-color: #2020a5;
      color: white;
      text-align: center;
      padding: 14px;
      border: 2px solid blue;
      border-radius: 13px 13px 0px 0px;
    }

    .left-div {
      background-size: cover;
      background-image: url(mike.jpg);
      width: 160px;
      height: 200px;
      background-position: center;
      position: absolute;
      left: 15px;
      border: 2px solid black;
      top: 60px;
    }

    .right-div {
      position: absolute;
      right: 185px;
    }

    .barcode img {
      size: 5px;
      width: 166px;
      position: absolute;
      right: 15px;
      bottom: 2px;
      height: 42px;
    }

    .logo img {
      position: absolute;
      width: 114px;
      bottom: 1px;
      right: 227px;
    }
  </style>
</head>

<body><?php if(isset($_POST["submit"])) {?>
    <div class="card">
      <div class="card-top">IDENTIFICATION CARD</div>
      <div class="left-and-right">
        <div class="left-div"></div>
        <div class="right-div">
          <ul style="list-style: none;">
          <li>Name: <strong><?php echo $lastname . " " . $username ?></strong></li><br>
          <li>D.O.B: <strong><?php echo $DOB ?></strong></li><br>
          <li>ID: <strong><?php echo $id ?></strong></li><br>
          <li>Issued: <strong><?php echo $issued ?></strong></li><br>
          <li>Expired: <strong><?php echo $expiration ?></strong></li><br>
        </ul>
      </div>
      <div class="logo"><img src="./logo.png" alt=""></div>
      <div class="barcode"><img src="./barcode.png" alt=""></div>
    </div>
  </div>
  <?php } else {?>
  <form action="" method="POST">
    <h3>ID CARD DETAILS</h3>
    <Label>LAST NAME</Label>
    <input type="text"  name="lastname" placeholder="Enter name here" required>
    <Label>FIRST NAME</Label>
    <input type="text"  name="username" placeholder="Enter name here" required>
    <Label>DOB</Label>
    <input type="date"  name="DOB" required>
    <Label>ID</Label>
    <input type="text" placeholder="id" name="id" required>
    <Label>ISSUED DATE</Label>
    <input type="date"  name="issued" required>
    <Label>EXPIRY DATE</Label>
    <input type="date" name="expiration" required>
    <button type="submit" name="submit">Create ID card</button>
  </form>
  <?php }?> 
</body>

</html>


