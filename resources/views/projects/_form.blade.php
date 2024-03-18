@csrf
@if($project->image)
    <img class="card-img-top mb-2" style="height: 250px; object-fit: cover" src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
@endif

<div class="mb-3">
    <input name="image" class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
    <label for="category_id">Categoría del proyecto</label>
    <select name="category_id" id="category_id" class="form-select bg-light shadow-sm">
        <option value="">Seleccione</option>
        @foreach($categories as $id => $name)
            <option
                {{ $id == old('category_id', $project->category_id) ? 'selected' : '' }}
                value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="title">Titulo del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror"
           id="title"
           type="text"
           name="title"
           value="{{ old('title', $project->title)  }}">
</div>
<div class="mb-3">
    <label for="url">URL del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror"
           id="url"
           type="text"
           name="url"
           value="{{ old('url', $project->url)  }}">

</div>
<div class="mb-3">
    <label for="description">Description del proyecto</label>
    <textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
              id="description"
              name="description">{{ old('description', $project->description) }}</textarea>
</div>
<div class="d-grid gap-2">
    <button class="btn btn-primary btn-lg " type="submit">{{ $btnText }}</button>
    <a class="btn btn-link" href="{{ route('projects.index') }}">
        Cancelar
    </a>
</div>

