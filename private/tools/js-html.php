<div class="content">
		<h2>贴入要转换的Javascript代码:</h2>
<textarea id="code" onfocus="rechange()" onkeyup="rechange()"></textarea>

<br>

<h2>相应的HTML代码: </h2>
<textarea id="result"></textarea>

<script src="//hm.baidu.com/hm.js?4a3d16059170b45c7f772623026671d9"></script><script type="text/javascript">
function rechange(){
	document.getElementById('result').value=document.getElementById('code').value.replace(/document.writeln\("/g,"").replace(/"\);/g,"").replace(/\\\"/g,"\"").replace(/\\\'/g,"\'").replace(/\\\//g,"\/").replace(/\\\\/g,"\\")
}
</script>	</div>

