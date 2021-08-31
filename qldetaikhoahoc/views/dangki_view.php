<!DOCTYPE html>
<html>

<head>
    <title>Đăng kí</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>

<body id="body">
    <form action="dangki/dangki" method="post" enctype="multipart/form-data">
        <div id="nen">
            <div id="img">
                <img src="../public/upload/img-login1.jpg" class="img_banner"></em>
                <em>
            </div>
            <div id="dk">
                <div id="nd">
                    <table width="900px">
                    <tr>
                            <div class="tt">
                                <td widht="200"><label for="nn">ID user</label></td>
                                <td width="400"><input type="text" name="ID_user" id="ID_user" class="input1" required></td>
                            </div>

                        </tr>
                        <tr>
                            <div class="tt">
                                <td widht="200"><label for="nn">Họ Tên</label></td>
                                <td width="400"><input type="text" name="hoTen" id="hoTen" class="input1" value="" required></td>
                            </div>

                        </tr>
                        <tr>
                            <div class="tt">
                                <td widht="200"><label for="nn">Tên Đăng Nhập </label></td>
                                <td width="400"><input type="text" name="email" id="email" class="input1" required> </td>
                            </div>
                            <!--<p class="xacnhanten">Ten dang nhap da ton ta.</p>-->
                            

                        </tr>
                        <tr>
                            <div class="tt">
                                <td widht="200"><label for="nn">Mật Khẩu</label></td>
                                <td width="400"><input type="password" name="passWord" id="passWord" class="input1" required></td>
                            </div>
                          

                        </tr>

                        <tr>
                            <div class="tt">
                                <td width="200"><label for="nn">Giới Tính: </label></td>
                                <td width="400"><span
                                        style="font-size:20px;color:#000;margin-left:36px;padding:5px 5px;"><input
                                            type="radio" name="gioiTinh" id="gioiTinh" value="1" checked="checked" />Nam
                                        <input type="radio" name="gioiTinh" id="gioiTinh" value="0" />Nữ</span>
                                </td>

                        </tr>
                        <tr>
                            <div class="tt">
                                <td width="200"><label for="nn">Email: </label></td>
                                <td width="400"><input type="text" name="email" id="email" class="input1" required></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="tt">
                                <td width="200"><label for="nn">Năm Sinh :</label></td>
                                <td width="400"><input type="text" name="namSinh" id="namSinh" class="input1" required></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="tt">
                                <td width="200"><label for="nn">Số Điện Thoại : </label></td>
                                <td width="400"><input type="text" name="sdt" id="sdt" class="input1" required></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="tt">
                                <td width="200"><label for="nn">Thông Tin Điều Khoản</label></td>
                                <td width="400">
                                    <div id="hide">
                                        <input type="button" value="Hide" class="hide"
                                            style="font-size:15px;color:#000;margin-left:36px;padding:2px 0px;" />
                                        <input type="button" value="Show" class="show"
                                            style="font-size:15px;color:#000;padding:2px 0px;" />
                                    </div>
                                    <div id="tt-dkhoan">
                                        <input type="button" id="dieukhoan" value="Đọc điêu khoản"
                                            style="font-size:15px;color:#000;margin-left:36px;padding:2px 2px;" /></br>
                                    </div>
                                    <span style="font-size:20px;color:#000;margin-left:36px;padding:5px 5px;"><input
                                            type="checkbox" value="xacnhan_dk" name="$xn_DieuKhoan" />Tôi chấp nhận điều
                                        khoản.</span>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="tt">
                                <td colspan="2" align="center"><input type="submit" name="submit" class="nut"
                                        value="Đăng Ký">
                                    <input type="reset" name="reset" class="nut" value="Hủy" />
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <td class="text4"><a href="/login">Quay về đăng nhập</a> </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--ket thuc dk-->
        </div>
        <!---ket thuc nen-->
    </form>
</body>

</html>