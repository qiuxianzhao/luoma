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

	<div class="con_mid w1000 clear">

			<div class="tt">
	 <p class="fright"><a href="">首页</a><img src="/Public/Home/Images/sanjiao.png" class="mr-5 ml-5"><a href="">公司新闻</a><img src="/Public/Home/Images/sanjiao.png" class="mr-5 ml-5"><a href="">行业动态</a></p>

	 </div>

	  <div class="con_l fl">
	        	<dl>
	        		<dt><img src="/Public/Home/Images/row.png" alt=""class="mr-5">产品展示<span>&nbsp;&nbsp;&nbsp;/&nbsp;PRODUCT</span></dt>
	        		<div class="clearxd"></div>
	        		<dd class="mr"><a href="javascript:;">全部产品</a></dd>
	        		<dd><a href="javascript:;">艺术</a></dd>
	        		<dd><a href="javascript:;">展会信息</a></dd>
	        		
	        	</dl>
	        	<div class="clearxd"></div>
	        	<div class="tu"><a href="#"><img src="/Public/Home/Images/ima2.png" alt=""></a></div>
	        	<div class="tu"><a href="#"><img src="/Public/Home/Images/ima2.png" alt=""></a></div>
	    </div>
	    <div class="con_r fr productMain">
	     <div class="productMain-A  clear">
	     	<div class="left fl pr">
				<ul class="rslides" id="slider3" style="height:370px">
					<?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li><a href="#"><img src="<?php echo ($item['img']); ?>" width="370" height="370" alt=""></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="lunb-zzc pa">
				</div>
				<ul id="slider3-pager" class="swiper-custompage pa">
					<?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="fl"><a href="javascript:;"><img src="<?php echo ($item['img']); ?>"   width="50" height="50" alt=""></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
	     	</div>
			<div class="right fr">
				<div class="title">
					<p class="p1">罗马国际艺术墙纸</p>
					<p class="p2">ROME PRODUCT</p>
				</div>
				<p class="wen-main pb-10">
					罗马布艺连锁机构成立于1999年，是由罗马国际集团有限公司独资的专业从事家居布艺产品设计、生产、销售、服出色的销售精英、设计人
					罗马布艺连锁机构成立于1999年，是由罗马国际集团有限公司独资的专业从事家居布艺产品设计、生产、销售、服出色的销售精英、设计人
				</p>
				<p> 
				<a class="dingg-a db tc">我要订购</a>
				</p>
				<div  class="clear">
					<span class="fenx-msg fl mr-5">分享给好友</span>
						
					<div class=" fl bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				</div>
				<p class="line20">全国客服热线:
					<span class='ml-5'>400-888-888</span>
				</p>
			</div>
	     </div>
	      <div class="productMain-B line20">
	      	<h3 class="product-h3 pr "><span class="tc">产品详情</span></h3>
						<p>罗马布艺连锁机构成立于1999年，是由罗马国际集团有限公司（香港）独资的专业从事家居布艺产品设计、生产、销售、服务于一体的公司。多年来一直以“创国际优质布艺品牌”为发展目标，现已发展成为拥有50家自营连锁店，一间2000平方米的大型展示厅，以及60000平方尺的生产加工基地，并拥有一批出色的销售精英、设计人才及技术骨干。
			</p>
			<p>罗马布艺，源于欧洲经典家纺设计理念，传承罗马辉煌文明，塑造时尚、温馨、典雅的生活品位，创造独有的布艺文化，与国内外著名布艺品牌携手，致力于打造最具影响力的国际家纺布艺品牌，引领业界潮流，展现家纺艺术。</p>
			<img src="/Public/Home/Images/gg1.png" alt="">
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