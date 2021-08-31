<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Khóa học</h1>
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
                        <div class="row">
                            <!-- <div class="col-6 mx-auto rounded">
                                <form method="get">
                                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                        <div class="input-group">
                                            <input type="text" placeholder="Nhập từ bạn cần tìm?"
                                                aria-describedby="button-addon1" name="search"
                                                class="form-control border-0 bg-light">
                                            <div class="input-group-append">
                                                <button id="button-addon1" type="submit" name="submit"
                                                    class="btn btn-link text-primary btn_search"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                            <div class="col-8  mx-auto form-search">
                                <div class="form mb-4">
                                    <form>
                                        <input type="search" name="search_name" id="search_name" class="form-control search"
                                            placeholder="Nhập từ khóa cần tìm">
                                    </form>
                                   
                                </div>
                            </div>
                            
                        </div>
                        <div>
                            <table class="table table-hover text-nowrap">
                                <tr>
                                    <th>Mã khóa học</th>
                                    <th>Tên khóa học</th>
                                    <th>Thời gian</th>
                                    <th>Mô tả</th>
                                    <th>Mục tiêu</th>
                                    <th>Tình trạng</th>
                                    <th>Trạng thái</th>
                                    <th>Hình ảnh</th>
                                </tr>

                                <tbody class="km">


                                    <?php foreach ($this->tableData as $key =>$val): ?>
                                    <tr data-id="<?php echo $val['ID_khoaHoc']; ?>"
                                        data-name="<?php echo $val['tenKhoaHoc']; ?>">

                                        <td class="text-center">
                                            <?php echo $val['ID_khoaHoc']; ?>
                                        </td>
                                        <td contenteditable> <?php echo $val['tenKhoaHoc']; ?> </td>
                                        <td contenteditable> <?php echo $val['thoiGian']; ?> </td>
                                        <td contenteditable> <?php echo $val['moTa']; ?> </td>
                                        <td> <?php echo $val['mucTieu']; ?> </td>
                                        <td> <?php echo $val['tinhTrang'];?> </td>
                                        <td> <?php 
                                    
                                        if($val['danhMuc']==1) {
                                            echo "Hiển thị";
                                        }else {
                                            echo "Ẩn";
                                        }
                                        
                                        ?>
                                        </td>
                                        <td>
                                            <?php if($val['anh'] != "" && file_exists("public/upload/".$val['anh'])): ?>
                                            <img src="public/upload/<?php echo $val['anh']; ?>"
                                                style="width:80px;height:80px;">
                                            <?php endif; ?>

                                        </td>

                                        <td style="text-align:center;" class="align-middle">
                                            <p class="btn-info"><a
                                                    href="<?php echo BASEPATH;?>khoahoc/edit&ID_khoaHoc=<?php echo $val['ID_khoaHoc']; ?>"
                                                    class="khoahoc-edit">Edit</a>&nbsp;</p>
                                            <p class="btn-danger"><a
                                                    href="<?php echo BASEPATH;?>khoahoc/delete&ID_khoaHoc=<?php echo $val['ID_khoaHoc']; ?>"
                                                    class="text-dark"
                                                    onclick="return window.confirm('Are you sure?');">Delete</a></p>
                                            <p class="btn-danger">
                                            <form action="<?php echo BASEPATH;?>khoahoc/DkyKhoaHoc" method="post">
                                                <a href="<?php echo BASEPATH;?>khoahoc/DkyKhoaHoc&ID_khoaHoc=<?php echo $val['ID_khoaHoc']; ?>"
                                                    class="button" name="ID_khoaHoc"
                                                    onclick="return window.confirm('Are you sure?');">Đăng ký</a>
                                            </form>
                                            </p>
                                        </td>

                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- ./col -->

                </div>
            </div>
        </div>
    </section>
</div>
<div class="out_k">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                        <p class="text-right"><button type="button" class="btn btn-danger btn-close"><i
                                    class="fa fa-window-close" aria-hidden="true"></i></button></p>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" name="my-form" enctype="multipart/form-data" action="<?php echo $formAction; ?>"
                        id="popup-modal">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="tenKhoaHoc">Tên khóa hoc</label>
                                <input type="text"
                                    value="<?php echo isset($record[0]['tenKhoaHoc'])?$record[0]['tenKhoaHoc']:''; ?>"
                                    class="form-control" id="tenKhoaHoc" name="tenKhoaHoc"
                                    placeholder="Nhập tên khóa học">
                            </div>

                            <div class="form-group">
                                <label for="thoiGian">Thời gian</label>
                                <input type="date"
                                    value="<?php echo isset($record[0]['thoiGian'])?$record[0]['thoiGian']:''; ?>"
                                    id="thoiGian" name="thoiGian">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Summernote
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea id="summernote" name="moTa" class="ckeditor" cols="80" rows="10">

                                    <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>
                                   <?php echo isset($record[0]['moTa'])?$record[0]['moTa']:''; ?>
                                </textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="mucTieu">Mục tiêu</label>
                                <input type="text"
                                    value="<?php echo isset($record[0]['mucTieu'])?$record[0]['mucTieu']:''; ?>"
                                    class="form-control" name="mucTieu" id="mucTieu" placeholder="Mục tiêu">
                            </div>

                            <div class="form-group">
                                <label for="tinhTrang">Tình trạng</label>
                                <div>
                                    <select name="tinhTrang" class="form-control">
                                        <option value="Hoàn thành">Hoàn thành</option>
                                        <option value="Đang học">Đang học</option>
                                        <option value="Chưa bắt đầu">Chưa bắt đầu</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="danhMuc">Trạng thái</label>
                                <div>
                                    <select name="danhMuc" class="form-control">
                                        <option value="1">Hiển thị</option>
                                        <option value="2">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">Hình ảnh</div>

                                <input type="file" name="anh" />

                                <img src="/public/upload/<?php echo $record[0]['anh'];?>" alt=""
                                    style="width:80px;height:80px;">

                            </div>


                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-add">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- ./col -->
            </div>
        </section>
    </div>
</div>