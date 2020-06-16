<?php $__env->startSection('title', 'Phòng ban'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-2">
            <form action="<?php echo e(url('phongban')); ?>" method="GET" class="form-control">
                <?php echo e(csrf_field()); ?>

                <div class="canchinh">
                    <div>
                        <select name="chon_ban" id="" class="form-control">
                            <?php $__currentLoopData = $phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ban->phongban_id); ?>"> <?php echo e($ban->tenphongban); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary">Xem chi tiết</button>
                     </div>
                </div>
            </form>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger thongbaoadd">
                Thất bại:
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($err); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <?php $__currentLoopData = $to; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3 class="display-4 text-xs-center">Ban <?php echo e($t->PhongBan->tenphongban); ?></h3>
            <div class="gioithieu my-2">
                <?php echo e($t->PhongBan->chucnang); ?>

            </div>
        <?php break; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="table-responsive">
    <table class="table table-striped table-fixed" style="max-width: 80%; margin: auto">
        <thead>
        <tr>
            <th scope="col" class="text-xs-center">Tổ</th>
            <th scope="col" style="max-width: 60%" class="text-xs-center">Nhiệm vụ</th>
            <th scope="col" class="text-xs-center">Chi tiết</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $to; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th width="20%" scope="row" class="text-xs-center"><?php echo e($t->to); ?></th>
            <td width="60%"> <?php echo e($t->nhiemvu); ?></td>
            <td width="20%" class="text-xs-center">
                <a href="<?php echo e(url('nhanvien/'.$t->to.'/'.$t->phongban_id)); ?>" class="btn btn-warning"><i class="fa fa-eye"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/phongBan.blade.php ENDPATH**/ ?>