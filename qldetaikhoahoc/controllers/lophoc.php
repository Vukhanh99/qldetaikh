<?php



class lophoc extends Controller {



	function __construct() {



		

            parent::__construct('lophoc_model');

            $this->session=new Session();

            $this->session->start();   

            if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {

                header('location:' . BASEPATH . 'login');

            } 

        }

    

        function index() {


        //    hiện thị
            $Conditions = isset($_GET['Search'])? $_GET['Search']: 0;
            // var_dump($Conditions);die; 
            // var_dump($_GET);die;
            if (isset( $_GET['submit']) && $_GET["Search"] != '') {
                $Conditions = $_GET['Search'];      
                $this -> viewLoader -> tableData = $this -> model -> getData_Conditions($Conditions); 
                $this -> viewLoader -> render('lop_view');

            }else{
                $this -> viewLoader -> tableData = $this -> model -> getData();
                $this -> viewLoader -> render('lop_view');
            } 

            //gốc
            // $this -> viewLoader -> tableData = $this -> model -> getData();
            // $this -> viewLoader -> render('lop_view');
            

    

        }


    
        function edit(){

            // var_dump ($_GET);
          
            $ID_lop = isset($_GET['ID_lop']) ? $_GET['ID_lop']: '';
            $record = $this->model->fetch($ID_lop);
            $formAction = "/lophoc/doEdit&ID_lop=$ID_lop";
            $this -> viewLoader -> render('AddEditLopHocView',array("record"=>$record, "formAction"=>$formAction) );
        }
        function doEdit() {

            // var_dump($_GET);die;
           
            $ID_lop = isset($_GET['ID_lop'])&&is_numeric($_GET['ID_lop']) ? $_GET['ID_lop']: 0;
            $ID_khoaHoc = isset($_POST['ID_khoaHoc'])? $_POST['ID_khoaHoc']: 0;
            $ten_lop = isset($_POST['tenLop']) ? $_POST['tenLop']: 0;
            $ID_user = isset($_POST['ID_user']) ? $_POST['ID_user']: 0;
            $mo_ta = isset($_POST['moTa']) ? $_POST['moTa']: 0;

            // print_r($_GET);
            // die;
            
            

            $data['ID_khoaHoc'] = $ID_khoaHoc;
            $data['tenLop']=$ten_lop;
            $data['ID_user']=$ID_user;
            $data['moTa']=$mo_ta;

            // var_dump($data);
            // die; 

            $conn=$this->model->updateSingleData($ID_lop,$data);
            // var_dump($conn);die;
            header('location:/lophoc');
            
            // echo "sẽ chẳng có gì xuất hiện đâu :(";
            
        }
    


        function delete() {
            // echo "this function delete";
            // $this -> model -> deleteRow($ID_lop);
            // var_dump ($_GET);
            $ID_lop = isset($_GET['ID_lop'])&&is_numeric($_GET['ID_lop']) ? $_GET['ID_lop']: 0;
             $this->model->deleteRow($ID_lop);
            // var_dump($_GET);
            // die;
            header('location:/lophoc');
            

            
        }
        public function DKLopHoc(){
            $this -> viewLoader -> tableData = $this -> model -> getDataDKKH(); 
                $this -> viewLoader -> render('ViewDangKyLopHoc');
        }
        function do_insert(){

      
  
      
            $data=array(
    
                'ID_lop'=>$_POST['ID_lop'],
    
                'ID_khoaHoc'=>$_POST['ID_khoaHoc'],
    
                'tenLop'=>$_POST['tenLop'],
    
            );
    
          
    
       
    
            $this -> model -> insert_data($data);
    
    
    
            header('location:/lophoc');
    
    
    
        }

    }