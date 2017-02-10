<?php
  namespace Home\Controller;
  use Think\Controller;
  class ParentController extends Controller{
    public function __construct(){
      parent::__construct();
      //获取导航
      $this->headerNav = _getNav('top'); //表示输出顶部1级导航
      $this->footerNav = _getNav('footer',2); //表示输出底部2级导航 
    }
  }