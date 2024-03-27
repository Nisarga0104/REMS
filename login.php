<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

</head>

<body style="background-color:#c2f0c2">
    <?php
        include 'dbcon.php';
        if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email_search = "select * from regis where email='$email' ";
        $query = mysqli_query($con,$email_search);
        $email_count = mysqli_num_rows($query);
        if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        
        if ($password==$db_pass) {
        ?>
    <script>
        alert("Login successful");
        location.replace("home.php");
        session_start();
    </script>
    <?php
        }else{
        ?>
    <script>
        alert("Incorrect passsword");
    </script>
    <?php
        }
        }
        
        else{
        ?>
    <script>
        alert("Invalid Email");
    </script>
    <?php
        }
        }
        ?>

    <center class="py-5">
        <h1>MORYA REAL ESTATE</h1>
    </center>
    <div class="container shadow border rounded-lg px-auto py-5" style="background-color: white;">
        <div class="row col-12">
            <div class="col-6">
                <div class="row justify-content-center"> <img src="css/smart.gif" class="image" height="400"
                        width="450"> </div>
            </div>
            <div class="col-6">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="input-group col-12 pt-5 mb-4">
                        <div class="line"></div>
                        <h3 class="text-center"><b>Welcome Back!</b></h3>
                        <div class="line"></div>
                    </div>

                    <div class="input-group col-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Enter a Valid Email Address"
                            class="form-control bg-white border-left-0 " required>
                    </div>
                    <div class="input-group col-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password"
                            class="form-control bg-white border-left-0 " required>
                    </div>
                    <div class="input-group col-12 mb-2">
                        <button type="submit" name="submit" class="btn btn-outline-success btn-block">LOGIN NOW
                            !</button>
                    </div>
                    <div class="input-group col-12 justify-content-center">
                        <p class="font-weight-bold text-muted">Don't have an account? <a class="text-danger "
                                href="regis.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
