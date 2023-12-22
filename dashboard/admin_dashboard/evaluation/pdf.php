<?php

if (isset($_POST['submit'])){
}
    require('../php/fpdf17/fpdf.php');
//db connection
$conn=mysqli_connect('localhost','root','','rubric');
    // $code=null;
    $id=$_POST['id'];
$dept=$_POST['dept'];
    
    $sql = 'SELECT * FROM  rubric ORDER BY project_id';
   

    $result = $conn->query($sql);

 

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
             //header



             $pdf = new FPDF('P', 'mm', 'A4');
             $pdf->AddPage();
         




            //  NED University of Engineering & Technology
            //  Department of Computer and Information Systems Engineering
            //  CS-406 Computer Engineering Project
            //  Grading of FYDP Proposal (7th/Fall Semester) (Weightage - 6%)
             









     $pdf->Ln(8);
     $pdf->Cell(26);
     $pdf->SetFont('Times','',14);
     $pdf->cell(70,10,'NED University of Engineering & Technology',0,0);
     $pdf->Cell(59	,5,'',0,1);//end of line

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
     $pdf->cell(70,10,' Grading of FYDP Proposal (7th/Fall Semester) (Weightage - 6%)',0,0);
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




      
    
    


    
    // $pdf->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
    // $pdf->Cell(50,5,'Words Here',1,0,'L',0);
    // $pdf->Cell(50,5,'Words Here',1,0,'L',0);
    // $pdf->Cell(40,5,'Words Here','LR',1,'C',0);  // cell with left and right borders
    // $pdf->Cell(50,5,'[ x ] abc',1,0,'L',0);
    // $pdf->Cell(50,5,'[ x ] checkbox1',1,0,'L',0);
    // $pdf->Cell(40,5,'','LBR',1,'L',0);   // empty cell with left,bottom, and right borders
    // $pdf->Cell(50,5,'[ x ] def',1,0,'L',0);
    // $pdf->Cell(50,5,'[ x ] checkbox2',1,0,'L',0);
    
    $pdfdoc = $pdf->Output("Bill.filename.pdf", "D");



?>











