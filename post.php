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

			<div id="postmetadata">
				<?php _e('分类: '); ?><?php $this->category(','); ?>
				<?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?>
			</div>

			<div class="statement">
				<p><?php _e('本站遵循');?><a rel="external nofollow" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank"> <img src="<?php $this->options->themeUrl('img/cc.png'); ?>" alt="BY-NC-SA" title="<?php _e('署名-非商业性使用-相同方式共享3.0'); ?>" width="64" height="12" /> </a><?php _e('署名-非商业性使用-相同方式共享3.0协议,转载须注明作者及原始出处.');?><br />
				<?php _e('本文链接地址: ');?><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->permalink() ?></a>
				</p>
			</div>
			
			<div id="postnavi">
				<span class="prevpost"><?php $this->theNext(); ?></span><br />
				<span class="nextpost"><?php $this->thePrev(); ?></span>
				<div class="clearfix"></div>
			</div>		


		<?php $this->need('comments.php'); ?>

	</div><!--content-->
	<?php $this->need('sidebar.php'); ?>
	<div class="clearfix"></div>

</div><!-- end #content_wrapper-->
<?php $this->need('footer.php'); ?>