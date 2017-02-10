<?php
  namespace Admin\Model;
  use Think\Model;
  class LoginModel extends Model{
    
    //获取所有分类数据
    //这边的数据要输出
    // public function getAll($field='id'){
    //   return $this->field($field)->select(),
      protected $_auto = array(
          array('addtime','time',1,'function'),
          array('salt','autoCreate',3,''),
          array('pwd','encrypt',3,'callback'),
        );
      protected $_validate = array(
        array('user','require','用户帐号必须填写',1),
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
      public function createSalt(){
        $arr = implode('',array_merge( range(0,9),range('a','z') ) );
        $str = str_shuffle( $arr );
        $salt = substr($str,3,5);
        session('salt',$salt);
        return $salt;
      }
      //对用户的密码进行加盐加密
      public function encrypt($data,$salt=''){ 
        $salt = $salt?:session('salt');
        session('salt',null);
        return sha1( substr( md5( $data.$salt ),0,20 ).$salt );
      }
    }

  