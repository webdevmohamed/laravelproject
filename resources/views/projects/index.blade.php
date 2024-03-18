@extends('layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            @isset($category)
                <div>
                    <h1 class="display-4 mb-2">{{ $category->name }}</h1>
                    <a href="{{ route('projects.index') }}">Regresar al portafolio</a>
                </div>
            @else
                <h1 class="display-4 mb-0">Portfolio</h1>
            @endisset
            @can('create', $newProject )
                <a class="btn btn-primary"
                   href="{{ route('projects.create') }}">
                    Crear proyecto
                </a>
            @endcan
        </div>
        <p class="lead text-secondary">Proyectos realizados</p>
        <div class="d-flex flex-wrap justify-content-between align-items-start">
            @forelse($projects as $project)
                <div class="card border-0 mt-4 shadow-sm mx-auto" style="width: 18rem">
                    @if($project->image)
                        <img class="card-img-top" style="height: 150px; object-fit: cover" src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                        </h5>
                        <h6 class="card-subtitle">{{ $project->created_at->format('d/m/Y') }}</h6>
                        <p class="card-text text-truncate">{{ $project->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-primary btn-sm" href="{{ route('projects.show', $project) }}">Ver más...</a>
                            @if($project->category_id)
                                <a href="{{ route('categories.show', $project->category) }}">
                                    <span class="badge text-bg-secondary">{{ $project->category->name }}</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        No hay proyectos para mostrar
                    </div>
                </div>
            @endforelse
        </div>
        <div class="mt-4">
           {{ $projects->links() }}
        </div>
        @can('view-deleted-projects')
            @if(empty($deletedProjects))
                <h1>Papelera</h1>
            @endif
            <ul class="list-group">
                @foreach($deletedProjects as $deleteProject)
                    <li class="list-group-item">
                        {{ $deleteProject->title }}
                        @can('restore', $deleteProject)
                            <form method="POST" action="{{ route('projects.restore', $deleteProject) }}" class="d-inline">
                                @csrf @method('PATCH')
                                <button class="btn btn-sm btn-info">Restaurar</button>
                            </form>

                        @endcan
                        @can('forceDelete', $deleteProject)
                            <form method="POST"
                                  onsubmit="return confirm('Esta acción no se puede deshacer, ¿Estás seguro de querer eliminar este proyecto?')"
                                  action="{{ route('projects.forceDelete', $deleteProject) }}" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar permanentemente</button>
                            </form>
                        @endcan
                    </li>
                @endforeach
            </ul>
        @endcan
    </div>
@endsection

@section('title', 'Portfolio')
