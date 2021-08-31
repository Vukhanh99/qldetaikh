
<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><center>Thống Kê Chất Lượng Học Viên</center></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div> 
                <div class="col-sm-6">
                    <form method="get" action="/thongke">
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
                                echo " not found";
                                die;
                            }
                           
                       ?>
                       </div>
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã lớp</th>
                        <th>Họ và tên</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Điểm</th>
                    </tr>
                </thead>
                        <tbody>
                        <?php foreach ($this->tableData as $key =>$val): ?>
                            <tr>
                                <td><?php echo $val['ID_user']; ?></td>
                                <td> <?php echo $val['ID_lop']; ?> </td>
                                <td> <?php echo $val['hoTen']; ?> </td>                              
                                <td> <?php echo $val['gioiTinh']; ?></td>
                                <td> <?php echo $val['email']; ?> </td>
                                <td> <?php echo $val['diem']; ?> </td>                                                                   
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
