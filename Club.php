<?php
class Club {
 private int $id ;
 private string $nom;
 private string $description;
 private string $adresse;
 private string $domaine;


public function __construct(int $id, string $nom, string $description, string $adresse, string $domaine ) {
 $this->id = $id;
 $this->nom = $nom;
 $this->description = $description;
 $this->adresse = $adresse;
 $this->domaine = $domaine;

}


public function afficherInfo(){
 echo "l'id du club est :  $this->id <br/>";
 echo "le nom du club est :  $this->nom <br/>";
 echo "la description du club est :  $this->description <br/>";
 echo "l'adresse du club est :  $this->adresse <br/>";
 echo "le domaine du club est :  $this->domaine <br/>";
}


}
?>