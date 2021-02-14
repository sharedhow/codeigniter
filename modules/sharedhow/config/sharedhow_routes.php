<?php
#Add code bellow to allow routes module

// Config isn't loaded yet so do it manually'
include(HP_PATH.'config/sharedhow.php');

$module_folder = MODULES_PATH.'/';
// Load any public routes for advanced modules
foreach ($config['modules_allowed'] as $module)
{
        if ($module != HP_FOLDER) // Avoid infinite recursion
        {
                $routes_path = $module_folder.$module.'/config/'.$module.'_routes.php';
                if (file_exists($routes_path)) include($routes_path);
        }
}