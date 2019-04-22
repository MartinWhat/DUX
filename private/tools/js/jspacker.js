// JavaScript Document
/*JS/HTML格式*/
function do_js_beautify() {
	document.getElementById('beautify').disabled = true;
	var js_source = document.getElementById('content').value.replace(/^\s+/, '');
	var tabsize = document.getElementById('tabsize').value;
	var tabchar = ' ';
	if (tabsize == 1) {
		tabchar = '\t';
	}
	if (js_source && js_source.charAt(0) === '<') {
		document.getElementById('content').value = style_html(js_source, tabsize, tabchar, 80);
	} else {
		document.getElementById('content').value = js_beautify(js_source, tabsize, tabchar);
	}
	document.getElementById('beautify').disabled = false;
	return false;
}
function pack_js(base64) {
	var input = document.getElementById('content').value;
	var packer = new Packer;
	if (base64) {
		var output = packer.pack(input, 1, 0);
	} else {
		var output = packer.pack(input, 0, 0);
	}
	document.getElementById('content').value = output;
}
function Empty() {
	document.getElementById('content').value = '';
	document.getElementById('content').select();
}
function GetFocus() {
	document.getElementById('content').focus();
}