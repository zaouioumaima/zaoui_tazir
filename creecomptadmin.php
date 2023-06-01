<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

if (isset($_POST['registre'])) {
  
  if (isset($_POST['email']) && isset($_POST['mot_de_passe'])&&isset($_POST['nom'])&&isset($_POST['prenom'])) {

// get the post recordsimageprofil
$email=$_POST['email'];
$_mot_de_passe=$_POST['mot_de_passe'];

$prenom = $_POST['prenom'];

$nom = $_POST['nom'];

var_dump($email , $_mot_de_passe, $prenom , $nom );
$host="localhost";
$username="root";
 $password="";
 $dbname="db_school";
$conn =  mysqli_connect(hostname: $host,
 username : $username,
 password : $password ,
 database : $dbname);



$con ="INSERT INTO tb_student (email , mot_de_passe, prenom , nom ) VALUES (? , ? , ? , ? )";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $con)){
  die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssss",$email,$_mot_de_passe,$prenom,$nom);
mysqli_stmt_execute($stmt);
echo'<script type = "text/javascript">';
    echo'alert("inscription réussie");';
    echo'window.location.href = "loginetuaiant.php" ';
    echo'</script>';
  


  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PhDooc</title>
    <link rel="shortcut icon" type="image/png" href="img/logo1.png"/>
    <link rel="stylesheet" href="style.css" />
    <style>
        
        .container {
  width: 500px;
  height: 700px;
  margin: 60px auto;
  display: flex;
  background: #32476e;
  border-radius: 10px;
  box-shadow: 5px 5px 7px gray, -5px -5px 7px gray;
}

.login {
  width: 500px;
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
.cree_compt{

color: #8dffdfbf;

display: block;
margin: 0px 90px ;


font-size:1em;

}
ion-icon {
    visibility: hidden;
    color: #ffffffba;
}
    </style>
  </head>
  <body>
    <div class="container">
    <div class="login">
        <form  action="" method="post">
          <h1>Cree Compt</h1> 
           <label><ion-icon name="person-circle-sharp"></ion-icon> Nom</label>
          <input type="text"  name ="nom"  placeholder="Nom">

           <label><ion-icon name="person-circle-sharp"></ion-icon>  Prenom</label>
          <input type="text"  name ="prenom"  placeholder="Prenom">

          <label><ion-icon name="mail-sharp"></ion-icon>  Email</label>
          <input type="email"  name ="email"  placeholder="Email">

          <label><ion-icon name="lock-closed-sharp"></ion-icon> Mot de passe</label>
          <input type="password" name="mot_de_passe" placeholder="Email">
    
   
   
 
    
    
     <button type="submit" name="registre" onclick="submitData();"><span>Registre</span></button>
    <div class="links">
       <a  class="cree_compt" href="loginadmin.php">Conection</a>
     </div>
 </form>
      </div>
       
  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>