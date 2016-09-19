<?php

//Need to change ControllerName to the controllers name
class ControllerName extends PageController{

  //Contstructor
  public function __contstruct($dbc){

    // Run the parent Contstructor
    parent::__contstruct();

    $this->dbc = $dbc;

    //Call your functions
  }

  public function buildHTML(){
    //Replace templateName with name of file
     echo $this->plates->render('templateName', $this->data);
  }



}
