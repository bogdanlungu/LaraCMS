<?php

namespace App\Http\Controllers;

// use DB;
use App\Page;  // Eloquent Model
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $pages = Page::all(); // for Eloquent

     // $pages = DB::table('pages')->get();   // for DB

     return view('pages.home')->with('pages', $pages);
    }


    public function show(Page $page)
    {   // use type-hint

     // $page =  Page::find($page);   // get the $page value without type-hint

     /* return without a view */
     // return $page; // it will be automatically converted to json by Laravel

     return view('pages.show', compact('page'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $page = new Page;

        $page->title = $request->title;
        $page->content = $request->content;
        $page->user_id = 1;

        $page->save();

        return back();
    }
}
