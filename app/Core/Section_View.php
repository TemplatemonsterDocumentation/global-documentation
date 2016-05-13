<?php

/**
 * Created by PhpStorm.
 * User: chris
 * Date: 5/13/2016
 * Time: 14:28 PM
 */
class Section_View extends View
{
    public function __construct($sectionId, $articles, Helper $helper)
    {
        $this->_sectionId = $sectionId;
        $this->_articles = $articles;
        $this->_helper = $helper;

        $this->_model = new Section_Model($sectionId, $this->_helper);

        $this->loadSectionTemplate();
    }

    /**
     * Load section articles
     */
    public function loadArticles()
    {
        $this->loadDescription();
        foreach($this->_articles as $articleId)
        {
            new Article_View($articleId, $this->getSectionId(), $this->_helper);
        }
    }

    /**
     * Load Description article
     */
    public function loadDescription()
    {
        new Article_View('__description', $this->getSectionId(), $this->_helper);
    }

    /**
     * Get section template
     *
     * @return string
     */
    private function getSectionTemplate()
    {
        return $this->_helper->getViewsPath() . DS . 'section.php';
    }

    /**
     * Load content file, article or section
     *
     * @param $file
     * @param $data
     * @throws Exception
     */
    public function loadSectionTemplate()
    {
        $file = $this->getSectionTemplate();
        if(file_exists($file)){
            include $file;
        } else {
            throw new Exception('App\\view\\section.php template file not found');
        }
    }

    /**
     * Get section id
     *
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->_sectionId;
    }

}