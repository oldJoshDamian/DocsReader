<?php $__env->startSection('subtitle', ' | ' . $doc_version); ?>
<?php $__env->startSection('content'); ?>
<div class="content py-4 px-4">
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                Laravel version: <?php echo e($doc_version); ?>

            </p>
        </div>
        <div class="card-content">
            <div class="columns is-mobile mx-0 is-centered is-vcentered is-multiline">
                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="column is-6 is-block" href="<?php echo e(url('documentation.file', ['version' => extract_name($doc_version), 'title' => extract_name($file) ] )); ?>">
                    <p>
                        <?php echo e($file); ?>

                    </p>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/joshua/Documents/Helloworld/helpers/DocsReader/resources/views/documentation/show.blade.php ENDPATH**/ ?>