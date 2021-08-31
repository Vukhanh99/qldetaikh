<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lớp học</h1>
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
                <form method="get" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <div class="card-body"> 
                        <div class="form-group">
                            <label for="tenLopHoc">Tên lớp</label>
                            <input type="text" value="<?php echo isset($record[0]['tenLop'])?$record[0]['tenLop']:''; ?>" class="form-control" id="tenLop" name="tenLop" placeholder="Nhập tên lớp học">
                        </div>
                        <div class="form-group">
                            <label for="danhmuc">Phân loại</label>
                            <div class="">
                                <select name="ID_danhMuc" class="form-control" style="width: 300px;">
                                     <option>Lớp cơ bản</option>
                                     <option>Lớp nâng cao</option>

                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thông tin thêm</label>
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
                                                        
                                    <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>
                                   <?php echo isset($record[0]['moTa'])?$record[0]['moTa']:'vào đây nhé'; ?>
                                </textarea>thông tin lớp
                                </div>
                               
                            </div>
                            </div>
                            
                        </div>
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