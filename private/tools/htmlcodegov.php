<h2>HTML代码：</h2>
<textarea onmouseover="this.focus();this.select();" class="tarea" id="content"></textarea>
<p>
	<button onclick="javascript();">转为Javascript</button>
	<button onclick="php();">转为PHP</button>
	<button onclick="jsp();">转为JSP</button>
	<button onclick="asp();">转为ASP</button>
	<button onclick="perl();">转为Perl</button>
	<button onclick="sws();">转为Sws</button>
	<button onclick="vbnet();">转为Vb.net</button>
</p>

<h2>转换结果：</h2>
<textarea onmouseover="this.focus();this.select();" class="tarea" id="result"></textarea>
<p>
	<!--    <input type="button" onclick="htmlCov();" value="开始转换" id="conv" class="btn btn-primary">-->
	<input type="button" onclick="copy('result')" value="复制" id="copy" class="btn btn-primary">
	<input type="button" onclick="remove();" value="清空结果" id="remove" class="btn btn-primary">
	<input type="button" onclick="saveCode();" value="保存为文件" id="save" class="btn btn-primary">
</p>
