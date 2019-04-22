<h2>
	贴入要高亮代码：
	<!--[if IE]>（本功能暂不支持IE浏览器）<![endif]-->
</h2>
<textarea class="tarea" id="code" onmouseover="this.focus();this.select();"><h2 class="demo">贴入要高亮代码：</h2></textarea>
<p>

 <button onclick="doHighlight('text/html');">Html Mix</button>
 <button onclick="doHighlight('text/css');">CSS</button>
 <button onclick="doHighlight('text/javascript');">Javscript</button>
 <button onclick="doHighlight('application/xml');">XML</button>
 <button onclick="doHighlight('application/x-httpd-php');">PHP</button>    
 
 
</p>
<h2>复制以下代码到编辑器（html模式）：</h2>
<textarea class="tarea" id="getcode" style="height: 100px" onmouseover="this.focus();this.select();"></textarea>
<h2 class="sitetip">高亮预览：</h2>
<pre id="output" class="cm-s-default"></pre>