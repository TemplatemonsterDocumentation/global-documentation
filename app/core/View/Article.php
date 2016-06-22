<?php
namespace Core\View;

class Article
{
    public function __construct($articleId, $sectionId, \Core\Helper $helper)
    {
        $this->_articleId = $articleId;
        $this->_sectionId = $sectionId;
        $this->_helper = $helper;

        $this->_model = new \Core\Model\Article($this->_articleId, $this->_sectionId, $this->_helper);

        $this->loadArticleTemplate();
    }

    /**
     * Get articles template
     *
     * @return string
     */
    public function getArticleTemplate()
    {
        return $this->_helper->getTemplatesPath() . DS . 'article.php';
    }

    /**
     * Load article template file
     *
     * @throws Exception
     */
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
        try{
            $file = $this->_model->getArticlePath();
            include $file;
        } catch (Exception $e){
            echo $e;
        }
    }

    /**
     * Get article id
     *
     * @return mixed
     */
    public function getArticleId()
    {
        $result = $this->_articleId;
        if($this->_articleId == '__description')
        {
            $result = $this->_sectionId . '__description';
        }
        return $result;
    }

    /**
     * Get image path helper function
     *
     * @param $file
     * @param $project
     * @return string
     */
    public function getImgPath($file, $project = false)
    {
        return $this->_helper->getImgPath($file, $project);
    }
}