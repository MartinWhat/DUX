<?php  
	if( _hui('footer_brand_s') ){
		_moloader('mo_footer_brand', false);
	}
?>

<footer class="footer">
	<div class="container">
		<?php if( _hui('flinks_s') && _hui('flinks_cat') && ((_hui('flinks_home_s')&&is_home()) || (!_hui('flinks_home_s'))) ){ ?>
			<div class="flinks">
				<?php 
					wp_list_bookmarks(array(
						'category'         => _hui('flinks_cat'),
						'category_orderby' => 'slug',
						'category_order'   => 'ASC',
						'orderby'          => 'rating',
						'order'            => 'DESC',
						'show_description' => false,
						'between'          => '',
						'title_before'     => '<strong>',
    					'title_after'      => '</strong>',
						'category_before'  => '',
						'category_after'   => ''
					));
				?>
			</div>
		<?php } ?>
		<?php if( _hui('fcode') ){ ?>
			<div class="fcode">
				<?php echo _hui('fcode') ?>
			</div>
		<?php } ?>
		<p>
		<div class="col-md-4"><img width="100px" height="100px" src="https://cdn.wc1234.cn/wp-file/2019/01/qrcode_for_gh_50cc6c97be3a_258.jpg"></div>
		<div class="col-md-4">&copy; 2017-<? echo date('Y'); ?> 沃茨博客<br><br><a target="_blank" href="../sitemap.xml">网站地图</a><br><br>
		<a target="_blank" href="https://www.wc1234.cn/go/?url=http://www.miitbeian.gov.cn/">粤ICP备17048827号-1</a><br><br>
		<a target="_blank" href="https://www.wc1234.cn/go/?url=http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44133002100080">
			<img src="//www.wc1234.cn/logo/ghs.png"/>粤公网安备 44133002100080号
		</a>
		</div>
		<div class="col-md-4"><font color="red">Powered by Wordpress</font><br>
		<br>Theme By DUX<br>
		本站由<a target="_blank" href="https://www.wc1234.cn/go/?url=https://www.upyun.com/"><img src="https://www.wc1234.cn/logo/upyun_logo.svg" /></a>强力驱动<br>
		本页执行<? echo get_num_queries(); ?> requests in <?php timer_stop(3); ?>秒
		</div>
		</p>
		<?php echo _hui('trackcode') ?>
	</div>
</footer>

<?php if( (is_single() && _hui('post_rewards_s')) && ( _hui('post_rewards_alipay') || _hui('post_rewards_wechat') ) ){ ?>
	<div class="rewards-popover-mask" data-event="rewards-close"></div>
	<div class="rewards-popover">
		<h3><?php echo _hui('post_rewards_title') ?></h3>
		<?php if( _hui('post_rewards_alipay') ){ ?>
		<div class="rewards-popover-item">
			<h4>支付宝扫一扫打赏</h4>
			<img src="<?php echo _hui('post_rewards_alipay') ?>">
		</div>
		<?php } ?>
		<?php if( _hui('post_rewards_wechat') ){ ?>
		<div class="rewards-popover-item">
			<h4>微信扫一扫打赏</h4>
			<img src="<?php echo _hui('post_rewards_wechat') ?>">
		</div>
		<?php } ?>
		<span class="rewards-popover-close" data-event="rewards-close"><i class="fa fa-close"></i></span>
	</div>
<?php } ?>

<?php 
	if( _hui('kefu') ){ 
		$kefuhtml = '';
		if( _hui('kefu_m') && wp_is_mobile() ){
			$kefuorder = trim(_hui('kefu_m_px'));
		}else{
			$kefuorder = trim(_hui('kefu_px'));
		}
		if( $kefuorder ){
			$kefuorder = explode(' ', $kefuorder);
			foreach ($kefuorder as $key => $value) {
				switch ($value) {
					case '1':
						$kefuhtml .= '<li class="rollbar-totop"><a href="javascript:(jsui.scrollTo());"><i class="fa fa-angle-up"></i><span>'._hui('kefu_top_tip_m').'</span></a>'.(_hui('kefu_top_tip')?'<h6>'. _hui('kefu_top_tip') .'<i></i></h6>':'').'</li>';
						break;

					case '2':
						if( _hui('fqq_id') ) $kefuhtml .= '<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='. _hui('fqq_id') .'&site=qq&menu=yes"><i class="fab fa-qq"></i><span>'._hui('fqq_tip_m').'</span></a>'.(_hui('fqq_tip')?'<h6>'. _hui('fqq_tip') .'<i></i></h6>':'').'</li>';
						break;

					case '3':
						if( _hui('kefu_tel_id') ) $kefuhtml .= '<li><a href="tel:'. _hui('kefu_tel_id') .'"><i class="fa fa-phone"></i><span>'._hui('kefu_tel_tip_m').'</span></a>'.(_hui('kefu_tel_tip')?'<h6>'. _hui('kefu_tel_tip') .'<i></i></h6>':'').'</li>';
						break;

					case '4':
						if( _hui('kefu_wechat_qr') ) $kefuhtml .= '<li class="rollbar-qrcode"><a href="javascript:;"><i class="fa fa-qrcode"></i><span>'._hui('kefu_wechat_tip_m').'</span></a>'.(_hui('kefu_wechat_tip')?'<h6>'. _hui('kefu_wechat_tip') .(_hui('kefu_wechat_qr')?'<img src="'._hui('kefu_wechat_qr').'">':'').'<i></i></h6>':'').'</li>';
						break;

					case '5':
						if( _hui('kefu_sq_id') ) $kefuhtml .= '<li><a target="_blank" href="'. _hui('kefu_sq_id') .'"><i class="fa fa-globe"></i><span>'._hui('kefu_sq_tip_m').'</span></a>'.(_hui('kefu_sq_tip')?'<h6>'. _hui('kefu_sq_tip') .'<i></i></h6>':'').'</li>';
						break;

					case '6':
						if( (is_single()||is_page()) && comments_open() ) $kefuhtml .= '<li><a href="javascript:(jsui.scrollTo(\'#comments\',-15));"><i class="fa fa-comments"></i><span>'._hui('kefu_comment_tip_m').'</span></a>'.(_hui('kefu_comment_tip')?'<h6>'. _hui('kefu_comment_tip') .'<i></i></h6>':'').'</li>';
						break;
					
					default:
						
						break;
				}
			}

	    	echo '<div class="rollbar rollbar-'._hui('kefu').'"><ul>'.$kefuhtml.'</ul></div>';
		}
	}
?>

<?php  
	$roll = '';
	if( is_home() && _hui('sideroll_index_s') ){
		$roll = _hui('sideroll_index');
	}else if( (is_category() || is_tag() || is_search()) && _hui('sideroll_list_s') ){
		$roll = _hui('sideroll_list');
	}else if( is_single() && _hui('sideroll_post_s') ){
		$roll = _hui('sideroll_post');
	}
	if( $roll ){
		$roll = json_encode(explode(' ', $roll));
	}else{
		$roll = json_encode(array());
	}

	_moloader('mo_get_user_rp');
?>
<script>
window.jsui={
	www: '<?php echo home_url() ?>',
	uri: '<?php echo get_stylesheet_directory_uri() ?>',
	ver: '<?php echo THEME_VERSION ?>',
	roll: <?php echo $roll ?>,
	ajaxpager: '<?php echo _hui("ajaxpager") ?>',
	url_rp: '<?php echo mo_get_user_rp() ?>'
};
</script>
<!-- 复制内容弹窗版权提醒 -->
<script type="text/javascript">
    document.body.oncopy=function(){swal("复制成功", "撰文不易，转载请务必保留原文链接，谢谢合作！", "success");}
</script>

<script type="text/javascript">
    len = $(".widget_ui_tags .items a").length - 1;
    $(".widget_ui_tags .items a").each(function(i) {
        var let = new Array( '27ea80','3366FF','ff5473','df27ea', '31ac76', 'ea4563', '31a6a0', '8e7daa', '4fad7b', 'f99f13', 'f85200', '666666');
        var random1 = Math.floor(Math.random() * 12) + 0;
        var num = Math.floor(Math.random() * 5 + 12);
        $(this).attr('style', 'background:#' + let[random1] + '; opacity: 0.6;'+'');
        if ($(this).next().length > 0) {
            last = $(this).next().position().left
        }
    });
</script>

<?php if(is_single()):?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/highslide/highslide.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/highslide/highslide.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    hs.graphicsDir = "<?php bloginfo('template_url'); ?>/highslide/graphics/";
    hs.outlineType = "rounded-white";
    hs.dimmingOpacity = 0.8;
    hs.outlineWhileAnimating = true;
    hs.showCredits = false;
    hs.captionEval = "this.thumb.alt";
    hs.numberPosition = "caption";
    hs.align = "center";
    hs.transitions = ["expand", "crossfade"];
    hs.addSlideshow({
        interval: 5000,
        repeat: true,
        useControls: true,
        fixedControls: "fit",
        overlayOptions: {
            opacity: 0.75,
            position: "bottom center",
            hideOnMouseOut: true

        }

    });
});
</script>
<?php endif;?>
<!-- 评论框礼花绽放效果-->
<script src="<?php bloginfo('template_directory'); ?>/diy/activate-power-mode.js "></script>
<script>
    POWERMODE.colorful = true; // ture 为启用礼花特效
    POWERMODE.shake = false; // false 为禁用震动特效
    document.body.addEventListener('input', POWERMODE);
</script>
<script src="https://www.wc1234.cn/wp-content/themes/dux/js/instantclick-1.2.2.js" type="module"></script>
<?php wp_footer(); ?>
<!--script type="text/javascript" src="<?php //echo get_template_directory_uri(); ?>/js/comment.js"></script-->
<!--script type="text/javascript" src="<?php //echo get_template_directory_uri(); ?>/js/dj.js"></script-->
<!--link href="https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<?php /* queries for admin 
if (current_user_can('level_10'))
{
    global $wpdb;
    echo "<!--mysql>";
    print_r($wpdb->queries);
    echo "</mysql-->";
}*/?>
</body>
</html>