<?php $__env->startSection('template_title'); ?>
    <?php echo e($autor->name ?? "{{ __('Show') Autor"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Ver')); ?> Autor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('autors.index')); ?>"> <?php echo e(__('Volver')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($autor->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            <?php echo e($autor->codigo); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\SistemaDeBibliotecaWeb\resources\views/autor/show.blade.php ENDPATH**/ ?>