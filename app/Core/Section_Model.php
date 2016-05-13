<?php


class Section_Model
{
    const CONFIG_FILE = 'section.json';

    public function __construct($id, Helper $helper)
    {
        $this->_helper = $helper;
        $this->_id = $id;
    }

    /**
     * Get section id
     *
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->_id;
    }

    /**
     * Get section config from json
     *
     * @return mixed
     * @throws Exception
     */
    public function getSectionConfig()
    {
        $configJson = $this->_helper->getSectionPath() . DS . $this->getSectionId() . DS. self::CONFIG_FILE;

        if(!file_exists($configJson)){
            throw new Exception('Config file not found.');
        }

        $configArray = json_decode(file_get_contents($configJson), true);
        return $configArray;
    }
}