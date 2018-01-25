<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" class="scheme_original">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>医疗企业</title>
		<link rel="icon" href="Public/Home/images/favicon.ico" />
		
        <script type="text/javascript" src="Public/Home/js/loading.js" ></script>
		 
        <link rel="stylesheet" href="Public/Home/css/fontello/css/fontello.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/css/core.animation.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/css/shortcodes.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/plugin.instagram-widget.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/skin.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/css/responsive.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/core.messages.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />

    </head>

    <body class="company page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                <!-- Header -->
                <header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
        <!--登录前  Top panel : Bar -->
        <div class="top_panel_top before">
            <div class="content_wrap clearfix">
                <div class="top_panel_top_contact_area">
                    请致电<a>400-6756-168</a>与我们联系
                </div>
                <div class="top_panel_top_user_area">
                    <ul id="menu_user" class="menu_user_nav">
                        <?php
 if($_SESSION['eye_uid']){ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/center');?>" class="popup_link"><i class="popup_login_link icon-user"></i>你好，<?php echo $_SESSION['eye_username'] ?></a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/logout');?>" class="popup_link"><i class="popup_login_link icon-user"></i>退出</a>
                        </li>
                        <?php }elseif($_SESSION['expert_id']){ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Expert/center');?>" class="popup_link"><i class="popup_login_link icon-user"></i>你好，<?php echo $_SESSION['expert_username'] ?></a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/logout');?>" class="popup_link"><i class="popup_login_link icon-user"></i>退出</a>
                        </li>
                        <?php }elseif($_SESSION['company_id']){ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Company/center');?>" class="popup_link"><i class="popup_login_link icon-user"></i>你好，<?php echo $_SESSION['company_name'] ?></a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/logout');?>" class="popup_link"><i class="popup_login_link icon-user"></i>退出</a>
                        </li>
                        <?php }else{ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/index');?>" class="popup_link"><i class="popup_login_link icon-user"></i>个人登录</a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Expert/login');?>" class="popup_link"><i class="popup_login_link icon-user-add"></i>专家登录</a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Company/login');?>" class="popup_link"><i class="popup_login_link icon-users"></i>企业登录</a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="top_panel_top_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social-qq">
                                    <span class="icon-qq"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social-weibo">
                                    <span class="icon-weibo"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_top_search">
                        <div class="search_wrap search_style_regular search_state_closed">
                            <a href="#" class="social_icons social-help">
                                <span class="icon-help"></span>
                            </a>
                            <div class="search_results widget_area scheme_original">
                                <a class="search_results_close icon-cancel"></a>
                                <div class="search_results_content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /登录前  Top panel : Bar -->
        <!-- 菜单 Menu area -->
        <div class="top_panel_middle">
            <div class="content_wrap">
                <!-- Contact logo -->
                <div class="contact_logo">
                    <div class="logo">
                        <a href="index.html">
                            <img src="Public/Home/images/logo.png" class="logo_main" alt="">
                            <img src="Public/Home/images/logo.png" class="logo_fixed" alt="">
                        </a>
                    </div>
                </div>
                <!-- /Contact logo -->
                <!-- Main Menu -->
                <div class="menu_main_wrap">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                            <li><a href="<?php echo U('Ophtha/index');?>">眼科医学</a></li>
                            <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
                            <li><a href="<?php echo U('Expert/index');?>">眼科专家</a></li>
                            <li><a href="<?php echo U('History/index');?>">眼科历史</a></li>
                            <li><a href="<?php echo U('Company/index');?>">医疗企业</a></li>
                            <li><a href="<?php echo U('Rescue/index');?>">救助中心</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /Main Menu -->
            </div>
        </div>
        <!-- /菜单 Menu area -->
    </div>
</header>
<!-- /Header -->
<!-- Header Mobile -->
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="index.html">
                <img src="Public/Home/images/logo.png" class="logo_main" alt="">
            </a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_main_mobile" class="menu_main_nav">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Ophtha/index');?>">眼科医学</a></li>
                    <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
                    <li><a href="<?php echo U('Expert/index');?>">眼科专家</a></li>
                    <li><a href="<?php echo U('History/index');?>">眼科历史</a></li>
                    <li><a href="<?php echo U('Company/index');?>">医疗企业</a></li>
                    <li><a href="<?php echo U('Rescue/index');?>">救助中心</a></li>
                </ul>
            </nav>
            <!-- Login -->
            <div class="login">
                <a href="login.html" class="popup_link popup_login_link icon-user">登录</a>
            </div>
            <div class="login">
                <a href="login_expert.html" class="popup_link popup_login_link icon-user">专家登录</a>
            </div>
            <div class="login">
                <a href="login_company.html" class="popup_link popup_login_link icon-user">企业登录</a>
            </div>
            <!-- /Login -->
        </div>
    </div>
    <div class="mask"></div>
</div>
                <!-- /Header Mobile -->
                 <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title">医疗企业</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="<?php echo U('Index/index');?>">首页</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">医疗企业</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
                <div class="content_wrap">
                    <!-- Content -->
                    <div class="content">
                    	<ul>
                    		<li class="column-3_10 cpy fl transition">
                    			<div class="cy-cp-img">
                    				<img src="Public/Home/images/omy.jpg" />
                    			</div>
                    			<div class="cy-cp-text">
                    				<a href="<?php echo U('Company/deta');?>" target="_blank">
				                        <h4 class="cy-cp-name">华北制药厂 </h4>
				                    </a>
                    			</div>
                    			<div class="cy-cp-info">这里是华北制药的介绍</div>
                    			<div class="cy-cp-tag">
			                        <ul>
			                            <li class="fl column-4_9">行业：制造业<b class="shux"></b></li>
			                            <li class="fl column-4_9">所在地：苏州市</b></li>
			                            <li class="clear"></li>
			                        </ul>
			                    </div>
                    		</li>
                    		<li class="column-3_10 cpy fl transition">
                    			<img src="Public/Home/images/omy1.jpg" />
                    			<div class="cy-cp-text">
                    				<a href="company_center.html" target="_blank">
				                        <h4 class="cy-cp-name">华北制药厂 </h4>
				                    </a>
                    			</div>
                    			<div class="cy-cp-info">这里是华北制药的介绍</div>
                    			<div class="cy-cp-tag">
			                        <ul>
			                            <li class="fl column-4_9">行业：制造业<b class="shux"></b></li>
			                            <li class="fl column-4_9">所在地：苏州市</b></li>
			                            <li class="clear"></li>
			                        </ul>
			                    </div>
                    		</li>
                    		<li class="column-3_10 cpy fl transition">
                    			<img src="Public/Home/images/omy2.jpg" />
                    			<div class="cy-cp-text">
                    				<a href="company_center.html" target="_blank">
				                        <h4 class="cy-cp-name">华北制药厂 </h4>
				                    </a>
                    			</div>
                    			<div class="cy-cp-info">这里是华北制药的介绍</div>
                    			<div class="cy-cp-tag">
			                        <ul>
			                            <li class="fl column-4_9">行业：制造业<b class="shux"></b></li>
			                            <li class="fl column-4_9">所在地：苏州市</b></li>
			                            <li class="clear"></li>
			                        </ul>
			                    </div>
                    		</li>
                    		<div class="clear"></div>
                    	</ul>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page Content Wrap -->
              <!-- Footer -->
                <footer class="footer_wrap widget_area scheme_original">
    <div class="footer_wrap_inner widget_area_inner">
        <div class="content_wrap">
            <div class="columns_wrap">
                <!-- Widget: Text -->
                <aside class="column-1_4 widget widget_text">
                    <h5 class="widget_title">关于我们</h5>
                    <div class="textwidget">
                        <p>我们是一群有爱心的慈善公益人，我们期待志同道合的爱心人士加入我们。</p>
                        <p class="textwidget_info">
                            <strong>邮箱: info@yoursite.com</strong>
                        </p>
                        <p class="textwidget_info">
                            <strong>地址:北京市海淀区清华科技园.<a href="map/beijing.htm">百度地图</a></strong>
                        </p>
                        <p class="textwidget_info">
                            <strong>电话:400-6756-168</strong>
                        </p>
                    </div>
                </aside><!-- /Widget: Text --><!-- Widget: Recent Posts --><aside class="column-1_4 widget widget_recent_posts">
                <h5 class="widget_title">公益新闻</h5>
                <article class="post_item with_thumb first">
                    <div class="post_thumb">
                        <img alt="" src="Public/Home/images/what-we-believe-75x75.jpg">
                    </div>
                    <div class="post_content">
                        <h6 class="post_title">
                            <a href="javascript:;">全国现有事实孤儿至少61万人 救助困局亟待破解</a>
                        </h6>
                        <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="javascript:;" class="post_info_date">2017-11-25 星期六</a>
                                                </span>
                        </div>
                    </div>
                </article>
                <article class="post_item with_thumb">
                    <div class="post_thumb">
                        <img alt="" src="Public/Home/images/5-questions-for-decision-makers-75x75.jpg">
                    </div>
                    <div class="post_content">
                        <h6 class="post_title">
                            <a href="javascript:;">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
                        </h6>
                        <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="javascript:;" class="post_info_date">2017-11-26 星期日</a>
                                                </span>
                        </div>
                    </div>
                </article>
            </aside><!-- /Widget: Recent Posts --><!-- Widget: Instagram --><aside class="column-1_4 widget null-instagram-feed">
                <h5 class="widget_title">最新项目</h5>
                <ul class="instagram-pics instagram-size-large">
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op2.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op3.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op4.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op5.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op6.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op7.jpg" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank">
                            <img src="Public/Home/images/op8.jpg" alt="" title="" />
                        </a>
                    </li>
                </ul>
            </aside><!-- /Widget: Instagram --><!-- Widget: Recent Comments --><aside class="column-1_4 widget widget_recent_comments">
                <h5 class="widget_title">友情链接</h5>
                <ul id="recentcomments">
                    <li class="recentcomments">
                        <a href="http://www.cmf.org.cn/" target="_blank">中国医学基金会</a>
                    </li>
                    <li class="recentcomments">
                        <a href="http://zgykbwg.ahnmc.com/" target="_blank">中国眼科博物馆</a>
                    </li>
                    <li class="recentcomments">
                        <a href="javascript:;" target="_blank">社会福利基金会</a>
                    </li>
                    <li class="recentcomments">
                        <a href="http://alijijinhui.org/index.php" target="_blank">阿里巴巴公益基金</a>
                    </li>
                    <li class="recentcomments">
                        <a href="javascript:;" target="_blank">腾讯公益</a>
                    </li>
                </ul>
                <ul id="recentcomments">
                    <li class="recentcomments">
                        <a href="http://www.cmf.org.cn/" target="_blank">中国医学基金会</a>
                    </li>
                    <li class="recentcomments">
                        <a href="http://zgykbwg.ahnmc.com/" target="_blank">中国眼科博物馆</a>
                    </li>
                    <li class="recentcomments">
                        <a href="javascript:;" target="_blank">社会福利基金会</a>
                    </li>
                    <li class="recentcomments">
                        <a href="javascript:;" target="_blank">阿里巴巴公益平台</a>
                    </li>
                    <li class="recentcomments">
                        <a href="http://gongyi.qq.com/" target="_blank">腾讯公益</a>
                    </li>
                </ul>
            </aside>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->
<!-- Copyright -->
<div class="copyright_wrap copyright_style_text scheme_original">
    <div class="copyright_wrap_inner">
        <div class="content_wrap">
            <div class="copyright_text">Copyright &copy; 2017.Company name All rights reserved.
            </div>
        </div>
    </div>
</div>
<!-- /Copyright -->
</div>
<!-- /Page wrap -->
</div>
<!-- /Body wrap -->

<a href="javascript:;" class="scroll_to_top icon-up" title="Scroll to top"></a>

<script type="text/javascript" src="Public/Home/js/jquery/jquery.js"></script>

<script type="text/javascript" src="Public/Home/js/vendor/photostack/modernizr.min.js"></script>
<script type="text/javascript" src="Public/Home/js/_main.min.js"></script>
<script type="text/javascript" src="Public/Home/js/_packed.js"></script>

<script type="text/javascript" src="Public/Home/js/vendor/essential-grid/js/lightbox.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js"></script>
<script type="text/javascript" src="Public/Home/js/essential-grid-homepage-1.js"></script>

<script type="text/javascript" src="Public/Home/js/vendor/revslider/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="Public/Home/js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/revslider/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="Public/Home/js/revslider-homepage-1.min.js"></script>

<script type="text/javascript" src="Public/Home/js/superfish.min.js"></script>
<script type="text/javascript" src="Public/Home/js/core.utils.min.js"></script>
<script type="text/javascript" src="Public/Home/js/user.js"></script>
<script type="text/javascript" src="Public/Home/js/template.init.min.js"></script>

<script type="text/javascript" src="Public/Home/js/shortcodes.min.js"></script>
<script type="text/javascript" src="Public/Home/js/core.messages.min.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/magnific/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" src="Public/Home/js/countdown/jquery.plugin.min.js"></script>
<script type="text/javascript" src="Public/Home/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/swiper/swiper.min.js"></script>
<script type="text/javascript" src="Public/Home/js/vendor/isotope/dist/isotope.pkgd.min.js"></script>



    </body>

</html>