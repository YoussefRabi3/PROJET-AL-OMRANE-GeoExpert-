<?php 
 ?>
 <?php

// Include config file
//require_once "config.php";

 if(isset($_POST['btnEnvoyer'])){

     $pdo = new PDO("mysql:host=localhost;dbname=alomrane","root","");

     $stm = $pdo->prepare("INSERT INTO utilisateur(nom,prenom,email,Type,Authentification)VALUES(:nom,:prenom,:email,:Type,:Authentification)");

     $stm->execute([
                    ":nom"=>$_POST['nom'],
                    ":prenom"=>$_POST['prenom'],
                   ":email"=>$_POST['email'],
                   ":Type"=>$_POST['Type'],
               ":Authentification"=>$_POST['Authentification']]);
      header("location: utilisateur.php");

 }


 
// Define variables and initialize with empty values

?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Dashboard</title>
<!-- style css php -->
<?php include_once 'css_style/style.php';?>
<!-- add style css -->
<!-- end style css php -->
    <body>
    <style>
        .help-block{
            color:red;
        }
    </style>
        <div id="wrapper">
            <!-- nav -->
            <?php include_once 'sidebar/nav_form.php';?>
            <!-- end nav -->
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <!-- navbar -->
                <?php include_once 'sidebar/navbar.php';?>
                <!-- end navbar -->
                <div class="wrapper wrapper-content">
                    <div class="signup-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header">
                                    <h2>Create Record</h2>
                                </div>
                                <p>Please fill this form and submit to add employee record to the database.</p>
                                <form action="#" method="POST">

                                    <div class="form-group ">
                                        <label>nom</label>
                                        <input type="text" name="nom" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group <?= (!empty($name_adresse)) ? 'has-error' : ''; ?>">
                                        <label>prenom</label>
                                        <input type="text" name="prenom" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="text" name="email" class="form-control" >
                                        <span class="help-block"></span>
                                    </div>
                                     <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" name="Type" class="form-control" >
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Authentification</label>
                                        <input type="text" name="Authentification" class="form-control" >
                                        <span class="help-block"></span>
                                    </div>
                                    
                                    <input type="submit" name="btnEnvoyer" class="btn btn-primary"  value="Submit">
                                    <a href="form.php" class="btn btn-default" style="color:red;">Cancel</a>
                                </form>
                            </div>
                        </div>        
                    </div>
                            
                </div>
            </div>
                <!-- foodter -->
               
                <!-- end foodter -->
            </div>
            <!-- chart -->
            <?php include_once 'chart/chart.php'; ?>
            <!-- end chart -->
            <?php include_once 'script/js.php';?>
        </div>
    </body>
</html>

