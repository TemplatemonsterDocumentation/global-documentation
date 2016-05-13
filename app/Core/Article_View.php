<?php


class Article_View
{
    public function __construct($articleId, $sectionId, Helper $helper)
    {
        $this->_articleId = $articleId;
        $this->_sectionId = $sectionId;
        $this->_helper = $helper;

        $this->_model = new Article_Model($this->_articleId, $this->_sectionId, $this->_helper);

        $this->loadArticleTemplate();
    }

    /**
     * Get articles template
     *
     * @return string
     */
    public function getArticleTemplate()
    {
        return $this->_helper->getViewsPath() . DS . 'article.php';
    }

    public function loadArticleTemplate()
    {
        $file = $this->getArticleTemplate();
        if(file_exists($file)){
            include $file;
        } else {
            throw new Exception('App\\view\\article.php template file not found');
        }
    }

    /**
     * Load article file
     *
     * @throws Exception
     */
    public function loadArticleContent()
    {
        $file = $this->_model->getArticlePath();
        if(file_exists($file))
        {
            include $file;
        } else {
            throw new Exception('Article file not found');
        }
    }

    /**
     * Get article id
     *
     * @return mixed
     */
    public function getArticleId()
    {
        if($this->_articleId == '__description')
        {
            return $this->_sectionId . '__description';
        }
        return $this->_articleId;
    }
}