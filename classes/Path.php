<?php
class Path
{
    public function __construct()
    {
    }

    public function getPath()
    {
        $dirname = dirname(__FILE__);
        return str_replace('\classes', '', $dirname);
    }
}