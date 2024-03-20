<?php
session_start();

?>

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
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">


        </head>
        <body style="background-color: #e6f9ff;">
<?php 

include 'dbcon.php';
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $BHK = $_POST['BHK'];
    $f_type = $_POST['f_type'];
    $sqft = $_POST['sqft'];
    $price = $_POST['price'];
    $deposit = $_POST['deposit'];
    $file = $_FILES['photo'];

    //($file);

    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];

    if($fileerror == 0){
        $destfile='rentimages/'.$filename;
        move_uploaded_file($filepath, $destfile);

        $insertquery="INSERT INTO rent(username, phone, email, address, city, BHK, f_type, sqft, price, deposit, photo) VALUES ('$username','$phone','$email','$address','$city','$BHK','$f_type','$sqft','$price','$deposit','$destfile')";
        $query= mysqli_query($con,$insertquery);

        if ($query) {
        ?>
        <script>
            alert("PROPERTY ADDED");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("ERROR");
        </script>
        <?php
    }

    }

}


?>

            <?php include('navbar.php') ?>


            <section class="testimonial py-5" id="testimonial">
    <div class="container border rounded-lg shadow-lg" style="background-color:#ccf2ff;">
        <div class="row ">
            <div class="col-4 py-5 text-black text-center " style="background-color:#4dd2ff;">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:100%">
                        <h1 class="py-5">RENT<br>PROPERTY</h1>
            </div>
            <div class="col-8 py-5">
                <h3 class="pb-4">Please fill with your Property details</h3>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="form-group col-12"><label>Name:</label>
                          <input id="Full Name" name="username" placeholder="Full Name" class="form-control" type="text" required="required">
                        </div>
                    </div>
                      
                    <div class="form-row">
                        <div class="form-group col-6"><label>Phone No.:</label>
                            <input id="Mobile No." name="phone" placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-6"><label>Email:</label>
                          <input id="Email" name="email" placeholder="Email" class="form-control" type="text" required="required">
                        </div>
                    </div>

                        
                    
                    <div class="form-row"><label><h5>Property Details</h5></label>
                        <div class="form-group col-12">
                          <input name="address" placeholder="Area" class="form-control" type="text" required="required">
                        </div>
                        <div class="form-group col-6">
                          <select type="text" name="city" class="form-control" placeholder="City" required="required">
                            <option value="Null">City</option>
                            <option value="Pune">Pune</option>
                          </select>
                        </div>
                        <div class="form-group col-6">
                          <select type="text" name="BHK" class="form-control" placeholder="BHK" required="required">
                            <option value="Null">BHK</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                        <div class="form-group col-6">
                          <select type="text" name="f_type" class="form-control" placeholder="Furnished Type" required="required">
                            <option value="Null">Furnished Type</option>
                            <option value="Fully-Furnished">Fully-Furnished </option>
                            <option value="Semi-Furnished">Semi-Furnished </option>
                            <option value="Un-Furnished">Un-Furnished </option>
                          </select>
                        </div>
                        <div class="form-group col-6">                                  
                           <input type="text" name="sqft" class="form-control" placeholder="Sq.ft" required="required">
                        </div>
                        <div class="form-group col-6">
                            <input type="text" name="price" class="form-control" placeholder="Rent" required="required">
                        </div>
                    <div class="form-group col-6">
                        <input type="text" name="deposit" placeholder="Deposit" required="required" class="form-control">
                    </div>
                </div>


                      <div class="form-row"><label>Upload Images</label>
                            <div class="form-group col-12">
                                <input type="file" name="photo" class="form-control-file" required="required">
                            </div>
                      </div>

                                        
                    <div class="form-row">
                        <button type="submit" class="btn btn-info btn-block" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>