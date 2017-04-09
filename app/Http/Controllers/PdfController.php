<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
// use App\Http\Request;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    //
    public function invoice()
        {
            $data = Book::all();
            $date = date('Y-m-d');
            $invoice = "2222";
            $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('invoice.pdf');
        }

        // public function getData()
        // {
        //     $data =  Book::find(2)[
        //         'id'      => '1' ,
        //         'description'   => 'some ramdom text',
        //         'price'   => '500',
        //         'total'     => '500'
        //     ];
        //     return $data;
        // }
}
