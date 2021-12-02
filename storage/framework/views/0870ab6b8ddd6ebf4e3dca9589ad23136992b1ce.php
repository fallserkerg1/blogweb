<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container">
        <h1>Create Categories</h1>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <?php if(session('info')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('info')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>


    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('admin.tags.edit', $tag)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                    <label>Name Tag</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($tag->name); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red">*<?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($tag->slug); ?>" readonly>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span style="color: red">*<?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label>Color Tag</label>
                    <select class="form-control" name="color">
                      <option value="blue">Blue</option>
                      <option value="red">Red</option>
                      <option value="yellow">Yellow</option>
                      <option value="violet">Violet</option>
                      <option value="brown">Brown</option>
                      <option value="green">Green</option>
                      <option value="orange">Orange</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-success" style="float: right;">Edit</button>
              </form>
              <a href="<?php echo e(route('admin.tags.index')); ?>" class="btn btn-secondary">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js')); ?>"></script>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/tags/edit.blade.php ENDPATH**/ ?>