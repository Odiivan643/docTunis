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
            <a href="{{ route('home') }}"  class="text-gray-700 hover:text-red-600">Accueil</a>
            <a href="{{ route('films') }}" class="text-gray-700 hover:text-red-600">Films</a>
            <a href="{{ route("planing") }}" class="text-red-600">Planning</a>
        </div>
        <a href="{{ route('logout') }}" class="hover:text-red-600">
            <div class="flex items-center space-x-4">
                <img src="{{ asset("assets/images/307ce493-b254-4b2d-8ba4-d12c080d6651.jpg") }}" alt="User Icon" class="w-10 h-10 rounded-full">
            </div>
        </a>
    </nav>
</header>


<div class="flex items-center justify-between container mx-auto  pt-20 border-b border-gray-300">
    <div class="text-center px-4 space-y-4 ml-[60px]">
      <div class="flex items-center space-x-6">
        <p class="text-xl font-bold text-gray-900">FESTI<span class="text-red-600">FILM</span></p>
        <span class="text-xl">🤝</span>
        <p class="text-xl font-bold text-red-600">DOC À TUNIS</p>
      </div>
      <p class="text-xl text-gray-500">PLANNING</p>
    </div>
    <div class="rounded-tl-full overflow-hidden">
      <img src="{{ asset('assets/images/banière.png') }}" alt="image" class=" h-100 object-cover" />
    </div>
  </div>

  
<div class="container mx-auto py-4 px-4">
    <h1 class="text-3xl font-bold mb-4 text-red-600">Lundi 14</h1>
    <p class="text-gray-500 mb-8">Voici notre programme pour ce lundi.</p>
    <div class="grid grid-cols-5 gap-3">
    @foreach ($lundi as $film)
    <a href="{{ route('details' , ['id' => $film->id]) }}">
      <div class="bg-gray-200 rounded-lg border border-gray-200 overflow-hidden">
        <img src="{{ Storage::url($film->imageUrl) }}" alt="Affiche du film" class="w-300 h-400 object-cover">
        <div class="flex justify-between p-4">
          <div>
            <h2 class="text-xl  text-black">{{ $film->titre }}</h2>
          </div>
        </div>
    </div>
    </a>
    @endforeach
 </div>

  <div class="container mx-auto py-4 px-4">
    <div class="flex items-center justify-between">
      <h1 class="text-3xl font-bold mb-4 text-red-600">Explore les différentes sections de notre site</h1>
    </div>
    <p class="text-gray-500 mb-8">Découvrer tous les services proposer sur notre plateforme</p>
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
      <div class="bg-gray-200 rounded-lg border border-gray-200 overflow-hidden">
        <a href="{{ route('films') }}">
            <img src="{{asset('assets/images/1179586.jpg')}}" alt="Affiche du film" class="w-300 h-400 object-cover">
                <div class=" flex justify-between p-4">
                <div>
                    <h2 class="text-xl  text-black">Nos films</h2>
                </div>
                <button>
                    <img class="w-5" src="{{asset('assets/icones/right-arrow.png')}}"/>
                </button>
            </div>
        </a>
      </div>
    </div>
  </div>
  