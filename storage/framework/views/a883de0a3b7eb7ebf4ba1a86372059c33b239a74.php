<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-gray-600"><?php echo e($post->name); ?></h1>
        <div class="text-lg text-gray-500 mb-2" style="margin-bottom: 0.5rem;">
            <?php echo e($post->extract); ?>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            
            <div class="col-span-2">
                <figure>
                    <?php if($post->image): ?>
                        <img class="w-full h-80 object-cover object-center" src="<?php echo e(Storage::url($post->image->url)); ?>" alt="">
                    <?php else: ?>
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/02/25/00/17/kitten-4018756_960_720.jpg" alt="">
                    <?php endif; ?>
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    <?php echo $post->body; ?>

                </div>
            </div>
            
            <aside class="col-span-1">
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en <?php echo e($post->category->name); ?></h1>
                <ul>
                    <?php $__currentLoopData = $similar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-4">
                            <a class="flex" href="<?php echo e(route('posts.show', $key)); ?>">
                                <?php if($key->image): ?>
                                    <img class="h-30 w-40 object-cover object-center" src="<?php echo e(Storage::url($key->image->url)); ?>" alt="">
                                <?php else: ?>
                                    <img class="h-30 w-40 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/02/25/00/17/kitten-4018756_960_720.jpg" alt="">
                                <?php endif; ?>
                                <span class="ml-2 text-gray-600"><?php echo e($key->name); ?></span>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </aside>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\blogweb\resources\views/posts/show.blade.php ENDPATH**/ ?>