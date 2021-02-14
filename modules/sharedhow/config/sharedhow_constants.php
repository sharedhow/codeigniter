<?php
#Add code below to config module understand constant
if (!defined('MODULES_FOLDER'))
{
        define('MODULES_FOLDER', '../modules');
}
define('HP_FOLDER', 'sharedhow');
define('MODULES_PATH', APPPATH.MODULES_FOLDER.'/');
define('MODULES_FROM_APPCONTROLLERS', '../'.MODULES_FOLDER.'/');
define('HP_PATH', MODULES_PATH.HP_FOLDER.'/');
define('MODULES_WEB_PATH', 'modules/');

# Add code bollow to allow constants modules
// Config isn't loaded yet so do it manually'
include(HP_PATH.'config/sharedhow.php');

foreach ($config['modules_allowed'] as $module)
{
        $constants_path = MODULES_PATH . $module . '/config/' . $module . '_constants.php';

        if (file_exists($constants_path))
        {
                require_once($constants_path);
        }
}