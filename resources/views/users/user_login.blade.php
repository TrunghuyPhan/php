<div class="modal fade" id="login">
    <div class="modal-dialog" style="width: 500px;">
        <div class="modal-content">
            <form>
                <div class="modal-header" style="background: rgb(0,64,87); color: #FFF; text-align: center;">
                    <h4 class="modal-title">Thông tin Đăng nhập</h4>
                </div>
                <!-- Hiện lổi  -->
                <div class="hienloi">
                    <div class="dnloi"></div>
                    <div class="dnloi2"></div>
                    <div class="dnloi3"></div>
                </div>
                <div class="modal-body">
                    <!-- Form đăng nhập  -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="text" class="form-control dndienthoai" name="phone" placeholder="Số điện thoại">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control dnmatkhau" name="password" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="input-group">
                        <!--Button đăng nhập  -->
                        <span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
                        <input type="button" style="color: #FFF; background:rgb(0,64,87);  " class="form-control form-control-success dangnhap" name="login" value="Đăng Nhập">
                    </div>
                    <br>
                    <a href="#" class="btn btn-link">Quên mật khẩu?</a>
                    <!-- button close -->
                    <button type="button" class="btn btn-danger dongdangnhap" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        /* Xử lý đăng nhập*/
        $(".dangnhap").click(function() {
            var dndt = $(".dndienthoai").val();
            var dnmk = $(".dnmatkhau").val();
            var bieuthuc = /^(0[3578]|09)[0-9]{8}$/;
            var dntruyen = true;
            /* Kiểm tra điện thoại*/
            if (dndt != "") {
                if (dndt.search(bieuthuc) == -1) {
                    $(".dnloi").html("<div class='alert alert-danger'><strong>Số điện thoại bạn nhập không hợp lệ !</trong></div>");
                    dntruyen = false;
                } else {
                    $(".dnloi").html("");
                }
            } else {
                $(".dnloi").html("<div class='alert alert-danger'><strong>Số điện thoại không được để trống !</strong></div>");
                dntruyen = false;
            }
            /* Kiểm tra mật khẩu*/
            if (dnmk == "") {
                $(".dnloi2").html("<div class='alert alert-danger'><strong>Mật khẩu không được để trống !</strong></div>");
                dntruyen = false;
            } else if (dnmk.length > 30 || dnmk.length < 6) {
                $(".dnloi2").html("<div class='alert alert-danger'><strong>Độ dài mật khẩu ít nhất 6 ký tự và  không quá 30 ký tự !</strong></div>");
                dntruyen = false;
            } else {
                $(".dnloi2").html("");
            }
            /* Không lổi thì gửi dữ liệu đi bằng ajax */
            if (dntruyen == true) {
                $.ajax({
                    url: '{{route("dangnhap")}}',
                    type: 'POST',
                    data: {
                        _token: '{{csrf_token()}}',
                        DNDT: dndt,
                        DNMK: dnmk
                    },
                    success: function(data) {
                        if (data.kq == 0) {
                            $(".dnloi3").html("<div class='alert alert-danger'><strong>Số điện thoại hoặc mật khẩu không đúng !</strong></div");
                        } else {
                            var sdt = data.sdt;
                            var ma = data.ma;
                            $("#login").modal("hide");
                            $(".header").html("<img src='{{asset('img/logo.png')}}' height='40'><ul><li><a  href='#' style='line-height: 40px;color: #FFF;'>( Đăng xuất )</a></li><li style='color: #FFF;line-height: 40px;'><i class='fa fa-address-book-o' style='font-size:20px; margin-right: 3px;'></i>  <a href='thongtin/" + ma + "' style='color: #CCC; cursor: pointer;'>" + sdt + "</a></li></ul>");
                            location.reload();
                        }

                    }
                });
            }
        });
        /* Kết thức xử lý đăng nhập*/
        $(".dongdangnhap").click(function() {
            $(".dnloi").html("");
            $(".dnloi2").html("");
            $("dnloi3").html("");
        });
    });
</script>