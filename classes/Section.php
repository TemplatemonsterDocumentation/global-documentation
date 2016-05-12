<?php
include_once 'View.php';

class Section
{
    const SECTION_TEMPLATE = 'section';

    public function __construct($_id, $_articles)
    {
        $this->_id = $_id;
        $this->_articles = $_articles;
        $this->_data = $this->getData();

        new View(self::SECTION_TEMPLATE, $this->_data);
    }

    public function getData()
    {
        $data = [];
        $data['id'] = $this->_id;
        $data['articles'] = $this->_articles;

        return $data;
    }

    public function getSectionId()
    {
        return $this->_id;
    }

    public function getArticles()
    {
        return $this->_articles;
    }
}