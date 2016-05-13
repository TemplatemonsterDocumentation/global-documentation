<?php

class Helper
{
    public function __construct($params)
    {
        $this->_params = $params;
    }

    public function getProject()
    {
        return $this->_params['project'];
    }

    public function getProduct()
    {
        return $this->_params['product'];
    }

    /**
     * Get section path
     *
     * @return string
     */
    public function getSectionPath()
    {
        return PATH . DS . PRODUCT_DIRNAME . DS . $this->getProduct() . DS . SECTIONS_DIRNAME;
    }

    /**
     * Get current language
     *
     * @return mixed
     */
    public function getLang()
    {
        return $this->_params['lang'];
    }

    /**
     * Get views path
     *
     * @return string
     */
    public function getViewsPath()
    {
        return PATH . DS . VIEWS_DIRNAME;
    }

    /**
     * Get article template
     *
     * @return string
     */
    public function getArticleTemplate()
    {
        return $this->getViewsPath() . DS . 'article.php';
    }

}