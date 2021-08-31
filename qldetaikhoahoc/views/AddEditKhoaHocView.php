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
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <div class="card-body"> 
                    
                        <div class="form-group">
                            <label for="tenKhoaHoc">Tên khóa hoc</label>
                            <input type="text" value="<?php echo isset($record[0]['tenKhoaHoc'])?$record[0]['tenKhoaHoc']:''; ?>" class="form-control" id="tenKhoaHoc" name="tenKhoaHoc" placeholder="Nhập tên khóa học">
                        </div>    

                        <div class="form-group">
                            <label for="thoiGian">Thời gian</label>
                            <input type="datetime" value="<?php echo isset($record[0]['thoiGian'])?$record[0]['thoiGian']:''; ?>" id="thoiGian" name="thoiGian">
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
                                <textarea id="summernote" name="moTa" class="ckeditor" cols="80" rows="10" >
                                                        
                                    <script src="{!! asset('<?php echo BASEPATH; ?>public/ckeditor/ckeditor.js') !!}"></script>
                                   <?php echo isset($record[0]['moTa'])?$record[0]['moTa']:''; ?>
                                </textarea>
                                </div>
                               
                            </div>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="mucTieu">Mục tiêu</label>
                            <input type="text" value="<?php echo isset($record[0]['mucTieu'])?$record[0]['mucTieu']:''; ?>" class="form-control" name="mucTieu" id="mucTieu" placeholder="Mục tiêu">
                        </div>

                        <div class="form-group">
                            <label for="tinhTrang">Tình trạng</label>
                            <div>
                                <select name="tinhTrang" class="form-control" >
                                    <option value="Hoàn thành">Hoàn thành</option>
                                    <option value="Đang học">Đang học</option>
                                    <option value="Chưa bắt đầu">Chưa bắt đầu</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tinhTrang">Trạng thái</label>
                            <div>
                                <select name="tinhTrang" class="form-control" >
                                    <option value="1">Hiển thị</option>
                                    <option value="2">Ẩn</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">   
                            <div class="col-md-2">Hình ảnh</div>
                           
                            <input type="file" name="anh"/>
                           
                            <img src="/public/upload/<?php echo $record[0]['anh'];?>" alt=""style="width:80px;height:80px;">
                            
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
</div>
</section>
</div>