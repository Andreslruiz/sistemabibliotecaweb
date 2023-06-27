<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_prestamo') }}
            {{ Form::text('fecha_prestamo', $userPrestamo->fecha_prestamo, ['class' => 'form-control' . ($errors->has('fecha_prestamo') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Prestamo']) }}
            {!! $errors->first('fecha_prestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_devolucion') }}
            {{ Form::text('fecha_devolucion', $userPrestamo->fecha_devolucion, ['class' => 'form-control' . ($errors->has('fecha_devolucion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Devolucion']) }}
            {!! $errors->first('fecha_devolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idejemplar') }}
            {{ Form::text('idejemplar', $userPrestamo->idejemplar, ['class' => 'form-control' . ($errors->has('idejemplar') ? ' is-invalid' : ''), 'placeholder' => 'Idejemplar']) }}
            {!! $errors->first('idejemplar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idusuario') }}
            {{ Form::text('idusuario', $userPrestamo->idusuario, ['class' => 'form-control' . ($errors->has('idusuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idusuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>