<?php
require ".\class\products.class.php";


function ensure(array $details)
{
   $errorMsg = "";

   foreach ($details as $indexOrProps => $detail) {
      if ($detail == null && strlen($detail) < 1) {
         $errorMsg .= " $indexOrProps is missing, please fill <br>";
      }
   }
   return $errorMsg;
}

$errorMsg = "";

if (isset($_POST["upload"])) {
   $productName = $_POST["productName"];
   $productQty = $_POST["productQty"];
   $productPrice = $_POST["productPrice"];
   $productImage = $_FILES["productImage"]["name"];
   $product_temp_name = $_FILES["productImage"]["tmp_name"];

   $details = ["productName" => $productName, "productQty" => $productQty, "productPrice" => $productPrice, "productImage" => $productImage];
   $errorMsg = ensure($details);


   if ($errorMsg == "") {
      $ConnectToDB = new DB;

      $sql = "INSERT INTO products (product_name, product_image, product_price, product_qty) VALUES ('$productName', '$productImage','$productPrice','$productQty')";

      $myQuery = $ConnectToDB->DBquery($sql);

      if ($myQuery) {
         move_uploaded_file($product_temp_name, "images/" . $productImage);
         $err = "Data succesfully uploaded";
      } else {
         $err = "Data not uploaded";
      }
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <title>ProductUpload</title>
   <link rel="stylesheet" href="product.css">
</head>

<body>
   <div class="form">
      <form action="" enctype="multipart/form-data" method="POST">
         <div class="input">
            <label for=""><strong>Product Name</strong></label><br>
            <input type="text" name="productName" class="input1"> <br>
            <label for=""><strong>Product Quantity</strong></label><br>
            <input type="number" name="productQty" class="input1"> <br>
            <label for=""><strong>Product Price</strong></label><br>
            <input type="number" name="productPrice" class="input1"> <br>
            <label for=""><strong>Product Image</strong></label><br>
            <input type="file" name="productImage" class="input1"> <br><br><br>
            <button name="upload">Upload</button>
         </div>
      </form>
   </div>



   <?php
   $ConnectToDB2 = new DB;

   $sql2 = "SELECT * FROM products";
   $myQuery2 = $ConnectToDB2->DBquery($sql2);

   if ($myQuery2) {
      $data = $ConnectToDB2->getData($myQuery2);

   }

   ?>



   <br><br>
   <div class="wrapper">
      <div class="item-amount">
         <span id="item-span">ITEM</span>
         <span id="amount-span">AMOUNT</span>
      </div>
      <?php $total = 0; ?>
      <?php foreach ($data as $eachdata) {
         $product_name = $eachdata["product_name"];
         $product_image = $eachdata["product_image"];
         $product_price = $eachdata["product_price"];
         $product_qty = $eachdata["product_qty"];
         $product_id = $eachdata["id"];
         $amount = $product_price * $product_qty;
         $total +=  $amount;
      ?>
         <div>
            <div class="left">
               <img src="<?php echo "images/$product_image"  ?>" alt="">
            </div>
            <div class="middle">
              <strong><p>Product Name: <?php echo $product_name ?></p></strong>
               <p>Price: <?= "$". $product_price ;?></p>
               <p>Quantity: <?= $product_qty ;?></p>
               <p>ID: <?= $product_id ;?></p>
            </div>
            <div class="right">
               <p><?= "$" . $amount ;?></p>
            </div>
         </div>
         <div>
            <hr>
         </div>
      <?php } ?>
      <div id="total">
         <h3>Total: <?= "$" . $total ;?></h3>
      </div>
   </div>




   <!-- </div> -->
</body>

</html>