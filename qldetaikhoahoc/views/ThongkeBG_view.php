
<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thống Kê Phân Công Giảng Dạy</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">Admin</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Mã bài giảng</th>
                        <th>Tên bài giảng</th>
                        <th>Nội dung</th>
                        <th>Thời gian</th>
                        <th>Giáo viên giảng dạy</th>
                        
                    </tr>
                </thead>
                        <tbody>
                        <?php foreach ($this->tableData as $key =>$val): ?>
                            <tr>
                                <td><?php echo $val['ID_khoaHoc']; ?></td>
                                <td> <?php echo $val['tenbaigiang']; ?> </td>
                                <td> <?php echo $val['noidung']; ?> </td>
                                <td> <?php echo $val['thoigianhoc']; ?> </td>                              
                                <td> <?php echo $val['hoTen']; ?></td>
                                
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
