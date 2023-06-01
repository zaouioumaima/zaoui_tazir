<?php 
  require ("fpdf/fpdf.php");

  require "config.php"; 

  //customer and invoice details
  $info=[
    "nom"=>"",
    "prenom"=>",",
    "ms"=>"",
    "ref"=>"",
    "dateojorduit"=>"",
    "typedossier"=>"",
    
  ];
  
  //Select Invoice Details From Database
 
  $sql="select * from borduro where SID='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  $row=$res->fetch_assoc();
	  

	 

	  $info=[
      "prenom"=>$row["prenom"],
      "typedossier"=>$row["typedossier"],
      "ms"=>$row["ms"],
      "nom"=>$row["nom"],
      "dateojorduit"=>date("d-m-Y",strtotime($row["dateojorduit"])),
      "ref"=>$row["ref"],
	  ];
  }
  //invoice Products
  $products_info=[];
  
  //Select Invoice Product Details From Database
  $sql="select * from borduro_document where SID='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  while($row=$res->fetch_assoc()){
		   $products_info[]=[
			"document"=>$row["document"],
			"nombre"=>$row["nombre"],
	
			
		   ];
	  }
  }
  
  class PDF extends FPDF
  {
    function Header(){
      
      //Display Company Info
   
     
      
      //Display INVOICE text
 // Insert a logo in the top-left corner at 300 dpi
 $this->Image('bor.png', 0, 0, 290);

      
      //Display Horizontal line
  
    }
    
    function body($info,$products_info){
      
      //Billing Details
      $this->SetY(55);
      $this->SetX(10);
      $this->SetFont('Arial','B',11);
      $this->Cell(5,10,"Departement : L'informatique ",0,1);
      $this->SetX(120);
      $this->SetFont('Arial','B',17);
      $this->Cell(0,15,"* Bordereau d'envoi *",0,500);

      $this->SetX(10);
    
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,"Ref:Dpt.info.pg." .$info["ref"]  );
      
      $this->SetX(10);
      $this->SetY(85);
      $this->Cell(10,20,"A Monsieur:" .$info["ms"]  );
      $this->SetX(10);
      $this->SetY(110);
      $this->SetFont('Arial','B',12);
      $this->Cell(10,7,"Vous trouverez avec ce tableau les documents suivants : " );
      $this->SetY(150);
      $this->SetX(185);
      $this->Cell(215,90, "Le candidat:  "   ); 
      $this->SetY(155);
      $this->SetX(190);
      $this->Cell(150,100,$info["nom"],0,1);
      $this->SetY(155);
      $this->SetX(210);
      $this->Cell(150,100,$info["prenom"],0,1);
      $this->SetX(10);
      $this->SetY(370);
      $this->SetFont('Arial','B',12);
      $this->Cell(10,7,"Annaba a: ".$info["dateojorduit"]   );
      $this->SetX(20);
      $this->SetY(130);
      $this->SetFont('Arial','B',12);
      $this->Cell(20,7,"*: ".$info["typedossier"] );
      //Display Invoice no
 
      $this->SetY(120);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(120,9,"Les documents",1,0,"C");
      $this->Cell(50,9,"Nombre",1,0,"C");
    
      $this->Cell(90,9,"Observations",1,1,"C"); 
      

     
      $this->SetFont('Arial','',10);
      foreach($products_info as $row){
      //Display table product rows
        $this->Cell(120,30,$row["document"],"LR",0);
     
        $this->Cell(50,30,$row["nombre"],"R",0,"C");
      
       
        $this->Cell(90,9,"",0,""  ); 
        
           
     
        $this->Cell(120,30,"","LR",0);
        $this->Cell(50,30,"","R",0,"C");   
         $this->Cell(90,9,"","",1,"");
     
      
    
       }
      //Display table empty rows
      for($i=0;$i<19-count($products_info);$i++)
      {
       
        $this->Cell(120,9,"","LR",0);
        $this->Cell(50,9,"","R",0,"R");
   $this->Cell(90,9,"","R",1,"R");
      
      }
        
      
      
      $this->SetFont('Arial','B',12);
      $this->Cell(260,0,"",1,0,"R");
  
      
     
      
  $this->SetY(365);
      
      $this->SetX(180);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,15,"Remettre un rapport journalier",0,500);
 
       

      
    }
 
      

      //set footer position
    
   
    
      
    }
      //Display Footer Text
    
      
    
    
  
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A3");
  $pdf->AddPage();
  $pdf->body($info,$products_info);
  $pdf->Output();
?>