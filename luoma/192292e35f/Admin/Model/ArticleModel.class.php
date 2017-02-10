<?php
  namespace Admin\Model;
  use Think\Model;
  class ArticleModel extends Model{
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
    protected $_validate = array(
      array('img','require','封面图片必须填写!',1),
      //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
      //参数1:  验证字段1 为数据表中的字段名称
      //参数2： 验证规则需要和附加规则配合使用
      //        当 附加规则的值为空，则表示完成规则中填写的是正则验证规则
      //              系统默认提供的正则验证规则: 
      //              require 字段必须、email 邮箱、url URL地址、currency 货币、number数值 
      //        当 附加规则的值为function，则表示完成规则中填写的是函数名
      //        当 附加规则的值为callback，则表示完成规则中填写的是当前模型的方法
      //参数3:  在验证失败以后，显示的内容，在控制器中可以使用模型对象中 getError()方法获取
      //参数4： 验证条件的值有三个:
      //        当值为0，则存在该字段时才会验证[默认]
      //        当值为1，无论如何都会验证
      //        当值为2，值不为空的时候验证
      //参数6:  验证时间类似自动完成的 完成时间
      //         当值为1，则当前规则在数据添加时执行自动验证
      //         当值为2，则当前规则在数据更新时执行自动验证
      //         当值为3，则当前规则在数据添加或更新时都执行自动验证
    );
    public function getTitle($data){
      return '++'.$data.'++';
    }
     public function getAll($field='id'){
      return $this->field($field)->select();
        }
    //获取列表数据
    public function getPage($limit,$cid=0){
      $this->field('id,cid,img,title,addtime,orders,is_show,click');
          // $this->getLastSQL($this);die;
           // dump($this);
      if($cid){
        $this->where("id=$id");
      }
      return $this->order('orders ASC,click DESC,addtime DESC')
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