<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Publications;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class ExcelController extends Controller
{
  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

    Excel::create('Listado de Publiaciones', function($excel) {

        $excel->sheet('Publicaciones sheet', function($sheet) {

            $publications = Publications::select('id','name','serial','description','quantity')->get();
            $sheet->fromArray($publications);
            // $sheet->setOrientation('landscape');

        });

    })->export('xls');


	}
}
