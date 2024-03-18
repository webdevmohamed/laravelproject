@extends('layout')

@section('content')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/about.svg" alt="Quien soy">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Quién soy</h1>
                <p class="lead text-secondary">
                    Soy Mohamed, desarrollador Web con 3 años de experiencia, caracterizado por ser autodidacta y resolutivo en cada proyecto que
                    emprendo. Comprometido con el crecimiento personal y profesional, tengo la ilusión de iniciar una nueva etapa
                    donde pueda aplicar mis habilidades técnicas y mi motivación para contribuir a un equipo dinámico y orientado al
                    éxito.
                </p>
                <div class="d-grid gap-2">
                    <a class="btn btn-lg btn-primary" href="{{ route('contact') }}">Contáctame</a>
                    <a class="btn btn-lg btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'About')

