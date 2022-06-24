<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('jsi/stile.css')}}">
</head>
<body>
<h1> Carte d'identité nationale N° <td>{{$declaration->id}}</td></h1>
<div class="containeri">
<table>

<div>
    <td>  <img src="{{asset('assets/ikalafiat/' .$declaration->photo_identite)}}" width='150px' height="auto"></td>

	</div>
<h12>N° DE DELIVRANCE </h12>
<h10>Fait le...............à..............</h10>
<h20>Signature de l'autorité</h20>
<h21>administrative et cachet</h21>
<h22>Signature du Titulaire</h22>
<h23>(ou mention illetré)</h23>
<div class="containerie">
<h25>CARTE N°: 4603126</h25>
<h24>TIMBRE</h24>

</div>




    <div class="container">

					<div class="carte">
						<ul class="carte-list">

					
					<li>NOM...............................................................</li>
					<li>PRENOMS.....................................................</li>
					<li>Fils de...........................................................</li>
					<li>et de.............................................................</li>
					<li>Né le.............................................................</li>
					<li>à.................................................................</li>
					<li>PROFESSION...............................................</li>
					<li>Domicile......................................................</li>
					.......................................................................
					<li>Taille............................................................</li>
					<li>Teint.............................................................</li>
					<li>Cheveux.......................................................</li>
					<li> Signes particuliers..........................................</li>
						</ul>

					</div>
				</div>
</div>
</table>
<img  id="ig"  src="{{url('js/empri.jpg' )}}" width='150px' height="auto">

</body>
</html>
