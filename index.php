<?php
/**
 *  精仿360 Total Security Blog主题
 * 
 * @package 360 Total Security Theme
 * @author Bestony
 * @version 1.0
 * @link http://www.ixiqin.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="body">
<div class="wrapper cls">
<div class="main">
<div class="list">
<ul>
<?php while($this->next()): ?>
<li>
						<h1 class="title"><a href="<?php $this->permalink() ?>	"><?php $this->title() ?>	</a></h1>
						<div class="info"><span><?php $this->date('F j, Y'); ?>	</span><span><?php $this->author(); ?>	</span></div>
												<div class="thumb"><a href="<?php $this->permalink() ?>	">
						<img width="260" height="180" src="<?php $this->attachments(1)->attachment->url(); ?>" class="attachment-post-thumbnail wp-post-image" alt="blog_image"></a></div>
						<div class="intro"><p> <?php $this->excerpt(10, '...'); ?>
</p></div>
					</li>
<?php endwhile;?>
                					
</ul>
</div>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
