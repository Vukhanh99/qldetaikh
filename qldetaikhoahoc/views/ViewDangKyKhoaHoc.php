<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Khóa học đã đăng ký</h1>
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
                <div class="card-body table-responsive p-0">

                    <div class="container">
                        <!-- For demo purpose -->


                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>Mã khóa học</th>
                                <th>Tên khóa học</th>
                                <th>Thời gian đăng ký</th>
                                <th>Trạng thái</th>
                                <th>Confirm</th>
                                <th>ẢNh khóa học</th>

                            </tr>
                            </>
                            <tbody>

                            
                                <?php foreach ($this->tableData as $key =>$val): ?>
                                    <tr>
                                            <td class="text-center" style="text-alight:center;width:10%;">
                                                    KH<?php echo $val['ID_khoaHoc']; ?>
                                                </td>
                                                <td style="text-alight:center;width:20%;"> <?php echo $val['tenKhoaHoc']; ?> </td>
                                                <td style="text-alight:center;width:10%;"> <?php echo $val['TGDangKy']; ?> </td>
                                                <td style="text-alight:center;width:10%;"> <?php echo $val['TrangThai']; ?> </td>
                                                <td style="text-alight:center;width:10%;"> <?php echo $val['Confirm']; ?> </td>
                                                <td style="text-alight:center;width:10%;"> 
                                                    <?php if($val['anh'] != "" && file_exists("public/upload/".$val['anh'])): ?>
                                                    <img src="public/upload/<?php echo $val['anh']; ?>"
                                                        style="width:80px;height:80px;">
                                                    <?php endif; ?> 
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