<?php
 $con=mysqli_connect("localhost","root","","db_school");
  if(isset($_GET['id'])){
    $email=$_POST['email'];
$prenom = $_POST['prenom'];
$wilaya = $_POST['wilaya'];
$nom = $_POST['nom'];

$id=$_POST['id'];
$sql="UPDATE tb_ensegnient set nom='$nom', prenom='$prenom', email='$email', wilaya='$wilaya'   where id='$id'";
  $q=mysqli_query($con,$sql);
  if(isset($q)){
    echo'<script type = "text/javascript">';
    echo'alert("modification secsesfolu!");';
    echo'window.location.href = "listeensegniant.php" ';
    echo'</script>';
  }
  }
?>