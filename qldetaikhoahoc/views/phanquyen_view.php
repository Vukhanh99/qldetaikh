

<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phân Quyền Thành Viên</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
        <div class="row">
                            <div class="col-6 mx-auto rounded">
                                <form method="get" action="/phanquyen">
                                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                        <div class="input-group">
                                            <input type="text" placeholder="Nhập từ cần tìm?"
                                                aria-describedby="button-addon1" name="Search"
                                                class="form-control border-0 bg-light">
                                            <div class="input-group-append">
                                                <button id="button-addon1" name="submit"
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
                                echo " not found";
                                die;
                            }
                           
                       ?>


                       </div>

                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>

                            <th>level</th>
                            <th>Level_name</th>
                            <th>Họ tên</th>
                            <th colspan="3">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($this->tableData as $key =>$val): ?>
                            <tr>
                               
                                <td><?php echo $val['level']; ?></td>
                                <td> <?php echo $val['level_name']; ?> </td>

                                <td> <?php echo $val['hoTen']; ?> </td>        
                                <td>
                                    <a href="/phanquyen/edit&ID_phanQuyen=<?php echo $val['ID_phanQuyen']; ?>"onclick="return window.confirm('Are you sure?');"  class="phanquyen-edit">Edit</a>&nbsp;
                                    
                                    <a href="/phanquyen/delete&ID_phanQuyen=<?php echo $val['ID_phanQuyen']; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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

<div id="phanquyen">
    <section class="content">
        <div class="container-fluid">


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                
                 <form method="POST" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                    <div class="card-body"> 
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Level</label>                                  
                            <select name="level" value="<?php echo isset($record[0]['level'])?$record[0]['level']:''?>" id="level" class="form-control">
                                <option  >1</option>
                                <option  >2</option>
                                <option  >3</option>
                                <option  >4</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="level_name">Level_Name</label>                                  
                            <select name="level_name" class="form-control">
                                <option  >admin</option>
                                <option  >teacher</option>
                                <option  >student</option>
                                <option  >visitor</option>
                            </select>
                        </div>
                           
                    </div>
                 

                    <div class="card-footer">
                          
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
           
        </div>
</div>
</section>
</div>