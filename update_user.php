


<?php
// Include config file
require_once "config.php";

if(isset($_POST['btnEnvoyer'])){

$pdo=new PDO("mysql:host=localhost;dbname=alomrane", "root","");

    $stm=$pdo->prepare("UPDATE utilisateur SET  nom=:nom,prenom=:prenom,
  email=:email,Type=:Type,Authentification=:Authentification WHERE  id=:id");

    $stm->execute([":nom"=>$_POST['nom'],
        ":prenom"=>$_POST['prenom'],
        ":email"=>$_POST['email'],
        ":Type"=>$_POST['Type'],
        ":Authentification"=>$_POST['Authentification'],
        ":id"=>$_POST['id']]);
       header("location: utilisateur.php");

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

    $stm=$pdo->prepare("select * from utilisateur where id=:id");
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
                                        <label>nom</label>
                                        <input type="text" name="nom"  value="<?= $p['nom']?>" class="form-control">
                                        
                                    </div>
                                    <div class="form-group <?= (!empty($name_adresse)) ? 'has-error' : ''; ?>">
                                        <label>prenom</label>
                                        <input type="text" name="prenom" class="form-control" value="<?= $p['prenom']?>">
                                        
                                    </div>
                                    <div class="form-group <?= (!empty($type_error)) ? 'has-error' : ''; ?>">
                                        <label>email</label>
                                        <input type="text" name="email" class="form-control" value="<?= $p['email']?>">
                                       
                                    </div>
                                    <div class="form-group <?= (!empty($prixU_error)) ? 'has-error' : ''; ?>">
                                        <label>Type</label>
                                        <input type="text" name="Type" class="form-control" value="<?= $p['Type']?>">
                                       
                                    </div>
                                    <div class="form-group<?= (!empty($prixG_error)) ? 'has-error' : ''; ?>">
                                        <label>Authentification</label>
                                        <input type="text" name="Authentification" class="form-control" value="<?= $p['Authentification']?>">
                                      
                                    </div>
                                    <input type="hidden" name="id" value="<?= $p['id']?>"/>
                                    <input type="submit" name="btnEnvoyer" class="btn btn-primary" value="Submit">
                                    <a href="utilisateur.php" class="btn btn-default" style="color:red;">Cancel</a>
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

