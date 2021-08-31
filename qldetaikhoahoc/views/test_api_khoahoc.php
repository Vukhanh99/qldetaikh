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
                        <!-- For demo purpose -->

                        <div class="row">
                            <div class="col-6 mx-auto rounded">
                                <form method="get" action="/khoahoc">
                                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                        <div class="input-group">
                                            <input type="text" placeholder="Nhập từ bạn cần tìm?"
                                                aria-describedby="button-addon1" name="Search"
                                                class="form-control border-0 bg-light">
                                            <div class="input-group-append">
                                                <button id="button-addon1" type="submit" name="submit"
                                                    class="btn btn-link text-primary"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="text-center text-warning h4">
                            <?php 
                            if(count($this->tableData)==0){
                                echo "Không tìm thấy dữ liệu!!";
                                die;
                            }
                           
                       ?>
                       <form id="vantest">

                            <input type="submit" value="click me" />  

                        </form>
                       </div>
                       <div id="dulieu_van"></div>
                        
                    </div>
                    <!-- ./col -->
                   
                </div>
            </div>
    </section>
</div>

<script src="../public/plugins/jquery/jquery.min.js"></script>

<script>
    jQuery.noConflict();
    jQuery(document).ready(function($){
        $('#vantest').submit(function(e){
            
            $.post("/api_KhoaHoc/",function(data,status){
                var _data = JSON.parse(data);
                var _counter = 0;
                var _view = '<table><tbody><tr><th>Name</th><th>Return</th></tr>';
                console.log('call api:', "Data: ", data, "Status: ", status);
                if(status === "success"){
                    $.each(_data.apis, function(ind, el) {

                    _view += '<tr><td>' + el.param + '</td><td>' + el.return + '</td></tr>';

                    _counter++;

                    });

                    _view += '</tbody></table>';

                    $('#jim_result').html(_view);

                    alert('has ' + _counter + ' results');

                    } else {

                    $('#jim_result').html('<strong>No result found!</strong>');

                    alert('something wrong!');

                }
            });
            return false;
        });
    });
</script>
<!-- {"success":true,"data":{"post":[],"get":{"url":"api_KhoaHoc\/createTest"},"model":[{"ID_khoaHoc":"34","tenKhoaHoc":"q","thoiGian":"2021-04-03","moTa":"
q<\/p>\r\n","mucTieu":"q","tinhTrang":"Ho\u00e0n th\u00e0nh","anh":"1a.jpg","danhMuc":"1"}
     {"success":true,"data":null,"apis":{"createTest":{"param":"no param","return":"object"},"getTest":{"param":"no param","return":"object"