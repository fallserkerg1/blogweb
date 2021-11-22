<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
<div class="container">
    <a class="btn btn-primary btn-lg" style="float: right" href="<?php echo e(route('admin.tags.create')); ?>">Create Category</a>
    <h1>List Tags</h1>
    <br>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('info')): ?>
    <div class="alert alert-success">
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
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Color</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($tags->name); ?></td>
                            <td><?php echo e($tags->slug); ?></td>
                            <td><?php echo e($tags->color); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.tags.edit', $tags)); ?>" class="btn btn-success btn-lg"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <form action="<?php echo e(route('admin.tags.delete', $tags)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/tags/index.blade.php ENDPATH**/ ?>