<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::all();
        return view('abouts.index', [
            'abouts' => $abouts
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
        return view('abouts.create');
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
            'quote1' => 'required',
            'quote1a' => 'required',
            'quote2' => 'required',
            'quote2a' => 'required',
            'quote2b' => 'required',
        ]);

        About::create($request->all());

        return redirect()->route('abouts.index')->with
        ('success', 'About sudah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
        return view('abouts.show', compact
        ('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
        return view('abouts.edit', compact
        ('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
        $request -> validate([
            'quote1' => 'required',
            'quote1a' => 'required',
            'quote2' => 'required',
            'quote2a' => 'required',
            'quote2b' => 'required',
        ]);

        $about->update($request->all());

        return redirect()->route('abouts.index')->with
        ('success', 'About sudah berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'About berhasil dihapus');
    }
}
