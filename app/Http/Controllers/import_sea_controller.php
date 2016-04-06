<?php

namespace App\Http\Controllers;

use Request;
use App\import_by_sea;
use App\Http\Requests;

class import_sea_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $row=import_by_sea::all();
        return view('page.import_by_sea',compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('page.create_import_sea',compact('row'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        import_by_sea::create(Request::all());
        return redirect('import/by_sea');
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
        $row=import_by_sea::FindOrFail($id);
        return view('page.edit_import_sea',compact('row'));
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
        import_by_sea::FindOrFail($id)->update(Request::all());
        return redirect('import/by_sea');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_get($id)
    {
        import_by_sea::FindOrFail($id)->delete();
        return redirect('import/by_sea');
    }
}
