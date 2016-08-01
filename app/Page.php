<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = ['title', 'content'];

    // Notes
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    // Add note
    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
