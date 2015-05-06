	<div class="clear"></div>
</div>
</div>
				<footer>
		<div class = "footer">
				<div class="row">
					<dl>
						<dt>分类目录</dt>
						
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<dd><a href="{permalink}">{name}</a> ({count})</dd>'); ?>

					</dl>
					<dl>
						<dt>页面</dt>
		   <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <dd><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></dd>
                    <?php endwhile; ?>				</dl>
					<dl>
						<dt>标签</dt>
<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
<?php if($tags->have()): ?>

<?php while ($tags->next()): ?>
    <dd><a href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a></dd>
<?php endwhile; ?>
<?php else: ?>
    <dd><?php _e('没有任何标签'); ?></dd>
<?php endif; ?>
					</dl>
				</div>
				<div class="row">
					<ul>
						<li>
							<a class="icon facebook" data-ga="sns|footer|facebook" target="_blank" href="<?php $this->options->FaceBookLink() ?>" rel="nofollow"></a>
						</li>
						<li>
							<a class="icon twitter" data-ga="sns|footer|twitter" target="_blank" href="<?php $this->options->TwitterLink() ?>" rel="nofollow"></a>
						</li>
						<li>
							<a class="icon google" data-ga="sns|footer|google" target="_blank" href="<?php $this->options->GooglePlusLink() ?>" rel="nofollow publisher"></a>
						</li>
						<li>
							<a class="icon vk" data-ga="sns|footer|vk" target="_blank" href="<?php $this->options->VKLink() ?>" rel="nofollow"></a>
						</li>
					</ul>
				</div>
				<div class="row">
					<span class="copyright">© <?php $this->options->FooterCopyRight() ?></span>
				</div>
			</div>
        </footer>
<script type='text/javascript' src='http://lib.sinaapp.com/js/jquery.migrate/1.2.1/jquery-migrate-1.2.1.min.js'></script>
    </body>
</html>
