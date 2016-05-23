<?php
namespace Frontend\Controller;

//use Backend\Library\BackendAuth;
//use Accounting\Permission;
//use Flywheel\Base;
use Flywheel\Controller\Web;
//use Flywheel\Db\Type\DateTime;

abstract class FrontendBase extends Web
{
    public static $language;
//    /** @var \Users $_user */
//    protected static $_user;

    protected $_need_login = true;
    protected $_change_pass_page = false;


    public function beforeExecute()
    {
        parent::beforeExecute();

        $this->_disable_gzip();

//        if ($this->_need_login == true) {
//            /** @var BackendAuth $auth */
//            $auth = BackendAuth::getInstance();
//            if (!$auth->isBackendAuthenticated()) {
//                if ($this->request()->isXmlHttpRequest()) {
//                    header('Content-type: application/json');
//                    Base::end(json_encode(array(
//                        'error' => 'AUTHENTICATE FAIL',
//                        'error_code' => 'E0001',
//                        'message' => t('This session was expired, plz login and comeback!')
//                    )));
//                } else {
//                    //redirect
//                    $this->redirect($this->createUrl('login', array(
//                        'r' => urlencode($this->request()->getUri())
//                    )));
//                }
//            }
//
//            if (!$this->_change_pass_page && ($this->_checkLastChangedPass() || $this->_checkRequiredChangePass())) {
//                //redirect here
//                $this->redirect($this->createUrl('Users/Security/ResetPassword', array(
//                    'r' => urlencode($this->request()->getUri())
//                )));
//            }
//            $auth->buildPermission();
//            self::$_user = $auth->getUser();
//        }
        $this->_initTemplate();
    }

    /**
     * @return bool
     */
    protected function _checkLastChangedPass()
    {
//        $authUser = BackendAuth::getInstance()->getUser();
//        $lastChangedPass = $authUser->getLastChangePwd();
//        if ($lastChangedPass->isEmpty()) {
//            $authUser->setLastChangePwd(new DateTime());
//            $authUser->save();
//            return false;
//        }
//        $diff = $lastChangedPass->diff(new \DateTime());
//        return $diff->days > 27;
        return true;
    }

    /**
     * @return bool
     */
    protected function _checkRequiredChangePass()
    {
//        return (bool)BackendAuth::getInstance()->getUser()->getRequireChangePwd();
        return true;
    }

    private function _disable_gzip()
    {
        @ini_set('zlib.output_compression', 'Off');
        @ini_set('output_buffering', 'Off');
        @ini_set('output_handler', '');
        //@apache_setenv('no-gzip', 1);
    }

    public static function t($msg)
    {
        return $msg;
    }

    /**
     * load cac include trong template_init
     */
    private function _initTemplate()
    {
//        if ($this->getTemplateName() == 'Pages')
//            include_once $this->getTemplatePath() . DIRECTORY_SEPARATOR . 'template_init.php';
//        else {
//            $assets_folder = 'templates/pages.revox.io/assets/';
//
//            /** @var Html $document */
//            $document = $this->document();
//            $document->cssBaseUrl = $assets_folder;
//            $document->jsBaseUrl = $assets_folder;
//        }
    }

    /**
     * get current login user
     * return \Users
     */
    public function getSessionUser()
    {
//        return BackendAuth::getInstance()->getUser();
        return true;
    }


    /**
     * @param $resource
     * @return bool
     */
    public function isAllowed($resource)
    {
//        $instance = BackendAuth::getInstance();
//        if (!$instance->isBackendAuthenticated()) {
//            return false;
//        }
//        /* if user is god */
//        if ($instance->getUser()->getId() == \Users::USER_GOD) {
//            return true;
//        }
//        if (!$resource || $resource == null) return false;
//        return Permission::getInstance()->isAllowed($resource);

        return true;
    }


    /**
     * @param $file
     */
    protected function _returnFile($file)
    {
        if (!file_exists($file))
        {
            $this->raise404();
        }
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        switch ($ext) {
            case "xls":case "xlsx":
            $type = 'application/vnd.ms-excel';
            break;
            default:
                $type = 'oxtet/stream';
                break;
        }

        $filename = pathinfo($file, PATHINFO_FILENAME);

        header("Content-Type: $type");
        header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
        header('Cache-Control: max-age=0');

        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        readfile($file);
        $this->setNoRender(true);
    }


    /**
     * 404 not found
     *
     * @param $message
     * @return text
     */
    public function raise404($message = "404 Page not found!")
    {
        $this->response()->getStatusCode(404);
        return $this->renderText('<h1>' . $message . '</h1>');
    }

    /**
     * 403 not allow
     *
     * @param $message
     * @return text
     */
    public function raise403($message = "403 Access Denied!")
    {
        $this->response()->getStatusCode(403);
        return $this->renderText('<h1>' . $message . '</h1>');
    }
}
