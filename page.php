<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="body">
<div class="wrapper cls">
	<div class="main">
		<div class="view">
			<h1><?php $this->title() ?></h1>
			<div class="info"><span><?php $this->date('F j, Y'); ?></span><span><?php $this->author(); ?></span></div>
			<div class="content">
				<?php $this->content('Continue Reading...'); ?>				</div>
		</div>
		<div class="share">
			<span>分享: </span>
			<ul>
								<li><a class="icon facebook" data-ga="share|single|facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>	" rel="nofollow"></a></li>
				<li><a class="icon twitter" data-ga="share|single|twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>	&source=webclient" rel="nofollow"></a></li>
				<li><a class="icon google" data-ga="share|single|google" target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>	&source=webclient" rel="nofollow"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
			</div>	
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
