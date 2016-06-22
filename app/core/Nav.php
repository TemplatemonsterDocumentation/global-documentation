<?php
namespace Core;

class Nav
{
    const NAV_TEMPLATE = 'includes' . DS . 'nav.php';

    public function __construct($sections, $articles, Helper $helper)
    {
        $this->_sections = $sections;
        $this->_articles = $articles;
        $this->_helper = $helper;

        $this->loadNav();
    }

    /**
     * Include navigation template file
     */
    public function loadNav()
    {
        $path = PATH . DS . TEMPLATES_DIRNAME .DS . self::NAV_TEMPLATE;
        include $path;
    }

    /**
     * Get sections
     *
     * @return mixed
     */
    public function getSections()
    {
        return $this->_sections;
    }

    /**
     * Get articles
     *
     * @return mixed
     */
    public function getArticles()
    {
        return $this->_articles;
    }

    /**
     * Get section objects
     *
     * @return array
     */
    public function getSectionObjects()
    {
        $sectionObjects = [];
        for($i = 0; $i < count($this->_sections); $i++){
            $sectionObjects[] = new \Core\Model\Section($this->_sections[$i], $this->_helper);
        }

        return $sectionObjects;
    }

    /**
     * Get article object
     *
     * @param $articleId
     * @param $sectionId
     * @return Article
     */
    public function getArticleObject($articleId, $sectionId)
    {
        return new \Core\Model\Article($articleId, $sectionId, $this->_helper);
    }

    /**
     * Get section nav item link
     *
     * @param $request
     * @return string
     */
    public function getSectionLink($request){
        if($this->_helper->isOnepage()){
            return '';
        }
        return $request;
    }

    /**
     * Get article nav item link
     *
     * @param $request
     * @param $article
     * @return string
     */
    public function getArticleLink($request, $article)
    {
        $articleId = '#' .  $article->getArticleId();

        if($this->_helper->isOnepage()){
            return $articleId;
        }

        return $request . $articleId;
    }
}