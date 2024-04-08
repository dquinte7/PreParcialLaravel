<?php

namespace App\Http\Controllers;
use App\Http\Requests\CinemaRequest;
use App\Models\Cinema;
use Illuminate\Http\Request;
use Log;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cinema.index', [
            'cinemas' => \App\Models\Cinema::all() 
            
        ]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cinema.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CinemaRequest $request)
    {
        $cinema = new \App\Models\Cinema($request->all());
        $cinema->save();
        return redirect()->route('cinema.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cinema $cinema)
    {
        return view('cinema.show', [
            'cinema' => $cinema
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cinema $cinema)
    {
        return view('cinema.edit', 
        [
            'cinema' => $cinema
            
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(CinemaRequest $request, Cinema $cinema)
    {
        $cinema->update($request->all());
        return redirect()->route('cinema.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cinema $cinema)
    {
        $cinema->delete();
        return back();
    }
}