<html>
  
<body>
   <h1> Affichage des Clubs </h1><br> <br>
   <?php 
   #var_dump(empty($_GET));
   if (empty($_GET["Id"])) :
    echo "Id est manquant";
  
   elseif (empty($_GET["Nom"])) :
    echo "Nom est manquant";

    elseif (empty($_GET["description"])) :
    echo "description est manquant";

    elseif (empty($_GET["adresse"])) :
    echo "adresse est manquant";

    elseif (empty($_GET["domaine"])) :
    echo "domaine est manquant";
    else:
 ?>

   <table border="3">
    <tr>
      <td>Id</td>
      <td>Nom</td>
      <td>Description</td>
      <td>Adresse</td>
      <td>Domaine</td>
    </tr>
    <tr>
      <td><?php echo $_GET["Id"]; ?></td>
      <td><?php echo $_GET["Nom"]; ?></td>
      <td><?php echo $_GET["description"] ?></td>
      <td> <?php echo $_GET["adresse"] ?></td>
      <td> <?php echo $_GET["domaine"] ?></td>
    </tr>
   </table> 

  <?php endif; ?>

   </body>
  
</html>