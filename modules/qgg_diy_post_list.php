<!-- 自定义文章列表模块 -->
<section>
	<?php
		echo '<div class=title><h3>'._hui('qgg_diy_postlist_title').'</h3></div>'
	?>
	<div class="qgg_diy_postlist">
		<div style="list-style: none;">
			<?php $sitemsg = explode(PHP_EOL,_hui('qgg_diy_postlist'));
				foreach ($sitemsg as $value) {
					echo '<li><span class="qgg_diy_postlist_lable">'._hui('qgg_diy_postlist_lable').'</span>&nbsp&nbsp'.stripslashes($value).'</li>';
				} 
			?>
		</div>
	</div>
</section>