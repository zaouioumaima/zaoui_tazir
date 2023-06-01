<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <title>PhDooc</title>
    <link rel="shortcut icon" type="image/png" href="img/logo1.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script>
      // You can also use "$(window).load(function() {"
        $(function () {
    
          // Slideshow 1
          $("#slider1").responsiveSlides({
            maxwidth: 1600,
            speed: 600
          });
    });
    </script>

<script src="https://kit.fontawesome.com/0c03620f7c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <style>
@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-600px * 5));
  }
}

.slider {

  height: 400px;
  margin: 3px;
  overflow: hidden;
  position: relative;
  width: 1600px;
}

.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  animation: scroll 30s linear infinite;
  display: flex;
  width: calc(50px * 14);
}
.slider .slide {
  height: 400px;
  width: 700px;
}
.gris{
	
	background-color: #e5e5e5;
	height: 900px;

}

.box {
		display: flex;
		justify-content: start;
		align-items: center;
		height: 30px;
		
	}

.thead1{
	color: #fff;
	background-color: #f2512033;
	border-style: solid;
	border-color: inherit;
	background: linear-gradient(190.6deg, #594d4a5c, #640d15f2);
	height: 55px;
	vertical-align:middle;
}
.tbody1{
	border-color:black;
	vertical-align: bottom;	
}

.table.table-striped{

	vertical-align:middle ;
}
.c{
  display: flex;
}
.grid{
	
	background-color: #263043;
    padding: 50px;
  }
  .grid2{

  background: linear-gradient(59deg,#32476e , #cbdaf7);
    background-color: #8dace3;
}

  a.nav-link.active.nvla {
    background-color: #111c30;
}

.col-sm-3.card.cardi{background-color: #f5f1f1 ;color:black;margin-left : 20px;margin-right : 20px;
	border:0;-webkit-box-shadow: 0 10px 20px 0 rgb(99 82 82 / 5%);box-shadow: 0 10px 20px 0 #41464b;
	padding: 20px;
	margin-bottom: 20px;
}


.nav-link{
    color: #fff;
    
    margin-left: 2px;
    margin-right: 2px;
}
.table{

 -webkit-box-shadow:0 10px 20px 0 rgba(0,0,0,.05);
 box-shadow:0 10px 20px 0 rgba(4, 4, 4, 0.28);

	 background-color: #fff;

	 border-radius: 0 rem;
	 padding: 5px;
	 margin: 15px;
}




header{
  background-color: #263043;
  display: flex;
}

.col{
	border :solid silver;
	
}

.white{
	background-color: white;
	height: 70px;

}
.card {
	border:0;
	-webkit-box-shadow:0 10px 20px 0 rgba(0,0,0,.05);
	box-shadow:0 10px 20px 0 rgba(4, 4, 4, 0.28);
   }

.goss{
	background-color: #e5e5e5
}
.search{
margin-top: 20px;
margin-bottom:20px;
}
.form-group{
	padding-top:15px;
	margin :5px;
}


.navbar {
	
    box-shadow: 0 10px 20px 0 rgba(6, 6, 6, 0.17);
    padding-top: .5625rem;
}

.navbar{

	background: linear-gradient(59deg, #d3d9e4, #a6676df2);

}



.fin{

  display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0px;
    height: 200px;

 

}
.img{
  margin: px 30px;
}
.contact{
  display: flex;
 justify-content: space-between;
  align-items: center;
  margin: 10px;
  margin: 100px;
}

.c{
  display: list-item;
}
.btn-primary {
    color: #fff;
    background: linear-gradient(59deg,#32476e , #cbdaf7);
    background-color: #8dace3;
    border-color: #8dace3;
}
.row{
  display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -25px;
    margin-left: -15px;
}
</style>
  </head>
  <body><div class="bodye">
   <div class="">
    <header >
     
          
          <img src="img/logo.png" class="img" alt="" width="95" height="80">
    
        
    
        
      </header>
      </div>
   

      <div class="b-example-divider">
        <div class="row justify-content-center">

          <div class="slider">
            <div class="slide-track">
           

              <div class="slide">
                <img src="img/img.PNG" height="400" width="1000" alt="" />
              </div>


              <div class="slide">
                <img src="img/img1.PNG" height="400" width="750" alt="" />
              </div>
              <div class="slide">
                <img src="img/img2.PNG" height="400" width="850" alt="" />
              </div>
              <div class="slide">
                <img src="img/img3.PNG" height="400" width="850" alt="" />
              </div>
              <div class="slide">
                <img src="img/img4.PNG" height="400" width="850" alt="" />
              </div>
              <div class="slide">
                <img src="img/img5.PNG" height="400" width="850" alt="" />
              </div>
              <div class="slide">
                <img src="img/img6.PNG" height="400" width="1050" alt="" />
              </div>
             
            </div>
          </div>

        
         
        </div>
     

      

          <div class="row justify-content-center grid">
 
            <div class="col-sm-3 card cardi" style="width: 250px;">


            <div class="row justify-content-center">
            	<div class="col-sm-3 image">
                <img src="img/admin.PNG" alt="créer" width="70" height="70">
              </div>

            <div class="col-sm-7 user_title">
                <h3>Admin</h3>
              </div>
                
            </div>

              <div class="button_card">
              <p class="p_style">Espace Administrateur</p>
            </div>
              <div class="button"><span><a class="btn btn-primary"href="loginadmin.php">Click ici</a></span></div>
            
            </div>

            <div class="col-sm-3 card cardi" style="width: 250px;">


              <div class="row justify-content-center">
                <div class="col-sm-3 image">
                  <img src="img/ensegnient.PNG" alt="créer" width="70" height="70">
                </div>
  
              <div class="col-sm-7 user_title">
                  <h3>Enseignant</h3>
                </div>
                  
              </div>
  
                <div class="button_card">
                <p class="p_style">Espace Enseignant</p>
              </div>
                <div class="button"><span><a class="btn btn-primary" href="loginensegnient.php">Click ici</a></span></div>
              
              </div>


              <div class="col-sm-3 card cardi" style="width: 250px;">


                <div class="row justify-content-center">
                  <div class="col-sm-3 image">
                    <img src="img/etudiant.PNG" alt="créer" width="70" height="70">
                  </div>
    
                <div class="col-sm-7 user_title">
                    <h3>Etudiant</h3>
                  </div>
                    
                </div>
    
                  <div class="button_card">
                  <p class="p_style">Espace Etudiant</p>
                </div>
                  <div class="button"><span><a class="btn btn-primary nvla" href="loginetudiant.php">Click ici</a></span></div>
                
                </div>
            
            
              

   
               
                  

                
            
      
             
       



        </div>


        
      
     
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    </div>
     
     <div class="row justify-content-center grid2">
    
        <div class="container">
          <div class="fin">
            

            <div class="contact">
          
              <div class="footer-pad">
                <h4>CONTACTEZ-NOUS</h4>
                <ul class="list-unstyled">
                  <li><i class="fasfa-map-marker-alt"></i>Badji Mokhtar-Annaba University, B.P.12, Annaba, 23000 Algeria.</li>
                  <li><i class="fasfa-phone"></i>  Téléphone : +213 (0) 38 57 02 05</li>
                  <li><i class="fasfa-envelope"></i> Courriel :elearning@univ-annaba.dz</li>
           
                </ul>
              </div>
            </div>
   
            
            <div class="c">
              <h4>TROUVEZ-NOUS SUR</h4>
                  <ul class="footer-pad">
                   <li><a href="https://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="https://www.Linkedin.com" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                   <li><a href="https://twitter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="https://www.youtube.com" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                  </ul>				
          </div>
          </div>
        <div class="row">
          <div class="col-md-12 copy" style="margin-top: 10px;">
            <p class="text-center">All rights reserved © 2023 - CRSICT, Badji Mokhtar-Annaba University.</p>
          </div>
        </div>
      
      
        </div>
        </div>
      

     </div>
   
  </body>

</html>