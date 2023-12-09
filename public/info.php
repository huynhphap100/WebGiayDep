<?php
global $kh;
include("inc/top.php"); ?>

<br><br>
<div class="container">  
<div class="row"> 
    <h3>Trang thông tin khách hàng</h3>
    <table class="table">
        <tr>
            <td>Id</td>
            <td><?php echo $kh['id'];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $kh['email'];?></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><?php echo $kh['sodienthoai'];?></td>
        </tr>
        <tr>
            <td>Họ tên</td>
            <td><?php echo $kh['hoten'];?></td>
        </tr>
    </table>
	<h4>Danh sách đơn hàng (SV bổ sung)</h4>
</div>
</div>

<?php include("inc/bottom.php"); ?>