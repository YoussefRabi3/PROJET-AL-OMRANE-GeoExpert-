<?php

// Include config file
//require_once "config.php";

 if(isset($_POST['btnEnvoyer'])){

     $pdo = new PDO("mysql:host=localhost;dbname=alomrane","root","");

     $stm = $pdo->prepare("INSERT INTO actif2(NTF,adresse,type_actif,prix_unitaire,prix_Globale)VALUES(:NTF,:adresse,:type_actif,:prix_unitaire,:prix_Globale)");

     $stm->execute([
                    ":NTF"=>$_POST['NTF'],
                    ":adresse"=>$_POST['adresse'],
                   ":type_actif"=>$_POST['type_actif'],
                   ":prix_unitaire"=>$_POST['prix_unitaire'],
               ":prix_Globale"=>$_POST['prix_Globale']]);
      header("location: form.php");

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
                                        <label>N°TF</label>
                                        <input type="text" name="NTF" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group <?= (!empty($name_adresse)) ? 'has-error' : ''; ?>">
                                        <label>adresse</label>
                                        <input type="text" name="adresse" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>typeactif</label>
                                        <input type="text" name="type_actif" class="form-control" >
                                        <span class="help-block"></span>
                                    </div>
                                     <div class="form-group">
                                        <label>prix_unitaire</label>
                                        <input type="text" name="prix_unitaire" class="form-control" >
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>prix_Globale</label>
                                        <input type="text" name="prix_Globale" class="form-control" >
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

