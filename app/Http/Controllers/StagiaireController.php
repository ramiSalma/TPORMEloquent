<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$nom = $request->input('nom');
        //$stagiaires = Stagiaire::where('nom','like',"$nom")->get();
        //$stagiaires = Stagiaire::paginate(10);
        // $search = $request->input('search');
        // $stagiaires = Stagiaire::when($search, function ($query, $search) {
        //     return $query->where('nom', 'like', "%$search%");
        // })->paginate(10);


        //$stagiaires = Stagiaire::all();
        //$stagiaires = Stagiaire::orderBy('age','asc')->paginate(10);
        //$stagiaires = Stagiaire::orderBy('name','asc')->limit(5)->get();
        $total = Stagiaire::count();
        $moyAge = stagiaire::avg('age');
        $stagiaires = stagiaire::all()->where('age','=',20);
        $stagiaire = stagiaire::where('age','>',20);
        return view('stagiaires.index', compact('stagiaires','total','moyAge','stagiaire'));
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
        stagiaire::create($input);
        
        

        return redirect('/stagiaires')->with('success','stagiaire added');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $stagiaire = stagiaire::find($id);
        return view('stagiaires.show')->with('stagiaire',$stagiaire);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stagiaire = stagiaire::find($id);
        return view('stagiaires.edit')->with('stagiaire',$stagiaire);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //======= first way
        $stagiaire = stagiaire::find($id);
        $input = $request->all();
        $stagiaire->update($input);

        
        return redirect('/stagiaires')->with('flash message','stagiaire updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //========== method one
        $stagiaire = Stagiaire::destroy($id);
        return redirect('/stagiaires')->with('flash message','stagiaire deleted');

        //========= method two
        $stagiaire = Stagiaire::find($id);
        $stagiaire->delete();

        //========= method three
        $stagiaire = Stagiaire::where('id',$id)->delete();
    }

    public function deleteAll()
    {
        Stagiaire::truncate();

        return redirect()->route('/stagiaires')->with('success', 'All stagiaires have been deleted.');
    }
}
