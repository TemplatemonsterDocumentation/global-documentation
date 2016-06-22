<?php
namespace Core;

class Route
{
    public $_defaultParams = array(
        'product' => 'magento',
        'project' => 'magento2',
        'lang' => 'en',
        'section' => 'introduction',
        'layout' => ''
    );

    public function __construct()
    {
        $this->start();
    }

    public function start()
    {
        $params = $this->getParams();
        $controller = new Controller($params);
    }

    /**
     * Return url params as array
     *
     * @return array
     */
    private function getParams()
    {
        $parsedUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        parse_str($parsedUrl, $params);

        return array_replace($this->_defaultParams, $params);
    }
}