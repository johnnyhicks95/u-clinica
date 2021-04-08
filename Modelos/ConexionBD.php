<?php

class ConexionBD{

	public function cBD(){

		$bd = new PDO("mysql:host=localhost:3306;dbname=clinica", "", "");

		$bd -> exec("set names utf8");

		return $bd;

	}

}