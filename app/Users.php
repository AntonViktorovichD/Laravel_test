<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   /**
    * Получить запись с номером телефона пользователя.
    */
   public function phone()
   {
      return $this->hasOne('App\Phone');
   }
}