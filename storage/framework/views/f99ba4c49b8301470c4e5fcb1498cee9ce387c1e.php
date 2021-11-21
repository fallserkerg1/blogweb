<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>List Categories</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('info')): ?>
    <div class="alert alert-danger">
        <strong><?php echo e(session('info')); ?></strong>
    </div>

<?php endif; ?>

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table table.striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.categories.edit', $category)); ?>" class="btn btn-success btn-lg"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('admin.categories.destroy', $category)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div style="float: right" class="card-footer">
                        <a class="btn btn-primary btn-lg" href="<?php echo e(route('admin.categories.create')); ?>">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>