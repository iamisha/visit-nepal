<?php require_once("config.php");

if(isset($_SESSION["login_sess"])) {
    header("location:account.php");
}

?><html>

    <head>
        <title>Forgot Password-Visit Nepal</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href=form.css>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <form action="forgot_process.php" method="POST">
                        <div class="login_form">
                            <div class="form-group">
                                <h2 style="font-size: 40px;
background: -webkit-linear-gradient(blue, red, white);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
text-align: center;
">Nepal</h2>
<?php if(isset($_GET['err'])){
    $err=$_GET['err'];
    echo '<p class="errmsg">No user found. </p>';
}
//if server error
if(isset($_GET['servererr'])){
    echo "<p class='errmsg'>The server failed to send the message. Please try again later. </p>";

}
//if other issues
if(isset($_GET['somethingwrong'])){
    echo '<p class="errmsg">Something went wrong. </p>';
}
//if success | Link sent
if(isset($_GET['sent'])){
    echo "<div class='successmsg'>Reset link has been sent to your registered email id. Kindly check your email. It can be taken 2 to 3 minutes to deliver on your email id. </div>";

}
?>
                                <label class="label_txt">Username or Email </label><input type="text" name="login_var"
                                    value="<?php if(!empty($err)){echo
$err;
}

?>" class="form-control" required="">
                            </div><button type="submit" name="subforgot"
                                class="btn btn-primary btn-group-lg form_btn">Send Link </button>
                        </div>
                    </form><br>
                    <p>Have an account? <a href="login.php">Login</a></p>
                    <p>Don't have an account? <a href="signup.php">Sign-up</a> </p>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    </html>