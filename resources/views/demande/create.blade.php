<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Bootstrap Dual Design Registration Form - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ url('boot/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('boot/jquery.min.')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.bundle.min.js')}}">
    <link href="{{ url('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}    </style>
    <script src="{{ url('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{ url('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height());
          window.parent.postMessage( iframe_height, );
        });
    </script>
</head>
<body>
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>

                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">données personnel</h3>
                                <form action=" {{route('demande.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="nom"></label>
                                            <input type="text" class="form-control" placeholder="nom *" name="nom" />
                                            @if($errors->first('nom'))
<div class="alert-danger">Le champ nom est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                          <label for="prenom"></label>
                                            <input type="text" class="form-control" placeholder="prenom *" name="prenom" />
                                            @if($errors->first('prenom'))
<div class="alert-danger">Le champ prenom est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="nom_pere"></label>
                                            <input type="text" class="form-control" placeholder="nom_pere *" name="nom_pere"/>
                                            @if($errors->first('nom_pere'))
<div class="alert-danger">Le champ nom_pere est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="nom_mere"></label>
                                            <input type="text" class="form-control"  placeholder="nom_mere *" name="nom_mere" />
                                            @if($errors->first('nom_mere'))
<div class="alert-danger">Le champ nom_mere est obligatoire</div>
@endif
                                        </div>

                                        <div class="form-group">
                                            <label for="teint"></label>
                                            <input type="text" class="form-control"  placeholder="teint *" name="teint" />
                                            @if($errors->first('teint'))
<div class="alert-danger">Le champ teint est obligatoire</div>
@endif
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_naissance">date-naissance</label>
                                            <input type="date" class="form-control" placeholder="date naissance *" name="date_naissance" />
                                            @if($errors->first('date_naissance'))
<div class="alert-danger">Le champ date_naissance est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="taille"></label>
                                            <input type="text"   class="form-control" placeholder="taille*" name="taille" />
                                            @if($errors->first('taille'))
<div class="alert-danger">Le champ taille est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="lieu_naissance"></label>
                                            <input type="text"   class="form-control" placeholder="lieu naissance*" name="lieu_naissance" />
                                            @if($errors->first('lieu_naissance'))
<div class="alert-danger">Le champ lieu_naissance est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="profession"></label>
                                            <input type="text"   class="form-control" placeholder="profession*" name="profession" />
                                            @if($errors->first('profession'))
<div class="alert-danger">Le champ profession est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="quartier"></label>
                                            <input type="text"   class="form-control" placeholder="quartier*" name="quartier" />
                                            @if($errors->first('quartier'))
<div class="alert-danger">Le champ quartier est obligatoire</div>
@endif
                                        </div>



                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">données</h3>


                                <div class="row register-form">
                                    <div class="col-md-6">

                                    <div class="form-group">
                                          <label for="rue"></label>
                                            <input type="text" class="form-control" placeholder="rue*" value="" name="rue"/>
                                            @if($errors->first('rue'))
<div class="alert-danger">Le champ rue est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                          <label for="porte"></label>
                                            <input type="text" class="form-control" placeholder="porte*" value="" name="porte"/>
                                            @if($errors->first('porte'))
<div class="alert-danger">Le champ porte est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                          <label for="couleur_cheveux"></label>
                                            <input type="text" class="form-control" placeholder="couleur_cheveux*" value="" name="couleur_cheveux"/>
                                            @if($errors->first('couleur_cheveux'))
<div class="alert-danger">Le champ couleur_cheveux est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                          <label for="signe_particuliere"></label>
                                            <input type="text" class="form-control" placeholder="signe_particuliere*" value="" name="signe_particuliere"/>
                                        </div>

                                        <div class="form-group">
                                          <label for="contact"></label>
                                            <input type="text" class="form-control" placeholder="contact*" value="" name="contact"/>
                                            @if($errors->first('contact'))
<div class="alert-danger">Le champ contact est obligatoire</div>
@endif
                                        </div>




                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="photo_identite">photo-identite</label>
                                            <input type="file" class="form-control" placeholder="photo_identite " value="" name="photo_identite" />
                                            @if($errors->first('photo_identite'))
<div class="alert-danger">Le champ photo_identite est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="photo_profession">photo-profession</label>
                                            <input type="file" class="form-control" placeholder="photo_profession" value="" name="photo_profession"  />
                                            @if($errors->first('photo_profession'))
<div class="alert-danger">Le champ photo_profession est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="piece_tuteur">piece-tuteur</label>
                                            <input type="file" class="form-control" placeholder="piece_tuteur" value="" name="piece_tuteur" />
                                            @if($errors->first('piece_tuteur'))
<div class="alert-danger">Le champ piece_tuteur est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="acte_naissance">photo-acte-naissce</label>
                                            <input type="file" class="form-control" placeholder="acte_naissance*" value="" name="acte_naissance" />
                                            @if($errors->first('acte_naissance'))
<div class="alert-danger">Le champ photo-acte-naissance est obligatoire</div>
@endif
                                        </div>
                                        <div class="form-group">
<div class="form-row">
<div class="form-holder form-holder-2">
<label for="genre">Genre</label>
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

                                        <input type="submit" class="btnRegister"  value="Register">
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>	<script type="text/javascript">
		</script>
</body>
</html>
