<style>
.jquerychm{overflow:hidden}
.jquerychm .item{width:20%;float:left}
.jquerychm .item h2,.jquerychm .item h3{margin-right:10px}
.jquerychm h2{background-color:#95B3D7;color:#fff;padding:4px 10px 3px;line-height:20px;font-size:12px}
.jquerychm h3{background-color:#DBE5F1;line-height:20px;color:#444;font-size:12px;padding:2px 10px 1px;font-weight:normal}
.jquerychm a{cursor:pointer;font-family:serif;margin-left:10px}
.jquerychm ul,.jquerychm li{list-style:none;line-height:18px}

#jquerychm ul{list-style:disc}
#jquerychm ol{list-style:decimal}
#jquerychm h2{margin:5px auto;padding:0px 10px;background:rgb(79,129,189);color:#fff;font-weight:bold;font-size:14px}
#jquerychm h2 span{color:#f0f0f0;float:right;font-size:12px;font-weight:normal}
#jquerychm h3{margin:5px auto;padding:0px 10px;background:rgb(149,179,215);color:#fff}
#jquerychm h3 em{float:right}
#jquerychm h3 .version{float:right;color:#000}
#jquerychm h4{margin:5px auto;padding:5px 10px;background:rgb(219,229,241)}
#jquerychm h4 strong{width:360px;display:inline-block}
#jquerychm h4 strong em{color:#000;padding-left:5px}
#jquerychm h4 span{width:255px;display:inline-block}
#jquerychm h4 span em{color:#666;padding-left:20px}
#jquerychm h4 em{display:inline-block;color:#06C}
#jquerychm .desc p{font-size:14px}
#jquerychm .longdesc p{font-size:12px;line-height:1.5;margin:10px 0}
#jquerychm .longdesc strong{font-size:14px}
#jquerychm .longdesc a{font-size:12px}
#jquerychm .longdesc{margin-top:5px}
em.optional{color:#999}
#jquerychm h2 em.optional{color:#eee}
</style>
<h2 class="goback">返回请点击左侧-"Jquery在线手册"</h2>
<div class="jquerychm">
<div class="item">
    <h2>核心</h2>
    <ul>
        <li>
            <h3>jQuery 核心函数</h3>
            <ul>
                <li>
                    <a data-href="jQuery_selector_context.html">jQuery([sel,[context]])</a>
                    </li><li>
                        <a data-href="jQuery_html_ownerDocument.html">jQuery(html,[ownerDoc])</a> <sup>1.8*</sup>
                    </li>
                    <li>
                        <a data-href="jQuery_callback.html">jQuery(callback)</a>
                    </li>
                    <li>
                        <a data-href="jQuery.holdReady.html">jQuery.holdReady(hold)</a> <sup>1.6+</sup>
                    </li>
                </ul>
            </li>
            <li>
                <h3>jQuery 对象访问</h3>
                <ul>
                    <li>
                        <a data-href="each.html">each(callback)</a>
                    </li>
                    <li>
                        <a data-href="size.html">size()</a>
                    </li>
                    <li>
                        <a data-href="length.html">length</a>
                    </li>
                    <li>
                        <a data-href="selector.html">selector</a>
                    </li>
                    <li>
                        <a data-href="context.html">context</a>
                    </li>
                    <li>
                        <a data-href="get.html">get([index])</a>
                    </li>
                    <li>
                        <a data-href="index1.html">index([selector|element])</a>
                    </li>
                </ul>
            </li>
            <li>
                <h3>数据缓存</h3>
                <ul>
                    <li>
                        <a data-href="data.html">data([key],[value])</a>
                    </li>
                    <li>
                        <a data-href="removeData.html">removeData([name|list])</a>
                        <sup>1.7*</sup>
                    </li>
                    <li> <del><a data-href="jQuery.data.html">$.data(ele,[key],[val])</a></del> 
                        <sup>1.8-</sup>
                    </li>
                </ul>
            </li>
            <li>
                <h3>队列控制</h3>
                <ul>
                    <li>
                        <a data-href="queue.html">queue(element,[queueName])</a>
                    </li>
                    <li>
                        <a data-href="dequeue.html">dequeue([queueName])</a>
                    </li>
                    <li>
                        <a data-href="clearQueue.html">clearQueue([queueName])</a>
                    </li>
                </ul>
            </li>
            <li>
                <h3>插件机制</h3>
                <ul>
                    <li>
                        <a data-href="jQuery.fn.extend.html">jQuery.fn.extend(object)</a>
                    </li>
                    <li>
                        <a data-href="jQuery.extend_object.html">jQuery.extend(object)</a>
                    </li>
                </ul>
            </li>
            <li>
                <h3>多库共存</h3>
                <ul>
                    <li>
                        <a data-href="jQuery.noConflict.html">jQuery.noConflict([ex])</a>
                    </li>
                </ul>
            </li>
        </ul>
    <h2>属性</h2>
    <ul>
        <li>
            <h3>属性</h3>
            <ul>
                <li>
                    <a data-href="attr.html">attr(name|pro|key,val|fn)</a>
                </li>
                <li>
                    <a data-href="removeAttr.html">removeAttr(name)</a>
                </li>
                <li>
                    <a data-href="prop.html">prop(name|pro|key,val|fn)</a>
                    <sup>1.6+</sup>
                </li>
                <li>
                    <a data-href="removeProp.html">removeProp(name)</a>
                    <sup>1.6+</sup>
                </li>
            </ul>
        </li>
        <li>
            <h3>CSS 类</h3>
            <ul>
                <li>
                    <a data-href="addClass.html">addClass(class|fn)</a>
                </li>
                <li>
                    <a data-href="removeClass.html">removeClass([class|fn])</a>
                </li>
                <li>
                    <a data-href="toggleClass.html">toggleClass(class|fn[,sw])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>HTML代码/文本/值</h3>
            <ul>
                <li>
                    <a data-href="html.html">html([val|fn])</a>
                </li>
                <li>
                    <a data-href="text.html">text([val|fn])</a>
                </li>
                <li>
                    <a data-href="val.html">val([val|fn|arr])</a>
                </li>
            </ul>
        </li>
    </ul>
    <h2>CSS</h2>
    <ul>
        <li>
            <h3>CSS</h3>
            <ul>
                <li>
                    <a data-href="css.html">css(name|pro|[,val|fn])</a>
                    <sup>1.8*</sup>
                </li>
            </ul>
        </li>
        <li>
            <h3>位置</h3>
            <ul>
                <li>
                    <a data-href="offset.html">offset([coordinates])</a>
                </li>
                <li>
                    <a data-href="position.html">position()</a>
                </li>
                <li>
                    <a data-href="scrollTop.html">scrollTop([val])</a>
                </li>
                <li>
                    <a data-href="scrollLeft.html">scrollLeft([val])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>尺寸</h3>
            <ul>
                <li>
                    <a data-href="height.html">heigh([val|fn])</a>
                </li>
                <li>
                    <a data-href="width.html">width([val|fn])</a>
                </li>
                <li>
                    <a data-href="innerHeight.html">innerHeight()</a>
                </li>
                <li>
                    <a data-href="innerWidth.html">innerWidth()</a>
                </li>
                <li>
                    <a data-href="outerHeight.html">outerHeight([soptions])</a>
                </li>
                <li>
                    <a data-href="outerWidth.html">outerWidth([options])</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="item">
    <h2>选择器</h2>
    <ul>
        <li>
            <h3>基本</h3>
            <ul>
                <li>
                    <a data-href="id.html">#id</a>
                </li>
                <li>
                    <a data-href="element.html">element</a>
                </li>
                <li>
                    <a data-href="class.html">.class</a>
                </li>
                <li>
                    <a data-href="all.html">*</a>
                </li>
                <li>
                    <a data-href="multiple.html">selector1,selector2,selectorN</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>层级</h3>
            <ul>
                <li>
                    <a data-href="descendant.html">ancestor descendant</a>
                </li>
                <li>
                    <a data-href="child.html">parent &gt;  child</a>
                </li>
                <li>
                    <a data-href="next_1.html">prev + next</a>
                </li>
                <li>
                    <a data-href="siblings_1.html">prev ~ siblings</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>基本</h3>
            <ul>
                <li>
                    <a data-href="first_1.html">:first</a>
                </li>
                <li>
                    <a data-href="last_1.html">:last</a>
                </li>
                <li>
                    <a data-href="not_1.html">:not(selector)</a>
                </li>
                <li>
                    <a data-href="even.html">:even</a>
                </li>
                <li>
                    <a data-href="odd.html">:odd</a>
                </li>
                <li>
                    <a data-href="eq_1.html">:eq(index)</a>
                </li>
                <li>
                    <a data-href="gt.html">:gt(index)</a>
                </li>
                <li>
                    <a data-href="lt.html">:lt(index)</a>
                </li>
                <li>
                    <a data-href="header.html">:header</a>
                </li>
                <li>
                    <a data-href="animated.html">:animated</a>
                </li>
                <li>
                    <a data-href="focus_1.html">:focus</a>
                    <sup>1.6+</sup>
                </li>
            </ul>
        </li>
        <li>
            <h3>内容</h3>
            <ul>
                <li>
                    <a data-href="contains.html">:contains(text)</a>
                </li>
                <li>
                    <a data-href="empty_1.html">:empty</a>
                </li>
                <li>
                    <a data-href="has_1.html">:has(selector)</a>
                </li>
                <li>
                    <a data-href="parent_1.html">:parent</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>可见性</h3>
            <ul>
                <li>
                    <a data-href="hidden_1.html">:hidden</a>
                </li>
                <li>
                    <a data-href="visible.html">:visible</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>属性</h3>
            <ul>
                <li>
                    <a data-href="attributeHas.html">[attribute]</a>
                </li>
                <li>
                    <a data-href="attributeEquals.html">[attribute=value]</a>
                </li>
                <li>
                    <a data-href="attributeNotEqual.html">[attribute!=value]</a>
                </li>
                <li>
                    <a data-href="attributeStartsWith.html">[attribute^=value]</a>
                </li>
                <li>
                    <a data-href="attributeEndsWith.html">[attribute$=value]</a>
                </li>
                <li>
                    <a data-href="attributeContains.html">[attribute*=value]</a>
                </li>
                <li>
                    <a data-href="attributeMultiple.html">[attrSel1][attrSel2][attrSelN]</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>子元素</h3>
            <ul>
                <li>
                    <a data-href="nthChild.html">:nth-child</a>
                </li>
                <li>
                    <a data-href="firstChild.html">:first-child</a>
                </li>
                <li>
                    <a data-href="lastChild.html">:last-child</a>
                </li>
                <li>
                    <a data-href="onlyChild.html">:only-child</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>表单</h3>
            <ul>
                <li>
                    <a data-href="input.html">:input</a>
                </li>
                <li>
                    <a data-href="text_1.html">:text</a>
                </li>
                <li>
                    <a data-href="password.html">:password</a>
                </li>
                <li>
                    <a data-href="radio.html">:radio</a>
                </li>
                <li>
                    <a data-href="checkbox.html">:checkbox</a>
                </li>
                <li>
                    <a data-href="submit_1.html">:submit</a>
                </li>
                <li>
                    <a data-href="image.html">:image</a>
                </li>
                <li>
                    <a data-href="reset.html">:reset</a>
                </li>
                <li>
                    <a data-href="button.html">:button</a>
                </li>
                <li>
                    <a data-href="file.html">:file</a>
                </li>
                <li>
                    <a data-href="hidden_1.html">:hidden</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>表单对象属性</h3>
            <ul>
                <li>
                    <a data-href="enabled.html">:enabled</a>
                </li>
                <li>
                    <a data-href="disabled.html">:disabled</a>
                </li>
                <li>
                    <a data-href="checked.html">:checked</a>
                </li>
                <li>
                    <a data-href="selected.html">:selected</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="item">
    <h2>文档处理</h2>
    <ul>
        <li>
            <h3>内部插入</h3>
            <ul>
                <li>
                    <a data-href="append.html">append(content|fn)</a>
                </li>
                <li>
                    <a data-href="appendTo.html">appendTo(content)</a>
                </li>
                <li>
                    <a data-href="prepend.html">prepend(content|fn)</a>
                </li>
                <li>
                    <a data-href="prependTo.html">prependTo(content)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>外部插入</h3>
            <ul>
                <li>
                    <a data-href="after.html">after(content|fn)</a>
                </li>
                <li>
                    <a data-href="before.html">before(content|fn)</a>
                </li>
                <li>
                    <a data-href="insertAfter.html">insertAfter(content)</a>
                </li>
                <li>
                    <a data-href="insertBefore.html">insertBefore(content)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>包裹</h3>
            <ul>
                <li>
                    <a data-href="wrap.html">wrap(html|ele|fn)</a>
                </li>
                <li>
                    <a data-href="unwrap.html">unwrap()</a>
                </li>
                <li>
                    <a data-href="wrapAll.html">wrapall(html|ele)</a>
                </li>
                <li>
                    <a data-href="wrapInner.html">wrapInner(html|ele|fn)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>替换</h3>
            <ul>
                <li>
                    <a data-href="replaceWith.html">replaceWith(content|fn)</a>
                </li>
                <li>
                    <a data-href="replaceAll.html">replaceAll(selector)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>删除</h3>
            <ul>
                <li>
                    <a data-href="empty.html">empty()</a>
                </li>
                <li>
                    <a data-href="remove.html">remove([expr])</a>
                </li>
                <li>
                    <a data-href="detach.html">detach([expr])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>复制</h3>
            <ul>
                <li>
                    <a data-href="clone.html">clone([Even[,deepEven]])</a>
                </li>
            </ul>
        </li>
    </ul>
    <h2>筛选</h2>
    <ul>
        <li>
            <h3>过滤</h3>
            <ul>
                <li>
                    <a data-href="eq.html">eq(index|-index)</a>
                </li>
                <li>
                    <a data-href="first.html">first()</a>
                </li>
                <li>
                    <a data-href="last.html">last()</a>
                </li>
                <li>
                    <a data-href="hasClass.html">hasClass(class)</a>
                </li>
                <li>
                    <a data-href="filter.html">filter(expr|obj|ele|fn)</a>
                </li>
                <li>
                    <a data-href="is.html">is(expr|obj|ele|fn)</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="map.html">map(callback)</a>
                </li>
                <li>
                    <a data-href="has.html">has(expr|ele)</a>
                </li>
                <li>
                    <a data-href="not.html">not(expr|ele|fn)</a>
                </li>
                <li>
                    <a data-href="slice.html">slice(start,[end])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>查找</h3>
            <ul>
                <li>
                    <a data-href="children.html">children([expr])</a>
                </li>
                <li>
                    <a data-href="closest.html">closest(expr,[con]|obj|ele)</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="find.html">find(expr|obj|ele)</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="next.html">next([expr])</a>
                </li>
                <li>
                    <a data-href="nextAll.html">nextall([expr])</a>
                </li>
                <li>
                    <a data-href="nextUntil.html">nextUntil([exp|ele][,fil])</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="offsetParent.html">offsetParent()</a>
                </li>
                <li>
                    <a data-href="parent.html">parent([expr])</a>
                </li>
                <li>
                    <a data-href="parents.html">parents([expr])</a>
                </li>
                <li>
                    <a data-href="parentsUntil.html">parentsUntil([exp|ele][,fil])</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="prev.html">prev([expr])</a>
                </li>
                <li>
                    <a data-href="prevAll.html">prevall([expr])</a>
                </li>
                <li>
                    <a data-href="prevUntil.html">prevUntil([exp|ele][,fil])</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="siblings.html">siblings([expr])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>串联</h3>
            <ul>
                <li>
                    <a data-href="add.html">add(expr|ele|html|obj[,con])</a>
                </li>
                <li>
                    <a data-href="andSelf.html">andSelf()</a>
                </li>
                <li>
                    <a data-href="contents.html">contents()</a>
                </li>
                <li>
                    <a data-href="end.html">end()</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="item">
    <h2>事件</h2>
    <ul>
        <li>
            <h3>页面载入</h3>
            <ul>
                <li>
                    <a data-href="ready.html">ready(fn)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>事件处理</h3>
            <ul>
                <li>
                    <a data-href="on.html">on(eve,[sel],[data],fn)</a>
                    <sup>1.7+</sup>
                </li>
                <li>
                    <a data-href="off.html">off(eve,[sel],[fn])</a>
                    <sup>1.7+</sup>
                </li>
                <li>
                    <a data-href="bind.html">bind(type,[data],fn)</a>
                </li>
                <li>
                    <a data-href="one.html">one(type,[data],fn)</a>
                </li>
                <li>
                    <a data-href="trigger.html">trigger(type,[data])</a>
                </li>
                <li>
                    <a data-href="triggerHandler.html">triggerHandler(type, [data])</a>
                </li>
                <li>
                    <a data-href="unbind.html">unbind(type,[data|fn])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>事件委派</h3>
            <ul>
                <li>
                    <a data-href="live.html">live(type,[data],fn)</a>
                </li>
                <li>
                    <a data-href="die.html">die(type,[fn])</a>
                </li>
                <li>
                    <a data-href="delegate.html">delegate(sel,[type],[data],fn)</a>
                </li>
                <li>
                    <a data-href="undelegate.html">undelegate([sel,[type],fn])</a>
                    <sup>1.6*</sup>
                </li>
            </ul>
        </li>
        <li>
            <h3>事件切换</h3>
            <ul>
                <li>
                    <a data-href="hover.html">hover([over,]out)</a>
                </li>
                <li>
                    <a data-href="toggle.html">toggle(fn, fn2, [fn3, fn4, ...])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>事件</h3>
            <ul>
                <li>
                    <a data-href="blur.html">blur([[data],fn])</a>
                </li>
                <li>
                    <a data-href="change.html">change([[data],fn])</a>
                </li>
                <li>
                    <a data-href="click.html">click([[data],fn])</a>
                </li>
                <li>
                    <a data-href="dblclick.html">dblclick([[data],fn])</a>
                </li>
                <li>
                    <a data-href="error.html">error([[data],fn])</a>
                </li>
                <li>
                    <a data-href="focus.html">focus([[data],fn])</a>
                </li>
                <li>
                    <a data-href="focusin.html">focusin([data],fn)</a>
                </li>
                <li>
                    <a data-href="focusout.html">focusout([data],fn)</a>
                </li>
                <li>
                    <a data-href="keydown.html">keydown([[data],fn])</a>
                </li>
                <li>
                    <a data-href="keypress.html">keypress([[data],fn])</a>
                </li>
                <li>
                    <a data-href="keyup.html">keyup([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mousedown.html">mousedown([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mouseenter.html">mouseenter([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mouseleave.html">mouseleave([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mousemove.html">mousemove([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mouseout.html">mouseout([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mouseover.html">mouseover([[data],fn])</a>
                </li>
                <li>
                    <a data-href="mouseup.html">mouseup([[data],fn])</a>
                </li>
                <li>
                    <a data-href="resize.html">resize([[data],fn])</a>
                </li>
                <li>
                    <a data-href="scroll.html">scroll([[data],fn])</a>
                </li>
                <li>
                    <a data-href="select.html">select([[data],fn])</a>
                </li>
                <li>
                    <a data-href="submit.html">submit([[data],fn])</a>
                </li>
                <li>
                    <a data-href="unload.html">unload([[data],fn])</a>
                </li>
            </ul>
        </li>
    </ul>
    <h2>Deferred</h2>
    <ul>
        <li>
            <a data-href="deferred.done.html">def.done(donCal,[donCal])</a>
        </li>
        <li>
            <a data-href="deferred.fail.html">def.fail(failCallbacks)</a>
        </li>
        <li> <del><a data-href="deferred.isRejected.html">def.isRejected()</a></del> 
            <sup>1.8-</sup>
        </li>
        <li>
            <del>
                <a data-href="deferred.isResolved.html">def.isResolved()</a>
            </del>
            <sup>1.8-</sup>
        </li>
        <li>
            <a data-href="deferred.reject.html">def.reject(args)</a>
        </li>
        <li>
            <a data-href="deferred.rejectWith.html">def.rejectWith(context,[args])</a>
        </li>
        <li>
            <a data-href="deferred.resolve.html">def.resolve(args)</a>
        </li>
        <li>
            <a data-href="deferred.resolveWith.html">def.resolveWith(context,[args])</a>
        </li>
        <li>
            <a data-href="deferred.then.html">def.then(doneCal,failCals)</a>
            <sup>1.7*</sup>
        </li>
        <li>
            <a data-href="deferred.promise.html">def.promise([type],[target])</a>
            <sup>1.6+</sup>
        </li>
        <li>
            <a data-href="deferred.pipe.html">def.pipe([donl],[fai],[pro])</a>
            <sup>1.7*</sup>
        </li>
        <li>
            <a data-href="deferred.always.html">def.always(alwCal,[alwCal])</a>
            <sup>1.6+</sup>
        </li>
        <li>
            <a data-href="deferred.notify.html">def.notify(args)</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="deferred.notifyWith.html">def.notifyWith(con,[args])</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="deferred.progress.html">def.progress(proCal)</a>
            <sup>1.7+</sup>
        </li>

        <li>
            <a data-href="deferred.state.html">def.state()</a>
            <sup>1.7+</sup>
        </li>
    </ul>

    <h2>Callbacks</h2>
    <ul>
        <li>
            <a data-href="callbacks.add.html">cal.add(callbacks)</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.disable.html">cal.disable()</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.empty.html">cal.empty()</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.fire.html">cal.fire(arguments)</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.fired.html">cal.fired()</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.fireWith.html">cal.fireWith([context] [, args])</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.has.html">cal.has(callback)</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.lock.html">cal.lock()</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.locked.html">cal.locked()</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="callbacks.remove.html">cal.remove(callbacks)</a>
            <sup>1.7+</sup>
        </li>
        <li>
            <a data-href="jQuery.callbacks.html">$.callbacks(flags)</a>
            <sup>1.7+</sup>
        </li>
    </ul>
</div>
<div class="item">
    <h2>ajax</h2>
    <ul>
        <li>
            <h3>ajax 请求</h3>
            <ul>
                <li>
                    <a data-href="jQuery.ajax.html">$.ajax(url,[settings])</a>
                </li>
                <li>
                    <a data-href="load.html">load(url,[data],[callback])</a>
                </li>
                <li>
                    <a data-href="jQuery.get.html">$.get(url,[data],[fn],[type])</a>
                </li>
                <li>
                    <a data-href="jQuery.getJSON.html">$.getJSON(url,[data],[fn])</a>
                </li>
                <li>
                    <a data-href="jQuery.getScript.html">$.getScript(url,[callback])</a>
                </li>
                <li>
                    <a data-href="jQuery.post.html">$.post(url,[data],[fn],[type])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>ajax 事件</h3>
            <ul>
                <li>
                    <a data-href="ajaxComplete.html">ajaxComplete(callback)</a>
                </li>
                <li>
                    <a data-href="ajaxError.html">ajaxError(callback)</a>
                </li>
                <li>
                    <a data-href="ajaxSend.html">ajaxSend(callback)</a>
                </li>
                <li>
                    <a data-href="ajaxStart.html">ajaxStart(callback)</a>
                </li>
                <li>
                    <a data-href="ajaxStop.html">ajaxStop(callback)</a>
                </li>
                <li>
                    <a data-href="ajaxSuccess.html">ajaxSuccess(callback)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>其它</h3>
            <ul>
                <li>
                    <a data-href="jQuery.ajaxSetup.html">$.ajaxSetup([options])</a>
                </li>
                <li>
                    <a data-href="serialize.html">serialize()</a>
                </li>
                <li>
                    <a data-href="http://www.css119.com/jquery/serializearray.html">serializearray()</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>URL</h3>
            <ul>
                <li>
                    <a data-href="jQuery.param.html">$.param(obj,[traditional])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>插件编写</h3>
            <ul>
                <li>
                    <a data-href="jQuery.error.html">$.error(message)</a>
                </li>
            </ul>
        </li>
    </ul>
    <h2>效果</h2>
    <ul>
        <li>
            <h3>基本</h3>
            <ul>
                <li>
                    <a data-href="show.html">show([speed,[easing],[fn]])</a>
                </li>
                <li>
                    <a data-href="hide.html">hide([speed,[easing],[fn]])</a>
                </li>
                <li>
                    <a data-href="toggle.html">toggle([speed],[easing],[fn])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>滑动</h3>
            <ul>
                <li>
                    <a data-href="slideDown.html">slideDown([spe],[eas],[fn])</a>
                </li>
                <li>
                    <a data-href="slideUp.html">slideUp([speed,[easing],[fn]])</a>
                </li>
                <li>
                    <a data-href="slideToggle.html">slideToggle([speed],[easing],[fn])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>淡入淡出</h3>
            <ul>
                <li>
                    <a data-href="fadeIn.html">fadeIn([speed],[eas],[fn])</a>
                </li>
                <li>
                    <a data-href="fadeOut.html">fadeOut([speed],[eas],[fn])</a>
                </li>
                <li>
                    <a data-href="fadeTo.html">fadeTo([[spe],opa,[eas],[fn]])</a>
                </li>
                <li>
                    <a data-href="fadeToggle.html">fadeToggle([speed,[eas],[fn]])</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>自定义</h3>
            <ul>
                <li>
                    <a data-href="animate.html">animate(par,[spe],[e],[fn])</a>
                    <sup>1.8*</sup>
                </li>
                <li>
                    <a data-href="stop.html">stop([cle],[jum])</a>
                    <sup>1.7*</sup>
                </li>
                <li>
                    <a data-href="delay.html">delay(duration,[queueName])</a>
                </li>
            </ul>
            </li><li>
                <h3>设置</h3>
                <ul>
                    <li>
                        <a data-href="jQuery.fx.off.html">jQuery.fx.off</a>
                    </li>
                    <li>
                        <a data-href="jQuery.fx.interval.html">jQuery.fx.interval</a>
                </li>
            </ul>
        </li>
    </ul>
    <h2>工具</h2>
    <ul>
        <li>
            <h3>浏览器及特性检测</h3>
            <ul>
                <li>
                    <a data-href="jQuery.support.html">$.support</a>
                </li>
                <li>
                    <a data-href="jQuery.browser.html">$.browser</a>
                </li>
                <li>
                    <a data-href="jQuery.browser.version.html">$.browser.version</a>
                </li>
                <li>
                    <a data-href="jQuery.boxModel.html">$.boxModel</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>数组和对象操作</h3>
            <ul>
                <li>
                    <a data-href="jQuery.each.html">$.each(object,[callback])</a>
                </li>
                <li>
                    <a data-href="jQuery.extend.html">$.extend([d],tgt,obj1,[objN])</a>
                </li>
                <li>
                    <a data-href="jQuery.grep.html">$.grep(array,fn,[invert])</a>
                </li>
                <li>
                    <a data-href="jQuery.sub.html">$.sub()</a>
                </li>
                <li>
                    <a data-href="jQuery.when.html">$.when(deferreds)</a>
                </li>
                <li>
                    <a data-href="jQuery.makeArray.html">$.makearray(obj)</a>
                </li>
                <li>
                    <a data-href="jQuery.map.html">$.map(arr|obj,callback)</a>
                    <sup>1.6*</sup>
                </li>
                <li>
                    <a data-href="jQuery.inArray.html">$.inarray(val,arr,[from])</a>
                </li>
                <li>
                    <a data-href="http://www.css119.com/jquery/jQuery.toarray.html">$.toarray()</a>
                </li>
                <li>
                    <a data-href="jQuery.merge.html">$.merge(first,second)</a>
                </li>
                <li>
                    <a data-href="jQuery.unique.html">$.unique(array)</a>
                </li>
                <li>
                    <a data-href="jQuery.parseJSON.html">$.parseJSON(json)</a>
                </li>
            </ul>
        </li>
        <li>
            <h3>函数操作</h3>
            <ul>
                <li>
                    <a data-href="jQuery.noop.html">$.noop</a>
                    </li><li>
                        <a data-href="jQuery.proxy.html">$.proxy(function,context)</a>
                    </li>
                </ul>
                </li><li>
                    <h3>测试操作</h3>
                    <ul>
                        <li>
                            <a data-href="jQuery.contains.html">$.contains(container,contained)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.type.html">$.type(obj)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.isArray.html">$.isarray(obj)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.isFunction.html">$.isFunction(obj)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.isEmptyObject.html">$.isEmptyObject(obj)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.isPlainObject.html">$.isPlainObject(obj)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.isWindow.html">$.isWindow(obj)</a>
                        </li>
                        <li>
                            <a data-href="jQuery.isNumeric.html">$.isNumeric(value)</a>
                            <sup>1.7+</sup>
                        </li>
                    </ul>
                </li>
                <li>
                    <h3>字符串操作</h3>
                    <ul>
                        <li>
                            <a data-href="jQuery.trim.html">$.trim(str)</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
    </ul>
</div>
</div>

<script>
+(function($){
    $('.item a').each(function(e){
        $(this).on('click', function(){
            $.get('/wp-content/themes/xiu-new/private/tools/jquery.1.8.0/'+$(this).attr('data-href'), function(data){
                $('.item').removeClass().attr('id', 'item').html(data)
                $('#item pre').addClass('prettyprint linenums')
                window.prettyPrint && prettyPrint();
            })
        })
    })
})(window.jQuery);
</script>