<div class="row justify-content-md-center">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <?php echo e(config('app.name', 'Applab')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('getAboutPage')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('getSupportPage')); ?>">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('getContactPage')); ?>">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div><?php /**PATH C:\laragon\www\applab\resources\views/web/partials/navbar.blade.php ENDPATH**/ ?>