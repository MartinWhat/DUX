<h2>贴入Javascript/HTML代码：</h2>
<textarea onmouseover="this.focus();this.select();"
	style="height: 450px;" id="content" name="content" class="tarea"></textarea>

<p>
	<select name="tabsize" id="tabsize">
		<option value="1" selected="selected"> 制表符缩进 </option>
		<option value="2"> 2个空格缩进 </option>
		<option value="4"> 4个空格缩进 </option>
		<option value="8"> 8个空格缩进 </option>
	</select>
	<button onclick="return do_js_beautify()" id="beautify">格式化</button>
	<button onclick="pack_js(0)">普通压缩</button>
	<button onclick="pack_js(1)">加密压缩</button>
	<button onclick="Empty();">清空</button>
</p>



