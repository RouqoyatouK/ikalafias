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
                
                
                <form method="POST" action="{{ route('register') }}"  class="sign-up-form">
                        @csrf
                    <h2 class="title">S'inscrire</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" placeholder="Nom D'utilisateur" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" placeholder="mot de passe" name="password" required autocomplete="new-password" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" placeholder="mot de passe"  name="password_confirmation" required autocomplete="new-password" />
                        
                    </div>

                    
                    <input type="submit" class="btn" value="Sign up" />
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

                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">se connecter</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" placeholder="mot de passe" name="password" required autocomplete="current-password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    <input type="submit" value="Login" class="btn solid" />

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
                    <h3>nouveau compte ?</h3>
                    <p>
                        cliquez sur le boutton ci-dessous pour s'inscrire!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        inscription
                    </button>
                </div>
                <img src="imageLR/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>vous-avez deja un compte ?</h3>
                    <p>
                        cliquer sur le boutton ci-dessous pour se connecter .
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Se connecter
                    </button>
                </div>
                <img src="imageLR/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="LogRgter/app.js"></script>
</body>

</html>