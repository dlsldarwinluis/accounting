<?php
//============================================================+
// File name   : singlebudgetransaction.php
// 
// Author: Darwin Sanchez
//============================================================+

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Darwin Luis M. Sanchez');
$pdf->SetTitle('IT3AHCTS: Accounting and Finance Department');
$pdf->SetSubject('Single Transaction');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

//set some language-dependent strings
$pdf->setLanguageArray($l); 

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();
// print a line using Cell()
$pdf->Cell(0, 12, 'Budget Request Transaction', 0, 1, 'L');

// -----------------------------------------------------------------------------

require("include/connect.php");
// -----------------------------------------------------------------------------

// Set some content to print
$tbl_header = '<table border="1" cellpadding="2" align="center">';

$tbl_footer = '</table>';
$tbl ='';
$id = $_POST["requestid"];

$result = mysqli_query($con, "SELECT * FROM requestbudget WHERE requestid='$id' AND requeststatus='APPROVED'");
$count = mysqli_num_rows($result);
if($count != 0){
    while($row = mysqli_fetch_assoc($result)){
	 $id= $row['requestid'];
	 $name = $row['requestname'];
	 $department = $row['requestdepartment'];
	 $position = $row['requestposition'];
	 $amount = $row['requestamount'];
     $reason = $row['requestreason'];
     $status = $row['requeststatus'];
	 
	 $tbl .= '<tr><td>' . "Request ID" . '</td><td width="190">' . $id . '</td></tr>' . 
     '<tr><td>' . "Name" . '</td><td width="190">' . $name . '</td></tr>' . 
     '<tr><td>' . "Department" . '</td><td width="190">' . $department . '</td></tr>' . 
     '<tr><td>' . "Position" . '</td><td width="190">' . $position . '</td></tr>' . 
     '<tr><td>' . "Amount" . '</td><td width="190">' . $amount . '</td></tr>' . 
     '<tr><td>' . "Reason" . '</td><td width="190">' . $reason . '</td></tr>' .
     '<tr><td>' . "Status" . '</td><td width="190">' . $status . '</td></tr>' . 
     '<tr><td rowspan="2">' . "SIGNATURE:" . '</td></tr>';
    }
}
else{
    ?>
    <script>
        alert("Your loan is not yet approved! Wait for further assessment!");
        window.location.href = '/it3ahcts/request-budget/request-history.php';
    </script>
    <?php
}

// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl .  $tbl_footer, true, false, false, false, '');



// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('budgettransaction.pdf', 'I');

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
