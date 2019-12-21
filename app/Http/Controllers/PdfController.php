<?php

namespace App\Http\Controllers;

use PDF;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $pdf = PDF::loadView('pdfView');
        return $pdf->download('pdfView.pdf');
    }
}
