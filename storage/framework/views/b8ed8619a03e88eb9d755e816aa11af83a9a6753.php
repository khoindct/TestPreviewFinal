<?php $__env->startSection('title', 'Yêu cầu'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bocngoai">

        <div class="tranghienthi">
            <div class="container">
                <h3 class="display-4 text-xs-center mt-2">Danh sách yêu cầu</h3>
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
                        <th scope="col">#</th>
                        <th scope="col" class="text-xs-center">Họ tên</th>
                        <th scope="col" class="text-xs-center">Loại</th>
                        <th scope="col" class="text-xs-center">Hình thức</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $yeucau; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yeucau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($yeucau->id); ?></th>
                        <td><?php echo e($yeucau->nguoiyeucau); ?></td>
                        <td><?php echo e($yeucau->LoaiYeuCau->tenyeucau); ?></td>
                        <td><?php echo e($yeucau->HinhThucYeuCau->hinhthuc); ?></td>
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
                <?php if(session('username')): ?>
                <h3 class="display-4 text-xs-center">Thêm mới yêu cầu</h3>

                <form method="POST" action="<?php echo e(url('themmoi')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Người yêu cầu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Họ tên" name="nguoiyeucau">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label for="loaiyeucau" class="col-sm-4 col-form-label">Loại yêu cầu</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="loaiyeucau">
                                <?php $__currentLoopData = $loai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($l->loaiyeucau_id); ?>"><?php echo e($l->tenyeucau); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <option value="7">Test</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <label for="hinhthuc" class="col-sm-4 col-form-label">Hình thức tiếp nhận</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="hinhthucyeucau">
                                <?php $__currentLoopData = $hinhthuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($h->hinhthuc_id); ?>"><?php echo e($h->hinhthuc); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block">Thêm mới</button>
                </form>
                <?php else: ?>
                    <div class="alert alert-danger">Bạn cần đăng nhập để thực hiện chức năng này</div>

                <?php endif; ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/yeuCau.blade.php ENDPATH**/ ?>