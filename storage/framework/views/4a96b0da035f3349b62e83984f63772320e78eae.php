<?php $__env->startSection('title', 'Đăng nhập'); ?>

<?php $__env->startSection('content'); ?>
    <div class="ndnhanvien">
        <div class="noidungthemmoi">
            <h3 class="display-4 text-xs-center">Đăng nhập</h3>

            <form method="POST" action=" <?php echo e(url('nvdangnhap')); ?>">
                <?php echo e(csrf_field()); ?>


                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Mật khẩu</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                        </div>
                    </div>
                </fieldset>
                <?php if(session('thatbai')): ?>
                    <div class="alert alert-danger text-xs-center"><?php echo e(session('thatbai')); ?></div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot Your Password?')); ?>

                </a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/dangnhap.blade.php ENDPATH**/ ?>