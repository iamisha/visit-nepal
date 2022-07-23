<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:login.php");
}
$email=$_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email='$email'");
if($res = mysqli_fetch_array($findresult)){
    $fname = $res['fname'];
    $username = $res['username'];
    $lname = $res['lname'];
    $email = $res['email'];

}
?>
<html>
<head>
    <title>My Account- Visit-Nepal</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=form.css>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

</div>
<div class="col-sm-6">
   
        <div class="login_form">

        <h2 style="font-size: 40px;
  background: -webkit-linear-gradient(blue, red, white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;">Nepal</h2>

        <br>
        <p><a href="logout.php"><span style="color:red; float: right;">Logout</span></a></p>
        <p>Welcome! <span style="color:teal"><?php echo $fname; ?></span></p>
        <table class="table">
            <tr>
                <th>First Name </th>
                <td><?php echo $fname; ?></td>
</tr>
<tr>
    <th>Last Name </th>
    <td><?php echo $lname; ?></td>
</tr>
<tr>
    <th>Username</th>
    <td><?php echo $username; ?></td>
</tr>
<tr>
    <th>Email </th>
    <td><?php echo $email; ?></td>
</tr>
<tr>
<th>Now you can book your trip ... simply going  to the <a href="\visit-nepal\booknow.php">Book Now</a></th>
</tr>
</table>
</div>
<div clss="col-sm-3">

</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

</html>

