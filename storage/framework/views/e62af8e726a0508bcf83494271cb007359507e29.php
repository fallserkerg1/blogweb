<?php $__env->startSection('title', 'Administrator'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>List Post</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.post-index')->html();
} elseif ($_instance->childHasBeenRendered('fmhOWhV')) {
    $componentId = $_instance->getRenderedChildComponentId('fmhOWhV');
    $componentTag = $_instance->getRenderedChildComponentTagName('fmhOWhV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fmhOWhV');
} else {
    $response = \Livewire\Livewire::mount('admin.post-index');
    $html = $response->html();
    $_instance->logRenderedChild('fmhOWhV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blogweb\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>