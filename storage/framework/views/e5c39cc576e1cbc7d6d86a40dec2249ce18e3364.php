<?php $__env->startSection('content'); ?>
<div class="ndnhanvien">
    <div class="noidungthemmoi">
        <div class="">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="cangiua">
                    <a href="<?php echo e(url('dangnhap')); ?>" class="btn btn-primary">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/home.blade.php ENDPATH**/ ?>