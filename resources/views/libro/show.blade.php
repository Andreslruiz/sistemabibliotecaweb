@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? "{{ __('Show') Libro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paginas:</strong>
                            {{ $libro->paginas }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $libro->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Libro:</strong>
                            {{ $libro->libro }}
                        </div>
                        <div class="form-group">
                            <strong>Isbn:</strong>
                            {{ $libro->isbn }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libro->editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Ejemplar:</strong>
                            {{ $libro->ejemplar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
