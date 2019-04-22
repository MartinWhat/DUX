<?php
/*
template name: Tools(工具箱)
*/
get_header ();
?>

<!--以下为前端代码工具箱代码样式-2015年8月11日-->
<style type="text/css">
.container-tools {
	padding-left: 215px;
}
.container-tools .content {
	margin-right: 0;
	padding: 20px;
}
.toolsside {
	position: absolute;
	top: 0;
	left: 0;
	width: 200px;
}
.toolsmenus {
	position: relative;
	width: 200px;
}
.toolsmenu {
	list-style: none;
	margin: 0 0 15px;
	padding: 0;
	border: 1px solid #eaeaea;
	border-radius: 4px;
	background-color: #fff;
}
.toolsmenu li a {
	display: block;
	padding: 12px 20px;
	font-size: 16px;
	color: #999;
	border-bottom: 1px solid #eaeaea;
}
.toolsmenu li a:hover {
	color: #666;
}
.toolsmenu li.active a {
	color: #fff;
	background-color: #61B3E6;
	margin: 0 -1px;
}
.toolsmenu li:last-child a {
	border-bottom: none;
}
.toolsmenu li:first-child a {
	border-radius: 4px 4px 0 0
}
.toolsmenu li:last-child a {
	border-radius: 0 0 4px 4px
}
.header {
	margin-bottom: 0;
}
.content {
	border: 1px solid #eaeaea;
	border-radius: 4px;
	background-color: #fff;
}
.content h2 {
	font-size: 16px;
	margin: 0 0 10px;
	font-weight: bold;
}
.content textarea {
	width: 100%;
	min-height: 250px;
	border: 1px solid #ddd;
	display: block;
	margin-bottom: 10px;
	padding: 7px;
	font: 100 12px/18px monaco, andale mono, courier new;
	color: #666;
	border-radius: 2px;
}
.content textarea:focus {
	outline: 0;
	border-color: #bbb;
	box-shadow: 0 0 4px rgba(0,0,0,.15)
}
.content button {
	display: inline-block;
	margin-bottom: 0;
	font-weight: normal;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid rgba(0, 0, 0, 0);
	white-space: nowrap;
	padding: 5px 12px;
	font-size: 12px;
	line-height: 1.5;
	border-radius: 2px;
	border-color: #55A5D8;
	background-color: #55A5D8;
	color: #FFF;
	opacity: 0.85;
	filter: alpha(opacity=85);
}
.content button:focus, .content button:hover {
	opacity: 1;
	filter: alpha(opacity=100);
	outline: 0;
}
.content select {
	display: inline-block;
	margin-bottom: 0;
	font-weight: normal;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid rgba(0, 0, 0, 0);
	white-space: nowrap;
	padding: 5px 6px 4px;
	font-size: 12px;
	line-height: 1.5;
	border-radius: 2px;
	border-color: #ddd;
}
.prettyprint, pre.prettyprint {
	background-color: #272822;
	border: 1px solid #272822;
	overflow: hidden;
	padding: 8px;
}
.prettyprint.linenums, pre.prettyprint.linenums {
	-webkit-box-shadow: inset 40px 0 0 #39382E, inset 41px 0 0 #464741;
	-moz-box-shadow: inset 40px 0 0 #39382E, inset 41px 0 0 #464741;
	box-shadow: inset 40px 0 0 #39382E, inset 41px 0 0 #464741;
}
.prettyprint.linenums ol, pre.prettyprint.linenums ol {
	margin: 0 0 0 33px;
}
.prettyprint.linenums ol li, pre.prettyprint.linenums ol li {
	padding-left: 12px;
	color: #bebec5;
	line-height: 20px;
	margin-left: 0;
	list-style: decimal;
}
.prettyprint .com {
	color: #93a1a1;
}
.prettyprint .lit {
	color: #AE81FF;
}
.prettyprint .pun, .prettyprint .opn, .prettyprint .clo {
	color: #F8F8F2;
}
.prettyprint .fun {
	color: #dc322f;
}
.prettyprint .str, .prettyprint .atv {
	color: #E6DB74;
}
.prettyprint .kwd, .prettyprint .tag {
	color: #F92659;
}
.prettyprint .typ, .prettyprint .atn, .prettyprint .dec, .prettyprint .var {
	color: #A6E22E;
}
.prettyprint .pln {
	color: #66D9EF;
}
</style>
<!--/*以上为前端代码工具箱代码样式-2015年8月11日*/-->
<script src="http://libs.useso.com/js/jquery/1.9.0/jquery.min.js"></script>

<div class="pageheader pageheader-mini">
  <div class="container">
    <div class="share bdsharebuttonbox">
      <?php _moloader('mo_share', false); mo_share('fbook');?>
      <span class="bds_count" data-cmd="count"></span> </div>
<!--/*以下代码嗯哌修改于-2015年8月16日*/-->
    <h1>
      <?php
$a22= $_SERVER['REQUEST_URI'];
$b22= the_title();
$c22=" · 在线代码高亮";
$d22=" · CSS 压缩/格式化";
$e22=" · HTML代码转换";
$f22=" · JS 转 HTML";
$g22=" · JS 加密/压缩/格式化";
$h22=" · HTML 特殊符号";
if ($a22==="/tools") {  echo $b22 . $c22;}
if ($a22==="/tools?t=qd-hcodemirror") {  echo $b22 . $c22;}
if ($a22==="/tools?t=qd-csspacker") {  echo $b22 . $d22;}
if ($a22==="/tools?t=qd-htmlcodegov") {  echo $b22 . $e22;}
if ($a22==="/tools?t=qd-js-html") {  echo $b22 . $f22;}
if ($a22==="/tools?t=qd-jspacker") {  echo $b22 . $g22;}
if ($a22==="/tools?t=qd-htmlchar") {  echo $b22 . $h22;}
?>
    </h1>
  </div>
</div>
<section class="container container-tools">
  <div class="toolsside">
    <div class="toolsmenus">
      <ul class="toolsmenu">
        <li><a id="codemirror" href="?t=qd-hcodemirror">在线代码高亮</a></li>
        <li><a id="csspacker" href="?t=qd-csspacker">CSS 压缩/格式化</a></li>
        <li><a id="htmlcodegov" href="?t=qd-htmlcodegov">HTML代码转换</a></li>
        <li><a id="js-html" href="?t=qd-js-html">JS 转 HTML</a></li>
        <li><a id="jspacker" href="?t=qd-jspacker">JS 加密/压缩/格式化</a></li>
        <li><a id="htmlchar" href="?t=qd-htmlchar">HTML 特殊符号</a></li>
      </ul>
    </div>
  </div>
  <div class="content">
    <h2> 贴入要高亮代码： 
      <!--[if IE]><font color="red">(本功能暂不支持 IE 浏览器)</font><![endif]--> 
    </h2>
    <textarea class="tarea" id="code" onmouseover="this.focus();this.select();"><h2 class="demo">贴入要高亮代码：</h2>
</textarea>
    <p>
      <button onclick="doHighlight('text/html');">Html Mix</button>
      <button onclick="doHighlight('text/css');">CSS</button>
      <button onclick="doHighlight('text/javascript');">Javscript</button>
      <button onclick="doHighlight('application/xml');">XML</button>
      <button onclick="doHighlight('application/x-httpd-php');">PHP</button>
    </p>
    <br>
    <h2>复制以下代码到编辑器（html模式）：</h2>
    <textarea class="tarea" id="getcode" style="height: 100px" onmouseover="this.focus();this.select();"></textarea>
    <br>
    <h2>高亮预览：</h2>
    <pre id="output" class="cm-s-default"></pre>
    <script src="<?php bloginfo('template_url') ?>/private/tools/jquery.1.8.0.php"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/codemirror.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/css.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/javascript.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/runmode.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/xml.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/php.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/clike.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/htmlmixed.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/codemirror_js/runmode.js"></script> 
    
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/csspacker.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/htmlcodecov.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/jspacker.js"></script>  
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/jsformat.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/html_js.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/base.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/htmlformat.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/scriptencode.js"></script> 
    <script src="<?php bloginfo('template_url') ?>/private/tools/js/jscodeconfusion.js"></script> 
  </div>
  <script type="text/javascript">
//jQuery.noConflict();
jQuery(document).ready(function($) {
	//tools
	var tool_id = document.URL.split('?t=')[1];
	$('.toolsmenu a').each(function(){
		if( $(this).attr('href').split('?t=')[1] == tool_id ){
			$(this).addClass('on').siblings('a').removeClass('on');
			$('.content').load('<?php bloginfo('template_url') ?>/private/tools/'+ $(this).attr('id') +'.php');
		}
		$(this).click(function(){
			$(this).addClass('on').siblings('a').removeClass('on');
			$('.content').load('<?php bloginfo('template_url') ?>/private/tools/'+ $(this).attr('id') +'.php');
		})
	})
})
</script>
  </div>
  </div>
</section>
<?php get_footer(); ?>
