<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = ['title', 'content', 'user_id'];

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

    // The relantion with the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
