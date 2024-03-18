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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
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

