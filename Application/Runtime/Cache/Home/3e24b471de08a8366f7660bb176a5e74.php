<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" class="scheme_original">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="format-detection" content="telephone=no">

		<title>新闻</title>
		<link rel="icon" href="Public/Home/images/favicon.ico" />

<script type="text/javascript" src="Public/Home/js/loading.js" ></script>


<link rel="stylesheet" href="Public/Home/css/fontello/css/fontello.css" type="text/css" media="all" />

<link rel="stylesheet" href="Public/Home/js/vendor/revslider/css/settings.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/css/plugin.revslider.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="Public/Home/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/css/core.animation.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/css/shortcodes.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="Public/Home/css/plugin.instagram-widget.min.css" type="text/css" media="all"  />
<link rel="stylesheet" href="Public/Home/css/plugin.html5-jquery-audio-player.min.css" type="text/css" media="all"  />
<link rel="stylesheet" href="Public/Home/css/plugin.woocommerce.min.css" type="text/css" media="all"  />

<link rel='stylesheet' href='Public/Home/js/vendor/swiper/swiper.min.css' type='text/css' media='all' />

<link rel="stylesheet" href="Public/Home/css/skin.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/css/responsive.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/css/responsive.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/css/core.messages.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="Public/Home/js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />
	</head>

	<body class="page page-template body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right news">
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
									<li>
										<a href="index.html">首页</a>
									</li>
									<li>
										<a href="ophthalmology.html">眼科医学</a>
									</li>
									<li>
										<a href="news.html">新闻中心</a>
									</li>
									<li>
										<a href="contacts.html">联系我们</a>
									</li>
									<li>
										<a href="rescue.html">救助中心</a>
									</li>
								</ul>
							</nav>
							<!-- Search -->
							<div class="search_wrap search_style_regular search_state_fixed">
								<div class="search_form_wrap">
									<form role="search" method="get" class="search_form" action="#">
										<button type="submit" class="search_submit icon-search" title="Start search"></button>
										<input type="text" class="search_field" placeholder="搜索" value="" name="s" />
									</form>
								</div>
								<div class="search_results widget_area scheme_original">
									<a class="search_results_close icon-cancel"></a>
									<div class="search_results_content"></div>
								</div>
							</div>
							<!-- /Search -->
							<!-- Login -->
							<div class="login">
								<a href="login.html" class="popup_link popup_login_link icon-user">登录</a>
							</div>
							<!-- /Login -->
						</div>
						<!-- Socials panel -->
						<div class="panel_bottom">
							<div class="contact_socials">
								<div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_qq">
											<span class="icon-qq"></span>
										</a>
									</div>
									<div class="sc_socials_item">
										<a href="#" target="_blank" class="social_icons social_weibo">
											<span class="icon-weibo"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Socials panel -->
					</div>
					<div class="mask"></div>
				</div>
				<!-- /Header Mobile -->
				<!-- Breadcrumbs -->
				<div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
					<div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg2">
						<div class="content_wrap">
							<h1 class="page_title">新闻中心</h1>
							<div class="breadcrumbs">
								<a class="breadcrumbs_item home" href="index.html">首页</a>
								<span class="breadcrumbs_delimiter"></span>
								<span class="breadcrumbs_item current">新闻中心</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /Breadcrumbs -->
				<!-- Page Content Wrap -->
				<div class="page_content_wrap page_paddings_no">
					<div class="content_wrap">
						<!-- Content -->	
							<div class="content">
								<div class="content_bg">
									<article class="post_item post_item_excerpt odd last donation">
										<div class="sc_services_item_featured post_featured">
		                                    <div class="post_thumb" data-title="Who We Are">
		                                         <a class="hover_icon hover_icon_link" href="news_center.html">
		                                            <img alt="icon.jpg" src="Public/Home/images/icon-167x167.jpg">
		                                        </a>
		                                    </div>
		                                </div>
										<div class="post_content clearfix">
											<h4 class="post_title">
		                                        <a href="news_center.html">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
		                                    </h4>
											<div class="post_info">
												<span class="post_info_item post_info_tags">作者：
		                                            <a class="donation_category_link" href="#">张三</a>
		                                        </span>
		                                        <span class="post_info_item post_info_counters">2017-11-26</span>
												<span class="post_info_item post_info_counters">阅读
		                                            <a class="post_counters_item post_counters_views" title="阅读" href="#">
		                                                <span class="post_counters_number">155</span>
												</a>
												</span>
											</div>
											<div class="post_descr">
												<p>又一波虐童信息冲上各大媒体头条，《少年法学苑》本来想用“停更一天”来抗议那些无耻，因为你不管是如何传播美、善，当罪恶和肮脏迎头砸来，你都是如此无助、无奈。但是，回避与谩骂、攻击，同样属于软弱。压住怒火，还是坐下来思考一下如何推进问题的解决。</p>
												<a href="news_center.html" class="sc_services_item_readmore">查看更多
													<span class="icon-right-1"></span>
												</a>
											</div>
										</div>
									</article>
									<article class="post_item post_item_excerpt odd last donation column">
										<div class="sc_services_item_featured post_featured">
		                                    <div class="post_thumb" data-title="Who We Are">
		                                         <a class="hover_icon hover_icon_link" href="#">
		                                            <img alt="icon.jpg" src="Public/Home/images/icon1-167x167.jpg">
		                                        </a>
		                                    </div>
		                                </div>
										<div class="post_content clearfix">
											<h4 class="post_title">
		                                        <a href="#">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
		                                    </h4>
											<div class="post_info">
												<span class="post_info_item post_info_tags">作者：
		                                            <a class="donation_category_link" href="#">张三</a>
		                                        </span>
		                                        <span class="post_info_item post_info_counters">2017-11-26</span>
												<span class="post_info_item post_info_counters">阅读
		                                            <a class="post_counters_item post_counters_views" title="阅读" href="#">
		                                                <span class="post_counters_number">155</span>
												</a>
												</span>
											</div>
											<div class="post_descr">
												<p>又一波虐童信息冲上各大媒体头条，《少年法学苑》本来想用“停更一天”来抗议那些无耻，因为你不管是如何传播美、善，当罪恶和肮脏迎头砸来，你都是如此无助、无奈。但是，回避与谩骂、攻击，同样属于软弱。压住怒火，还是坐下来思考一下如何推进问题的解决。</p>
												<a href="#" class="sc_services_item_readmore">查看更多
													<span class="icon-right-1"></span>
												</a>
											</div>
										</div>
									</article>
									<article class="post_item post_item_excerpt odd last donation column">
										<div class="sc_services_item_featured post_featured">
		                                    <div class="post_thumb" data-title="Who We Are">
		                                         <a class="hover_icon hover_icon_link" href="#">
		                                            <img alt="icon.jpg" src="Public/Home/images/icon2-167x167.jpg">
		                                        </a>
		                                    </div>
		                                </div>
										<div class="post_content clearfix">
											<h4 class="post_title">
		                                        <a href="#">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
		                                    </h4>
											<div class="post_info">
												<span class="post_info_item post_info_tags">作者：
		                                            <a class="donation_category_link" href="#">张三</a>
		                                        </span>
		                                        <span class="post_info_item post_info_counters">2017-11-26</span>
												<span class="post_info_item post_info_counters">阅读
		                                            <a class="post_counters_item post_counters_views" title="阅读" href="#">
		                                                <span class="post_counters_number">155</span>
												</a>
												</span>
											</div>
											<div class="post_descr">
												<p>又一波虐童信息冲上各大媒体头条，《少年法学苑》本来想用“停更一天”来抗议那些无耻，因为你不管是如何传播美、善，当罪恶和肮脏迎头砸来，你都是如此无助、无奈。但是，回避与谩骂、攻击，同样属于软弱。压住怒火，还是坐下来思考一下如何推进问题的解决。</p>
												<a href="#" class="sc_services_item_readmore">查看更多
													<span class="icon-right-1"></span>
												</a>
											</div>
										</div>
									</article>
									<article class="post_item post_item_excerpt odd last donation column">
										<div class="sc_services_item_featured post_featured">
		                                    <div class="post_thumb" data-title="Who We Are">
		                                         <a class="hover_icon hover_icon_link" href="#">
		                                            <img alt="icon.jpg" src="Public/Home/images/icon3-167x167.jpg">
		                                        </a>
		                                    </div>
		                                </div>
										<div class="post_content clearfix">
											<h4 class="post_title">
		                                        <a href="#">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
		                                    </h4>
											<div class="post_info">
												<span class="post_info_item post_info_tags">作者：
		                                            <a class="donation_category_link" href="#">张三</a>
		                                        </span>
		                                        <span class="post_info_item post_info_counters">2017-11-26</span>
												<span class="post_info_item post_info_counters">阅读
		                                            <a class="post_counters_item post_counters_views" title="阅读" href="#">
		                                                <span class="post_counters_number">155</span>
												</a>
												</span>
											</div>
											<div class="post_descr">
												<p>又一波虐童信息冲上各大媒体头条，《少年法学苑》本来想用“停更一天”来抗议那些无耻，因为你不管是如何传播美、善，当罪恶和肮脏迎头砸来，你都是如此无助、无奈。但是，回避与谩骂、攻击，同样属于软弱。压住怒火，还是坐下来思考一下如何推进问题的解决。</p>
												<a href="#" class="sc_services_item_readmore">查看更多
													<span class="icon-right-1"></span>
												</a>
											</div>
										</div>
									</article>
									<article class="post_item post_item_excerpt odd last donation column">
										<div class="sc_services_item_featured post_featured">
		                                    <div class="post_thumb" data-title="Who We Are">
		                                         <a class="hover_icon hover_icon_link" href="#">
		                                            <img alt="icon.jpg" src="Public/Home/images/icon4-167x167.jpg">
		                                        </a>
		                                    </div>
		                                </div>
										<div class="post_content clearfix">
											<h4 class="post_title">
		                                        <a href="#">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
		                                    </h4>
											<div class="post_info">
												<span class="post_info_item post_info_tags">作者：
		                                            <a class="donation_category_link" href="#">张三</a>
		                                        </span>
		                                        <span class="post_info_item post_info_counters">2017-11-26</span>
												<span class="post_info_item post_info_counters">阅读
		                                            <a class="post_counters_item post_counters_views" title="阅读" href="#">
		                                                <span class="post_counters_number">155</span>
												</a>
												</span>
											</div>
											<div class="post_descr">
												<p>又一波虐童信息冲上各大媒体头条，《少年法学苑》本来想用“停更一天”来抗议那些无耻，因为你不管是如何传播美、善，当罪恶和肮脏迎头砸来，你都是如此无助、无奈。但是，回避与谩骂、攻击，同样属于软弱。压住怒火，还是坐下来思考一下如何推进问题的解决。</p>
												<a href="#" class="sc_services_item_readmore">查看更多
													<span class="icon-right-1"></span>
												</a>
											</div>
										</div>
									</article>
	                        	</div>
	                        	<nav id="pagination" class="pagination_wrap pagination_pages">
		                            <span class="pager_current active ">1</span>
		                            <a href="#" class="">2</a>
		                            <a href="#" class="pager_next "></a>
		                            <a href="#" class="pager_last "></a>
		                        </nav>
							</div>
						<!-- /Content -->
						<!-- Sidebar -->
						<div class="sidebar widget_area scheme_original">
							<div class="sidebar_inner widget_area_inner">
								<!-- Widget: Categories -->
								<aside class="widget widget_categories">
									<h5 class="widget_title">文章分类</h5>
									<ul>
										<li>
											<a href="#">社会新闻</a> (7)
										</li>
										<li>
											<a href="#">科技新闻</a> (25)
										</li>
										<li>
											<a href="#">娱乐新闻</a> (10)
										</li>
										<li>
											<a href="#">公益新闻</a> (8)
										</li>
										<li>
											<a href="#">慈善新闻</a> (15)
										</li>
										<li>
											<a href="#">眼科知识</a> (15)
										</li>
										<li>
											<a href="#">医疗新闻</a> (3)
										</li>
									</ul>
								</aside>
								<!-- /Widget: Categories -->
								<!-- Widget: Recent Posts -->
								<aside class="widget widget_recent_posts">
									<h5 class="widget_title">推荐文章</h5>
					<!-- 陈1.21 开始 -->
									<?php if(is_array($art)): foreach($art as $key=>$vo): ?><article class="post_item with_thumb first">

										<div class="post_thumb">
											<img alt="" src="<?php echo ($vo["newsart_pic"]); ?>">
										</div>
										<div class="post_content">
											<h6 class="post_title">
                                            <!-- <a href="#">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a> -->
                                            <a href="#"><?php echo ($vo["newsart_title"]); ?></a>

											
                                        </h6>
											<div class="post_info">
												<span class="post_info_item">
                                                    <a href="#" class="post_info_date"><?php echo ($vo["newsart_time"]); ?> </a>
                                                </span>
											</div>
										</div>
									</article><?php endforeach; endif; ?>
					<!-- 陈1.21 end -->
								</aside>
								<!-- /Widget: Recent Posts -->
								<!-- Widget: Tag Cloud -->
								<aside class="widget widget_tag_cloud">
									<h5 class="widget_title">关键字</h5>
									<div class="tagcloud">
										<a href="#" title="科技">科技</a>
										<a href="#" title="人文">人文</a>
										<a href="#" title="公益慈善">公益慈善</a>
										<a href="#" title="红黄蓝北京幼儿园">红黄蓝北京幼儿园</a>
										<a href="#" title="虐童">虐童</a>
										<a href="#" title="公益项目">公益项目</a>
										<a href="#" title="慈善基金">慈善基金</a>
										<a href="#" title="娱乐">娱乐</a>
										<a href="#" title="公益人">公益人</a>
										<a href="#" title="贡献">贡献</a>
										<a href="#" title="儿童">儿童</a>
									</div>
								</aside>
								<!-- /Widget: Tag Cloud -->
								<!-- Widget: Calendar -->
								<aside class="widget widget_calendar">
									<table class="tpl-calendar">
										<thead>
											<tr>
												<th class="month_prev">
													<a href="#" title="View posts for December 2016"></a>
												</th>
												<th class="month_cur" colspan="5">January
													<span>2017</span>
												</th>
												<th class="month_next">
													<a href="#" title="View posts for February 2017"></a>
												</th>
											</tr>
											<tr>
												<th class="weekday" scope="col" title="Monday">Mon</th>
												<th class="weekday" scope="col" title="Tuesday">Tue</th>
												<th class="weekday" scope="col" title="Wednesday">Wed</th>
												<th class="weekday" scope="col" title="Thursday">Thu</th>
												<th class="weekday" scope="col" title="Friday">Fri</th>
												<th class="weekday" scope="col" title="Saturday">Sat</th>
												<th class="weekday" scope="col" title="Sunday">Sun</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="6" class="pad">
													<span class="day_wrap">&nbsp;</span>
												</td>
												<td class="day">
													<span class="day_wrap">1</span>
												</td>
											</tr>
											<tr>
												<td class="day">
													<span class="day_wrap">2</span>
												</td>
												<td class="day">
													<span class="day_wrap">3</span>
												</td>
												<td class="day">
													<span class="day_wrap">4</span>
												</td>
												<td class="day">
													<span class="day_wrap">5</span>
												</td>
												<td class="day">
													<span class="day_wrap">6</span>
												</td>
												<td class="today">
													<span class="day_wrap">7</span>
												</td>
												<td class="day">
													<span class="day_wrap">8</span>
												</td>
											</tr>
											<tr>
												<td class="day">
													<span class="day_wrap">9</span>
												</td>
												<td class="day">
													<span class="day_wrap">10</span>
												</td>
												<td class="day">
													<span class="day_wrap">11</span>
												</td>
												<td class="day">
													<span class="day_wrap">12</span>
												</td>
												<td class="day">
													<span class="day_wrap">13</span>
												</td>
												<td class="day">
													<span class="day_wrap">14</span>
												</td>
												<td class="day">
													<span class="day_wrap">15</span>
												</td>
											</tr>
											<tr>
												<td class="day">
													<span class="day_wrap">16</span>
												</td>
												<td class="day">
													<span class="day_wrap">17</span>
												</td>
												<td class="day">
													<span class="day_wrap">18</span>
												</td>
												<td class="day">
													<span class="day_wrap">19</span>
												</td>
												<td class="day">
													<span class="day_wrap">20</span>
												</td>
												<td class="day">
													<span class="day_wrap">21</span>
												</td>
												<td class="day">
													<span class="day_wrap">22</span>
												</td>
											</tr>
											<tr>
												<td class="day">
													<span class="day_wrap">23</span>
												</td>
												<td class="day">
													<span class="day_wrap">24</span>
												</td>
												<td class="day">
													<span class="day_wrap">25</span>
												</td>
												<td class="day">
													<span class="day_wrap">26</span>
												</td>
												<td class="day">
													<span class="day_wrap">27</span>
												</td>
												<td class="day">
													<span class="day_wrap">28</span>
												</td>
												<td class="day">
													<span class="day_wrap">29</span>
												</td>
											</tr>
											<tr>
												<td class="day">
													<span class="day_wrap">30</span>
												</td>
												<td class="day">
													<span class="day_wrap">31</span>
												</td>
												<td class="pad" colspan="5">
													<span class="day_wrap">&nbsp;</span>
												</td>
											</tr>
										</tbody>
									</table>
								</aside>
								!-- /Widget: Calendar -->
								<!-- Widget: Search -->
								<aside class="widget widget_search">
									<form method="get" class="search_form" action="#">
										<input type="text" class="search_field" placeholder="搜索" value="" name="s" title="Search for:" />
										<button type="submit" class="search_button icon-search"></button>
									</form>
								</aside>
								<!-- /Widget: Search -->
							</div>
						</div>
						<!-- /Sidebar -->
					</div>
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