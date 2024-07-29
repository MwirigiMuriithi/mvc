<?php

namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

class Home

{
   use MainController;
   public function index()
   {
      //$errors = $user->errors();
      $this->view('home');
   }
}
/*Home.php*/
