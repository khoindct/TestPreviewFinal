<!DOCTYPE html>
<html lang="en">
<head>
    <title> Thêm nhân viên </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body style="background-color: gray">
    <div class="ndnhanvien">
        <div class="noidungthemmoi">
            <h3 class="display-4 text-xs-center">Thêm mới nhân viên</h3>

            <form method="POST" action="">
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

                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Phòng ban</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="phongban">



                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Tổ</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="tophongban">



                            </select>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary btn-block">Thêm mới</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo e(asset('vendor/bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\TestPreview\resources\views/dangNhap.blade.php ENDPATH**/ ?>
