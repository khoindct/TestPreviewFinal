<?php $__env->startSection('title', 'Nhân viên'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bocngoai">

        <div class="tranghienthi">
            <div class="container">
                <?php $__currentLoopData = $to; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class="display-4 text-xs-center mt-2" style="text-transform: uppercase">
                    <?php echo e($t->PhongBan->tenphongban); ?>

                </h3>
                <div class="gioithieu my-2 text-xs-center">
                    Tổ <?php echo e($t->to); ?>: <?php echo e($t->nhiemvu); ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger thongbaoadd">
                        Thất bại: <br>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($err); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if(session('thongbao')): ?>
                    <div class="alert alert-success thongbaoadd">
                        <?php echo e(session('thongbao')); ?>

                    </div>
                <?php endif; ?>
                <div class="phanloai my-2">

                        <button class="btn btn-primary btn-block nutthem">Thêm mới</button>
                </div>
                <table class="table table-striped table-hover text-xs-center">
                    <thead>
                    <tr>
                        <th scope="col" class="text-xs-center">Họ tên</th>
                        <th scope="col" class="text-xs-center">Giới tính</th>
                        <th scope="col" class="text-xs-center">Số điện thoại</th>
                        <th scope="col" class="text-xs-center">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $nhanvien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($nv->hoten); ?></th>
                        <td><?php echo e($nv->gioitinh); ?></td>
                        <td><?php echo e($nv->sodienthoai); ?></td>
                        <td><?php echo e($nv->email); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div> <!-- het hienhiyeucau -->
        <div class="trangthemmoi bienmat">
            <div class="nenden bienmat"></div>
            <div class="noidungthemmoi">
                <button class="btn btn-danger nuttat"><i class="fa fa-remove"></i></button>
                <h3 class="display-4 text-xs-center">Thêm mới nhân viên</h3>

                <form method="POST" action="<?php echo e(url('themnhanvien')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Họ tên</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Họ tên" name="hoten">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Giới tính</label>
                            <div class="col-sm-8">
                                <select name="gioitinh" id="" class="form-control">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Số điện thoại</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Số điện thoại" name="sodienthoai">
                            </div>
                        </div>
                    </fieldset>
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
                    <?php $__currentLoopData = $to; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" value="<?php echo e($t->phongban_id); ?>" name="phongban_id">
                    <input type="hidden" value="2" name="phancap_id">
                    <input type="hidden" value="<?php echo e($t->to); ?>" name="to">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="submit" class="btn btn-primary btn-block">Thêm mới</button>
                </form>
            </div>
        </div> <!-- het trangthemmoi -->
    </div> <!-- het bocngoai -->

    <script>
        var thongbaoadd = document.getElementsByClassName('thongbaoadd');
        setTimeout(function () {
            for (i = 0; i < thongbaoadd.length; i++) {
                thongbaoadd[i].classList.add('xoa');
            }
        }, 5000);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/nhanVien.blade.php ENDPATH**/ ?>