<?php

namespace App\Http\Controllers;

use Request;
use App\create_table_import_by_air;
use App\Http\Requests;
USE Carbon\Carbon;
class import_by_air_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index()
    {
        $row=create_table_import_by_air::all();
        return view('page.import_by_air',compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row=create_table_import_by_air::all()->first();
        return view('page.create_import_by_air',compact('row'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        create_table_import_by_air::create(Request::all());
        return redirect('import/by_air');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=create_table_import_by_air::FindOrFail($id);
        return view('page.edit_import_by_air',compact('row'));
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
        create_table_import_by_air::FindOrFail($id)->update(Request::all());
        return redirect('import/by_air/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_get($id)
    {
        create_table_import_by_air::FindOrFail($id)->delete();
        return redirect('import/by_air/');

    }
}
