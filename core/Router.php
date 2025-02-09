<?php
class Router {
    private $routes = [];

    public function addRoute($method, $path, $controller, $action) {
      $this->routes[] = [
        'method' => $method,
        'path' => $path,
        'controller' => $controller,
        'action' => $action
      ];
    }

    public function dispatch() {
      $uri = $_SERVER['REQUEST_URI'];
      $method = $_SERVER['REQUEST_METHOD'];
      
      foreach ($this->routes as $route) {
        if ($route['path'] === $uri && $route['method'] === $method) {
          require_once '../app/controllers/' . $route['controller'] . '.php';
          
          $controller = new $route['controller']();
          $action = $route['action'];
          $controller->$action();
          return;
        }
      }
      
      header("HTTP/1.0 404 Not Found");
      echo "404 Not Found";
    }
}
