<?php 
	$this->layout = 'article';

	if (is_null($article['Article']['publish_time'])) {
		$article['Article']['publish_time'] = $article['Article']['created'];
	}

	if (!is_null($article['Article']['tags'])) {
		$article['Article']['tags'] = explode(",", $article['Article']['tags']);
	}

	$this->set('title_for_layout', $article['Article']['title']);
?>

<div id="container" class="bg-white clearfix">
	<div class="container-main">
		<div class="article-detail">
			<div class="title">
				<h1><?= $article['Article']['title'] ?></h1>
				<div class="subtitle clearfix">
					<span class="src"><?= $article['Article']['source_website'] ?></span>
					<span class="time"><?= $article['Article']['publish_time'] ?></span>
				</div>
			</div>

			<div class="article-content">
				<?= $article['Article']['content'] ?>
			</div>
		</div>

		<div id="pagelet-detailbar" class="clearfix">
			<ul data-node="tagList" class="tag-list">
				<i class="lb">相关标签：</i>
				<?php if (is_array($article['Article']['tags'])) : ?>
				<?php foreach ($article['Article']['tags'] as $tag) : ?>
				<li><?php echo $html->link($tag, ['action' => 'tags', $tag], ['target' => '_blank']); ?></li>
				<?php endforeach; ?>
				<?php endif; ?>
			</ul>

			<?php echo $this->element('article_detail_tools', ['article' => $article])?>
		</div>

		<div id="pagelet-comment" data-pid="0"
			data-groupid="6264635413023293697" data-itemid="0">
			<div class="top clearfix">
				<h2>评论</h2>
				<span class="cc">93 条评论</span>
			</div>

			<div class="middle clearfix">
				<div class="profile">
					<img src="http://mat1.gtimg.com/www/mb/images/head_50.jpg" data-node="profile">
				</div>
				<div class="input">
					<textarea placeholer="写下您的评论"></textarea>
					<div class="bottom">
						<span class="sns-label">分享到：</span>
						<div class="sns-group" data-node="snsGroup">
							<a class="sns weibo" data-node="sina_weibo"></a>
							<!--a class="sns qqzone" data-node="qzone_sns"></a>
                    <a class="sns renren" data-node="renren_sns"></a-->
							<a class="sns ttweibo" data-node="qq_weibo"></a>
						</div>
						<a href="javascript:;" class="publish-btn" data-node="publish"> 发表
						</a>
					</div>
				</div>
			</div>

			<div class="comments-list" style="display:none" data-node="commentList">
				<ul>
					<li class="comment-item clearfix" data-comment-id="6165786180"
						data-comment-type="2">
						<div class="avatar">
							<a href="/user/5781243113/" target="_blank"> <img
								src="http://p2.pstatp.com/thumb/9831/1285621900">
							</a>
						</div>

						<div class="comment-content">
							<div class="name">
								<a href="/user/5781243113/" target="_blank"> 18171497021 </a>
							</div>
							<div class="content">
								<?
									// $article['Comment']['content'] 
								?>
							</div>
							<div class="comment_actions clearfix">
								<span class="time"> 03-22 16:40 </span> <span class="action"
									status=""> <a href="javascript:;" data-commentid="6165786180"
									data-groupid="6264635413023293697" class="comment_digg "> 12 </a>
									<a class="c-comment" href="#" data-node="listcomment"> <img
										src="//s0.pstatp.com/resource/toutiao_web/static/style/image/article_ic_comments_normal_e3b89df.png">
								</a> <a class="c-comment" href="javascript:;"
									data-userid="5781243113" data-node="listReportComment"> <img
										src="//s2.pstatp.com/resource/toutiao_web/static/style/image/article_ic_report_normal_1020899.png">
								</a>
								</span>
							</div>
						</div>
					</li>
				</ul>

				<div class="comment_paginator pager page_number page_page_number">
					<a data-page="1" class="page_number-next current">1</a> <a
						data-page="2" class="page_number-next">2</a> <a data-page="3"
						class="page_number-next">3</a> <a data-page="4"
						class="page_number-next">4</a> <a data-page="5"
						class="page_number-next">5</a> <a data-page="6"
						class="page_number-next">6</a> <a data-page="7"
						class="page_number-next">7</a> ... <a data-page="10"
						class="page_number-next ">10</a> <a data-page="2"
						class="page-number-next">下一页</a>
				</div>
			</div>
		</div>

		<div id="pagelet-navline" style="left: 1421px;">
			<div class="nav-line clearfix current" data-node="articleLabel">
				<span class="circle"></span> <span class="label">文章</span>
			</div>
			<div class="nav-line clearfix" data-node="commentLabel">
				<span class="circle"></span> <span class="label">评论</span>
			</div>
			<div class="line l1"></div>

		</div>

		<div id="more_article">
			<div class="related">
				<span class="more">相关阅读</span>
			</div>
			<ul>

				<li><a href="http://toutiao.com/i6264666924039275009/">
						武汉首条BRT公交示范线开铺沥青 全长16.2公里 </a></li>

				<li><a href="http://toutiao.com/i6264666923330437634/">
						新时代的“地下工作者”：有洁癖的汉子干上掏粪 </a></li>

			</ul>
		</div>

	</div>
</div>
