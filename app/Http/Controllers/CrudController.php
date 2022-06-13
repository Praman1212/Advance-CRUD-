<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CRUD;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
        // if(Auth::check()){
        //     return view('home');
        // }
  
        // return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new CRUD;
        $category->category_id = $request->category_id;
        $category->category_name = $request->category_name;
        $category->order = $request->order;
        $category->save();
        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $category = CRUD::all();
        return view('show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $crud = CRUD::find($id);
        return view('edit',compact('crud'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'category_name' => 'required',
            'order' => 'required',
            ]);
        $crud = CRUD::find($id);
        $crud->category_id = $request->category_id;
        $crud->category_name = $request->category_name;
        $crud->order = $request->order;
        $crud->save();
        return redirect()->route('home-page');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $crud->delete();
        // return redirect('/');
        $category = CRUD::find($id);
        $category->delete();

        return redirect('/home');
    }
}
