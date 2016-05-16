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
    public function getTemplatesPath()
    {
        return PATH . DS . TEMPLATES_DIRNAME;
    }

    /**
     * Get article template
     *
     * @return string
     */
    public function getArticleTemplate()
    {
        return $this->getTemplatesPath() . DS . 'article.php';
    }

    /**
     * Get section config from json
     *
     * @param $sectionId
     * @param $configFile
     * @return mixed
     * @throws Exception
     */
    public function getSectionConfig($sectionId, $configFile)
    {
        $configJson = $this->getSectionPath() . DS . $sectionId . DS. $configFile;

        if(!file_exists($configJson)){
            throw new Exception('Config file not found.');
        }

        $configArray = json_decode(file_get_contents($configJson), true);
        return $configArray;
    }

}