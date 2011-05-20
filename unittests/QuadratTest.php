<?php

include('../classes/Quadrat.php');

class QuadratTest extends PHPUnit_Framework_TestCase {


	public function setUp(){
		$this->Quadrat = new Quadrat();		
		$this->expectedFlaeche = 25;
		$this->expectedUmfang = 20;
		$this->expectedDiagonale = 7.07106781186;
		$this->expectedSeitenlaenge = 5;
	}//function


	public function testBasedOnSeitenlaenge(){
		$this->Quadrat->setSeitenlaenge($this->expectedSeitenlaenge);
		$this->assertEquals($this->expectedFlaeche,   	$this->Quadrat->getFlaeche());
		$this->assertEquals($this->expectedUmfang,    	$this->Quadrat->getUmfang());
		$this->assertEquals($this->expectedDiagonale, 	$this->Quadrat->getDiagonale(), '', 0.0000000001);
		$this->assertEquals($this->expectedSeitenlaenge,$this->Quadrat->getSeitenlaenge());
	}//function
	

	public function testBasedOnFlaeche(){
		$this->Quadrat->setFlaeche($this->expectedFlaeche);
		$this->assertEquals($this->expectedSeitenlaenge, $this->Quadrat->getSeitenlaenge());
	}//function


	public function testBasedOnUmfang(){
		$this->Quadrat->setUmfang($this->expectedUmfang);
		$this->assertEquals($this->expectedSeitenlaenge, $this->Quadrat->getSeitenlaenge());
	}//function	


	public function testBasedOnDiagonale(){
		$this->Quadrat->setDiagonale($this->expectedDiagonale);
		$this->assertEquals($this->expectedSeitenlaenge, $this->Quadrat->getSeitenlaenge(), '', 0.0000000001);
	}//function	

}//class