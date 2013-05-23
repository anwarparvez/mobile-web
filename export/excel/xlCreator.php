<?php

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';


// Create new PHPExcel object

$objPHPExcel = new PHPExcel();

// Set document properties

$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
        ->setLastModifiedBy("Maarten Balliauw")
        ->setTitle("PHPExcel Test Document")
        ->setSubject("PHPExcel Test Document")
        ->setDescription("Test document for PHPExcel, generated using PHP classes.")
        ->setKeywords("office PHPExcel php")
        ->setCategory("Test result file");

//This page will show all database information. It will be called before the input fields
require_once('../include/database.php');
$result = $database->query("SELECT * FROM halifax");


// Add some data
$i = 2;
// For bold
$objPHPExcel->getActiveSheet()->getStyle("A1:B1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("C1:D1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("E1:F1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("G1:H1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("I1:J1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("K1:L1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("M1:N1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("O1:P1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("Q1:R1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("S1:T1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("U1:V1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle("W1:X1")->getFont()->setBold(true);

//cell size
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);

//Header
$objPHPExcel->getActiveSheet()->setCellValue('A1', "Project status")
        ->setCellValue('B1', "Originator")
        ->setCellValue('C1', "Originator Email")
        ->setCellValue('D1', "Project Name")
        ->setCellValue('E1', "Site Address")
        ->setCellValue('F1', "Project Description")
        ->setCellValue('G1', "Suburb")
        ->setCellValue('H1', "State")
        ->setCellValue('I1', "Postcode")
        ->setCellValue('J1', "Source")
        ->setCellValue('K1', "Segment")
        ->setCellValue('L1', "Follow up date")
        ->setCellValue('M1', "Est. project run (mths)")
        ->setCellValue('N1', "Est. Delivery")
        ->setCellValue('O1', "Category")
        ->setCellValue('P1', "Project Types")
        ->setCellValue('Q1', "Project Area")
        ->setCellValue('R1', "Cost per m2")
        ->setCellValue('S1', "Estimated value $")
        ->setCellValue('T1', "Product")
        ->setCellValue('U1', "Colour")
        ->setCellValue('V1', "Finish")
        ->setCellValue('W1', "Remarks")
        ->setCellValue('X1', "Job Created");

while ($row = mysql_fetch_array($result)) {
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $row['project_status'])
            ->setCellValue('B' . $i, $row['originator'])
            ->setCellValue('C' . $i, $row['originator_email'])
            ->setCellValue('D' . $i, $row['project_name'])
            ->setCellValue('E' . $i, $row['site_address'])
            ->setCellValue('F' . $i, $row['project_description'])
            ->setCellValue('G' . $i, $row['suburb'])
            ->setCellValue('H' . $i, $row['state'])
            ->setCellValue('I' . $i, $row['postcode'])
            ->setCellValue('J' . $i, $row['source'])
            ->setCellValue('K' . $i, $row['segment'])
            ->setCellValue('L' . $i, $row['follow_up_date'])
            ->setCellValue('M' . $i, $row['est_project_run'])
            ->setCellValue('N' . $i, $row['est_delivery'])
            ->setCellValue('O' . $i, $row['category'])
            ->setCellValue('P' . $i, $row['type'])
            ->setCellValue('Q' . $i, $row['project_area'])
            ->setCellValue('R' . $i, $row['cost_per_m2'])
            ->setCellValue('S' . $i, $row['estimated_value'])
            ->setCellValue('T' . $i, $row['product'])
            ->setCellValue('U' . $i, $row['colour'])
            ->setCellValue('V' . $i, $row['finish'])
            ->setCellValue('W' . $i, $row['remarks'])
            ->setCellValue('X' . $i, $row['job_entered']);
    $i++;
}

// Rename worksheet

$objPHPExcel->getActiveSheet()->setTitle('Halifax');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('../excel/xlfile/halifax.xls');

echo '<script type="text/javascript">
document.location="../excel/xlfile/halifax.xls";
</script>';
?>