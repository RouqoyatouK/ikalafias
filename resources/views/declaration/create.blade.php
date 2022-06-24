
<!DOCTYPE html>
<html>
<head><script nonce="5764cd8c-d402-42c2-bdb2-47675d680227">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<meta charset="utf-8">
<title>Ikalafia</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="{{url ('boot/montserrat-font.css')}}">
<link rel="stylesheet" type="text/css" href="{{url ('boot/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

<link rel="stylesheet" href="{{url ('boot/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('boot/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('boot/jquery.min.')}}">
<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="page-content" >
<div class="wizard-v10-content">
<div class="wizard-form">
<div class="wizard-header">
<h3>Faire une declaration de perte </h3>
</div>
<form class="form-register" action="{{route('declaration.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
<div id="form-total">

<h2>1</h2>
<section>
<div class="inner">
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="nom">Nom</label>
<input type="text" class="form-control" id="first-name" name="nom">
@if($errors->first('nom'))
<div class="alert-danger">Le champ nom est obligatoire</div>
@endif
</div>
</div>
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="prenom">Prenom</label>
<input type="text" class="form-control" id="last-name" name="prenom">
@if($errors->first('prenom'))
<div class="alert-danger">Le champ prénom est obligatoire</div>
@endif
</div>
</div>
</div>
</section>

<h2>2</h2>
<section>
<div class="inner">
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="date_declaration">Date-declaration</label>
<input type="date" class="form-control" id="email" name="date_declaration">
@if($errors->first('date_declaration'))
<div class="alert-danger">Le champ date est obligatoire</div>
@endif
</div>
</div>
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="contact">Numero</label>
<input type="text" class="form-control" id="password" name="contact">
@if($errors->first('contact'))
<div class="alert-danger">Le champ numero est obligatoire</div>
@endif
</div>
</div>
</div>
</section>


<h2>3</h2>
<section>
<div class="inner">
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="genre">Genre</label>
@if($errors->first('genre'))
<div class="alert-danger">Le champ genre est obligatoire</div>
@endif
<select name="genre" id="subject" class="form-control">
<option value="" disabled selected>choisis</option>
<option value="Masculin">Masculin</option>
<option value="Feminin">Feminin</option>
</select>
<span class="select-btn">
<i class="zmdi zmdi-chevron-down"></i>
</span>
</div>
</div>
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="piece_identite">Piece-identite</label>
<input type="file" name="piece_identite" class="form-control" id="comment">
@if($errors->first('piece_identite'))
<div class="alert-danger">Le champ piece_identite est obligatoire</div>
@endif
<label for="photo_identite">Photo-identite</label>
<input type="file" name="photo_identite" class="form-control" id="comment">
@if($errors->first('photo_identite'))
<div class="alert-danger">Le champ photo_identite est obligatoire</div>
@endif

</div>
</div>
<div><input type="submit" value="save" name="Envoyer" class="btn btn-primary btn-lg active"  ></input>
 </div>
</div>
</section>
</div>
</form>
</div>
</div>
</div>
<script src="{{ url('boot/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('boot/jquery.steps.js')}}"></script>
<script src="{{ url('boot/main.js')}}"></script>

<script async src="{{ url('boot/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="{{ url('boot/https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194')}}" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f4d09fe2b9b0702","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
