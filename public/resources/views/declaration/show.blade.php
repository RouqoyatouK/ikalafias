<h1>show</h1>
<hr>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>prenom</th>
        <th>contact</th>
        <th>photo_identite<th>
        <th>piece_identite</th>
        <th>date_declaration</th>
    </tr>
   
     <tr>
    <td>{{$declaration->id}}</td>
     <td>{{$declaration->nom}}</td>
        <td>{{$declaration->prenom}}</td>
        <td>{{$declaration->contact}}</td>
        <td>{{$declaration->photo_identite}}</td>
        <td>{{$declaration->piece_identite}}</td>
        <td>{{$declaration->date_naissance}}</td>
        <td>{{$declaration->date_declaration}}</td>
  
</tr>
    
</table>