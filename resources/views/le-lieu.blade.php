@extends('layouts.base')

@section('title', 'Le lieu')

@section('content')

<section class="lelieu">
    <div class="restaurant-info">
        <h1>La Lieu</h1>
        <p>
            L’excellence de l’art de vivre à la française au sein
            d’un superbe hôtel particulier parisien
        </p>
    </div>

    <div class="restaurant-image">
        <img src="{{ asset('images/home/restaurant.jpg') }}" alt="">
    </div>

    <div class="restaurant-location">
        <div class="location-left">
            <h2>L'adresse</h2>
            <p>
                Le Clarence, niché dans un élégant hôtel particulier du XIXe siècle situé au 31, avenue Franklin D.
                Roosevelt, a ouvert ses portes en novembre 2015. Il a été entièrement restauré et décoré par les
                meilleurs artisans d’art, sous les directives de S.A.R Le Prince Robert de Luxembourg, qui souhaitait
                reproduire à Paris l’atmosphère unique de Château Haut-Brion. Le Clarence est une table élégante,
                chaleureuse et raffinée, reflet du meilleur des terroirs français, menée avec passion par une équipe
                talentueuse.
            </p>
            <p>
                Christophe Pelé conduit Le Clarence avec panache : une belle aventure que le guide Michelin a choisi de
                distinguer dans son édition 2017 en décernant d’emblée deux macarons à cette grande table parisienne. Si
                la cuisine s’attache à sublimer les produits de saison et à révéler le meilleur de la gastronomie
                française, la salle veille à offrir aux hôtes une parenthèse hors du temps dans un lieu chargé
                d’histoire.
            </p>
        </div>
        <div class="location-right">
            <img src="{{ asset('images/table/le-lieu/porte.webp') }}" alt="">
        </div>
    </div>

    <div class="chef-section">
        <div class="chef-image">
            <img src="{{ asset('images/lieu/chef.jpg') }}" alt="">
        </div>
        <div class="chef-description">
            <!-- Votre contenu ici -->
        </div>
    </div>

    <div class="restaurant-rooms">
        <div class="rooms-title">
            <h2>Les salles du restaurant</h2>
        </div>
        <div class="rooms-description">
            <!-- Votre contenu ici -->
        </div>
        <div class="rooms-gallery">
            <ul class="room-list">
                <li class="room-item">
                    <div class="room-image">
                        <img src="{{ asset('images/lieu/s1.jpg') }}" alt="">
                    </div>
                    <div class="room-caption">
                        <p>Salle à manger Pontac</p>
                    </div>
                </li>
                <li class="room-item">
                    <div class="room-image">
                        <img src="{{ asset('images/lieu/s3.jpg') }}" alt="">
                    </div>
                    <div class="room-caption">
                        <p>Salle à manger Lestonnac</p>
                    </div>
                </li>
                <li class="room-item">
                    <div class="room-image">
                        <img src="{{ asset('images/lieu/s2.jpg') }}" alt="">
                    </div>
                    <div class="room-caption">
                        <p>Salle à manger Talleyrand</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <section class="editorial-slider">
        <div class="slider-content">
            <div class="slider-image">
                <!-- Votre contenu ici -->
            </div>
        </div>
    </section>
</section>

@endsection
