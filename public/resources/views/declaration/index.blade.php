<h1>index</h1>
<h2> <a href="{{route('declaration.create')}}">faire une declaration</a> </h2>
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
    @foreach ($declaration as $declaration)
     <tr>
    <td>{{$declaration->id}}</td>
     <td>{{$declaration->nom}}</td>
     <td>{{$declaration->prenom}}</td>
        <td>{{$declaration->contact}}</td>
        <td>{{$declaration->photo_identite}}</td>
        <td>{{$declaration->piece_identite}}</td>
        <td>{{$declaration->date_naissance}}</td>
        <td>{{$declaration->date_declaration}}</td>


      <td>
         <form action="{{route('declaration.destroy', $declaration->id)}}" method="POST">
            <a href="{{route('declaration.show', $declaration->id)}}">Afficher</a>
            <a href="{{route('declaration.edit', $declaration->id)}}">Editer</a>
            @csrf
            @method ('DELETE')
            <input type="submit" value="Supprimer">

         </form>
     </td>
</tr>
     @endforeach
</table>