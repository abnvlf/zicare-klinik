<?php

use Phalcon\Assets\Filters\Jsmin;
use Phalcon\Http\Request;
use Phalcon\Http\Response;

class IndexController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();
        $this->assets
            ->collection('zivue_index')
            ->setTargetPath('assets/js/zivue_index.js')
            ->setTargetUri('assets/js/zivue_index.js')
            ->addJs('assets/js/component/test-index.vue.js', true, false)
            ->addFilter(new Jsmin());
    }

    public function indexAction()
    {
    }

    public function getListAction()
    {
        $this->view->disable();
        $response = new Response();
        $response->setHeader("Access-Control-Allow-Origin", "*");
        $request = new Request();

        if ($request->isGet()) {
            $returnData = [
                "code" => "200",
                "response" => "success",
                "message" => "OK",
            ];

            $admissions = Admission::find();
            $response->setStatusCode(200, 'OK');
            $response->setJsonContent(["status" => $returnData, "results" => $admissions]);
        } else {
            $response->setStatusCode(405, 'Method Not Allowed');
            $response->setJsonContent(["status" => false, "error" => "Method Not Allowed"]);
        }
        $response->send();
    }
}
