@extends('layout')

@section('content')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo Web</h1>
                <p class="lead text-secondary">
                    Una aplicación web desarrollada en Laravel y utilizando MySQL como base de datos. Ofrece una
                    experiencia de usuario fluida y segura, con funcionalidades modernas y escalabilidad para adaptarse
                    a diversas necesidades.
                </p>
                <div class="d-grid gap-2">
                    <a class="btn btn-lg btn-primary" href="{{ route('contact') }}">Contáctame</a>
                    <a class="btn btn-lg btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
            </div>
        </div>
    </div>


@endsection


@section('title', 'Home')
