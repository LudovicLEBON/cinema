<?php
/**
Classe créé par le générateur.
*/
class Cinema extends Table {
	public function __construct() {
		parent::__construct("cinema", "cin_id");
	}

//requette qui retourne les cinéma avec les ville
public function selectAllVille(): array
	{
		$sql = "select * from cinema,ville where cin_ville=vil_id order by cin_id";
		$result = self::$link->query($sql);
		return $result->fetchAll();
	}}
