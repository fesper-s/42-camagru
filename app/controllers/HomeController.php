<?php
class HomeController {
  public function index() {
    $content = '../app/views/home/index.php';
    require_once '../app/views/layouts/default.php';
  }
}
