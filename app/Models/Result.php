<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
  protected $fillable = [
    'name','yes','no','result'
  ];

  protected $hidden = [

  ];
}
