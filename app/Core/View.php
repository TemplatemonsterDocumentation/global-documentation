<?php
class View
{
    public $_params;
    public $_model;

    public function __construct($params, Project_Model $model)
    {
        $this->_params = $params;
        $this->_model = $model;
        $this->_helper = new Helper($params);

        try{
            $this->loadLayout();
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Load default layout
     *
     * @throws Exception
     */
    public function loadLayout()
    {
        $templateFile =  $this->_helper->getTemplatesPath() . DS . 'template.php';
        if(file_exists($templateFile)){
            include ($templateFile);
        } else {
            throw new Exception('Layout not found');
        }
    }

    public function loadProject()
    {
        $sections = $this->_model->getSectionsList();
        $articlesArray = $this->_model->getArticlesList();

        //Loop through sections
        for($i = 0; $i < count($sections); $i++){
            $currentSectionId = $sections[$i];
            $articles = $articlesArray[$i];

            new Section_View($currentSectionId, $articles, $this->_helper);
        }
    }

    /**
     * Get navigation object
     */
    public function getNavigation()
    {
        new Nav($this->_model->getSectionsList(), $this->_model->getArticlesList(), $this->_helper);
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

    /**
     * Get project path
     *
     * @param $file
     * @param bool|true $relative
     * @return string
     */
    public function getProjectPath($file, $relative = true)
    {
        $path = $this->_helper->getDir() . '/' . $this->_model->getProjectPath($relative) . '/' . $file;
        return $path;
    }

    /**
     * Get sections path
     *
     * @return string
     */
    public function getSectionsPath()
    {
        return PATH . DS . PRODUCT_DIRNAME . DS . $this->getProductName() . DS . SECTIONS_DIRNAME . DS;
    }


    /**
     * Get project name
     *
     * @return mixed
     */
    public function getProjectName()
    {
        return $this->_model->getProjectName();
    }

    /**
     * Get product name
     *
     * @return mixed
     */
    public function getProductName()
    {
        return $this->_model->getProductName();
    }

    /**
     * Get language from params
     *
     * @return mixed
     */
    public function getLang()
    {
        return $this->_params['lang'];
    }

    /**
     * Get project title
     *
     * @return mixed
     */
    public function getProjectTitle()
    {
        return $this->_model->getProjectTitle();
    }

    /**
     * Get project text logo
     *
     * @return mixed
     */
    public function getProjectTextLogo()
    {
        return $this->_model->getProjectTextLogo();
    }

    /**
     * Get project title caption
     *
     * @return mixed
     */
    public function getProjectTitleCaption()
    {
        return $this->_model->getProjectTitleCaption();
    }

    /**
     * Get project author
     *
     * @return mixed
     */
    public function getProjectAuthor()
    {
        return $this->_model->getProjectAuthor();
    }

    /**
     * Get project URL
     *
     * @return mixed
     */
    public function getProjectUrl()
    {
        $url = $_SERVER['REQUEST_URI'];
        return $url;
    }
}