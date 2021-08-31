
<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lớp học</h1>
                </div><!-- /.col -->
            </div>
            <form method="get" action="/lophoc">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                                <input type="text" placeholder="Tìm Kiếm?"
                                    aria-describedby="button-addon1" name="Search"
                                    class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" name="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Mã lớp</th>
                            <th>Mã khóa học</th>
                            <th>Tên lớp</th>
                            <th>Mã user</th>
                            <th>Mô tả</th>             

                        </tr>
                    </thead>
                    <tbody>
                  
                         <?php foreach ($this->tableData as $key =>$val): ?>
                            <tr>
                                <td>M<?php echo $val['ID_lop']; ?></td>
                                <td>KH<?php echo $val['ID_khoaHoc']; ?> </td>
                                <td> <?php echo $val['tenLop']; ?> </td>
                                <td><?php echo $val['ID_user']; ?> </td>
                                <td> <?php echo $val['moTa']; ?> </td>

                                <td style="text-align:center;">  
                                <p class="btn-info"><a
                                                href="/lophoc/edit&ID_lop=<?php echo $val['ID_lop']; ?>"
                                                class="text-dark">Edit</a>&nbsp;</p>
                                        <p class="btn-danger"><a
                                                href="/lophoc/delete&ID_lop=<?php echo $val['ID_lop']; ?>"
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
