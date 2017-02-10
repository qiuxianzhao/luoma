<?php
  namespace Admin\Model;
  use Think\Model;
  class JoinModel extends Model{
    //自动完成
    protected $_auto = array(
      //array('img','1.png'),
      array('addtime','time',1,'function'),
      array('title','getTitle',1,'callback'),
      //array(字段名称,完成规则,[完成时间,附加规则]),
      // 参数1： 完成规则需要和附加规则配合使用
      //         当 附加规则的值为空，则表示完成规则中填写的是字段的默认值
      //         当 附加规则的值为function，则表示完成规则中填写的系统函数名/辅助函数
      //         当 附加规则的值为callback，则表示完成规则中填写的是当前模型的方法名

      // 参数3，完成时间，有三个值：
      //         当值为1，则当前规则在数据添加时执行自动完成
      //         当值为2，则当前规则在数据更新时执行自动完成
      //         当值为3，则当前规则在数据添加或更新时都执行自动完成
      //                 
    );
   
    public function getTitle($data){
      return '++'.$data.'++';
    }
    //获取列表数据
    public function getPage($limit  ){
    
       
          // $this->getLastSQL($this);die;
     
      return $this->order('orders ASC,addtime DESC')
                  ->limit($limit)
                  ->select();
                  $this->getLastSQL($this);die;
    }

    //获取数据总数
    public function getCount($id=0){
      if($id){
        $this->where('id='.$id);
      }
      return $this->count();
    }
  }