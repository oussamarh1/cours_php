<?php
$nom="rh";
$prenom="oussama";
$age=23;
// condition
$genre="homme";
$frist_name="oussama";
$last_name="rh";
// affectation condionnele
$p=($genre=="homme")? "mr" :"Mme";
$color=($genre=="homme")? "blue" :"red";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>mr <?php echo $nom?> <?php echo $prenom?> a <?php echo $age?> ans </h3>
<h3><?php echo "Mr $nom $prenom a $age ans" ?></h3>
<?php echo "<h3> Mr $nom $prenom a $age ans </h3>"  //les double code il affiche la resultat ?> 
<?php echo '<h3> Mr $nom $prenom a $age ans </h3>'  // les simples code il affiche pas ?> 
<?php echo '<h3>Mr ' .$nom.' ' .$prenom.' a'.$age.' ans </h3>' ?>
<h3> <?php if($genre=='homme'){
    echo "Mr ";
}else{
    echo "Mme ";
}

?>
 <?=$nom?> <?=$prenom?> a <?=$age?> ans </h3>

 <h3 style="background-color:<?=$color?>;"><?=$p?>   <?=$frist_name?> <?=$last_name?> </h3>

</body>
</html>