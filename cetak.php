<?php
include('config.php');
require('fpdf/fpdf.php'); // Ensure this path is correct

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
$pdf->Cell(192, 10, 'Rating List', 1, 1, 'C');

// Set the header for the table
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(48, 10, 'User', 1);
$pdf->Cell(48, 10, 'Ulasan', 1);
$pdf->Cell(48, 10, 'Kategori', 1);
$pdf->Cell(48, 10, 'Rating', 1);
$pdf->Ln();

// Add data to the table
$pdf->SetFont('Arial', '', 10);

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(48, 10, htmlspecialchars($row['user']), 1);
    
    // Store the current X and Y position
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    
    // Draw the MultiCell for the 'ulasan' column
    $pdf->MultiCell(48, 10, htmlspecialchars($row['ulasan']), 1);
    
    // Calculate the height of the MultiCell
    $multiCellHeight = $pdf->GetY() - $y;
    
    // Draw the remaining cells of the row
    $pdf->SetXY($x + 48, $y);
    $pdf->Cell(48, $multiCellHeight, htmlspecialchars($row['kategori']), 1);
    $pdf->Cell(48, $multiCellHeight, htmlspecialchars($row['rating']), 1);
    $pdf->Ln($multiCellHeight);
}

// Output the PDF
$pdf->Output();
?>