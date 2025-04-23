<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\Phone;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
class Controlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $m=Article::all();
        return view('articles.index',compact('m'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect()->route('articles.index')->with('success','ajoute avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show1()
    {
       $etudiant=Formateur::find(1);
       return response()->json($etudiant->profile);
    }
    public function show2()
    {
        $etudiant=Formateur::find(1);
        return response()->json($etudiant->cours);
    }
    public function show3()
    {
        $etudiant=Etudiant::find(1);
       return response()->json($etudiant->cours);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module=Article::findOrFail($id);
        return view('articles.edit',compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module=Article::findOrFail($id);
        $module->update($request->only('nom','prenom'));
        return redirect()->route('articles.index')->with('success','modifie avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::destroy($id);
        return redirect()->route('articles.index')->with('success','supprimer avec succés');
    }
}
