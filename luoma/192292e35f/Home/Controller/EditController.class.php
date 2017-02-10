<?php
namespace Home\Controller;
use Think\Controller;
class Edit Controller extends ParentController {
  public function edit(){
    // if( !$this->pro = S('pro') ){
    // echo '进入数据库!';
    // $this->pro = M('pro_cate')->field('id,name,cover')
    //                           ->where('is_show=1')
    //                           ->order('orders ASC,addtime DESC')
    //                           ->limit(4)
    //                           ->select();
    // S('pro',$this->pro,['expire'=>10]);                          
    // }
    $this->display();
  }
  //商家入驻
//   public function join(){
//     //IS_POST 判断是否post请求发送过来的数据
//     if( IS_POST ){
//       //接收数据
//       $data['name'] = I('post.name');
//       $data['phone'] = I('post.mobi');
//       $data['fax'] = I('post.fax');
//       $data['email'] = I('post.email');
//       $data['qq'] = I('post.qq');
//       $data['title'] = I('post.title');
//       $data['content'] = I('post.content');
//       $data['addtime'] = time();
//       //这个join就是去掉表前缀的表名 M函数会帮我们自动实例化一个表操作对象。
//       $Join = M('join');
//       $res = $Join->add($data); //add 添加数据的方法
//       if( $res ){
//         $this->redirect('Index/index','id=7',3,'加盟成功！' );
//         $this->success('加盟成功！',U('Index/index'));  //成功跳转方法
//         die;
//       }else{
//         $this->error('加盟失败！');    //错误跳转方法
//         die;
//       }
//     }
//     $this->display();
//   }

// }