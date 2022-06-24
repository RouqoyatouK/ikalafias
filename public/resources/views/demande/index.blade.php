<h1>index</h1>
<h2> <a href="{{route('demande.create')}}">faire une demande</a> </h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>prenom</th>
        <th>nom_pere</th>
        <th>nom_mere<th>
        <th>date_naissance</th>
        <th>lieu_naissance</th>
        <th>acte_naissance</th>
        <th>photo_identite</th>
        <th>profession</th>
        <th>photo_profession</th>
        <th>quartier</th>
        <th>rue</th>
        <th>porte</th>
        <th>taille</th>
        <th>teint</th>
        <th>couleur_cheveux</th>
        <th>signe_particuliere</th>
        <th>date_demande</th>
    </tr>
    @foreach ($demande as $demande)
     <tr>
    <td>{{$demande->id}}</td>
     <td>{{$demande->nom}}</td>
     <td>{{$demande->prenom}}</td>
        <td>{{$demande->nom_pere}}</td>
        <td>{{$demande->nom_mere}}</td>
        <td>{{$demande->date_naissance}}</td>
        <td>{{$demande->lieu_naissance}}</td>
        <td>{{$demande->acte_naissance}}</td>
        <td>{{$demande->photo_identite}}</td>
        <td>{{$demande->profession}}</td>
        <td>{{$demande->photo_profession}}</td>
        <td>{{$demande->quartier}}</td>
        <td>{{$demande->rue}}</td>
        <td>{{$demande->porte}}</td>
        <td>{{$demande->taille}}</td>
        <td>{{$demande->teint}}</td>
        <td>{{$demande->couleur_cheveux}}</td>
        <td>{{$demande->signe_particuliere}}</td>
        <td>{{$demande->date_demande}}</td>


      <td>
         <form action="{{route('demande.destroy', $demande->id)}}" method="POST">
            <a href="{{route('demande.show', $demande->id)}}">Afficher</a>
            <a href="{{route('demande.edit', $demande->id)}}">Editer</a>
            @csrf
            @method ('DELETE')
            <input type="submit" value="Supprimer">

         </form>
     </td>
</tr>
     @endforeach
</table>