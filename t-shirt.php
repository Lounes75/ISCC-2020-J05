<?php
$nom_produit="T-shirt";
$couleur="Blanc";
$prix= 10.50;
$disponible = "true";
$quantite= 10;
?>

<h3> Tshirt Simple </h3>
<p> Le nom du produit est <?php echo $nom_produit ?> </p>
<p> Il reste <?php echo $quantite ?> </p>
<p> Le <?php echo $nom_produit?> est de couleur <?php echo $couleur?> </p>

<h4>Opération Simple</h4>
<p>Acheter 3 produits couterait <?php 
$nombre= 10.50*3;
echo $multi?></p>
<p>si 3 produits sont vendus il reste <?php
$sous= 10-3;
echo $sous?>.</p>
