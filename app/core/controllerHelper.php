<?php
class controllerHelper{
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }

    // Caso queira utilizar templates
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }
}

?>