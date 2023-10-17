@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <!-- Section d'accueil -->
    <section class="home">
        <div class="first">
            <video src="{{ asset('images/home/video.mp4') }}">
            </video>
            <div class="content">
                <h1> En plein cœur du triangle d’or, un restaurant gastronomique niché dans un superbe hôtel particulier du
                    XIXème siècle</h1>
            </div>
        </div>

        <div class="intro">
            <p>
                Un assemblage unique de cuisine moderne et instinctive juxtaposée au charme traditionnel et chaleureux d’un
                château bordelais, récompensé de deux étoiles au guide Michelin depuis 2017 et listé dans The World’s 50
                Best Restaurants depuis 3 années consécutives.
            </p>
        </div>

        <div class="contenu">
            <div class="left">
                <h2>LE CHEF CHRISTOPHE PELÉ</h2>
                <p>Christophe Pelé exécute avec brio une cuisine instinctive, inspirée et d’une éclatante modernité. Au
                    Clarence, pas de menu fixe, mais des déclinaisons autour de produits d’exception et de saison. Les
                    associations terre-mer, chères au chef, sont sublimées durant chaque « séquence » du repas par une
                    myriade d’assiettes satellites aux saveurs marquées.</p>

                <a href="" class="btn">
                    DÉCOUVRIR LA TABLE
                </a>
            </div>
            <div class="right">
                <img src="{{ asset('images/home/manager.jpg') }}" alt="" srcset="">
            </div>
        </div>

        <div class="audacieuse">
            <h2>Une cuisine vibrante et audacieuse</h2>
            <p>Christophe Pelé apporte cette touche d’innovation et de fraîcheur qui rend la cuisine du Clarence inspirée et
                délicieusement séduisante. Cette audace culinaire est sublimée par le charme du service « à la française ».
                Dotés d’une cave de vins rares et de millésimes prisés, les sommeliers du Clarence imaginent chaque jour des
                accords pour magnifier les mets de Christophe Pelé. </p>

            <div class="boutton">
                <a href="" class="btn">Les menus</a>
                <a href="" class="btn">Les vins</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="column">
                    <div class="effect">
                        <div class="effect-img">
                            <img src="{{ asset('images/home/restau-gastro6.jpg') }}" alt="">
                        </div>
                        <div class="effect-text">
                            <div class="inner">
                                <span>Cèpe à cru, feuilletage, parmesan, gwell </span>
                                <div class="effect-btn">
                                    <a href="" class="btn">Read more<i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="effect">
                        <div class="effect-img">
                            <img src="{{ asset('images/home/restau-paris.jpg') }}" alt="">
                        </div>
                        <div class="effect-text">
                            <div class="inner">

                                <span>Tourte de pigeon, foie gras, épinard, jus de pigeon </span>
                                <div class="effect-btn">
                                    <a href=" " class="btn">Read more<i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="effect">
                        <div class="effect-img">
                            <img src="{{ asset('images/home/restau-paris1.jpg') }}" alt="">
                        </div>
                        <div class="effect-text">
                            <div class="inner">

                                <span>Tentacule de seiche, en tempura, huître, gingembre</span>
                                <div class="effect-btn">
                                    <a href=" " class="btn">Read more<i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenu">
            <div class="right">
                <img src="{{ asset('images/home/manager.jpg') }}" alt="" srcset="">
            </div>
            <div class="left">
                <h2> Le lieu</h2>
                <p>
                    Loin de l’agitation parisienne, l’expérience d’un repas au Clarence illustre à merveille ce temps
                    suspendu cher au cœur des parisiens et convives de passage. Dans cet hôtel particulier du 8ème
                    arrondissement, les meilleurs artisans d’art ont su insuffler le supplément d’âme propre aux résidences
                    particulières, en s’inspirant du charme unique des propriétés bordelaises.
                    Pour devancer ou prolonger l’instant, un grand salon majestueux et intimiste, un bar et trois salons
                    privatifs dédiés aux clients.
                </p>

                <a href="" class="btn">
                    Découvrir le lieu
                </a>
            </div>

        </div>

        <div class="contenu">

            <div class="left">
                <h2> LES SALONS PRIVÉS</h2>
                <p>
                    Au troisième étage du restaurant, trois salons privatifs parfaitement équipés et connectés accueillent
                    tous types d’événements. Repas d’affaires, séminaires, déjeuners de presse ou dîners privés… Pour faire
                    de chaque occasion un moment d’exception.
                </p>

                <a href="" class="btn">
                    Découvrir les salons
                </a>
            </div>
            <div class="right">
                <img src="{{ asset('images/home/manager.jpg') }}" alt="" srcset="">
            </div>
        </div>

        <div class="contenu">
            <div class="right">
                <img src="{{ asset('images/home/manager.jpg') }}" alt="" srcset="">
            </div>
            <div class="left">
                <h2> LE CLARENCE, LE LIVRE DE CUISINE</h2>
                <p>
                    Dans le premier livre du chef Christophe Pelé, Chihiro Masui hume les parfums, caresse la matière,
                    dissèque les textures, jusqu’à faire naître l’imaginaire du goût chez son lecteur. Un vrai régal !
                    <br> <br>
                    Christophe Pelé et Chihiro Masui conduisent leur lecteur sur le chemin que le chef a emprunté pour
                    donner corps à son inspiration, jusque dans l’assiette où les saveurs trouvent pleinement leur terrain
                    d’expression à travers 70 recettes dont une vingtaine est racontée sous forme de dialogue avec le chef.
                    <br> <br>
                    Grâce à la sensibilité et à la palette de références de l’autrice, les narrations de plats se
                    transforment en récits de voyage ou en savoureux dialogues pleins d’humour avec le chef.
                </p>

            </div>
        </div>


        <div class="follow">


            <h2>SUIVEZ NOUS <a href=""> @LECLARENCEPARIS </a></h2>

            
        </div>

        <div class="baspage contenu">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83928.92248610323!2d2.18077311027925!3d48.90055209797865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6650e2ac7a89f%3A0x275cffe2dfdbdb6b!2sMeli%C3%A1%20Paris%20La%20D%C3%A9fense!5e0!3m2!1sfr!2sfr!4v1695518372163!5m2!1sfr!2sfr"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="text">
                <h2> RESTAURANT LE CLARENCE</h2>
                <p class="one">
                    Restaurant Le Clarence
                    <br>
                    31, avenue Franklin D. Roosevelt
                    <br>
                    75008 Paris
                    <br>
                    +33 1 82 82 10 10
                </p>

                <p class="two">
                    Ouvert le mardi soir et du mercredi au samedi
                    <br> (toute la journée).
                </p>

                <p class="three">
                    Fermetures annuelles :
                    <br>
                    Du dimanche 29 octobre au lundi 06 novembre inclus
                    <br>
                    Le samedi 11 novembre
                    <br>
                    Du dimanche 24 décembre au lundi 25 décembre inclus
                    <br>
                    Du dimanche 31 décembre au lundi 9 janvier inclus
                    <br>
                </p>

                <a href="" class="btn">
                    VOIR SUR GOOGLE MAPS
                </a>
            </div>
        </div>
    </section>
@endsection
