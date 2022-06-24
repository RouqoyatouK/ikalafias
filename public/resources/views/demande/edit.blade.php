<h1>editer</h1>
<form action="{{route('demande.update',$demande->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="nom">Nom </label>
  <input type="text" name="nom" value="{{$demande->nom}}"><br>

 <label for="prenom">prenom </label>
  <input type="text" name="prenom" value="{{$demande->prenom}}"><br>

  <label for="nom_pere">nom_pere </label> 
  <input type="text" name="nom_pere" value="{{$demande->nom_pere}}"><br>

  <label for="nom_mere">nom_mere </label> 
  <input type="text" name="nom_mere" value="{{$demande->nom_mere}}"><br>

  <label for="date_naissance">date_naissance </label> 
  <input type="date" name="date_naissance" value="{{$demande->date_naissance}}"><br>

  <label for="lieu_naissance">lieu_naissance </label>
  <input type="text" name="lieu_naissance" value="{{$demande->lieu_naissance}}"><br>

  <label for="acte_naissaance">acte_naissance </label> 
  <input type="file" name=acte_naissance id="image" accept=".jpg, .jpeg, .png"  value="{{$demande->acte_naissance}}"><br>

  <label for="photo_identite">photo_identite </label>
  <input type="file" name="photo_identite" id="image" accept=".jpg, .jpeg, .png"  value="{{$demande->photo_identite}}"><br>

  <label for="profesion">profesion </label> <br>
  <input type="text" name="profession" value="{{$demande->profession}}"><br>

  <label for="photo_profession">photo_profession </label> 
  <input type="file" name="photo_profession" id="image" accept=".jpg, .jpeg, .png"  value="{{$demande->photo_profession}}"><br>

  <label for="quartier">quartier </label> 
  <input type="text" name="quartier" value="{{$demande->quartier}}"><br>

  <label for="rue">rue </label> 
  <input type="int" name="rue" value="{{$demande->rue}}"><br>

  <label for="porte">porte </label> 
  <input type="int" name="porte" value="{{$demande->porte}}"><br>

  <label for="taille">taille </label>
  <input type="int" step="1.2" name="taille" value="{{$demande->taille}}"><br>

  <label for="teint">teint </label> 
  <input type="text" name="teint" value="{{$demande->teint}}"><br>

  <label for="couleur_cheveux">couleur_cheveux </label> 
  <input type="text" name="couleur_cheveux" value="{{$demande->couleur_cheveux}}"><br>

  <label for="signe_particuliere">signe_particuliere </label> 
  <input type="text" name="signe_particuliere" value="{{$demande->signe_particuliere}}"><br>

  <input type="submit" value="modifier" name="save">
</form>