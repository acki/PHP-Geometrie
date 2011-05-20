<?php

class Kreis{


	public function __construct(){
		$this->reset();
	}//function



	public function setDurchmesser($durchmesser){
		$this->reset();
		$this->durchmesser = $durchmesser;
	}//function
	
	public function setFlaeche($flaeche){
		$this->reset();
		$this->flaeche = $flaeche;
	}//function
	
	public function setUmfang($umfang){
		$this->reset();
		$this->umfang = $umfang;
	}//function

	public function setRadius($radius){
		$this->reset();
		$this->radius = $radius;
	}//function
	
	
	
	
	public function getFlaeche(){
		$this->getRadius();
		return ($this->radius * $this->radius) * M_PI;
	}//function
	
	public function getDurchmesser(){
		$this->getRadius();
		return $this->radius * 2;
	}//function
	
	public function getUmfang(){
		return $this->getDurchmesser() * M_PI;
	}//function	
	
	public function getRadius(){
	
		if($this->durchmesser){
			$this->radius = $this->durchmesser/2;
		}//if
		
		if($this->umfang){
			$this->radius = ($this->umfang / M_PI) / 2;
		}//if
	
		if($this->flaeche){
			$this->radius = sqrt($this->flaeche / M_PI);
		}//if
		
		return $this->radius;
	
	}//function
	
	
	
	protected function reset(){
		$this->radius = false;
		$this->durchmesser = false;
		$this->flaeche = false;
		$this->umfang = false;
	}//function
	

}//class