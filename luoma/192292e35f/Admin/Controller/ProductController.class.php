<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page; //导入分页类
class ProductController extends Controller {
    public function __construct(){
      parent::__construct();
      $this->Product = D('Product');
    }
     public function index(){
      
      //接收分类参数，实现分类分页效果
      $cid = I('get.cid',0,'intval');

      if( $id = I('get.del',0,'intval') ){
         if ( $this->Product->delete($id) ){
            $this->success('删除成功!',U('Product/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
     // public function index(){
      
     //  //接收分类参数，实现分类分页效果
     //  $cid = I('get.cid',0,'intval');

     //  if( $id = I('get.del',0,'intval') ){
     //     if ( $this->Product->delete($id) ){
     //        $this->success('删除成功!',U('Product/index'));die;
     //     }else{
     //        $this->error('删除失败' );die;
     //     }
    
      
      // 实例化分页类
      $Page = new Page( $this->Product->getCount($cid), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      //分页数据 
      $this->artList = $this->Product->getPage($Page->firstRow.','.$Page->listRows,$cid);

      $this->display('list');
    }

    public function add(){
      if( IS_POST ){
        if( !$this->Product->create() ){
          $this->error('添加失败！'.$this->Product->getError() );die;
        }else{
          $this->Product->add();
          $this->success('添加成功！',U('Product/index'));die;
        }
      }
      dump(post);
      $this->display();
    }
    public function edit(){
      $this->display();
    }

        // public function Edit(){

        // }
public function nav(){
      
      //接收分类参数，实现分类分页效果
      $cid = I('get.cid',0,'intval');

      if( $id = I('get.del',0,'intval') ){
         if ( $this->Product->delete($id) ){
            $this->success('删除成功!',U('Product/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      $Page = new Page( $this->Product->getCount($cid), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      $this->artList = $this->Product->getPage($Page->firstRow.','.$Page->listRows,$cid);

      $this->display('list');
    }
  }