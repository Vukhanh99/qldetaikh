<div class="content-wrapper" style="min-height: 365px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Phân Quyền Thành Viên</h1>
                </div>
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