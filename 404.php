<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="body">
<div class="wrapper cls">
	<div class="main">
		<div class="main">
        <div class="not-found">
			<h2 class="page-title">很抱歉 您要访问的页面不存在</h2>
			<div class="go-back"><a href="<?php $this->options->siteUrl(); ?>">回博客</a></div>
		</div>
    </div>
		</div>
<?php $this->need('sidebar.php'); ?>
		<div class="clear"></div>
			</div>	

<?php $this->need('footer.php'); ?>
