<?php
  namespace Admin\Model;
  use Think\Model;
  class BannerModel extends Model{
    //自动完成
    protected $_auto = array(
      array('addtime','time',1,'function'),
         );
    protected $_validate = array(

   );
    public function getTitle($data){
      return '++'.$data.'++';
    }
    //获取列表数据
    public function getPage($limit,$id=0){
     
      $this->field('id,title,img,link,orders,addtime,is_show,addtime'
          );
          $this->getLastSQL($this);die;

      if($id){
        $this->where("id=$id");
      }
      return $this->order('a.orders ASC,click DESC,a.addtime DESC')
                  ->limit($limit)
                  ->select();
                  $this->getLastSQL($this);die;
    }

    //获取数据总数
    public function getCount($id=0){
      if($id){
        $this->where('cid='.$id);
      }
      return $this->count();
    }
  }