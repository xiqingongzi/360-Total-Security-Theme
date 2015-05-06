<?php
/**
 * 留言墙页面模板
 *
 * @package custom
 */
$this->need('header.php'); 
?>
<div class="body">
<div class="wrapper cls">
	<div class="main">
		<div class="view">
			<h1><?php $this->title() ?></h1>
			<div class="info"><span><?php $this->date('F j, Y'); ?></span><span><?php $this->author(); ?></span></div>
			<div class="content">
			<?php $this->content('Continue Reading...'); ?>	
                        <?php echo getFriendWall();?>
                         </div>
		</div>
		
		<div class="clear"></div>
			</div>	
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>