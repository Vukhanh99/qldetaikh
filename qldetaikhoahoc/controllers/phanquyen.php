<?php
class phanquyen extends Controller {
	function __construct() {
        // first call, not change the coding order
			parent::__construct('phanquyen_model');
        }
    
        function index() {
            if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
            $Conditions = isset($_GET['Search'])? $_GET['Search']: 0;
           
           
            if ($_GET["Search"] != '') {
                $Conditions = $_GET['Search'];                 
                $this -> viewLoader -> tableData = $this -> model -> getData_Conditions($Conditions); 
                $this -> viewLoader -> render('phanquyen_view');

            }else{
                $this -> viewLoader -> tableData = $this -> model -> getData();
                $this -> viewLoader -> render('phanquyen_view');
            }   
             
        } else {           
                $this->viewLoader->render('warning_phan_quyen');
            }
                   

            // if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
               
            //     $this -> viewLoader -> tableData = $this -> model -> getData();
                
            //     $this->viewLoader->render('phanquyen_view');
			// } else {           
            //     $this->viewLoader->render('warning_phan_quyen');
            // }
                   
    
        }
        function insertRow() {  
           
            $this -> model -> insertRow(filter_var($_POST['text'] , FILTER_SANITIZE_STRING));
        }
     
         function edit(){
        
            $ID_phanQuyen = isset($_GET['ID_phanQuyen']) ? $_GET['ID_phanQuyen']: '';
            $record = $this->model->fetch($ID_phanQuyen);
            $formAction = "/phanquyen/doEdit&ID_phanQuyen=$ID_phanQuyen";
            $this -> viewLoader -> render('AddEditPhanQuyenView',array("record"=>$record, "formAction"=>$formAction) );
        }
        function doEdit() {
            $data=[];
            $ID_phanQuyen = isset($_GET['ID_phanQuyen']) ? $_GET['ID_phanQuyen']: 0;
             $level = isset($_POST['level']) ? $_POST['level']: 0;
            $level_name = isset($_POST['level_name']) ? $_POST['level_name']: 0;
            $data['level']=$level;
            $data['level_name']=$level_name;
            
           $this->model->update($ID_phanQuyen, $data);
            
            header('location:' . BASEPATH . '/phanquyen');
         
         
        }
        
        function delete() {
            // validate id
            /// check exists 
            // if exists delete
            // else through error
           
            // var_dump($_GET);   
            $ID_phanQuyen=0;      
            if(isset($_GET['ID_phanQuyen']) && $_GET['ID_phanQuyen'] !='' && $_GET['ID_phanQuyen'] > 0) {
                $ID_phanQuyen=$_GET['ID_phanQuyen'];
                $this->model->deleteRow($ID_phanQuyen);
                header('location:/phanquyen');
            exit();
            }
         
        }       
    }
    
