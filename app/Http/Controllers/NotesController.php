<?php

namespace App\Http\Controllers;

use App\Page;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{

    public function store(Request $request, Page $page)
    {

      /* one way of saving data
      $note = new Note;

      $note->title = $request->title;
      $note->body = $request->body;

      $page->notes()->save($note);
      */

      $page->addNote(
        new Note($request->all())
      );

      return back();


    }
}
