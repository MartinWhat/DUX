<?php /*
    Template Name: 视频解析
    author: 诗梦
    url: https://www.mom1.cn/2543.html
    */
?>
<?php get_header(); ?>
<style type="text/css">
#primary {
    width: 100%;
}
.contact-page {
    margin: 40px 0;
}
#contact label {
    display: block;
    margin: 0 0 0 30px;
    padding: 5px 0;
}
#contact input, #contact textarea {
    background: #fff;
    margin: 0 0 0 30px;
    padding: 6px;
    width: 40%;
    border: 1px solid #ebebeb;
    border-radius: 2px;
    -webkit-appearance: none;
}
#contact textarea {
    width: 80%;
}
#contact input[type="submit"]{
    border: none;
    padding: 0 5px;
    height: 42px;
    margin-top: 10px;
    cursor: pointer;
    background: #0088cc;
    color: #fff;
    border-radius: 2px;
}
#contact input[type="submit"]:hover{
    background: #666;
    border-radius: 2px;
    transition: all 0.2s ease-in 0s;
}
.errormsg, .successmsg{
    color: #d80000;
    padding: 10px;
    border-radius: 2px;
}
.successmsg {
    background: #91c24f;
}
.tcha {
    margin: 0 0 0 30px;
}
.logos_lists .wait,.logos_lists dl dd,
.logos_lists h4{font-size:14px;font-family:"Microsoft Yahei","脦垄脠铆脩脜潞脷"}
.logos_lists h4{padding:10px 0;text-align:left;color:#666;font-weight:400}
.logos_lists dl{float:left;position:relative;padding:16px 14px;margin:10px;background:#fff;border:1px solid #ededed;border-radius:5px;-webkit-transition:border linear .2s,box-shadow linear .2s;-moz-transition:border linear .2s,box-shadow linear .2s;-o-transition:border linear .2s,box-shadow linear .2s;transition:border linear .2s,box-shadow linear .2s}.logos_lists dl:hover{border-color:rgba(82,168,236,.8);outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6)}.logos_lists dl dt img{width:110px}.logos_lists dl dd{display:none;color:#262626}.logos_lists .wait{float:left;margin:10px;padding:26px 14px;color:#999}.head-v3{position:relative;z-index:100;min-width:1000px}.head-v3 .navigation-inner{position:relative;margin:0 auto;width:980px}.navigation-up{height:60px;background:#00b7ee}.navigation-up .navigation-v3{float:left;margin-left:155px}.navigation-up .navigation-v3 ul{float:left}.navigation-up .navigation-v3 li{float:left;color:#fff;font:400 16px/59px "microsoft yahei"}.navigation-up .navigation-v3 .nav-up-selected,.navigation-up .navigation-v3 .nav-up-selected-inpage{background:#6fd3f1}.navigation-up .navigation-v3 li h2{margin:0;padding:0;font-weight:400}.navigation-up .navigation-v3 li h2 a{display:inline-block;padding:0 25px;height:60px;color:#fff;font-family:"microsoft yahei"}#footer{margin-top:30px;color:#111;text-align:center}z
</style>
    <div>
        <table class="table table-bordered" style="background: #000">
            <tbody>
                <div class="col-md-14 column">
                    <div class="panel panel-default">
                        <div id="kj" class="panel-body">
                            <iframe src="https://aikan-tv.com/?url=https://v.qq.com/x/page/g0629ipkecb.html" id="player" width="100%" height="400px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
                <tr>
                <font color=#0000CD>
                    <marquee direction="left" behavior="scroll" scrollamount="10" bgcolor="" width=100% height="100%" scrolldelay="100%">
                （使用方法：将要播放的VIP视频网址粘贴输入框。目前支持爱奇艺、优酷、乐视、芒果、腾讯等等VIP视频解析。例如:http://www.iqiyi.com/v_19rr97y2lo.html）请勿相信或者点击任何视频广告，本服务使用完全免费！
                    </marquee>
                </font>
                <br><br>
                <div class="col-md-14 column">
                    <form method="post" id="khname">
                        <div class="input-group" style="width: 100%;">
                            <span class="input-group-addon input-lg" style="width: 80px; ">接口</span>
                            <select class="form-control input-lg" id="jk">
								<option rel="nofollow" value="https://aikan-tv.com/?url=" selected>通用1号解析</option>
                                <option rel="nofollow" value="https://jiexi.071811.cc/jx.php?url=">通用2号解析（维护中）</option> <!--(优酷、乐视、爱奇艺、腾讯、芒果、PPTV、搜狐)-->                            
                                <option rel="nofollow" value="http://yun.baiyug.cn/vip/?url=">万能通用3号解析</option>
                            </select>
                        </div>
                    <br>
                    <div class="input-group" style="width: 100%;">
                        <span class="input-group-addon input-lg" style="width: 80px;">播放地址</span>
                        <input class="form-control input-lg" type="search" placeholder="输入视频页面网址" id="url">
                    </div>
                    <br>
                    <div>
                    <button id="bf" type="button" class="btn btn-primary btn-lg btn-block" onclick="dihejk()">点击播放</button>
							<center>
							<h2>公告</h2><br>
							<h3>2018-05-16 更新3号解析API</h3>
							<h3>2017-12-20 更新解析API</h3>
							</center>
								<div class="logos_lists" style="margin-left:30px;">					
									<dl>
										<a target="_blank" href="http://vip.iqiyi.com/"><img src="../logo/aqylogo.png" width="150" height="50" alt=""></a>							
										<dd>爱奇艺视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://film.qq.com/"><img src="../logo/qqlogo.png" width="150" height="50" alt=""></a>
										<dd>腾讯视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://vip.youku.com/"><img src="../logo/youkulogo.png" width="150" height="50" alt=""></a>
										<dd>优酷视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://vip.tudou.com/index.html"><img src="../logo/tudoulogo.png" width="150" height="50" alt=""></a>
										<dd>土豆视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://www.56.com/"><img src="../logo/56logo.png" width="150" height="50" alt=""></a>
										<dd>56视频</dd>
									</dl><br>
									<dl>
										<a target="_blank" href="http://movie.ku6.com/"><img src="../logo/ku6logo.png" width="150" height="50" alt=""></a>
										<dd>酷6视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://yuanxian.le.com/?ref=ym0101"><img src="../logo/letvlogo.png" width="150" height="50" alt=""></a>
										<dd>乐视TV视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://www.fun.tv/"><img src="../logo/fxw.png" width="150" height="50" alt=""></a>
										<dd>风行网</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://www.mgtv.com/vip/"><img src="../logo/hunantvlogo.png" width="150" height="50" alt=""></a>
										<dd>芒果TV视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://tv.sohu.com/"><img src="../logo/sohulogo.png" width="150" height="50" alt=""></a>
										<dd>搜狐视频</dd>
									</dl><br>
									<dl>
										<a target="_blank" href="http://www.pptv.com/"><img src="../logo/pps.png" width="150" height="50" alt=""></a>
										<dd>PPTV</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://www.bilibili.com/"><img src="../logo/bilibili.jpg" width="150" height="50" alt=""></a>
										<dd>哔哩哔哩</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://www.acfun.cn/"><img src="../logo/acfun.png" width="150" height="50" alt=""></a>
										<dd>ACFUN</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://v.huya.com/"><img src="../logo/huya.png" width="150" height="50" alt=""></a>
										<dd>虎牙视频</dd>
									</dl>
									<dl>
										<a target="_blank" href="http://www.yinyuetai.com/"><img src="../logo/yinyuetailogo.png" width="150" height="50" alt=""></a>
										<dd>音悦台MV</dd>							
									</dl>
								
								</div>						
                    <footer id="colophon" class="site-footer wow fadeInUp" data-wow-delay="0.3s" role="contentinfo"><div class="site-info">
             </tbody>
         </table>
</div>
<script type='text/javascript' src='//cdn.bootcss.com/jquery/1.12.4/jquery.min.js'></script>
<script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.form.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#contact').ajaxForm(function(data) {
if (data==1){
                    $('#success').fadeIn("slow");
                    $('#bademail').fadeOut("slow");
                    $('#badserver').fadeOut("slow");
                    $('#contact').resetForm();
                }
else if (data==2){
                    $('#badserver').fadeIn("slow");
                }
else if (data==3)
                {
                    $('#bademail').fadeIn("slow");
                }
            });
        });
    </script>
<script type='text/javascript' src='//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://www.wc1234.cn/wp-content/themes/dux/js/loader.js?ver=3.0></script>
<script type='text/javascript' src='https://www.wc1234.cn/wp-includes/js/wp-embed.min.js?ver=4.7.5'></script>
<script type='text/javascript' src='https://www.wc1234.cn/wp-content/themes/dux/js/comments.js'></script>
<footer class="footer">
	<div class="container">
						<p>&copy; 2017 <a href="https://www.wc1234.cn">沃茨博客</a> &nbsp; <a target="_blank" href="../xmlsitemap.xml">网站地图</a><br><br><a target="_blank"
 href="http://www.miitbeian.gov.cn/">粤ICP备17048827号-1</a><br><br>
<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44133002100080"><img src="//www.wc1234.cn/logo/ghs.png"/>粤公网安备 44133002100080号</a><br><br><a  target="_blank" href="http://webscan.360.cn/"><img src="../logo/360.png" /></a>  <a id="_pinganTrust" target="_blank" href="http://c.trustutn.org/show?type=1&sn=201705061005188761"><img src="../logo/50.png" /></a>  <a  target="_blank" href="https://console.qcloud.com/dayu/url"><img src="../logo/qq.png" /> </a>  <a  target="_blank" href="https://www.upyun.com/"><img src="../logo/yun.png" /> </a>
</p>
		<!-- 百度统计代码 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e5d46284a00c414819de07124f1d7cb7";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>	</div>
</footer>

<script>
window.jsui={
    www: 'https://www.wc1234.cn',
    uri: 'https://www.wc1234.cn/wp-content/themes/dux',
    ver: '1.8',
	roll: [],
    ajaxpager: '0',
    url_rp: 'https://www.wc1234.cn/respwd'
};
</script>
<!--FOOTER_CODE_START-->
<!-- 百度自动推送 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- 360好搜自动推送 -->
<!-- 动态背景JS -->
<!--script type="text/javascript" src="https://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script-->
<!--FOOTER_CODE_END-->
</body>
</html>