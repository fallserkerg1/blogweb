<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>New Post</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.posts.store','autocomplete' => 'off', 'files' => true]); ?>


                    <?php echo $__env->make('admin.posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo Form::submit('Create Post', ['class' => 'btn btn-primary btn-lg btn-block', 'style' => 'float: right;']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;

        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor\ckeditor\ckeditor.js')); ?>"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-',
            });
        });
    </script>
    <script>

    CKEDITOR.replace('body');

    //Codigo JS de las imagenes
    document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>