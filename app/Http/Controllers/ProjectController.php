<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addproject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            $validatedData = $request->validate([
                'CodeOrg' => 'required|exists:organismes,id',
                'Nom' => 'required|string',
                'Description' => 'required|string',
                'Date_debut' => 'required|date',
                'Date_fin' => 'required|date',
            ]);
        
            $project = Project::create([
                'CodeOrg' => $validatedData['CodeOrg'],
                'Nom' => $validatedData['Nom'],
                'Description' => $validatedData['Description'],
                'Date_debut' => $validatedData['Date_debut'],
                'Date_fin' => $validatedData['Date_fin'],
            ]);
        
            return redirect()->back();
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
         $project = Project::paginate(10);
        return view('Projectsliste' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project , $id)
    {
        $project = Project::findorFail($id);
        return view('editprojet' , compact('project'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project , $id)
    {
       $project = Project::findorFail($id);
       $project->CodeOrg = $request->CodeOrg;
       $project->Nom = $request->Nom;
       $project->Description = $request->Description;
       $project->Date_debut = $request->Date_debut;
       $project->Date_fin = $request->Date_fin;
       $project->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
