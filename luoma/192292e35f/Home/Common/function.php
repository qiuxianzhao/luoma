<?php
  /*
    获取导航信息
    $pos  导航位置[top表示顶部,footer表示脚部,left表示侧边栏]
    $z    层级[表示多少级导航]
   */
  function _getNav($pos='top',$z=-1){
    $Nav = M('nav');
    $navList = $Nav->field('id,pid,name,en_name,href')
                   ->where("position='$pos' AND is_show = 1 ")
                   ->order('orders ASC,addtime DESC')
                   ->select();
    return _nav( $navList, 0, $z );
  }
  /*
   获取无限级别导航数据[数据重构，可以指定级别]
   $data 导航数据
   $pid  父级ID
   $z    层级
   */
  function _nav($data, $pid=0, $z = -1){
    $res = [];
    $k = 0;
    foreach($data as $key=>$item){
      if($item['pid']==$pid ){
        $res[$k] = $item;
        $res[$k]['son'] = _nav($data, $item['id'], $z-1);
        $k++;
      }
      if($z==0){
        return;
      }
    }
    return $res;
  }
