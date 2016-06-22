<?php
namespace Core\View;

class Section
{
    public function __construct($sectionId, $articles, \Core\Helper $helper)
    {
        $this->_sectionId = $sectionId;
        $this->_articles = $articles;
        $this->_helper = $helper;

        $this->_model = new \Core\Model\Section($sectionId, $this->_helper);

        $this->loadSectionTemplate();
    }

    /**
     * Create article object and load article
     *
     * @param $articleId
     * @param $sectionId
     * @return Article
     */
    private function loadArticle($articleId, $sectionId)
    {
        return new \Core\View\Article($articleId, $sectionId, $this->_helper);
    }


    /**
     * Load section articles
     */
    public function loadArticles(){
        $articles = $this->_articles;
        foreach($articles as $articleId)
        {
            $this->loadArticle($articleId, $this->getSectionId());
        }
    }

    /**
     * Load Description article
     */
    public function loadDescription()
    {
        $this->loadArticle('__description', $this->getSectionId());
        return true;
    }

    /**
     * Get section template
     *
     * @return string
     */
    private function getSectionTemplate()
    {
        return $this->_helper->getTemplatesPath() . DS . 'section.php';
    }

    /**
     * Load section template file
     *
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

    /**
     * Get files path
     *
     * @param $file
     * @return string
     */
    public function getPath($file)
    {
        return $this->_helper->getPath($file);
    }

}