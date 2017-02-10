<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page; //导入分页类
class JoinController extends Controller {
    public function __construct(){
      parent::__construct();
      $this->Join = D('Join');
    }
    public function index(){
      
      //接收分类参数，实现分类分页效果
     

      if( $id = I('get.del',0,'intval') ){
         if ( $this->Join->delete($id) ){
            $this->success('删除成功!',U('Join/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      // echo  $this->Join->getCount();
      $Page = new Page( $this->Join->getCount(), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();
      //根据分页参数获取列表页的数据
      //分页数据 
      $this->item = $this->Join->getPage($Page->firstRow.','.$Page->listRows,$id);
      // print_r( $this->item);
   // echo getlastASQL($this);die;
      $this->display('list');
    }
    public function add(){
      if( IS_POST ){
        if( !$this->Join->create() ){
          $this->error('添加失败！'.$this->Join->getError() );die;
        }else{
          $this->Join->add();
          $this->success('添加成功！',U('Join/index'));die;
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
      $cid = I('get.id',0,'intval');

      if( $id = I('get.del',0,'intval') ){
         if ( $this->Join->delete($id) ){
            $this->success('删除成功!',U('Join/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      $join=D('join');
      
      // $Page = new Page( $join->getCount($id), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      $this->artList = $this->Join->getPage($Page->firstRow.','.$Page->listRows,$id);

      $this->display('list');
    }
  }