<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import()
    {
    	Excel::load('books3.csv', function($reader) {

        $reader->each(function($fila){
          $userTitle=Book::where('title',$fila->title)->first();
          if (count($userTitle)==0) {
            $publication=new Book;
            $publication->title= $fila->title;
            $publication->author= $fila->author;
            $publication->year= $fila->year;
            $publication->save();
          }

        });
     	// 	foreach ($result as $key => $book) {
     	// 		Book::create([
     	// 			'title' => $book->title,
     	// 			'author' =>$book->author,
     	// 			'year' =>$book->publication_year
     	// 		]);
      	// 	}
		});
		return Book::all();
    }
}
