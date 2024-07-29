<?php
namespace Controller;

defined('ROOTPATH') or exit('Access Denied!');

class _404
{
    use MainController;
    public function index()
    {
        echo "Controller Not Found,, better be on the lookout dude 💁🏿";
    }
}
/*_404.php*/