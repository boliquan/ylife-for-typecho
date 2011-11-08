<?php $this->need('header.php'); ?>

<div id="content_wrapper">
 
	<div id="content">

    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="entry_title"><a rel="bookmark" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
			<h4>
				<?php $this->date('Y年m月d日'); ?>
				<?php _e('评论: '); ?><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0', '1', '%d'); ?></a>
			</h4>
			<div class="post_content">
				<?php $this->excerpt(90,"[......]"); ?><p></p><p><a rel="nofollow" href="<?php $this->permalink() ?>"><?php _e('阅读全文&raquo;'); ?></a></p>
			</div>
			<h4>
				<?php _e('作者: '); ?><a href="<?php $this->options->siteUrl(); ?>"><?php $this->author(); ?></a>
				<?php _e('分类: '); ?><?php $this->category(','); ?>
				<?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?>
			</h4>
		</div><!--post-->
	<?php endwhile; ?>
    <?php else: ?>
        <div class="post">
            <h2 class="entry_title"><?php _e('好像没有哦'); ?></h2>
        </div>
    <?php endif; ?>
    
            <?php $this->pageNav(); ?>
       
	</div><!--content-->
	<?php $this->need('sidebar.php'); ?>
	<div class="clearfix"></div>

</div><!-- end #content_wrapper-->
<?php $this->need('footer.php'); ?>