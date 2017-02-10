<?php
  namespace Home\Controller;
  use Think\Controller;
  class GoodsController extends ParentController{
    //列表页
    public function index(){
      //根据获取分类数据
      S(['type'=>'Memcache','host'=>'127.0.0.1','port'=>'11211']);
      //使用memcache缓存，只需要是操作缓存在之前，先设置缓存配置项即可。
      if( !$this->cate = S('cate_list') ){
          $this->cate = M('pro_cate')->field('id,name')
                                     ->where('is_show=1')
                                     ->order('orders ASC,addtime DESC')
                                     ->select();
          S('cate_list',$this->cate,3);
      }
      //根据对应的分类参数来获取对应的产品信息                            
      if( $cid = I('get.cid',0) ){
        $cid_where = 'AND cid='.$cid;
      }else{
        $cid_where = '';
      }

      $Pro = M('product');
      //数据总数
      $this->count = $Pro->where('is_show=1 '.$cid_where)->count();
      //生成页码
      $Page = new \Think\Page($this->count,3);
      $Page->rollPage = 5;
      //定制分页类的配置
      $Page->setConfig('prev','上一页');
      $Page->setConfig('first','首页');
      $Page->setConfig('last','尾页');
      $Page->setConfig('next','下一页');
      $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
      $this->pagehtml = $Page->show();
      //查询数据
      $this->list = $Pro->distinct(true)
                        ->field('p.id,p.name,pi.img')
                        ->alias('p')
                        ->join('__PRO_IMG__ pi ON pi.pid = p.id','left')
                        ->where('p.is_show=1 '.$cid_where)
                        ->order('p.orders ASC,pi.orders ASC,p.addtime DESC,pi.addtime DESC')
                        ->limit($Page->firstRow.','.$Page->listRows)
                        ->group('p.id')
                        ->select();
      $this->display('list');
    }
    public function detail(){
      if( ! $id = I('get.id',0,'intval') ){
        $this->error('非法访问！');die;
      } 
      //获取指定ID的产品信息
      $this->info = M('product')->field('name,en_name,cid,desc,detail')->where('is_show=1 AND id='.$id)->find();
      //获取指定产品ID的图片
      $this->img = M('pro_img')->field('img')->where('is_show = 1 AND pid='.$id )->select();
      $this->display();
    }
  }

