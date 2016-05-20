<?php

require_once("reddit.php");
require_once("config.php");
$config = new config();

$reddit = new Reddit($config->username, $config->password, $config->app_key, $config->app_password);

?>