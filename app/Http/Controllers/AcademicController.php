<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $academics = DB::table('academics')->get();
        return view('admin.academic_year.index', ['academics' => $academics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.academic_year.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'ac_year' => 'required',
        ]);
        DB::table('academics')->insert($request->only(['ac_year']));
        return redirect()->route(('academic.index'));
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
        $academics = DB::table('academics')->find($id);
        return view('admin.academic_year.view', ['academics' => $academics]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $academic = DB::table('academics')->find($id);
        return view('admin.academic_year.edit', ['academic' => $academic]);
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
        //
        $request->validate([
            'ac_year' => 'required'
        ]);
        DB::table('academics')->where('id', $id)->update($request->only(['ac_year']));
        return redirect()->route('academic.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $academics = DB::table('academics')->where('id', $id);
        $academics->delete();
        return redirect()->route('academic.index');
    }
}