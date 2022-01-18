<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $dateFormat = 'U';
   protected $table = 'posts';
   public $timestamps = false;
}
