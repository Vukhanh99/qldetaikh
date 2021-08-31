
<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bài Giảng</h1>
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
                    <div class="row">
                            <div class="col-6 mx-auto rounded">
                            <form method="get" action="/baigiang">
                            <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                <div class="input-group">
                                    <input type="text" placeholder="Nhập từ bạn cần tìm?"
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
                
                        <div class="text-center text-warning h4">
                            <?php 
                            if(count($this->tableData)==0){
                                echo "Không tìm thấy từ bạn cần tìm!!";
                                die;
                            }
                           
                       ?>
                       </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Mã khóa học</th>
                            <th>Mã bài giảng</th>
                            <th>Tên bài giảng</th>
                            <th>Thời Gian Học</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                         <?php foreach ($this->tableData as $key =>$val): ?>
                            <tr>
                                <td><?php echo $val['ID_khoaHoc']; ?> </td>
                                <td><?php echo $val['Mabaigiang']; ?></td>
                                <td><?php echo $val['tenbaigiang']; ?> </td>
                                <td> <?php echo $val['thoigianhoc']; ?> </td>
                                <td> <?php echo $val['noidung']; ?> </td>
                                <td style="text-align:center;">
                                <p class="btn-info"><a href="/baigiang/edit&ID_khoaHoc=<?php echo $val['ID_khoaHoc']; ?>" class="text-dark">Edit</a>&nbsp;</p>
                                <p class="btn-danger"><a
                                                href="/baigiang/delete&ID_khoaHoc=<?php echo $val['ID_khoaHoc']; ?>"
                                                class="text-dark"
                                                onclick="return window.confirm('Are you sure?');">Delete</a></p>
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
