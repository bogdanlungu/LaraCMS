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
     * Form to add pages and upload files
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

                $fileName = $page->id . "." .  $request->file('file')->getClientOriginalExtension();

                /* Move the file in a temporary location */
                $request->file('file')->move(base_path() . '/public/temp/', $fileName);
                $theFile = base_path() . '/public/temp/' . $fileName;

                /* Check if the file is image */
                $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml'];
                $contentType = mime_content_type($theFile);

                /* Upload the file to the right location */
                if( in_array($contentType, $allowedMimeTypes) ){
                    $request->file('file')->move(base_path() . '/public/images/', $fileName);
                }else{
                    $request->file('file')->move(base_path() . '/public/upload/', $fileName);
                }

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
     * Delete a page and an uploaded file
     */
    public function deletePage($page)
    {
        $page = Page::find($page);
        $fileName = $page->id . "." ."txt";
        $fileName = base_path() . '/public/upload/' . $fileName;
        $page->delete();

        if(file_exists($fileName)){
            unlink($fileName);
        }

        return view('admin.deleteConfirm')->with('page', $page);
    }
}
