@extends('layouts.app')

@section('template_title')
    {{ $ejemplar->name ?? "{{ __('Show') Ejemplar" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ejemplar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ejemplars.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ejemplar->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Localizacion:</strong>
                            {{ $ejemplar->localizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Libro:</strong>
                            {{ $ejemplar->libro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
