<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo $__env->yieldContent('title'); ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>

    <nav class="navbar navbar-light bg-faded">
        <div class="container thanhmenu">
            <a class="navbar-brand" href="<?php echo e(url('yeucau')); ?>">TestPreview</a>

            <div class="col-sm-3 thanhnhanvien">
                <?php if(session('username')): ?>
                    <div>Hello, <?php echo e(session('username')[0]); ?></div>
                    <a href="<?php echo e(url('dangxuat')); ?>" class="btn btn-info">Log out</a>
                <?php else: ?>
                <a href="<?php echo e(url('dangnhap')); ?>">Đăng nhập</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <?php if(session('phancap')[0] == 1): ?>

        <div class="nutphongban">
            <a href="<?php echo e(url('phongban')); ?>" class="btn btn-danger"><i class="fa fa-home"></i></a>
        </div>
    <?php endif; ?>

    <script type="text/javascript" src="<?php echo e(asset('vendor/bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/layouts/app.blade.php ENDPATH**/ ?>