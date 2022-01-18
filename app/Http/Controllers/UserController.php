<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function index()
   {
      $users = DB::select('select * from users');
      $usr = '
         <style>
            table {
            border-collapse: collapse;
            border: 1px solid grey;
            }
            th, td {
            padding: 5px;
            border: 1px solid grey;
            }
        </style>
        <table><tr><th>id</th><th>name</th><th>surname</th><th>age</th></tr>';
      foreach ($users as $user) {
         $usr .= '<tr><td>' . $user->id . '</td><td>' . $user->name . '</td><td>' . $user->surname . '</td><td>' . $user->age . '</td></tr>';
      }
      return $usr .= '</table>';
   }
}