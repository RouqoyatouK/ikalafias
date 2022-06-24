<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::all();
        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
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
          'contact'=>'required',
          'email'=>'required',
          'message'=>'required',
          
        ]);
        //
        $contact=new Contact();
        $contact->nom=$request->nom;
        $contact->prenom=$request->prenom;
        $contact->contact=$request->contact;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->date_contact=$request->date_contact;

        $contact->save();
        return redirect()->route('contact.index');
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
        $contact= Contact::find($id);
        return view('contact.show',compact('contact'));
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
        $contact= Contact::find($id);
      return view('contact.edit', compact('contact'));
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
        $contact= Contact::find($id);
        $contact->nom=$request->nom;
        $contact->prenom=$request->prenom;
        $contact->contact=$request->contact;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->date_contact=$request->date_contact;

        $contact->save();
        return redirect()->route('contact.index');
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
        Contact::find($id)->delete();
        return redirect()->route('contact.index');
    }
}
