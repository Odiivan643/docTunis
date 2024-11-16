@extends('admin')

@section('content')
<div >
    <h3>Create Film</h3>
    <a href="{{ route('admin.film.index') }}" class="btn btn-success my-1">
            Home
    </a>
    @include('films/filmForm')
        </div>
@endsection
