<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa Quiz</h1>
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
                <form style="margin: 10px;" method="GET" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <table class="table">

                        <tr>
                            <td>Mã câu hỏi:</td>
                            <td> <input name="ID_quiz" value="<?php echo $record[0]['ID_quiz'] ?>" disabled></td>
                        </tr>
                        <tr>
                            <td>Mã môn học</td>
                            <td> <input name="ID_monHoc" value="<?php echo $record[0]['ID_monHoc'] ?>" ></td>
                        </tr>
                        <tr>
                            <td>Nội dung câu hỏi</td>
                            <td> <textarea id="summernote" name="noiDung" class="ckeditor" cols="80" rows="6">

                        <?php echo $record[0]['noiDung']; ?>                                           
                        <script src="{!! asset('../public/ckeditor/ckeditor.js') !!}"></script>
                        </textarea></td>
                        </tr>
                        <tr>
                            <td>Đáp án đúng</td>
                            <td>
                                <select name="dapAn">
                                    <option name="dapAn" disabled selected hidden >--Lựa chọn--</option>
                                    <option name="dapAn" value="A">A. <?php echo $record[0]['dapAnText']?></option>
                                    <option name="dapAn" value="B">B. <?php echo $record[1]['dapAnText']?></option>
                                    <option name="dapAn" value="C">C. <?php echo $record[2]['dapAnText']?></option>
                                    <option name="dapAn" value="D">D. <?php echo $record[3]['dapAnText']?></option>
                                    
                                </select>
                                <br>
                                <!-- <input type="radio" name="dapAn" value="A"> <?php echo $record[0]['dapAnText']?><br>
                                <input type="radio" name="dapAn" value="B"> <?php echo $record[1]['dapAnText']?><br>
                                <input type="radio" name="dapAn" value="C"> <?php echo $record[2]['dapAnText']?><br>
                                <input type="radio" name="dapAn" value="D"> <?php echo $record[3]['dapAnText']?><br> -->

                                <!-- <input type="text" name="dapAn" value="<?php echo $record[0]['dapAn']?>"><br> -->
                                <!-- <?php
                                for($i=0; $i<4; $i++){
                                    echo $record[$i]['dapAn'].' '.$record[$i]['dapAnText'].'<br>';
                                }
                                ?> -->
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