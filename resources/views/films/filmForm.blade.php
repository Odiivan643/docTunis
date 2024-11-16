    @section('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endsection
    <div class="row">
    <div class="col-md-8">
        <form action="{{ isset($film) ? route('admin.film.update', ['film' => $film->id]) : route('admin.film.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($film))
            @method('PUT')
        @endif    <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text"  placeholder="Code ..."  name="code" value="{{ old('code', isset($film) ? $film->code : '') }}" class="form-control" id="code" aria-describedby="codeHelp" required/>

        @error('code')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text"  placeholder="Titre ..."  name="titre" value="{{ old('titre', isset($film) ? $film->titre : '') }}" class="form-control" id="titre" aria-describedby="titreHelp" required/>

        @error('titre')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="dateProjection" class="form-label">DateProjection</label>
        <input type="text"  placeholder="DateProjection ..."  name="dateProjection" value="{{ old('dateProjection', isset($film) ? $film->dateProjection : '') }}" class="form-control" id="dateProjection" aria-describedby="dateProjectionHelp" required/>

        @error('dateProjection')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="realisateur" class="form-label">Realisateur</label>
        <input type="text"  placeholder="Realisateur ..."  name="realisateur" value="{{ old('realisateur', isset($film) ? $film->realisateur : '') }}" class="form-control" id="realisateur" aria-describedby="realisateurHelp" required/>

        @error('realisateur')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="sujet" class="form-label">Sujet</label>
        <input type="text"  placeholder="Sujet ..."  name="sujet" value="{{ old('sujet', isset($film) ? $film->sujet : '') }}" class="form-control" id="sujet" aria-describedby="sujetHelp" required/>

        @error('sujet')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <button type="button" class="btn btn-success btn-file my-1" onclick="triggerFileInput('imageUrl')">
            Add file :  (ImageUrl)
        </button>
        <input type="file" name="imageUrl" value="{{ old('imageUrl', isset($film) ? $film->imageUrl : '') }}" class="visually-hidden form-control imageUpload" id="imageUrl" aria-describedby="imageUrlHelp"/>

        <div class="form-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
        </div>
        @error('imageUrl')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Islundi" class="form-label">Islundi</label>
        <div class="form-check form-switch">
            <input name="Islundi" id="Islundi" value="true" data-bs-toggle="toggle"  {{ old('Islundi', isset($film) && $film->Islundi == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Islundi" id="Islundi">
            <option value="true" {{ old('Islundi', isset($film) && $film->Islundi == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Islundi', isset($film) && $film->Islundi == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Islundi')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Ismardi" class="form-label">Ismardi</label>
        <div class="form-check form-switch">
            <input name="Ismardi" id="Ismardi" value="true" data-bs-toggle="toggle"  {{ old('Ismardi', isset($film) && $film->Ismardi == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Ismardi" id="Ismardi">
            <option value="true" {{ old('Ismardi', isset($film) && $film->Ismardi == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Ismardi', isset($film) && $film->Ismardi == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Ismardi')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Ismercredi" class="form-label">Ismercredi</label>
        <div class="form-check form-switch">
            <input name="Ismercredi" id="Ismercredi" value="true" data-bs-toggle="toggle"  {{ old('Ismercredi', isset($film) && $film->Ismercredi == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Ismercredi" id="Ismercredi">
            <option value="true" {{ old('Ismercredi', isset($film) && $film->Ismercredi == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Ismercredi', isset($film) && $film->Ismercredi == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Ismercredi')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Isjeudi" class="form-label">Isjeudi</label>
        <div class="form-check form-switch">
            <input name="Isjeudi" id="Isjeudi" value="true" data-bs-toggle="toggle"  {{ old('Isjeudi', isset($film) && $film->Isjeudi == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Isjeudi" id="Isjeudi">
            <option value="true" {{ old('Isjeudi', isset($film) && $film->Isjeudi == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Isjeudi', isset($film) && $film->Isjeudi == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Isjeudi')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Isvendredi" class="form-label">Isvendredi</label>
        <div class="form-check form-switch">
            <input name="Isvendredi" id="Isvendredi" value="true" data-bs-toggle="toggle"  {{ old('Isvendredi', isset($film) && $film->Isvendredi == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Isvendredi" id="Isvendredi">
            <option value="true" {{ old('Isvendredi', isset($film) && $film->Isvendredi == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Isvendredi', isset($film) && $film->Isvendredi == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Isvendredi')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Issamedi" class="form-label">Issamedi</label>
        <div class="form-check form-switch">
            <input name="Issamedi" id="Issamedi" value="true" data-bs-toggle="toggle"  {{ old('Issamedi', isset($film) && $film->Issamedi == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Issamedi" id="Issamedi">
            <option value="true" {{ old('Issamedi', isset($film) && $film->Issamedi == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Issamedi', isset($film) && $film->Issamedi == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Issamedi')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="Isdimanche" class="form-label">Isdimanche</label>
        <div class="form-check form-switch">
            <input name="Isdimanche" id="Isdimanche" value="true" data-bs-toggle="toggle"  {{ old('Isdimanche', isset($film) && $film->Isdimanche == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="Isdimanche" id="Isdimanche">
            <option value="true" {{ old('Isdimanche', isset($film) && $film->Isdimanche == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('Isdimanche', isset($film) && $film->Isdimanche == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('Isdimanche')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <a href="{{ route('admin.film.index') }}" class="btn btn-danger mt-1">
        Cancel
    </a>
    <button class="btn btn-primary mt-1"> {{ isset($film) ? 'Update' : 'Create' }}</button>
 </form>
    </div>
    <div class="col-md-4">
    <a  class="btn btn-danger mt-1" href="{{ route('admin.film.index') }}">
    Cancel
</a>
<button class="btn btn-primary mt-1"> {{ isset($film) ? 'Update' : 'Create' }}</button>
    </div>
    </div>

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        const textareas = document.querySelectorAll('textarea');
        textareas.forEach((textarea) => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });

        $(document).ready(function() {
            $('select').select2();
        });
        function triggerFileInput(fieldId) {
            const fileInput = document.getElementById(fieldId);
            if (fileInput) {
                fileInput.click();
            }
        }

        const imageUploads = document.querySelectorAll('.imageUpload');
        imageUploads.forEach(function(imageUpload) {
            imageUpload.addEventListener('change', function(event) {
                event.preventDefault()
                const files = this.files; // Récupérer tous les fichiers sélectionnés
                console.log(files)
                if (files && files.length > 0) {
                    const previewContainer = document.getElementById('preview_' + this.id);
                    previewContainer.innerHTML = ''; // Effacer le contenu précédent

                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        if (file) {
                            const reader = new FileReader();
                            const img = document.createElement('img'); // Créer un élément img pour chaque image

                            reader.onload = function(event) {
                                img.src = event.target.result;
                                img.alt = "Prévisualisation de l'image"
                                img.style.maxWidth = '100px';
                                img.style.display = 'block';
                            }

                            reader.readAsDataURL(file);
                            previewContainer.appendChild(img); // Ajouter l'image à la prévisualisation
                            console.log({img})
                            console.log({previewContainer})
                        }
                    }
                    console.log({previewContainer})
                }
            });
        });
    </script>
    @endsection