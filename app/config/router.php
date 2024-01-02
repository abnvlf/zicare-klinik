<?php

$router = $di->getRouter();

$router->addGet('/assets/(css|js)/([\w.-]+)\.(css|js)', [
    'controller' => 'assets',
    'action'     => 'serve',
    'type'       => 1,
    'collection' => 2,
    'extension'  => 3,
]);

$router->handle();
