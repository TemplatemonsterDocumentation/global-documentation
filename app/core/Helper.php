<?php
namespace Core;

class Helper
{
    public function __construct($params)
    {
        $this->_params = $params;
    }

    /**
     * Get params
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->_params;
    }

    /**
     * Get project name from params
     *
     * @return mixed
     */
    public function getProject()
    {
        return $this->_params['project'];
    }

    /**
     * Get product name from params
     *
     * @return mixed
     */
    public function getProduct()
    {
        return $this->_params['product'];
    }

    /**
     * Build request from params
     *
     * @return string
     */
    public function getRequest()
    {
        return http_build_query($this->_params);
    }

    /**
     * Update params array
     *
     * @param $param
     * @param $value
     * @return bool
     */
    public function setParam($param, $value)
    {
        $this->_params[$param] = $value;
        return true;
    }

    /**
     * Build query based on params
     *
     * @param array $queryParams
     * @return string
     */
    public function buildQuery(array $queryParams)
    {
        if($this->_params['action'] == 'onepage'){
            return '';
        }

        foreach($queryParams as $param => $value){
            $this->setParam($param, $value);
        }

        $request = '?' . $this->getRequest();
        return $request;
    }


    /**
     * Get section path
     *
     * @return string
     */
    public function getSectionPath()
    {
        return PATH . DS . PRODUCT_DIRNAME . DS . $this->getProduct() . DS . SECTIONS_DIRNAME;
    }

    /**
     * Get current language
     *
     * @return mixed
     */
    public function getLang()
    {
        return $this->_params['lang'];
    }

    /**
     * Get views path
     *
     * @return string
     */
    public function getTemplatesPath()
    {
        return PATH . DS . TEMPLATES_DIRNAME;
    }

    /**
     * Get article template
     *
     * @return string
     */
    public function getArticleTemplate()
    {
        return $this->getTemplatesPath() . DS . 'article.php';
    }

    /**
     * Get section config from json
     *
     * @param $sectionId
     * @param $configFile
     * @return mixed
     * @throws Exception
     */
    public function getSectionConfig($sectionId, $configFile)
    {
        $configJson = $this->getSectionPath() . DS . $sectionId . DS. $configFile;

        if(!file_exists($configJson)){
            throw new Exception('Config file not found.');
        }

        $configArray = json_decode(file_get_contents($configJson), true);
        return $configArray;
    }

    /**
     * Format id string
     *
     * @param $id
     * @return mixed
     */
    public function formatId($id)
    {
        return str_replace('-', '_', $id);
    }

    /**
     * Get directory
     *
     * @return string
     */
    public function getDir()
    {
        $pathChunks = explode('/', $_SERVER['SCRIPT_NAME']);
        $scriptDir = $pathChunks[1];
        $dir = '/' . $scriptDir;
        return $dir;
    }

    /**
     * Get files path
     *
     * @param $file
     * @return string
     */
    public function getPath($file)
    {
        return $this->getDir() . '/' . $file;
    }

    /**
     * Get files path
     *
     * @param $file
     * @param bool|false $project
     * @return string
     */
    public function getImgPath($file, $project = false)
    {
        $projPath = '';
        if($project){
            $projPath = '/' . PROJECT_DIRNAME . '/' . $this->getProject();
            $path = $this->imgPath($projPath, $file);
            if($this->isExists($path)){
                return $path;
            } else {
                $projPath = '';
            }
        }
        $path = $this->imgPath($projPath, $file);

        return $path;
    }

    /**
     * Check if file loaded by url exists
     *
     * @param $path
     * @return bool
     */
    private function isExists($path)
    {
        $file = PATH . DS . str_replace('/', DS, $path);
        if(file_exists($file)){
            return true;
        }
        return false;
    }

    /**
     * Get images directory path
     *
     * @param $projPath
     * @param $file
     * @return string
     */
    private function imgPath($projPath, $file)
    {
        return PRODUCT_DIRNAME . '/' . $this->getProduct() . $projPath . '/img/' . $file;
    }

    /**
     * Check if layout is onepage
     * @return bool
     */
    public function isOnepage()
    {
        if($this->_params['layout'] != 'onepage'){
            return false;
        }
        return true;
    }
}