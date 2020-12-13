<?php

class ConexionBD{

	public function cBD(){

		$bd = new PDO("mysql:host=localhost:3305;dbname=clinica", "", "");

		$bd -> exec("set names utf8");

		return $bd;

	}

}