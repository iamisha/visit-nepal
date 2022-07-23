<!DOCTYPE html>
<html>

<head>
    <title>Login visit-nepal</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=form.css>
</head>

<body>
    <div class="container">
        <div class="row">
            <!--using the grid system of bootsrap-->
            <div class="col-sm-4"></div>


            <div class="col-sm-4">
                <div class="login_form">
                <h2 style="font-size: 40px;
  background: -webkit-linear-gradient(blue, red, white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;">Nepal</h2>

                    <?php 
                    if(isset($_GET['loginerror'])){
                        $loginerror=$_GET['loginerror'];

                    }
                    if(!empty($loginerror)){
                        echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>';
                    }
                    ?>
                    <form action="login_process.php" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label class="label_txt">Username or Email</label>
                            <input type="text" name="login_var" value="<?php if(!empty($loginerror)){echo $loginerror;}?>" class="form-control" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label class="label_txt">Password</label>
                            <input type="password" name="password"class="form-control" placeholder="Password">
                        </div>

                        <button type="submit" name="sublogin"class="form_btn btn btn-primary">Login</button>
                    </form>
                    <p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgot-password.php" sytle="color: #00376b;">Forgot Password?</a></p>
                    <br>
                    <p>Don't have an account: <a href="signup.php">Sign up</a> </p>
                </div>
            </div>
            <div class="col-sm-4"></div>
            <!--divided into 3equal parts of 12-->
        </div>

    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

</html>