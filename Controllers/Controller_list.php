<?php
/**
 *
 */
class Controller_list extends Controller
{
  public function action_list(){
    $model = Model::getModel();
    $data = [
      "last25" => $model->getLast()
    ];

    $this-> render("list", $data);
  }

  public function action_informations(){
    $model = Model::getModel();
    $data = [
      "information" => $model->getNobelPrizeInformations($_GET["id"])
    ];

    if(isset($_GET["id"]) && preg_match("/^[1-9][0-9]{0,3}$/",$_GET["id"])){
      $this-> render("information", $data);
    }
    else {
      $this->action_error();
    }
  }

  public function action_pagination(){
    $model = Model::getModel();
    if (isset($_GET["start"])) {
    $data = [
      "Nobels25" => $model->getNobelPrizesWithLimit($_GET["start"],$_GET["start"]+25)
    ];

    $this-> render("pagination", $data);
  }
  else {
    $this->action_error();
    }
  }
  
  public function action_default(){
      $this->action_list();

  }
}


?>
