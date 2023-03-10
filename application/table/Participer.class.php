<?php
/**
Classe créé par le générateur.
*/
class Participer extends Table {
	public function __construct() {
		parent::__construct("participer", "par_id");
	}

	//requette d'affichage commplait
	public function selectAllIntFil(): array
	{
		$sql = "select * from intervenant,film,participer where int_id=par_intervenant and fil_id=par_film order by par_id";
		$result = self::$link->query($sql);
		return $result->fetchAll();
	}
}
