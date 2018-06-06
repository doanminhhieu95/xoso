<?php

namespace App\Http\Controllers;

use App\somo;
use Illuminate\Http\Request;

class somoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $somos = somo::paginate(10,['*'],'page');
        return view('admin.page.somo.index',[
            'somos'=>$somos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.somo.create');
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
        $somo = new somo();
        $somo->name = $request->input('name');
        $somo->number = $request->input('number');
        $somo->post = $request->input('editor1');
        $somo->save();
        
        return redirect()->route('somo.index')
        ->with('thanhcong','Thêm bài viết mới thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\somo  $somo
     * @return \Illuminate\Http\Response
     */
    public function show(somo $somo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\somo  $somo
     * @return \Illuminate\Http\Response
     */
    public function edit(somo $somo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\somo  $somo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, somo $somo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\somo  $somo
     * @return \Illuminate\Http\Response
     */
    public function destroy(somo $somo)
    {
        //
    }
}
