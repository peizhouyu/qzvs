<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>太原理工大学清泽微视</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<script src="/qzvs/Public/index/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
		<!--头部底部css样式表-->
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/video.css" />
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/video-js.css"/>
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/play.css"/>
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/menu.css"/>
		<script src="/qzvs/Public/index/js/video.js" type="text/javascript" charset="utf-8"></script>
		<!--视频播放页面样式-->
	</head>

	<body>
		<!-- 导航Begin -->
		<div class="header">
			<div class="topNav">
				<div class="topNavLeft">
					<div class="mainNav">
						<a href="<?php echo U('Video/showlist',array('catid'=>$play['catid']));?>" class="mainNavs">
							<span class="menu"></span><span><?php echo ($catname); ?></span>
						</a>
						<div class="dropdown">
							<div class="dropColor">
								<div class="dropColorleft"><span></span></div>
								<div class="dropColorright"></div>
							</div>
							<ul>
								<li class="item news">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'26'));?>"><span></span>微资讯</a></div>
									<div class="sub">
										<?php if(is_array($weizixunlab)): $i = 0; $__LIST__ = $weizixunlab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'26','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item life">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'23'));?>"><span></span>微生活</a></div>
									<div class="sub">
										<?php if(is_array($weishenghuolab)): $i = 0; $__LIST__ = $weishenghuolab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'23','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item talk">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'27'));?>"><span></span>微访谈</a></div>
									<div class="sub">
										<?php if(is_array($weifangtanlab)): $i = 0; $__LIST__ = $weifangtanlab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'27','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item movie">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'25'));?>"><span></span>微电影</a></div>
									<div class="sub">
										<?php if(is_array($weidianyinglab)): $i = 0; $__LIST__ = $weidianyinglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'25','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item classroom">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'28'));?>"><span></span>微课堂</a></div>
									<div class="sub">
										<?php if(is_array($weiketanglab)): $i = 0; $__LIST__ = $weiketanglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'28','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item dv">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'29'));?>"><span></span>生涯导航</a></div>
									<div class="sub">
										<?php if(is_array($shengyadaohanglab)): $i = 0; $__LIST__ = $shengyadaohanglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'29','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item topic">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'zhuanti'));?>"><span></span>微专题</a></div>
									<div class="sub">
										<?php if(is_array($zhuantilab)): $i = 0; $__LIST__ = $zhuantilab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Video/specialvideo',array('id'=>$vo['specialid']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item share">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'30'));?>"><span></span>微分享</a></div>
									<div class="sub">
										<?php if(is_array($weifenxianglab)): $i = 0; $__LIST__ = $weifenxianglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'30','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
								<li class="item repository">
									<div class="mianNavTitle"><a href="<?php echo U('Video/showlist',array('catid'=>'31'));?>"><span></span>素材库</a></div>
									<div class="sub">
										<?php if(is_array($sucaikulab)): $i = 0; $__LIST__ = $sucaikulab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'31','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="topSearch">
						<form action="<?php echo U('Search/search');?>" method="get">
							<input type="text" name="content" id="content" placeholder="请输入搜索关键字..." class="inputcontent" />
							<input type="submit" class="submit" value="" />
						</form>
					</div>
				</div>
				<div class="topNavMainLink">
					<a href="<?php echo U('Index/index');?>"><img src="/qzvs/Public/index/img/logo.png" /></a>
				</div>
				<div class="topNavRight">
					<ul class="topNavRightList">
						<li class="rank">
							<a href="<?php echo U('video/rank');?>"><span></span></a>
						</li>
						<!--<li class="history">
							<a href="#"><span></span></a>
						</li>
						<li class="user">
							<a href="#"><span></span></a>
						</li>-->
					</ul>
				</div>

				<div id="top_list_button">

				</div>
			</div>
			<div class="topLine"></div>
		</div>

		<div id="top_nav">
			<div id="top_nav_content">
				<div id="top_nav_top">
					<!--<div>
						<img src="/qzvs/Public/index/img/cehuatouxiang.jpg" />
					</div>
					<div>
						<a href="#">登录</a>
						<span>/</span>
						<a href="#">注册</a>
					</div>-->
				</div>
				<nav id="top_nav_left">
					<a href="<?php echo U('Video/showlist',array('catid'=>'26'));?>" id="nav_weizixun">
						<span>微资讯<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'23'));?>" id="nav_weishenghuo">
						<span>微生活<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'27'));?>" id="nav_weifangtan">
						<span>微访谈<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'25'));?>" id="nav_weidianying">
						<span>微电影<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'28'));?>" id="nav_weiketang">
						<span>微课堂<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'29'));?>" id="nav_shengyadaohang">
						<span>生涯导航<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'zhuanti'));?>" id="nav_weizhuanti">
						<span>微专题<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'30'));?>" id="nav_weifenxiang">
						<span>微分享<span>&gt;</span></span>
					</a>
					<a href="<?php echo U('Video/showlist',array('catid'=>'31'));?>" id="nav_sucaiku">
						<span>素材库<span>&gt;</span></span>
					</a>
				</nav>
				<nav id="top_nav_right">
					<a href="http://qzxy.tyut.edu.cn">清泽心雨</a>
					<span>&gt;</span>
					<a href="http://v.tyut.edu.cn">清泽微视</a>
		            <a href="http://qzxy.tyut.edu.cn/mooc/signin.html">心方向慕课</a>
		            <a href="http://www.appchina.com/app/com.qzxy.qzxyvplayer/">微视APP</a>
				</nav>
			</div>
		</div>
		<!-- 导航over -->
		<div class="clearfix"></div>

		<!--Content begin-->
		<div class="content">
			<div class="vedioContent">
				<div class="vedioBox">
					<div id="video_content">
						<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" poster="<?php echo ($play["top"]); ?>" data-setup="{}" onclick="hit()">
							<source src="http://123.57.30.41/qzvs/qzvs_video/files/<?php echo ($play['url']); ?>" type='video/mp4' ></source>
						    <source src="http://123.57.30.41/qzvs/qzvs_video/files/<?php echo ($play['url']); ?>" type='video/webm' ></source>
							<source src="http://123.57.30.41/qzvs/qzvs_video/files/<?php echo ($play['url']); ?>" type='video/ogg' ></source>
							<track kind="captions" src="demo.captions.vtt" srclang="en" label="Chinese"></track><!-- Tracks need an ending tag thanks to IE9 -->
							<track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
						</video>
					</div>
				</div>
				<div class="vedioInfo">
					<div class="title">
						<h2><?php echo ($play["title"]); ?></h2>
						<div class="data">
							<ul>
								<li class="praise">
									<a href="javascript:;" onclick="zan(<?php echo ($play['id']); ?>)" >
													<span></span>
													<b id="<?php echo ($play['id']); ?>"><?php echo ($play["zan"]); ?></b>
												</a>
								</li>
								<li class="times">
									<p><span></span><?php echo ($play["hits"]); ?></p>
								</li>
								<li class="time" style="width: 150px;">
									<p><span></span><?php echo ($play["inputtime"]); ?></p>
								</li>
								<li class="share">
									<!-- JiaThis Button BEGIN -->
									<span></span>
									<div class="jiathis_style_32x32">
										<a href="#" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
										<p>分享到</p>
									</div>
									<!-- JiaThis Button END -->
								</li>
							</ul>
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="subtitle">
						<div class="subTitleTab">
							<div class="label active"><a href="javascript:;">标 签</a></div>
							<div class="intro"><a href="javascript:;">影片简介</a></div>
						</div>
						<div class="subTitleTab_Content">
							<div class="labelContent active">
								<?php if(is_array($keywords)): foreach($keywords as $key=>$vo): ?><a href="a"><?php echo ($vo); ?></a><?php endforeach; endif; ?>
							</div>
							<div class="introContent">
								<p><?php echo ($play["description"]); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="aboutContent">
				<a href=""class="aboutContenttop">
					<img src="/qzvs/Public/index/img/aboutContenttop.jpg"/>
				</a>
				<?php if(is_array($videoinfo)): $i = 0; $__LIST__ = $videoinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href=""class="box widebox">
						<div class="img">
							<img src="<?php echo ($vo["thumb"]); ?>"/>
							<span><?php echo ($vo["length"]); ?></span>
							<div class="shadow"><img src="/qzvs/Public/index/img/shadow2.png"/></div>
							<div class="mengban"><img src="/qzvs/Public/index/img/play.png"/></div>
						</div>
						<div class="boxbot">
							<h5><?php echo ($vo["title"]); ?></h5>
							<p class="p2"><?php echo ($vo["description"]); ?></p>
							<div class="botp">
								<div class="botp1"><span></span><?php echo ($vo["hits"]); ?></div>
								<!--<div class="botp2"><span></span></div>-->
							</div>
						</div>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!--Content over-->

		<div class="clearfix"></div>
		<!-- 底部begin -->
		<div class="footer">
			<div class="bottomSearch">
				<div class="bottomSearch-content">
					<h2>做大学生自己的视频网站，记录我们生活的点点滴滴</h2>
					<div class="searchBox">
						<form action="<?php echo U('Search/search');?>" method="get">
						<input type="text" name="content" id="content" placeholder="请输入搜索关键字..." class="inputcontent" />
						<input type="submit" class="submit" value="" />
						</form>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

			 <div class="link">
		        <div class="linkContent">
		            <ul class="linkList">
		                <li class="linkLists hot">
		                    <h3>热门频道</h3>
		                    <ul>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'26'));?>">微资讯</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'23'));?>">微生活</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'27'));?>">微访谈</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'25'));?>">微电影</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'28'));?>">微课堂</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'29'));?>">生涯导航</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'zhuanti'));?>">微专题</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'30'));?>">微分享</a></li>
		                        <li><a href="<?php echo U('Video/showlist',array('catid'=>'31'));?>">素材库</a></li>
		                    </ul>
		                </li>
		                <li class="linkLists feature">
		                    <h3>特色推荐</h3>
		                    <ul>
		                        <li><a href="<?php echo U('Search/search',array('content'=>'博硕国奖'));?>">博硕国奖</a></li>
		                        <li><a href="<?php echo U('Search/search',array('content'=>'公益广告'));?>">公益广告</a></li>
		                        <li><a href="<?php echo U('Search/search',array('content'=>'校长专题'));?>">校长专题</a></li>
		                        <li><a href="http://qzxy.tyut.edu.cn/bbs/forum.php?mod=forumdisplay&fid=211">微效坊</a></li>
		                    </ul>
		                </li>
		                <li class="linkLists contact">
		                    <h3>联系我们</h3>
		                    <ul>
		                        <li class="email"><a href="#"><span></span>tyutqzxy@126.com</a></li>
		                        <li class="phone"><a href="#"><span></span>0351-6014669</a></li>
		                        <li class="qq"><a href="#"><span></span>1448444888</a></li>
		                    </ul>
		                </li>
		                <li class="linkLists sercive">
		                    <h3>服务</h3>
		                    <ul>
		                        <li><a href="http://qzxy.tyut.edu.cn/bbs/forum.php?mod=viewthread&tid=27969&extra=">意见反馈</a></li>
		                        <li><a href="http://qzxy.tyut.edu.cn/bbs/forum.php?mod=viewthread&tid=27970&extra=">导演梦</a></li>
		                        <li><a href="http://qzxy.tyut.edu.cn/bbs/forum.php?mod=viewthread&tid=27971&extra=">外景预约</a></li>
		                    </ul>
		                </li>
		                <li class="linkLists app">
		                    <h3>安卓客户端下载</h3>
		                    <ul>
		                        <li>
		                            <a href="#"><img src="/qzvs/Public/index/img/app.png" /></a>
		                        </li>
		                    </ul>
		                </li>
		            </ul>
		        </div>
		    </div>

		    <div class="clearfix"></div>

		    <div class="copyright">
		        <div class="copyrightContent">
		            <div class="copyrightInfo">
		                <ul>
<!-- 		                    <li class="about">
		                        <div class="aboutList">
		                            <div><a href="#">关于我们</a></div>
		                            <div><a href="#">联系方式</a></div>
		                            <div><a href="#">版权声明</a></div>
		                            <div><a href="#">招聘信息</a></div>
		                        </div>
		                    </li> -->
		            <li class="address">
                        <p>
                            CopyRight 2013 qzxy-v.tyut.edu.cn .All Rights Reserved 太原理工大学版权所有 晋ICP证020029号
                            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5864496'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/stat.php%3Fid%3D5864496%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
                            </script>
                        </p>
                    </li>
                    <li class="statistic">
                        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_3461057'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D3461057%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
                    </li>
		                </ul>
		            </div>
		            <div class="social">
		                <ul>
		                    <li class="sina"><a href="http://weibo.com/u/5077358070/home"><span></span></a></li>
		                    <li class="tweibo"><a href="http://t.qq.com/tyutqzws"><span></span></a></li>
		                    <li class="weixin"><a href="http://wx.qq.com"><span></span></a></li>
		                    <li class="rss"><a href="http://v.tyut.edu.cn/index.php?m=content&c=rss&siteid=1"><span></span></a></li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- 底部over -->
		<div id="mask"></div>
		<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
		<script type="text/javascript">
			var label = document.getElementsByClassName("label")[0];
			var intro = document.getElementsByClassName("intro")[0];
			var labelC = document.getElementsByClassName("labelContent")[0];
			var introC = document.getElementsByClassName("introContent")[0];
			label.onmouseover = function() {
				label.className = "label active";
				labelC.className = "labelContent active";
				intro.className = "intro";
				introC.className = "introContent";
			}
			intro.onmouseover = function() {
				intro.className = "intro active";
				introC.className = "introContent active";
				label.className = "label";
				labelC.className = "labelContent";
			}
		</script>
		<script src="/qzvs/Public/index/js/jquery-1.4.1.min.js"></script>
		<script src="/qzvs/Public/index/js/spanzan.js"></script>
	</body>

</html>