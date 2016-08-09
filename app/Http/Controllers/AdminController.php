<?php

namespace App\Http\Controllers;

use App\Page;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }


    /**
     * Form to add pages
     */
    public function addPage(Request $request)
    {

        if ($request->isMethod('post')) {

            $this->validate($request, [
                'title' => 'required',
                'content' => 'required|min:10',
            ]);

            $page = new Page;

            $page->title = $request->title;
            $page->content = $request->content;
            $page->user_id = auth()->user()->name;

            $page->save();

            $success = "The page is saved";

            return view('admin.addPage')->with('success', $success);

        }else{

            $success = 0;
            return view('admin.addPage')->with('success', $success);

        }
    }


    /**
     * View pages
     */
    public function viewPages()
    {
        $pages = Page::all();
        return view('admin.viewPages')->with('pages', $pages);
    }
}
