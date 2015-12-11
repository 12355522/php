<?php
/*
  php code to create pdf file using fpdf
  download the fpdf lib from http://fpdf.org
*/

//import pdf

require('fpdf/fpdf.php');

//instantiate the class
$pdf=new FPDF();

//** 1. setting files **/
//call first function to add page may be single page
$pdf->AddPage();

//set font for text
//syntax SetFont(font familly, style(ie; B,I,U) ,font size);
$pdf->SetFont("Arail","B","20");
//display content
// synctax Cell(width,height,content,border,boolean(0=append/1=new line),align);
$pdf->Cell(0,20,"Hello...",1,1,"C");

//if you have multiple lines u can call write(height,content) instead of cell()
$pdf->write(5,"text something...");

//insert image 
$pdf->Image("abc.jpg");
//
$pdf->SetXY(100,100);
$pdf->Cell(0,20,"Hello...",1,1,"C");
//call output function
$pdf->Output("123.pdf");
//parameter file name->123.pdf to write on disk, or left it blank if you want open file in browser.


?>
