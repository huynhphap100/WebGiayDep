            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-secondary">
            <div class="text-center mb-5"><a class="text-warning" href="#top"><i class="bi bi-chevron-up"  style="font-size: 3rem; font-weight: bold; color:white;"></i></a></div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-light">
                        <a href="index.php" class="text-decoration-none text-white">
                        <h4><span class="badge text-white bg-success">A</span>
                            <span class="badge text-white bg-danger">B</span>
                            <span class="badge text-white bg-warning">C</span> Shop - Cửa hàng văn phòng phẩm</h4></a>
                        <p><b><i>Địa chỉ:</i></b> 18 Ung Văn Khiêm, phường Đông Xuyên, TP Long Xuyên, An Giang<br>
                            <b><i>Điện thoại:</i></b> 076 3841190<br> 
                            <b><i>Email:</i></b> abc@abc.com</p>
                    </div>
                    <div class="col-md-3 text-muted">
                        <h4>DANH MỤC HÀNG</h4>                        
                        <?php foreach ($danhmuc as $d): ?>
                            <a class="list-group-item" href="?action=group&id=<?php echo $d["id"]; ?>">
							<?php echo $d["tendanhmuc"]; ?>
							</a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-3 text-muted">
                        <h4>DỊCH VỤ KHÁCH HÀNG</h4>
                        <a href="#" class="list-group-item">Hướng dẫn mua hàng</a>
                        <a href="#" class="list-group-item">Câu hỏi thường gặp</a>
                        <a href="#" class="list-group-item">Liên hệ với chúng tôi</a>
                    </div>
                </div>
                <hr>
                <p class="m-0 text-center text-warning fw-bolder">Copyright &copy; ABC Shop 2023</p></div>
        </footer>

    </body>
</html>
