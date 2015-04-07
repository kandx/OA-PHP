<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>天河中央商务区管委会OA系统</title>

		<meta name="description" content="天河中央商务区管委会OA系统" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/develop/OA/Public/static/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/develop/OA/Public/static/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		
	<link rel="stylesheet" href="/develop/OA/Public/static/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="/develop/OA/Public/static/css/chosen.css" />


		<!-- text fonts -->
		<link rel="stylesheet" href="/develop/OA/Public/static/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/develop/OA/Public/static/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/develop/OA/Public/static/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/develop/OA/Public/static/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/develop/OA/Public/static/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/develop/OA/Public/static/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
		
		

		<!-- ace settings handler -->
		<script src="/develop/OA/Public/static/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/develop/OA/Public/static/js/html5shiv.js"></script>
		<script src="/develop/OA/Public/static/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							天河中央商务区管委会信息化管理系统
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary fa fa-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="/develop/OA/Public/static/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/develop/OA/Public/static/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/develop/OA/Public/static/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/develop/OA/Public/static/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/develop/OA/Public/static/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/develop/OA/Public/static/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎您,</small>
									<?php echo getCurrentUserFullName();?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Index/logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			
				<div id="sidebar" class="sidebar responsive">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		<li class="active open" id="calendar_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-calendar"></i>
				<span class="menu-text"> 日程管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<?php if(authCheck('CAN_VIEW_LEADER_CALENDAR', getCurrentUserId())): ?><li class="" id="leader_calendar">
					<a href="<?php echo U('Schedule/leaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						领导日程
					</a>

					<b class="arrow"></b>
				</li><?php endif; ?>

				<li class="" id="personal_calendar">
					<a href="<?php echo U('Schedule/personalCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						个人日程
					</a>

					<b class="arrow"></b>
				</li>
				
				<?php if(authCheck('CAN_ADD_DEPART_LEADER_CALENDAR,CAN_ADD_ALL_LEADER_CALENDAR', getCurrentUserId())): ?><li class="" id="add_leader_calendar">
					<a href="<?php echo U('Schedule/addLeaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						添加领导日程
					</a>

					<b class="arrow"></b>
				</li><?php endif; ?>

			</ul>
		</li>

		<!-- 发文管理 -->
		<li class="" id="article_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil"></i>
				<span class="menu-text"> 发文管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="" id="leader_calendar">
					<a href="<?php echo U('Schedule/leaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						申请文号
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="personal_calendar">
					<a href="<?php echo U('Schedule/personalCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						文号审批
					</a>

					<b class="arrow"></b>
				</li>
				
				<li class="" id="add_leader_calendar">
					<a href="<?php echo U('Schedule/addLeaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						发文查询
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		
		<!-- 接待管理 -->
		<li class="" id="reception_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text"> 接待管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="reception_add">
					<a href="<?php echo U('Reception/addReception');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						接待登记
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="reception_meeting_add">
					<a href="<?php echo U('Reception/addMeeting');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						会议登记
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="reception_bookroom">
					<a href="<?php echo U('Reception/bookRoom');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						预定房间
					</a>

					<b class="arrow"></b>
				</li>


				<li class="" id="reception_statics">
					<a href="<?php echo U('Reception/receptionStatics');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						数据统计
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>
		
		<!-- 共享空间 -->
		<li class="" id="share_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-cloud"></i>
				<span class="menu-text"> 共享空间 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="share_add">
					<a href="<?php echo U('Share/uploadDocs');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						上传资料
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="share_cloud">
					<a href="<?php echo U('Share/cloud');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						资料手册
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="share_company">
					<a href="<?php echo U('Share/company');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						企业名录
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="share_statics">
					<a href="<?php echo U('Share/shareStatics');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						数据统计
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>
		
		<!-- 请休假管理 -->
		<li class="" id="vacation_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-coffee"></i>
				<span class="menu-text"> 请休假管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="vacation_add">
					<a href="<?php echo U('Vacation/addVacation');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						请休假申请
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="vacation_cloud">
					<a href="<?php echo U('Vacation/search');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						请休假查询
					</a>

					<b class="arrow"></b>
				</li>


				<li class="" id="vacation_statics">
					<a href="<?php echo U('Vacation/statics');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						数据统计
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>

	</ul><!-- /.nav-list -->

	<!-- #section:basics/sidebar.layout.minimize -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<!-- /section:basics/sidebar.layout.minimize -->
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
<!-- /section:basics/sidebar -->
			

			<div class="main-content">
				
	<!-- #section:basics/content.breadcrumbs -->
<div class="breadcrumbs" id="breadcrumbs">
	<script type="text/javascript">
		try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
	</script>

	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="<?php echo U('Index/main');?>">OA系统</a>
		</li>
		
		<?php if(会议登记 != ''): ?><li>
			<a href=<?php echo U('Reception/addMeeting');?>>会议登记</a>
		</li><?php endif; ?>

		<li class="active">填写会议信息</li>
	</ul><!-- /.breadcrumb -->
</div>
<!-- /section:basics/content.breadcrumbs -->


				<div class="page-content">
					
						<!-- #section:settings.box -->
<div class="ace-settings-container" id="ace-settings-container">
	<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
		<i class="ace-icon fa fa-cog bigger-150"></i>
	</div>

	<div class="ace-settings-box clearfix" id="ace-settings-box">
		<div class="pull-left width-50">
			<!-- #section:settings.skins -->
			<div class="ace-settings-item">
				<div class="pull-left">
					<select id="skin-colorpicker" class="hide">
						<option data-skin="no-skin" value="#438EB9">#438EB9</option>
						<option data-skin="skin-1" value="#222A2D">#222A2D</option>
						<option data-skin="skin-2" value="#C6487E">#C6487E</option>
						<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
					</select>
				</div>
				<span>&nbsp; 选择皮肤</span>
			</div>

			<!-- /section:settings.skins -->

			<!-- #section:settings.navbar -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
				<label class="lbl" for="ace-settings-navbar"> 固定导航栏</label>
			</div>

			<!-- /section:settings.navbar -->

			<!-- #section:settings.sidebar -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
				<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
			</div>

			<!-- /section:settings.sidebar -->

			<!-- #section:settings.breadcrumbs -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
				<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
			</div>

			<!-- /section:settings.breadcrumbs -->

			<!-- #section:settings.rtl -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
				<label class="lbl" for="ace-settings-rtl"> 从右至左浏览</label>
			</div>

			<!-- /section:settings.rtl -->

			<!-- #section:settings.container -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
				<label class="lbl" for="ace-settings-add-container">
					窄屏
					<b>.模式</b>
				</label>
			</div>

			<!-- /section:settings.container -->
		</div><!-- /.pull-left -->

		<div class="pull-left width-50">
			<!-- #section:basics/sidebar.options -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
				<label class="lbl" for="ace-settings-hover"> 子菜单悬停</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
				<label class="lbl" for="ace-settings-compact"> 精简侧边栏</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
				<label class="lbl" for="ace-settings-highlight"> 当前项目ALT</label>
			</div>

			<!-- /section:basics/sidebar.options -->
		</div><!-- /.pull-left -->
	</div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->

<!-- /section:settings.box -->
					

					
					

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							
	
	<div class="row">
		<div class="col-sm-12">
			<form class="form-horizontal" role="form"  method="post" action="<?php echo U('Reception/addMeeting');?>" id="meetingform">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="type"> 会议性质:<strong class="text-danger">*</strong></label>

					<div class="col-sm-9">
						<select class="col-xs-10 col-sm-5" id="meeting_type" name="type">
							<option value=""></option>
							<option value="F">外出开会</option>
							<option value="L">内部会议</option>
						</select>
						<em class="text-danger"></em>
					</div>
				</div>

				<div id="main_content">

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="content"> 会议名称:<strong class="text-danger">*</strong></label>

						<div class="col-sm-9">
							<input type="text" name="content" placeholder="" class="col-xs-10 col-sm-5" />
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group">				
						<label class="col-sm-3 control-label no-padding-right" for="begin_time"> 会议时间:<strong class="text-danger">*</strong> </label>
						<div class="col-sm-8">
							<input type="text" name="begin_time" class="datetime-picker col-xs-10 col-sm-5" data-date-format="yyyy-mm-dd hh:ii" value="<?php echo ($start); ?>">
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group" id="end_time">				
						<label class="col-sm-3 control-label no-padding-right" for="end_time"> 结束时间:<strong class="text-danger">*</strong> </label>
						<div class="col-sm-8">
							<input type="text" name="end_time" class="datetime-picker col-xs-10 col-sm-5" data-date-format="yyyy-mm-dd hh:ii" value="<?php echo ($end); ?>">
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group" id="local_place">
						<label class="col-sm-3 control-label no-padding-right" for="local_place"> 会议地点:<strong class="text-danger">*</strong></label>

						<div class="col-sm-9">
							<select class="col-xs-10 col-sm-5" id="local_place" name="local_place">
								<option value=""></option>
								<?php if(is_array($rooms)): foreach($rooms as $key=>$room): ?><option value="<?php echo ($room["name"]); ?>"><?php echo ($room["name"]); ?></option><?php endforeach; endif; ?>
							</select>
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group" id="foreign_place">
						<label class="col-sm-3 control-label no-padding-right" for="foreign_place"> 会议地点:<strong class="text-danger">*</strong></label>

						<div class="col-sm-9">
							<input type="text" name="foreign_place" placeholder="" class="col-xs-10 col-sm-5" />
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="host"> 主持人:</label>

						<div class="col-sm-9">
							<input type="text" name="host" placeholder="" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="departments"> 参加处室:<strong class="text-danger">*</strong></label>

						<div class="col-sm-9">
							<?php if(is_array($departments)): foreach($departments as $key=>$department): ?><label>
									<input name="departments[]" id="departments" type="checkbox" class="ace group" value="<?php echo ($department["id"]); ?>"/>
									<span class="lbl"> <?php echo ($department["short_name"]); ?></span>
								</label><?php endforeach; endif; ?>
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group" id="person_div">
						<label class="col-sm-3 control-label no-padding-right" for="participants"> 参加人员:<strong class="text-danger">*</strong></label>

						<div class="col-sm-9" id="participants_div">
							<select multiple='' class='width-40 chosen-select tag-input-style' id='participants' name='participants[]' data-placeholder='请选择参会人员...'>
								<option value=''>&nbsp;</option>
							</select>
							<em class="text-danger"></em>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="participants"> &nbsp;</label>

						<div class="col-sm-9">
							<label>
								<input name="create_schedule" id="create_schedule" type="checkbox" class="ace" value="1" />
								<span class="lbl"> 生成领导日程</span>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="clearfix form-actions">
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="submit">
									<i class="icon-ok bigger-110"></i>
									保存
								</button>

								&nbsp; &nbsp; &nbsp;
								<a class="btn" type="button" href="<?php echo U('Reception/addReception');?>">
									<i class="icon-undo bigger-110"></i>
									返回
								</a>
							</div>
						</div>
					</div>

				</div> <!-- main_content -->

			</form>
		</div>	
	</div>
	


							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			
			
			

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/develop/OA/Public/static/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/develop/OA/Public/static/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/develop/OA/Public/static/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/develop/OA/Public/static/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		
	<script src="/develop/OA/Public/static/js/jquery-ui.custom.min.js"></script>
	<script src="/develop/OA/Public/static/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/develop/OA/Public/static/js/chosen.jquery.min.js"></script>
	<script src="/develop/OA/Public/static/js/date-time/bootstrap-datetimepicker.min.js"></script>
	<script src="/develop/OA/Public/static/js/date-time/locales/bootstrap-datetimepicker.zh-CN.js"></script>
	<script src="/develop/OA/Public/static/js/jquery.form.min.js"></script>
	<script src="/develop/OA/Public/static/js/jquery.validate.min.js"></script>
	<script src="/develop/OA/Public/static/js/messages_zh.min.js"></script>
	<script src="/develop/OA/Public/static/js/bootbox.min.js"></script>
	<script src="/develop/OA/Public/static/js/date-time/moment.min.js"></script>


		<!-- ace scripts -->
		<script src="/develop/OA/Public/static/js/ace-elements.min.js"></script>
		<script src="/develop/OA/Public/static/js/ace.min.js"></script>
		<script src="/develop/OA/Public/static/js/myJs/sidebar.js"></script>

		<!-- inline scripts related to this page -->
		
	<script type="text/javascript">
		jQuery(function($){
			
			//初始化datetime控件
			$('.datetime-picker').datetimepicker({
				format:'yyyy-m-d h:ii',
				autoclose:true,
				todayBtn:true,
				language:'zh-CN',
			});
			//初始化chosen控件
			$(".chosen-select").chosen();
			// $(window).on('resize.chosen', function() {
			// 	var w = $('.chosen-select').parent().width();
			// 	$('.chosen-select').next().css({'width':w});
			// }).trigger('resize.chosen');
			//设置指示标位置
			setSidebarActive('reception_root', 'reception_meeting_add');

			// 初始化界面
			$('#main_content').hide();
			//$('#person_div').hide();

			// 选择会议性质
			$('#meeting_type').on('change', function(){
				if(this.value=='F'){
					$('#end_time').hide();
					$('#local_place').hide();
					$('#foreign_place').show();
					$('#main_content').show();
				}
				else if(this.value=='L'){
					$('#end_time').show();
					$('#local_place').show();
					$('#foreign_place').hide();
					$('#main_content').show();
				}
				else
					$('#main_content').hide();
			});

			// 选择参会人员
			
			$("input[name='departments[]']").on('click', function(){
				var ids = [];
				$('#departments:checked').each(function(){
					ids.push($(this).val());
				});
				
				createParticipants(ids);
			});

			// 领导日程生成
			$('#create_schedule').on('click', function(){
				if(this.checked){
					var $participants = $('#participants option:selected');
					if(!$participants.length){
						bootbox.alert("请先选择参会人员！");
						this.checked = false;
					}
				}
			});

			//表单验证设置
			$('#meetingform').validate({
				rules:{
					type: "required",
					content: "required",
					begin_time: "required",
					end_time:{
						required: function(){
							return $('#meeting_type').val()=='L';
						}
					},
					local_place:{
						required: function(){
							return $('#meeting_type').val()=='L';
						}
					},
					foreign_place:{
						required: function(){
							return $('#meeting_type').val()=='F';
						}
					},
					
				},//rules end
				errorPlacement: function(error, element){
					var next = element.next();
					
					if(element.attr('name')=='departments[]'){
						next = element.parent().next('em');
					}
					error.appendTo(next);
				}
			});

			//处理表单的提交
			$('#meetingform').ajaxForm({
				beforeSubmit: showRequest,
				success: showResponse,
				clearForm: false,
				dataType: 'json'
			});



		});


		// 检查房间时间是否有冲突
		function checkTimeConflict(roomId, startTime, endTime){
			$.get("<?php echo U('Reception/checkTimeConflict');?>", {id:roomId, start:startTime, end:endTime}, function(data, textStatus){
				if(data!=-1){
					var divId;
					if(1==roomId)
						divId = "conflict_hall";
					else
						divId = "conflict_meeting";
					var liTag = "<li class='text-danger'>";
					var html = "<div class='col-sm-12' id='"+divId+"'><label class='col-sm-12 text-danger'>注意，以下时间段可能存在冲突：</label><ul class='col-sm-12'>";											
					$.each(data, function(n, item){
						var start = getTime(item['start']);
						var end = getTime(item['end']);
						var tempLi = liTag+start+"-"+end+"&nbsp;&nbsp;&nbsp;"+item['content']+"</li>";
						html += tempLi;
					});
					html += "</ul></div>";
					if(roomId==1)
						$('#bookHall').append($(html));
					else
						$('#bookRoom').append($(html));
				}
			}, 'json');
		}

		// 表单验证
		function showRequest(formData, jqForm, options){
			//radio无法验证，单独处理
			if($('#meetingform').valid()){
				var departments = $("input[name='departments[]']").fieldValue();
				if(!departments.length){
					bootbox.alert('请选择参会处室');
					return false;
				}

				var participants = $("select.chosen-select").fieldValue();
				if(!participants.length){
					bootbox.alert('请选择参会人员！');
					return false;
				}
			}
		}

		function showResponse(responseText, statusText, xhr, $form){
			if(responseText==1){
				alert('保存成功！');
				window.location.href = "<?php echo U('Reception/addMeeting');?>";
			}
			else{
				bootbox.alert(responseText);
			}
		} 

		function createParticipants(Ids){
			//注意：Ids是个数组
			//$('#person_div').hide();
			//$('#participants').empty();
			
			$('select#participants').empty();
			// 注意：对于boolean型变量，统一用0:表示false, 1表示true
			$.get("<?php echo U('Reception/getReceptionist');?>", {id:Ids, exceptLeader:0}, function(data){
				var html = "<option value=''>&nbsp;</option>";
				var node = "<option class='col-xs-10 col-sm-5' value='";
				$.each(data, function(n, person){
					var tmpOption = node+person.id+"'>"+person.first_name+person.last_name+"</option>";
					html += tmpOption;
				});	
				
				$('select#participants').append($(html));
				//注意，必须要重新初始化，不然chosen无法显示
				$("select#participants").trigger("chosen:updated");
				
			}, 'json');
		}

		function getTime(timeStr){
			return moment(timeStr).format('h:mm');
			//return timeStr;
		}

		function isTimeConflict(start, end, wantStart, wantEnd){
			return moment(wantStart).isBefore(moment(end))&&moment(start).isBefore(moment(wantEnd));
		}
	</script>

		
		<link rel="stylesheet" href="/develop/OA/Public/static/css/ace.onpage-help.css" />
		

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="/develop/OA/Public/static/js/ace/ace.onpage-help.js"></script>
		
	</body>
</html>