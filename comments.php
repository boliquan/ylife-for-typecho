		<?php $this->comments()->to($comments); ?>
		<?php if ($comments->have()): ?>

<div class="guestbook">

			<div class="commentlist">
				<h2 id="comments"><?php $this->commentsNum(_t('暂无评论'), _t('1条评论'), _t('%d 条评论')); ?></h2>
				<?php $comments->listComments(); ?> 
				<?php $comments->pageNav(); ?>
			</div>

</div><!--guestbook-->

		<?php endif; ?>


            <?php if($this->allow('comment')): ?>

<div class="comment_area">

            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>

			<h2 id="response"><?php _e('发表评论'); ?></h2>

		<div id="guestbook_form">

			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
				<p>Logged in as <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                <?php else: ?>
				<p>
					<input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" />
                    <label for="author"><?php _e('昵称'); ?><span class="required"> (必填)</span></label>
				</p>
				<p>
					<input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" />
                    <label for="mail"><?php _e('邮箱'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required"> (必填)</span><?php endif; ?></label>
				</p>
				<p>
					<input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" />
                    <label for="url"><?php _e('网站'); ?><?php if ($this->options->commentsRequireURL): ?><span class="required"> (必填)</span><?php endif; ?></label>
				</p>
                <?php endif; ?>
				<p><textarea rows="5" cols="50" name="text" class="textarea" id="textarea"><?php $this->remember('text'); ?></textarea></p>
				<p><input type="submit" class="submit" id="submit" value="<?php _e('提交评论'); ?>" /></p>
			</form>
			<script type="text/javascript" src="<?php $this->options->themeUrl('js/ylife-comment.js'); ?>"></script>

		</div><!--guestbook_form-->

            </div><!--end .respond-->

</div><!--comment_area-->

            <?php else: ?>
				<h2 id="commentclosed"><?php _e('评论已关闭'); ?></h2>
			<?php endif; ?>