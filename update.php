

<?php
// Include config file
require_once "config.php";

if(isset($_POST['btnEnvoyer'])){

$pdo=new PDO("mysql:host=localhost;dbname=alomrane", "root","");

    $stm=$pdo->prepare("UPDATE actif2 SET  NTF=:NTF,adresse=:adresse,
  type_actif=:type_actif,prix_unitaire=:prix_unitaire,prix_Globale=:prix_Globale WHERE  id=:id");

    $stm->execute([":NTF"=>$_POST['NTF'],
        ":adresse"=>$_POST['adresse'],
        ":type_actif"=>$_POST['type_actif'],
        ":prix_unitaire"=>$_POST['prix_unitaire'],
        ":prix_Globale"=>$_POST['prix_Globale'],
        ":id"=>$_POST['id']]);
       header("location: form.php");

}



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
        <?php
if(isset($_GET['id'])){
    $pdo=new PDO("mysql:host=localhost;dbname=alomrane", "root","");

    $stm=$pdo->prepare("select * from actif2 where id=:id");
    $stm->execute([":id"=>$_GET['id']]);
    $p=$stm->fetch();
?>
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
                                        <input type="text" name="NTF"  value="<?= $p['NTF']?>" class="form-control">
                                        
                                    </div>
                                    <div class="form-group <?= (!empty($name_adresse)) ? 'has-error' : ''; ?>">
                                        <label>adresse</label>
                                        <input type="text" name="adresse" class="form-control" value="<?= $p['adresse']?>">
                                        
                                    </div>
                                    <div class="form-group <?= (!empty($type_error)) ? 'has-error' : ''; ?>">
                                        <label>typeactif</label>
                                        <input type="text" name="type_actif" class="form-control" value="<?= $p['type_actif']?>">
                                       
                                    </div>
                                    <div class="form-group <?= (!empty($prixU_error)) ? 'has-error' : ''; ?>">
                                        <label>prix_unitaire</label>
                                        <input type="text" name="prix_unitaire" class="form-control" value="<?= $p['prix_unitaire']?>">
                                       
                                    </div>
                                    <div class="form-group<?= (!empty($prixG_error)) ? 'has-error' : ''; ?>">
                                        <label>prix_Globale</label>
                                        <input type="text" name="prix_Globale" class="form-control" value="<?= $p['prix_Globale']?>">
                                      
                                    </div>
                                    <input type="hidden" name="id" value="<?= $p['id']?>"/>
                                    <input type="submit" name="btnEnvoyer" class="btn btn-primary" value="Submit">
                                    <a href="form.php" class="btn btn-default" style="color:red;">Cancel</a>
                                </form>
                            </div>
                    </div>        
                </div>
                </div>
            </div>
                <!-- foodter -->
                <!--<?php include_once 'foodter/foodter.php';?>-->
				<!-- end foodter -->
			</div>
            <!-- chart -->
            <?php include_once 'chart/chart.php'; ?>
            <!-- end chart -->
		</div>
	</body>
    <?php }?>
</html>

