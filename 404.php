<?php $this->need('header.php'); ?>

<div id="content_wrapper">
 
	<div id="content">

        <div class="post">
            <h2 class="entry_title"><?php _e('好像迷路了'); ?></h2>
            <div class="post_content">
				<p><?php _e('欢迎来到此错误页面，您可以借助导航菜单或搜索功能找到你需要的内容。'); ?></p>
			</div>
        </div>

	</div><!--content-->
	<?php $this->need('sidebar.php'); ?>
	<div class="clearfix"></div>

</div><!-- end #content_wrapper-->
<?php $this->need('footer.php'); ?>