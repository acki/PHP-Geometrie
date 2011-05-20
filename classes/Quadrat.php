<?php

class Quadrat{


	public function __construct(){
		$this->reset();
	}//function



	public function setSeitenlaenge($seitenlaenge){
		$this->reset();
		$this->seitenlaenge = $seitenlaenge;
	}//function
	
	public function setDiagonale($diagonale){
		$this->reset();
		$this->diagonale = $diagonale;
	}//function
	
	public function setUmfang($umfang){
		$this->reset();
		$this->umfang = $umfang;
	}//function

	public function setFlaeche($flaeche){
		$this->reset();
		$this->flaeche = $flaeche;
	}//function
	
	
	
	
	public function getFlaeche(){
		$this->getSeitenlaenge();
		return pow($this->seitenlaenge, 2);
	}//function
	
	public function getDiagonale(){
		$this->getSeitenlaenge();
		return sqrt(pow($this->seitenlaenge, 2)*2);
	}//function
	
	public function getUmfang(){
		$this->getSeitenlaenge();
		return $this->seitenlaenge * 4;
	}//function	
	
	public function getSeitenlaenge(){
	
		if($this->umfang){
			$this->seitenlaenge = $this->umfang/4;
		}//if
		
		if($this->flaeche){
			$this->seitenlaenge = sqrt($this->flaeche);
		}//if
	
		if($this->diagonale){
			$this->seitenlaenge = sin(deg2rad(45)) * $this->diagonale;
		}//if
		
		return $this->seitenlaenge;
	
	}//function
	
	


	protected function reset(){
		$this->seitenlaenge = false;
		$this->umfang    	= false;
		$this->flaeche   	= false;
		$this->diagonale 	= false;
	}//function
	

}//class