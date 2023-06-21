<?php $__env->startSection('template_title'); ?>
    <?php echo e($editorial->name ?? "{{ __('Show') Editorial"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Ver')); ?> Editorial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('editorials.index')); ?>"> <?php echo e(__('Volver')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($editorial->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            <?php echo e($editorial->nit); ?>

                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            <?php echo e($editorial->direccion); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\SistemaDeBibliotecaWeb\resources\views/editorial/show.blade.php ENDPATH**/ ?>