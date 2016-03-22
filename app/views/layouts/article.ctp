<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $title_for_layout?></title>

<link rel="shortcut icon" href="<?php echo $html->webroot ?>favicon.ico" />
<?php echo $this->element('css', array('css' => array('topnews/base_627e6bf',
		'topnews/detail_46f41ec', 'topnews/core_a8db835', 'topnews/detail_a789cc0'))); ?>
</head>

<body id="nv_<?php echo $this->params["controller"]?>" class='sinorelo'>

<div class='control'>
	<?php 
		echo $form->hidden('webroot', array('default' => $this->webroot));
		echo $form->hidden('controller', array('default' => $this->params["controller"]));
		echo $form->hidden('action', array('default' => $this->params["action"]));
	?>
</div>

    <?php echo $this->Session->flash(); ?>

	<div id="wrapper">
		<div id="pagelet-nav" data-test="toutiao.com">
			<div class="nav-inner clearfix">
				<div class="nav-logo">
					<a href="/" class="logo-box" ga_event="nav_icon"> <img src="/img/topnews/1483740759.jpg" class="logo"></a>
				</div>
				<div class="nav-title">
					<ul class="clearfix">
						<li><a data-node="home" ga_event="nav_index" class="btn selected"
							href="/"> <span>首页</span>
						</a></li>
						<li><a data-node="dynamic" ga_event="nav_dynamic" class="btn"
							href="/updates/"> <span>动态</span>
						</a></li>
					</ul>
				</div>
				<div class="nav-subtitle">
					<ul class="nav-list clearfix">
						<li class="username-box nav-item" data-node="username">
							<a ga_event="nav_login" class="btn user-head" href="javascript:;" data-node="login"> <span>登录</span></a>
						<i class="line"></i></li>
						<li class="nav-item"><a ga_event="nav_pgc" target="_blank"
							class="btn" href="http://mp.toutiao.com/"> <span>头条号</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	    <?php echo $content_for_layout; ?>

		</div>
		</div>
	</div>

<?php 
	echo $this->element('sql_dump');
	if(isset($js)) echo $this->element('js', array('scripts_for_layout' => $scripts_for_layout));
?>
</body>
</html>
