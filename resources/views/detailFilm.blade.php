{{-- Héritage de la page base  --}}
@extends('base')

@section('title')
     Doc Tunis | Connexion 
@endsection
{{-- Contenu de la page --}}
@section('content')

<header class="absolute top-0 left-0 z-10 right-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/navfilms.png') }}');">
    <nav class="container bg-[#FFFFFF30]  mx-auto px-2 py- flex justify-between items-center">
        <img src="{{ asset('assets/icones/img.png') }}" class="h-20 mr-2"  alt="logo"/>
        <div class="space-x-6 font-bold text-l">
            <a href="{{ route('home') }}"  class="text-gray-800 hover:text-red-600">Accueil</a>
            <a href="{{ route('films') }}" class="text-red-600">Films</a>
            <a href="{{ route("planing") }}" class="text-gray-800 hover:text-red-600">Planning</a>
        </div>
        <div class="flex items-center space-x-4">
            <img src="{{ asset("assets/images/307ce493-b254-4b2d-8ba4-d12c080d6651.jpg") }}" alt="User Icon" class="w-10 h-10 rounded-full">
        </div>
    </nav>
</header>


<div class="container mx-auto py-[150px] ">
  
    <div class="grid cols-2 grid-cols-2 gap-4 mx-4">
  
        <div>
            <img src="{{ Storage::url($films->imageUrl) }}" alt="Film Poster" class="w-full h-auto rounded object-cover">
        </div>
       
        <div class=" mx-4 pl-4">
            <h1 class="text-red-600 text-2xl mb-4 font-bold">{{ $films->titre }}</h1>
            <h3 class="text-red-600 text-xl mb-4 font-bold">{{ $films->realisateur }}</h3>
            <p class=" text-xl mb-4 font-bold">{{ $films->dateProjection  }} à 12 h 30</p>
            <p class=" mt-4">

                {{ $films->sujet }}
                {{-- Découvrez l'incroyable aventure de "Le Voyage Épique". Suivez les péripéties de nos héros<br/>
                alors qu'ils naviguent à travers des terres mystérieuses, affrontant des défis inimaginables<br/>
                pour retrouver un artefact légendaire.<br/>

                Avec des performances époustouflantes et des paysages à couper le souffle, ce film<br/>
                promet de vous tenir en haleine du début à la fin. Que vous soyez un amateur de films<br/>
                d'aventure ou simplement à la recherche d'une escapade cinématographique captivante,<br/>
                "Le Voyage Épique" est fait pour vous. Rejoignez-nous pour une projection exclusive ce<br/>
                vendredi à 12h30 dans la salle de projection principale. Réservez votre place dès <br/>
                maintenant et embarquez pour une expérience inoubliable.<br/>

                Ne manquez pas cette opportunité unique de plonger dans un monde d'action et de mystère. Nous vous attendons nombreux ! --}}
            </p>
            {{-- <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-xl">Reserver une place</button> --}}
        </div>
        
    </div>
</div>

