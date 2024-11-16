{{-- Héritage de la page base  --}}
@extends('base')

@section('title')
     Doc Tunis | Connexion 
@endsection
{{-- Contenu de la page --}}
@section('content')

<div  class="min-h-screen flex justify-center items-center">
  <div class="bg-white w-full max-w-4xl rounded-lg shadow-lg flex">
    <!-- Section gauche: Formulaire de connexion -->
    <div class="w-1/2 p-8">
      <h2 class="text-3xl font-bold text-red-600 mb-4">Connectez-vous</h2>
      <p class="text-gray-600 mb-6">
        Connectez-vous ici pour plus d'information à propos de l'événement et à propos des films qui seront diffusés.
      </p>

      <form method="post" action="{{ route('authenticate') }}">
          @csrf
          <div class="mb-4">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Adresse email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-600">
          </div>
          <div class="mb-4">
            <input type="password" name="password" placeholder="Mot de passe" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-600">
          </div>
          <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-500 transition duration-300">
            Se connecter
          </button>
      </form>

      <div class="mt-6 text-center">
        <p class="text-gray-600">Vous n'avez pas de compte ?
          <a href="{{ route('inscription') }}" class="text-red-600 font-semibold">Inscrivez-vous ici !</a>
        </p>
      </div>

      <div class="mt-6 text-center">
        <p class="text-gray-600 mb-4">Où connectez-vous avec</p>
        <div class="flex justify-center space-x-4">
          <a href="#" class="flex items-center justify-center bg-white border border-gray-300 rounded-full p-2 shadow-sm hover:shadow-md transition">
            <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google" class="w-6 h-6">
          </a>
          <a href="#" class="flex items-center justify-center bg-white border border-gray-300 rounded-full p-2 shadow-sm hover:shadow-md transition">
            <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" class="w-6 h-6">
          </a>
          <a href="#" class="flex items-center justify-center bg-white border border-gray-300 rounded-full p-2 shadow-sm hover:shadow-md transition">
            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968872.png" alt="X" class="w-6 h-6">
          </a>
        </div>
      </div>
    </div>

    <!-- Section droite : Image -->
    <div class="w-1/2 relative">
      <img src="{{ asset('assets/images/black-white-portrait-woman-with-clapperboard-old-hollywood-glamour-style.jpg') }}" alt="Image" class="w-full h-full object-cover rounded-r-lg">
    </div>
  </div>
</div>

@endsection
