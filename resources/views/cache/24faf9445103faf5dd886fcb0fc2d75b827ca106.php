<?php $__env->startSection('subtitle', ' | ' . $file->version() . ' - ' . $file->title()); ?>
<?php $__env->startSection('sendFileScript'); ?>
<script onload="
    sendFile(
    '<?php echo e($file->title()); ?>',
    '<?php echo e($file->version()); ?>',
    '<?php echo e(url('store.recentFiles')); ?>'
    )"
    src="<?php echo e(asset('js/store-recent-file.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-3 px-3">
    <div class="tabs is-boxed">
        <ul>
            <?php $__currentLoopData = $all_docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php if($file->version() === $doc): ?> is-active <?php endif; ?>">
                <a href="<?php echo e(url('documentation.file',
                    ['version' => extract_name($doc),
                    'title' => $file->title() ])); ?>">
                    <span><?php echo e($doc); ?></span>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div class="content mx-0">
        <?php echo e($file->data()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/joshua/Documents/Helloworld/helpers/DocsReader/resources/views/documentation/file.blade.php ENDPATH**/ ?>