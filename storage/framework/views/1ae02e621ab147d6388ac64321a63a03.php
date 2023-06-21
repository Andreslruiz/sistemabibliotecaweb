<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $autor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('codigo')); ?>

            <?php echo e(Form::text('codigo', $autor->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo'])); ?>

            <?php echo $errors->first('codigo', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('GUARDAR')); ?></button>
    </div>
</div><?php /**PATH C:\Users\andre\SistemaDeBibliotecaWeb\resources\views/autor/form.blade.php ENDPATH**/ ?>