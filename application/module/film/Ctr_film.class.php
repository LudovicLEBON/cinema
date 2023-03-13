<?php

/**
Controleur créé par le générateur.
Controleur associé à une table (implémente le CRUD)
 */
class Ctr_film extends Ctr_controleur implements I_crud
{

	public function __construct($action)
	{
		parent::__construct("film", $action);
		$a = "a_$action";
		$this->$a();
	}

	function a_index()
	{
		$u = new Film();
		$data = $u->selectAll();
		require $this->gabarit;
	}


	//$_GET["id"] : id de l'enregistrement
	function a_details()
	{
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$row = (new Film())->select($id);
		$acteurs = Participer::selectIndividuByActeur($id);
		$realisateurs = Produire::selectIndividuByProducteur($id);
		extract($row);
		require $this->gabarit;
	}

	//$_GET["id"] : id de l'enregistrement
	function a_edit()
	{
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u = new Film();
		if ($id > 0)
			$row = $u->select($id);
		else
			$row = $u->emptyRecord();

		extract($row);
		require $this->gabarit;
	}

	//$_POST
	function a_save()
	{
		if (isset($_POST["btSubmit"])) {
			$u = new Film();
			$u->save($_POST);
			if ($_POST["fil_id"] == 0)
				$_SESSION["message"][] = "Le nouvel enregistrement Film a bien été créé.";
			else
				$_SESSION["message"][] = "L'enregistrement Film a bien été mis à jour.";
		}
		header("location:" . hlien("film"));
	}



	//param GET id 
	function a_delete()
	{
		if (isset($_GET["id"])) {
			$u = new Film();
			$u->delete($_GET["id"]);
			$_SESSION["message"][] = "L'enregistrement Film a bien été supprimé.";
		}
		header("location:" . hlien("film"));
	}
}
