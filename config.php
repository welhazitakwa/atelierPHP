<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;
		dbname=test', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
    public function afficherBD(){
        $connexion = self::getConnexion(); // Obtenez la connexion à la base de données
        $query = $connexion->prepare("SELECT * FROM club");
        $query->execute(); // Exécutez la requête

        // Récupérez les résultats sous forme de tableau associatif
        $clubs = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($clubs)) {
            echo "<table border='1'>
                <tr>
                    <h1> &emsp;&emsp; Affichage des Clubs</h1>
                    <th>ID</th>
                    <th>Nom du Club</th>
                    <th>Description</th>
                    <th>Adresse</th>
                    <th>Domaine</th>
                </tr>";

            foreach ($clubs as $club) {
                echo "<tr>
                        <td>" . $club['id'] . "</td>
                        <td>" . $club['nom'] . "</td>
                        <td>" . $club['description'] . "</td>
                        <td>" . $club['adresse'] . "</td>
                        <td>" . $club['domaine'] . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "Aucun résultat trouvé dans la table 'tt11'.";
        }
 
    }

  } 
  $clb1 = new config();
  #$clb1->getConnexion();
  $clb1->afficherBD();
?>
