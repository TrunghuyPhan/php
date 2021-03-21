<div class="modal fade" id="register">
    <div class="modal-dialog" style="width:500px;">
        <div class="modal-content">
            <form>
                <div class="modal-header" style="background: rgb(0,64,87); color: #FFF; text-align: center;">
                    <h4 class="modal-title">Thông tin Đăng ký</h4>
                </div>
                <!-- hiện lổi -->
                <div class="hienloi">
                    <div class="loi"></div>
                    <div class="loi2"></div>
                    <div class="loi3"></div>
                    <div class="loi4"></div>
                    <div class="loi5"></div>
                    <div class="loi6"></div>
                    <div class="loi7"></div>
                    <div class="dangkytc"></div>
                </div>
                <div class="modal-body">
                    <!-- form đăng ký -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="text" class="form-control dienthoai" name="phone" placeholder="Số điện thoại">
                    </div>
                    <br>
                    <!-- Họ và tên  -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control txtname" name="name" placeholder="Họ và tên">
                    </div>
                    <br>
                    <!-- Ngày sinh  -->
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-hourglass"></span></span>
                        <input type="date" class="form-control txtngaysinh" value="1994-02-20" name="ngaysinh">
                    </div>
                    <br>
                    <!-- Email  -->
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-hourglass"></span></span>
                        <input type="text" class="form-control txtemail" placeholder="example@gmail.com" name="email">
                    </div>
                    <br>
                    <!--  Giới tính-->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-transgender-alt"></i></span>
                        <label class="checkbox-inline">
                            <input type="radio" name="txtgioitinh2" value="1" checked>Nam
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="txtgioitinh2" value="2">Nữ
                        </label>
                    </div>
                    <br>
                    <!--  mật khẩu -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control matkhau" name="password" placeholder="Mật khẩu">
                    </div>
                    <br>
                    <!-- repassword -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-repeat"></i></span>
                        <input type="password" class="form-control rematkhau" name="repassword" placeholder="Xác nhận Mật khẩu">
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="input-group">
                        <!-- button đăng ký -->
                        <span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
                        <input type="button" style="color: #FFF;background: rgb(0,64,87);" class="form-control form-control-success dangky" name="register" value="Đăng Ký">
                    </div>
                    <br>
                    <!-- đã có tài khoản -->
                    <a href="javascript:void(0)" data-dismiss="modal" onclick="$(body).css('padding-right','0');" data-toggle="modal" data-target="#login" class="btn btn-link">Đã Có Tài Khoản?</a>
                    <!-- button close  -->
                    <button type="button" class="btn btn-danger dongdangky" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        /* Xử lý đăng ký */
        $(".dangky").click(function() {
            var sdt = $(".dienthoai").val();
            var bieuthuc = /^(0[3578]|09)[0-9]{8}$/;
            var bieuthuc2 = /[a-zA-Z][^#&<>\"~;$^%{}?]{1,50}$/;
            var truyen = true;
            var gioitinh = document.getElementsByName("txtgioitinh2");

            for (var i = 0; i < gioitinh.length; i++) {
                if (gioitinh[i].checked == true) {
                    gt = gioitinh[i].value;
                }
            }
            var ngaysinh = $(".txtngaysinh").val();
            /*Kiểm tra điện thoại*/
            if (sdt != "") {
                if (sdt.search(bieuthuc) == -1) {
                    $(".loi").html("<div class='alert alert-danger'><strong>Số điện thoại bạn nhập không hợp lệ !</strong></div>");
                    truyen = false;
                } else {
                    $(".loi").html("");
                }
            } else {
                $(".loi").html("<div class='alert alert-danger'><strong>Số điện thoại không được để trống !</strong></div>");
                truyen = false;
            }
            /*Kiểm tra mail*/
            var email = document.getElementsByName('email');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!filter.test(email.value)) {
                $(".loi7").html("<div class='alert alert-danger'><strong>Email khong hop le!</strong></div>");

            } else {
                $(".loi7").html("");

            }
            /*Kiểm tra tên*/
            var name = $(".txtname").val();
            if (name.search(bieuthuc2) == -1) {
                $(".loi6").html("<div class='alert alert-danger'><strong>Tên bạn nhập không hợp lệ !</strong></div>");
                truyen = false;
            } else {
                $(".loi6").html("");
            }
            /*Kiểm tra mật khẩu */
            var mk = $(".matkhau").val();
            var rmk = $(".rematkhau").val();
            var xemmk = true;
            if (mk == "") {
                $(".loi2").html("<div class='alert alert-danger'><strong>Mật khẩu không được để trống !</strong></div>");
                truyen = false;
                xemk = false;
            } else if (mk.length > 30 || mk.length < 6) {
                $(".loi2").html("<div class='alert alert-danger'><strong>Độ dài mật khẩu ít nhất 6 ký tự và  không quá 30 ký tự !</strong></div>");
                truyen = false;
                xemmk = false;
            } else {
                $(".loi2").html("");
            }
            /*Kiểm tra repassword*/
            if (rmk == "") {
                $(".loi3").html("<div class='alert alert-danger'><strong>Nhập lại mật khẩu không được để trống !</strong></div>");
                truyen = false;
                xemmk = false;
            } else if (rmk.length > 30 || rmk.length < 6) {
                $(".loi3").html("<div class='alert alert-danger'><strong>Nhập lại mật khẩu có độ dài không đúng!</strong></div>");
                truyen = false;
                xemmk = false;
            } else {
                $(".loi3").html("");
            }
            /*Kiểm tra nhập lại mật khẩu đúng không*/
            if (xemmk == true && mk != rmk) {
                $(".loi4").html("<div class='alert alert-danger'><strong>Nhập lại mật khẩu không giống mật khẩu!</strong></div>");
                truyen = false;
            } else {
                $(".loi4").html("");
            }
            /*Kiểm tra xem đúng chưa để mở ajax truyền dữ liệu đi*/
            if (truyen == true) {
                $.ajax({
                    url: '{{route("dangky")}}',
                    type: 'POST',
                    data: {
                        _token: '{{csrf_token()}}',
                        SDT: sdt,
                        MK: mk,
                        NGAYSINH: ngaysinh,
                        GT: gt,
                        NAME: name
                    },
                    success: function(data) {
                        if (data.kq == 0) {
                            $(".loi5").html("<div class='alert alert-danger'><strong>Xin lổi - Số điện thoại này đã đăng ký tài khoản trước đó !</strong></div>");
                        } else if (data.kq == 1) {
                            $(".dangkytc").html("<div class='alert alert-success'><strong>Bạn đã đăng ký thành công, bấm <a href='javascript:void(0);' data-toggle='modal' data-target='#login' data-dismiss='modal' class='btn btn-link'>Đăng nhập</a> để tiếp tục</trong></div>");
                        }

                    }
                });
            }
        });
        /* Kết thúc xử lý đăng ký*/
        /* Xử lý đóng đăng ký*/
        $(".dongdangky").click(function() {
            $(".loi").html("");
            $(".loi2").html("");
            $(".loi3").html("");
            $(".loi4").html("");
            $(".loi5").html("");
            $(".dangkytc").html("");
        });

    });
</script>