<?php

namespace App\Http\Controllers;

use Auth;
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
     * Form to add pages and save the page
     */
    public function addPage(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'content' => 'required|min:10',
                'file' => 'required|file'
            ]);

            $page = new Page;

            $page->title = $request->title;
            $page->content = $request->content;
            $page->user_id = Auth::user()->id;

            if ($request->hasFile('file')) {

                $page->save();

                /* rename the file and move it to /upload */
                $fileName = $page->id . "." .  $request->file('file')->getClientOriginalExtension();
                $request->file('file')->move(base_path() . '/public/upload/', $fileName);

                $success = "The page was saved";
                return view('admin.addPage')->with('success', $success);
            } else {
                $success = "There was an error.";
                return view('admin.addPage')->with('success', $success);
            }
        } else {
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


    /**
     * Delete a page
     */
    public function deletePage($page)
    {
        $page = Page::find($page);
        $page->delete();
        return view('admin.deleteConfirm')->with('page', $page);
    }
}
