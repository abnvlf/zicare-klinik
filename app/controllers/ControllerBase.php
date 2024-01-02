<?php

use Phalcon\Assets\Filters\Cssmin;
use Phalcon\Mvc\Controller;
use \Phalcon\Assets\Filters\Jsmin;

class ControllerBase extends Controller
{
    public function onConstruct() {
        $this->assets
            ->useImplicitOutput(false)
            ->collection('global.js')
            ->setTargetPath('assets/js/global.js')
            ->setTargetUri('assets/js/global.js')
            ->addJs('js/lodash.js', true, false)
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
}
