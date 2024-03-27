 <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" type="text/css" href="css/style3.css">
            <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
        </head>
        <body>
        <?php include('navbar.php')?>

<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $comment=$_POST['comment'];

        $insertquery="INSERT INTO feedback( username, comment) VALUES ('$username','$comment')";
        $query=mysqli_query($con,$insertquery);

        if ($query) {
            ?>
            <script>
                alert("FEEDBACK SEND");
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
?> 
    
            <div class="container-fluid bg-overlay">
                <div class="row col-12 py-5">
                    <div class="col-6 text-center text-white py-5 my-5">
                        <h1 style="color:orange;">FEEDBACK</h1>
                        <h3>Leave us your valuable feedback</h3>
                    </div> 
                    <div class="col-6 justify-content-center text-white">
                        <div class="container form col-9 border rounded-lg shadow-lg mx-auto">
                            <form action="" method="POST">
                                <div class="row col-12 mx-auto my-4">
                                    <label>Name :</label>
                                    <input type="text" name="username" class="form-control" >
                                </div>
                                <div class="row col-12 mx-auto mb-4">
                                    <label>Feedback :</label>
                                    <textarea type="text" name="comment" class="form-control"></textarea> 
                                </div>
                                <div class="row col-12 mx-auto mb-4">
                                    <button type="submit" name="submit" class="btn btn-outline-warning btn-lg">SEND</button>
                                </div>                                                                
                            </form>                            
                        </div>
                    </div>                   
                </div>                
            </div>

            <div class="col-12 container comments mx-5 my-5">
                <h1 class="text-center mb-3">Feedbacks</h1>
                <div class="row justify-content-center">

<?php
include 'dbcon.php';

$selectquery= "select * from feedback";
$query=mysqli_query($con,$selectquery);

while($result=mysqli_fetch_array($query)){
?>
            <div class="card col-3 mx-2 mb-2" style="background-color:#ffe0cc">
                <div class="card-body">
                    <h4><?php echo $result['username']; ?></h4>
                    <p><?php echo $result['comment']; ?></p>                    
                </div>                
            </div>
<?php
}
?>
                </div>
            </div>

        <?php include('footer.php')?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
