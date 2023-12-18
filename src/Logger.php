<?php

namespace app;

//! Define a Logger class in the 'app' namespace
class Logger
{
    //! Method to handle the notification when the email changes
    public function handl()
    {
        echo "Email changed";
    }
}

//? In this code, you are defining a PHP class called Logger in the app namespace.
//? This Logger class has a single method handl() that echoes "Email changed".
//? Namespaces help in organizing code and avoiding naming conflicts when you have classes with the same name in different namespaces.
//? This class can be used to handle the logging aspect when the email changes in your application.
//? If you have used Composer, it is likely that Composer's autoloader is set up to autoload classes based on PSR-4 autoloading standards,
//? and it expects the 'app' namespace to map to a specific directory structure.
//? For example, if the 'app' namespace is mapped to the 'src' directory, this class file should be located at 'src/Logger.php'.
//? Ensure that the namespace and the file path match the PSR-4 autoloading conventions for your Composer setup.
