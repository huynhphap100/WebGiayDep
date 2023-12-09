<?php
include("inc/top.php");
?>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="p-3  shadow">
                <h3 class="text-center text-info">ĐĂNG KÝ</h3>
                <form method="post" action="index.php">

                    <input class="form-control" type="text" name="txtemail" placeholder="Email" required><br>
                    <input class="form-control" type="text" name="txthoten" placeholder="Họ tên" required><br>
                    <input class="form-control" type="text" name="txtsdt" placeholder="Số điện thoại" required><br>
                    <input class="form-control" type="password" name="txtmatkhau" placeholder="Mật khẩu" required><br>
                    <input class="form-control" type="password" name="txtxacnhanmatkhau" placeholder="Xác nhận mật khẩu"
                           required><br>

                    <input type="hidden" name="action" value="xldangky">
                    <div style="display: flex; flex-wrap: wrap-reverse;">
                        <a class="btn btn-warning" style="flex: 1; margin: 4px;" href="?action=dangnhap">Đăng nhập</a>
                        <input class="btn btn-info" style="flex: 1; margin: 4px;" type="submit" value="Đăng ký">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
<?php
include("inc/bottom.php");
?>