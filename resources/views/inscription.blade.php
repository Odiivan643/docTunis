
{{-- Héritage de la page base  --}}
@extends('base')

@section('title')
     Doc Tunis | Inscription
@endsection

{{-- Contenu de la page --}}
@section('content')

<div class="min-h-screen flex justify-center items-center">
    <div class="bg-white w-full max-w-5xl rounded-lg shadow-lg flex">
        <!-- Image -->
        <div class="w-1/2 relative">
            <img src="{{ asset('assets/images/black-white-portrait-woman-with-clapperboard-old-hollywood-glamour-style.jpg') }}" alt="Image" class="w-full h-full object-cover rounded-r-lg">
        </div>
        <!--  Formulaire de connexion -->
        <div class="w-1/2 p-8">
            <h2 class="text-3xl font-bold text-red-600 mb-4">Inscrivez-vous</h2>
            <p class="text-gray-600 mb-6">
                Inscrivez-vous ici pour plus d'information à propos de l'événement et à propos des films qui seront diffusés.
            </p>

            <form method="POST" action="{{ route('inscription.save') }}">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Nom Complet" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-600">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>


                <div class="mb-4">
                    <input type="email" name="email" placeholder="Address Email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-600">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Mot de passe" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-600">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password2" placeholder="Confirmer Mot de passe" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-red-600">
                    @error('password2')
                        {{ $message }}
                    @enderror
                </div>
                <button class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-500 transition duration-300">
                    S'inscrire
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">Vous avez déjà un compte ?
                    <a  href="" class="text-red-600 font-semibold">Connectez-vous ici !</a>
                </p>
            </div>

            <div class="mt-6 text-center">
                <p class="text-gray-600 mb-4">Où connectez-vous avec</p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="flex items-center justify-center  rounded-full p-2 shadow-sm hover:shadow-md transition">
                        <img src="{{ asset('assets/icones/google.png') }}" alt="Google" class="w-6 h-6">
                    </a>
                    <a href="#" class="flex items-center justify-center rounded-full p-2 shadow-sm hover:shadow-md transition">
                        <img src="{{ asset('assets/icones/facebook.png') }}" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="#" class="flex items-center justify-center  rounded-full p-2 shadow-sm hover:shadow-md transition">
                        <img src="{{ asset('assets/icones/twitter.png') }} " alt="X" class="w-6 h-6">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection





