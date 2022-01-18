<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestTestController extends Controller
{
//   public function form(Request $request)
//   {
//      $request->flash(); // сохраняем ввод в сессию
//      return view('test.form');
//   }

   public function form(Request $request)
   {
      cookie('name', 'value', 1);
      return redirect()->route('info');
   }

   public function info(Request $request)
   {
      $value = $request->cookie('name');
      return $value;
   }
}

?>