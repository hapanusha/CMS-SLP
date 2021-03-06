<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$this->load->library('tcpdf/tcpdf');

$obj_pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "summary reports of offences by me";
$obj_pdf->SetTitle($title);
//$title = "PDF Report";
//   $obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
//$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 8);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->SetPrintHeader(false);
$obj_pdf->SetPrintFooter(false);
$obj_pdf->AddPage();

ob_start();
$i=0;
$item ='';
for ($k = 0; $k < count($offence_array); $k++) {
    $va = $offence_array[$k];


 $i++;


    $item .= '<tr style="font-weight:bold;" align="left">'
            .'<td>' . $i . '</td>'
            . '<td> ' . $offence_array[$k]['c_gn_complaint_reference_number'] . '</td>'
            . '<td>' . $offence_array[$k]['c_gn_placement_date'] . '</td>'
            . '<td>' . $offence_array[$k]['complaint_status'] . '</td>'
            . '<td>' . $offence_array[$k]['complaint_category'] . '</td>'
            . '<td>' . $offence_array[$k]['c_gn_complaint_user_type'] . '</td>'
            . '</tr>';
   

}
//print_r($province['0']['province']);
$item .= '<tr style="font-weight:bold;">' .
        '<td colspan="5" style="font-weight:bold;" align="right">No of offences : </td>' .
        '<td align="left">'.$i.'</td>' .
        '</tr>';


$content = '<label align="center" style="font-size:13px;"><strong>Sri Lanka Police -CMS</strong></label><br>' .
        '<br>' .
        
        '<label align="center" style="font-size:12px;">Summary Report of Offences</label><br><br>' .
//        
//        '<label align="left" style="font-size:9px;">Province:</label><br>' .
//        '<label align="left" style="font-size:9px;">District: </label><br>' .
//        '<label align="left" style="font-size:9px;">Division: </label><br>' .
//        '<label align="left" style="font-size:9px;">Police Station:</label><br>' .
//        '<label align="left" style="font-size:9px;">From : </label><br>' .
//        '<label align="left" style="font-size:9px;">To : </label><br><br><br>' .
        
        
        '<table border="0" style="width:100%; vertical-align:center;" cellspacing="0" cellpadding="5">' .
        '<tdead>' .
    
        '<tr>' .
        '<td align="left" width="15%"><b>From</b></td>' .
        '<td align="left" width="5%"><b>:</b></td>' .
        '<td align="left" width="30%"><b>'.$sdate.'</b></td>' .
        '<td align="center" width="10%"><b></b></td>' .
        '<td align="left" width="10%"><b>To</b></td>' .
        '<td align="left" width="5%"><b>:</b></td>' .
        '<td align="left" width="25%"><b>'.$edate.'</b></td>' .
        '</tr>' .
        
        '<tr>' .
        '<td align="left" width="15%"><b>Police Officer</b></td>' .
        '<td align="left" width="5%"><b>:</b></td>' .
        //'<td align="left" width="30%"><b>'.$ps['0']['ps_name'].'</b></td>' .
        '<td align="left" width="30%"><b>'.$_SESSION['po_name_with_initials'].'</b></td>' .
        '<td align="center" width="10%"><b></b></td>' .
        '<td align="left" width="10%"><b>Officer Number</b></td>' .
        '<td align="left" width="5%"><b>:</b></td>' .
        '<td align="left" width="25%"><b></b>'.$_SESSION['po_number'].'</td>' .
        '</tr>' .
        
//        '<tr>' .
//        '<td align="left" width="15%"><b>From</b></td>' .
//        '<td align="left" width="5%"><b>:</b></td>' .
//        '<td align="left" width="30%"><b>XXX</b></td>' .
//        '<td align="center" width="10%"><b></b></td>' .
//        '<td align="left" width="15%"><b>To</b></td>' .
//        '<td align="left" width="5%"><b>:</b></td>' .
//        '<td align="left" width="25%"><b>XXX</b></td>' .
//        '</tr>' .
        
     '</table><br><br>'.
        
        
        
        
        
        
        
        
        
        '<table border="0.5" style="width:100%; vertical-align:center;" cellspacing="0" cellpadding="5">' .
        '<tr>' .
        '<td align="center" width="30">S/N</td>' .
        '<td align="center"  width="90">Reference No.</td>' .
        '<td align="center">Received Date</td>' .
        '<td align="center">Status</td>' .
        '<td align="center">Complaint Category</td>' .
        '<td align="center">Received Type</td>' .
//        '<td align="center"><b></b></td>' .
        '</tr>' .

        '<tbody id="tbl_body">' .
        $item .
        '</tbody>' .
        '<tfoot>' .
        '<tr>' .
        '<td align="right" colspan="5"><b>Date :   </b></td>' .
        '<td align="left"><b>'.date('Y/m/d').'</b></td>' .
        '</tr>' .
        '<tr>' .
        '<td align="center" colspan="6"><b>This report is generated by the Complaint Management System of Sri Lanka Police</b></td>' .
//        '<td align="right"colspan="2"><b></b></td>' .
        '</tr>' .
        '</tfoot>' .
        '</table>';



//$image = base_url("img/studyworld_designandmedia.png");
//$obj_pdf->Image($image, 80, 15, 40, 15, 'png');

$obj_pdf->writeHTMLCell($w = 0, $h = 0, $x = 14, $y = 40, $content, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'L', $autopadding = true);

$obj_pdf->Output('Report.pdf', 'I');
?>