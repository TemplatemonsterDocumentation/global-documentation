<?php
include_once 'Path.php';
include_once 'Section.php';

class Project
{
    const PROJECT_CONFIG_FILE   = 'config.json';
    const PRODUCT_DIRNAME       = 'products';
    const PROJECT_DIRNAME       = 'projects';

    private $_defaultProduct     = 'wordpress';
    private $_defaultProject     = 'blogetti';

    public function __construct(
        $_product = null,
        $_project = null
    )
    {
        $this->_path = new Path();
        $this->_product = $this->getProductName($_product);
        $this->_project = $this->getProjectName($_project);

        try{
            $this->_config = $this->getProjectConfig();
        } catch(Exception $e){
            echo $e->getMessage(), "\n";
        }
    }

    /**
     * Get product name
     *
     * @param $_product
     * @return string
     */
    private function getProductName($_product)
    {
        if(isset($_product)){
            return $_product;
        }
        return $this->_defaultProduct;
    }

    /**
     * Get project name
     *
     * @param $_project
     * @return string
     */
    private function getProjectName($_project)
    {
        if(isset($_project)){
            return $_project;
        }
        return $this->_defaultProject;
    }

    /**
     * Get current project directory path
     *
     * @return string
     */
    public function getProjectPath()
    {
        return $this->_path->getPath() . '/' .
                self::PRODUCT_DIRNAME . '/' .
                $this->_product . '/' .
                self::PROJECT_DIRNAME . '/' .
                $this->_project;
    }

    /**
     * Get project config data from config.json file
     *
     * @return mixed
     * @throws Exception
     */
    public function getProjectConfig()
    {
        $jsonConfigFile = $this->getProjectPath() . '/' . self::PROJECT_CONFIG_FILE;

        if(!file_exists($jsonConfigFile)){
            throw new Exception('Config file not found.');
        }

        $configArray = json_decode(file_get_contents($jsonConfigFile));
        return $configArray;
    }

    /**
     * Get sections list array
     *
     * @return array
     */
    public function getSectionsConfig()
    {
        $sections = [];
        $config = $this->getProjectConfig();
        foreach($config->sections as $key => $value){
            $sections[$key] = $value;
        }
        return $sections;
    }

    /**
     * Create section objects for each project's section
     *
     * @throws Exception
     */
    public function loadSections()
    {
        foreach($this->getProjectConfig()->sections as $id => $articles){
            new Section($id, $articles);
        }
    }
}