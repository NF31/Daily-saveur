@extends('layouts.base')

@section('title', 'La Table')

@section('content')
    <section class="table">
        <div class="tables">
            <h1>La table </h1>
            <p>
                Christophe Pelé exécute avec brio une cuisine instinctive, audacieuse et d’une éclatante modernité. Au
                Clarence, pas de menu fixe, mais des déclinaisons autour de produits d’exception et de saison.
            </p>
        </div>
        <div class="pics">
            <div class="">
                <img src="{{ asset('images/home/restaurant.jpg') }}" alt="">
            </div>
        </div>

        <div class="content">
            <div class="left">
                <h2>Le chef, Wallace Aton</h2>
                <p>Passé par les cuisines de Ledoyen, du Bristol, de Pierre Gagnaire ou du Royal Monceau, le Chef avait
                    surpris en fermant en 2012 la Bigarrade, sa table doublement étoilée, pour partir, nourrir sa réflexion
                    et s’ouvrir à d’autres cultures culinaires. Toujours à l’affût d’un nouvel artisan du goût, il n’aime
                    rien tant que dénicher un nouveau produit qui viendra nourrir son inspiration, ses réflexions, ses
                    acquis techniques.

                </p>

                <p>
                    Ce qui caractérise le Chef ? Une curiosité insatiable, un profond respect pour les bases classiques mais
                    aussi pour les producteurs, les vignerons, les artisans, l’expression des terroirs, des cultures et des
                    saisons. Il a cette précision, cette attention aux détails, cette passion pour son métier et une
                    capacité rare à la faire partager. Depuis 2017, Christophe Pelé est récompensé de 2 étoiles par le guide
                    Michelin. Depuis trois années consécutives, Le Clarence est listé dans The World’s 50 Best Restaurants,
                    notamment reconnu comme le 28ème meilleur restaurant du monde en 2022.
                </p>
            </div>

            <div class="right">
                <img src="{{ asset('images/home/manager.jpg') }}" alt="">
            </div>
        </div>


        <div class="tables">
            <h1>UNE CUISINE VIBRANTE DE MODERNITÉ </h1>
            <p>
                La cuisine précise et instinctive de Christophe Pelé s’affirme au Clarence avec modernité : si les bases
                classiques restent une des inspirations du Chef, celui-ci et sa brigade créent et composent chaque plat pour
                chaque convive au Clarence, à l’instant voire à l’instinct. La cuisine y est vibrante et insolite.
                Christophe Pelé apporte cette touche d’innovation et de fraîcheur qui rend la cuisine du Clarence inspirée
                et délicieusement séduisante.
            </p>
        </div>


        <div class="faq-container">
            <div class="faq">
                <div class="question">
                    <h2>La carte du déjeuner </h2>
                    <span> à partir de 12h30 du mercredi au samedi</span>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="answer">
                    <div class="dedans">
                        <p> Menu Déjeuner en 3 séquences <br>
                            (uniquement du mercredi au vendredi)
                        </p>
                        <span>130€ / pers.</span>
                    </div>


                    <div class="dedans">
                        <p> Menu Découverte en 4 séquences

                        </p>
                        <span> 180€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p> Menu Le Clarence en 6 séquences
                        </p>
                        <span> 250€ / pers.</span>
                    </div>



                </div>
            </div>


            <div class="faq">
                <div class="question">
                    <h2>La carte du diner </h2>
                    <span> à partir de 19h30 du mardi au samedi</span>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="answer">
                    <div class="dedans">
                        <p> Menu C La Saison en 3 séquences <br>
                            (uniquement du mardi au vendredi)
                        </p>
                        <span>180€ / pers.</span>
                    </div>


                    <div class="dedans">
                        <p>Menu Le Clarence en 5 séquences

                        </p>
                        <span> 250€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p>Menu Inspiration en 7 séquences
                        </p>
                        <span>350€ / pers.</span>
                    </div>



                </div>
            </div>
        </div>


        <div class="content">
            <div class="left">
                <h2>Les Vins</h2>
                <p>La cave du restaurant Le Clarence fait se côtoyer avec bonheur étiquettes de prestige et cuvées
                    confidentielles. Si les millésimes rares de Domaine Clarence Dillon ne sont pas en reste, la carte des
                    vins révèle toute la richesse, l’histoire et la variété du vignoble français. Ici, les vignerons et les
                    terroirs sont tout autant valorisés que les artisans et les produits en cuisine. Aujourd’hui, plus de
                    250 vignerons de toutes les régions de France sont représentés à travers 1400 références, dans un
                    assortiment qui s’étoffe au fil des découvertes et des rencontres de notre équipe sommellerie.

                </p>


            </div>

            <div class="right">
                <img src="{{ asset('images/table/la-table/vin.jpg') }}" alt="">
            </div>
        </div>


        <div class="faq-container">
            <div class="faq">
                <div class="question">
                    <h2>Les accords mets-vins </h2>
                    <span> « terroirs de france »</span>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="answer">
                    <div class="dedans">
                        <p> Menu Déjeuner / C La Saison en 3 séquences <br>
                            (déjeuner/dîner)
                        </p>
                        <span>A partir de 145€ / pers.</span>
                    </div>


                    <div class="dedans">
                        <p>Menu Découverte en 4 séquences <br>
                            (déjeuner)

                        </p>
                        <span> A partir de 165€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p>Menu Le Clarence en 5 séquences <br>
                            (dîner)

                        </p>
                        <span> A partir de 185€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p>Menu Le Clarence en 6 séquences <br>
                            (déjeuner)

                        </p>
                        <span> A partir de 205€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p>Menu Inspiration en 7 séquences <br>
                            (dîner)

                        </p>
                        <span> A partir de 215€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p class="petit">En supplément du prix du menu.
                        </p>
                    </div>
                </div>
            </div>


            <div class="faq">
                <div class="question">
                    <h2>Les accords mets-vins </h2>
                    <span> « domaine clarence dillon »</span>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="answer">
                    <div class="dedans">
                        <p> Menu Déjeuner / C La Saison en 3 séquences <br>
                            (déjeuner/dîner)
                        </p>
                        <span>A partir de 255€ / pers.</span>
                    </div>


                    <div class="dedans">
                        <p> Menu Découverte en 4 séquences <br>
                            (déjeuner)
                        </p>
                        <span>A partir de 275€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p> Menu Le Clarence en 5 séquences <br>
                            (dîner)
                        </p>
                        <span>A partir de 295€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p> Menu Le Clarence en 6 séquences <br>
                            (déjeuner)
                        </p>
                        <span>A partir de 325€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p> Menu Inspiration en 7 séquences <br>
                            (dîner)
                        </p>
                        <span>A partir de 355€ / pers.</span>
                    </div>

                    <div class="dedans">
                        <p class="petit">En supplément du prix du menu.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tables">
            <h1>UNE ÉQUIPE PASSIONNÉE </h1>
            <p>
                En salle, l’excellence se conjugue avec la convivialité. Le service, complice et discret, s’applique à faire
                du repas un pur moment de plaisir, de détente, voire de découvertes. En cuisine, une équipe cosmopolite
                s’attache à mettre en valeur, au fil des saisons, des produits d’exception dans des assiettes imprégnées de
                multiples influences.
            </p>
        </div>


        <div class="content">

            <div class="right">
                <img src="{{ asset('images/table/la-table/GrandLivreCuisine.jpg') }}" alt="">
            </div>
            <div class="left">
                <h2>LE CLARENCE, LE LIVRE DE CUISINE</h2>
                <p>Dans le premier livre du chef Christophe Pelé, Chihiro Masui hume les parfums, caresse la matière,
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

    </section>

    {{--

    <div class="before-footer">
        <p>
            <span>
                <span>
                  <a href="{{ route('home') }}">Accueil</a>
                   /

                  <span class="breadcrumb_last" aria-current="page">La table</span>
                </span>
            </span>
        </p>
    </div>  --}}
@endsection
