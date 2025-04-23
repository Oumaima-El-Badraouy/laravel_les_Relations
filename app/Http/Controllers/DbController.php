<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Module;
class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $modules=Module::all();
        return view('index',compact('modules'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codeM' => 'required|unique:modules',
            'Titre' => 'required',
            'MH' => 'required|integer']);
            Module::create([
                 'codeM' => $request->codeM,
                  'Titre' => $request->Titre,
                   'MH' => $request->MH
                ]);
                return redirect('/modules')->with('success','module ajouter avec succeé');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::findOrFail($id);
        return view('edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'codeM' => 'required|unique:modules,codeM,' . $id,
            'Titre' => 'required',
            'MH' => 'required|integer',
        ]);

        $module = Module::findOrFail($id);
        $module->update([
            'codeM' => $request->codeM,
            'Titre' => $request->Titre,
            'MH' => $request->MH,
        ]);

        return redirect('/modules')->with('success', 'Module mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::findOrFail($id);
        $module->delete();

        return redirect('/modules')->with('success', 'Module supprimé avec succès');

    }
}
