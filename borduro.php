<?php require "config.php"; ?>
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
<!--formulaire borduro-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css'>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <style> .btnsuccess {
    color: #fff;
    background: linear-gradient(59deg,#32476e , #cbdaf7);
    background-color: #8dace3;
    border-color: #8dace3;
}

.text-success {
    color: black;
}.formcontrol{
    display: block;
    width: 50%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}.btnprimary {
  background-color: #abddab;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
    color: black;
}

form{
  margin: 50px;
}
/*input*/
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #5a4040;
    background-color: #dee2e673;
    background-clip: padding-box;
    border: 1px solid #42505e;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
/*colore document de tablaux*/
.main-container {
    grid-area: main;
    overflow-y: auto;
    padding: 20px 20px;
    color: rgb(34 32 32 / 95%);
}/*color bouton*/
.btnsuccess {
    color: #fff;
    background: #263043;
    border-color: #263043;
}/*coloretable*/
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: #e1e1e1;
}/*bakgawnde of table*/
.table-bordered td, .table-bordered th {
    border: 1px solid #465c72;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid #465c72;
}
</style>
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
            <a href="#" target="_blank"> <ion-icon name="albums"></ion-icon> Bordereau d'envoi 
           
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="listeetudiant.php" target="_blank">
            <ion-icon name="reader"></ion-icon> Liste etudiant
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="listeensegniant.php" target="_blank">
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
          <h2>Bordereau </h2>
        </div>
        <?php
        if(isset($_POST["submit"])){
          $nom=$_POST["nom"];
          $dateojorduit=date("Y-m-d",strtotime($_POST["dateojorduit"]));
          $prenom=mysqli_real_escape_string($con,$_POST["prenom"]);
          $typedossier=mysqli_real_escape_string($con,$_POST["typedossier"]);
          $ms=mysqli_real_escape_string($con,$_POST["ms"]);
         
          
          $sql="insert into borduro (nom,dateojorduit,prenom,ms,typedossier) values ('{$nom}','{$dateojorduit}','{$prenom}','{$ms}','{$typedossier}') ";
          if($con->query($sql)){
         
            $sid=$con->insert_id;
            
            
            $sql2="INSERT INTO  borduro_document (SID,document,nombre) values ";
            $rows=[];
            for($i=0;$i<count($_POST["document"]);$i++)
            {
              $document=mysqli_real_escape_string($con,$_POST["document"][$i]);
              $nombre=mysqli_real_escape_string($con,$_POST["nombre"][$i]);
             
              $rows[]="('{$sid}','{$document}','{$nombre}')";
            }
            $sql2.=implode(",",$rows);
            if($con->query($sql2)){
              echo "<div class='alert alert-success'><a href='print.php?id={$sid}' target='_BLANK'>Click </a>ici pour imprimer le document </div> ";
            }else{
              echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
          }
        }
        
      ?> <form method='post' action='borduro.php' autocomplete='off'>
      <div class='row'>
          <div class='col-md-4'>
          
            <div class='form-group'>
              <label>Nom du candidat</label>
              <input type='text' name='nom' required class='form-control'>
            </div>
            <div class='form-group'>
              <label>Prenom du candidat</label>
              <input type='text' name='prenom' required class='form-control'>
            </div>
            <div class='form-group'>
              <label>A Monsieur</label>
              <input type='text' name='ms' required class='form-control'>
            </div>
          </div>
          <div class='col-md-8'>
           
            <div class='form-group'>
              <label>Date du jour</label>
              <input type='text' name='dateojorduit' id='date' required class='form-control'>
            </div>
           
            <div class='form-group'>
              <label>Type du dosssier</label>
              <input type='text' name='typedossier' required class='form-control'>
            </div>
          </div>
        </div>
           
        <div class='row'>
          <div class='col-md-12'><br>
           
            <table class='table table-bordered'>
              <thead>
                <tr>
                  <th>Nom du documents</th>
                  <th>Nombre</th>
                  <th>Action</th>
                
                </tr>
              </thead>
              <tbody id='product_tbody'>
                <tr>
                  <td><input type='text' required name='document[]' class='form-control'></td>
                  <td><input type='text' required name='nombre[]' class='form-control price'></td>
                
                  <td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td><input type='button' value='+ Ajouter document' class='btn btnprimary btn-sm' id='btn-add-row'></td>
                 
                </tr>
              </tfoot>
            </table>
            <input type='submit' name='submit' value='Enregistre' class='btn btnsuccess float-right'>
          </div>
        </div>
      </form>
    </div></div>   <script>
    
    $(document).ready(function(){
    $("#date").datepicker({
      dateFormat:"dd-mm-yy"
    });
    
    $("#btn-add-row").click(function(){
      var row="<tr> <td><input type='text' required name='document[]' class='form-control'></td><td><input type='text' required name='nombre[]' class='form-control price'></td>    <td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td> </tr>";
      $("#product_tbody").append(row);
    });
    
    $("body").on("click",".btn-row-remove",function(){
      if(confirm("Are You Sure?")){
        $(this).closest("tr").remove();
        grand_total();
      }
    });

    
  });
</script>
      
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