<?php

class ConexionBD{

	public function cBD(){

		$bd = new PDO("mysql:host=localhost;dbname=clinica", "root", "AdamJones2012");

		$bd -> exec("set names utf8");

		return $bd;

	}

}