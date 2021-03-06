<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>天河中央商务区管委会OA系统</title>

		<meta name="description" content="天河中央商务区管委会OA系统" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/examples/OA/Public/static/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/examples/OA/Public/static/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		
	<link rel="stylesheet" href="/examples/OA/Public/static/css/fullcalendar.css" />
	<link rel="stylesheet" href="/examples/OA/Public/static/css/bootstrap-datetimepicker.min.css" />
	


		<!-- text fonts -->
		<link rel="stylesheet" href="/examples/OA/Public/static/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/examples/OA/Public/static/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/examples/OA/Public/static/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/examples/OA/Public/static/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/examples/OA/Public/static/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/examples/OA/Public/static/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
		
		

		<!-- ace settings handler -->
		<script src="/examples/OA/Public/static/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/examples/OA/Public/static/js/html5shiv.js"></script>
		<script src="/examples/OA/Public/static/js/respond.min.js"></script>
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
												<img src="/examples/OA/Public/static/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
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
												<img src="/examples/OA/Public/static/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
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
												<img src="/examples/OA/Public/static/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
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
												<img src="/examples/OA/Public/static/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
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
												<img src="/examples/OA/Public/static/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
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
								<img class="nav-user-photo" src="/examples/OA/Public/static/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎您,</small>
									<?php echo session('fullname');?>
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
			
				<div id="sidebar" class="sidebar                  responsive">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-calendar"></i>
				<span class="menu-text"> 日程管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<!-- <li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>
				
						Layouts
						<b class="arrow fa fa-angle-down"></b>
					</a>
				
					<b class="arrow"></b>
				
					<ul class="submenu">
						<li class="">
							<a href="top-menu.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Top Menu
							</a>
				
							<b class="arrow"></b>
						</li>
				
						<li class="">
							<a href="mobile-menu-1.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Default Mobile Menu
							</a>
				
							<b class="arrow"></b>
						</li>
				
						<li class="">
							<a href="mobile-menu-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Mobile Menu 2
							</a>
				
							<b class="arrow"></b>
						</li>
				
						<li class="">
							<a href="mobile-menu-3.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Mobile Menu 3
							</a>
				
							<b class="arrow"></b>
						</li>
					</ul>
				</li> -->

				<li class="">
					<a href="<?php echo U('Schedule/leaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						领导日程
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo U('Schedule/personalCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						个人日程
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo U('Schedule/search');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						日程查询
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
			<a href="#">OA系统</a>
		</li>

		<li class="active">空白</li>
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
			<div class="space"></div>

			<!-- #section:plugins/data-time.calendar -->
			<div id="calendar"></div>
			
			<!-- /section:plugins/data-time.calendar -->
		</div>
		
		<div id="event-form" class="modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="blue bigger">请填写日程信息</h4>
			</div>

			<div class="modal-body">
				<div class="row">				
					<div class="col-xs-12 col-sm-12">
						<form class="form-horizontal" role="form"  method="post" action="<?php echo U('Schedule/add');?>" id="eventform">

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="article_no"> 日程内容: </label>
								<div class="col-sm-9">
									<input type="text" name="title" id="title" placeholder="日程内容" class="col-xs-10 col-sm-8" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="description"> 说明: </label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="description"></textarea>
								</div>
							</div>

							<div class="form-group">				
								<label class="col-sm-3 control-label no-padding-right" for="begin_time"> 开始时间: </label>
								<div class="col-sm-9">
									<input type="text" id="begin_time" name="begin_time" class="datetime-picker col-xs-10 col-sm-8" data-date-format="yyyy-mm-dd hh:ii">
								</div>
							</div>
							
							<div class="form-group end_time">
								<label class="col-sm-3 control-label no-padding-right" for="end_time"> 结束时间: </label>
								<div class="col-sm-9">
									<input type="text" id="end_time" name="end_time" class="datetime-picker col-xs-10 col-sm-8">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="description"></label>
								<div class="checkbox col-sm-9">
									<label>
										<input name="is_allday" id="is_allday" type="checkbox" class="ace" value="1" />
									<span class="lbl"> 全天日程</span>
									</label>
								</div>
							</div>

							<input type="hidden" name="user_id" value="<?php echo session('uid');?>"/>
							<!-- <input type="hidden" id="is_allday" name="is_allday" value="0"> -->

					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-sm btn-danger" data-dismiss="modal" action="<?php echo U('Schedule/del');?>">
					<i class="ace-icon fa fa-trash-o"></i>
					删除
				</button>

				<button class="btn btn-sm" data-dismiss="modal" >
					<i class="ace-icon fa fa-times"></i>
					取消
				</button>

				<button class="btn btn-sm btn-primary" type="submit">
					<i class="ace-icon fa fa-check"></i>
					保存
				</button>
			</div>
		</div>
	</div>
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
			window.jQuery || document.write("<script src='/examples/OA/Public/static/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/examples/OA/Public/static/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/examples/OA/Public/static/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/examples/OA/Public/static/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		
	<script src="/examples/OA/Public/static/js/date-time/moment.min.js"></script>
	<script src="/examples/OA/Public/static/js/jquery-ui.custom.min.js"></script>
	<script src="/examples/OA/Public/static/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/examples/OA/Public/static/js/date-time/bootstrap-datetimepicker.min.js"></script>
	<script src="/examples/OA/Public/static/js/date-time/locales/bootstrap-datetimepicker.zh-CN.js"></script>
	<script src="/examples/OA/Public/static/js/fullcalendar.min.js"></script>
	<script src="/examples/OA/Public/static/js/zh-cn.js"></script>
	<script src="/examples/OA/Public/static/js/jquery.form.min.js"></script>
	<script src="/examples/OA/Public/static/js/bootbox.min.js"></script>


		<!-- ace scripts -->
		<script src="/examples/OA/Public/static/js/ace-elements.min.js"></script>
		<script src="/examples/OA/Public/static/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	<script type="text/javascript">
		jQuery(function($){
			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
                timeFormat: 'H:mm',
                buttonText: {
                    prev: '<',
                    next: '>',
                }, 
				weekNumbers: true,
				events: "<?php echo U('Schedule/getEvents', array('id'=>session('uid')));?>",
				selectable: true,
				selectHelper: true,
				select: function(start, end, jsEvent, view) {
					var sTime, eTime;
					if(start.hasTime())
						sTime = start.format('YYYY-M-D H:mm');
					else
						sTime = start.format('YYYY-M-D');
					
					if(end.hasTime())
						eTime = end.format('YYYY-M-D H:mm');
					else
						eTime = end.format('YYYY-M-D');

					
					if(view.name=='month')
						$('#is_allday').get(0).checked = true;
					else{
						if(start.diff(end, 'days')!=0)
							$('#is_allday').get(0).checked = true;
						else
							$('#is_allday').get(0).checked = false;
					}
					
					$("#begin_time").val(sTime);
					$('#end_time').val(eTime);
					$('.modal').modal('show');
					
				},
				
				editable: true,
			});
			
			$('.datetime-picker').datetimepicker({
				format:'yyyy-mm-dd hh:ii',
				autoclose:true,
				todayBtn:true,
				language:'zh-CN',
			});

			$('.btn-danger').hide();

			$('#eventform').ajaxForm({
				beforeSubmit: showRequest,
				success: showResponse,
				clearForm: true,
				resetForm: true,
				dataType: 'json'
			});

			function showRequest(formData, jqForm, options){
				var form = jqForm[0];
				var title = form.title.value;
				if(title==''){
					bootbox.alert('请填写日程内容！');
					$('#title').focus();
					return false;
				}
				else
					return true;		
			}

			function showResponse(responseText, statusText, xhr, $form){
				if(statusText=="success"){     
				        if(responseText==1){ 
				            $('.modal').modal('hide');//关闭弹出层 
				            $('#calendar').fullCalendar('refetchEvents'); //重新获取所有事件数据 
				        }
				        else{ 
				            bootbox.alert(responseText); 
				        } 
				}
				else{ 
				    bootbox.alert(statusText); 
				} 
			}
		});
	</script>

		
		<link rel="stylesheet" href="/examples/OA/Public/static/css/ace.onpage-help.css" />
		

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="/examples/OA/Public/static/js/ace/ace.onpage-help.js"></script>
		
	</body>
</html>