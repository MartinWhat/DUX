<script type="text/javascript">
/* <![CDATA[ */
    function grin(tag) {
      var myField;
      tag = ' ' + tag + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
        myField = document.getElementById('comment');
      } else {
        return false;
      }
      if (document.selection) {
        myField.focus();
        sel = document.selection.createRange();
        sel.text = tag;
        myField.focus();
      }
      else if (myField.selectionStart || myField.selectionStart == '0') {
        var startPos = myField.selectionStart;
        var endPos = myField.selectionEnd;
        var cursorPos = startPos;
        myField.value = myField.value.substring(0, startPos)
                + tag
                + myField.value.substring(endPos, myField.value.length);
        cursorPos += tag.length;
        myField.focus();
        myField.selectionStart = cursorPos;
        myField.selectionEnd = cursorPos;
      }      else {
        myField.value += tag;
        myField.focus();
      }
    }
/* ]]> */

</script>

<div id="smiley" style="display: none;">
<div id="smiley1" style=" height: auto;/* position: absolute; */z-index: 3;top: 26px;border-radius: 0 4px 4px 4px;">
<a href="javascript:grin(':huaji:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/huaji.png"  alt="" /></a>
<a href="javascript:grin(':bang:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/bang.png"  alt="" /></a>
<a href="javascript:grin(':smg:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/smg.png"  alt="" /></a>
<a href="javascript:grin(':nsnmn:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/nsnmn.png"  alt="" /></a>
<a href="javascript:grin(':lw:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/lw.png"  alt="" /></a>
<a href="javascript:grin(':mm:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/mm.png"  alt="" /></a>
<a href="javascript:grin(':ng:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/ng.png"  alt="" /></a>
<a href="javascript:grin(':ndd:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/ndd.png"  alt="" /></a>
<a href="javascript:grin(':cb:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/cb.png"  alt="" /></a>
<a href="javascript:grin(':jy:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/jy.png"  alt="" /></a>
<a href="javascript:grin(':tu:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/tu.png"  alt="" /></a>
<a href="javascript:grin(':yw:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/yw.png"  alt="" /></a>
<a href="javascript:grin(':sq:')"      ><img src="<?php bloginfo('template_url'); ?>/img/paopao/sq.png"  alt="" /></a>
</div>
<!--ul style="height: 40px;padding-top: 20px;border-top: 1px solid;">
	<a href="javascript:;" id="smiley4">点我隐藏</a>
<span><a class="4">滑稽</a></span>
</ul-->
<!--a href="javascript:grin(':mrgreen:')"><img src="<?php bloginfo('template_url'); ?>/img/smilies/icon_mrgreen.gif"  alt="" /></a-->
</div>
<div id="fontcolor" style="display: none;">
<a href="javascript:SIMPALED.Editor.red()" style="background-color: red"></a>
<a href="javascript:SIMPALED.Editor.green()" style="background-color: green"></a>
<a href="javascript:SIMPALED.Editor.blue()" style="background-color: blue"></a>
<a href="javascript:SIMPALED.Editor.magenta()" style="background-color: magenta"></a>
<a href="javascript:SIMPALED.Editor.yellow()" style="background-color: yellow"></a>
<a href="javascript:SIMPALED.Editor.chocolate()" style="background-color: chocolate"></a>
<a href="javascript:SIMPALED.Editor.black()" style="background-color: black"></a>
<a href="javascript:SIMPALED.Editor.aquamarine()" style="background-color: aquamarine"></a>
<a href="javascript:SIMPALED.Editor.lime()" style="background-color: lime"></a>
<a href="javascript:SIMPALED.Editor.fuchsia()" style="background-color: fuchsia"></a>
<a href="javascript:SIMPALED.Editor.orange()" style="background-color: orange"></a>
<a href="javascript:SIMPALED.Editor.thistle()" style="background-color: thistle"></a>
<a href="javascript:SIMPALED.Editor.brown()" style="background-color: brown"></a>
<a href="javascript:SIMPALED.Editor.peru()" style="background-color: peru"></a>
<a href="javascript:SIMPALED.Editor.deeppink()" style="background-color: deeppink"></a>
<a href="javascript:SIMPALED.Editor.purple()" style="background-color: purple"></a>
<a href="javascript:SIMPALED.Editor.slategray()" style="background-color: slategray"></a>
<a href="javascript:SIMPALED.Editor.tomato()" style="background-color: tomato"></a>
</div>