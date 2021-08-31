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

                    <h3 class="card-title">Thêm lớp học mới</h3>

                </div>

                <!-- /.card-header -->

                <!-- form start -->

                <form method="post" enctype="multipart/form-data" action="/addlophoc/do_insert">

                    <div class="card-body">

                        <div class="form-group">

                            <label for="exampleInputID">ID lớp học</label>

                            <input type="text" name="ID_lop" class="form-control" id="exampleInputID"

                                placeholder="ID lớp học" disabled>

                        </div>

                        <div class="form-group">

                            <label for="exampleInputName">Tên lớp học</label>

                            <input type="text" name="tenLop" class="form-control" id="exampleInputName"

                                placeholder="Nhập tên lớp học" required>

                        </div>

                        <div class="form-group">

                            <label for="exampleInputID">ID_user</label>

                            <input type="text" name="ID_user" class="form-control" id="exampleInputID"

                                placeholder="ID user" disabled>

                        </div>

                        <div class="form-group">

                            <label for="exampleInputMota">Mô tả</label>

                            <div class="col-md-12">

                                <div class="card card-outline card-info">

                                    <div class="card-header">

                                        <h3 class="card-title">

                                            Nội dung mô tả tar tar

                                        </h3>

                                    </div>

                                    <!-- /.card-header -->

                                    <div class="card-body">

                                        <textarea id="exampleInputMota" name="moTa" class="ckeditor" cols="80" rows="10" required>
                                            <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>

                                        </textarea>
                                    </div>
                                </div>
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