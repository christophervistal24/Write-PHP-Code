<?php
namespace App\Controller;
// use \App\Model\User as User;
use \App\Core\Controller;

class Admin extends Controller
{
    public function index()
    {
        echo get_class();
    }
}