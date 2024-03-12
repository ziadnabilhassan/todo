<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::all();
        return view("index",compact("todos"));  

    }
 
    public function show()
    {
        $todos=Todo::all();
        return view("search",compact("todos"));  

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "title"=>"required",
            "content"=>"required",
        ]);
        $todos=Todo::create([
            "title"=>$request->title,
            "content"=>$request->content,
        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $todos=Todo::find($id);
        return view("update")->with('todos',$todos);  

    }
    public function update(Request $request , $id)
    { 
        $this->validate($request,[
            "title"=>"required",
            "content"=>"required",
        ]);
        $todos = Todo::find($id);
        $todos->title=$request->title;
        $todos->content=$request->content;
        $todos->update();
        //$todos->update($request->all());
        return redirect()->back();

    }


    
    public function destroy($id)
    {
        $todos=Todo::findOrFail($id);
        $todos->delete();
         return back();
    }
}
