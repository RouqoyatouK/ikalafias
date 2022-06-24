<h1>show</h1>
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


      
</tr>
     
</table>