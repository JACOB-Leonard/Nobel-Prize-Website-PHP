<?php
/**
 *
 */
class Controller_set extends Controller
{
  public function action_form_add(){
    $model = Model::getModel();
    $data = [
      "categories" => $model->getcategories(),
      "key" => $model->getNobelPrizeInformations(1),
    ];

    $this-> render("form_add", $data);
  }

  public function action_add(){

    if($this->verification() == true){
    $model = Model::getModel();
    $info = ["year" => $_POST["year"], "category" => $_POST["Category"], "name" => $_POST["name"], "birthdate" => $_POST["birthdate"], "birthplace" => $_POST["birthplace"], "county" => $_POST["county"],
            "motivation" => $_POST["Motivation"] ];
    if($model->addNobelPrize($info)){
      $data["title"] = "reussite";
      $data["message"] = "Prix Nobel Ajouté !!";
      $this-> render("message", $data);
    }
  }
    else {
      $this->action_error();
    }
  }

  public function action_remove(){
    $model = Model::getModel();
    if (isset($_GET["id"]) && $model->isInDataBase($_GET["id"])) {
      $model->removeNobelPrize($_GET["id"]);
      $data["title"] = "reussite suppression";
      $data["message"] = "Prix Nobel Supprimer !!";
      $this-> render("message", $data);
    }
    else {
      $this->action_error("Suppression impossible");
    }
  }

  public function action_form_update(){
    $model = Model::getModel();
    $data = [
      "categories" => $model->getcategories(),
      "key" => $model->getNobelPrizeInformations($_GET["id"]),
    ];
    if (isset($_GET["id"]) && $model->isInDataBase($_GET["id"])){
        $this-> render("form_update", $data);
    }
    else {
    $this->action_error("ID incorrect !!");
    }
  }

  public function action_update(){
    $model = Model::getModel();
    if (isset($_POST["id"]) && $this->verification()) {
      $info = ["id" => $_POST["id"], "year" => $_POST["year"], "category" => $_POST["Category"], "name" => $_POST["name"], "birthdate" => $_POST["birthdate"], "birthplace" => $_POST["birthplace"], "county" => $_POST["county"],
              "motivation" => $_POST["Motivation"] ];
      $model->updateNobelPrize($info);
      $data["title"] = "reussite";
      $data["message"] = "Prix Nobel Modifié !!";
      $this-> render("message", $data);
  }
    else {
      $this->action_error(var_dump($this->verification()));
    }
  }

  public function verification(){
    if(!isset($_POST["name"]) or preg_match("/^ *$/",$_POST["name"])){
      $this->action_error("Name Invalide");
      return false;
    }

    if(!isset($_POST["Category"]) or preg_match("/^ *$/",$_POST["Category"])){
      $this->action_error("Category Invalide");
      return false;
    }

    if(!isset($_POST["year"]) or !preg_match("/^[1-9]{0,4}$/",$_POST["year"])){
      $this->action_error("year Invalide");
      return false;
    }
    return true;
}


  public function action_default(){
      $this->action_form_add();

  }
}


?>
