<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <title>login page</title>
    <style>
        .form-group {
            padding:2px;
        }
    </style>
</head>

<body class="mr-3 ml-3">
<div class="row pb-2 bg-danger" style="color:#fff"><center>Assignment</center> </div>
<div class="container mt-4 mb-4 d-flex justify-content-center">
    <div class="card px-1 py-4 pt-5 pb-4 mt-4 mb-5" style="border:1px solid grey">
        <div class="card-body">
            <form action="backlogin.php" method="post">
        <h3 class="card-title mb-3 pb-3"><center><b>Welcome back!</b></center></h3>
            <h6 class="card-title mb-3 pb-3"><center>Sign In</center></h6>
           <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="em" required> </div>
                </div>
            </div>
            
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-1 mr-3 ml-3"> <button class="btn rounded-pill bg-info btn-block confirm-button">Next</button></div> <hr>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-1"><button class="btn rounded-pill btn-danger btn-block confirm-button">&nbsp;&nbsp;&nbsp;&nbsp;Continue with google&nbsp;&nbsp;&nbsp;&nbsp;</button></div> 
        <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="create.php" class="terms mt-3" style="color:skyblue;"><b>Create account</b></a> </div>
        </form>    
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
</body>
</html>