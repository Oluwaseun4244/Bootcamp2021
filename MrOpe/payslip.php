<?php

if (isset($_POST["submit"])) {
   $tempname = $_FILES['TechWarrior']['tmp_name'];
   $CSV = array_map('str_getcsv', file($tempname));
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payslip</title>

   <style>
      .payslipbody {
         border: 3px solid #e0e0e0;
         ;
         position: relative;
         margin: 30px 200px;
      }

      .top-right1 {
         position: absolute;
         right: 90px;
         top: 40px;
      }

      .top-right2 {
         position: absolute;
         right: 90px;
         top: 70px;
      }

      h1 {
         padding: 0px 70px;
         font-weight: unset;
      }

      .top-left {
         padding: 15px 70px;
      }

      ul li {
         display: inline-block;
         margin: 0px 44px;
      }

      ul {
         padding-left: 530px;
         margin-top: -15px;
      }

      #upper-hr {

         margin-right: 141px;
         margin-left: -6px;
         border-top: 2px solid black;
         position: absolute;
         width: 804px;
         top: 276px;
         left: 77px;
      }

      #bottom-hr {
         margin-right: 141px;
         margin-left: -6px;
         border-top: 2px solid black;
         position: absolute;
         width: 804px;
         bottom: 110px;
         left: 77px;
      }

      #table {
         width: 100%;
         padding: 0px 70px;
      }

      td {
         background-color: #e2e2e3;
      }

      .td-right {
         text-align: right;
      }

      #footer-div {
         margin-top: 50px;
      }
   </style>
</head>

<body>


   <?php if (isset($_POST["submit"])) {

      foreach ($CSV as $key => $r) {
         if ($key > 0) {
            $totalIncome = $r[2] * $r[3];
            $overTime = $r[5] * $r[6];
            $sickLeave = $r[8];
            $grossPay = $totalIncome + $overTime + $sickLeave;
            $netPay = 0;

            if ($grossPay < 1000) {
               $tax = 0.015 * $grossPay;
               $childSuport = 0.024 * $grossPay;
               $taxAndChildSupoort = $tax + $childSuport;
               $netPay = $grossPay - $taxAndChildSupoort;
            } else if ($grossPay > 1000 && $grossPay < 5000) {
               $tax = 0.032 * $grossPay;
               $childSuport = 0.024 * $grossPay;
               $taxAndChildSupoort = $tax + $childSuport;
               $netPay = $grossPay - $taxAndChildSupoort;
            } else if ($grossPay >= 5000) {
               $tax = 0.05 * $grossPay;
               $childSuport = 0.024 * $grossPay;
               $taxAndChildSupoort = $tax + $childSuport;
               $netPay = $grossPay - $taxAndChildSupoort;
            } else {
               echo "WHAT THE FVCK ARE YOU DOING?";
            }



   ?>

            <div class="payslipbody">
               <div>
                  <h1>PAYSLIP</h1>
               </div>
               <div class="top-right1">
                  <p> <strong>Pay period:</strong> 23-09-2019 <strong>to</strong> 27-09-2019</p>
               </div>
               <div class="top-right2">
                  <p><strong>Date of payment:</strong>01-10-2019</p>
               </div>
               <div class="top-left">
                  <p><strong>Employer's name:</strong><?php echo " " . $r[4]; ?></p>
                  <p><strong>ABN: </strong>10 000 000 002</p>
                  <p><strong>Employee's name:</strong><?php echo " " . $r[1]; ?></p>
                  <p><strong>Employment status:</strong> Full-time</p>
               </div>

               <hr id="upper-hr">
               <div>
                  <table id="table">
                     <tr id="unit-tr">
                        <td style="background-color: white; text-align: right;"></td>
                        <td style="background-color: white; text-align: right;"><strong>Unit</strong></td>
                        <td style="background-color: white; text-align: right;"><strong>Rate</strong></td>
                        <td style="background-color: white; text-align: right;"><strong>Total</strong></td>
                     </tr>
                     <tr>
                        <td style="background-color: white;"><strong> Earnings</strong></td>
                     </tr>
                     <tr>
                        <td>Salary or wages for ordinary hours worked</td>
                        <td class="td-right"><?php echo " " . $r[3] . " " . "hours"; ?></td>
                        <td class="td-right"><?php echo " " . $r[2] . " " . "hours"; ?></td>
                        <td class="td-right"><?php echo " " . $totalIncome ?></td>
                     </tr>
                     <tr>
                        <td>Overtime</td>
                        <td class="td-right"><?php echo " " . $r[5] . " " . "hours"; ?></td>
                        <td class="td-right"><?php echo " " . $r[6] . " " . "hours"; ?></td>
                        <td class="td-right"><?php echo $overTime ?></td>
                     </tr>
                     <tr>
                        <td>Paid leave</td>
                        <td class="td-right">N/A</td>
                        <td class="td-right">N/A</td>
                        <td class="td-right">N/A</td>
                     </tr>
                     <tr>
                        <td>Paid sick leave</td>
                        <td class="td-right">--</td>
                        <td class="td-right">--</td>
                        <td class="td-right"><?php echo " " . " " . $r[8]; ?></td>
                     </tr>
                     <tr>
                        <td>Lump sum</td>
                        <td class="td-right">N/A</td>
                        <td class="td-right">N/A</td>
                        <td class="td-right">N/A</td>
                     </tr>
                     <tr>
                        <td style="background-color: white;"></td>
                        <td style="background-color: white;"></td>
                        <td class="td-right" style="background-color: white;"><strong>GROSS PAYMENT</strong></td>
                        <td class="td-right" style="background-color: white;"><strong><?php echo $grossPay ?></strong></td>
                     </tr>
                  </table>
               </div>
               <hr id="bottom-hr">
               <div id="footer-div">
                  <table style="width: 100%; padding: 0px 70px;">
                     <tr>
                        <td style="background-color: white;"><strong>DEDUCTIONS</strong></td>

                     </tr>
                     <tr>
                        <td>Taxation (PAYG)</td>
                        <td class="td-right" style="color: #f77778;;"><?php echo "$" . $tax ?></td>

                     </tr>
                     <tr>
                        <td>Child support</td>
                        <td class="td-right" style="color:#f77778;;"><?php echo "$" . $childSuport ?></td>
                     </tr>
                  </table>
               </div>
            </div>
      <?php }
      }
   } else { ?>
      <div>
         <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="TechWarrior">
            <button type="submit" name="submit">Generate CSV File</button>
         </form>
      </div> <?php } ?>


</body>

</html>