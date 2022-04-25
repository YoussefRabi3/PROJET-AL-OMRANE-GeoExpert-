<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: welcome.php");
    exit;
}
// Include config file
require_once "config.php";
require_once "php_login.php";
?>

<?php 

$con=new mysqli("localhost","root","","alomrane");
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $con->prepare("select * from authentification where Login = ? and Utilisateur=1");
    $stmt->bind_param("s", $email);
    $stmt->execute() ;
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['Password'] === $password)
        {
             header("location:all_Project/user.php");
        }
        else
        {
            echo '<script>alert("email or password incorrect réesseayer")</script>';

        }
    }
    else
    {
        //echo "<h2>invalid email or password reesseyer </h2>";
        $stmt = $con->prepare("select * from authentification where Login = ? and Utilisateur=2");
    $stmt->bind_param("s", $email);
    $stmt->execute() ;
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['Password'] === $password)
        {
             header("location:all_Project/user+.php");
        }
        else
        {
            echo '<script>alert("email or password incorrect réesseayer")</script>';

        }
     }
   if(isset($_POST['submit']))
    {
        //echo "<h2>invalid email or password reesseyer </h2>";
        $stmt = $con->prepare("select * from authentification where Login = ? and Utilisateur=3");
    $stmt->bind_param("s", $email);
    $stmt->execute() ;
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['Password'] === $password)
        {
             header("location:welcome.php");
        }
        else
        {
            echo '<script>alert("email or password incorrect réesseayer")</script>';

        }
     }
    }
}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Reset Password</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- --------------style css --------------->
<link rel="stylesheet" href="assets/styles.css">

</head>
<body>
<div class="login-form">
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        <div class="text-center">
            <a href="index.html" aria-label="Space">
                <img class="mb-3" src="assets/image/images.png" alt="Logo" width="280" height="280">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Connexion</h1>
            <p>Please fill out this form.</p>
        </div>
		<div class="form-group" <?= (!empty($new_password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="email" placeholder="Email">				
            </div>
            
        </div> 
        <div class="form-group"<?= (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-key"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder=" Password" >				
            </div>
                   </div>          
        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <button type="submit" name="submit" class="btn btn-primary login-btn btn-block">LOGIN</button>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mb-3">
                    <a class="btn btn-primary login-btn btn-block" href="">Cancel</a>
                </div>
            </div>
        </div>
		<div class="or-seperator"><i>OR</i></div>
        
       
        <p class="small text-center text-muted mb-0">All rights reserved. © Space. 2021 RABI-INFO.COM.</p>
    </form>
</div>

</body>
</html>

