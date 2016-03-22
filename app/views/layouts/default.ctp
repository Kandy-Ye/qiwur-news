<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $title_for_layout?></title>

<link rel="shortcut icon" href="<?php echo $html->webroot ?>favicon.ico" />
<?php echo $this->element('css', array('css' => array('default', 'topnews/index_abe12a5'))); ?>
</head>

<body id="nv_<?php echo $this->params["controller"]?>" class='sinorelo'>

<div class='control'>
	<?php 
		echo $form->hidden('webroot', array('default' => $this->webroot));
		echo $form->hidden('controller', array('default' => $this->params["controller"]));
		echo $form->hidden('action', array('default' => $this->params["action"]));
	?>
</div>

	<div id="wrapper">
		<?php echo $this->element('common_header'); ?>
	    <?php echo $this->Session->flash(); ?>

		<div id="container" class="clearfix">
			<div class="container-left">
				<div id="pagelet-channels" class="">
					<ul class="channel-box" data-node="channelBox">
						<li class="channel-item"><a ga_event="news_recommend"
							class="item selected" href="/" data-node="category"
							data-category="__all__"><span class="channel-tag">推荐</span></a></li>
						<li class="channel-item"><a ga_event="news_hot" class="item "
							href="/news_hot/" data-node="category" data-category="news_hot"><span
								class="channel-tag news_hot">热点</span></a></li>
						<li class="channel-item"><a ga_event="news_society" class="item "
							href="/news_society/" data-node="category"
							data-category="news_society"><span
								class="channel-tag news_society">社会</span></a></li>
						<li class="channel-item"><a ga_event="news_entertainment"
							class="item " href="/news_entertainment/" data-node="category"
							data-category="news_entertainment"><span
								class="channel-tag news_entertainment">娱乐</span></a></li>
						<li class="channel-item"><a ga_event="news_tech" class="item "
							href="/news_tech/" data-node="category" data-category="news_tech"><span
								class="channel-tag news_tech">科技</span></a></li>
						<li class="channel-item"><a ga_event="news_car" class="item "
							href="/news_car/" data-node="category" data-category="news_car"><span
								class="channel-tag news_car">汽车</span></a></li>
						<li class="channel-item"><a ga_event="news_sports" class="item "
							href="/news_sports/" data-node="category"
							data-category="news_sports"><span class="channel-tag news_sports">体育</span></a>
						</li>
						<li class="channel-item"><a ga_event="news_finance" class="item "
							href="/news_finance/" data-node="category"
							data-category="news_finance"><span class="channel-tag news_finance">财经</span></a></li>
					</ul>
					<div class="moreBox" data-node="moreBox">
						<a ga_event="click_show_channel" class="moreBtn"
							href="javascript:;"><span class="channel-tag more">更多</span></a>
						<ul class="more-channels" data-node="moreChannels">
							<li class="channel-item item_news_military"><a
								ga_event="news_military" class="item " href="/news_military/"
								data-node="category" data-category="news_military"><span
									class="channel-tag news_military">军事</span></a></li>
							<li class="channel-item item_news_world"><a ga_event="news_world"
								class="item " href="/news_world/" data-node="category"
								data-category="news_world"><span class="channel-tag news_world">国际</span></a>
							</li>
							<li class="channel-item item_news_fashion"><a
								ga_event="news_fashion" class="item " href="/news_fashion/"
								data-node="category" data-category="news_fashion"><span
									class="channel-tag news_fashion">时尚</span></a></li>
							<li class="channel-item item_news_travel"><a
								ga_event="news_travel" class="item " href="/news_travel/"
								data-node="category" data-category="news_travel"><span
									class="channel-tag news_travel">旅游</span></a></li>
							<li class="channel-item item_news_discovery"><a
								ga_event="news_discovery" class="item " href="/news_discovery/"
								data-node="category" data-category="news_discovery"><span
									class="channel-tag news_discovery">探索</span></a></li>
							<li class="channel-item item_news_baby"><a ga_event="news_baby"
								class="item " href="/news_baby/" data-node="category"
								data-category="news_baby"><span class="channel-tag news_baby">育儿</span></a>
							</li>
							<li class="channel-item item_news_regimen"><a
								ga_event="news_regimen" class="item " href="/news_regimen/"
								data-node="category" data-category="news_regimen"><span
									class="channel-tag news_regimen">养生</span></a></li>
							<li class="channel-item item_news_story"><a ga_event="news_story"
								class="item " href="/news_story/" data-node="category"
								data-category="news_story"><span class="channel-tag news_story">故事</span></a>
							</li>
							<li class="channel-item item_news_essay"><a ga_event="news_essay"
								class="item " href="/news_essay/" data-node="category"
								data-category="news_essay"><span class="channel-tag news_essay">美文</span></a>
							</li>
							<li class="channel-item item_news_game"><a ga_event="news_game"
								class="item " href="/news_game/" data-node="category"
								data-category="news_game"><span class="channel-tag news_game">游戏</span></a>
							</li>
							<li class="channel-item item_news_history"><a
								ga_event="news_history" class="item " href="/news_history/"
								data-node="category" data-category="news_history"><span
									class="channel-tag news_history">历史</span></a></li>
							<li class="channel-item item_news_food"><a ga_event="news_food"
								class="item " href="/news_food/" data-node="category"
								data-category="news_food"><span class="channel-tag news_food">美食</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		    <?php echo $content_for_layout; ?>

		</div>
	</div>

<?php 
	echo $this->element('sql_dump');
	if(isset($js)) echo $this->element('js', array('scripts_for_layout' => $scripts_for_layout));
?>
</body>
</html>
