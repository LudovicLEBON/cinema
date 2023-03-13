<?php
class Ctr__default extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("_default", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_index()
    {
        require $this->gabarit;
    }
    public function a_liste()
    {
        if (isset($_POST["valider"])) {
            print_r($_POST);
            $data = Diffuser::selectDiffusion($_POST["vil_id"]);
        }
        require $this->gabarit;
    }
    public function a_detaille()
    {
        require $this->gabarit;
    }
}
