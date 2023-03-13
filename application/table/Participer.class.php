<?php

/**
Classe créé par le générateur.
 */
class Participer extends Table
{
	public function __construct()
	{
		parent::__construct("participer", "par_id");
	}

	//requette d'affichage commplait
	public function selectAllIntFil(): array
	{
		$sql = "select * from intervenant,film,participer where int_id=par_intervenant and fil_id=par_film order by par_id";
		$result = self::$link->query($sql);
		return $result->fetchAll();
	}

	static function selectIndividuByActeur(int $id,): array
	{
		$sql = "select * from intervenant,participer,film where int_id=par_intervenant and par_film=:id";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(":id", $id, PDO::PARAM_INT);

		$statement->execute();
		return $statement->fetchAll();
	}
}
