<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="LogRgter/styler.css" />
    <title>LoginRegister</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">


                <form method="POST" action="{{ route('register') }}"  class="sign-in-form"> 
                   
                    <!-- class="sign-up-form"-->
                    @csrf
                    <h2 class="title">S'inscrire</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" placeholder="Nom D'utilisateur" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />

                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" placeholder="mot de passe" name="password" required autocomplete="new-password" />

                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" placeholder="mot de passe" name="password_confirmation" required autocomplete="new-password" />

                    </div>


                    <input type="submit" class="btn" value="S'inscrire" />
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
            <!--div class="panel right-panel"-->
            <div class="panel left-panel">
                <div class="content">
                    <h3>vous-avez deja un compte ?</h3>
                    <p>
                        cliquer sur le boutton ci-dessous pour se connecter .
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                      
                        <a href="{{ route('login') }}">  Se connecter</a>
                       
                    </button>
                   
                </div>
                <img src="imageLR/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
</body>

</html>