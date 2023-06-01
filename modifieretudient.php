

<!DOCTYPE html>
<html>
<head>
    <title>PhDooc</title>
    <link rel="shortcut icon" type="image/png" href="img/logo1.png"/>
    
<style>    
  .container {
  width: 600px;
  height: 1000px;
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
}.cree_compt{

color: #8dffdfbf;

display: block;
 margin: 4px 99PX;


font-size:1em;

}
 
</style>


</head> 
<body>
<?php
 $con=mysqli_connect("localhost","root","","db_school");
 if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="SELECT * from tb_etudient where id='$id'";
  $q=mysqli_query($con,$sql);
  $rows=mysqli_fetch_assoc($q);
  $nom=$rows['nom'];
  $prenom=$rows['prenom'];
  $email=$rows['email'];
  $wilaya=$rows['wilaya'];
  $numero_de_cart_de_etudiant=$rows['numero_de_cart_de_etudiant'];
  $departemant=$rows['departemant'];
  $universiter=$rows['universiter'];



 }

 
?>


<div class="container">
    <div class="login">
    <form action="methodemodifieretudiant.php?<?php if(isset($_GET['id'])){echo "id=modifier";}?>" class="" method="POST">
          <h1>Modifier</h1> 
          <input type="hidden" name="id" value="<?php echo $_GET['id'];?> ">
 
            



      <label><ion-icon name="person-circle-sharp"></ion-icon> NOM</label>
      <input type="text" name="nom"required="required" value="<?php echo $nom?>" >
      <label><ion-icon name="person-circle-sharp"></ion-icon> Prenom</label>
      <input type="text" name="prenom" required="required" value="<?php echo $prenom?>">
        
      <label><ion-icon name="location-sharp"></ion-icon> Wilaya</label>
          <input type="text" name="wilaya" required="required" value="<?php echo $wilaya?>">
     

      <label><ion-icon name="school-sharp"></ion-icon> universiter</label>
      <input type="text" name="universiter" required="required" value="<?php echo $universiter?>">
     
    <label><ion-icon name="school-sharp"></ion-icon>  departemant</label>
     <input type="text" name="departemant" required="required" value="<?php echo $departemant?>">
    
       <label><ion-icon name="stop-sharp"></ion-icon> Numero cart etudiant</label>
      <input type="text" name=" numero_de_cart_de_etudiant" required="required" value="<?php echo $numero_de_cart_de_etudiant?>">
     
    
     
       <label><ion-icon name="mail-sharp"></ion-icon> Email</label>
      <input type="email" name="email" required="required" value="<?php echo $email?>">
    

      
      
      
   
  
      
   
  <button  type="submit" name="modifier"  onclick="submitData();">Modifier</button>

 

       


 
    
      
   
  </form>

</div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script></html>