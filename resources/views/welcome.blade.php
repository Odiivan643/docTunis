@extends('base')
</head>
<body class=" text-white">
<!-- Navbar -->
    <header class="absolute  top-0 left-0 right-0 z-10 ">
        <nav class="container bg-[#FFFFFF30] mx-auto px-4 py-4 flex justify-between items-center">
                <img src="{{ asset('assets/images/logo.png') }}" class="h-20 mr-2"  alt="logo"/>
            <div class="space-x-6 font-bold text-l">
                <a href="#" class="text-red-600">Accueil</a>
                <a href="{{ route('films') }}" class="text-gray-700 hover:text-red-600">Films</a>
                {{-- <a href="#" class="text-gray-700 hover:text-red-600">categories</a> --}}
                <a href="{{ route('planing') }}" class="text-gray-700 hover:text-red-600">Planning</a>
            </div>
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
                <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300">
                    Se déconnecter
                </button>
            
        </form>
        @else
        <a href="{{ route('connexion') }}">
            <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300">
                Se connecter
            </button>
        </a>
        @endauth
        </nav>
    </header>
    

    <section class="h-screen flex items-center relative overflow-hidden">

        <img src="{{ asset('assets/images/black-white-portrait-woman-with-clapperboard-old-hollywood-glamour-style.jpg') }}" alt="Background" class="absolute opacity-75 w-full h-full object-cover" />
        
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-red-600 text-6xl font-bold mb-4">DOC À TUNIS</h1>
            <p class="text-white-300 font-bold max-w-2xl mb-8">
                Découvrez le monde du cinéma avec des documentaires riches en émotions.
                Plongez dans un monde immersif, plein de rébondissement lors de ce festival unique
            </p>
            <div class="space-x-4">
                @auth
                @else
                <a href="{{ route('connexion') }}">
                    <button class="bg-red-600 text-white px-6 py-3 rounded hover:bg-white hover:text-red-600 transition duration-300">
                        Se connecter
                    </button>
                </a>
                @endauth
                <a href="{{ route('films') }}">
                    <button class="bg-white text-red-600 px-6 py-3 rounded hover:bg-red-600 hover:text-white transition duration-300">
                        Voir les films
                    </button>
                </a>
            </div>
        </div>

        <div class="absolute right-0 bottom-0 w-64 h-64 bg-white rounded -mr-32 -mb-32 opacity-20"></div>
    </section>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-red-600">Les films actuellement en tendance</h1>
        <p class="text-gray-500">Un avant-goût, pour vous mettre l'eau à la bouche</p>
        <div class="grid grid-cols-4 gap-4 mt-4">
            @foreach ($films as $film)
            <a href="{{ route('details' , ['id' => $film->id]) }}">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-bold">{{ $film->genre }}</h2>
                    <div class="grid grid-cols-2 gap-2 mt-2">
                        <img src="{{ Storage::url($film->imageUrl) }}" alt="{{ $film->title }}" class="w-full h-auto rounded">
                    </div>
                </div>
                @endforeach
            </div>
        </a>
    </div>
    


<div class="container mx-auto py-12 text-black">
    <h2 class="mx-8 text-2xl font-bold mb-4 text-red-600">Explorez nos plannings de diffusion</h2>
    <p class="mx-8 mb-8">Découvrer les tendances des ces 7 derniers jours</p>

    <div class="grid grid-cols-1 gap-4 mx-8">
        <div class="bg-pink-200 rounded-lg p-4 text-center  flex justify-between">
            <p class="text-lg font-semibold">Vendredi le 11</p>
            <a href="{{ route('vendredi') }}" class="inline-flex items-center px-4 py-2 bg-pink-300 hover:bg-pink-600 rounded-md text-white">Voir les films
                <img src="{{ asset('assets/icones/right-arrow.png')}}"  class="w-4 ml-2" /></a>
        </div>
        <div class="bg-pink-200 rounded-lg p-4 text-center flex justify-between">
            <p class="text-lg font-semibold">lundi le 14</p>
            <a href="{{ route('lundi') }}" class="inline-flex items-center px-4 py-2 bg-pink-300 hover:bg-pink-600 rounded-md text-white">Voir les films
                <img src="{{ asset('assets/icones/right-arrow.png') }}"  class="w-4 ml-2" /></a>
        </div>
        <div class="bg-pink-200 rounded-lg p-4 text-center flex justify-between">
            <p class="text-lg font-semibold">mercredi le 16</p>
            <a href="{{ route('mercredi') }}" class="inline-flex items-center px-4 py-2 bg-pink-300 hover:bg-600 rounded-md text-white">Voir les films
                <img src="{{ asset('assets/icones/right-arrow.png') }}"  class="w-4 ml-2"/> </a>
        </div>
    </div>

</div>

<div class="container  mx-10 py-12 text-black">
    <h2 class=" mx-8 text-2xl font-bold mb-4">Explorez quelques films de diffusion</h2>
    <p class="mx-8  mb-8">Un avant gout, pour vous mettre l'eau à la bouche</p>

    <div class="grid grid-cols-2 gap-4 mx-10">
            <div class="grid grid-cols-2 gap-4 mt-4">
                <img src="{{ Storage::url($film->imageUrl) }}" alt="Image 2" class="rounded-lg   object-cover">
                <img src="{{ asset('assets/images/1179586.jpg') }}" alt="Image 3" class="rounded-lg object-cover">
            </div>
        <div class="p-4">
            <h3 class="text-lg font-bold">Nos tendances films</h3>
            <div class="grid grid-cols-1 gap-4 mx-8">
                <div class="bg-pink-200 rounded-lg p-4 text-center  flex justify-between">
                    <p class="text-lg font-semibold">Naruto</p>
                    <a href="{{ route('films') }}" class="inline-flex items-center px-4 py-2 bg-pink-300 hover:bg-pink-600 rounded-md text-white">#</a>
                </div>
                <div class="bg-pink-200 rounded-lg p-4 text-center flex justify-between">
                    <p class="text-lg font-semibold">Blue Lock</p>
                    <a href="{{ route('films') }}" class="inline-flex items-center px-4 py-2 bg-pink-300 hover:bg-pink-600 rounded-md text-white">#</a>
                </div>
                <div class="bg-pink-200 rounded-lg p-4 text-center flex justify-between">
                    <p class="text-lg font-semibold">Dragon Ball Z</p>
                    <a href="{{ route('films') }}" class="inline-flex items-center px-4 py-2 bg-pink-300 hover:bg-600 rounded-md text-white">
                        #</a>
                </div>
            </div>
        </div>
    </div>
</div>
