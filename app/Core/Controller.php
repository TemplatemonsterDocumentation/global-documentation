<?php
class Controller
{
    public function __construct($params)
    {
        $this->_params = $params;

        $this->actionIndex();
    }

    public function actionIndex()
    {
        $project = new Project_Model($this->_params);
        $view = new View($this->_params, $project);
    }
}