<?php
if (isset($_POST["Upload"])) {
  $tempname = $_FILES['product']['tmp_name'];
  $productCsv = array_map('str_getcsv', file($tempname));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    span {
      font-weight: bold;
    }

    .container {
      padding: 0px 200px;
      /* background-color: #dbdde3; */
    }

    #amount-span {
      float: right;
    }

    #product-img {
      width: 200px;
      height: 200px;
      background-position: bottom;
      margin-left: 10px;
      background-size: cover;
      background-repeat: no-repeat;
      /* background-attachment: fixed; */

    }

    #amount {
      margin-top: 60px;
      margin-left: 18px;
    }

    #total-div {
      /* margin-left: 495px; */
      float: right;
      /* background-color: teal; */
    }

    .center {
      margin-left: 20px;
    }

    .card{
      margin: 0px 141px;
      padding: 25px 114px;
      background-color: #4bd7d7;
    }
  </style>
  <title>Product</title>
</head>

<body>
  <div class="container">
    
    
      <div>
          <h2 class="text-center">Transaction Details</h2>
      </div>
      <div style="border: 1px solid grey; background:teal">
        <span id="item-span">ITEM</span>
        <span id="amount-span">AMOUNT</span>
      </div>




   
          <div class="row mt-3 col-xs-12">
            <div style="background-image: url(<?php echo $r[6]; ?>);" class="col-sm-4" id="product-img"></div>
            <div class="col-sm-6 center">
              <h5></h5>
              <h6>ITEM: </h6>
              <p>Price: </p>
              <p><i class="fa fa-cart-arrow-down fa-lg"></p>
            </div>
            <div class="col-sm-2" id="amount">
              <p class="text-end"></p>
            </div>
          </div>
          <hr>

      <div id="total-div">
        <span>
          <h6> Subtotal:]</h6>
          <h6>British Colombia PST(7%): </h6>
          <h6>CANADA GST(5%): </h6>
          <h6>TOTAL: <i class="fa fa-credit-card-alt" aria-hidden="true"></i></h6>
        </span>
      </div>

      <!-- <div class="card">
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="file" name="product" id=""><br> <br>
          <button type="submit" name="Upload" class="btn btn-success"><i class="fa fa-plus"></i>Upload Products</button>
        </form>
      </div> -->
  </div>


</body>

</html>