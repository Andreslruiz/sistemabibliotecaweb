@extends('layouts.app')

@section('template_title')
    {{ $userPrestamo->name ?? "{{ __('Show') User Prestamo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-prestamos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Prestamo:</strong>
                            {{ $userPrestamo->fecha_prestamo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolucion:</strong>
                            {{ $userPrestamo->fecha_devolucion }}
                        </div>
                        <div class="form-group">
                            <strong>Idejemplar:</strong>
                            {{ $userPrestamo->idejemplar }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $userPrestamo->idusuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
