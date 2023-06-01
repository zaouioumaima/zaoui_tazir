<?php
if (isset($_POST['registre'])) {
  
  if (isset($_POST['email']) && isset($_POST['mot_de_passe'])&&isset($_POST['nom'])&&isset($_POST['prenom'])
  &&isset($_POST['wilaya'])&&isset($_POST['universiter'])&&isset($_POST['departemant'])&&isset($_POST['numero_de_cart_de_etudiant'])) {
// get the post records
$email=$_POST['email'];
$_mot_de_passe=$_POST['mot_de_passe'];

$prenom = $_POST['prenom'];
$wilaya = $_POST['wilaya'];
$nom = $_POST['nom'];
$universiter =$_POST['universiter'];
$departemant =$_POST['departemant'];
$numero_de_cart_de_etudiant = $_POST['numero_de_cart_de_etudiant'];
var_dump($email , $_mot_de_passe, $prenom , $nom ,$wilaya ,$universiter,$departemant,$numero_de_cart_de_etudiant);
$host="localhost";
$username="root";
 $password="";
 $dbname="db_school";
$conn =  mysqli_connect(hostname: $host,
 username : $username,
 password : $password ,
 database : $dbname);



$con ="INSERT INTO tb_etudient (email , mot_de_passe, prenom , nom ,wilaya,universiter,departemant,numero_de_cart_de_etudiant) VALUES (? , ? , ? , ? , ? ,? ,? ,?)";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $con)){
  die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssssssss",$email,$_mot_de_passe,$prenom,$nom,$wilaya,$universiter,$departemant,$numero_de_cart_de_etudiant);
mysqli_stmt_execute($stmt);
echo'<script type = "text/javascript">';
    echo'alert("registre secsesfolu");';
    echo'window.location.href = "doctorantlogin.php" ';
    echo'</script>';}}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PhDooc</title>
    <link rel="shortcut icon" type="image/png" href="img/logo1.png"/>
    
<style>    
  .container {
  width: 600px;
  height: 1000px;
  margin: 60px auto;
  display: flex;
  background: #32476e;
  border-radius: 10px;
  box-shadow: 5px 5px 7px gray, -5px -5px 7px gray;
}

.login {
  width: 600px;
}
form {
  width: 230px;
  margin: 100px auto;
}
form h1 {
    text-align: center;
    text-transform: uppercase;
    font-weight: bolder;
    color: white;
}
p {
  text-align: center;
}
form label {
 
  font-size: 16px;
  font-weight: 600;
  padding: 8px;
  display: block;
  justify-content: space-between;
  color: white;
}
input {
  width: 100%;
  padding: 8px;
  margin: 8px;
  outline: none;
  border: none;
  border: 1px solid gray;
  border-radius: 5px;
}
button {
    width: 250px;
    margin: 30px 5px;
    padding: 10px;
    outline: none;
    border: none;
    border-radius: 20px;
    color: white;
    font-size: 17px;
    cursor: pointer;
    transition: 0.5s;
    background: linear-gradient(59deg,#a6afbf , #0055f9);
    background-color: #8dace3;}
button span {
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
button span:after {
  content: "\00bb";
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
button:hover span {
  padding-right: 30px;
}
button:hover span:after {
  opacity: 1;
  right: 0;
}

.col-md-4{
    display: block;
    border-spacing: 5px;
}
ion-icon {
    visibility: hidden;
    color: #ffffffba;
}.cree_compt{

color: #8dffdfbf;

display: block;
 margin: 4px 99PX;


font-size:1em;

}
 
</style>


</head> 
<body>



<div class="container">
    <div class="login">
        <form  action="" method="post">
          <h1>Cree Compt</h1> 
 
            



      <label><ion-icon name="person-circle-sharp"></ion-icon> NOM</label>
      <input type="text" name="nom"required="required" placeholder="Nom"  >
   
          <label><ion-icon name="person-circle-sharp"></ion-icon> Prenom</label>
      <input type="text" name="prenom" required="required" placeholder="Prenom">

      <label><ion-icon name="location-sharp"></ion-icon> Wilaya</label>
      <input type="text" name="wilaya" required="required" placeholder="Wilaya">
      
      
     <label><ion-icon name="school-sharp"></ion-icon> Universiter</label>
      <input type="text" name="universiter" required="required" placeholder="Universiter">
    
       <label><ion-icon name="school-sharp"></ion-icon>  Departemant</label>
      <input type="text" name="departemant" required="required" placeholder="Departemant">
   
      <label><ion-icon name="stop-sharp"></ion-icon> Numero_de_cart_de_etudiant</label>
      <input type="text" name=" numero_de_cart_de_etudiant" required="required" placeholder="Numero_de_cart_de_etudiant">
     
     
   
    
  <label><ion-icon name="mail-sharp"></ion-icon> Email</label>
      <input type="email" name="email" required="required" placeholder="Email">
      
      
   <label><ion-icon name="lock-closed-sharp"></ion-icon> Mot de passe</label>
      <input type="password" name="mot_de_passe" required="required" placeholder="Mot de passe">
  
      
   
     

  <button type="submit" name="registre" onclick="submitData();">Registre</button>


       

  <div class="links">
      <a class="cree_compt" href="loginetudiant.php">Connexion</a>
    </div>
 
    
      
   
  </form>

</div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script></html>