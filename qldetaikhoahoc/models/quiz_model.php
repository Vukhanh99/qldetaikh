<?php

use PhpMyAdmin\Sql;

/**
 * main page model example
 *
 * */
class Quiz_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	// public function getDataQuiz()
	// {
	// 	$sth = $this->db->fetchAllAssoc('SELECT * FROM tbl_quiz 
	// 	right join tbl_dapan on tbl_quiz.ID_quiz=tbl_dapan.ID_quiz
	// 	inner join tbl_monhoc on tbl_quiz.ID_monhoc=tbl_monhoc.ID_monhoc
	// 	where tbl_quiz.dapan=tbl_dapan.dapan');
	// 	return $sth;

	// }
	public function getDataQuiz()
	{
		$sth = $this->db->fetchAllAssoc('SELECT * FROM tbl_quiz 
		right join tbl_dapan on tbl_quiz.ID_quiz=tbl_dapan.ID_quiz
		inner join tbl_monhoc on tbl_quiz.ID_monhoc=tbl_monhoc.ID_monhoc
		where tbl_quiz.dapan=tbl_dapan.dapan
');
		return $sth;

	}
	public function insertQuiz($data)
	{
		// var_dump($data);
		// die;
		$sth = $this->db->onlyExecute('INSERT INTO tbl_quiz 
			(`ID_quiz`,`ID_monHoc`,`noiDung`,`dapAn`) 
			VALUES (:ID_quiz,:ID_monHoc,:noiDung,:dapAn);
			INSERT INTO tbl_dapAn 
			(`ID_quiz`,`dapAn`,`dapAnText`) 
			VALUES (:ID_quiz,:`"A"`,:dapAnText1),
			(:ID_quiz,:`"B"`,:dapAnText2),
			(:ID_quiz,:`"C"`,:dapAnText3),
			(:ID_quiz,:`"D"`,:dapAnText4)
			', array(':ID_quiz' => $data['ID_quiz'],':ID_monHoc' => $data['ID_monHoc'],':noiDung' => $data['noiDung'],':dapAn' => $data['dapAn']
			,':dapAnText1' => $data['dapAnText1'],':dapAnText2' => $data['dapAnText2'],':dapAnText3' => $data['dapAnText3'],':dapAnText4' => $data['dapAnText4']));
		if ($sth) {
			echo true;
		} else {
			echo false;
		}
		// var_dump($sth);
		// die;
		
	}
	// public function insertQuiz($ID_quiz, $ID_monhoc, $noiDung, $dapAn) {
	// 	if(isset($_GET	['submit'])){
	// 		$ID_quiz=$_GET['ID_quiz'];
	// 		$ID_monhoc=$_GET['ID_monhoc'];
	// 		$noiDung=$_GET['noiDung'];
	// 		$dapAn=$_GET['dapAn'];
	// 		$sth= $this->db -> onlyExcute("INSERT INTO tbl_quiz (ID_quiz, ID_monhoc, noiDung, dapAn) value ('$ID_quiz','$ID_monhoc','$noiDung','$dapAn')");
	// 		if ($sth) {
	// 			echo true;
	// 		} else {
	// 			echo false;
	// 		}

	// 	}
	// }
	public function updateQuiz($ID_quiz,$data)
	{
		// var_dump($ID_quiz);
		// var_dump($data);
		// die;,
		$sth = $this->db->onlyExecute('UPDATE tbl_quiz
			SET ID_monHoc=:ID_monHoc, noiDUng=:noiDung, dapAn=:dapAn  
			WHERE ID_quiz=:ID_quiz', array('ID_quiz'=>$ID_quiz,':ID_monHoc'=>$data['ID_monHoc'], ':noiDung'=>$data['noiDung'], ':dapAn'=>$data['dapAn']));
		if ($sth) {
			echo true;
		} else {
			echo false;
		}
	}

	public function deleteQuiz($ID_quiz)
	{
		$sth = $this->db->onlyExecute('DELETE FROM tbl_quiz WHERE ID_quiz = :ID_quiz', array(':ID_quiz' => $ID_quiz));
		if ($sth) {
			echo true;
		} else {
			echo false;
		}
	}
	public function fetch($ID_quiz)
	{
		$sth = $this->db->fetchAllAssoc('SELECT * FROM tbl_quiz 
		inner join tbl_dapan on tbl_quiz.ID_quiz=tbl_dapan.ID_quiz
		inner join tbl_monhoc on tbl_quiz.ID_monhoc=tbl_monhoc.ID_monhoc
		where tbl_quiz.ID_quiz=:ID_quiz', array(':ID_quiz' => $ID_quiz));
		// var_dump($sth); 
		return $sth;
	}

}
