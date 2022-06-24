<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

        <title>Accueuil</title>
    </head>
    <body class="antialiased">
       
            <div class="scroll-up-btn">
              <i class="fas fa-angle-up"></i>
            </div>
    <!-- Création de la barre de navigation -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Ikala<span>fia</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Utilisateur</a>
                    <ul class="essai"> 
                @if (Route::has('login'))
                
                    @auth
                        <li> 
                        <a href="{{ url('/home') }}" >Home</a> </li>
                        @else
                        <a href="{{ route('login') }}">Se connecter</a>
                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" >S'inscrire </a> </li>
                        @endif
                    @endauth
               
                @endif
                    </ul>
                </li>
                <li><a href="#about" class="menu-btn">Administrateur</a>
                    <ul class="essai">
                    
                        <li> <a href="#">Se connecter</a> </li>
                    </ul>
                
                </li>
               <li><a href="#contact" class="menu-btn">Contactez-nous</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- Début de la section Accueil -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Avec Ikalafia Faire</div>
                <div class="text-2">En toute Simplicite</div>
                <div class="text-3">votre: <span class="typing"></span></div>
                <!--a href="#">Embauchez-moi</a-->
            </div>
        </div>
    </section>

    <!-- Début de la section A Propos -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">A Propos de moi</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Je suis Néné SYLLA et je suis <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="#">Télécharger mon CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Début de la section Services -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Mes services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- Début de la section Compétences -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Mes compétences</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mes connaissances et compétences.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                    <a href="#">Lire plus</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Début de la section Projets -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Nos Services</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Demande</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Renouvellement</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Declaration de Perte</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Début de la section contact -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contactez-Nous</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entrez En contact</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom</div>
                                <div class="sub-title">Néné SYLLA</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adresse</div>
                                <div class="sub-title">Bamako, Mali</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">nenesylla@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Envoyez un message</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Nom" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Sujet" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Envoyez</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Début de la section Footer -->
    <footer>
        <span><a href="#"> || </a> <span class="far fa-copyright"></span> 2022 Tout droit reservé.</span>
    </footer>

    <script src="welcome/script.js"></script>

            
    </body>
</html>