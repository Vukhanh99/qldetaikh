<?php



class baigiang extends Controller {



	function __construct() {



		

			parent::__construct('baigiang_model');

			 	

			$this->session=new Session();

			$this->session->start();   

           

        }

    

        


        function index() {
		

            $Conditions = isset($_GET['Search'])? $_GET['Search']: 0;
                if (isset( $_GET['submit']) && $_GET["Search"] != '') {
    
                    $Conditions = $_GET['Search'];                 
    
                    $this -> viewLoader -> tableData = $this -> model -> getData_Conditions($Conditions); 
    
                    $this -> viewLoader -> render('baigiang_view');
    
    
    
                }else{
    
                    $this -> viewLoader -> tableData = $this -> model -> getData();
                    $this -> viewLoader -> render('baigiang_view');
                }    
    
            
            
        }


        function viewProduct()
	{
		$this -> viewLoader -> tableData = $this -> model ->getData();
		$this -> viewLoader -> render('baigiang_view');
	}

      
    

        function insertRow() {

    

            $this -> model -> insertRow(filter_var($_POST['text'],FILTER_SANITIZE_STRING));

    

        }

    
        function edit() {
            if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
                echo 'bạn có quyền Admin';
                
                $ID_khoaHoc = isset($_GET['ID_khoaHoc']) && is_numeric($_GET['ID_khoaHoc']) ? $_GET['ID_khoaHoc']: '';
            $record = $this->model->fetch($ID_khoaHoc);
            $formAction = "/baigiang/doEdit&ID_khoaHoc=$ID_khoaHoc";
            $this -> viewLoader -> render('AddEditBG',array("record"=>$record, "formAction"=>$formAction) );
            } else {
                //
                $this->viewLoader->render('warning_phan_quyen');
            
            }
            
        }




        function doEdit() {
            $data=[];
            $ID_khoaHoc = isset($_GET['ID_khoaHoc'])&&is_numeric($_GET['ID_khoaHoc']) ? $_GET['ID_khoaHoc']: 0;         
            $Mabaigiang = isset($_GET['Mabaigiang']) ? $_GET['Mabaigiang']: 0;
            $tenbaigiang = isset($_GET['tenbaigiang']) ? $_GET['tenbaigiang']: 0;
            $thoigianhoc = isset($_GET['thoigianhoc']) ? $_GET['thoigianhoc']: 0;
            $noidung = isset($_GET['noidung']) ? $_GET['noidung']: 0;
           
            $data['Mabaigiang'] = $Mabaigiang;
            $data['tenbaigiang'] = $tenbaigiang;
            $data['thoigianhoc']=$thoigianhoc;
            $data['noidung']=$noidung;
           
     

             
            $this->model->updateSingleData($ID_khoaHoc,$data);
            header('location:/baigiang');
           
            
        }
        

        function delete() {
		
            if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
                echo 'bạn có quyền Admin';
                
                $ID_khoaHoc = isset($_GET['ID_khoaHoc']) && is_numeric($_GET['ID_khoaHoc']) ? $_GET['ID_khoaHoc']: '';
           
            $this->model->deleteRow($ID_khoaHoc);
            header('location:/baigiang');
            } else {
                //
                $this->viewLoader->render('warning_phan_quyen');
            
            }
    
            
    
            }       
        

        

    }

