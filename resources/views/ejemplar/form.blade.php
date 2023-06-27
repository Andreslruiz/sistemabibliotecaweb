<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $ejemplar->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('localizacion') }}
            {{ Form::text('localizacion', $ejemplar->localizacion, ['class' => 'form-control' . ($errors->has('localizacion') ? ' is-invalid' : ''), 'placeholder' => 'Localizacion']) }}
            {!! $errors->first('localizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('libro') }}
            {{ Form::text('libro', $ejemplar->libro, ['class' => 'form-control' . ($errors->has('libro') ? ' is-invalid' : ''), 'placeholder' => 'Libro']) }}
            {!! $errors->first('libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>