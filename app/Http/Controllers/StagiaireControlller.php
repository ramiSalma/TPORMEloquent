<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $stagiaires = DB::table('stagiaires')
            ->when($search, function ($query, $search) {
                return $query->where('nom', 'like', "%$search%");
            })
            ->paginate(10);
        
        return view('stagiaires.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        DB::table('stagiaires')->insert($input);
        
        return redirect('/stagiaires')->with('success', 'Stagiaire added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stagiaire = DB::table('stagiaires')->where('id', $id)->first();
        return view('stagiaires.show')->with('stagiaire', $stagiaire);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stagiaire = DB::table('stagiaires')->where('id', $id)->first();
        return view('stagiaires.edit')->with('stagiaire', $stagiaire);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except('_token', '_method');
        DB::table('stagiaires')->where('id', $id)->update($input);
        
        return redirect('/stagiaires');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('stagiaires')->where('id', $id)->delete();
        
        return redirect('/stagiaires');
    }
}
