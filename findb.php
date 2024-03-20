<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style7.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    </head>
    <body class="bg-overlay">
        
        <?php include 'dbcon.php'; ?>
        
        <?php include 'navbar.php'; ?>
        <form action="resultb.php" method="POST" class="col-6 justify-content-center testimonial mx-auto" style="padding-top: 150px;">
            <div class="col-12 justify-content-center text-white">
                <div class="container form col-9 border rounded-lg shadow-lg mx-auto">
                    <div class="row col-12 mx-auto my-4">
                        <label>AREA :</label>
                        <select type="text" name="address" class="form-control" placeholder="address" required="required">
                            <option value="NULL">SELECT AREA</option>
                            <?php
                            $sql="select distinct address from buy order by address";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            ?>
                            <option value="<?= $row['address']; ?>"><?= $row['address']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="row col-12 mx-auto my-4">
                        <label>BHK :</label>
                        <select type="text" name="BHK" class="form-control" placeholder="BHK" required="required">
                            <option value="NULL">SELECT BHK</option>
                            <?php
                            $sql="select distinct BHK from buy order by bhk";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            ?>
                            <option value="<?= $row['BHK']; ?>"><?= $row['BHK']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="row col-12 mx-auto my-4">
                        <label>Furnish Type :</label>
                        <select type="text" name="f_type" class="form-control" placeholder="f_type" required="required">
                            <option value="NULL">SELECT FURNISH TYPE</option>
                            <?php
                            $sql="select distinct f_type from buy order by f_type";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            ?>
                            <option value="<?= $row['f_type']; ?>"><?= $row['f_type']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="row col-12 mx-auto mb-4">
                        <button type="submit" name="submit" class="btn btn-outline-success btn-lg btn-block">FIND</button>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>