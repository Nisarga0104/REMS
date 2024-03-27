<?php include 'dbcon.php' ?>
<!DOCTYPE html>
<html>
       <head>
              <meta charset="utf-8">
              <title></title>
              <link rel="stylesheet" type="text/css" href="css/style.css">
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="preconnect" href="https://fonts.gstatic.com">
              <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
              <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
       </head>
       <body style="background-color:#d8f3e5">
              <?php include('navbar.php') ?>
              <h1 class="text-center buyp pt-4" >PROPERTIES FOR SALE</h1>
              <?php
              if(isset($_POST['submit'])){
              $address = $_POST['address'];
              $BHK = $_POST['BHK'];
              $f_type = $_POST['f_type'];
              
              if ($address!="NULL" || $BHK!="NULL" || $f_type!="NULL") {
              $selectquery = "SELECT * FROM buy WHERE address = '$address' or BHK='$BHK' or f_type='$f_type' ";
              }
              else{
              $selectquery = "SELECT * FROM buy";
              }              
              
              $query = mysqli_query($con,$selectquery);
              //$result = mysqli_fetch_array($query);
              while ($result = mysqli_fetch_array($query)) {
              ?>
              
              <div class="mb-2">
                     <div class="container buyp border rounded-lg shadow-lg" style="background-color: white">
                            <div class="row" >
                                   <div class="col-3 py-5 justify-content-center">
                                          <img height="200" width="270" src="<?php echo $result['photo']; ?>">
                                   </div>
                                   <div class="col-9 pt-4">
                                          <div class="row col-12">
                                                 <div class="col-6">
                                                        <h3><b><?php echo $result['BHK']; ?>BHK flat for sale in <?php echo $result['address']; ?></b></h3>
                                                 </div>
                                                 <div class="col-6">
                                                        <h3>Price : <b>₹<?php echo $result['price']; ?></b></h3>
                                                 </div>
                                          </div>
                                          <div class="row col-12">
                                                 <div class="col-6">
                                                        <p>City : <b><?php echo $result['city']; ?></b></p>
                                                 </div>
                                                 <div class="col-6">
                                                        <p>BHK : <b><?php echo $result['BHK']; ?></b></p>
                                                 </div>
                                          </div>
                                          <div class="row col-12">
                                                 <div class="col-6">
                                                        <p>Furnish Type : <b><?php echo $result['f_type']; ?></b></p>
                                                 </div>
                                                 <div class="col-6">
                                                        <p>Area : <b><?php echo $result['sqft']; ?> (Sq. Ft.)</b></p>
                                                 </div>
                                          </div>
                                          <div class="row col-12">
                                                 <div class="col-12"><p>Amenities : <b><?php echo $result['amenities']; ?></b></p></div>
                                          </div>
                                          <div class="row col-12">
                                                 <div class="col-6">
                                                        <p>Owner : <b><?php echo $result['username']; ?></b></p>
                                                 </div>
                                                 <div class="col-6">
                                                        <p>Contact No. : <b><?php echo $result['phone']; ?></b></p>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
              <?php
              }
              }
              ?>
              <?php include('footer.php') ?>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       </body>
</html>
