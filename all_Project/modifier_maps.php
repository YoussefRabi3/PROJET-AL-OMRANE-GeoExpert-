



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    
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
</html>