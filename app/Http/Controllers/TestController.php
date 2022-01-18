<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
   public function index()
   {
      $users = DB::table('cities')
         ->crossJoin('countries')
//         ->select('city_id', 'city_name', 'city_country_id', 'country_name')
         ->get();
      return view('test.user', ['users' => $users]);
//      var_dump($users);
   }
}

?>