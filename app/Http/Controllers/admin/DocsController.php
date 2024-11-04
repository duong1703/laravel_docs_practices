<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getname = User::select('name')->get();
        $getposts = Posts::with('user')->get(); 
        return view('admin.pages.docs.list', ['data'=> $getname, 'post'=> $getposts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getname = User::select('name')->get();
        return view('admin.pages.docs.create', ['data'=> $getname]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_name'=> 'required|string|max:255',
            'categories_name'=> 'required|string|max:255',
            'content'=> 'required|string',
        ]);

        $users_id = auth()->user()->id;

        Posts::create([
            'title_name'=> $request->title_name,
            'content'=> $request->content,
            'categories_name' => $request->categories_name,
            'users_id' => $users_id,
        ]);

        return redirect()->route('docs.index')->with('success','Docs save successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletepost = Posts::findOrFail($id);
        $deletepost->delete();
        return redirect()->route('docs.index')->with('success','Docs deleted successfully!');
    }
}
