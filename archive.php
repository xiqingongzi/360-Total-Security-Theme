<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="body">
<div class="wrapper cls">
	<div class="main">
		<div class="view">
			<?php $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->parse('<span>{year}-{month}-{day} : <a href="{permalink}">{title}</a></span>'); ?>
		</div>
		<div class="share">
			<span>分享: </span>
			<ul>
								<li><a class="icon facebook" data-ga="share|single|facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://blog.360totalsecurity.com/zh-cn/%e5%a5%87%e8%99%8e360%e5%af%b9%e8%af%84%e6%b5%8b%e6%9c%ba%e6%9e%84%e6%8c%87%e6%8e%a7%e4%bd%9c%e5%bc%8a%e7%9a%84%e5%a3%b0%e6%98%8e/" rel="nofollow"></a></li>
				<li><a class="icon twitter" data-ga="share|single|twitter" target="_blank" href="https://twitter.com/intent/tweet?text=http://blog.360totalsecurity.com/zh-cn/%e5%a5%87%e8%99%8e360%e5%af%b9%e8%af%84%e6%b5%8b%e6%9c%ba%e6%9e%84%e6%8c%87%e6%8e%a7%e4%bd%9c%e5%bc%8a%e7%9a%84%e5%a3%b0%e6%98%8e/&source=webclient" rel="nofollow"></a></li>
				<li><a class="icon google" data-ga="share|single|google" target="_blank" href="https://plus.google.com/share?url=http://blog.360totalsecurity.com/zh-cn/%e5%a5%87%e8%99%8e360%e5%af%b9%e8%af%84%e6%b5%8b%e6%9c%ba%e6%9e%84%e6%8c%87%e6%8e%a7%e4%bd%9c%e5%bc%8a%e7%9a%84%e5%a3%b0%e6%98%8e/&source=webclient" rel="nofollow"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
			</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
