<?php
class Model
{
    const CONFIG_FILE       = 'config.json';
    const PRODUCT_DIRNAME   = 'products';
    const PROJECT_DIRNAME   = 'projects';

    public $_params;

    public function __construct($params)
    {
        $this->_params = $params;
        $this->_config = $this->getProjectConfig();

        $a  =1 ;
    }

    /**
     * Get product name from params
     *
     * @return mixed
     */
    public function getProductName()
    {
        return $this->_params['product'];
    }

    /**
     * Get project name from params
     *
     * @return mixed
     */
    public function getProjectName()
    {
        return $this->_params['project'];
    }

    /**
     * Get project path to load files
     *
     * @param bool|true $relative
     * @return string
     */
    public function getProjectPath($relative = true)
    {
        if($relative){
            $path = self::PRODUCT_DIRNAME . '/' .
                $this->getProductName() . '/' .
                self::PROJECT_DIRNAME . '/' .
                $this->getProjectName();
        } else {
            $path = PATH . DS .
                self::PRODUCT_DIRNAME . DS .
                $this->getProductName() . DS .
                self::PROJECT_DIRNAME . DS .
                $this->getProjectName();
        }
        return $path;
    }

    /**
     * Get project config from json file
     *
     * @return mixed
     * @throws Exception
     */
    private function getProjectConfig()
    {
        $configJson = $this->getProjectPath(false) . DS . self::CONFIG_FILE;

        if(!file_exists($configJson)){
            throw new Exception('Config file not found.');
        }

        $configArray = json_decode(file_get_contents($configJson), true);
        return $configArray;
    }

    /**
     * Get sections array from project config
     *
     * @return array
     * @throws Exception
     */
    private function getSectionsConfig()
    {
        $sections = [];
        $config = $this->getProjectConfig();
        foreach($config->sections as $key => $value){
            $sections[$key] = $value;
        }
        return $sections;
    }

    /**
     * Get sections list as array
     *
     * @return array
     */
    public function getSectionsList()
    {
        return array_keys($this->getSectionsConfig());
    }

    /**
     * Get articles list from sections config
     *
     * @return array
     */
    public function getArticlesList()
    {
        $articles = [];
        foreach($this->getSectionsConfig() as $section){
            $articles[] = $section;
        }
        return $articles;
    }

    /**
     * Get project title
     *
     * @return mixed
     */
    public function getProjectTitle()
    {
        return $this->_config['title'];
    }

    /**
     * Get project text logo
     *
     * @return mixed
     */
    public function getProjectTextLogo()
    {
        return $this->_config['textLogo'];
    }

    /**
     * Get project title caption
     *
     * @return mixed
     */
    public function getProjectTitleCaption()
    {
        return $this->_config['titleCaption'];
    }

    /**
     * Get project author
     *
     * @return mixed
     */
    public function getProjectAuthor()
    {
        return $this->_config['author'];
    }
}