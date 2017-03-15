<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/weibangdan.css"/>
		<title>微榜单 太原理工大学清泽微视</title>
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/style.css"/>
		<script src="/qzvs/Public/index/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/menu.css"/>
	</head>
	<body>
		<!-- 导航Begin -->
		<div class="header">
			<div class="topNav">
				<div class="topNavLeft">
					<div class="mainNav">
						<a href="#" class="mainNavs">
							<span class="menu"></span><span>导航</span>
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
							<a href="#"><span></span></a>
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
						<img src="/qzvs/Public/index/img/cehuatouxiang.jpg"/>
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
		<div id="mainBody">
			<div id="mainBody_top">
				<div id="mainBody_top_left">
					<img src="/qzvs/Public/index/img/title-ranking.png"/>
				</div>
				<nav id="mainBody_top_right">
					<a href="<?php echo U('Video/rank',array('date'=>'today'));?>">日排行</a>
					<a class="top_right_fxg"></a>
					<a href="<?php echo U('Video/rank',array('date'=>'week'));?>">周排行</a>
					<a class="top_right_fxg"></a>
					<a href="<?php echo U('Video/rank',array('date'=>'month'));?>">月排行</a>
				</nav>
			</div>
			<div id="mainBody_main">
				<ul id="mainBody_list_title">
					<li></li>
					<li><span>1</span></li>
					<li><span>2</span></li>
					<li><span>3</span></li>
					<li><span>4</span></li>
					<li><span>5</span></li>
					<li><span>6</span></li>
					<li><span>7</span></li>
					<li><span>8</span></li>
					<li><span>9</span></li>
					<li><span>10</span></li>
				</ul>
				<ul id="mainBody_list_one">
					<li>
						<img src="/qzvs/Public/index/img/nav_1_left.png"/>
						<h5>微资讯</h5>
					</li>
					<?php if(is_array($weizixun)): $i = 0; $__LIST__ = $weizixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
						<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
							<div class="list_img">
								<img src="<?php echo ($vo["thumb"]); ?>"/>
								<div></div>
								<span><?php echo ($vo["length"]); ?></span>
							</div>
							<div class="list_content">
								<p><?php echo ($vo["title"]); ?></p>
								<div class="list_content_play">
									<span><?php echo ($vo["hits"]); ?></span>
								</div>
								<div class="list_content_zan">
									<span onclick="zan(<?php echo ($vo['id']); ?>)"  class="zan">
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
								</div>
							</div>
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul id="mainBody_list_two">
					<li>
						<img src="/qzvs/Public/index/img/nav_2_left.png"/>
						<h5>微生活</h5>
					</li>
					<?php if(is_array($weishenghuo)): $i = 0; $__LIST__ = $weishenghuo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<div class="list_img">
									<img src="<?php echo ($vo["thumb"]); ?>"/>
									<div></div>
									<span><?php echo ($vo["length"]); ?></span>
								</div>
								<div class="list_content">
									<p><?php echo ($vo["title"]); ?></p>
									<div class="list_content_play">
										<span><?php echo ($vo["hits"]); ?></span>
									</div>
									<div class="list_content_zan">
										<span onclick="zan(<?php echo ($vo['id']); ?>)"  class="zan">
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul id="mainBody_list_three">
					<li>
						<img src="/qzvs/Public/index/img/nav_3_left.png"/>
						<h5>微访谈</h5>
					</li>
					<?php if(is_array($weifangtan)): $i = 0; $__LIST__ = $weifangtan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<div class="list_img">
									<img src="<?php echo ($vo["thumb"]); ?>"/>
									<div></div>
									<span><?php echo ($vo["length"]); ?></span>
								</div>
								<div class="list_content">
									<p><?php echo ($vo["title"]); ?></p>
									<div class="list_content_play">
										<span><?php echo ($vo["hits"]); ?></span>
									</div>
									<div class="list_content_zan">
										<span onclick="zan(<?php echo ($vo['id']); ?>)"  class="zan">
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
				<ul id="mainBody_list_four">
					<li>
						<img src="/qzvs/Public/index/img/nav_4_left.png"/>
						<h5>微电影</h5>
					</li>
					<?php if(is_array($weidianying)): $i = 0; $__LIST__ = $weidianying;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<div class="list_img">
									<img src="<?php echo ($vo["thumb"]); ?>"/>
									<div></div>
									<span><?php echo ($vo["length"]); ?></span>
								</div>
								<div class="list_content">
									<p><?php echo ($vo["title"]); ?></p>
									<div class="list_content_play">
										<span><?php echo ($vo["hits"]); ?></span>
									</div>
									<div class="list_content_zan">
										<span onclick="zan(<?php echo ($vo['id']); ?>)"  class="zan">
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
				<ul id="mainBody_list_five">
					<li>
						<img src="/qzvs/Public/index/img/nav_5_left.png"/>
						<h5>微课堂</h5>
					</li>
					<?php if(is_array($weiketang)): $i = 0; $__LIST__ = $weiketang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<div class="list_img">
									<img src="<?php echo ($vo["thumb"]); ?>"/>
									<div></div>
									<span><?php echo ($vo["length"]); ?></span>
								</div>
								<div class="list_content">
									<p><?php echo ($vo["title"]); ?></p>
									<div class="list_content_play">
										<span><?php echo ($vo["hits"]); ?></span>
									</div>
									<div class="list_content_zan">
										<span onclick="zan(<?php echo ($vo['id']); ?>)"  class="zan">
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
				<ul id="mainBody_list_six">
					<li>
						<img src="/qzvs/Public/index/img/nav_6_left.png"/>
						<h5>生涯导航</h5>
					</li>
					<?php if(is_array($shengyadaohang)): $i = 0; $__LIST__ = $shengyadaohang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<div class="list_img">
									<img src="<?php echo ($vo["thumb"]); ?>"/>
									<div></div>
									<span><?php echo ($vo["length"]); ?></span>
								</div>
								<div class="list_content">
									<p><?php echo ($vo["title"]); ?></p>
									<div class="list_content_play">
										<span><?php echo ($vo["hits"]); ?></span>
									</div>
									<div class="list_content_zan">
										<span onclick="zan(<?php echo ($vo['id']); ?>)"  class="zan">
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
				<ul id="mainBody_list_seven">
					<li>
						<img src="/qzvs/Public/index/img/nav_8_left.png"/>
						<h5>微分享</h5>
					</li>
					<?php if(is_array($weifenxiang)): $i = 0; $__LIST__ = $weifenxiang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainbody_list_main">
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<div class="list_img">
									<img src="<?php echo ($vo["thumb"]); ?>"/>
									<div></div>
									<span><?php echo ($vo["length"]); ?></span>
								</div>
								<div class="list_content">
									<p><?php echo ($vo["title"]); ?></p>
									<div class="list_content_play">
										<span><?php echo ($vo["hits"]); ?></span>
									</div>
									<div class="list_content_zan">
										<span onclick="zan(<?php echo ($vo['id']); ?>)" >
											<b id="<?php echo ($vo['id']); ?>"><?php echo ($vo["zan"]); ?></b>
										</span>
									</div>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
			</div>
		</div>
		
		
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
	</body>

	<script src="/qzvs/Public/index/js/jquery-1.4.1.min.js"></script>
	<script src="/qzvs/Public/index/js/spanzan.js"></script>
	<!--<script>


		function  zan(id) {
			event.preventDefault();
			//var Oa=$(this);
			//var id=Oa.attr('id');//获取id属性
			var id=id;
			var vl=$("#"+id).text();

			vl=parseInt(vl)+1;
			$.post('http://localhost/qzvs/index.php/Home/Video/zan',{id:id},function(data){
				if(data.status==1){
					//alert('感谢您的支持！');//模拟异步数据加1
					$("#"+id).text(vl);//页面元素加1
				}else{
					//alert('您已经点过赞了,不要重复哦！');
				}
			},'json');
			//window.location.href = "http://localhost/qzvs/index.php/Home/Video/zan/id/"+id;
		}
	</script>-->

</html>