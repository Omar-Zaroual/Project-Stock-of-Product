<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historiqueert;
use PDF;

class PDFHteController extends Controller
{
    //
    public function downloadPDF()
    {
        $tableData = Historiqueert ::all(); // Fetch all records from the model

        $data = [
            'tableData' => $tableData
        ];

        $pdf = PDF::loadView('PDF.TableHte', $data);

        return $pdf->download('TableHte.pdf');
    }
}
