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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="/AddBaiGiang/do_insert">
                    <div class="card-body"> 
                        <div class="form-group">
                            <label for="ID_khoaHoc">Mã Khóa Học</label>
                            <input type="text" value="<?php echo isset($record[0]['ID_khoaHoc'])?$record[0]['ID_khoaHoc']:''; ?>" class="form-control" id="ID_khoaHoc" name="ID_khoaHoc" placeholder="" disabled>
                        </div> 
                        
                        <div class="form-group">
                            <label for="Mabaigiang">Mã Bài Giảng</label>
                            <input type="text" value="<?php echo isset($record[0]['Mabaigiang'])?$record[0]['Mabaigiang']:''; ?>" class="form-control" id="Mabaigiang" name="Mabaigiang" placeholder="" >
                        </div>   
                        <div class="form-group">
                            <label for="tenbaigiang">Tên Bài Giảng</label>
                            <input type="text" value="<?php echo isset($record[0]['tenbaigiang'])?$record[0]['tenbaigiang']:''; ?>" class="form-control" id="tenbaigiang" name="tenbaigiang" placeholder="">
                        </div>  
                        <div class="form-group">
                            <label for="thoigianhoc">Thời Gian Học</label>
                            <input type="text" value="<?php echo isset($record[0]['thoigianhoc'])?$record[0]['thoigianhoc']:''; ?>" class="form-control" id="thoigianhoc" name="thoigianhoc" placeholder="">
                        </div> 
         
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội Dung</label>
                            <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title">
                                    Nội dung bài giảng
                                </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                <textarea id="summernote" name="noidung" class="ckeditor" cols="80" rows="10" >
                                                        
                                    <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>
                                   <?php echo isset($record[0]['noidung'])?$record[0]['noidung']:''; ?>
                                </textarea>
                                </div>
                               
                            </div>
                            </div>
                            
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
                        
                    </div>
                 
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