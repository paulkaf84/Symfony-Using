<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';


use Symfony\Component\HttpFoundation\Request;
$global_variables = Request::createFromGlobals();
$global_variables->query->get('num');

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};