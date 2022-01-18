<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class Test extends Controller
{
   public function showOne($id)
   {
      $pages = [
         1 => 'страница 1',
         2 => 'страница 2',
         3 => 'страница 3',
         4 => 'страница 4',
         5 => 'страница 5',
      ];
      $search_array = $pages;
      if (array_key_exists($id, $search_array)) {
         return $id;
      } else {
         echo "no";
      }
   }
}