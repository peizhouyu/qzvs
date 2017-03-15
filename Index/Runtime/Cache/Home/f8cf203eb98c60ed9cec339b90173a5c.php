<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>太原理工大学清泽微视</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/new_file.css" />
    <link rel="stylesheet" type="text/css" href="/qzvs/Public/index/css/style.css" />
    <script src="/qzvs/Public/index/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="/qzvs/Public/index/js/support.js" type="text/javascript" charset="utf-8"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        #loading {
            background-color: #fff;
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            margin-top: 0px;
            top: 0px;
        }
        #loading-center {
            width: 100%;
            height: 100%;
            position: relative;
        }
        #loading-center-absolute {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 200px;
            width: 200px;
            margin-top: -100px;
            margin-left: -100px;
        }
        .object {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0);
            margin-right: auto;
            margin-left: auto;
            border: 4px solid rgb(225,232,242);
            left: 73px;
            top: 73px;
            position: absolute;
        }
        #first_object {
            -webkit-animation: first_object_animate 1s infinite ease-in-out;
            animation: first_object_animate 1s infinite ease-in-out;
        }
        #second_object {
            -webkit-animation: second_object 1s forwards, second_object_animate 1s infinite ease-in-out;
            animation: second_object 1s forwards, second_object_animate 1s infinite ease-in-out;
        }
        #third_object {
            -webkit-animation: third_object 1s forwards, third_object_animate 1s infinite ease-in-out;
            animation: third_object 1s forwards, third_object_animate 1s infinite ease-in-out;
        }
        @-webkit-keyframes second_object {
            100% {
                width: 100px;
                height: 100px;
                left: 48px;
                top: 48px;
            }
        }
        @keyframes second_object {
            100% {
                width: 100px;
                height: 100px;
                left: 48px;
                top: 48px;
            }
        }
        @-webkit-keyframes third_object {
            100% {
                width: 150px;
                height: 150px;
                left: 23px;
                top: 23px;
            }
        }
        @keyframes third_object {
            100% {
                width: 150px;
                height: 150px;
                left: 23px;
                top: 23px;
            }
        }
        @-webkit-keyframes first_object_animate {
            0% {
                -webkit-transform: perspective(100px);
            }
            50% {
                -webkit-transform: perspective(100px) rotateY(-180deg);
            }
            100% {
                -webkit-transform: perspective(100px) rotateY(-180deg) rotateX(-180deg);
            }
        }
        @keyframes first_object_animate {
            0% {
                transform: perspective(100px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(100px) rotateX(0deg) rotateY(0deg);
            }
            50% {
                transform: perspective(100px) rotateX(-180deg) rotateY(0deg);
                -webkit-transform: perspective(100px) rotateX(-180deg) rotateY(0deg);
            }
            100% {
                transform: perspective(100px) rotateX(-180deg) rotateY(-180deg);
                -webkit-transform: perspective(100px) rotateX(-180deg) rotateY(-180deg);
            }
        }
        @-webkit-keyframes second_object_animate {
            0% {
                -webkit-transform: perspective(200px);
            }
            50% {
                -webkit-transform: perspective(200px) rotateY(180deg);
            }
            100% {
                -webkit-transform: perspective(200px) rotateY(180deg) rotateX(180deg);
            }
        }

        @keyframes second_object_animate {
            0% {
                transform: perspective(200px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(200px) rotateX(0deg) rotateY(0deg);
            }
            50% {
                transform: perspective(200px) rotateX(180deg) rotateY(0deg);
                -webkit-transform: perspective(200px) rotateX(180deg) rotateY(0deg);
            }
            100% {
                transform: perspective(200px) rotateX(180deg) rotateY(180deg);
                -webkit-transform: perspective(200px) rotateX(180deg) rotateY(180deg);
            }
        }
        @-webkit-keyframes third_object_animate {
            0% {
                -webkit-transform: perspective(300px);
            }
            50% {
                -webkit-transform: perspective(300px) rotateY(-180deg);
            }
            100% {
                -webkit-transform: perspective(300px) rotateY(-180deg) rotateX(-180deg);
            }
        }
        @keyframes third_object_animate {
            0% {
                transform: perspective(300px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(300px) rotateX(0deg) rotateY(0deg);
            }
            50% {
                transform: perspective(300px) rotateX(-180deg) rotateY(0deg);
                -webkit-transform: perspective(300px) rotateX(-180deg) rotateY(0deg);
            }
            100% {
                transform: perspective(300px) rotateX(-180deg) rotateY(-180deg);
                -webkit-transform: perspective(300px) rotateX(-180deg) rotateY(-180deg);
            }
        }
    </style>
</head>

<body>
<div id="top_nav_pictl">
    <img src="/qzvs/Public/index/img/cehuabeijing.png"/>
    <div id="top_nav_icon">
        <img src="/qzvs/Public/index/img/logo-white.png" />
    </div>
    <div id="top_nav_button"></div>
</div>
<div id="top_nav">
    <div id="top_nav_content">
        <div id="top_nav_top">
           <!-- <div>
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
<div id="top_nav_mask"></div>

<div id="top_slide_projector">
    <div id="top_slide_projector_buttonLeft" class="top_slide_projector_button">
        <div class="top_button_to"></div>
        <div class="top_button_window">
            <ul>
                <li>
                    <img src="<?php echo ($info['5']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['6']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['0']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['1']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['2']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['3']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['4']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['5']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['6']['slide_img']); ?>" />
                </li>
            </ul>
        </div>
    </div>
    <div id="top_slide_projector_content">
        <div class="top_slide_block">
            <img src="<?php echo ($info['6']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['6']['slide_title']); ?></figcaption>
                <p><?php echo ($info['6']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['6']['slide_dump']); ?>"><?php echo ($info['6']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['6']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['0']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['0']['slide_title']); ?></figcaption>
                <p><?php echo ($info['0']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['0']['slide_dump']); ?>"><?php echo ($info['0']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['0']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['1']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['1']['slide_title']); ?></figcaption>
                <p><?php echo ($info['1']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['1']['slide_dump']); ?>"><?php echo ($info['1']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['1']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['2']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['2']['slide_title']); ?></figcaption>
                <p><?php echo ($info['2']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['2']['slide_dump']); ?>"><?php echo ($info['2']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['2']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['3']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['3']['slide_title']); ?></figcaption>
                <p><?php echo ($info['3']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['3']['slide_dump']); ?>"><?php echo ($info['3']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['3']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['4']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['4']['slide_title']); ?></figcaption>
                <p><?php echo ($info['4']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['4']['slide_dump']); ?>"><?php echo ($info['4']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['4']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['5']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['5']['slide_title']); ?></figcaption>
                <p><?php echo ($info['5']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['5']['slide_dump']); ?>"><?php echo ($info['5']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['5']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
        <div class="top_slide_block">
            <img src="<?php echo ($info['6']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['6']['slide_title']); ?></figcaption>
                <p><?php echo ($info['6']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['6']['slide_dump']); ?>"><?php echo ($info['6']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['6']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
         <div class="top_slide_block">
            <img src="<?php echo ($info['0']['slide_img']); ?>" />
            <figure>
                <figcaption><?php echo ($info['0']['slide_title']); ?></figcaption>
                <p><?php echo ($info['0']['slide_subtitle']); ?></p>
                <a href="<?php echo ($info['0']['slide_dump']); ?>"><?php echo ($info['0']['click']); ?></a>
            </figure>
            <img src="<?php echo ($info['0']['slide_smimg']); ?>" class="slfloat_img" />
        </div>
    </div>
    <div id="top_slide_projector_buttonRight" class="top_slide_projector_button">
        <div class="top_button_to"></div>
        <div class="top_button_window">
            <ul>

                <li>
                    <img src="<?php echo ($info['0']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['1']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['2']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['3']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['4']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['5']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['6']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['0']['slide_img']); ?>" />
                </li>
                <li>
                    <img src="<?php echo ($info['1']['slide_img']); ?>" />
                </li>
                
            </ul>
        </div>
    </div>
</div>

<div class="mainout">
    <div class="main">
        <div class="maintop">
            <div class="maintopl">
                <div id="slSlide">
                    <div id="slSlide_content">
                        <div id="slSlide_buttonLeft" class="slSlide_button">
                            <span></span>
                        </div>
                        <nav>

                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['0']['id']));?>">
                                <img src="<?php echo ($weizhuanti['0']['thumb']); ?>" />
                            </a>

                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['1']['id']));?>">
                                <img src="<?php echo ($weizhuanti['1']['thumb']); ?>" />
                            </a>
                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['2']['id']));?>">
                                <img src="<?php echo ($weizhuanti['2']['thumb']); ?>" />
                            </a>
                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['3']['id']));?>">
                                <img src="<?php echo ($weizhuanti['3']['thumb']); ?>" />
                            </a>
                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['4']['id']));?>">
                                <img src="<?php echo ($weizhuanti['4']['thumb']); ?>" />
                            </a>
                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['5']['id']));?>">
                                <img src="<?php echo ($weizhuanti['5']['thumb']); ?>" />
                            </a>
                            <a href="<?php echo U('Video/specialvideo',array('id'=>$weizhuanti['6']['id']));?>">
                                <img src="<?php echo ($weizhuanti['6']['thumb']); ?>" />
                            </a>
                        </nav>
                        <div id="slSlide_buttonRight" class="slSlide_button">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maintopr">
               <!-- <?php if(is_array($hotkey)): $i = 0; $__LIST__ = $hotkey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="two"><?php echo ($vo["keyword"]); ?><div></div></a><?php endforeach; endif; else: echo "" ;endif; ?>-->
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['0']['keyword']));?>" class="one"><?php echo ($hotkey['0']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['1']['keyword']));?>" class="two"><?php echo ($hotkey['1']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['2']['keyword']));?>" class="three"><?php echo ($hotkey['2']['keyword']); ?><div></div></a>
                <a href="" class="four">大家都在搜<div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['3']['keyword']));?>" class="three"><?php echo ($hotkey['3']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['4']['keyword']));?>" class="five"><?php echo ($hotkey['4']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['5']['keyword']));?>" class="one"><?php echo ($hotkey['5']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['6']['keyword']));?>" class="five"><?php echo ($hotkey['6']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['7']['keyword']));?>" class="one"><?php echo ($hotkey['7']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['8']['keyword']));?>" class="two"><?php echo ($hotkey['8']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['9']['keyword']));?>" class="five"><?php echo ($hotkey['9']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['10']['keyword']));?>" class="three"><?php echo ($hotkey['10']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['11']['keyword']));?>" class="five"><?php echo ($hotkey['11']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['12']['keyword']));?>" class="five"><?php echo ($hotkey['12']['keyword']); ?><div></div></a>
                <a href="<?php echo U('Search/search',array('content'=>$hotkey['13']['keyword']));?>" class="one"><?php echo ($hotkey['13']['keyword']); ?><div></div></a>

            </div>
        </div>
        <div class="content content1">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'26'));?>" class="title">微资讯</a>
                <span>(<?php echo ($count1); ?>)</span>
                <?php if(is_array($weizixunlab)): $i = 0; $__LIST__ = $weizixunlab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="con">
                <a href="<?php echo U('Index/play',array('id'=>$wzxup['id']));?>" class="pic">
                    <img src="<?php echo ($wzxup['bigpic']); ?>" />
                    <div class="picbot">
                        <div class="picbotl">
                            <div></div>
                        </div>
                        <div class="picbotr">
                            <h5><?php echo ($wzx['title']); ?></h5>
                            <p><?php echo ($wzx['description']); ?></p>
                            <span class="time"><?php echo ($wzx['inputtime']); ?></span>
                        </div>
                    </div>
                </a>
                <div class="rightout rightout1">
                    <div class="right">
                        <?php if(is_array($weizixun)): $i = 0; $__LIST__ = $weizixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play',array('id'=>$vo['id']));?>" class="box boxcol3">
                                <div class="img">
                                    <img src="<?php echo ($vo['thumb']); ?>" />
                                    <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                                </div>
                                <div class="boxbot">
                                    <p class="p1"><?php echo ($vo['title']); ?></p>
                                    <p class="p2"><?php echo ($vo['description']); ?></p>
                                </div>
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="content content2">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'23'));?>" class="title">微生活</a>
                <span>(<?php echo ($count2); ?>)</span>
                <?php if(is_array($weishenghuolab)): $i = 0; $__LIST__ = $weishenghuolab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="conout conout1">
                <div class="con">
                    <?php if(is_array($weishenghuo)): $i = 0; $__LIST__ = $weishenghuo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box boxcol5">
                            <div class="img">
                                <img src="<?php echo ($vo['thumb']); ?>" />
                                <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                            </div>
                            <div class="boxbot">
                                <p class="p1"><?php echo ($vo['title']); ?></p>
                                <p class="p2"><?php echo ($vo['description']); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <div class="content content3">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'27'));?>" class="title">微访谈</a>
                <span>(<?php echo ($count3); ?>)</span>
                <?php if(is_array($weifangtanlab)): $i = 0; $__LIST__ = $weifangtanlab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="con">
                <div href="" class="pic">
                    <div id="ftSlide">
                        <nav id="ftSlide_content">
                            <a href="<?php echo U('Index/play');?>?id=<?php echo ($wft['0']['id']); ?>" class="ft_Slide_block" style="opacity: 1;filter: alpha(opacity=100);z-index: 1;">
                                <img src="<?php echo ($wft['0']['bigpic']); ?>" />
                            </a>
                            <a href="<?php echo U('Index/play');?>?id=<?php echo ($wft['1']['id']); ?>" class="ft_Slide_block" style="opacity: 1;filter: alpha(opacity=100);z-index: 1;">
                                <img src="<?php echo ($wft['1']['bigpic']); ?>" />
                            </a>
                            <a href="<?php echo U('Index/play');?>?id=<?php echo ($wft['2']['id']); ?>" class="ft_Slide_block" style="opacity: 1;filter: alpha(opacity=100);z-index: 1;">
                                <img src="<?php echo ($wft['2']['bigpic']); ?>" />
                            </a>
                            <a href="<?php echo U('Index/play');?>?id=<?php echo ($wft['3']['id']); ?>" class="ft_Slide_block" style="opacity: 1;filter: alpha(opacity=100);z-index: 1;">
                                <img src="<?php echo ($wft['3']['bigpic']); ?>" />
                            </a>
                            <a href="<?php echo U('Index/play');?>?id=<?php echo ($wft['4']['id']); ?>" class="ft_Slide_block" style="opacity: 1;filter: alpha(opacity=100);z-index: 1;">
                                <img src="<?php echo ($wft['4']['bigpic']); ?>" />
                            </a>
                        </nav>
                        <ul id="ftSlide_control" class="ftSlide_control">
                            <li class="" style="background-color: rgb(78,168,233);"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="rightout rightout2">
                    <div class="right">
                        <?php if(is_array($weifangtan)): $i = 0; $__LIST__ = $weifangtan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box boxcol3">
                                <div class="img">
                                    <img src="<?php echo ($vo['thumb']); ?>" />
                                    <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                                    <p><?php echo ($vo['title']); ?></p>
                                    <span><?php echo ($vo['lable']); ?></span>
                                </div>
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="content content4">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'25'));?>" class="title">微电影</a>
                <span>(<?php echo ($count4); ?>)</span>
                <?php if(is_array($weidianyinglab)): $i = 0; $__LIST__ = $weidianyinglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="conout conout2">
                <div class="con">
                    <?php if(is_array($weidianying)): $i = 0; $__LIST__ = $weidianying;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box longbox boxcol5">
                            <div class="img">
                                <img src="<?php echo ($vo['bigpic']); ?>" />
                                <div class="shadow"><img src="/qzvs/Public/index/img/shadow1.png" /></div>
                                <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                            </div>
                            <div class="boxbot">
                                <p class="p1"><?php echo ($vo['title']); ?></p>
                                <p class="p2"><?php echo ($vo['description']); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <div class="content content5">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'28'));?>" class="title">微课堂</a>
                <span>(<?php echo ($count5); ?>)</span>
                <?php if(is_array($weiketanglab)): $i = 0; $__LIST__ = $weiketanglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="conout conout1">
                <div class="con">

                    <a href="<?php echo U('Index/play');?>?id=<?php echo ($wktup['id']); ?>" class="box widebox">
                        <div class="img">
                            <img src="<?php echo ($wktup['thumb']); ?>" />
                            <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                        </div>
                        <div class="boxbot">
                            <h5><?php echo ($wktup['title']); ?></h5>
                            <p class="p2"><?php echo ($wktup['description']); ?></p>
                            <div class="botp">
                                <div class="botp1"><span></span><?php echo ($wktup['hits']); ?></div>
                                <div class="botp2"><span></span>0</div>
                            </div>
                        </div>
                    </a>
                    <?php if(is_array($weiketang)): $i = 0; $__LIST__ = $weiketang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box boxcol5">
                            <div class="img">
                                <img src="<?php echo ($vo['thumb']); ?>" />
                                <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                                <span><?php echo ($vo['lable']); ?></span>
                            </div>
                            <div class="boxbot">
                                <p class="p1"><?php echo ($vo['title']); ?></p>
                                <p class="p2"><?php echo ($vo['description']); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <div class="content content6">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'29'));?>" class="title">生涯导航</a>
                <span>(<?php echo ($count6); ?>)</span>
                <?php if(is_array($shengyadaohanglab)): $i = 0; $__LIST__ = $shengyadaohanglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="conout conout2">
                <div class="con">
                    <?php if(is_array($shengyadaohang)): $i = 0; $__LIST__ = $shengyadaohang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box longbox boxcol5">
                            <div class="img">
                                <img src="<?php echo ($vo['bigpic']); ?>" />
                                <div class="shadow"><img src="/qzvs/Public/index/img/shadow1.png" /></div>
                                <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                                <span><?php echo ($vo['lable']); ?></span>
                                <div class="vid"><span></span><?php echo ($vo['hits']); ?></div>
                            </div>
                            <div class="boxbot">
                                <p class="p1"><?php echo ($vo['descipline']); ?></p>
                                <p class="p2"><?php echo ($vo['title']); ?></p>
                                <img class="imgs" src="<?php echo ($vo['authorthum']); ?>" />
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <div class="content content7">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'30'));?>" class="title">微分享</a>
                <span>(<?php echo ($count7); ?>)</span>
                <?php if(is_array($weifenxianglab)): $i = 0; $__LIST__ = $weifenxianglab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="conout conout1">
                <div class="con">
                    <?php if(is_array($weifenxiang)): $i = 0; $__LIST__ = $weifenxiang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box boxcol5">
                            <div class="img">
                                <img src="<?php echo ($vo['thumb']); ?>" />
                                <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                            </div>
                            <div class="boxbot">
                                <p class="p1"><?php echo ($vo['title']); ?></p>
                                <p class="p2"><?php echo ($vo['description']); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <div class="content content8">
            <div class="top">
                <a href="<?php echo U('Video/showlist',array('catid'=>'31'));?>" class="title">素材库</a>
                <span>(<?php echo ($count8); ?>)</span>
                <?php if(is_array($sucaikulab)): $i = 0; $__LIST__ = $sucaikulab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="" class="right"><?php echo ($vo["labname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="conout conout1">
                <div class="con">
                    <?php if(is_array($sucaiku)): $i = 0; $__LIST__ = $sucaiku;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/play');?>?id=<?php echo ($vo['id']); ?>" class="box boxcol5">
                            <div class="img">
                                <img src="<?php echo ($vo['thumb']); ?>" />
                                <div class="mengban"><img src="/qzvs/Public/index/img/play.png" /></div>
                            </div>
                            <div class="boxbot">
                                <p class="p1"><?php echo ($vo['title']); ?></p>
                                <p class="p2"><?php echo ($vo['description']); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
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
<!--                     <li class="about">
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

<script src="/qzvs/Public/index/js/huandeng.js" type="text/javascript" charset="utf-8"></script>
<div id="loading" style="z-index: 9999999999999999;position: absolute;top: 0;left: 0;transition: opacity .3s;
            -moz-transition: opacity .3s;
            -webkit-transform-origin: opacity .3s;
            -ms-transition: opacity .3s;">
    <div id="loading-center" style="">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //监听加载状态改变
    document.onreadystatechange = completeLoading;
    //加载状态为complete时移除loading效果
    function completeLoading() {
        if(document.readyState == "complete") {
            setTimeout(function() {
                document.getElementById("loading").style.opacity = 0;
            }, 700)
            setTimeout(function() {
                document.getElementById("loading").style.display = 'none';
            }, 1000)
        }
    }
</script>
</body>

</html>