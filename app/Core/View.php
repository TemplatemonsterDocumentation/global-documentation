<?php
class View
{
    const VIEWS_PATH = '/app/views/';
    public $_params;
    public $_model;

    public function __construct($params)
    {
        $this->_params = $params;
        $this->_model = new Model($params);

        $a = 1;
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
        $templateFile = PATH . self::VIEWS_PATH . 'template.php';
        if(file_exists($templateFile)){
            include ($templateFile);
        } else {
            throw new Exception('Layout not found');
        }
    }

    /**
     * Load content
     *
     * @param $view
     * @param $data
     */
    public function loadContent($view, $data)
    {
        include (self::VIEWS_PATH . $view);
    }

    /**
     * Get directory
     *
     * @return string
     */
    private function getDir()
    {
        $pathCunks = explode('/', $_SERVER['SCRIPT_NAME']);
        $scriptDir = $pathCunks[1];
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
     * Get project path
     *
     * @param $file
     * @param bool|true $relative
     * @return string
     */
    public function getProjectPath($file, $relative = true)
    {
        $path = $this->getDir() . '/' . $this->_model->getProjectPath($relative) . '/' . $file;
        return $path;
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

}