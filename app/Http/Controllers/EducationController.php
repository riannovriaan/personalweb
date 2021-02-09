<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $educations = Education::all();
        return view('educations.index', [
            'educations' => $educations
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
        return view('educations.create');
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
            'loc' => 'required',
            'description' => 'required',
            'since' => 'required',
        ]);

        Education::create($request->all());

        return redirect()->route('educations.index')->with
        ('success', 'Education sudah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
        return view('educations.show', compact
        ('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
        return view('educations.edit', compact
        ('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
        $request -> validate([
            'loc' => 'required',
            'description' => 'required',
            'since' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('educations.index')->with
        ('success', 'Education sudah berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
        $education->delete();
        return redirect()->route('educations.index')->with('success', 'Education berhasil dihapus');
    }
}
