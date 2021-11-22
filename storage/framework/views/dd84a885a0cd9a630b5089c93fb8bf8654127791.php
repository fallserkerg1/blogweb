<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Create new Category</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('info')): ?>
    <div class="alert alert-success">
        <strong><?php echo e(session('info')); ?></strong>
    </div>

<?php endif; ?>

    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.categories.store']); ?>

                <div class="form-group">
                    <?php echo Form::label('name', 'Name Category'); ?>

                    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Category']); ?>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">*<?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('slug', 'Slug'); ?>

                    <?php echo Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Name Slug', 'readonly']); ?>

                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">*<?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <?php echo Form::submit('Create Category', ['class' => 'btn btn-primary btn-lg', 'style' => 'float: right;']); ?>

                </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')); ?>"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>