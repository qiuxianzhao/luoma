<?php
  namespace Admin\Model;
  use Think\Model;
  class AdminCateModel extends Model{
    
    //获取所有分类数据
    public function getAll($field='id'){
      return $this->field($field)->select();
      protected $_auto = array(
      	array('addtime','time',1,'function'),
      	array('salt','autoCreate',3,''),
      	array('pwd','encrypt',3,'callback'),
      	);
      protected $_validate = array(
      	array('user','requie','用户账号必须填写',1),
      	array('user','','用户账号已存在,请重新填写',1,'unique'),
      	array('pwd','pwd2','确认密码和刚才的密码是否一致',1,'confirm'),
      	);
      //获取列表的数据
      public function getPage($limit){
      	return $this->field('user,orders,is_show,addtime')
      				->order('orders ASC,addtime DESC')
      				->limit($limit)
      				->select();
      }
      //获取数据总数
       public function getCount(){
      	return $this->count();
      }
      //对用户的密码进行加盐加密
       public function encrypt($data){
       	$salt =
      	return $this->count();
      }
    }

  }