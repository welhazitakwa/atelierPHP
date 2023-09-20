<html>
  
<body>
   <h1> Affichage Du Club </h1><br> <br>
   <?php 
   include 'Club.php';
   $club1 = new Club($_POST["Id"],$_POST["Nom"],$_POST["description"],$_POST["adresse"],$_POST["domaine"]);
   #var_dump(empty($_GET));
   var_dump($club1);

   #$club1->afficherInfo();

  ?>



   </body>
  
</html>