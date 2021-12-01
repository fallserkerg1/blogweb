<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container">
        <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-primary" style="float: right;">New Post</a>
    </div>
    <h1>List Post</h1>
    <br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <?php if(session('info')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('info')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.post-index')->html();
} elseif ($_instance->childHasBeenRendered('haNMHDa')) {
    $componentId = $_instance->getRenderedChildComponentId('haNMHDa');
    $componentTag = $_instance->getRenderedChildComponentTagName('haNMHDa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('haNMHDa');
} else {
    $response = \Livewire\Livewire::mount('admin.post-index');
    $html = $response->html();
    $_instance->logRenderedChild('haNMHDa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>