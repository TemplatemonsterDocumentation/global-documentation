<?php


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

    public function getSectionObjects()
    {
        $sectionObjects = [];
        for($i = 0; $i < count($this->_sections); $i++){
            $sectionObjects[] = new Section_Model($this->_sections[$i], $this->_helper);
        }

        return $sectionObjects;
    }

    public function getArticleObject($articleId, $sectionId)
    {
        return new Article_Model($articleId, $sectionId, $this->_helper);
    }


}