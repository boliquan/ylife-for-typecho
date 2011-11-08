<?php $this->need('header.php'); ?>

<div id="content_wrapper">
 
	<div id="content">

        <div class="post">
			<h2 class="entry_title"><?php $this->title() ?></h2>
			<h4>
				<?php $this->date('Y年m月d日'); ?>
				<?php _e('作者: '); ?><a href="<?php $this->options->siteUrl(); ?>"><?php $this->author(); ?></a>&nbsp;&nbsp;
				<a href="#response"><?php _e('发表评论&raquo;'); ?></a>
			</h4>
			<div class="post_content">
				<?php $this->content(); ?>
			</div>
		</div><!--post-->


		<?php $this->need('comments.php'); ?>


	</div><!--content-->
	<?php $this->need('sidebar.php'); ?>
	<div class="clearfix"></div>

</div><!-- end #content_wrapper-->
<?php $this->need('footer.php'); ?>