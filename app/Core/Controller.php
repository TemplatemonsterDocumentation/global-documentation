<?php
class Controller
{
    public function __construct($params)
    {
        $this->_params = $params;

        $this->actionIndex();
    }

    /**
     * Load default model and view
     */
    public function actionIndex()
    {
        $project = new Project_Model($this->_params);
        $view = new Project_View($this->_params, $project);
    }
}