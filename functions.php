<?php
// Require theme functions
//date_default_timezone_set(PRC);
date_default_timezone_set('Asia/Shanghai');
require get_stylesheet_directory() . '/functions-theme.php';
//header('X-Frame-Options:SAMEORIGIN');
//header("Strict-Transport-Security: max-age=63072000; includeSubdomains; preload");
error_reporting(0);

// Customize your functions
// 



//添加老文章提示信息 www.wn789.com
function old_content_message($content) {
$modified = get_the_modified_time('U');
$current = current_time('timestamp');
$diffTime = ($current - $modified) / (60 * 60 * 24);
 if ($diffTime > 365) {
$content = '<div id="tbc_pink">本文最后更新于'.get_the_modified_time('Y年n月j日').
 '，已超过 1 年没有更新，涉及的内容可能已经失效！</div>'.$content;
 }
 return $content;
}
add_filter('the_content', 'old_content_message');

//自动TAG转内链
$match_num_from = 1; // 一个TAG标签出现几次才加链接
$match_num_to = 3; // 同一个标签加几次链接
add_filter('the_content','tag_link',1);
function tag_sort($a, $b){
if ( $a->name == $b->name ) return 0;
return ( strlen($a->name) > strlen($b->name) ) ? -1 : 1;
}
function tag_link($content){
global $match_num_from,$match_num_to;
$posttags = get_the_tags();
if ($posttags) {
usort($posttags, "tag_sort");
foreach($posttags as $tag) {
$link = get_tag_link($tag->term_id);
$keyword = $tag->name;
$cleankeyword = stripslashes($keyword);
$url = "<a href=\"$link\" title=\"".str_replace('%s',addcslashes($cleankeyword, '$'),__('View all posts in %s'))."\"";
$url .= ' target="_blank"';
$url .= ">".addcslashes($cleankeyword, '$')."</a>";
$limit = rand($match_num_from,$match_num_to);
$content = preg_replace( '|(<a[^>]+>)(.*)('.$ex_word.')(.*)(</a[^>]*>)|U'.$case, '$1$2%&&&&&%$4$5', $content);
$content = preg_replace( '|(<img)(.*?)('.$ex_word.')(.*?)(>)|U'.$case, '$1$2%&&&&&%$4$5', $content);
$cleankeyword = preg_quote($cleankeyword,'\'');
$regEx = '\'(?!((<.*?)|(<a.*?)))('. $cleankeyword . ')(?!(([^<>]*?)>)|([^>]*?</a>))\'s' . $case;
$content = preg_replace($regEx,$url,$content,$limit);
$content = str_replace( '%&&&&&%', stripslashes($ex_word), $content);
}
}
return $content;
}

function disable_srcset( $sources ) {
	return false;
}
add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );

//后台登陆数学验证码
function myplugin_add_login_fields() {
//获取两个随机数, 范围0~9
$num1=rand(0,9);
$num2=rand(0,9);
//最终网页中的具体内容
    echo "<p><label for='math' class='small'>验证码</label><br /> <label for='math' class='small'>$num1 + $num2 = ?</label><input type='text' name='sum' class='input' value='' size='25' tabindex='4'>"
."<input type='hidden' name='num1' value='$num1'>"
."<input type='hidden' name='num2' value='$num2'></p>";
}
add_action('login_form','myplugin_add_login_fields');
add_action('register_form','myplugin_add_login_fields');
function login_val() {
$sum=$_POST['sum'];//用户提交的计算结果
switch($sum){
//得到正确的计算结果则直接跳出
case $_POST['num1']+$_POST['num2']:break;
//未填写结果时的错误讯息
case null:wp_die('错误: 请输入验证码.');break;
//计算错误时的错误讯息
default:wp_die('错误: 验证码错误,请重试.');
}
}
add_action('login_form_login','login_val');
add_action('register_form_register','login_val');
/*
function remove_open_sans_from_wp_core() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false);
    wp_enqueue_style('open-sans',);
}
add_action( 'init', 'remove_open_sans_from_wp_core' );
*/
function remove_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css', 100 );

//自定义登录页面https://img.fczbl.vip/images/2018/10/20/site_login_bak.jpg
function custom_login_logo() { echo '<style>body{background:#92C1D1 url(https://api.wc1234.cn/api/acg) fixed center top no-repeat!important;background-size:cover!important}.login h1 a{/*background-image:url(https://cdn.wc1234.cn/wp-file/2019/01/1547636171-%E6%9C%AA%E6%A0%87%E9%A2%98-1.png)!important*/}</style><link rel="stylesheet" id="wp-admin-css" href="'.get_bloginfo('template_directory').'/css/login.css" type="text/css" />';}
add_action('login_head', 'custom_login_logo');

//Comments face
add_filter('smilies_src','custom_smilies_src',1,10);
function custom_smilies_src($img_src,$img,$siteurl){
    $owodir = get_bloginfo('template_directory');
    return 'https://cdn.wc1234.cn/smilies/'.$img;
}

function smilies_reset() {
    global $wpsmiliestrans, $wp_smiliessearch;
    // don't bother setting up smilies if they are disabled
    if ( !get_option( 'use_smilies' ) )
    return;
    $wpsmiliestrans = array(
		':hehe:' => 'hehe.png',
     ':haha:' => 'haha.png',
    ':tushe:' => 'tushe.png',
        ':a:' => 'a.png',
       ':ku:' => 'ku.png',
       ':nu:' => 'nu.png',
   ':kaixin:' => 'kaixin.png',
      ':han:' => 'han.png',
      ':lei:' => 'lei.png',
  ':heixian:' => 'heixian.png',
    ':bishi:' => 'bishi.png',
':bugaoxing:' => 'bugaoxing.png',
 ':zhenbang:' => 'zhenbang.png',
     ':qian:' => 'qian.png',
    ':yiwen:' => 'yiwen.png',
  ':yinxian:' => 'yinxian.png',
       ':tu:' => 'tu.png',
       ':yi:' => 'yi.png',
    ':weiqv:' => 'weiqv.png',
   ':huaxin:' => 'huaxin.png',
       ':hu:' => 'hu.png',
  ':xiaoyan:' => 'xiaoyan.png',
     ':leng:' => 'leng.png',
':taikaixin:' => 'taikaixin.png',
     ':meng:' => 'meng.png',
    ':huaji:' => 'huaji.png',
   ':huaji2:' => 'huaji2.png',
   ':huaji3:' => 'huaji3.gif',
   ':huaji4:' => 'huaji4.png',
   ':huaji5:' => 'huaji5.gif',
   ':huaji6:' => 'huaji6.png',
   ':huaji7:' => 'huaji7.png',
   ':huaji8:' => 'huaji8.png',
   ':huaji9:' => 'huaji9.png',
  ':huaji10:' => 'huaji10.png',
  ':huaji11:' => 'huaji11.png',
  ':huaji12:' => 'huaji12.png',
  ':huaji13:' => 'huaji13.png',
  ':huaji14:' => 'huaji14.png',
  ':huaji15:' => 'huaji15.png',
  ':huaji16:' => 'huaji16.gif',
  ':huaji17:' => 'huaji17.png',
  ':huaji18:' => 'huaji18.png',
  ':huaji19:' => 'huaji19.png',
  ':huaji20:' => 'huaji20.gif',
  ':huaji21:' => 'huaji21.gif',
  ':huaji22:' => 'huaji22.png',
  ':huaji23:' => 'huaji23.png',
':mianqiang:' => 'mianqiang.png',
 ':kuanghan:' => 'kuanghan.png',
     ':guai:' => 'guai.png',
 ':shuijiao:' => 'shuijiao.png',
   ':jingku:' => 'jingku.png',
  ':shengqi:' => 'shengqi.png',
   ':jingya:' => 'jingya.png',
      ':pen:' => 'pen.png',
    ':aixin:' => 'aixin.png',
   ':xinsui:' => 'xinsui.png',
   ':meigui:' => 'meigui.png',
     ':liwu:' => 'liwu.png',
  ':caihong:' => 'caihong.png',
     ':xxyl:' => 'xxyl.png',
      ':sun:' => 'sun.png',
    ':money:' => 'money.png',
     ':bulb:' => 'bulb.png',
      ':cup:' => 'cup.png',
     ':cake:' => 'cake.png',
    ':music:' => 'music.png',
    ':haha2:' => 'haha2.png',
      ':win:' => 'win.png',
     ':good:' => 'good.png',
      ':bad:' => 'bad.png',
       ':ok:' => 'ok.png',
     ':stop:' => 'stop.png',
   ':hahaha:' => 'hahaha.png',
		);
}
smilies_reset();


/*闪光按钮 开始 */
/*添加蓝色闪光按钮*/
function sg_blue($atts, $content = null) {
 extract(shortcode_atts(array(
 "href" => 'http://'
 ) , $atts));
 return '<a class="sgbtn_blue" href="' . $href . '" target="_blank" rel="nofollow">' . $content . '</a>';
}
add_shortcode('sgbtn_blue', 'sg_blue');
/*添加红色闪光按钮*/
function sg_red($atts, $content = null) {
 extract(shortcode_atts(array(
 "href" => 'http://'
 ) , $atts));
 return '<a class="sgbtn_red" href="' . $href . '" target="_blank" rel="nofollow">' . $content . '</a>';
}
add_shortcode('sgbtn_red', 'sg_red');
/*添加橙色闪光按钮*/
function sg_orange($atts, $content = null) {
 extract(shortcode_atts(array(
 "href" => 'http://'
 ) , $atts));
 return '<a class="sgbtn_orange" href="' . $href . '" target="_blank" rel="nofollow">' . $content . '</a>';
}
add_shortcode('sgbtn_orange', 'sg_orange');
/*添加绿色闪光按钮*/
function sg_lv($atts, $content = null) {
 extract(shortcode_atts(array(
 "href" => 'http://'
 ) , $atts));
 return '<a class="sgbtn_lv" href="' . $href . '" target="_blank" rel="nofollow">' . $content . '</a>';
}
add_shortcode('sgbtn_lv', 'sg_lv');
/*闪光按钮 结束*/

/*彩色按钮 开始*/
/*蓝色按钮*/
function toj($atts, $content=null) {
 extract(shortcode_atts(array("href" => 'http://'), $atts));
 return '<a class="bluebtn" href="' . $href . '" target="_blank" rel="nofollow">' .$content.'</a>';
}
add_shortcode('bb' , 'toj' );
/*黄色按钮*/
function tok($atts, $content=null) {
 extract(shortcode_atts(array("href" => 'http://'), $atts));
 return '<a class="yellowbtn" href="' . $href . '" target="_blank" rel="nofollow">' .$content.'</a>';
}
add_shortcode('yb' , 'tok' );
/*绿色按钮*/
function tol($atts, $content=null) {
 extract(shortcode_atts(array("href" => 'http://'), $atts));
 return '<a class="greenbtn" href="' . $href . '" target="_blank" rel="nofollow">' .$content.'</a>';
}
add_shortcode('gb' , 'tol' );

/*彩色按钮 结束*/

/*添加文本编辑自定义快捷标签按钮*/
 add_action('after_wp_tiny_mce', 'bolo_after_wp_tiny_mce');
 function bolo_after_wp_tiny_mce($mce_settings) {
 ?>
 <script type="text/javascript">
 QTags.addButton( 'sgbtn_blue', '蓝色闪光', "[sgbtn_blue href='']点击购买", "[/sgbtn_blue]" );
 QTags.addButton( 'sgbtn_red', '红色闪光', "[sgbtn_red href='']点击购买", "[/sgbtn_red]" );
 QTags.addButton( 'sgbtn_orange', '黄色闪光', "[sgbtn_orange href='']点击购买", "[/sgbtn_orange]" );
 QTags.addButton( 'sgbtn_lv', '绿色闪光', "[sgbtn_lv href='']点击购买", "[/sgbtn_lv]" );
 QTags.addButton( 'gb', '绿色按钮', "[gb href='']点击购买", "[/gb]" );
 QTags.addButton( 'bb', '蓝色按钮', "[bb href='']点击购买", "[/bb]" );
 QTags.addButton( 'yb', '黄色按钮', "[yb href='']点击购买", "[/yb]" );
 function bolo_QTnextpage_arg1() {
 }
 </script>
 <?php
 }
 /*添加文本编辑自定义快捷标签按钮 结束*/
 
 // 文章页添加展开收缩效果
function xcollapse($atts, $content = null){
	extract(shortcode_atts(array("title"=>""),$atts));
	return '<div style="margin: 0.5em 0;">
		    <div class="xControl">
			    <a href="javascript:void(0)" class="collapseButton xButton"><span class="xTitle">'.$title.'</span></a>
			    <div style="clear: both;"></div>
		    </div>
		<div class="xContent" style="display: none;">'.$content.'</div>
	</div>';
}
add_shortcode('collapse', 'xcollapse');

//添加展开/收缩快捷标签按钮
function appthemes_add_collapse() {
?>
    <script type="text/javascript">
        if ( typeof QTags != 'undefined' ) {
            QTags.addButton( 'collapse', '展开/收缩按钮', '[collapse title="点击展开 查看更多"]','[/collapse]' );
        } 
    </script>
<?php 
}
add_action('admin_print_footer_scripts', 'appthemes_add_collapse' );

//集成auto-highslide灯箱插件
add_filter('the_content', 'addhighslideclass_replace');
function addhighslideclass_replace ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 class="highslide-image" onclick="return hs.expand(this);"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

//图片添加alt属性
function img_alt( $imgalt ){
        global $post;
        $title = $post->post_title;
        $imgUrl = "<img\s[^>]*src=(\"??)([^\" >]*?)\\1[^>]*>";
        if(preg_match_all("/$imgUrl/siU",$imgalt,$matches,PREG_SET_ORDER)){
                if( !empty($matches) ){
                        for ($i=0; $i < count($matches); $i++){
                                $tag = $url = $matches[$i][0];
                                $judge = '/alt=/';
                                preg_match($judge,$tag,$match,PREG_OFFSET_CAPTURE);
                                if( count($match) < 1 )
                                $altURL = ' alt="'.$title.'" ';
                                $url = rtrim($url,'>');
                                $url .= $altURL.'>';
                                $imgalt = str_replace($tag,$url,$imgalt);
                        }
                }
        }
        return $imgalt;
}
add_filter( 'the_content','img_alt');


function QGG_select(){
echo '
<select id="short_code_select">
	<option value="请选择一个短代码！！！">插入短代码</option>
	<option value="[ghide keyword=\'关键字\' key=\'验证码\']隐藏内容[/ghide]">公众号隐藏</option>
	<option value="[pwd_protected_post key=\'保护密码\']您需要选择一个短代码[/pwd_protected_post]">文章密码保护</option>
	<option value="[collapse title=\'说明文字\'][/collapse]">展开/收缩按钮</option>
	<option value="[qgg_cyan]替换文本[/qgg_cyan]">青色文本框</option>
</select>';
}
if (current_user_can('edit_posts') && current_user_can('edit_pages')) {
	add_action('media_buttons', 'QGG_select', 11);
}

function QGG_button() {
echo '<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#short_code_select").change(function(){
			send_to_editor(jQuery("#short_code_select :selected").val());
			return false;
		});
	});
</script>';
}
add_action('admin_head', 'QGG_button');

// 网站添加公众号涨粉功能核心代码
function secret($atts, $content=null){
    extract(shortcode_atts(array('key'=>null,'keyword'=>null), $atts));
    if(isset($_POST['secret_key']) && $_POST['secret_key']==$key){
        return '<div class="secret-password">'.$content.'</div>';
      }
	else {
    return '
        <div class="post_hide_box">
            <img class="erweima" align="right" src="https://cdn.wc1234.cn/wp-file/2019/01/qrcode_for_gh_50cc6c97be3a_258.jpg" width="160" height="160" alt="关注沃茨博客"><div class="post-secret"><i class="fa fa-exclamation-circle"></i>此处内容已经被作者无情的隐藏，请输入验证码查看内容</div>
            <form action="'.get_permalink().'" method="post"> 
                <span>验证码：</span><input id="pwbox" type="password" size="20" name="secret_key">
                <a class="a2" href="javascript:;"><input type="submit" value="提交" name="Submit"></a>
            </form>
            <div class="details">请关注“沃茨博客”官方公众号，回复关键字“<span>'.$keyword.'</span>”，获取验证码。
            <span>【注】</span>手机扫描二维码快速关注“沃茨博客”官方公众号。
	    </div>
         </div>';
      }
}
add_shortcode('ghide', 'secret');


//文章编辑器添加简码按钮
function wpsites_add_gzh_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
    QTags.addButton( 'ghide', ' 公众号隐藏', '\n[ghide keyword="关键字" key="验证码"]隐藏内容[/ghide]', "" );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'wpsites_add_gzh_quicktags' );

//添加彩色文本框快捷按钮
function appthemes_add_qgg_cyan() {
?>
    <script type="text/javascript">
    if ( typeof QTags != 'undefined' ) {
        QTags.addButton( 'qgg_cyan', '青色文本框', '[qgg_cyan]替换文本[/qgg_cyan]','' );
    } 
    </script>
<?php 
} 
add_action('admin_print_footer_scripts', 'appthemes_add_qgg_cyan' );

function appthemes_add_qgg_green() {
?>
    <script type="text/javascript">
    if ( typeof QTags != 'undefined' ) {
        QTags.addButton( 'qgg_green', '绿色文本框', '[qgg_green]这里要替换为您的文本内容哦~[/qgg_green]','' );
    } 
    </script>
<?php 
} 
add_action('admin_print_footer_scripts', 'appthemes_add_qgg_green' );

function appthemes_add_qgg_yellow() {
?>
    <script type="text/javascript">
    if ( typeof QTags != 'undefined' ) {
        QTags.addButton( 'qgg_yellow', '黄色文本框', '[qgg_yellow]这里要替换为您的文本内容哦~[/qgg_yellow]','' );
    } 
    </script>
<?php 
} 
add_action('admin_print_footer_scripts', 'appthemes_add_qgg_yellow' );

function appthemes_add_qgg_pink() {
?>
    <script type="text/javascript">
    if ( typeof QTags != 'undefined' ) {
        QTags.addButton( 'qgg_pink', '粉色文本框', '[qgg_pink]这里要替换为您的文本内容哦~[/qgg_pink]','' );
    } 
    </script>
<?php 
} 
add_action('admin_print_footer_scripts', 'appthemes_add_qgg_pink' );

function appthemes_add_qgg_gray() {
?>
    <script type="text/javascript">
    if ( typeof QTags != 'undefined' ) {
        QTags.addButton( 'qgg_gray', '灰色文本框', '[qgg_gray]这里要替换为您的文本内容哦~[/qgg_gray]','' );
    } 
    </script>
<?php 
} 
add_action('admin_print_footer_scripts', 'appthemes_add_qgg_gray' );

/*文章内容高亮提示框开始*/
/*青色警示文本框*/
function qgg_cyan($atts, $content=null){   
    return '<div id="tbc_cyan">'.$content.'</div>';   
}    
add_shortcode('qgg_cyan','qgg_cyan'); 
/*绿色警示文本框*/   
function qgg_green($atts, $content=null){   
    return '<div id="tbc_green">'.$content.'</div>';   
}    
add_shortcode('qgg_green','qgg_green');     
 /*黄色色警示文本框*/  
function qgg_yellow($atts, $content=null){   
    return '<div id="tbc_yellow">'.$content.'</div>';   
}    
add_shortcode('qgg_yellow','qgg_yellow'); 
 /*粉色警示文本框*/  
function qgg_pink($atts, $content=null){   
    return '<div id="tbc_pink">'.$content.'</div>';   
}    
add_shortcode('qgg_pink','qgg_pink');  
 /*灰色警示文本框*/  
function qgg_gray($atts, $content=null){   
    return '<div id="tbc_gray">'.$content.'</div>';   
}    
add_shortcode('qgg_gray','qgg_gray');   
/*文章内容高亮提示框完毕*/



//恢复老版编辑器 
//add_filter('use_block_editor_for_post', '__return_false');
//remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );


/**
* WordPress百度搜索自动推送、主动收录JS优化 By 张戈博客
* 文章地址：http://zhangge.net/5100.html
* 转载请保留出处，谢谢合作！
**/
/*
add_action( 'wp_footer', 'bdPushData', 999);

if(!function_exists('baidu_check_record')){
  function baidu_check_record($url,$post_id){
    $baidu_record  = get_post_meta($post_id,'baidu_record',true);
    if( $baidu_record != 1){
        $url='http://www.baidu.com/s?wd='.$url;
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $rs=curl_exec($curl);
        curl_close($curl);
        if( BD_PUSH == 'yes' && !preg_match_all('/提交网址/u',$rs) && preg_match_all('/百度为您找到相关结果/u',$rs)){
            update_post_meta($post_id, 'baidu_record', 1) || add_post_meta($post_id, 'baidu_record', 1, true);
            return 1;
        } else {
            return 0;
        }
    } else {
       return 1;
    }
  }
}

if(!function_exists('bdPushData')){
  function bdPushData() {
    global $wpdb;
    $post_id = ( null === $post_id ) ? get_the_ID() : $post_id;
    $currentUrl = home_url(add_query_arg(array()));
    //这里修改了下：给get_permalink指定了文章ID
    if(baidu_check_record(get_permalink($post_id), $post_id) == 0 && $currentUrl == get_permalink($post_id)) {
        echo "<script>(function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
            } else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(bp, s);
            })();
            (function(){
                var src = (document.location.protocol == 'http:') ? 'http://js.passport.qihucdn.com/11.0.1.js?f7ba087621587b68bdfb30bb955b8e27':'https://jspassport.ssl.qhimg.com/11.0.1.js?f7ba087621587b68bdfb30bb955b8e27';
                document.write('<script src=\"' + src + '\" id=\"sozz\"><\/script>');
            })();</script>";
   }
 }
}
*/


/*后台登录验证
add_action('login_enqueue_scripts','login_protection');
function login_protection(){
    if($_GET['pass'] != 'fuck')
        header('Location: https://www.baidu.com/s?wd=沃茨博客&ie=UTF-8');//* 不用密码登录，直接滚到百度去 *
}*/
//anti spam 必须包含中文
function refused_spam_comments( $comment_data ) {
    $pattern = '/[一-龥]/u';
    if(!preg_match($pattern,$comment_data['comment_content'])) {
        err('评论必须含中文！');
    }
    return( $comment_data );
}
add_filter('preprocess_comment','refused_spam_comments');

//获取文章/页面摘要
function fanly_excerpt($len=220){
    if ( is_single() || is_page() ){
        global $post;
        if ($post->post_excerpt) {
            $excerpt  = $post->post_excerpt;
        } else {
            if(preg_match('/<p>(.*)<\/p>/iU',trim(strip_tags($post->post_content,"<p>")),$result)){
                $post_content = $result['1'];
            } else {
                $post_content_r = explode("\n",trim(strip_tags($post->post_content)));
                $post_content = $post_content_r['0'];
            }
            $excerpt = preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,0}'.'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s','$1',$post_content);
        }
        return str_replace(array("\r\n", "\r", "\n"), "", $excerpt);
    }
}

//优先获取文章中的三张图，否则依次获取自定义图片/特色缩略图/文章首图 last update 2017/11/23
/*
function fanly_post_imgs(){
    global $post;
    $content = $post->post_content;
    preg_match_all('/<img .*?src=[\"|\'](.+?)[\"|\'].*?>/', $content, $strResult, PREG_PATTERN_ORDER);
    $n = count($strResult[1]);
    if($n >= 3){
        $src = $strResult[1][0].'","'.$strResult[1][1].'","'.$strResult[1][2];
    }else{
        if( $values = get_post_custom_values("thumb") ) {	//输出自定义域图片地址
            $values = get_post_custom_values("thumb");
            $src = $values [0];
        } elseif( has_post_thumbnail() ){	//如果有特色缩略图，则输出缩略图地址
            $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
            $src = $thumbnail_src [0];
        } else {	//文章中获取
            if($n > 0){ // 提取首图
                $src = $strResult[1][0];
            }
        }
    }
    return $src;
}*/
//评论可见
/*
function reply_to_read($atts, $content=null) {  
        extract(shortcode_atts(array("notice" => '<p class="reply-to-read">温馨提示: 此处内容需要<a href="#respond" title="评论本文">评论本文</a>后才能查看.</p>'), $atts));
        $email = null;
        $user_ID = (int) wp_get_current_user()->ID;
        if ($user_ID > 0) {
            $email = get_userdata($user_ID)->user_email;
            $admin_email = "admin@wc1234.cn";
            if ($email == $admin_email) {
                return $content;
            }
        } else if (isset($_COOKIE['comment_author_email_' . COOKIEHASH])) {
            $email = str_replace('%40', '@', $_COOKIE['comment_author_email_' . COOKIEHASH]);
        } else {
            return $notice;
        }
        if (empty($email)) {
            return $notice;
        }
        global $wpdb;
        $post_id = get_the_ID();
        $query = "SELECT `comment_ID` FROM {$wpdb->comments} WHERE `comment_post_ID`={$post_id} and `comment_approved`='1' and `comment_author_email`='{$email}' LIMIT 1";
        if ($wpdb->get_results($query)) {
            return do_shortcode($content);
        } else {
            return $notice;
        }
    }

add_shortcode('reply', 'reply_to_read');
*/

//防止本域名外的图片外链
/*
add_action('wp_footer','deny_mirrored_websites');
function deny_mirrored_websites(){
    $currentDomain = 'www.wc1234." + "cn'; //此处自行拆分一下自己的域名即可
    echo '<img style="display:none" src=" " onerror=\'var str1="'.$currentDomain.'";str2="docu"+"ment.loca"+"tion.host";str3=eval(str2);if( str1!=str3 ){ do_action = "loca" + "tion." + "href = loca" + "tion.href" + ".rep" + "lace(docu" +"ment"+".loca"+"tion.ho"+"st," + "\"' . $currentDomain .'\"" + ")";eval(do_action) }\' />';
}
*/

//给外部链接加上跳转
add_filter('the_content','link_jump',999);
function link_jump($content){
	preg_match_all('/<a(.*?)href="(.*?)"(.*?)>/',$content,$matches);
	if($matches){
	    foreach($matches[2] as $val){
	        if(strpos($val,'://')!==false && strpos($val,home_url())===false && !preg_match('/\.(jpg|jepg|png|ico|bmp|gif|tiff)/i',$val) && !preg_match('/(ed2k|thunder|Flashget|flashget|qqdl):\/\//i',$val)){
	        $content=str_replace("href=\"$val\"", "href=\"".home_url()."/go/".base64_encode($val)."\" rel=\"nofollow\"",$content);
			}
		}
	}
	return $content;
}

//浏览器ua+系统判断
function user_agent($ua) {
    //开始解析操作系统
    $os = null;
    if (preg_match('/Windows NT 6.0/i', $ua)) {
        $os = "Windows Vista";
    } elseif (preg_match('/Windows NT 6.1/i', $ua)) {
        $os = "Windows 7";
    } elseif (preg_match('/Windows NT 6.2/i', $ua)) {
        $os = "Windows 8";
    } elseif (preg_match('/Windows NT 6.3/i', $ua)) {
        $os = "Windows 8.1";
    } elseif (preg_match('/Windows NT 10.0/i', $ua)) {
        $os = "Windows 10";
    } elseif (preg_match('/Windows NT 5.1/i', $ua)) {
        $os = "Windows XP";
    } elseif (preg_match('/Windows NT 5.2/i', $ua) && preg_match('/Win64/i', $ua)) {
        $os = "Windows XP 64 bit";
    } elseif (preg_match('/Android ([0-9.]+)/i', $ua, $matches)) {
        $os = "Android " . $matches[1];
    } elseif (preg_match('/iPhone OS ([_0-9]+)/i', $ua, $matches)) {
        $os = 'iPhone ' . $matches[1];
    } else {
        $os = '未知操作系统';
    }
    if (preg_match('#(Camino|Chimera)[ /]([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Camino ' . $matches[2];
    } elseif (preg_match('#SE 2([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '搜狗浏览器 2' . $matches[1];
    } elseif (preg_match('#360([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '360浏览器 ' . $matches[1];
    } elseif (preg_match('#Maxthon( |\/)([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Maxthon ' . $matches[2];
    } elseif (preg_match('#Chrome/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Chrome ' . $matches[1];
    } elseif (preg_match('#XiaoMi/MiuiBrowser/([0-9.]+)#i', $ua, $matches)) {
        $browser = '小米浏览器 ' . $matches[1];
    } elseif (preg_match('#Safari/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Safari ' . $matches[1];
    } elseif (preg_match('#opera mini#i', $ua)) {
        preg_match('#Opera/([a-zA-Z0-9.]+)#i', $ua, $matches);
        $browser = 'Opera Mini ' . $matches[1];
    } elseif (preg_match('#Opera.([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Opera ' . $matches[1];
    } elseif (preg_match('#TencentTraveler ([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '腾讯TT浏览器 ' . $matches[1];
    } elseif (preg_match('#UCWEB([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'UCWEB ' . $matches[1];
    }elseif (preg_match('#wp-(iphone|android)/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'WordPress客户端 ' . $matches[1];
    } elseif (preg_match('#MSIE ([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Internet Explorer ' . $matches[1];
    } elseif (preg_match('#(Firefox|Phoenix|Firebird|BonEcho|GranParadiso|Minefield|Iceweasel)/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Firefox ' . $matches[2];
    } else {
        $browser = '未知浏览器';
    }
    return $os . " | " . $browser;
}
//每日热点
add_action('init', 'news_init');
function news_init() { 
    $labels = array( 
        'name' => '每日热点',
        'singular_name' => '热点', 
        'all_items' => '所有热点',
        'add_new' => '发表热点', 
        'add_new_item' => '撰写新热点',
        'edit_item' => '编辑热点', 
        'new_item' => '新热点', 
        'view_item' => '查看热点', 
        'search_items' => '搜索热点', 
        'not_found' => '暂无热点', 
        'not_found_in_trash' => '没有已遗弃的热点', 
        'parent_item_colon' => '',
        'menu_name' => '热点'
    ); 
    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true, 
        'rewrite' => true, 
        'capability_type' => 'post', 
        'has_archive' => true, 
        'hierarchical' => false, 
        'menu_position' => null, 
        'supports' => array('title','editor','author') 
    ); 
register_post_type('news',$args); 
}

//说说
add_action('init', 'my_custom_init');
function my_custom_init() {
    $labels = array( 'name' => '说说', 'singular_name' => '说说', 'add_new' => '发表说说', 'add_new_item' => '发表说说', 'edit_item' => '编辑说说', 'new_item' => '新说说', 'view_item' => '查看说说', 'search_items' => '搜索说说', 'not_found' => '暂无说说', 'not_found_in_trash' => '没有已遗弃的说说', 'parent_item_colon' => '', 'menu_name' => '说说' );
    $args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => true, 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false, 'menu_position' => null, 'supports' => array('title','editor','author') ); register_post_type('shuoshuo',$args); }

/**
 * WordPress 添加评论之星
 * https://www.wpdaxue.com/wp-comments-vip.html
 */
// WordPress 添加评论之星
 function get_author_class($comment_author_email,$user_id){
 global $wpdb;
 $author_count = count($wpdb->get_results(
 "SELECT comment_ID as author_count FROM $wpdb->comments WHERE comment_author_email = '$comment_author_email' "));
 // 如果不需要管理员显示VIP标签，就把下面一行的 // 去掉
 // $adminEmail = get_option('admin_email');if($comment_author_email ==$adminEmail) return;
 if($author_count>=1 && $author_count<20)
 echo '<a class="vip1" title="评论达人 LV.1"></a>';
 else if($author_count>=20 && $author_count<40)
 echo '<a class="vip2" title="评论达人 LV.2"></a>';
 else if($author_count>=40 && $author_count<80)
 echo '<a class="vip3" title="评论达人 LV.3"></a>';
 else if($author_count>=80 && $author_count<160)
 echo '<a class="vip4" title="评论达人 LV.4"></a>';
 else if($author_count>=160 && $author_count<320)
 echo '<a class="vip5" title="评论达人 LV.5"></a>';
 else if($author_count>=320 && $author_count<640)
 echo '<a class="vip6" title="评论达人 LV.6"></a>';
 else if($author_count>=640)
 echo '<a class="vip7" title="评论达人 LV.7"></a>';
}

require get_stylesheet_directory() . '/ua-show.php';
// 页面链接添加html后缀
add_action('init', 'html_page_permalink', -1);
function html_page_permalink() {
    global $wp_rewrite;
    if ( !strpos($wp_rewrite->get_page_permastruct(), '.html')){
        $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
    }
}
//分类自动添加斜杠
function nice_trailingslashit($string, $type_of_url) {
    if ( $type_of_url != 'single' && $type_of_url != 'page' )
        $string = trailingslashit($string);
    return $string;
}
add_filter('user_trailingslashit', 'nice_trailingslashit', 10, 2);