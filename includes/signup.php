<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>

<head>
    <title>SignUp visit-nepal</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <h2 style="font-size: 40px;
  background: -webkit-linear-gradient(blue, red, white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;">Nepal</h2>
            </div>
            <div class="col-sm-4">
            </div>
        </div>

        <div class="row">
            <?php
            if(isset($_POST['signup']))
            {
                extract($_POST);
                if(strlen($fname)<3){
                    $error[]='Please enter first name using 3 characters at least : )';
                }

                if(strlen($fname)>15){
                    $error[]='Max First Name limit: 15 characters : )';
                }

                if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
                    $error[] = 'Invalid Entry First Name. Please Enter letter without any digit or special characters like(1, 2, 3, *, ~, `, $, etc.)';
                }

                if(strlen($lname)<3){//min last name

                    $error[] = 'Please Enter last name using 3 charactes atleast : )';
                }

                if(strlen($lname)>20){
                    $error[] = 'Max Last Name limit: 20 characters : )';
                }
                if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){//pattern matching for last name
                    $error[] = 'Invalid Entry Last Name. Please Enter letter without any digit or special characters like(1, 2, 3, *, ~, `, $, etc.)';
                }

                if(strlen($username)<3){//min username
                    $error[] = 'Please Enter username using 3 characters atleast : )';

                }

                if(strlen($username)>50){//max username
                    $error[] = 'Max Username limit: 50 characters :)';

                }

                if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){//pattern matching for username
                    $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg: ishahitang, iamisha, ishaismyname';
                }

                if(strlen($email)>50){//max length of email

                    $error[] = 'Max email limit: 50 characters :)';
                }

                if($passwordConfirm ==''){
                    $error[] = 'Please confirm the password.';
                }
                if($password != $passwordConfirm){
                    $error[] = 'Passwords do not match. ';
                }
                if(strlen($password)<5){//min password
                    $error[] = 'Use password of atleast 5 characters.';
                }
                if(strlen($password)>20){//max password
                    $error[] = 'Max Password limit: 20 characters :)';
                }

                //to check the availibilty of the email and username if it's exits or not yoo :)
                $sql= " select * from users where (username='$username ' or email='$email');";
                $res=mysqli_query($dbc,$sql);
                if(mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);

                    if($username==$row['username']){

                        $error[] = 'Username already Exists.';
                    }
                    if($email==$row['email']){
                        $error[] = 'Email already Exists.';
                    }
                }

                if(!isset($error)){
                    $date=date('Y-m-d');
                    $options = array("cost"=>4);
                    $password = password_hash($password,PASSWORD_BCRYPT,$options);
                }
                 
                $result = mysqli_query($dbc,"INSERT into users
                values('','$fname','$lname','$username','$email','$password','$date')");

                if($result)
                {
                    $done=2;
                }
                else{
                    $error[] = 'Failed: something went wrong';
                }
            }   
            ?>
            <div class="col-sm-4">

                <?php
if(isset($error)){
    foreach($error as $error){
        echo '<p class="errmsg">&#x26A0;'.$error.'</p>';
    }
}
            ?>
            </div>
            <div class="col-sm-4">
         <?php if(isset($done)){

          ?>
         <div class="successmsg"><span style="font-size: 100px;">&#9989;</span> <br>
         You have registered successfully. <br> <a href="login.php" style="color: teal;">Login Here...</a></div>
         <?php } else { ?>
                <div class="signup_form">
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group">

                            <label class="label_txt">First Name</label>
                            <input type="text" class="form-control" name="fname"
                                value="<?php if(isset($error)){ echo $fname;}?>" required="">
                        </div>

                        <div class="form-group">
                            <label class="label_txt">Last Name</label>
                            <input type="text" class="form-control" name="lname"
                                value="<?php if(isset($error)){ echo $lname;}?>" required="">
                        </div>

                        <div class="form-group">
                            <label class="label_txt">Username</label>
                            <input type="text" class="form-control" name="username"
                                value="<?php if(isset($error)){ echo $username;}?>" required="">
                        </div>

                        <div class="form-group">
                            <label class="label_txt">Email</label>
                            <input type="email" class="form-control" name="email"
                                value="<?php if(isset($error)){ echo $email;}?>" required="">
                        </div>

                        <div class="form-group">
                            <label class="label_txt">Password</label>
                            <input type="password" class="form-control" name="password" required="">
                        </div>

                        <div class="form-group">
                            <label class="label_txt">Confirm Password</label>
                            <input type="password" class="form-control" name="passwordConfirm" required="">
                        </div>

                        <button type="submit" name="signup"
                            class="btn btn-primary btnn-group-lg form_btn">SignUp</button>
                        <p>Already have an account? <a href="login.php">Log in</a> </p>
                    <?php } ?>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

</html>