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
    <link rel="stylesheet" href="css/stylegstionsale.css">
    <!--agenda-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
   <style>.main-container {
    grid-area: main;
    overflow-y: auto;
    padding: 20px 20px;
    color: #2c3e50;
  }.bg-primary {
    background-color: #2c3e50!important;
}.btn-primary:hover {
  color: #fff;
  background-color: #2c3e50;
  border-color: #2c3e50;

}
.btn-primary {
    color: #fff;
    background-color: #2c3e50;
    border-color: #2c3e50;
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
            <a href="#.php" target="_blank">
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
          <h2>Gesstion salle</h2>
        </div>

        <?php
        require_once('db-connect.php');

        $schedules = $conn->query("SELECT * FROM `schedule_list`");
        $sched_res = [];

        foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
            $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
            $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
            $sched_res[$row['id']] = $row;
        }

        if(isset($conn)) $conn->close();
    ?>
  <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap"><div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr"><div class="fc-toolbar-chunk"><div class="btn-group"><button type="button" title="Previous month" aria-pressed="false" class="fc-prev-button btn btn-primary"><span class="fa fa-chevron-left"></span></button><button type="button" title="Next month" aria-pressed="false" class="fc-next-button btn btn-primary"><span class="fa fa-chevron-right"></span></button></div><button type="button" title="This month" aria-pressed="false" class="fc-today-button btn btn-primary" disabled="">aujourd`hui</button></div><div class="fc-toolbar-chunk"><h2 class="fc-toolbar-title" id="fc-dom-1">avril 2023</h2></div><div class="fc-toolbar-chunk"><div class="btn-group"><button type="button" title="month view" aria-pressed="true" class="fc-dayGridMonth-button btn btn-primary active">mois</button><button type="button" title="week view" aria-pressed="false" class="fc-dayGridWeek-button btn btn-primary">semaine
</button><button type="button" title="list view" aria-pressed="false" class="fc-list-button btn btn-primary">jour</button></div></div></div>
                  
                </div>
                
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Détails de l’horaire</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Titre</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required="">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Salle</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required=""></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Date de commancer</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required="">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">Date de fin</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required="">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Enregistrer</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Détails de l’horaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">TitrE</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Salle</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Date de cammanser</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">Date de fin</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Modifier</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Supprimer</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Annule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

                 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
 <script src="js/script.js"></script>
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>




  

       
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    
    <!-- Custom JS -->
  
   
  </body>
</html>

