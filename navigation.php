<div id="navigation">
<ul>

    <li<?php if($this->is('index')||$this->is('archive')||$this->is('post')): ?> class="current_page_item"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>" title="<?php _e('首页'); ?>"><?php _e('首页'); ?></a></li>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <li<?php if($this->is('page', $pages->slug)): ?> class="current_page_item"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
	
	<li class="searchform">
		<div>
			<form method="post" action="<?php $this->options->siteUrl(); ?>">
				<input class="inputarea" type="text" name="s" size="20" />
				<input class="searchmenu" type="submit" value="<?php _e('搜索'); ?>" />
			</form>
		</div>
	</li>

    <?php endwhile; ?>

</ul>
</div>