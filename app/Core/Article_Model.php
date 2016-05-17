<?php

class Article_Model
{
    const DEFAULT_LOCALE = 'en';

    public $_currentArticle;

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
     * @throws Exception
     */
    public function getArticlePath()
    {
        $file = $this->getArticleFile();

        if(!file_exists($file)) {
            $file = $this->getArticleFile();
            if (!file_exists($file)) {
                throw new Exception('Article file: ' . $file . ' not found');
            }
        }

        return $file;
    }

    /**
     * Override for article files
     *
     * @return null|string
     */
    private function getArticleFile()
    {
        //check for file in project in current locale
        $file = $this->articlePath($this->_helper->getLang(), true);
        if(file_exists($file)){
            return $file;
        }

        //check for file in project for default locale
        $file = $this->articlePath(self::DEFAULT_LOCALE, true);
        if(file_exists($file)){
            return $file;
        }

        //check for file in default location in current locale
        $file = $this->articlePath($this->_helper->getLang(), false);
        if(file_exists($file)){
            return $file;
        }

        //check for file in default location for default locale
        $file = $this->articlePath(self::DEFAULT_LOCALE, false);
        if(file_exists($file)){
            return $file;
        }

        return null;
    }

    /**
     *
     * Get article locale path
     *
     * @param $locale
     * @param bool|false $project
     * @return string
     */
    private function articlePath($locale, $project = false)
    {
        $projectId = PROJECT_DIRNAME . DS . $this->_helper->getProject() . DS;
        if(!$project){
            $projectId = '';
        }

        $path = PATH . DS .
            PRODUCT_DIRNAME . DS .
            $this->_helper->getProduct() . DS .
            $projectId .
            SECTIONS_DIRNAME . DS .
            $this->getSectionId() . DS.
            $locale . DS .
            $this->getArticleId() . '.php';

        $this->_currentArticle = $path;

        return $path;
    }

    /**
     * Get articles list from json
     *
     * @return mixed
     * @throws Exception
     */
    public function getSectionArticles()
    {
        $config = $this->_helper->getSectionConfig($this->getSectionId(), 'section.json');

        return $config['articles'];
    }

    /**
     * Get article label
     *
     * @param $id
     * @return mixed
     */
    public function getLabel($id)
    {
        $articlesArray = $this->getSectionArticles();

        $articles = [];
        foreach($articlesArray as $article)
        {
            $articles[$article['id']] = $article['translations'];
        }

        $lang = $this->_helper->getLang();
        $label = $articles[$id][$lang];

        if(!isset($label)){
            $label = $id;
        }

        return $label;
    }

}