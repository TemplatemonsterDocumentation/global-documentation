<?php
class Route
{
    public $_defaultParams = array(
        'product' => 'wordpress',
        'project' => 'blogetti',
        'lang' => 'en'
    );

    public function __construct()
    {
        $this->start();
    }

    public function start()
    {
        $params = $this->getParams();
        new Controller($params);
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