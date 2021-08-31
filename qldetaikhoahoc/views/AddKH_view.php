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


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm khóa học mới</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="<?php echo BASEPATH; ?>addkhoahoc/do_insert">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputID">ID khóa học</label>
                            <input type="text" name="ID_khoaHoc" class="form-control" id="exampleInputID"
                                placeholder="ID khóa học" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Tên khóa học</label>
                            <input type="text" name="tenKhoaHoc" class="form-control" id="exampleInputName"
                                placeholder="Nhập tên khóa học" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Thời gian</label>
                            <input type="date" id="exampleInputPassword" name="thoiGian" class="form-control"
                                style="width:20vw"; required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputMota">Mô tả</label>
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Nội dung mô tả
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <textarea id="exampleInputMota" name="moTa" class="ckeditor" cols="80"
                                            rows="10" required>

                                    <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>
                                  
                                </textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputMuctieu">Mục tiêu</label>
                            <input type="text" name="mucTieu" class="form-control" id="exampleInputMuctieu"
                                placeholder="Mục tiêu" required>

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
                           <label for="my-input">Ảnh</label><br/>
                           <input type="file" name="image" multiple="multiple" required>
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

                      
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
               
            </div>
            <!-- ./col -->
        </div>
</div>
</section>
</div>