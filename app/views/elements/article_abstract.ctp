<?php 
	$image = $article['Article']['main_image'];
	if (is_null($article['Article']['publish_time'])) {
		$article['Article']['publish_time'] = $article['Article']['created'];
	}
?>

<li class="item clearfix" data-node="item">
	<div class="item-inner">
		<div class="lbox left">
			<?php echo $html->link($html->image($image, array('class' => 'feedimg', 'onload' => 'this.style.opacity=1;')), 
                array('action' => 'view', $article['Article']['id']),
				array(
					'escape' => false,
					'target' => '_blank'
			)); ?>
		</div>
		<div class="rbox">
			<!--hold-->
			<div class="rbox-inner">
				<div class="title-box">
				<?php echo $html->link($article['Article']['title'],
	                array('action' => 'view', $article['Article']['id']),
					array('class' => 'link title', 'target' => '_blank', 'data-node' => 'title')); ?>
				</div>
				<div class="abstract">
				<?php echo $html->link($article['Article']['abstract'],
	                array('action' => 'view', $article['Article']['id']),
					array('class' => 'link', 'target' => '_blank', 'data-node' => 'title')); ?>
				</div>

				<div class="footer clearfix">
					<div class="left lfooter">
						<span class="lbtn tag tag-hot">热</span> <a class="lbtn source"
							href="http://toutiao.com/m5954781019/" target="_blank"><?= $article['Article']['source_website']?>&nbsp;⋅</a>
						<span class="lbtn comment"><?=$article['Article']['comment_number']?>评论&nbsp;⋅</span>
						<span class="lbtn time"><?=$article['Article']['publish_time']?></span>
					</div>
					<div class="right rfooter">
						<a class="rbtn share" href="javascript:;" data-node="share"
							data-url="http://toutiao.com/group/6264783822245495042/?iid=10190130824&amp;app=news_article"
							data-desc="来自头条 http://www.toutiao.com"
							data-text="【美媒:爆炸或致超100人伤 美官员推测为恐袭】（分享来自 @今日头条）【环球网综合报道】据华尔街日报中文网3月22日微博消息,有知情人士称,布鲁塞尔机场有超过100人受伤。美国官员推测布鲁塞尔机场爆炸事件为恐怖袭击,是对去年巴黎暴恐袭击参与者Salah Abdeslam被逮捕的报复。报道称,目前布鲁塞尔机场暂时向航空公司关闭,等待进一步通知。布鲁..."
							data-pic="http://p3.pstatp.com/list/3b1000335e925b3163d"> <span
							class="share-list"> <i ga_event="click_feed_share"
								ga_label="tsina" data-type="tsina" class="icon icon-tsina"
								href="javascript:;" title="分享到新浪微博"></i> <i
								ga_event="click_feed_share" ga_label="tqq" data-type="tqq"
								class="icon icon-tqq" href="javascript:;" title="分享到腾讯微博"></i> <i
								ga_event="click_feed_share" ga_label="qzone" data-type="qzone"
								class="icon icon-qzone" href="javascript:;" title="分享到ＱＱ空间"></i>
						</span>
						</a> <span data-node="likeGroup" class=""> <a
							ga_event="click_feed_dislike" class="rbtn bury"
							href="javascript:;" title="踩" data-node="bury"
							data-groupid="6264783822245495042"></a> <a
							ga_event="click_feed_like" class="rbtn digg" href="javascript:;"
							title="顶" data-node="digg" data-groupid="6264783822245495042"></a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>