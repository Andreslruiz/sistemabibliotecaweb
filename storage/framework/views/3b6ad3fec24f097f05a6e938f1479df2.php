<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $editorial->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nit')); ?>

            <?php echo e(Form::text('nit', $editorial->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit'])); ?>

            <?php echo $errors->first('nit', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('direccion')); ?>

            <?php echo e(Form::text('direccion', $editorial->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion'])); ?>

            <?php echo $errors->first('direccion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar')); ?></button>
    </div>
</div><?php /**PATH C:\Users\andre\SistemaDeBibliotecaWeb\resources\views/editorial/form.blade.php ENDPATH**/ ?>