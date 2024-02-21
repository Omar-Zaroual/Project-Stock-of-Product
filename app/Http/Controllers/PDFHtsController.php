<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historiquesrt;
use PDF;

class PDFHtsController extends Controller
{
    //
    public function downloadPDF()
    {
        $tableData = Historiquesrt ::all(); // Fetch all records from the model

        $data = [
            'tableData' => $tableData
        ];

        $pdf = PDF::loadView('PDF.TableHts', $data);

        return $pdf->download('TableHts.pdf');
    }
}
