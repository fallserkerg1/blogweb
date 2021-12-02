<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>New Post</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.posts.store','autocomplete' => 'off', 'files' => true]); ?>


                <?php echo Form::hidden('user_id', auth()->user()->id); ?>


                <div class="form-group">
                    <?php echo Form::label('name', 'Name Post:'); ?>

                    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Post']); ?>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('slug', 'Slug:'); ?>

                    <?php echo Form::text('slug', null, ['class' => 'form-control','placeholder' => 'Slug', 'readonly']); ?>

                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('category', 'Category:'); ?>

                    <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>

                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Tags:</p>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="mr-2">
                            <?php echo Form::checkbox('tags[]', $tag->id, null); ?>

                            <?php echo e($tag->name); ?>

                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <br>
                    <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Status:</p>
                    <label>
                        <?php echo Form::radio('status', 1, true); ?>

                        Borrador
                    </label>
                    <label>
                        <?php echo Form::radio('status', 2); ?>

                        Published
                    </label>
                        <br>
                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <!-- Cargar Imagen -->
                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            <img src="https://cdn.pixabay.com/photo/2021/11/11/09/12/lighthouse-6785763__340.jpg" id="picture" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <?php echo Form::label('file', 'Image'); ?>

                            <?php echo Form::file('file', ['class' => 'form-control-file' ]); ?>

                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsum possimus architecto adipisci corporis ratione pariatur fugiat voluptatibus eligendi quis.</p>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo Form::label('extract', 'Extract:'); ?>

                    <?php echo Form::textarea('extract', null, ['class' => 'form-control', 'rows' => '3']); ?>

                    <?php $__errorArgs = ['extract'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('body', 'Content Post:'); ?>

                    <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

                    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <?php echo Form::submit('Create', ['class' => 'btn btn-primary', 'style' => 'float: right;']); ?>

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
                space: '-'
            });
        });
    </script>
    <script>

    CKEDITOR.config.height = 400;
    CKEDITOR.config.width = 'auto';

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