<?php
require_once("config.php");//included our connection file
if(isset($_POST['subforgot']))
{
    $login=$_REQUEST['login_var'];
    $query="select * from users where (username='$login' OR email='$login')";/* query to check if the valus are available in database or not */
    $res = mysqli_query($dbc,$query);
    $result = mysqli_fetch_array($res);
    if($result)
    {
        $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE (username='$login '
        OR email = '$login')");
        if($res = mysqli_fetch_array($findresult))
        {
            $oldftemail = $res['email'];

        }

        $token = bin2hex(random_bytes(50));//function of php to make random values
        $inresult = mysqli_query($dbc,"insert into pass_reset values('','$oldftemail
        ','$token')");
        if($inresult)
        {
            $FromName="Visit Nepal";
            $FromEmail="no_reply@visitnepal.com";
            $ReplyTo="visitnepalinfo@gmail.com";
            $credits="All rights reserved | Visit Nepal ";
            $headers = "MIME-Version: 1.0\n";
                 $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                 $headers .= "From: ".$FromName." <".$FromEmail.">\n";
                 $headers .= "Reply-To: ".$ReplyTo."\n";
                 $headers .= "X-Sender: ".$FromEmail."\n";
                 $headers .= "X-Mailer: PHP\n";
                 $headers .= "X-Priority: 1\n";
                 $headers .= "Return-Path: <".$FromEmail.">\n";
                 /*port 8081 allow the server to connect with it */
                 $subject="Your password reset link <br> http://localhost:8081/includes/password-reset.php?token=".$token." <br> Reset your password with this link . Click or open in new tab<br><br><br><br> <center>"
                 .$credits."</center>";
                 /* @ before email so that it won't show any warning that the mail function doesn't work in localhost */
                 if(@mail($oldftemail, $subject, $msg, $headers, '-f'.$FromEmail)){
                    header("location:forgot-password.php?sent=1");
                    $hide='1';

                 }
                 else{
                      header("location:forgot-password.php?servererr=1");
                }
                } else{
                    header("location:forgot-password.php?something_wrong=1");
                 }
                }else{
                    header("location:forgot-password.php?err=".$login);
                 }
                 }
?>