<?php
 $con=mysqli_connect("localhost","root","","db_school");
  if(isset($_GET['id'])){
    $email=$_POST['email'];
$prenom = $_POST['prenom'];
$wilaya = $_POST['wilaya'];
$nom = $_POST['nom'];
$universiter =$_POST['universiter'];
$departemant =$_POST['departemant'];
$numero_de_cart_de_etudiant = $_POST['numero_de_cart_de_etudiant'];
$id=$_POST['id'];
$sql="UPDATE tb_etudient set nom='$nom', prenom='$prenom', email='$email', wilaya='$wilaya',
  departemant='$departemant',universiter='$universiter',numero_de_cart_de_etudiant='$numero_de_cart_de_etudiant'   where id='$id'";
  $q=mysqli_query($con,$sql);
  if(isset($q)){
    echo'<script type = "text/javascript">';
    echo'alert("modification secsesfolu!");';
    echo'window.location.href = "listeetudiant.php" ';
    echo'</script>';
  }
  }
?>