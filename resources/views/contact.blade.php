@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4"
                      method="POST"
                      action="{{ route('messages.store') }}">
                    @csrf
                    <h1 class="display-4">{{ __('Contact') }}</h1>
                    <hr>
                    <div class="mb-3">
                        <label for="name">Nombre</label>
                        <input id="name"
                               class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                               name="name"
                               placeholder="Nombre..."
                               value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input id="email"
                               class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                               type="email"
                               name="email"
                               placeholder="Email..."
                               value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject">Asunto</label>
                        <input id="subject"
                               class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                               name="subject"
                               placeholder="Asunto..."
                               value="{{ old('subject') }}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject">Mensaje</label>
                        <textarea id="content"
                                  class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                                  name="content"
                                  placeholder="Mensaje...">{{ old('content') }}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg " type="submit">@lang("Send")</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Contact')
