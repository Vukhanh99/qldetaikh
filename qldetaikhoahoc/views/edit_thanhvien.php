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
                    <h3 class="card-title"></h3>
                </div>
               
                    <form method="GET" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <div class="card-body"> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID_user</label>
                            <input type="number" value="<?php echo isset($record[0]['ID_user'])?$record[0]['ID_user']:''?>" class="form-control" id="ID_user"  name="ID_user" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ Tên</label>
                            <input type="text" value="<?php echo isset($record[0]['hoTen'])?$record[0]['hoTen']:''?>" class="form-control" id="hoTen" name="hoTen" placeholder=""> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số Điện Thoai</label>
                            <input type="number" value="<?php echo isset($record[0]['sdt'])?$record[0]['sdt']:''?>" class="form-control" id="sdt" name="sdt" placeholder="">                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giới Tính</label>
                            <input type="text" value="<?php echo isset($record[0]['gioiTinh'])?$record[0]['gioiTinh']:''?>" class="form-control" id="gioiTinh" name="gioiTinh" placeholder="">                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="text" value="<?php echo isset($record[0]['email'])?$record[0]['email']:''?>" class="form-control" id="email" name="email" placeholder="">                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật Khẩu</label>
                            <input type="text" value="<?php echo isset($record[0]['passWord'])?$record[0]['passWord']:''?>" class="form-control" id="passWord" name="passWord" placeholder="">                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mã Lớp</label>                                  
                            <select name="ID_lop" value="<?php echo isset($record[0]['ID_lop'])?$record[0]['ID_lop']:''?>" id="ID_lop" class="form-control" for="ID_user" >
                                <option  >L01</option>
                                <option  >L02</option>
                                <option  >L03</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
            </div>
            <!-- ./col -->
        </div>

</section>
</div>