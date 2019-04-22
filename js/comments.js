/* 表情符号切换
-----------------------------------------------*/
$(function() {
    $("a.et_smilies").click(function() {
        $('#smilies-container').toggle(function() {
            $(document).click(function(event) {
                if (!($(event.target).is('#smilies-container') || $(event.target).parents('#smilies-container').length || $(event.target).is('a.et_smilies'))) {
                    $('#smilies-container').hide(200);
                }
            });
        });
    });
});

//表情颜色弹窗
$(document).ready(function () {   
	$("#comment-smiley").click(function(){   
		$("#smiley").toggle(500);   
	});  
	$("#font-color").click(function(){   
		$("#fontcolor").toggle(500);   
	});   
});   
 /* 评论编辑器
 -----------------------------------------------*/
$(function() { // 评论编辑器
    function addEditor(a, b, c) {
        if (document.selection) {
            a.focus();
            sel = document.selection.createRange();
            c ? sel.text = b + sel.text + c: sel.text = b;
            a.focus()
        } else if (a.selectionStart || a.selectionStart == '0') {
            var d = a.selectionStart;
            var e = a.selectionEnd;
            var f = e;
            c ? a.value = a.value.substring(0, d) + b + a.value.substring(d, e) + c + a.value.substring(e, a.value.length) : a.value = a.value.substring(0, d) + b + a.value.substring(e, a.value.length);
            c ? f += b.length + c.length: f += b.length - e + d;
            if (d == e && c) f -= c.length;
            a.focus();
            a.selectionStart = f;
            a.selectionEnd = f
        } else {
            a.value += b + c;
            a.focus()
        }
    }
    var g = document.getElementById('comment') || 0;
    var h = {
        strong: function() {
            addEditor(g, '<strong>', '</strong>')
        },
        em: function() {
            addEditor(g, '<em>', '</em>')
        },
        del: function() {
            addEditor(g, '<del>', '</del>')
        },
        underline: function() {
            addEditor(g, '<u>', '</u>')
        },
        quote: function() {
            addEditor(g, '<blockquote>', '</blockquote>')
        },
        ahref: function() {
            var a = prompt('请输入链接地址', 'http://');
            var b = prompt('请输入链接描述', '');
            if (a) {
                addEditor(g, '<a target="_blank" href=”' + a + '" rel="external”>' + b + '</a>', '')
            }
        },
        img: function() {
            var a = prompt('请输入图片地址', 'http://');
            if (a) {
                addEditor(g, '<img src="' + a + '" alt="" />', '')
            }
        },
        code: function() {
            addEditor(g, '<code>', '</code>')
        },
        empty: function() {
            g.value = "";
            g.focus()
        },
        red: function() {   
            addEditor(g, '<font color="red">', '</font>')   ;
        },   
        green: function() {   
            addEditor(g, '<font color="green">', '</font>')   ;
        },   
        blue: function() {   
           addEditor(g, '<font color="blue">', '</font>')   ;
        },   
        magenta: function() {   
            addEditor(g, '<font color="magenta">', '</font>')   ;
        },   
        yellow: function() {   
           addEditor(g, '<font color="yellow">', '</font>')   ;
        },   
        chocolate: function() {   
           addEditor(g, '<font color="chocolate">', '</font>')   ;
        },   
        black: function() {   
           addEditor(g, '<font color="black">', '</font>')   ;
        },   
        aquamarine: function() {   
           addEditor(g, '<font color="aquamarine">', '</font>')   ;
        },   
        lime: function() {   
           addEditor(g, '<font color="lime">', '</font>')   ;
        },   
        fuchsia: function() {   
          addEditor(g, '<font color="fuchsia">', '</font>')   ;
        },   
        orange: function() {   
           addEditor(g, '<font color="orange">', '</font>')   ;
        },   
        thistle: function() {   
            addEditor(g, '<font color="thistle">', '</font>')   ;
        },   
        brown: function() {   
            addEditor(g, '<font color="brown">', '</font>')   ;
        },   
        peru: function() {   
            addEditor(g, '<font color="peru">', '</font>')   ;
        },   
        deeppink: function() {   
            addEditor(g, '<font color="deeppink">', '</font>')   ;
        },   
        purple: function() {   
            addEditor(g, '<font color="purple">', '</font>')   ;
        },   
        slategray: function() {   
            addEditor(g, '<font color="slategray">', '</font>')   ;
        },   
        tomato: function() {   
            addEditor(g, '<font color="tomato">', '</font>')   ;
        }   
    };
    window['SIMPALED'] = {};
    window['SIMPALED']['Editor'] = h
});

