<?php

namespace App\Http\Controllers;

use Database\Seeders\stagaires_seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use illuminate\Database\Seeder;
class DatabController extends Controller
{
    public function index(Request $request)
    {
      $search=$request->input( 'search');
      $modules=DB::table('module');
      if($search){
        $modules->where('codeM','like',"%$search%")
        ->orWhere('Titre','like',"%$search%");
      }
      $m=$modules->paginate(3);
      return view('index',compact('search','m'));
}

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
      $request->validate([
          'codeM'=>'required',
          'Titre'=>'required',
          'MH'=>'required',
        ]);
        $m=DB::table('module')->insert([
 'codeM'=>$request->codeM,
 'MH'=>$request->MH,
 'Titre'=>$request->Titre
            ]);

        return redirect('/modules')->with('success', 'Module ajouté avec succès');
    }

    public function edit($id)
    {
        $module = DB::select('SELECT * FROM module WHERE id = ?', [$id]);

        if (empty($module)) {
            return redirect('/modules')->with('error', 'Module introuvable');
        }

        return view('edit', ['module' => $module[0]]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'codeM' => 'required',
            'Titre' => 'required',
            'MH' => 'required|integer'
        ]);

        DB::table('module')->where('id',$request->id)->update([
            'codeM' =>$request ->codeM,
'Titre' =>$request ->Titre,
'MH' =>$request ->MH,

            ]);

        return redirect('/modules')->with('success', 'Module modifié avec succès');
    }

    public function destroy(Request $request,$id)
    {
        DB::table('module')->where('id',$request->id)->delete();

        return redirect('/modules')->with('success', 'Module supprimé avec succès');
    }
    public function delete(Request $request)
    {
        DB::table('module')->delete();

        return redirect('/modules')->with('success',  'Module supprimé avec succès');
    }



}
