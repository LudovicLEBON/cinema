<?php
/**
Controleur créé par le générateur.
Controleur associé à une table (implémente le CRUD)
*/
class Ctr_participer extends Ctr_controleur implements I_crud {

    public function __construct($action) {
        parent::__construct("participer", $action);        
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$u=new Participer();
		$data=$u->selectAllIntFil();
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Participer();
		if ($id>0)
			$row=$u->select($id);
		else
			$row=$u->emptyRecord();
			
		extract($row);	
		require $this->gabarit;		
	}

	//$_POST
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Participer();
			$u->save($_POST);
			if ($_POST["par_id"]==0)
				$_SESSION["message"][]="Le nouvel enregistrement Participer a bien été créé.";
			else
				$_SESSION["message"][]="L'enregistrement Participer a bien été mis à jour.";
		}
		header("location:" . hlien("participer"));
	}

	

	//param GET id 
	function a_delete() {
		if (isset($_GET["id"])) {
			$u=new Participer();
			$u->delete($_GET["id"]);
			$_SESSION["message"][]="L'enregistrement Participer a bien été supprimé.";
		}
		header("location:" . hlien("participer"));
	}
}
