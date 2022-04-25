

 
 <?php 
 
 $conn=mysqli_connect('localhost', 'root' , '' ,'al omrane') or die(mysqli_error());
 $N_TF = $_POST['N_TF'];
 $adresse = $_POST['adresse']; //$LIBELLE variable quelle qu'on ,aussi dans la method post en le mes contenu du name
 $type_actif = $_POST['usage'];
 $coordonnées_GPS = $_POST['co_gps'];
 $prix_unitaire = $_POST['p_u'];
 $prix_Globale = $_POST['p_g'];
 $superficie_nette = $_POST['s_n'];
 $superficie_construite = $_POST['s_c'];
 $superficie_terrain = $_POST['s_t'];
 $COS = $_POST['cos'];
 $CUS = $_POST['cus'];
 $Date_Construction = $_POST['d_cn'];
 $Date_Opération = $_POST['d_op'];
 $Zonning_destination = $_POST['zoning'];
 


 $req="INSERT INTO actif(N_TF,adresse,type_actif,coordonnées_GPS,prix_unitaire,prix_Globale, superficie_nette,superficie_construite,superficie_terrain,COS_,CUS,Date_Construction,Date_Opération,Zonning_destination) 
   values('$N_TF','$adresse','$type_actif','$coordonnées_GPS','$prix_unitaire','$prix_Globale','$superficie_nette','$superficie_construite','$superficie_terrain','$COS','$CUS','$Date_Construction','$Date_Opération','$Zonning_destination')"; //libelle du tableau BDD. aussi dans value en le donner la variable quant na crée

$res = mysqli_query($conn,$req);




?>

