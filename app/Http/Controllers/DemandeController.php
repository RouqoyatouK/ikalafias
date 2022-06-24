<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $demande =Demande::all();
        return view('demande.index',compact('demande'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('demande.create');
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
        $this->validate($request,
        [
               'nom'=>'required',
              'prenom'=>'required',
              'nom_pere'=>'required',
              'nom_mere'=>'required',
              'date_naissance'=>'required',
              'lieu_naissance'=>'required',
              'acte_naissance'=>'required',
              'photo_identite'=>'required',
              'profession'=>'required',
              'photo_profession'=>'required',
              'quartier'=>'required',
              'rue'=>'required',
              'porte'=>'required',
              'taille'=>'required',
              'teint'=>'required',
              'contact'=>'required',
              'genre'=>'required',
              'piece_tuteur'=>'required',




        ]);
        $demande=new Demande();


        $demande->nom=$request->nom;
        $demande->prenom=$request->prenom;
        $demande->nom_pere=$request->nom_pere;
        $demande->nom_mere=$request->nom_mere;
        $demande->date_naissance=$request->date_naissance;
        $demande->lieu_naissance=$request->lieu_naissance;
        $demande->acte_naissance=$request->acte_naissance;
        $demande->photo_identite=$request->photo_identite;
        $demande->profession=$request->profession;
        $demande->photo_profession=$request->photo_profession;
        $demande->quartier=$request->quartier;
        $demande->rue=$request->rue;
        $demande->porte=$request->porte;
        $demande->taille=$request->taille;
        $demande->teint=$request->teint;
        $demande->couleur_cheveux=$request->couleur_cheveux;
        $demande->signe_particuliere=$request->signe_particuliere;
        $demande->date_demande=$request->date_demande;
        $demande->contact=$request->contact;
        $demande->genre=$request->genre;
        $demande->piece_tuteur=$request->piece_tuteur;


        if($request->hasfile('photo_identite')){
            $file=$request->file('photo_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->photo_identite=$filename;
        }

        if($request->hasfile('photo_profession')){
            $file=$request->file('photo_profession');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->photo_profession=$filename;
        }
        if($request->hasfile('piece_tuteur')){
            $file=$request->file('piece_tuteur');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->piece_tuteur=$filename;
        }
        if($request->hasfile('acte_naissance')){
            $file=$request->file('acte_naissance');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->acte_naissance=$filename;
        }

        $demande->save();
        return view('homes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $demande=Demande::find($id);
        return view('demande.show',compact('demande'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $demande=Demande::find($id);
      return view('demande.edit', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $demande=Demande::find($id);



        $demande->nom=$request->nom;
        $demande->prenom=$request->prenom;
        $demande->nom_pere=$request->nom_pere;
        $demande->nom_mere=$request->nom_mere;
        $demande->date_naissance=$request->date_naissance;
        $demande->lieu_naissance=$request->lieu_naissance;
        $demande->acte_naissance=$request->acte_naissance;
        $demande->photo_identite=$request->photo_identite;
        $demande->profession=$request->profession;
        $demande->photo_profession=$request->photo_profession;
        $demande->quartier=$request->quartier;
        $demande->rue=$request->rue;
        $demande->porte=$request->porte;
        $demande->taille=$request->taille;
        $demande->teint=$request->teint;
        $demande->couleur_cheveux=$request->couleur_cheveux;
        $demande->signe_particuliere=$request->signe_particuliere;
        $demande->date_demande=$request->date_demande;
        $demande->contact=$request->contact;
        $demande->piece_tuteur=$request->piece_tuteur;

        if($request->hasfile('photo_identite')){
            $file=$request->file('photo_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->photo_identite=$filename;
        }
        if($request->hasfile('acte_naissance')){
            $file=$request->file('acte_naissance');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->acte_naissance=$filename;
        }
        if($request->hasfile('photo_profession')){
            $file=$request->file('photo_profession');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->photo_profession=$filename;
        }
        if($request->hasfile('piece_tuteur')){
            $file=$request->file('piece_tuteur');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $demande->piece_tuteur=$filename;
        }

        $demande->save();
        return redirect()->route('demande.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Demande::find($id)->delete();
        return redirect()->route('demande.index');
    }

}
