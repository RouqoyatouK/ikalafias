
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="LogRgter/style.css" />
    <title>LoginRegister</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">se connecter</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" placeholder="mot de passe" name="password" required autocomplete="current-password" />

                        
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">

                                    
                                </div>
                            </div>
                        </div>
                    <input type="submit" value="Se Connecter" class="btn solid" />

                    <div class="mgsoubli">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                    @endif
                    </div>
                   
                    <p class="social-text">Se connecter avec une platforme social</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                
 
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Nouveau compte ?</h3>
                    <p>
                        cliquez sur le boutton ci-dessous pour s'inscrire!
                    </p>
                    <!--button class="btn transparent" id="sign-up-btn"-->
                        <!--p class="btn transparent" id="sign-up-btn">
                        </p-->
                        <a href="{{route('register')}}">S'inscrire</a>

                        
                        
                    <!--/button-->
                </div>
                <img src="imageLR/log.svg" class="image" alt="" />
            </div>
            
        </div>
    </div>

</body>