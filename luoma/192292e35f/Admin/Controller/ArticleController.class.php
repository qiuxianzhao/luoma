<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page; //导入分页类
class ArticleController extends Controller {
    public function __construct(){
      parent::__construct();
      $this->Article = D('Article');
    }
    public function index(){
      
      //接收分类参数，实现分类分页效果
      $cid = I('get.cid',0,'intval');

      if( $id = I('get.del',0,'intval') ){
         if ( $this->Article->delete($id) ){
            $this->success('删除成功!',U('Article/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      $Page = new Page( $this->Article->getCount($cid), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      $this->artList = $this->Article->getPage($Page->firstRow.','.$Page->listRows,$cid);

      $this->display('list');
    }
    public function add(){
      if( IS_POST ){
        if( !$_FILES['img']['error'] ){
           $Upload = new \Think\Upload();// 实例化上传类
           $Upload->maxSize  = 8388608 ;// 设置附件上传大小
           $Upload->rootPath = './';
           $Upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    

           $Upload->savePath = './Public/Uploads/'; // 设置附件上传目录

           $info   =   $Upload->upload();
           if( !$info ) {   // 上传错误提示错误信息        
              $this->error( $Upload->getError() );die;
           }
           $_POST['img'] = $info['img']['savepath'].$info['img']['savename'];
        }

        if( !$this->Article->create( ) ){
          $this->error('添加失败！'.$this->Article->getError() );die;
        }else{
          $this->Article->add();
          $this->success('添加成功！',U('Article/index'));die;
        }
      }
      //获取分类信息
      $Article = D('Article');
      $this->cateList = $Article->getAll('id');
      
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
         if ( $this->Article->delete($id) ){
            $this->success('删除成功!',U('Article/index'));die;
         }else{
            $this->error('删除失败' );die;
         }
      }
      
      // 实例化分页类
      $Page = new Page( $this->Article->getCount($cid), 4 );
      $Page->rollPage = 3;
      $Page->lastSuffix = false;
      $Page->setConfig('first','First');
      $Page->setConfig('last','End');
      $Page->setConfig('prev','Prve');
      $Page->setConfig('next','Next');
      $this->showPage = $Page->show();

      //根据分页参数获取列表页的数据
      $this->artList = $this->Article->getPage($Page->firstRow.','.$Page->listRows,$cid);

      $this->display('list');
    }
  }