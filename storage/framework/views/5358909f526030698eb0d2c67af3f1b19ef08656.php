<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Samcom')); ?></title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
           <?php echo toastr_css(); ?>
</head>
<body class="bg-white-light">
    <div class="wraper">
        <header class="inner-header">
            <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
        </header>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
        <div class="dashboard-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script src="<?php echo e(asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/dil/samcom/resources/views/layouts/app.blade.php ENDPATH**/ ?>