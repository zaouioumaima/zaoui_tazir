<?php
session_start();
$conn = mysqli_connect('localhost','root','','db_school') or die('Unable to connect');

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
    width: 1000px;
    height: 550px;
    margin: 60px auto;
    display: flex;
    background: #32476e;
    border-radius: 10px;
    box-shadow: 5px 5px 7px #32476e, -5px -5px 7px gray;
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

hr {
  border-top: 2px solid purple;
}
.pic {
    width: 75%;
    display: block;
    background:#ffffff;
}
.pic img {
  width: 70%;
    margin: 58px 90px

}
.pic h1{
    margin: 21px 120px;
    color: #32476e;

}.cree_compt{

    color: #8dffdfbf;
 
    display: block;
    margin: 60px ;
    
  
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
          <h1>Connexion</h1>
          <label><ion-icon name="mail-sharp"></ion-icon>  Email</label>
          <input type="email"  name ="email"  placeholder="Email">
      
     
          <label><ion-icon name="lock-closed-sharp"></ion-icon>  Mot de passe </label>
          <input type="password"  name="mot_de_passe"  placeholder="Mot de passe " >
          <button type="submit" name="login" onclick="submitData();"><span>Connexion</span></button>
          <a class="cree_compt" href="creecomptansegniant.php">Cree un compte</a>
        <closeform></closeform></form>
      </div>
      <div class="pic">
        <h1> Bienvenue dans PhDooc</h1>
     <img src="img/ens.PNG">
      </div>  </div>
    
   
      <?php
if (isset($_POST['login'])){
  $email=$_POST['email'];
  $mot_de_passe = $_POST['mot_de_passe'];
  $select = mysqli_query($conn , "SELECT * FROM tb_ensegnient WHERE email ='$email' AND mot_de_passe ='$mot_de_passe'");


  $row = mysqli_fetch_array($select);
   
  if(is_array($row)){
    $_SESSION["nom"] = $row['nom'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["mot_de_passe"] = $row['mot_de_passe'];
    $_SESSION["prenom"] = $row['prenom'];
 
    

  }else{
    echo'<script type = "text/javascript">';
    echo'alert("Invalid email or mot de passe!");';
    echo'window.location.href = "loginensegnient.php"';
    echo'</script>';
  }

}

if(isset($_SESSION["nom"])){
  header("Location:pageensegniant.php");
}

  ?>
   


  </body>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>