<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex flex-column">

        <!-- As a heading -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img class="img-profile rounded-circle" src="<?php echo e(asset('img/logo.png')); ?>">
                 <h1>PUP-Login</h1> 
                </a>

                <!-- <div class="d flex justify-content-center align-items-center">
                    <section class="ml-5 justify-content-center align-items-center  <?php echo e(Route::currentRouteName() == 'registration.index' ? 'd-none' : ''); ?>" >
                    <div class="rounded-cirlce bg-primary"> </div>
                    <span class="border rounded-circle m-5 p-2 <?php echo e(Route::currentRouteName() == 'registration.create' ? 'text-primary border-primary' : ''); ?>">Registration </span>
                    <span class="border rounded-circle m-5 p-2 <?php echo e(Route::currentRouteName() == 'guestQualification.index' ? 'text-primary border-primary' : ''); ?>">Job Offers</span>
                    <span class="border rounded-circle m-5 p-2 <?php echo e(Route::currentRouteName() == 'guestQualification.index' ? 'text-primary border-primary' : ''); ?>">Qualifications</span>
                    <span class="border rounded-circle m-5 p-2 <?php echo e(Route::currentRouteName() == 'guestQualification.index' ? 'text-primary border-primary' : ''); ?>">Exam</span>
                    </section>
                </div>
                 -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="justify-content-center align-items-center p-5">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\projects\pup-loginsystem\resources\views/welcome.blade.php ENDPATH**/ ?>