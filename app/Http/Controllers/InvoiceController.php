<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Invoice #12345',
            'date' => now()->format('d-m-Y'),
            'customer' => 'John Doe',
        ];

        $pdf = Pdf::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
