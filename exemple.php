<?PHP
$var="Bonjour";
echo $var;
echo "je suis du code php" ;
?>


<HTML>
<BODY>
<?php # for ($i=1; $i<15000; $i=$i+2)
#{ echo "$i "; }
?>

<br> <br>
<?php 
$sexe = 'féminin'; 
$age = 50; 

if ($sexe === 'féminin' && $age >= 21 && $age <= 40) {
    echo 'Bienvenue !! Vous êtes une femme âgée de 21 à 40 ans.';
} else {
    echo "Désolé, Vous n'êtes pas une femme et,ou votre âge n'est pas compris entre
21 et 40 ans ";
}

?>



</BODY>
</HTML>



