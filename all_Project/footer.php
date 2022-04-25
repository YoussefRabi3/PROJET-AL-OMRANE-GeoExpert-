
<div class="bouton">
  <a href="#">Bouton</a>
</div>

<table class="content-table">
        <thead>
          <tr>
            <th>id</th>
            <th>lat</th>
            <th>lng</th>
            <th>description</th>
            <th>location status</th>
           
            
          </tr>
       
  <?php 
     $pdo=new PDO("mysql:host=localhost;dbname=alomrane","root","");
     $stm=$pdo->prepare("select * from locations");
     $stm->execute([]);
     $libelle=$stm->fetchall(PDO::FETCH_ASSOC);
     foreach ($libelle as $p)
      {
      echo '<tbody>
             <tr> 
            <td>'.$p['id'].'</td>
            <td>'.$p['lat'].'</td>
             <td>'.$p['lng'].'</td>
            <td>'.$p['description'].'</td>
             <td>'.$p['location_status'].'</td>
           
             
             </tr>
             </tbody>'; 
     }

 

   ?>
  </thead>
  </table>


</body>
</html>