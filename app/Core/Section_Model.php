<?php


class Section_Model
{
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
     * Get section translation
     *
     * @return mixed
     * @throws Exception
     */
    public function getLabel()
    {
        $config = $this->_helper->getSectionConfig($this->getSectionId(), 'section.json');
        $lang = $this->_helper->getLang();

        return $config['translations'][$lang];
    }
}