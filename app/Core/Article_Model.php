<?php

class Article_Model
{
    public function __construct($id, $sectionId, Helper $helper)
    {
        $this->_id          = $id;
        $this->_section     = $sectionId;
        $this->_helper      = $helper;
    }

    /**
     * Get article id
     *
     * @return mixed
     */
    public function getArticleId()
    {
        return $this->_id;
    }

    /**
     * Get section id
     *
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->_section;
    }

    /**
     * Get article file path
     *
     * @return string
     */
    public function getArticlePath()
    {
        $path = PATH . DS .
            PRODUCT_DIRNAME . DS .
            $this->_helper->getProduct() . DS .
            SECTIONS_DIRNAME . DS .
            $this->getSectionId() . DS.
            $this->_helper->getLang() . DS .
            $this->getArticleId() . '.php';

        return $path;
    }


}