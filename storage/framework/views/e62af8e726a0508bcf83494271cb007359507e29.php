<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <div>
        <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-primary btn-lg" style="float: right;">New Post</a>
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
} elseif ($_instance->childHasBeenRendered('3MbxOsQ')) {
    $componentId = $_instance->getRenderedChildComponentId('3MbxOsQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('3MbxOsQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3MbxOsQ');
} else {
    $response = \Livewire\Livewire::mount('admin.post-index');
    $html = $response->html();
    $_instance->logRenderedChild('3MbxOsQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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