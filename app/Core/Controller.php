<?php
class Controller
{
    public function __construct($params)
    {
        $this->_view = new View($params);
    }

    public function actionIndex()
    {

    }
}