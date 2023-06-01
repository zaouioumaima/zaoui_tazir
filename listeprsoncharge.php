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
    <a href="compt.php">Informatin de Compt</a>
   
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
            <a href="pageadmin.php" target="_blank">
            <ion-icon name="qr-code"></ion-icon> Page d'accueil
            </a>
          </li>
         
          <li class="sidebar-list-item">
            <a href="gestionsalleadmin.php" target="_blank">
            <ion-icon name="calendar"></ion-icon> Gestion des salle 
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="prisoncharje.php" target="_blank">
            <ion-icon name="albums"></ion-icon>Prisoncharge 
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="borduro.php" target="_blank"> <ion-icon name="albums"></ion-icon> Bordereau d'envoi 
           
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="listeetudiant.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste etudiant
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste ensegniant
            </a>
          </li><li class="sidebar-list-item">
            <a href="listeborduro.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste bordereau 
            </a>
          </li><li class="sidebar-list-item">
            <a href="listeprsoncharge.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste prisoncharge 
            </a>
          </li>
       
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>Liste prisencharge</h2>
        </div>

        <div class="right" >

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher....." class="recherche" >
<table  class="table" id="myTable" width="auto"> 
<thead>

<th whidth="">Nom_condidate</th>
<th>Prenom_condidate</th>
<th>type_cotion</th>
<th>numero</th>
<th>Nom_prenome_ensegniant</th>
<th>Categori_ensegniant</th>
<th>lieu_travaile_ensegniant</th>
<th>datesetenonse</th>
<th>Modifier</th>

</thead>
<?php
$con=mysqli_connect("localhost","root","","db_school");
$requete="SELECT * from prisoncharg"; $query=mysqli_query($con,$requete);




while($rows=mysqli_fetch_assoc($query)){
  $SID=$rows['SID'];
  
  echo "<tr>"; 

  
  echo "<td>".$rows['nom']."</td>";
  echo "<td>".$rows['prenom']."</td>";
  echo "<td>".$rows['type_caution']."</td>";
  echo "<td>".$rows['numero1']."<br><br>".$rows['numero2']."<br><br>".$rows['numero3']."<br><br>".$rows['numero4']."<br><br>"
  .$rows['numero5']."</td>";

  echo "<td>".$rows['ensegniqnt1']."<br><br>".$rows['ensegniqnt2']."<br><br>".$rows['ensegniqnt3']."<br><br>".$rows['ensegniqnt4']."<br><br>"
  .$rows['ensegniqnt5']."</td>";
  echo "<td>".$rows['categorie1']."<br><br>".$rows['categorie2']."<br><br>".$rows['categorie3']."<br><br>".$rows['categorie4']."<br><br>"
  .$rows['categorie5']."</td>";
  echo "<td>".$rows['lieu_travaile1']."<br><br>".$rows['lieu_travaile2']."<br><br>".$rows['lieu_travaile3']."<br><br>".$rows['lieu_travaile4']."<br><br>"
  .$rows['lieu_travaile5']."</td>";
  echo "<td>".$rows['date_soutenance']."</td>";

 
  
  echo"<td> <a href='deletprisoncharge.php?SID=".$SID."'> <button class='button'>Suprimer</button></a> </td>";
  
 
  echo"</tr>";

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