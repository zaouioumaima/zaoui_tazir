<?php
$con=mysqli_connect("localhost","root","","db_school");
///reqipireer id pour sumpimer tout element dans sette id 
$SID=$_GET['SID'];
$sql="DELETE FROM prisoncharg where SID='$SID'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    echo'<script type = "text/javascript">';
    echo'alert("Supretion terminer");';
    echo'window.location.href = "listeprsoncharge.php" ';
    echo'</script>';
}

?>