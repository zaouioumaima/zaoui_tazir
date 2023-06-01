<?php 
    require_once('db-connect.php');

    if(!isset($_GET['id'])){
        echo "<script> alert('ID de planification non défini.'); location.replace('gestionsalleadmin.php') </script>";
        $conn->close();
        exit;
    }

    $delete = $conn->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");

    if($delete){
        echo "<script> alert('L’evenement a ete supprime avec succes.'); location.replace('gestionsalleadmin.php') </script>";
    }else{
        echo "<pre>";
        echo "Une erreur s’est produite.<br>";
        echo "Error: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    
    $conn->close();
?>