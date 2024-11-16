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



<div class="flex items-center justify-between container mx-auto  pt-20 border-b border-gray-300">
    <div class="text-center px-4 space-y-4">
        <div class="flex items-center space-x-6 ml-[60px]">
            <p class="text-xl font-bold text-gray-900">FESTI<span class="text-red-600">FILM</span></p>
            <span class="text-xl">🤝</span>
            <p class="text-xl font-bold text-red-600">DOC À TUNIS</p>
        </div>
        <p class="text-xl text-gray-500">FILM</p>
    </div>
    
    <div class="rounded-tl-full overflow-hidden">
        <img src="{{ asset('assets/images/banière.png') }}" alt="image" class=" h-100 object-cover" />
    </div>
    
</div>


<div class="container mx-auto py-4 px-4">

    <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold mb-4 text-red-600">Explore les différents films proposés</h1>
{{-- Formulaire de recherche --}}
        <form action="#" method="get" class="pb-3 pr-2 flex items-center border-b border-b-slate-300 text-slate-300 focus-within:border-b-slate-900 focus-within:text-slate-900 transition">
            @csrf
            @method('get')
            <label>
            <input id="search" value="{{ request()->get('search') }}" class="border border-gray-300 rounded-md px-4 py-2 w-400 text-black " type="text" name="search" placeholder="Rechercher un article">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                Rechercher
            </button>
            </label>
        </form>
    </div>
    <p class="text-gray-500 mb-8">Un avant gout, pour vous mettre l'eau à la bouche</p>
    <div class="grid grid-cols-5 gap-4">
        @foreach ($films as $film)
        <a href="{{ route('details', ['id' => $film->id]) }}">
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{ Storage::url($film->imageUrl) }}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
               <div>
                   <h2 class="text-xl  text-black">{{ $film->titre }}</h2>
                   <p class="text-red-600">{{ $film->sujet }}</p>
               </div>
                <button>
                  <img class="w-5" src="{{asset('assets/icones/right-arrow.png')}}"/>
                </button>
            </div>
        </div>
    </a>
        @endforeach
        {{-- <div class=" bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg overflow-hidden">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
            <div class=" bg-orange-50 flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Documentaire</h2>
                    <p class="text-red-600">{{ $film->sujet }}</p>
                </div>
                <button>
                    <img class="w-5" src="right-arrow.png"/>
                </button>
            </div>
        </div>
        <div class=" flex justify-center items-center p-4 rounded-lg border border-gray-200 ">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">

                +
            </button>
        </div> --}}
    </div>
</div>

<div class="container mx-auto py-4 px-4">

    <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold mb-4 text-red-600">Explore les différentes sectons de notre site</h1>
    </div>
    <p class="text-gray-500 mb-8">Rejoignez notre communauté et faites partie de l'expérience interactive et engageante 
        que nous vous offrons. Bonne exploration! 🌐</p>
    <div class="grid grid-cols-5 gap-4">
        <a href="{{ route('planing') }}">
            <div class="bg-gray-200 rounded-lg border border-gray-200 overflow-hidden">
                <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
                <div class="flex justify-between p-4">
                    <div>
                        <h2 class="text-xl  text-black">Notre planning</h2>
                    </div>
                    <button>
                        <img class="w-5" src="{{asset('assets/icones/right-arrow.png')}}"/>
                    </button>
                </div>
            </div>
        </a>
        <a href="{{ route('films') }}">
            <div class="bg-gray-200 rounded-lg border border-gray-200 overflow-hidden">
                <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
                <div class=" flex justify-between p-4">
                    <div>
                        <h2 class="text-xl  text-black">Nos films</h2>
                    </div>
                    <button>
                        <img class="w-5" src="{{asset('assets/icones/right-arrow.png')}}"/>
                    </button>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
