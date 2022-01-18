<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller
{
   public function showOne($id)
   {
      return $id;
   }
}