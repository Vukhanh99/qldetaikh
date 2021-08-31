<?php

/**
 * Main page controller example
 * 
 * TODO form and request helper consider to use symfony2 request component
 */
class Quiz extends Controller
{

	function __construct()
	{


		parent::__construct('quiz_model');

		$this->session = new Session();
		$this->session->start();

		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {
		// 	header('location:' . BASEPATH . 'login');
		// } 
	}

	function index()
	{

		$this->viewLoader->tableData = $this->model->getDataQuiz();
		$this->viewLoader->render('quiz_view');
	}
	function insertQuiz()
	{
		$this->viewLoader->render('insertQuiz');
	}
	function doInsertQuiz()
	{
		$data=[];
		$ID_quiz=isset($_GET['ID_quiz']) ? $_GET['ID_quiz']:0;
		$ID_monHoc=isset($_GET['ID_monHoc']) ? $_GET['ID_monHoc']:0;
		$noiDung=isset($_GET['noiDung']) ? $_GET['noiDung']:0;
		$dapAnText1=isset($_GET['dapAnText1']) ? $_GET['dapAnText1']:0;
		$dapAnText2=isset($_GET['dapAnText2']) ? $_GET['dapAnText2']:0;
		$dapAnText3=isset($_GET['dapAnText3']) ? $_GET['dapAnText3']:0;
		$dapAnText4=isset($_GET['dapAnText4']) ? $_GET['dapAnText4']:0;
		$dapAn=isset($_GET['dapAn']) ? $_GET['dapAn']:0;

		$data['ID_quiz']=$ID_quiz;
		$data['ID_monHoc']=$ID_monHoc;
		$data['noiDung']=$noiDung;
		$data['dapAnText1']=$dapAnText1;
		$data['dapAnText2']=$dapAnText2;
		$data['dapAnText3']=$dapAnText3;
		$data['dapAnText4']=$dapAnText4;
		$data['dapAn']=$dapAn;
		$this->model->insertQuiz($data);
	
		header('location:/quiz');
	}
	function updateQuiz()
	{
		$ID_quiz = isset($_GET['ID_quiz']) ? $_GET['ID_quiz'] : '';
		$record = $this->model->fetch($ID_quiz);

		$formAction = "/quiz/doUpdateQuiz&ID_quiz=$ID_quiz";
		$this->viewLoader->render('updateQuiz', array("record" => $record, "formAction" => $formAction));
	}
	function doUpdateQuiz()
	{
		$data=[];
		$ID_quiz= isset($_GET['ID_quiz']) ? $_GET['ID_quiz']:0;
		$ID_monHoc=isset($_GET['ID_monHoc']) ? $_GET['ID_monHoc']:0;
		$noiDung= isset($_GET['noiDung']) ? $_GET['noiDung']:0;
		$dapAn= isset($_GET['dapAn']) ? $_GET['dapAn']:0;

		$data['ID_quiz']=$ID_quiz;
		$data['ID_monHoc']=$ID_monHoc;
		$data['noiDung']=$noiDung;
		$data['dapAn']=$dapAn;
		
		$this->model->updateQuiz($ID_quiz, $data);
		// var_dump($conn);
		// $this->viewLoader->render('../quiz');
		header('location:/quiz');
	}
	function deleteQuiz($ID_quiz)
	{
		$this->model->deleteQuiz($ID_quiz);
	}
}
