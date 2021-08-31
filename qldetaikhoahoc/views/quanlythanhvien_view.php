<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quản Lý Thành Viên</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <form method="get" action="/quanlythanhvien">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                                <input type="text" placeholder="Tìm Kiếm?"
                                    aria-describedby="button-addon1" name="Search"
                                    class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" name="submit"
                                        class="btn btn-link text-primary"><i
                                        class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card-body table-responsive p-0">
                <div class="text-center text-warning h4">
                            <?php 
                            if(count($this->tableData)==0){
                                echo "pu nha nhố";
                                die;
                            }
                           
                       ?>
                       </div>
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ và Tên</th>
                                <th>Số Điện Thoại</th>
                                <th>Giới Tính</th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Mã Lớp</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->tableData as $key =>$val):?>
                            <tr>
                                <td>
                                 <?php echo $val['ID_user']; ?></td>
                                <td> <?php echo $val['hoTen']; ?> </td>
                                <td> <?php echo $val['sdt']; ?> </td>
                                <td> <?php echo $val['gioiTinh']; ?> </td>
                                <td> <?php echo $val['email']; ?> </td>
                                <td> <?php echo $val['passWord']; ?> </td>
                                <td><?php echo $val['ID_lop'];?></td>
                                <td style="text-align:center;">
                                    <a href="/quanlythanhvien/edit&ID_user=<?php echo $val['ID_user']; ?>" >Sửa</a>&nbsp;


                                    <a href="/quanlythanhvien/delete&ID_user=<?php echo $val['ID_user']; ?>" onclick="return window.confirm('Bạn chắc chắn muốn xoá ??');">Xoá</a>


                                  
                                </td>
                            </tr>
                         <?php endforeach; ?>                            
                        </tbody>
                    </table>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
</div>
<div id="quanlythanhvien">
<div class="content-wrapper" style="min-height: 365px;">
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
</div>