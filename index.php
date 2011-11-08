<?php
/**
 * Designed by <a href="http://boliquan.com/" title="BoLiQuan">BoLiQuan</a> . My blog is <a href="http://boliquan.com/" title="玻璃泉">玻璃泉</a>.<br />Theme Homepage is <a href="http://boliquan.com/ylife/" title="YLife">YLife</a>.
 * 
 * @package YLife for typecho 
 * @author BoLiQuan
 * @version 1.1.6
 * @link http://boliquan.com/
 */
 
 $this->need('header.php');
 ?>
 
 <div id="content_wrapper">
 
	<div id="content">

	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="entry_title"><a rel="bookmark" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
			<h4>
				<?php $this->date('Y年m月d日'); ?>
				<?php _e('评论: '); ?><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0', '1', '%d'); ?></a>
			</h4>
			<div class="post_content">
				<?php $this->excerpt(136,"[......]"); ?><p></p><p><a rel="nofollow" href="<?php $this->permalink() ?>"><?php _e('阅读全文&raquo;'); ?></a></p>
			</div>
			<h4>
				<?php _e('作者: '); ?><a href="<?php $this->options->siteUrl(); ?>"><?php $this->author(); ?></a>
				<?php _e('分类: '); ?><?php $this->category(','); ?>
				<?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?>
			</h4>
		</div><!--post-->
	<?php endwhile; ?>

    <?php $this->pageNav(); ?>

	
	</div><!--content-->
	<?php $this->need('sidebar.php'); ?>
	<div class="clearfix"></div>

</div><!-- end #content_wrapper-->
<?php $this->need('footer.php'); ?>