<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta charset="UTF-8">
  <title>罗马国际-首页</title>
  <link href="/Public/Home/Css/base.css" rel="stylesheet"/>
  <link href="/Public/Home/Css/main.css" rel="stylesheet"/>
  <link href="/Public/Home/Css/swiper.min.css" rel="stylesheet" >
  <script src="/Public/Home/Js/jquery.min.js"></script>
  <script src="/Public/Home/Js/responsiveslides.min.js"></script>
  <script src="/Public/Home/Js/lrtk.js"></script> 
  <script>
    $(function () {
      $("#slider3").responsiveSlides({  
        pager: true,
        speed: 300,     
        }); 
    });
  </script>
</head>
<body>
      <a href="#0" class="cd-top">Top</a>
    <div class="header">
    <div class="header_mid">
      <div class="logo fl"><img src="/Public/Home/Images/logo.jpg"/></div>
      <div class="header_r fr pr">
      <span class="c-f f-12 mt-10 t-r fr">全国服务热线：020-84130064 / 400-678-5751</span>
      <ul class="nav fr pa">
        <?php if(is_array($headerNav)): $i = 0; $__LIST__ = $headerNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($item['href']); ?>" class="language-tg" data-title="<?php echo strtoupper($item['en_name']);?>"><?php echo ($item['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

      </ul>
      </div>  
    </div>
  </div>
	<div class="banner1">
		<div class="ban_mid">
		<img src="/Public/Home/Images/banner1.jpg" alt="" style="width:1000px;">
		</div>
	</div>

	<div class="con_mid w1000">

			<div class="tt">
	 <p class="fright"><a href="">首页</a><img src="/Public/Home/Images/sanjiao.png" class="mr-5 ml-5"><a href="">公司新闻</a><img src="/Public/Home/Images/sanjiao.png" class="mr-5 ml-5"><a href="">行业动态</a></p>

	 </div>

	  <div class="con_l fl">
	        	<dl>
	        		<dt><img src="/Public/Home/Images/row.png" alt=""class="mr-5">产品展示<span>&nbsp;&nbsp;&nbsp;/&nbsp;PRODUCT</span></dt>
	        		<div class="clearxd"></div>
	        		<dd class="mr"><a href="<?php echo U('Goods/index');?>">全部产品</a></dd>
							<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('Goods/index','cid='.$item['id']);?>"><?php echo ($item['name']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
	        	</dl>
	        	<div class="clearxd"></div>
	        	<div class="tu"><a href="#"><img src="/Public/Home/Images/ima2.png" alt=""></a></div>
	        	<div class="tu"><a href="#"><img src="/Public/Home/Images/ima2.png" alt=""></a></div>
	    </div>
	    <div class="con_r fr">
	      <ul class="product-ul clear">
	      	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="fl">
						<a class="top-img oh pr db" href="<?php echo U('Goods/detail','id='.$item['id']);?>">
							<img src="<?php echo ($item['img']); ?>" alt="">
							<span class="more pa tc">MORE</span>
						</a>
						<p><a class="title db tc wen-oh" href="<?php echo U('Goods/detail','id='.$item['id']);?>"><?php echo ($item['name']); ?></a></p>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
	      </ul>  	
	      <style>
			  .current{
		background: #000;
		color: #fff;
    height: 26px;
    line-height: 26px;
    border: 1px solid #e5e5e5;
    padding: 0 10px;
    display: inline-block;
    font-family: "宋体";
    font-size: 12px;
			  }
	      </style>
	      <div class="page-list">
	      <?php echo ($pagehtml); ?>
	      </div>
	    </div>
	</div>
</div>




<div class="clearxd"></div>
    <div class="footer">
    <div class="foot">
         <div class="foot1 foot1_border layout2">
          <ul class="clear oh">
              <?php if(is_array($footerNav)): $i = 0; $__LIST__ = $footerNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li>
                <div class="foot1_s">
                  <b> <a href="<?php echo ($item['href']); ?>"><?php echo ($item['name']); ?> | <?php echo ($item['en_name']); ?></a></b>
                  <ul class="fl">
                    <?php if(is_array($item['son'])): $i = 0; $__LIST__ = $item['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($i['href']); ?>"><?php echo ($i['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div> 
      </div>
  </div>
  <div class="foot2">
    <p class="t-c ">粤ICP备120860000号     Copyright © 2015 罗马国际 All Rights Reserved  </p>
  </div>
  </div>
  <link href="/Public/Home/Css/lrtk.css" rel="stylesheet"/>
</body>
</html>