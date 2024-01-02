<?php

use Phalcon\Http\Request;
use Phalcon\Http\Response;

class IndexController extends ControllerBase
{

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
