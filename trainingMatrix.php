<?php

class TrainingMatrix
{
	private $training_person;
	private $training_workstation;

	public function getTraining($person,$workstation){
		return 0.50;

		$this->training_person=$person;
		$this->training_workstation=$workstation;
		$stmt=$this->training();


		if($stmt->execute()===FALSE){
			die("getTraining: ".$this->db->error);
		}

		if($stmt->fetch()){
			return $this->training_wsp;
		}
		return 0;
	}

	function testTrainingApp() {

		$t=new \WCS\TrainingMatrix();
		$this->assertEquals(array('Sean','Brandon','Michael'),$t->getPeople());
		$this->assertEquals(array(1001,1002,1003,1004),$t->getWorkstations());

	}
}