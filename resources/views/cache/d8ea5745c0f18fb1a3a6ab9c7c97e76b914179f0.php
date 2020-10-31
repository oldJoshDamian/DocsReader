<?php $__env->startSection('content'); ?>
<div class="content py-4 px-4">
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                Available Laravel Documentation Versions:
            </p>
        </div>
        <div class="py-4">
            <div class="columns is-mobile is-multiline mx-0 is-vcentered is-centered">
                <?php $__currentLoopData = $documentations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="column <?php if(count($documentations) > 1 ): ?> is-6 <?php endif; ?>">
                    <?php if($loop->first): ?>
                    <div class="px-2 py-2 has-background-danger">
                        <p class="title has-text-white is-6">
                            Latest version
                        </p>
                    </div>
                    <?php endif; ?>
                    <a href="<?php echo e(url('documentation.show', ['version' => extract_name($documentation)])); ?>">
                        <p style="font-size: <?php if(count($documentations) > 1 ): ?> 80px <?php else: ?> 130px <?php endif; ?>;" class="title py-2 px-2 card has-text-centered">
                            <?php echo e($documentation); ?>

                        </p>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                Recent Files: <?php echo e(count(recentFiles())); ?>

            </p>
        </div>
        <div class="card-content">
            <div class="columns is-mobile mx-0 is-centered is-vcentered is-multiline">
                <?php $__currentLoopData = recentFiles(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="column is-6 is-block" href="<?php echo e(url('documentation.file', ['version' => extract_name($file->version()), 'title' => $file->title() ] )); ?>">
                    <p>
                        <?php echo e($file->filename()); ?> (<?php echo e($file->version()); ?>)
                    </p>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /sdcard/laravel/DocsReader/resources/views/homepage.blade.php ENDPATH**/ ?>