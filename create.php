<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <title>index page</title>
    <style>
        .form-group {
            padding:2px;
        }
    </style>
</head>

<body class="mr-3 ml-3">
<div class="row pb-3 bg-danger" style="color:#fff";><center>Assignment</center> </div>

<div class="container mt-4 mb-4 d-flex justify-content-center">
    <div class="card px-1 py-4 pt-5 pb-4 mt-4 mb-5" style="border:1px solid grey">
        <div class="card-body">
            <form action="insert.php" method="post">
                <div style="color:green">
                <?php
                if(isset($_SESSION['success']))
                echo $_SESSION['success'];
                ?>
                </div>
            <h6 class="card-title mb-3"><center><b>I can't wait to create an account</b></center></h6>
            <div class="d-flex flex-row"> 
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="First name" name="fn" required> </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Last name" name="ln" required> </div>
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail" name="em" required> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Choose password" name="pw" required> </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-1 mr-3 ml-3"> <button class="btn rounded-pill bg-info btn-block confirm-button">Next</button></div> <hr>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-1"><button class="btn rounded-pill btn-danger btn-block confirm-button">Continue with google</button></div> 
        <div> <center><b>Already have an account? <a href="login.php" class="terms mt-3" style="color:red;">SIGN IN</b></center></a> </div>
        </form>
        <?php
        session_destroy();
        ?>
    </div>
    </div>
</div>

<div class="row pb-2 bg-info" style=" color:#fff;font-weight:600">
<div class="col-md-1">About us</div>
<div class="col-md-1">Advertisement</div>
<div class="col-md-6"><center>Kigali, Rwanda</center></div>
<div class="col-md-2">How search work</div>
<div class="col-md-1">Privacy</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>