<?php

/**
Classe créé par le générateur.
 */
class Diffuser extends Table
{
	public function __construct()
	{
		parent::__construct("diffuser", "dif_id");
	}

	//requette d'affichage commplait
	public function selectAllCinFil(): array
	{
		$sql = "select * from cinema,film,diffuser where cin_id=dif_cinema and fil_id=dif_film order by dif_id";
		$result = self::$link->query($sql);
		return $result->fetchAll();
	}
}
