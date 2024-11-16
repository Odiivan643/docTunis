@extends('admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div >
        <h3>Show Film</h3>

        <a href="{{ route('admin.film.index') }}" class="btn btn-success my-1">
            Home
        </a>
        <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                    <tr>
        <th>Code</th> 
        <td>{{ $film->code }}</td>
</tr>
    <tr>
        <th>Titre</th> 
        <td>{{ $film->titre }}</td>
</tr>
    <tr>
        <th>DateProjection</th> 
        <td>{{ $film->dateProjection }}</td>
</tr>
    <tr>
        <th>Realisateur</th> 
        <td>{{ $film->realisateur }}</td>
</tr>
    <tr>
        <th>Sujet</th> 
        <td>{{ $film->sujet }}</td>
</tr>
    <tr>
        <th>ImageUrl</strong></th>
        <td>
            <div class="form-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
                <img src="{{ Str::startsWith($film->imageUrl, 'http') ? $film->imageUrl : Storage::url($film->imageUrl) }}"
                     alt="Prévisualisation de l'image"
                     style="max-width: 100px; display: block;">
            </div>
        </td>
     </tr>
    <tr>
        <th>Islundi</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Islundi" disabled id="Islundi" value="true" data-bs-toggle="toggle"  {{ $film->Islundi == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
    <tr>
        <th>Ismardi</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Ismardi" disabled id="Ismardi" value="true" data-bs-toggle="toggle"  {{ $film->Ismardi == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
    <tr>
        <th>Ismercredi</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Ismercredi" disabled id="Ismercredi" value="true" data-bs-toggle="toggle"  {{ $film->Ismercredi == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
    <tr>
        <th>Isjeudi</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Isjeudi" disabled id="Isjeudi" value="true" data-bs-toggle="toggle"  {{ $film->Isjeudi == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
    <tr>
        <th>Isvendredi</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Isvendredi" disabled id="Isvendredi" value="true" data-bs-toggle="toggle"  {{ $film->Isvendredi == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
    <tr>
        <th>Issamedi</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Issamedi" disabled id="Issamedi" value="true" data-bs-toggle="toggle"  {{ $film->Issamedi == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
    <tr>
        <th>Isdimanche</th> 
        <td>
            <div class="form-check form-switch">
                <input name="Isdimanche" disabled id="Isdimanche" value="true" data-bs-toggle="toggle"  {{ $film->Isdimanche == 'true' ? 'checked' : '' }} class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
	
            </tbody>
        </table>

        <div>
            <a href="{{ route('admin.film.edit', ['id' => $film->id]) }}" class="btn btn-primary my-1">
                <i class="fa-solid fa-pen-to-square"></i>  Edit
            </a>
        </div>
    </div>
@endsection