<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../images/Logogear.ico">
    <title>Admin Gear Gaming</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    <link href="../css/bootstrap-table.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <script src="../js/lumino.glyphs.js"></script>

</head>

<body>
    <?php
    include('menu-top.php')
    ?>

    <?php
    include('nav.php')
    ?>



    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản Lý Nhập Hàng</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Bảng Phiếu Nhập</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="btn pull-left">
                                    <a class="btn btn-default" href="insert-goods.php"><i class="glyphicon glyphicon-plus-sign" style="margin-top: 1px"></i> Thêm Phiếu Nhập</a>
                                    <a class="btn btn-default" type="button" name="refresh" title="Refresh">
                                        <i class="glyphicon glyphicon-refresh icon-refresh"></i> Tải lại
                                    </a>
                                </div>
                                <div class="pull-right search">
                                    <input class="form-control" type="text" placeholder="Tìm kiếm">
                                </div>
                            </div>
                            <div class="fixed-table-container">
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                    <table data-toggle="table" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                        <thead>
                                            <tr>
                                                <th data-field="cb" data-checkbox="true"></th>
                                                <th data-field="date" data-sortable="true">Ngày thêm</th>
                                                <th data-field="img" data-sortable="true">Hình ảnh</th>
                                                <th data-field="products" data-sortable="true">Tên sản phẩm</th>
                                                <th data-field="dm" data-sortable="true">Danh mục</th>
                                                <th data-field="th" data-sortable="true">Thương hiệu</th>
                                                <th data-field="qty" data-sortable="true">Số lượng thêm</th>
                                                <th data-field="price" data-sortable="true">Tổng giá</th>
                                                <th data-field="rs" data-sortable="true">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bs-checkbox">
                                                    <input type="checkbox">
                                                <td>12-12-2001</td>
                                                </td>
                                                <td>
                                                    <img src="img/product1.jpg" alt="" style="width: 75px">
                                                </td>
                                                <td>Chuột Logitech G102 Lightsync RGB Black</td>
                                                <td>Chuột</td>
                                                <td>Logitech</td>
                                                <td>12</td>
                                                <td>8$</td>
                                                <td>
                                                    <div class="rf" style="display: flex; justify-content: space-around;">
                                                        <a href=""><i class="glyphicon glyphicon-trash"></i></a>
                                                        <a href="update-goods.php"><i class="glyphicon glyphicon-pencil"></i></a>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/chart.min.js"></script>
        <script src="../js/chart-data.js"></script>
        <script src="../js/easypiechart.js"></script>
        <script src="../js/easypiechart-data.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <script src="../js/bootstrap-table.js"></script>
        <script>
            $('#calendar').datepicker({});

            ! function($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function() {
                if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function() {
                if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
            })
        </script>
</body>

</html>