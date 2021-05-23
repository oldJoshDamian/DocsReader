<!DOCTYPE html>
<html class="has-navbar-fixed-bottom">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name') . ' - Laravel'); ?><?php echo $__env->yieldContent('subtitle'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('css/bulma.css')); ?>">

    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>
        eruda.init();
    </script>
    <?php echo $__env->yieldContent('sendFileScript'); ?>
</head>

<body>
    <div id="app" class="container">
        <nav class="navbar is-fixed-bottom" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="<?php echo e(url('home')); ?>">
                    <p class="title is-5">
                        <?php echo e(config('app.name')); ?>

                    </p>
                </a>
            </div>
        </nav>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html><?php /**PATH /home/joshua/Documents/Helloworld/helpers/DocsReader/resources/views/layouts/app.blade.php ENDPATH**/ ?>