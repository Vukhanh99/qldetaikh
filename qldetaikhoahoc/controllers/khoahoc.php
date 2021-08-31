<?php



class khoahoc extends Controller {



	function __construct() {



			parent::__construct('khoahoc_model');

			$this->session=new Session();

			$this->session->start();   

            if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {

                header('location:' . BASEPATH . 'login');

            } 
           
        }

    

        function index() {

    
            // if($this->checkPessionLevel($this->getCurrentUserID(), 4)) {// đúng rồi,=))
			// 	echo 'bạn có quyền Admin';
            //     $this -> viewLoader -> tableData = $this -> model -> getData();
            //     $this->viewLoader->render('khoahoc_view');
			// } else {
                
            //     $this->viewLoader->render('warning_phan_quyen');
                
            // }


           // gì mà copy cũng thiếu

        //    hiện thị
            $Conditions = isset($_GET['search'])? $_GET['search']: 0;
            // var_dump($Conditions);die; 
            // var_dump($_GET);die;
            if (isset( $_GET['submit']) && $_GET["search"] != '') {
                $Conditions = $_GET['search'];      
                $this -> viewLoader -> tableData = $this -> model -> getData_Conditions($Conditions); 
                $this -> viewLoader -> render('khoahoc_view');

            }else{
                $this -> viewLoader -> tableData = $this -> model -> getData();
                $this -> viewLoader -> render('khoahoc_view');
            } 

            //gốc
            // $this -> viewLoader -> tableData = $this -> model -> getData();
            // $this -> viewLoader -> render('khoahoc_view');
            

    

        }
        

      
        function edit(){

            // var_dump ($_GET);
          
            $ID_khoaHoc = isset($_GET['ID_khoaHoc']) ? $_GET['ID_khoaHoc']: '';
            $record = $this->model->fetch($ID_khoaHoc);
            $formAction = BASEPATH . "khoahoc/doEdit&ID_khoaHoc=$ID_khoaHoc";
            $this -> viewLoader -> render('AddEditKhoaHocView',array("record"=>$record, "formAction"=>$formAction) );
        }
        function doEdit() {

            // var_dump($_GET);die;
           
            $ID_khoaHoc = isset($_GET['ID_khoaHoc'])&&is_numeric($_GET['ID_khoaHoc']) ? $_GET['ID_khoaHoc']: 0;
            // $tinhTrang = isset($_GET['tinhTrang']) ? $_GET['tinhTrang']: 0;
            $thoiGian = isset($_POST['thoiGian'])? $_POST['thoiGian']: 0;
            $moTa = isset($_POST['moTa']) ? $_POST['moTa']: 0;
            $mucTieu = isset($_POST['mucTieu']) ? $_POST['mucTieu']: 0;
            $tinhTrang = isset($_POST['tinhTrang']) ? $_POST['tinhTrang']: 0;
            $tenKhoaHoc = isset($_POST['tenKhoaHoc']) ? $_POST['tenKhoaHoc']: 0;
            $tinhTrang = isset($_POST['tinhTrang']) ? $_POST['tinhTrang']: 0;
            $anh=$_FILES['anh']['name'];

            // print_r($_GET);
            // die;

            $data['tenKhoaHoc'] = $tenKhoaHoc;
            $data['thoiGian']=$thoiGian;
            $data['moTa']=$moTa;
            $data['mucTieu']=$mucTieu;
            $data['tinhTrang']=$tinhTrang;
            $data['tinhTrang']=$tinhTrang;
            $data['anh']=$anh;

            var_dump($data);
            die; 

              
            $conn=$this->model->updateSingleData($ID_khoaHoc,$data);
            // var_dump($conn);die; 
            header('location:'.BASEPATH.'khoahoc');
            
            // echo "sẽ chẳng có gì xuất hiện đâu :(";
            
        }
    


        function delete() {
            // echo "this function delete";
            // $this -> model -> deleteRow($ID_khoaHoc);
            // var_dump ($_GET);
            $ID_khoaHoc = isset($_GET['ID_khoaHoc'])&&is_numeric($_GET['ID_khoaHoc']) ? $_GET['ID_khoaHoc']: 0;
             $this->model->deleteRow($ID_khoaHoc);
            // var_dump($_GET);
            // die;
            header('location:'.BASEPATH.'khoahoc');  
            
            // $ID_khoaHoc=0;      
            // if(isset($_GET['ID_khoaHoc']) && $_GET['ID_khoaHoc'] !='' && $_GET['ID_khoaHoc'] > 0) {
            //     $ID_khoaHoc=$_GET['ID_khoaHoc'];
            //     $this->model->deleteRow($ID_khoaHoc);
            //     header('location:/khoahoc');
            // exit();
        // }
        }
        public function DkyKhoaHoc(){
            $data=[];
            $ID_khoaHoc = isset($_GET['ID_khoaHoc'])? $_GET['ID_khoaHoc']: 0 ;
            $data['ID_khoaHoc'] = (int)$ID_khoaHoc;
            // var_dump($data);die;
            $conn=$this->model->DangKyKH($data);
            // var_dump($conn);die('vào đây');
            header('location:'.BASEPATH.'DKKH');
        }
        public function view_dkykhoahoc(){
            $this -> viewLoader -> tableData = $this -> model -> getDataDKKH();
            $this -> viewLoader -> render('ViewDangKyKhoaHoc');
        }
        public function action(){
            
        }

    }