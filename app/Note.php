<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'body', 'page_id'];

    public function page()
    {
      return $this->belongsTo(Page::class);
    }

    // the relantion with the users
    public function user(){
      return $this->belongsTo(User::class);
    }
}
