<h1>editer</h1>
<hr>
<form action="{{route('declaration.update',$declaration->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="nom">Nom </label>
  <input type="text" name="nom" value="{{$declaration->nom}}"><br>

 <label for="prenom">prenom </label>
  <input type="text" name="prenom" value="{{$declaration->prenom}}"><br>

  <label for="contact">contact </label> 
  <input type="text" name="contact" value="{{$declaration->contact}}"><br>

  <label for="photo_identite"> photo_identite </label>
  <input type="file" name="photo_identite" id="image" accept=".jpg, .jpeg, .png"  value="{{$declaration->photo_identite}}"><br>
  
  <label for="piece_identite">piece_identite </label> 
  <input type="file" name=piece_identite id="image" accept=".jpg, .jpeg, .png"  value="{{$declaration->piece_identite}}"><br>
  
  <input type="submit" value="modifier" name="save">
</form>