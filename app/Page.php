<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  /**
   *  Mass assignable attributes.
   */
  protected $fillable = [
      'title', 'slug', 'content',
  ];
}
