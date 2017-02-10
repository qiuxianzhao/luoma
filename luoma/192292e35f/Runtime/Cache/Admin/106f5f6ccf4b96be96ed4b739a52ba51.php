<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
      <title>Rome Admin</title>
    
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/Admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Public/Admin/stylesheets/theme.css">
    <link rel="stylesheet" href="/Public/Admin/lib/font-awesome/css/font-awesome.css">
    <script src="/Public/Admin/lib/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <style>
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>
    
 <style>
  .pagination span.current{
  cursor: default;
  }
  .pagination div>a:first-child{
      border-left-width: 1px;
      border-radius: 3px 0 0 3px;
  }
  .pagination div>a:last-child{
      border-radius: 0 3px 3px 0;
  }
  .pagination a.num,
  .pagination span.current,
  .pagination a.next,
  .pagination a.prev,
  .pagination a.first,
  .pagination a.end{
      float: left;
      padding: 0 14px;
      line-height: 38px;
      text-decoration: none;
      background-color: #ffffff;
      border: 1px solid #dddddd;
      border-left-width: 0;
  }
  </style>

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    <li>
                        <a href="#" role="button">
                            <i class="icon-user"></i> admin
                        </a>
                    </li>
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Logout</a></li>
                </ul>
                <a class="brand" href="index.html"><span class="first">Blog</span> <span class="second">Admin</span></a>
        </div>
    </div>
    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>控制面板</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="<?php echo U('Admin/Index/index');?>">首页</a></li>
            <li ><a href="<?php echo U('Admin/Config/index');?>">系统设置</a></li>
            <li ><a href="<?php echo U('Admin/Nav/index');?>">导航模块</a></li>
            <li ><a href="<?php echo U('Admin/Banner/list');?>">轮播图</a></li>
            <li ><a href="<?php echo U('Admin/Article/index');?>">文章管理</a></li>
            <li ><a href="<?php echo U('Admin/ArtCate/index');?>">文章分类</a></li>
            <li ><a href="<?php echo U('Admin/Product/index');?>">产品管理</a></li>
            <li ><a href="<?php echo U('Admin/Proimg/index');?>">产品分类</a></li>
            <li ><a href="<?php echo U('Admin/Join/index');?>">入驻商</a></li>
            <li ><a href="<?php echo U('Admin/Admin/index');?>">管理员</a></li>
        </ul>
    </div>
    <div class="content">
        
  <div class="header"><h1 class="page-title">产品分类列表</h1></div>
  <ul class="breadcrumb">
      <li><a href="<?php echo U('Admin/Proimg/index');?>">Home</a> <span class="divider">/</span></li>
      <li class="active">List</li>
  </ul>

  <div class="container-fluid">
    <div class="row-fluid">
                
        <div class="btn-toolbar">
         <!--  <button class="btn btn-primary" onClick="location='<?php echo U('Admin/Proimg/add');?>'"><i class="icon-plus"></i>产品分类</button> -->
          <div class="btn-group"></div>
        </div>
        <div class="well">
            <table class="table">
              <tr>
                <th>图片ID</th>
                <th>产品ID</th>
                <th>图片地址</th>
                <th>排序</th>
                <th>是否显示</th>
                <th>添加时间</th>
                <th style="width: 26px;"></th>
              </tr>
              <?php if(is_array($artList)): $i = 0; $__LIST__ = $artList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($item['id']); ?></td>
                <td><a href="<?php echo U('Admin/Proimg/index','pid='.$item['pid']);?>"><?php echo ($item['name']); ?></a></td>
                <td><?php echo ($item['id']); ?></td>
                <td><?php echo ($item['pid']); ?></td>
                <td><?php echo ($item['orders']); ?></td>
                <td><?php echo ($item['is_show']==1?'显示':'隐藏'); ?></td>
                <td><?php echo date('Y-m-d H:i:s',$item['addtime']);?></td>
                <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" class="del-a" data-href="<?php echo U('Admin/Proimg/index','del='.$item['id']);?>" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class="pagination">
          <?php echo ($showPage); ?>
        </div>         
      </div>
  </div>

        <div class="container-fluid">
          <div class="row-fluid">
            <footer>
                <hr>
                <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.lm.cn" target="_blank">Portnine</a></p>
                <p>&copy; 2016 <a href="http://www.lm.cn" target="_blank">Portnine</a></p>
            </footer>
          </div>
        </div>
        
          <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">温馨提示：</h3>
            </div>
            <div class="modal-body">
              <p class="error-text"><i class="icon-warning-sign modal-icon"></i>您确定要删除该信息吗？</p>
            </div>
            
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
      <button class="btn btn-danger confirm-del" data-dismiss="modal">删除</button>
    </div>
    <script>
    var $url;
    $('.del-a').on('click',function(){
       $url = $(this).attr('data-href');
    })
    $('.confirm-del').on('click',function(){
      setTimeout(function(){
        location.assign($url);
      },300);
    })
    </script>

          </div>
        
    </div>

    <script src="/Public/Admin/lib/bootstrap/js/bootstrap.js"></script>
    <script>
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>