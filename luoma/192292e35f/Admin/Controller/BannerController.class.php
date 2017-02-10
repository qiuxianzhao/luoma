<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page; //导入分页类
class BannerController extends Controller {
    public function __construct(){
      parent::__construct();
      $this->Banner = D('Banner');
    }
    public function index(){
      if( $id = I('get.del',0,'intval') ){
         if ( $this->Banner->delete($id) ){
            $this->success('删除成功!',U('Banner/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      // echo  $this->Banner->getCount();
      $Page = new Page( $this->Banner->getCount(), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      //分页数据 
      $this->item = $this->Banner->getPage($Page->firstRow.','.$Page->listRows,$id);
      // print_r( $this->item);
   // echo getlastASQL($this);die;
     // dump($this->item);die;
      $this->display('list');
    }
    public function add(){
      if( IS_POST ){
        if( !$this->Banner->create() ){
          $this->error('添加失败！'.$this->Banner->getError() );die;
        }else{
          $this->Banner->add();
          $this->success('添加成功！',U('Banner/index'));die;
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
         if ( $this->Banner->delete($id) ){
            $this->success('删除成功!',U('Banner/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      $Banner=D('Banner');
      
      $Page = new Page( $this->Article->$join->getCount($id), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      $this->artList = $this->Banner->getPage($Page->firstRow.','.$Page->listRows,$id);

      $this->display('list');
    }
  }