<?php $__env->startSection('template_title'); ?>
    Libro
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Libro')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('libros.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear Nuevo')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Paginas</th>
										<th>Codigo</th>
										<th>Libro</th>
										<th>Isbn</th>
										<th>Editorial</th>
										<th>Autor</th>
										<th>Ejemplar</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($libro->paginas); ?></td>
											<td><?php echo e($libro->codigo); ?></td>
											<td><?php echo e($libro->libro); ?></td>
											<td><?php echo e($libro->isbn); ?></td>
											<td><?php echo e($libro->editorial); ?></td>
											<td><?php echo e($libro->autor); ?></td>
											<td><?php echo e($libro->ejemplar); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('libros.destroy',$libro->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('libros.show',$libro->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Ver')); ?></a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('libros.edit',$libro->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Editar')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Borrar')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $libros->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\SistemaDeBibliotecaWeb\resources\views/libro/index.blade.php ENDPATH**/ ?>