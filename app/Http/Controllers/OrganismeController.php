<?php

namespace App\Http\Controllers;

use App\Models\Organisme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganismeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addorganisme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Organisme::create([
            "Nom" =>$request->Nom,
            "Adresse" => $request->Adresse,
            "Numero_de_telephone" => $request->Numero_de_telephone,
            "Le_nom_de_contact" => $request->Le_nom_de_contact,
            "Email_de_contact" => $request->Email_de_contact,
            "Adresse_web" => $request->Adresse_web
    
        ]);
    
       return response('gg');
    
    }


    /**
     * Display the specified resource.
     */
    public function show(Organisme $organismes , Request $request)
    {


      $organismes = Organisme::paginate(10);
        return view('dashboard' ,compact('organismes'));

    //$organismes = DB::table('organismes')->get();

    //return view('dashboard' , compact('organismes' ));
    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $organismes = Organisme::find($id);
        return view('editorganisme',compact('organismes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisme $organismes , $id)
    {
        $organismes = Organisme::findorFail($id);
        $organismes ->Nom = $request ->Nom;
        $organismes ->Adresse = $request ->Adresse;
        $organismes -> Numero_de_telephone = $request ->Numero_de_telephone;
        $organismes -> Le_nom_de_contact = $request ->Le_nom_de_contact;
        $organismes -> Email_de_contact = $request ->Email_de_contact;
        $organismes -> Adresse_web = $request -> Adresse_web;
        $organismes ->save();

        return redirect()->back();
     
    }

     public function count(Organisme $organismecount){
        $organismecount = Organisme::count();
        return view('dashboard' ,compact('organismecount'));


     }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisme $organismes)
    {
        //
    }
}
