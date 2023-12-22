<?php

if (isset($_POST['pdf'])){
}
    require('fpdf17/fpdf.php');
//db connection
$conn=mysqli_connect('localhost','root','','rubric');
    $code=null;

    $batch=$_POST['batch'];
    $dept=$_POST['dept'];
    
    
    $sql  = "SELECT * FROM rubric where department='$dept' and batch='$batch'  ORDER BY project_id ";
    

    $result = $conn->query($sql);

 

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
             //header



             $pdf = new FPDF('P', 'mm', 'A4');
             $pdf->AddPage();
         

     $pdf->Ln(8);
 
     $pdf->Cell(26);
     $pdf->SetFont('Times','',14);
     $pdf->cell(70,10,'Department of Computer Science & Information System Engineering ',0,0);
     $pdf->Cell(59	,5,'',0,1);//end of line

     $pdf->Cell(56);
     $pdf->SetFont('Times','',14);
     $pdf->cell(70,10,'CS-406 Final Year Design Project ',0,0);
     $pdf->Cell(59	,5,'',0,1);//end of line


     $pdf->Cell(75);
     $pdf->SetFont('Times','',14);
     $pdf->cell(70,10,'Project List ',0,0);
     $pdf->Cell(59	,5,'',0,1);//end of line
     

     $pdf->Ln(20);


 

 
    $pdf->SetFont('Times','B',8);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(220,220,220);
    $pdf->Cell(20,10,'Project ID',0,0,'L',true);
    $pdf->Cell(25,10,'Project-Title',0,0,'C',true);
    $pdf->Cell(32,10,'Student Name',0,0,'C',true);
    $pdf->Cell(20,10,'Seat no ',0,0,'C',true);
    $pdf->Cell(18,10,'Batch',0,0,'C',true);
    $pdf->Cell(30,10,'Department',0,0,'C',true);
    $pdf->Cell(40,10,'Supervisor',0,0,'C',true);
    // $pdf->Cell(35,10,'INDUSTRY',0,0,'C',true);
    $pdf->Cell(59	,5,'',0,1);//end of line



    $arr = array();
    $sname = array();
    $seatno = array();
    $batch = array();
    $pid = array();
    $project_title = array();
    $spvsr = array();
    $dept = array();

    while($row = mysqli_fetch_assoc($result)) {
       
        array_push($pid, $row['project_id']);
        array_push($sname, $row['student_name']);
        array_push($seatno, $row['seat_no']);
        array_push($batch, $row['batch']);
        array_push($project_title, $row['fyp_title']);
        array_push($spvsr, $row['supervisor']);
        array_push($dept, $row['department']);



      if (!isset($arr[$row['project_id']])) {
                $arr[$row['project_id']]['rowspan'] = 0;
                $arr[$row['fyp_title']]['rowspan'] = 0;
                $arr[$row['supervisor']]['rowspan'] = 0;
            }



            $arr[$row['project_id']]['printed'] = 'no';
            $arr[$row['project_id']]['rowspan'] += 1;
  
            $arr[$row['fyp_title']]['printed'] = 'no';
            $arr[$row['fyp_title']]['rowspan'] += 1;
            
            $arr[$row['supervisor']]['printed'] = 'no';
            $arr[$row['supervisor']]['rowspan'] += 1;


    }

    // $pdf->SetFont('Times','',12);
    // $pdf->SetTextColor(140,140,140);
     //Cell( width, height ,string(tex), mixed border(0-none,1-framed), position(0,1,2), align(R,L,C), BACKGROUND(TRUE/FALSE), link)
     
 
 

     $pdf->Cell(35,10,'',0,0,'L');//rate
     $pdf->Cell(40,10,'',0,0,'L');//qty
     $pdf->Cell(40,10,'',0,0,'L');//amount
     $pdf->Cell(59	,5,'',0,1);//end of line
   

     for($i=0; $i < sizeof($sname); $i++) {
     
        $project_id = $pid[$i];
        $fyp = $project_title[$i];
        $supervisor=$spvsr[$i];
        # If this row is not printed then print.
        # and make the printed value to "yes", so that
        # next time it will not printed.

        // if ($arr[$fyp]['printed'] == 'no') {

        //     $pdf->Cell(30,10,$fyp,1,0, 'C' );
        //   $arr[$fyp]['printed'] = 'yes';
         
        //   $x = $pdf->GetX();
      
       
        // }
      











        if ($arr[$project_id]['printed'] == 'no') {
            
           
            // $pdf->SetX($x);
           
            $pdf->Cell(20,10,$project_id,1,0,'L',0);
            
            $arr[$project_id]['printed'] = 'yes';
            $x = $pdf->GetX();
            

            // $pdf->Cell(40,10,$fyp,1,0, 'C');
            // $arr[$fyp]['printed'] = 'yes';

          

        }
          

          




        //  $pdf->cell(32,10, $project_id,1,0,'' ) ;
         //  $pdf->Cell(59	,5,'',0,1);//end of line
       
        // }

        // if ($arr[$fyp]['printed'] == 'no') {

        //         $pdf->Cell(30,10,$fyp,1,0, 'C' );
        //       $arr[$fyp]['printed'] = 'yes';
             
        //       $x = $pdf->GetX();
          
           
        //     }
          
        $pdf->SetX($x);
       $pdf->Cell(25,10,$project_title[$i], 1,0, 'C');
      
       
        $pdf->Cell(32,10,$sname[$i], 1,0, 'C');
         
        $pdf->Cell(18,10,$seatno[$i], 1,0, 'C');
      
        $pdf->Cell(18,10,$batch[$i], 1,0, 'C');
        
        $pdf->Cell(30,10,$dept[$i], 1,0, 'C');
        $pdf->Cell(40,10,$spvsr[$i], 1,1, 'C');
        // $pdf->Cell(30,10,$supervisor,1,0, 'C' );
        // if ($arr[$supervisor]['printed'] == 'no') {


        //     $pdf->Cell(30,10,$supervisor,1,0, 'C');
        //     $arr[$supervisor]['printed'] = 'yes';
           
               
        // $pdf->SetX($x);
        


        // }

        // if ($arr[$supervisor]['printed'] == 'no') {
            
           
          
        //     $pdf->Cell(40,10,$supervisor,1,1, 'C');
 
        //     $arr[$supervisor]['printed'] = 'yes';
        //     $x = $pdf->GetX();

        // }








        // if ($arr[$supervisor]['printed'] == 'no') {

        //     $x = $pdf->GetX();
      
        //   $arr[$supervisor]['printed'] = 'yes';
         
        // //   $x = $pdf->GetX();
        // $pdf->SetX($x);
       
        // }




        // $pdf->SetX($x);
        // $pdf->Cell(30,10,$batch[$i], 1,1, 'C');
     
        
        // $pdf->cell(32,10, $sname[$i],1,0,'' ) ;
     
            
        // if ($arr[$fyp]['printed'] == 'no') {

        //     $pdf->Cell(40,10,$fyp,1,0, 'C');
        //   $arr[$fyp]['printed'] = 'yes';
         
    
        //  $pdf->cell(32,10, $project_id,1,0,'' ) ;  
        //  $pdf->Cell(59	,5,'',0,1);//end of line
       
        // }
      
    
    }


    
    // $pdf->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
    // $pdf->Cell(50,5,'Words Here',1,0,'L',0);
    // $pdf->Cell(50,5,'Words Here',1,0,'L',0);
    // $pdf->Cell(40,5,'Words Here','LR',1,'C',0);  // cell with left and right borders
    // $pdf->Cell(50,5,'[ x ] abc',1,0,'L',0);
    // $pdf->Cell(50,5,'[ x ] checkbox1',1,0,'L',0);
    // $pdf->Cell(40,5,'','LBR',1,'L',0);   // empty cell with left,bottom, and right borders
    // $pdf->Cell(50,5,'[ x ] def',1,0,'L',0);
    // $pdf->Cell(50,5,'[ x ] checkbox2',1,0,'L',0);
    
    $pdfdoc = $pdf->Output("Bill.filename.pdf", "I");



?>











