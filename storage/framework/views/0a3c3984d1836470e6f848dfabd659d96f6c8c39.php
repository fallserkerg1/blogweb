<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>New Post</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.posts.store','autocomplete' => 'off']); ?>

                <div class="form-group">
                    <?php echo Form::label('name', 'Name Post:'); ?>

                    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Post']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('slug', 'Slug:'); ?>

                    <?php echo Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug', 'readonly']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('category', 'Category:'); ?>

                    <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>

                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Tags:</p>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="mr-2">
                            <?php echo Form::checkbox('tags[]', $tag->id, null); ?>

                            <?php echo e($tag->name); ?>

                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('extract', 'Extract:'); ?>

                    <?php echo Form::textarea('extract', null, ['class' => 'form-control', 'rows' => '4']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('body', 'Content Post:'); ?>

                    <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

                </div>
                <?php echo Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float: right;']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor\ckeditor\ckeditor.js')); ?>"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
    <script>

    CKEDITOR.config.height = 400;
    CKEDITOR.config.width = 'auto';

    CKEDITOR.replace('body');

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>