<?php

/**
Classe créé par le générateur.
 */
class Produire extends Table
{
	public function __construct()
	{
		parent::__construct("produire", "pro_id");
	}

	//requette d'affichage commplait
	public function selectAllIntFil(): array
	{
		$sql = "select * from intervenant,film,produire where int_id=pro_intervenant and fil_id=pro_film order by pro_id";
		$result = self::$link->query($sql);
		return $result->fetchAll();
	}

	static function selectIndividuByProducteur(int $id): array
	{
		$sql = "select * from intervenant,produire,film where int_id=pro_intervenant and pro_film=fil_id and pro_film=:id";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(":id", $id, PDO::PARAM_INT);

		$statement->execute();
		return $statement->fetchAll();
	}
}
