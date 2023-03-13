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

	static function selectDiffusion($ville)
	{
		$sql = "select cin_libelle,fil_id,fil_affiche,fil_titre,(dif_date_disparition-dif_date_apparition) nbjour
		from diffuser,cinema,film,ville
		where dif_cinema=cin_id and dif_film=fil_id and cin_ville=vil_id and vil_id=:ville 
		and dif_date_disparition>=:date and dif_date_apparition<=:date 
		group by cin_id,fil_id
		order by cin_libelle,fil_titre";
		$statement = Table::$link->prepare($sql);
		$statement->bindValue(":date", date("Y-m-d"), PDO::PARAM_STR);
		$statement->bindValue(":ville", $ville, PDO::PARAM_INT);
		$statement->execute();
		return $statement->fetchAll();
	}
}
