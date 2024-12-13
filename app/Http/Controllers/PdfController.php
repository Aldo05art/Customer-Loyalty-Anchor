<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function pdf()
    {
        $sales = Sales::all();
        $transaksi = Transaksi::all();

        $pdf = Pdf::loadView('layouts.pdf.cetak-pdf', compact('sales', 'transaksi'));

        return $pdf->download('reports.pdf');
    }
}
