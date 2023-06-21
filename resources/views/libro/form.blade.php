<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('paginas') }}
            {{ Form::text('paginas', $libro->paginas, ['class' => 'form-control' . ($errors->has('paginas') ? ' is-invalid' : ''), 'placeholder' => 'Paginas']) }}
            {!! $errors->first('paginas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $libro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('libro') }}
            {{ Form::text('libro', $libro->libro, ['class' => 'form-control' . ($errors->has('libro') ? ' is-invalid' : ''), 'placeholder' => 'Libro']) }}
            {!! $errors->first('libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isbn') }}
            {{ Form::text('isbn', $libro->isbn, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Isbn']) }}
            {!! $errors->first('isbn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $libro->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $libro->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejemplar') }}
            {{ Form::text('ejemplar', $libro->ejemplar, ['class' => 'form-control' . ($errors->has('ejemplar') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplar']) }}
            {!! $errors->first('ejemplar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>