<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   public function home(){
     $users = ['John', 'Andrew', 'Michael'];
     return view('pages.home')->with('users', $users);
   }
}
