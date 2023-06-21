<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('paginas')); ?>

            <?php echo e(Form::text('paginas', $libro->paginas, ['class' => 'form-control' . ($errors->has('paginas') ? ' is-invalid' : ''), 'placeholder' => 'Paginas'])); ?>

            <?php echo $errors->first('paginas', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('codigo')); ?>

            <?php echo e(Form::text('codigo', $libro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo'])); ?>

            <?php echo $errors->first('codigo', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('libro')); ?>

            <?php echo e(Form::text('libro', $libro->libro, ['class' => 'form-control' . ($errors->has('libro') ? ' is-invalid' : ''), 'placeholder' => 'Libro'])); ?>

            <?php echo $errors->first('libro', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('isbn')); ?>

            <?php echo e(Form::text('isbn', $libro->isbn, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Isbn'])); ?>

            <?php echo $errors->first('isbn', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('editorial')); ?>

            <?php echo e(Form::text('editorial', $libro->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial'])); ?>

            <?php echo $errors->first('editorial', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('autor')); ?>

            <?php echo e(Form::text('autor', $libro->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor'])); ?>

            <?php echo $errors->first('autor', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('ejemplar')); ?>

            <?php echo e(Form::text('ejemplar', $libro->ejemplar, ['class' => 'form-control' . ($errors->has('ejemplar') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplar'])); ?>

            <?php echo $errors->first('ejemplar', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar')); ?></button>
    </div>
</div><?php /**PATH C:\Users\andre\SistemaDeBibliotecaWeb\resources\views/libro/form.blade.php ENDPATH**/ ?>