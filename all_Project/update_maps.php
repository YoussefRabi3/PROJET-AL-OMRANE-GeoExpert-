<?php 
// Include config file
require_once "config.php";

if(isset($_POST['btnEnvoyer'])){

$pdo=new PDO("mysql:host=localhost;dbname=alomrane", "root","");

    $stm=$pdo->prepare("UPDATE authentification SET  N_TF=:N_TF,description=:description,
  Type_actif=:Type_actif,prix_unitaire=:prix_unitaire,pri_globale=:pri_globale, WHERE  id=:id");

    $stm->execute([":N_TF"=>$_POST['N_TF'],
        ":description"=>$_POST['description'],
        ":Type_actif"=>$_POST['Type_actif'],
        ":prix_unitaire"=>$_POST['prix_unitaire'],
        ":pri_globale"=>$_POST['pri_globale'],
        ":id"=>$_POST['id']]);
       header("location: auth_affichage.php");

}



 ?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <?php include_once 'css_style/style.php';?>
<!-- add style css -->
<!-- end style css php -->
	<body>
        <?php
if(isset($_GET['id'])){
    $pdo=new PDO("mysql:host=localhost;dbname=alomrane", "root","");

    $stm=$pdo->prepare("select * from authentification where id=:id");
    $stm->execute([":id"=>$_GET['id']]);
    $p=$stm->fetch();
?>
 <form action="#" method="POST">
                                     <div class="form-group ">
                                        <label>N_TF</label>
                                        <input type="text" name="N_TF"  value="<?= $p['N_TF']?>" class="form-control">
                                        
                                    </div>
                                    <div class="form-group <?= (!empty($name_adresse)) ? 'has-error' : ''; ?>">
                                        <label>description</label>
                                        <input type="text" name="description" class="form-control" value="<?= $p['description']?>">
                                        
                                    </div>
                                    <div class="form-group <?= (!empty($type_error)) ? 'has-error' : ''; ?>">
                                        <label>Type_actif</label>
                                        <input type="text" name="Type_actif" class="form-control" value="<?= $p['Type_actif']?>">
                                       
                                    </div>
                                    <div class="form-group <?= (!empty($prixU_error)) ? 'has-error' : ''; ?>">
                                        <label>prix_unitaire</label>
                                        <input type="text" name="prix_unitaire" class="form-control" value="<?= $p['prix_unitaire']?>">
                                       
                                    </div>
                                    <div class="form-group<?= (!empty($prixG_error)) ? 'has-error' : ''; ?>">
                                        <label>pri_globale</label>
                                        <input type="text" name="pri_globale" class="form-control" value="<?= $p['pri_globale']?>">
                                      
                                    </div>
                                    <input type="hidden" name="id" value="<?= $p['id']?>"/>
                                    <input type="submit" name="btnEnvoyer" class="btn btn-primary" value="Submit">
                                    <a href="form.php" class="btn btn-default" style="color:red;">Cancel</a>
                                </form>
</body>
 <?php
                                    }
                                    ?>
</html>