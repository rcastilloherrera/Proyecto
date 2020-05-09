<?php 
//Creacion de una clase en php

class procesa{
//Declaramos los Atributos
	private $_nombre;
	private $_email;


//Declaracion de un constructor
	public function __construct(){

	}

	public function getNombre(){
		return $this->_nombre;
	}

	public function setNombre($nombre){
		$this->_nombre = $nombre;
	}
	
	public function getEmail(){
		return $this->_email;
	}

	public function setEmail($email){
		$this->_email = $email;
	}

}

