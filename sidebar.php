<div class="side">
		<div class="sns">
	<a class="icon facebook" data-ga="sns|sidebar|facebook" target="_blank" href="<?php $this->options->FaceBookLink() ?>" rel="nofollow"></a>
	<a class="icon twitter" data-ga="sns|sidebar|twitter" target="_blank" href="<?php $this->options->TwitterLink() ?>" rel="nofollow"></a>
	<a class="icon google" data-ga="sns|sidebar|google" target="_blank" href="<?php $this->options->GooglePlusLink() ?>" rel="nofollow"></a>
	<a class="icon vk" data-ga="sns|sidebar|vk" target="_blank" href="<?php $this->options->VKLink() ?>" rel="nofollow"></a>
	<div class="clear"></div>
</div>
<div class="widget-download">
	<?php $this->options->SidebarImageLink() ?>
</div>
<div class="pop">
    <div class="title">最新文章</div>
    <ul>
<?php $this->widget('Widget_Contents_Post_Recent')->to($post); ?>
<?php while($post->next()): ?> 
    <li><a href="<?php $post->permalink(); ?>" title="<?php $post->title(); ?>"><?php $post->title(); ?></a></li>
    <?php endwhile; ?>
</ul>
            </ul>
</div>
	<div class="cat">
  <?php $this->options->WBShowLink() ?></div><!-- .widget-area -->

	</div>