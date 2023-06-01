<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>PhDooc</title>
    <link rel="shortcut icon" type="image/png" href="img/logo1.png"/>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <style>
    .container {
    width: 400px;
    
    height: 520px;

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
}
.row {
    background: #ffffff;
    color: #222428;
    border-radius: 10px;
    margin: 20px 0px;
    height: 30px;
}
.cree_compt{

color: #8dffdfbf;

display: block;
 margin: 4px 99PX;


font-size:1em;

}</style>
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
       
        <div class="dropdown">
  <div class="dropbtn"><img src="img/parametre.png" height="30px">
</div>
  <div class="dropdown-content">
  <a href="retour.php">Deconnexion</a>
    <a href="comptadminenseg.php">Informatin de Compt</a>
   
  </div>
</div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
          <img src="img/logo.png" width="150px " height="100px" > 
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
        <li class="sidebar-list-item">
            <a href="#" target="_blank">
            <ion-icon name="qr-code"></ion-icon> Page d'accueil
            </a>
          </li>
         
          <li class="sidebar-list-item">
            <a href="gestionsalleetudiant.php" target="_blank">
            <ion-icon name="calendar"></ion-icon> Gestion des salle 
            </a>
          </li>
          
          <li class="sidebar-list-item">
            <a href="listeetudiantensegniant.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste etudiant
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="listeensegniantenseg.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste ensegniant
            </a>
          </li><li class="sidebar-list-item">
            <a href="listeborduroensegniant.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste bordereau 
            </a>
          </li><li class="sidebar-list-item">
            <a href="listeprsonchargeensegniant.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste prisoncharge 
            </a>
          </li>
           
       
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
      <div class="container">
    <div class="login">
        <form  action="" method="post">
          <h1>Copmt</h1> 
          
          <label><ion-icon name="person-circle-sharp"></ion-icon> Nom</label>
          <div class="row">   <?php echo $_SESSION['nom'];?></div>
         
         <label><ion-icon name="person-circle-sharp"></ion-icon> Prenom</label>

         <div class="row">   <?php echo $_SESSION['prenom'];?></div>

      
      <label><ion-icon name="mail-sharp"></ion-icon> Email</label>
      <div class="row">    <?php echo $_SESSION['email'];?></div>
   
      
   

      
     
     
      
      </div>
  </form>
       
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <!-- Custom JS -->
  
    <script src="js/scripts.js"></script>
  </body>
</html>