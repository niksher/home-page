<?php

//------------------------
//  CONSTANTS
//------------------------

define("_DOMAIN_", $_SERVER["SERVER_NAME"]);

define("_ROOTDIR_", $_SERVER["DOCUMENT_ROOT"]);

define("_CONFIGDIR_", realpath(__DIR__));

define("_APP_ENV_", $_SERVER["APP_ENV"]);
define("_USER_AGENT_TYPE_", $_SERVER["USER_AGENT_TYPE"]);


//------------------------
//  CONFIG
//------------------------

mb_internal_encoding("UTF-8");

setlocale(LC_TIME, "ru_RU.UTF-8");



