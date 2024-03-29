@extends('layout')
@section('title', 'Editar proyecto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @include('partials.validation-errors')
                <form class="bg-white shadow rounded py-3 px-4"
                      method="POST"
                      action="{{ route('projects.update', $project) }}"
                      enctype="multipart/form-data">
                    @method('PATCH')
                    <h1 class="display-4">Editar proyecto</h1>
                    <hr>
                    @include('projects._form', ['btnText' => 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Portfolio')
