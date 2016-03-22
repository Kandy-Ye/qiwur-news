<div class="container-main">
	<div id="pagelet-nfeedlist">
		<div class="feedcomm" data-node="commItem">
			<span class="comm-close" data-node="commClose"></span> <a
				ga_event="click_banner" target="_blank" data-node="commLink"></a>
		</div>

		<!--  -->
		<p class="alert-msg" data-node="alertMsg">
			<img
				src="//s0.pstatp.com/resource/toutiao_web/static/style/image/loading_50c5e3e.gif">
			<span>推荐数据加载中...</span>
		</p>

		<div class="unread" data-node="unread" ga_event="click_feed_update">
			<span>您有未读新闻，点击查看</span>
		</div>

		<ul data-node="listBox">
			<?php foreach ($articles as $article) : ?>
			<?php echo $this->element('article_abstract', ['article' => $article])?>
			<?php endforeach; ?>
		</ul>
		<a href="javascript:;" class="loadmore" data-node="loadMore">正在为您加载更多...</a>
	</div>
</div>

<div class="container-right">
	<div id="pagelet-weather">
		<div class="head" data-node="info">
			<span class="location"> <img src="//s2.pstatp.com/resource/toutiao_web/static/style/image/newindex/location_ic_weather_7f38503.png" alt="">
				<div data-node="white-line-box" class="white-line-box hide"></div>
				<em class="city-name"></em>
				<div class="cityselect hide" data-node="cityselect"></div>
			</span> <span class="wind"></span> <span class="air"><p></p></span>
		</div>

		<div class="days_weather clearfix" data-node="temperature"></div>
	</div>

	<div id="pagelet-commbox">
		<a ga_event="click_banner" class="img-box" target="_blank"
			data-node="link"> <img data-node="img" onload="this.style.opacity=1">
		</a> <span class="comm-label">推广</span>
	</div>

	<div id="pagelet-hotnews" data-node="hotnews">
		<div class="head">实时要闻</div>
		<div data-node="news" class="news"></div>
	</div>

	<?php echo $this->element('stock_panel'); ?>

	<div id="pagelet-company"><?php echo $this->element('common_footer'); ?></div>
</div>

<div id="pagelet-nfeedback"></div>
