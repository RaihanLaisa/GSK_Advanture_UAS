<?php
include('config.php');
require('fpdf/fpdf.php'); // Ensure this path is correct

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
   exit;
}

// Fetch data from the database
$query = "SELECT * FROM user_rating";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}

// Create instance of FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Add a header
$pdf->Cell(0, 10, 'Rating List', 1, 1, 'C');

// Set the header for the table
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(60, 10, 'User', 1);
$pdf->Cell(60, 10, 'Kategori', 1);
$pdf->Cell(60, 10, 'Rating', 1);
$pdf->Ln();

// Add data to the table
$pdf->SetFont('Arial', '', 10);

while($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(60, 10, htmlspecialchars($row['user']), 1);
    $pdf->Cell(60, 10, htmlspecialchars($row['kategori']), 1);
    $pdf->Cell(60, 10, htmlspecialchars($row['rating']), 1);
    $pdf->Ln();
}

// Output the PDF
$pdf->Output();
?>
