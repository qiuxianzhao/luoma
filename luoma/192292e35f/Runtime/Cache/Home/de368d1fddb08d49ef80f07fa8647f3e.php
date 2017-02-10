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
<!-- 	banner -->
	 <div class="index-lun">
	 	<ul class="rslides" id="slider3">
			<li><a href="#"><img src="/Public/Home/Images/banner.jpg" alt=""></a></li>
			
			<li><a href="#"><img src="/Public/Home/Images/banner.jpg" alt=""></a></li>
			<li><a href="#"><img src="/Public/Home/Images/banner.jpg" alt=""></a></li>
		</ul>
		<!-- Slideshow 3 Pager  slide   -->
		
       
    </div>
	

	<div class="index-con">
		<div class="con_a">
			<div class="con_a_a  w1000  clear">
				<img src="/Public/Home/Images/pro_l.png"/class="fl mt-30 " >
				<h3 class="fl t-c"><i>产品展示</i><br/><span><i>Product  display</i></span></h3>
				<img src="/Public/Home/Images/pro_r.png"/class="fl mt-30">
				
			</div>
<ul class="zhanshi  clear  w1000">
				<?php if(is_array($pro)): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="pr">
					<a href="<?php echo U('Goods/index',['cid'=>$item['id']]);?>"><img src="<?php echo ($item['cover']); ?>"/></a>
					<div class="show hover-tg  " >
						<div class="zbc pa">
						</div>
						<span class="ff pa c-f f-16"><?php echo \Org\Util\String::msubstr($item['name'],0,5,'utf-8',false);?></span>
						<a href="javascript:;" class="ee pa c-f">查看全部产品</a> 
					</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="con-b">
			<div class="con_a_a  w1000  clear">
				<img src="/Public/Home/Images/pro_l.png"/class="fl mt-30" >
				<h3 class="fl t-c"><i>新品展示</i><br/><span><i>New features</i></span></h3>
				<img src="/Public/Home/Images/pro_r.png"/class="fl mt-30">
				
			</div>
			<div class="w1000">
				<img src="/Public/Home/Images/ima1.jpg" alt=""></img>
				<div class="new-main">
					<h3 class="title-h3">
						<img class="fl" src="/Public/Home/Images/row.png" alt=""></img>
						<span class="fl">罗马国际-整体软装展示01 </span>
					</h3>
					<p>
						罗马布艺连锁机构成立于1999年，是由罗马国际集团有限公司（香港）独资的专业从事家居布艺产品设计、生产、销售、服务于一体的公司。多年来一直以“创国际优质布艺品牌”为发展目标，现已发展成为拥有50家自营连锁店，一间2000平方米的大型展示厅，以及60000平方尺的生产加工基地，并拥有一批出色的销售精英、设计人才及技术骨干。  

					</p>
				</div>
			</div>


		</div>
	</div>
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