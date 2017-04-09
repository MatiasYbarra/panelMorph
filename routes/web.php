<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\User;
use App\Mail\Welcome;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('excel','ExcelController');
Route::get('import', 'ImportController@import');

Route::get('welcome', function(){
  //en este punto estoy definiendo un nuevo usuario
  //se puede tomar un usuario de la base de datos tambien
  $user = new \App\User([
    'name' => 'Maximo Ybarra',
    'email' => 'matyb02@hotmail.com',
  ]);
  //en este punto estoy pasando como parametro los datos del usuario
  Mail::to($user->email, $user->name)
  ->send(new Welcome($user));
});

// crear Pdf
Route::get('comprobante', 'PdfController@invoice');
Route::get('crear_comprobante', 'PdfController@crear_comprobante');
