<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($special["title"]); ?>-太原理工大学清泽微视</title>
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/menu.css" />
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/topic.css" />
		<script src="/qzvs/Public/index/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
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
						<a href="<?php echo U('Video/rank');?>"><span></span></a>
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

		<div class="topicContent">
			<div class="topicImg">
				<img src="<?php echo ($special['banner']); ?>" />
			</div>
			<div class="topicBox">
				<div class="topicTitle">
					<h3><?php echo ($special["title"]); ?></h3>
				</div>
				<div class="topicList">
					<ul>
						<li class="topicListSlide">
							<nav id="ftSlide_content">
								<a href="<?php echo U('Index/play',array('id'=>$upvideo['0']['id']));?>" class="ft_Slide_block" style="opacity: 1;filter: alpha(opacity=100);z-index: 1;">
									<img src="<?php echo ($upvideo['0']['bigpic']); ?>"/>
								</a>
								<a href="<?php echo U('Index/play',array('id'=>$upvideo['1']['id']));?>" class="ft_Slide_block">
									<img src="<?php echo ($upvideo['1']['bigpic']); ?>"/>
								</a>
								<a href="<?php echo U('Index/play',array('id'=>$upvideo['2']['id']));?>" class="ft_Slide_block">
									<img src="<?php echo ($upvideo['2']['bigpic']); ?>"/>
								</a>
								<a href="<?php echo U('Index/play',array('id'=>$upvideo['3']['id']));?>" class="ft_Slide_block">
									<img src="<?php echo ($upvideo['3']['bigpic']); ?>"/>
								</a>
								<a href="<?php echo U('Index/play',array('id'=>$upvideo['4']['id']));?>" class="ft_Slide_block">
									<img src="<?php echo ($upvideo['4']['bigpic']); ?>"/>
								</a>
							</nav>
							<ul id="ftSlide_control" class="ftSlide_control">
								<li class="" style="background-color: rgb(78,168,233);"></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</li>
						<?php if(is_array($videoinfo)): $i = 0; $__LIST__ = $videoinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
								<img src="<?php echo ($vo["thumb"]); ?>" class="topicListImg"/>
								<div>
									<i></i>
									<img src="/qzvs/Public/index/img/play.png"/>
								</div>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<!-- 底部begin -->
		<div class="footer">
			<div class="bottomSearch">
				<div class="bottomSearch-content">
					<h2>做大学生自己的视频网站，记录我们生活的点点滴滴</h2>
					<div class="searchBox">
						<form  action="<?php echo U('Search/search');?>" method="get">
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
		<script src="/qzvs/Public/index/js/wfthuandeng.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>