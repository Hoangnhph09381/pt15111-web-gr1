<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$getTypeQuery = "select * from types";
$types = queryExecute($getTypeQuery, true);

$getPlaceQuery = "select * from places";
$places = queryExecute($getPlaceQuery, true);

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";

$getFoodTypePlaceQuery = "select 
                            f.*,
                            t.name type_name,
                            p.name place_name
                            from foods f 
                            join food_type tf
                            on f.id = tf.food_id 
                            join types t
                            on t.id = tf.type_id
                            join food_place pf
                            on f.id = pf.food_id
                            join places p
                            on p.id = pf.place_id";
$foods = queryExecute($getFoodTypePlaceQuery, true);

?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php include_once '../_share/header.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../_share/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">QUẢN TRỊ THỰC PHẨM</h1>
                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-10 col-offset-1">
                        <!-- Filter  -->
                        <form action="" method="get">
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <input type="text" value="<?= $keyword ?>" class="form-control" name="keyword" placeholder="Nhập tên loại thực phẩm...">
                                </div>
                                <div class="form-group col-3">
                                    <select name="role" class="form-control select2">
                                        <option selected value="">Tất cả loại</option>
                                        <?php foreach ($types as $type) : ?>
                                            <option <?php if ($food_type['type_id'] = $type['id']) {
                                                echo "selected";
                                            } ?> value="<?= $type['id'] ?>">
                                                <?= $type['name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <select name="role" class="form-control">
                                        <option selected value="">Tất cả địa điểm</option>
                                        <?php foreach ($places as $place) : ?>
                                            <option <?php if ($food_place['place_id'] = $place['id']) {
                                                echo "selected";
                                            } ?> value="<?= $place['id'] ?>">
                                                <?= $place['name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Loại</th>
                                    <th>Địa điểm</th>
                                    <th style="width:350px;">Ảnh</th>
                                    <th>Giá</th>
                                    <th>Thời gian mở</th>
                                    <th>Thời gian đóng</th>
                                    <th>Nội dung</th>
                                    <th>
                                        <a href="<?= ADMIN_URL . 'foods/add-form.php' ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm</a>
                                    </th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($foods as $food) : ?>
                                        <tr>
                                            <td>
                                                <?= $food['id'] ?>
                                            </td>
                                            <td><?= $food['name'] ?></td>
                                            <td><?= $food['type_name'] ?></td>
                                            <td><?= $food['place_name'] ?></td>
                                            <td>
                                                <div style="width:30%">
                                                    <img class="img-fluid" src="<?= BASE_URL . $food['image'] ?>" alt="">
                                                </div>
                                            </td>
                                            <td><?= $food['price'] ?></td>
                                            <td><?= $food['time_start'] ?></td>
                                            <td><?= $food['time_end'] ?></td>
                                            <td><?= $food['description'] ?></td>
                                            <td>
                                                <a href="<?= ADMIN_URL . 'foods/edit-form.php?id=' . $food['id'] ?>" class="btn btn-sm btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <a href="<?= ADMIN_URL . 'foods/remove.php?id=' . $food['id'] ?>" class="btn-remove btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once '../_share/footer.php'; ?>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include_once '../_share/script.php'; ?>
<script>
    $(document).ready(function() {
        $('.btn-remove').on('click', function() {
            var redirectUrl = $(this).attr('href');
            Swal.fire({
                title: 'Thông báo!',
                text: "Bạn có chắc chắn muốn xóa tài khoản này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => { // arrow function es6 (es2015)
                if (result.value) {
                    window.location.href = redirectUrl;
                }
            });
            return false;
        });
        <?php if (isset($_GET['msg'])) : ?>
        Swal.fire({
            position: 'bottom-end',
            icon: 'warning',
            title: "<?= $_GET['msg']; ?>",
            showConfirmButton: false,
            timer: 1500
        });
        <?php endif; ?>
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
    $("#example1").DataTable({
        "searching": false,
    });
</script>
</body>

</html>