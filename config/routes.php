<?php
return function($router) {
  $router->addRoute('GET', '/', 'HomeController', 'index');
};
