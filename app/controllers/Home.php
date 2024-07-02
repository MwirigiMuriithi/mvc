<?php

defined('ROOTPATH') or exit('Access Denied!');
class Home
{
   use Controller;
   public function index()
   {
      //$errors = $user->errors();
      $this->view('home');
   }
}
