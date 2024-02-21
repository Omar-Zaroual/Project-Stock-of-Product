<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use PDF;

class PDFPrController extends Controller
{
    //
    public function downloadPDF()
    {
        $tableData = Produit::all(); // Fetch all records from the model

        $data = [
            'tableData' => $tableData
        ];

        $pdf = PDF::loadView('PDF.TablePr', $data);

        return $pdf->download('TablePr.pdf');
    }
}
