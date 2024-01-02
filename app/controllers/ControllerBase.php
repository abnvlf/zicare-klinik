<?php

use Phalcon\Assets\Filters\Cssmin;
use Phalcon\Mvc\Controller;
use \Phalcon\Assets\Filters\Jsmin;

class ControllerBase extends Controller
{
    protected $logdev, $logerr;

    public function onConstruct() {
        $this->assets
            ->useImplicitOutput(false)
            ->collection('global.js')
            ->setTargetPath('assets/js/global.js')
            ->setTargetUri('assets/js/global.js')
            ->addJs('js/lodash.js', true, false)
            ->addJs('js/zicare.js', true, false)
            ->addJs('js/axios.js', true, false)
            ->addJs('js/vue.js', true, true)
            ->addJs('js/bootstrap.js', true, false)
            ->addFilter(new Jsmin());

        $this->assets
            ->useImplicitOutput(false)
            ->collection('global.css')
            ->setTargetPath('assets/css/global.css')
            ->setTargetUri('assets/css/global.css')
            ->addCss('css/bootstrap.css', true)
            ->addFilter(new Cssmin());
    }

    public function initialize() {
        $this->logdev = new \Phalcon\Logger\Adapter\File(APP_PATH . '/log/dev.log');
        $this->logerr = new \Phalcon\Logger\Adapter\File(APP_PATH . '/log/dev.error.log');
    }

    public function logDev($data)
    {
        $this->logdev->log(json_encode($data));
    }
}
