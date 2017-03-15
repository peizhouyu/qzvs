<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>微访谈-太原理工大学清泽微视</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<script src="/qzvs/Public/index/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
		<!--头部底部css样式表-->
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/style.css" />
		<!--二级页面导航-->
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/category.css"/>
		<link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/menu.css"/>
		<script src="/qzvs/Public/index/js/tapbar.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<!-- 导航Begin -->
		<div class="header">
			<div class="topNav">
				<div class="topNavLeft">
					<div class="mainNav">
						<a href="#" class="mainNavs">
							<span class="menu"></span><span>微访谈</span>
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
						<img src="img/cehuatouxiang.jpg"/>
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
			<div class="navBox">
				<div class="navList">
					<ul>
						<li class="navNews">
							<a href="<?php echo U('Video/showlist',array('catid'=>'26'));?>">
								<span></span>
								<p>微资讯</p>
							</a>
							<i></i>
						</li>
						<li class="navLife">
							<a href="<?php echo U('Video/showlist',array('catid'=>'23'));?>">
								<span></span>
								<p>微生活</p>
							</a>
							<i></i>
						</li>
						<li class="navTalk active">
							<a href="<?php echo U('Video/showlist',array('catid'=>'27'));?>">
								<span></span>
								<p>微访谈</p>
							</a>
							<i></i>
						</li>
						<li class="navMovie">
							<a href="<?php echo U('Video/showlist',array('catid'=>'25'));?>">
								<span></span>
								<p>微电影</p>
							</a>
							<i></i>
						</li>
						<li class="navClassroom">
							<a href="<?php echo U('Video/showlist',array('catid'=>'28'));?>">
								<span></span>
								<p>微课堂</p>
							</a>
							<i></i>
						</li>
						<li class="navDv">
							<a href="<?php echo U('Video/showlist',array('catid'=>'29'));?>">
								<span></span>
								<p>生涯导航</p>
							</a>
							<i></i>
						</li>
						<li class="navTopic">
							<a href="<?php echo U('Video/showlist',array('catid'=>'zhuanti'));?>">
								<span></span>
								<p>微专题</p>
							</a>
							<i></i>
						</li>
						<li class="navShare">
							<a href="<?php echo U('Video/showlist',array('catid'=>'30'));?>">
								<span></span>
								<p>微分享</p>
							</a>
							<i></i>
						</li>
						<li class="navRepository">
							<a href="<?php echo U('Video/showlist',array('catid'=>'31'));?>">
								<span></span>
								<p>素材库</p>
							</a>
							<i></i>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="category">
				<div class="categoryContent">
					<div class="categoryTitle">
						<h3>微访谈<i>(<?php echo ($count); ?>)</i></h3>
						<div class="categoryChange">
							<div class="changeBox">
								<a href="#" class="list active" id="tapbar-list"><span></span>列表</a>
								<a href="#" class="tile" id="tapbar-tile"><span></span>平铺</a>
							</div>
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="categoryList">
						<ul>
							<li>
								<div class="categoryListTitle">
									<h4><span></span><p>按类别</p><i></i></h4>
								</div>
								<div class="categoryLists">
									<?php if(is_array($lab)): $i = 0; $__LIST__ = $lab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'0','lable'=>$vo['labname']));?>"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</li>
							<li>
								<div class="categoryListTitle">
									<h4><span></span><p>按时间</p><i></i></h4>
								</div>
								<div class="categoryLists">
									<a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'1','time'=>'today'));?>">今天</a>
									<a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'1','time'=>'week'));?>">最近一周</a>
									<a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'1','time'=>'month'));?>">最近一月</a>
									<a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'1','time'=>'year'));?>">最近一年</a>
								</div>
							</li>
							<li>
								<div class="categoryListTitle">
									<h4><span></span><p>按热度</p><i></i></h4>
								</div>
								<div class="categoryLists">
									<a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'2','hot'=>'zan'));?>">评分最高</a>
									<a href="<?php echo U('Search/SearchList',array('catid'=>'27','type'=>'2','hot'=>'hit'));?>">人气最高</a>
								</div>
							</li>
							<li>
								<div class="categoryListTitle">
									<h4><span></span><p>大家都在搜</p><i></i></h4>
								</div>
								<div class="categoryLists">
									<?php if(is_array($hotkey)): $i = 0; $__LIST__ = $hotkey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Search/search',array('content'=>$vo['keyword']));?>"><?php echo ($vo["keyword"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
							</li>
						</ul>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="newsList">
						<ul class="newsListBox">
							<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
									<div class="newsitemContent">
										<a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>">
											<div class="newsImage">
												<div>
													<img src="<?php echo ($vo["thumb"]); ?>"/>
												</div>
												<i></i>
												<img src="/qzvs/Public/index/img/play.png" class="play"/>
											</div>
											<div class="newsInfo">
												<div class="newsTitle">
													<h3><?php echo ($vo["title"]); ?></h3>
													<p><span><?php echo ($vo["inputtime"]); ?></span><i></i></p>
												</div>
												<div class="subTitle">
													<p><?php echo ($vo["description"]); ?></p>
												</div>
												<div class="dataInfo">
													<p class="times"><span></span><?php echo ($vo["hits"]); ?></p>
													<!--<p class="comment"><span></span>123</p>-->
													<p class="praise">
														<a href="javascript:;" class="zan" id="<?php echo ($vo['id']); ?>" >
															<span></span>
															<b><?php echo ($vo["zan"]); ?></b>
														</a>
													</p>
												</div>
											</div>
										</a>
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					
					<div class="clearfix"></div>
					
					<span class="page">
						<ul>
							<?php echo ($page); ?>
						</ul>
						<!--<ul style="list-style: none;">
							<li style="float: left"><a href="#" class="total">512条</a></li>
							<li style="float: left"><a href="#" class="prev">上一页</a></li>
							<li style="float: left"><a href="#" class="pages">1</a></li>
							<li style="float: left"><a href="#" class="pages">2</a></li>
							<li style="float: left"><a href="#" class="pages current">3</a></li>
							<li style="float: left"><a href="#" class="pages">4</a></li>
							<li style="float: left"><a href="#" class="pages">5</a></li>
							<li style="float: left"><a href="#" class="pages">6</a></li>
							<p>...</p>
							<li style="float: left"><a href="#" class="pages">8</a></li>
							<li style="float: left"><a href="#" class="next">下一页</a></li>
						</ul>
						-->
					</span>
				</div>
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
		
		
	</body>
	<script src="/qzvs/Public/index/js/jquery-1.4.1.min.js"></script>
	<script src="/qzvs/Public/index/js/azan.js"></script>

	<!--<script language="JavaScript">
		$(".zan").click(function () {

			var Oa=$(this);
			var id=Oa.attr('id');//获取id属性
			var vl=Oa.find("b").text();

			vl=parseInt(vl)+1;
			$.post('http://localhost/qzvs/index.php/Home/Video/zan',{id:id},function(data){
				if(data.status==1){
					//alert('感谢您的支持！');//模拟异步数据加1
					Oa.find("b").text(vl);//页面元素加1
				}
			},'json');
		})
	</script>-->

</html>