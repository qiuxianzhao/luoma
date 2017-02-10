<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page; //导入分页类
class LoginController extends Controller {
    public function __construct(){
      parent::__construct();
      $this->Login = D('Login');
    }
    public function index(){
      // echo  1111111;
      $this->display('login');
    }
}

