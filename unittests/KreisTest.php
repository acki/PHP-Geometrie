<?php

include('../classes/Kreis.php');

class KreisTest extends PHPUnit_Framework_TestCase {


	public function setUp(){
	    $this->Kreis = new Kreis();
	    $this->expectedFlaeche = 1256.6370614359;
	    $this->expectedUmfang  = 125.66370614359;
	    $this->expectedDurchmesser = 40;
	    $this->expectedRadius = 20;
	}//function

	
	public function testBasedOnRadius(){
		$this->Kreis->setRadius($this->expectedRadius);
		$this->assertEquals($this->expectedFlaeche, 	$this->Kreis->getFlaeche(), 		'', 0.0000000001);
		$this->assertEquals($this->expectedUmfang, 		$this->Kreis->getUmfang(), 			'', 0.0000000001);
		$this->assertEquals($this->expectedDurchmesser, $this->Kreis->getDurchmesser());
		$this->assertEquals($this->expectedRadius, 		$this->Kreis->getRadius());
	}//function
	
	
	public function testBasedOnDurchmesser(){
		$this->Kreis->setDurchmesser($this->expectedDurchmesser);
		$this->assertEquals($this->expectedRadius, 		$this->Kreis->getRadius());
	}//function
	
	
	public function testBasedOnFlaeche(){
		$this->Kreis->setFlaeche($this->expectedFlaeche);
		$this->assertEquals($this->expectedRadius, 		$this->Kreis->getRadius(),  	  	'', 0.0000000001);
	}//function	
	
	
	public function testBasedOnUmfang(){
		$this->Kreis->setUmfang($this->expectedUmfang);
		$this->assertEquals($this->expectedRadius, 		$this->Kreis->getRadius(),  	  	'', 0.0000000001);
	}//function


}//class