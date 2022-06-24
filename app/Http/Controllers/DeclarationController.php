<?php

namespace App\Http\Controllers;

use App\Models\Declaration;
use Illuminate\Http\Request;

class DeclarationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $declaration =Declaration::all();
        return view('declaration.index',compact('declaration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('declaration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
               'nom'=>'required',
              'prenom'=>'required',
              'contact'=>'required',
              'photo_identite'=>'required',
              'piece_identite'=>'required',
              'date_declaration'=>'required',
              'genre'=>'required',



        ]);
        //
        $declaration=new Declaration();
        $declaration->nom=$request->nom;
        $declaration->prenom=$request->prenom;
        $declaration->contact=$request->contact;
        $declaration->photo_identite=$request->photo_identite;
        $declaration->piece_identite=$request->piece_identite;
        $declaration->date_declaration=$request->date_declaration;
        $declaration->genre=$request->genre;
        if($request->hasfile('photo_identite')){
            $file=$request->file('photo_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $declaration->photo_identite=$filename;
        }

        if($request->hasfile('piece_identite')){
            $file=$request->file('piece_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $declaration->piece_identite=$filename;
        }
        $declaration->save();
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
        $declaration= Declaration::find($id);
        return view('declaration.show',compact('declaration'));
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

        $declaration=Declaration::find($id);
      return view('declaration.edit', compact('declaration'));

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
        $declaration=Declaration::find($id);
        $declaration->nom=$request->nom;
        $declaration->prenom=$request->prenom;
        $declaration->contact=$request->contact;
        $declaration->photo_identite=$request->photo_identite;
        $declaration->piece_identite=$request->piece_identite;
        $declaration->date_declaration=$request->date_declaration;
        if($request->hasfile('photo_identite')){
            $file=$request->file('photo_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $declaration->photo_identite=$filename;
        }

        if($request->hasfile('piece_identite')){
            $file=$request->file('piece_identite');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('assets/ikalafiat/',$filename);
            $declaration->piece_identite=$filename;
        }
        $declaration->save();
        return redirect()->route('declaration.index');

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
        Declaration::find($id)->delete();
        return redirect()->route('declaration.index');
    }
}
