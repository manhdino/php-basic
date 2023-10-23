<?php
class App
{
    private $__controller, $__action, $__params;
    function __construct()
    {
        global $routes;
        if (!empty($routes['default__controller'])) {
            $this->__controller = $routes['default__controller'];
        }
        if (!empty($routes['default__action'])) {
            $this->__action = $routes['default__action'];
        }
        $this->__params = [];
        $this->handleUrl();
    }

    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }

    function handleUrl()
    {
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }
        if (file_exists('app/controllers/' . $this->__controller . '.php')) {
            require_once 'controllers/' . $this->__controller . '.php';
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArr[0]);
            } else {

                $this->loadErrors();
            }
        } else {

            $this->loadErrors();
        }

        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        $this->__params = array_values($urlArr);

        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadErrors();
        }
    }

    function loadErrors($name = '404')
    {
        require_once 'errors/' . $name . '.php';
    }
}
