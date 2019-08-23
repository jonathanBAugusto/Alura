<?php
function load($namespace)
{
    $namespace = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

    $absolute_path = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $namespace . ".php";

    return include_once $absolute_path;
}

spl_autoload_register(__NAMESPACE__ . "\load");
// function load($namespace)
// {
//     $path = '/src';
//     $namespace = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

//     $absolute_path = __DIR__ . $path . DIRECTORY_SEPARATOR . $namespace . ".php";

//     return include_once $absolute_path;
// }

// spl_autoload_register(__NAMESPACE__ . "\load");
