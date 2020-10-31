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

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item">
                        Documentation
                    </a>

                    <div class="navbar-item has-dropdown has-dropdown-up is-hoverable">
                        <a class="navbar-link">
                            More
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                About
                            </a>
                            <a class="navbar-item">
                                Jobs
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Report an issue
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html><?php /**PATH /sdcard/laravel/DocsReader/resources/views/layouts/app.blade.php ENDPATH**/ ?>