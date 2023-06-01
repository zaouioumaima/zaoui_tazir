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
        <div class="main-title">
          <h2>Liste bordereau </h2>
        </div>
        <div class="right" >
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher....."  class="recherche" >
  <table  class="table" id="myTable" width="90%"> 
  <tr >
    <th whidth="">Nom du candidat</th>
    <th>Prenom du candidat</th>
    <th>Type du dosssier</th>
    <th>Date du jour</th>
   

  
  </tr>
  <?php
  $con=mysqli_connect("localhost","root","","db_school");
  $requete="SELECT * from borduro";
  $query=mysqli_query($con,$requete);
  while($rows=mysqli_fetch_assoc($query)){
    $SID=$rows['SID'];
    echo "<tr>";
    echo "<td>".$rows['nom']."</td>";
    echo "<td>".$rows['prenom']."</td>";
    echo "<td>".$rows['typedossier']."</td>";
    echo "<td>".$rows['dateojorduit']."</td>";
   
    

    echo "</tr>";

  }
  ?></table>
  </div>
  </div>
<script>
function  myFunction() {
    var filter = document.getElementById("myInput").value.toUpperCase(),
        tr = document.getElementById("myTable").getElementsByTagName("tr"),
        td,
        i, j,
        txtValue;

    if (!filter) {                                                // no filter
        for (i = 1; i < tr.length; i++) tr[i].style.display = ""; // show all
        return;
    }
    
    for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        tr[i].style.display = "none"; // move this here for a start value
        for (j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            }
        }
    }}

</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <!-- Custom JS -->
  
  
  </body>
</html>