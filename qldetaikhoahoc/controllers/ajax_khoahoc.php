<?php 
   class ajax_khoahoc extends Model{

        public function search(){
            $a = $_GET['data'];    
            // echo $a;   
            $modelName='khoahoc_model';
            $this->model = new $modelName();
            $this->model->getData_Conditions($a);
        }
   }
?>