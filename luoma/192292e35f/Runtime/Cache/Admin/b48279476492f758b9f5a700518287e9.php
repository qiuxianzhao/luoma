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
        
<div class="header"><h1 class="page-title">添加产品图片</h1></div>
<ul class="breadcrumb">
	<li><a href="<?php echo U('Admin/Proimg/Index');?>">Home</a> <span class="divider">/</span></li>
	<li class="active">添加产品图片</li>
</ul>
<div class="container-fluid">
	<div class="row-fluid">
			<div class="btn-toolbar">
				<button class="btn btn-primary" onClick="location='<?php echo U('/index');?>'"><i class="icon-list"></i>产品图片列表</button>
			  <div class="btn-group">
			  </div>
			</div>
			<div class="well">
				<div id="myTabContent" class="tab-content">
				  <div class="tab-pane active in" id="home">
					<form action="<?php echo U('Admin/Proimg/add');?>" method="post" enctype="multipart/form-data">
						<label>图片ID</label>
						<input type="text" name="id" value="" class="input-xxlarge">
						<label>产品ID</label>
						<input type="text" name="pid" value="" class="input-xxlarge">
						<label>图片地址</label>
						<input type="file" name="img" value="" class="input-xxlarge">
						<label>状态</label>
						<select name="is_show" class="input-xlarge">
						  <option value="1">启用</option>
						  <option value="0">禁用</option>
						</select>
						<label>排序</label>
						<input type="text" name="orders" value="1" class="input-xlarge">						
						<label>添加时间</label>
						<input type="text" name="addtime" value="1" class="input-xlarge">			
						<label></label>
						<input class="btn btn-primary" type="submit" value="提交" />
					</form>
				  </div>
			  </div>
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
              <button class="btn btn-danger" data-dismiss="modal">删除</button>
            </div>
            
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