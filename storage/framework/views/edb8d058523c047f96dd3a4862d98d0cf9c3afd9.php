<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'AppLAB')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->make('dashboard.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</head>
  <div id="app" class="bg">
    <body>
        <div class="container">
        <div class="flex-center full-height">
            <!-- Navbar -->
            <div class="row justify-content-md-center">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                            <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            <?php echo e(config('app.name', 'Applab')); ?>

                            <span class="sr-only">(current)</span>
                          </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Support</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="content py-5">
                <div class="title">
                    AppLAB
                    <h3>Management processes chemical plant</h3>
                </div>
                <main class="py-4">
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </div>
        </div>
      </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </body>
  </div>
</html><?php /**PATH C:\laragon\www\applab\resources\views/layouts/app.blade.php ENDPATH**/ ?>