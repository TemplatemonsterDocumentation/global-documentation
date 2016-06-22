<?php
namespace Core;

class Controller
{
    public function __construct($params)
    {
        $this->_params = $params;

        //$action = 'action' . ucfirst($params['action']);
        $this->actionIndex();
    }

    /**
     * Load default model and view
     */
    public function actionIndex()
    {
        $project = new Model\Project($this->_params);
        $view = new View\Project($this->_params, $project);
    }
}