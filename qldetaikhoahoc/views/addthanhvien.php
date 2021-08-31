
<div class="content-wrapper" style="min-height: 365px;">

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="m-0 text-dark">Thành Viên</h1>

                </div><!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active">Admin</li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

    <section class="content">

        <div class="container-fluid">





            <div class="card card-primary">

                <div class="card-header">

                    <h3 class="card-title">Thêm Thành Viên</h3>

                </div>


                <form method="post" enctype="multipart/form-data" action="/addquanlythanhvien/do_insert">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="ID_user">ID_user</label>
                            <input type="number" name="ID_user" class="form-control" id="ID_user" placeholder="Nhập ID"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="hoTen">Họ Tên</label>
                            <input type="text" name="hoTen" class="form-control" id="hoTen"  placeholder="Nhập tên" required ></br>
                            <?php echo isset($error['hoTen']) ? $error['hoTen'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="sdt">Số Điện Thoai</label>
                            <input type="number" name="sdt" class="form-control" id="sdt" placeholder="Nhập số điện thoại" required></br>
                            <?php echo isset($error['sdt']) ? $error['sdt'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="gioiTinh">Giới Tính</label>
                            <input type="text" name="gioiTinh" class="form-control" id="gioiTinh"
                                placeholder="Nhập giới Tính " required></br>
                                <?php echo isset($error['gioiTinh']) ? $error['gioiTinh'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="@gmail.com" required></br>
                            <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="passWord">Mật Khẩu</label>
                            <input type="text" name="passWord" class="form-control" id="passWord" placeholder="******" required></br>
                            <?php echo isset($error['passWord']) ? $error['passWord'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="ID_lop">Mã Lớp</label>
                            <select name="ID_lop" id="ID_lop" class="form-control" for="ID_user" >
                                <option  >L01</option>
                                <option  >L02</option>
                                <option  >L03</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </div>

                </form>

            </div>

            <!-- ./col -->

        </div>

</div>

</section>

</div>