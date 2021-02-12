<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portofolios = Portofolio::all();
        return view('portofolios.index', [
            'portofolios' => $portofolios
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
        return view('portofolios.create');
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
        $request -> validate([
            'col_left' => 'required',
            'col_right' => 'required',
            'projectname' => 'required'
        ]);

        Portofolio::create($request->all());

        return redirect()->route('portofolios.index')->with
        ('success', 'Portofolio sudah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
        return view('portofolios.show', compact
        ('portofolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
        return view('portofolios.edit', compact
        ('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
        $request -> validate([
            'col_left' => 'required',
            'col_right' => 'required',
            'projectname' => 'required'
        ]);

        $portofolio->update($request->all());

        return redirect()->route('portofolios.index')->with
        ('success', 'Portofolio sudah berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        //
        $portofolio->delete();
        return redirect()->route('portofolios.index')->with('success', 'Portofolio berhasil dihapus');
    }
}
