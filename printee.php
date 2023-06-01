<?php 
  require ("fpdf/fpdf.php");

  require "config.php"; 

  //customer and invoice details
  $info=[
    "nom"=>"",
    "prenom"=>"",
  "date_soutenance"=>"",
    "ensegniqnt1"=>"",
  ];
  
  //Select Invoice Details From Database
 
  $sql="select * from prisoncharg where SID='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  $row=$res->fetch_assoc();
	  

	 

	  $info=[
      "prenom"=>$row["prenom"],
   
      "nom"=>$row["nom"],
      "type_caution"=>$row["type_caution"],
      "date_soutenance"=>date("d-m-Y",strtotime($row["date_soutenance"])),
      "ensegniqnt1"=>$row["ensegniqnt1"],
      "ensegniqnt1"=>$row["ensegniqnt1"],  
        "ensegniqnt2"=>$row["ensegniqnt2"],  
        "ensegniqnt3"=>$row["ensegniqnt3"],  
          "ensegniqnt4"=>$row["ensegniqnt4"], 
             "ensegniqnt5"=>$row["ensegniqnt5"],
             "numero1"=>$row["numero1"],
             "numero2"=>$row["numero2"],
             "numero3"=>$row["numero3"],
             "numero4"=>$row["numero4"],
             "numero5"=>$row["numero5"],
             "categorie1"=>$row["categorie1"],  
             "categorie2"=>$row["categorie2"], 
              "categorie3"=>$row["categorie3"], 
               "categorie4"=>$row["categorie4"], 
                "categorie5"=>$row["categorie5"],
                "lieu_travaile1"=>$row["lieu_travaile1"],
                "lieu_travaile2"=>$row["lieu_travaile2"], 
                 "lieu_travaile3"=>$row["lieu_travaile3"],
                   "lieu_travaile4"=>$row["lieu_travaile4"],  
                   "lieu_travaile5"=>$row["lieu_travaile5"],
	  ];
  }
  //invoice Products
  $products_info=[];
  
  //Select Invoice Product Details From Database
  
  
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
      $this->Cell(0,15,"* Prisoncharge *",0,500);

    
      $this->SetX(10);
      $this->SetY(110);
      $this->SetFont('Arial','B',12);
      $this->Cell(10,7,"1)  ".$info["type_caution"] );
     
 
      $this->SetX(10);
      $this->SetY(350);
      $this->SetFont('Arial','B',12);
      $this->Cell(10,7,"Chef du Departement    "  );
      $this->SetY(130);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["numero1"] );
      $this->SetY(150);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["numero3"] );
      $this->SetY(140);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["numero2"] );
      $this->SetY(158);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["numero4"] );
      $this->SetY(168);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["numero5"] );
      $this->SetY(130);
      $this->SetX(40);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["ensegniqnt1"] );
      $this->SetY(150);
      $this->SetX(40);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["ensegniqnt2"] );
      $this->SetY(140);
      $this->SetX(40);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["ensegniqnt3"] );
      $this->SetY(158);
      $this->SetX(40);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["ensegniqnt4"] );
      $this->SetY(168);
      $this->SetX(40);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["ensegniqnt5"] );

      $this->SetY(130);
      $this->SetX(120);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["categorie1"] );
      $this->SetY(150);
      $this->SetX(120);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["categorie2"] );
      $this->SetY(140);
      $this->SetX(120);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["categorie3"] );
      $this->SetY(158);
      $this->SetX(120);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["categorie4"] );
      $this->SetY(168);
      $this->SetX(120);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["categorie5"] );

      $this->SetY(130);
      $this->SetX(170);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["lieu_travaile1"] );
      $this->SetY(150);
      $this->SetX(170);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["lieu_travaile2"] );
      $this->SetY(140);
      $this->SetX(170);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["lieu_travaile3"] );
      $this->SetY(158);
      $this->SetX(170);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["lieu_travaile4"] );
      $this->SetY(168);
      $this->SetX(170);
      $this->SetFont('Arial','',12);
      $this->Cell(10,7,$info["lieu_travaile5"] );
  
   

      $this->SetY(120);
      $this->SetX(10);

      $this->SetFont('Arial','B',12);
      $this->Cell(30,9,"Numerau",1,0,"C");
      $this->Cell(80,9,"Nom et Prenom",1,0,"C");
      $this->Cell(50,9,"Categorie",1,0,"C");
    
      $this->Cell(95,9,"Etablissement",1,0,"C"); 
         
      $this->Cell(30,9,"La date",1,1,"C"); 

     
/*60طول جدول*/
     
      $this->SetFont('Arial','',10);
      $this->Cell(30,9,"","LR",0);
        $this->Cell(80,9,"","LR",0);
     
        $this->Cell(50,9,"","R",0,"LR");
        $this->Cell(95,9,"","R",0,"LR");       
         $this->Cell(30,9,$info["date_soutenance"],"R",0,"LR");
       
        $this->Cell(100,9,"",0,""  ); 
        
           
        $this->Cell(30,30,"",1,0,"LR");
        $this->Cell(80,30,"",1,0,"R");
        $this->Cell(50,30,"",1,0,"R");   
         $this->Cell(95,30,"","R");
        $this->Cell(30,30,"","R",0);   
         $this->Cell(100,9,"","",1,"");
     
      
    
       
      //Display table empty rows
      for($i=0;$i<4-count($products_info);$i++)
      {
       
        $this->Cell(30,9,"",1,0,"LR");
        $this->Cell(80,9,"",1,0,"LR"); 
   $this->Cell(50,9,"",1,0,"LR");
   $this->Cell(95,9,"",1,0,"LR");

   $this->Cell(30,9,"","R",0,"LR");
   $this->Cell(100,9,"","R",1,"LR");
      }
        

      
      $this->SetFont('Arial','B',12);
      $this->Cell(285,0,"",1,0,"R");
 
  
     
      $this->SetY(200);
      $this->SetX(10);
      $this->Cell(10,7,"Cadre de parrainage : Discussion de la these de doctorat de M. (H) :" );
      $this->SetFont('Arial','',12);
      $this->SetY(153);
      $this->SetX(147);
      $this->Cell(150,100,$info["nom"],0,1);
      $this->SetY(345);
      $this->SetY(153);
      $this->SetX(170);
      $this->Cell(150,100,$info["prenom"],0,1);
      $this->SetY(345);
      
      $this->SetX(240);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,15,"  Doyen du College",0,500);
 
         $this->SetY(350);
      $this->SetX(100);
      $this->SetFont('Arial','B',11);
      $this->Cell(5,10,"Vice-doyen charge des etudes pour le post-diplome ",0,1);
      
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