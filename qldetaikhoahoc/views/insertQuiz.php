<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm Quiz</h1>
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
                <form style="margin: 10px;" method="GET" enctype="multipart/form-data" action="doInsertQuiz">
                    <table class="table">

                        <tr>
                            <td>Mã câu hỏi:</td>
                            <td> <input name="ID_quiz" value=""></td>
                        </tr>
                        <tr>
                            <td>Mã môn học</td>
                            <td> <input name="ID_monHoc" value=""></td>
                        </tr>
                        <tr>
                            <td>Nội dung câu hỏi</td>
                            <td> <textarea id="summernote" name="noiDung" class="ckeditor" cols="80" rows="6">
                                         
                        <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>
                        </textarea></td>
                        </tr>
                        <tr>
                            <td>Đáp án</td>
                            <td>
                                A: <input name="dapAnText1"><br>
                                B: <input name="dapAnText2"><br>
                                C: <input name="dapAnText3"><br>
                                D: <input name="dapAnText4"><br>
                                <!-- <input name="dapAn"> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Đáp án đúng</td>
                            <td>
                            <select name="dapAn">
                                    <option name="dapAn" disabled selected hidden >--Lựa chọn--</option>
                                    <option name="dapAn" value="A">A</option>
                                    <option name="dapAn" value="B">B</option>
                                    <option name="dapAn" value="C">C</option>
                                    <option name="dapAn" value="D">D</option>
                                    
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="../quiz">Quay lại</a>
                    </div>
                </form>
            </div>
            <!-- ./col -->
        </div>
</div>
</section>
</div>