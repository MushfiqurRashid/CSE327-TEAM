<?php

function customAutoloader($className) {
    $classMap = [
        'Controllers\\' => 'app/controllers/',
        'Models\\' => 'app/models/',
        'Views\\' => 'app/views/',
        'Views\\Student\\' => 'app/views/student/',
        'Views\\Teacher\\' => 'app/views/teacher/',
    ];

    foreach ($classMap as $namespace => $dir) {
        if (strpos($className, $namespace) === 0) {
            $classPath = str_replace($namespace, '', $className);
            $classFile = BASE_PATH . '/' . $dir . $classPath . '.php';

            if (file_exists($classFile)) {
                require_once $classFile;
                return;
            }
        }
    }
}

spl_autoload_register('customAutoloader');
