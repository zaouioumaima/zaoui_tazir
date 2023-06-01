<?php
$con=mysqli_connect("localhost","root","","db_school");
///reqipireer id pour sumpimer tout element dans sette id 
$id=$_GET['id'];
$sql="DELETE FROM tb_ensegnient where id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    echo'<script type = "text/javascript">';
    echo'alert("Supretion terminer");';
    echo'window.location.href = "listeensegniant.php" ';
    echo'</script>';
}

?>