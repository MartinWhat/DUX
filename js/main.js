if( !window.console ){
    window.console = {
        log: function(){}
    }
}


/*!
 * jQuery resizeend - A jQuery plugin that allows for window resize-end event handling.
 * 
 * Copyright (c) 2015 Erik Nielsen
 * 
 * Licensed under the MIT license:
 *    http://www.opensource.org/licenses/mit-license.php
 * 
 * Project home:
 *    http://312development.com
 * 
 * Version:  0.2.0
 * 
 */
!function(a){var b=window.Chicago||{utils:{now:Date.now||function(){return(new Date).getTime()},uid:function(a){return(a||"id")+b.utils.now()+"RAND"+Math.ceil(1e5*Math.random())},is:{number:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},fn:function(a){return"function"==typeof a},object:function(a){return"[object Object]"===Object.prototype.toString.call(a)}},debounce:function(a,b,c){var d;return function(){var e=this,f=arguments,g=function(){d=null,c||a.apply(e,f)},h=c&&!d;d&&clearTimeout(d),d=setTimeout(g,b),h&&a.apply(e,f)}}},$:window.jQuery||null};if("function"==typeof define&&define.amd&&define("chicago",function(){return b.load=function(a,c,d,e){var f=a.split(","),g=[],h=(e.config&&e.config.chicago&&e.config.chicago.base?e.config.chicago.base:"").replace(/\/+$/g,"");if(!h)throw new Error("Please define base path to jQuery resize.end in the requirejs config.");for(var i=0;i<f.length;){var j=f[i].replace(/\./g,"/");g.push(h+"/"+j),i+=1}c(g,function(){d(b)})},b}),window&&window.jQuery)return a(b,window,window.document);if(!window.jQuery)throw new Error("jQuery resize.end requires jQuery")}(function(a,b,c){a.$win=a.$(b),a.$doc=a.$(c),a.events||(a.events={}),a.events.resizeend={defaults:{delay:250},setup:function(){var b,c=arguments,d={delay:a.$.event.special.resizeend.defaults.delay};a.utils.is.fn(c[0])?b=c[0]:a.utils.is.number(c[0])?d.delay=c[0]:a.utils.is.object(c[0])&&(d=a.$.extend({},d,c[0]));var e=a.utils.uid("resizeend"),f=a.$.extend({delay:a.$.event.special.resizeend.defaults.delay},d),g=f,h=function(b){g&&clearTimeout(g),g=setTimeout(function(){return g=null,b.type="resizeend.chicago.dom",a.$(b.target).trigger("resizeend",b)},f.delay)};return a.$(this).data("chicago.event.resizeend.uid",e),a.$(this).on("resize",a.utils.debounce(h,100)).data(e,h)},teardown:function(){var b=a.$(this).data("chicago.event.resizeend.uid");return a.$(this).off("resize",a.$(this).data(b)),a.$(this).removeData(b),a.$(this).removeData("chicago.event.resizeend.uid")}},function(){a.$.event.special.resizeend=a.events.resizeend,a.$.fn.resizeend=function(b,c){return this.each(function(){a.$(this).on("resizeend",b,c)})}}()});



(function(r){r.fn.qrcode=function(h){var s;function u(a){this.mode=s;this.data=a}function o(a,c){this.typeNumber=a;this.errorCorrectLevel=c;this.modules=null;this.moduleCount=0;this.dataCache=null;this.dataList=[]}function q(a,c){if(void 0==a.length)throw Error(a.length+"/"+c);for(var d=0;d<a.length&&0==a[d];)d++;this.num=Array(a.length-d+c);for(var b=0;b<a.length-d;b++)this.num[b]=a[b+d]}function p(a,c){this.totalCount=a;this.dataCount=c}function t(){this.buffer=[];this.length=0}u.prototype={getLength:function(){return this.data.length},
write:function(a){for(var c=0;c<this.data.length;c++)a.put(this.data.charCodeAt(c),8)}};o.prototype={addData:function(a){this.dataList.push(new u(a));this.dataCache=null},isDark:function(a,c){if(0>a||this.moduleCount<=a||0>c||this.moduleCount<=c)throw Error(a+","+c);return this.modules[a][c]},getModuleCount:function(){return this.moduleCount},make:function(){if(1>this.typeNumber){for(var a=1,a=1;40>a;a++){for(var c=p.getRSBlocks(a,this.errorCorrectLevel),d=new t,b=0,e=0;e<c.length;e++)b+=c[e].dataCount;
for(e=0;e<this.dataList.length;e++)c=this.dataList[e],d.put(c.mode,4),d.put(c.getLength(),j.getLengthInBits(c.mode,a)),c.write(d);if(d.getLengthInBits()<=8*b)break}this.typeNumber=a}this.makeImpl(!1,this.getBestMaskPattern())},makeImpl:function(a,c){this.moduleCount=4*this.typeNumber+17;this.modules=Array(this.moduleCount);for(var d=0;d<this.moduleCount;d++){this.modules[d]=Array(this.moduleCount);for(var b=0;b<this.moduleCount;b++)this.modules[d][b]=null}this.setupPositionProbePattern(0,0);this.setupPositionProbePattern(this.moduleCount-
7,0);this.setupPositionProbePattern(0,this.moduleCount-7);this.setupPositionAdjustPattern();this.setupTimingPattern();this.setupTypeInfo(a,c);7<=this.typeNumber&&this.setupTypeNumber(a);null==this.dataCache&&(this.dataCache=o.createData(this.typeNumber,this.errorCorrectLevel,this.dataList));this.mapData(this.dataCache,c)},setupPositionProbePattern:function(a,c){for(var d=-1;7>=d;d++)if(!(-1>=a+d||this.moduleCount<=a+d))for(var b=-1;7>=b;b++)-1>=c+b||this.moduleCount<=c+b||(this.modules[a+d][c+b]=
0<=d&&6>=d&&(0==b||6==b)||0<=b&&6>=b&&(0==d||6==d)||2<=d&&4>=d&&2<=b&&4>=b?!0:!1)},getBestMaskPattern:function(){for(var a=0,c=0,d=0;8>d;d++){this.makeImpl(!0,d);var b=j.getLostPoint(this);if(0==d||a>b)a=b,c=d}return c},createMovieClip:function(a,c,d){a=a.createEmptyMovieClip(c,d);this.make();for(c=0;c<this.modules.length;c++)for(var d=1*c,b=0;b<this.modules[c].length;b++){var e=1*b;this.modules[c][b]&&(a.beginFill(0,100),a.moveTo(e,d),a.lineTo(e+1,d),a.lineTo(e+1,d+1),a.lineTo(e,d+1),a.endFill())}return a},
setupTimingPattern:function(){for(var a=8;a<this.moduleCount-8;a++)null==this.modules[a][6]&&(this.modules[a][6]=0==a%2);for(a=8;a<this.moduleCount-8;a++)null==this.modules[6][a]&&(this.modules[6][a]=0==a%2)},setupPositionAdjustPattern:function(){for(var a=j.getPatternPosition(this.typeNumber),c=0;c<a.length;c++)for(var d=0;d<a.length;d++){var b=a[c],e=a[d];if(null==this.modules[b][e])for(var f=-2;2>=f;f++)for(var i=-2;2>=i;i++)this.modules[b+f][e+i]=-2==f||2==f||-2==i||2==i||0==f&&0==i?!0:!1}},setupTypeNumber:function(a){for(var c=
j.getBCHTypeNumber(this.typeNumber),d=0;18>d;d++){var b=!a&&1==(c>>d&1);this.modules[Math.floor(d/3)][d%3+this.moduleCount-8-3]=b}for(d=0;18>d;d++)b=!a&&1==(c>>d&1),this.modules[d%3+this.moduleCount-8-3][Math.floor(d/3)]=b},setupTypeInfo:function(a,c){for(var d=j.getBCHTypeInfo(this.errorCorrectLevel<<3|c),b=0;15>b;b++){var e=!a&&1==(d>>b&1);6>b?this.modules[b][8]=e:8>b?this.modules[b+1][8]=e:this.modules[this.moduleCount-15+b][8]=e}for(b=0;15>b;b++)e=!a&&1==(d>>b&1),8>b?this.modules[8][this.moduleCount-
b-1]=e:9>b?this.modules[8][15-b-1+1]=e:this.modules[8][15-b-1]=e;this.modules[this.moduleCount-8][8]=!a},mapData:function(a,c){for(var d=-1,b=this.moduleCount-1,e=7,f=0,i=this.moduleCount-1;0<i;i-=2)for(6==i&&i--;;){for(var g=0;2>g;g++)if(null==this.modules[b][i-g]){var n=!1;f<a.length&&(n=1==(a[f]>>>e&1));j.getMask(c,b,i-g)&&(n=!n);this.modules[b][i-g]=n;e--; -1==e&&(f++,e=7)}b+=d;if(0>b||this.moduleCount<=b){b-=d;d=-d;break}}}};o.PAD0=236;o.PAD1=17;o.createData=function(a,c,d){for(var c=p.getRSBlocks(a,
c),b=new t,e=0;e<d.length;e++){var f=d[e];b.put(f.mode,4);b.put(f.getLength(),j.getLengthInBits(f.mode,a));f.write(b)}for(e=a=0;e<c.length;e++)a+=c[e].dataCount;if(b.getLengthInBits()>8*a)throw Error("code length overflow. ("+b.getLengthInBits()+">"+8*a+")");for(b.getLengthInBits()+4<=8*a&&b.put(0,4);0!=b.getLengthInBits()%8;)b.putBit(!1);for(;!(b.getLengthInBits()>=8*a);){b.put(o.PAD0,8);if(b.getLengthInBits()>=8*a)break;b.put(o.PAD1,8)}return o.createBytes(b,c)};o.createBytes=function(a,c){for(var d=
0,b=0,e=0,f=Array(c.length),i=Array(c.length),g=0;g<c.length;g++){var n=c[g].dataCount,h=c[g].totalCount-n,b=Math.max(b,n),e=Math.max(e,h);f[g]=Array(n);for(var k=0;k<f[g].length;k++)f[g][k]=255&a.buffer[k+d];d+=n;k=j.getErrorCorrectPolynomial(h);n=(new q(f[g],k.getLength()-1)).mod(k);i[g]=Array(k.getLength()-1);for(k=0;k<i[g].length;k++)h=k+n.getLength()-i[g].length,i[g][k]=0<=h?n.get(h):0}for(k=g=0;k<c.length;k++)g+=c[k].totalCount;d=Array(g);for(k=n=0;k<b;k++)for(g=0;g<c.length;g++)k<f[g].length&&
(d[n++]=f[g][k]);for(k=0;k<e;k++)for(g=0;g<c.length;g++)k<i[g].length&&(d[n++]=i[g][k]);return d};s=4;for(var j={PATTERN_POSITION_TABLE:[[],[6,18],[6,22],[6,26],[6,30],[6,34],[6,22,38],[6,24,42],[6,26,46],[6,28,50],[6,30,54],[6,32,58],[6,34,62],[6,26,46,66],[6,26,48,70],[6,26,50,74],[6,30,54,78],[6,30,56,82],[6,30,58,86],[6,34,62,90],[6,28,50,72,94],[6,26,50,74,98],[6,30,54,78,102],[6,28,54,80,106],[6,32,58,84,110],[6,30,58,86,114],[6,34,62,90,118],[6,26,50,74,98,122],[6,30,54,78,102,126],[6,26,52,
78,104,130],[6,30,56,82,108,134],[6,34,60,86,112,138],[6,30,58,86,114,142],[6,34,62,90,118,146],[6,30,54,78,102,126,150],[6,24,50,76,102,128,154],[6,28,54,80,106,132,158],[6,32,58,84,110,136,162],[6,26,54,82,110,138,166],[6,30,58,86,114,142,170]],G15:1335,G18:7973,G15_MASK:21522,getBCHTypeInfo:function(a){for(var c=a<<10;0<=j.getBCHDigit(c)-j.getBCHDigit(j.G15);)c^=j.G15<<j.getBCHDigit(c)-j.getBCHDigit(j.G15);return(a<<10|c)^j.G15_MASK},getBCHTypeNumber:function(a){for(var c=a<<12;0<=j.getBCHDigit(c)-
j.getBCHDigit(j.G18);)c^=j.G18<<j.getBCHDigit(c)-j.getBCHDigit(j.G18);return a<<12|c},getBCHDigit:function(a){for(var c=0;0!=a;)c++,a>>>=1;return c},getPatternPosition:function(a){return j.PATTERN_POSITION_TABLE[a-1]},getMask:function(a,c,d){switch(a){case 0:return 0==(c+d)%2;case 1:return 0==c%2;case 2:return 0==d%3;case 3:return 0==(c+d)%3;case 4:return 0==(Math.floor(c/2)+Math.floor(d/3))%2;case 5:return 0==c*d%2+c*d%3;case 6:return 0==(c*d%2+c*d%3)%2;case 7:return 0==(c*d%3+(c+d)%2)%2;default:throw Error("bad maskPattern:"+
a);}},getErrorCorrectPolynomial:function(a){for(var c=new q([1],0),d=0;d<a;d++)c=c.multiply(new q([1,l.gexp(d)],0));return c},getLengthInBits:function(a,c){if(1<=c&&10>c)switch(a){case 1:return 10;case 2:return 9;case s:return 8;case 8:return 8;default:throw Error("mode:"+a);}else if(27>c)switch(a){case 1:return 12;case 2:return 11;case s:return 16;case 8:return 10;default:throw Error("mode:"+a);}else if(41>c)switch(a){case 1:return 14;case 2:return 13;case s:return 16;case 8:return 12;default:throw Error("mode:"+
a);}else throw Error("type:"+c);},getLostPoint:function(a){for(var c=a.getModuleCount(),d=0,b=0;b<c;b++)for(var e=0;e<c;e++){for(var f=0,i=a.isDark(b,e),g=-1;1>=g;g++)if(!(0>b+g||c<=b+g))for(var h=-1;1>=h;h++)0>e+h||c<=e+h||0==g&&0==h||i==a.isDark(b+g,e+h)&&f++;5<f&&(d+=3+f-5)}for(b=0;b<c-1;b++)for(e=0;e<c-1;e++)if(f=0,a.isDark(b,e)&&f++,a.isDark(b+1,e)&&f++,a.isDark(b,e+1)&&f++,a.isDark(b+1,e+1)&&f++,0==f||4==f)d+=3;for(b=0;b<c;b++)for(e=0;e<c-6;e++)a.isDark(b,e)&&!a.isDark(b,e+1)&&a.isDark(b,e+
2)&&a.isDark(b,e+3)&&a.isDark(b,e+4)&&!a.isDark(b,e+5)&&a.isDark(b,e+6)&&(d+=40);for(e=0;e<c;e++)for(b=0;b<c-6;b++)a.isDark(b,e)&&!a.isDark(b+1,e)&&a.isDark(b+2,e)&&a.isDark(b+3,e)&&a.isDark(b+4,e)&&!a.isDark(b+5,e)&&a.isDark(b+6,e)&&(d+=40);for(e=f=0;e<c;e++)for(b=0;b<c;b++)a.isDark(b,e)&&f++;a=Math.abs(100*f/c/c-50)/5;return d+10*a}},l={glog:function(a){if(1>a)throw Error("glog("+a+")");return l.LOG_TABLE[a]},gexp:function(a){for(;0>a;)a+=255;for(;256<=a;)a-=255;return l.EXP_TABLE[a]},EXP_TABLE:Array(256),
LOG_TABLE:Array(256)},m=0;8>m;m++)l.EXP_TABLE[m]=1<<m;for(m=8;256>m;m++)l.EXP_TABLE[m]=l.EXP_TABLE[m-4]^l.EXP_TABLE[m-5]^l.EXP_TABLE[m-6]^l.EXP_TABLE[m-8];for(m=0;255>m;m++)l.LOG_TABLE[l.EXP_TABLE[m]]=m;q.prototype={get:function(a){return this.num[a]},getLength:function(){return this.num.length},multiply:function(a){for(var c=Array(this.getLength()+a.getLength()-1),d=0;d<this.getLength();d++)for(var b=0;b<a.getLength();b++)c[d+b]^=l.gexp(l.glog(this.get(d))+l.glog(a.get(b)));return new q(c,0)},mod:function(a){if(0>
this.getLength()-a.getLength())return this;for(var c=l.glog(this.get(0))-l.glog(a.get(0)),d=Array(this.getLength()),b=0;b<this.getLength();b++)d[b]=this.get(b);for(b=0;b<a.getLength();b++)d[b]^=l.gexp(l.glog(a.get(b))+c);return(new q(d,0)).mod(a)}};p.RS_BLOCK_TABLE=[[1,26,19],[1,26,16],[1,26,13],[1,26,9],[1,44,34],[1,44,28],[1,44,22],[1,44,16],[1,70,55],[1,70,44],[2,35,17],[2,35,13],[1,100,80],[2,50,32],[2,50,24],[4,25,9],[1,134,108],[2,67,43],[2,33,15,2,34,16],[2,33,11,2,34,12],[2,86,68],[4,43,27],
[4,43,19],[4,43,15],[2,98,78],[4,49,31],[2,32,14,4,33,15],[4,39,13,1,40,14],[2,121,97],[2,60,38,2,61,39],[4,40,18,2,41,19],[4,40,14,2,41,15],[2,146,116],[3,58,36,2,59,37],[4,36,16,4,37,17],[4,36,12,4,37,13],[2,86,68,2,87,69],[4,69,43,1,70,44],[6,43,19,2,44,20],[6,43,15,2,44,16],[4,101,81],[1,80,50,4,81,51],[4,50,22,4,51,23],[3,36,12,8,37,13],[2,116,92,2,117,93],[6,58,36,2,59,37],[4,46,20,6,47,21],[7,42,14,4,43,15],[4,133,107],[8,59,37,1,60,38],[8,44,20,4,45,21],[12,33,11,4,34,12],[3,145,115,1,146,
116],[4,64,40,5,65,41],[11,36,16,5,37,17],[11,36,12,5,37,13],[5,109,87,1,110,88],[5,65,41,5,66,42],[5,54,24,7,55,25],[11,36,12],[5,122,98,1,123,99],[7,73,45,3,74,46],[15,43,19,2,44,20],[3,45,15,13,46,16],[1,135,107,5,136,108],[10,74,46,1,75,47],[1,50,22,15,51,23],[2,42,14,17,43,15],[5,150,120,1,151,121],[9,69,43,4,70,44],[17,50,22,1,51,23],[2,42,14,19,43,15],[3,141,113,4,142,114],[3,70,44,11,71,45],[17,47,21,4,48,22],[9,39,13,16,40,14],[3,135,107,5,136,108],[3,67,41,13,68,42],[15,54,24,5,55,25],[15,
43,15,10,44,16],[4,144,116,4,145,117],[17,68,42],[17,50,22,6,51,23],[19,46,16,6,47,17],[2,139,111,7,140,112],[17,74,46],[7,54,24,16,55,25],[34,37,13],[4,151,121,5,152,122],[4,75,47,14,76,48],[11,54,24,14,55,25],[16,45,15,14,46,16],[6,147,117,4,148,118],[6,73,45,14,74,46],[11,54,24,16,55,25],[30,46,16,2,47,17],[8,132,106,4,133,107],[8,75,47,13,76,48],[7,54,24,22,55,25],[22,45,15,13,46,16],[10,142,114,2,143,115],[19,74,46,4,75,47],[28,50,22,6,51,23],[33,46,16,4,47,17],[8,152,122,4,153,123],[22,73,45,
3,74,46],[8,53,23,26,54,24],[12,45,15,28,46,16],[3,147,117,10,148,118],[3,73,45,23,74,46],[4,54,24,31,55,25],[11,45,15,31,46,16],[7,146,116,7,147,117],[21,73,45,7,74,46],[1,53,23,37,54,24],[19,45,15,26,46,16],[5,145,115,10,146,116],[19,75,47,10,76,48],[15,54,24,25,55,25],[23,45,15,25,46,16],[13,145,115,3,146,116],[2,74,46,29,75,47],[42,54,24,1,55,25],[23,45,15,28,46,16],[17,145,115],[10,74,46,23,75,47],[10,54,24,35,55,25],[19,45,15,35,46,16],[17,145,115,1,146,116],[14,74,46,21,75,47],[29,54,24,19,
55,25],[11,45,15,46,46,16],[13,145,115,6,146,116],[14,74,46,23,75,47],[44,54,24,7,55,25],[59,46,16,1,47,17],[12,151,121,7,152,122],[12,75,47,26,76,48],[39,54,24,14,55,25],[22,45,15,41,46,16],[6,151,121,14,152,122],[6,75,47,34,76,48],[46,54,24,10,55,25],[2,45,15,64,46,16],[17,152,122,4,153,123],[29,74,46,14,75,47],[49,54,24,10,55,25],[24,45,15,46,46,16],[4,152,122,18,153,123],[13,74,46,32,75,47],[48,54,24,14,55,25],[42,45,15,32,46,16],[20,147,117,4,148,118],[40,75,47,7,76,48],[43,54,24,22,55,25],[10,
45,15,67,46,16],[19,148,118,6,149,119],[18,75,47,31,76,48],[34,54,24,34,55,25],[20,45,15,61,46,16]];p.getRSBlocks=function(a,c){var d=p.getRsBlockTable(a,c);if(void 0==d)throw Error("bad rs block @ typeNumber:"+a+"/errorCorrectLevel:"+c);for(var b=d.length/3,e=[],f=0;f<b;f++)for(var h=d[3*f+0],g=d[3*f+1],j=d[3*f+2],l=0;l<h;l++)e.push(new p(g,j));return e};p.getRsBlockTable=function(a,c){switch(c){case 1:return p.RS_BLOCK_TABLE[4*(a-1)+0];case 0:return p.RS_BLOCK_TABLE[4*(a-1)+1];case 3:return p.RS_BLOCK_TABLE[4*
(a-1)+2];case 2:return p.RS_BLOCK_TABLE[4*(a-1)+3]}};t.prototype={get:function(a){return 1==(this.buffer[Math.floor(a/8)]>>>7-a%8&1)},put:function(a,c){for(var d=0;d<c;d++)this.putBit(1==(a>>>c-d-1&1))},getLengthInBits:function(){return this.length},putBit:function(a){var c=Math.floor(this.length/8);this.buffer.length<=c&&this.buffer.push(0);a&&(this.buffer[c]|=128>>>this.length%8);this.length++}};"string"===typeof h&&(h={text:h});h=r.extend({},{render:"canvas",width:256,height:256,typeNumber:-1,
correctLevel:2,background:"#ffffff",foreground:"#000000"},h);return this.each(function(){var a;if("canvas"==h.render){a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();var c=document.createElement("canvas");c.width=h.width;c.height=h.height;for(var d=c.getContext("2d"),b=h.width/a.getModuleCount(),e=h.height/a.getModuleCount(),f=0;f<a.getModuleCount();f++)for(var i=0;i<a.getModuleCount();i++){d.fillStyle=a.isDark(f,i)?h.foreground:h.background;var g=Math.ceil((i+1)*b)-Math.floor(i*b),
j=Math.ceil((f+1)*b)-Math.floor(f*b);d.fillRect(Math.round(i*b),Math.round(f*e),g,j)}}else{a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();c=r("<table></table>").css("width",h.width+"px").css("height",h.height+"px").css("border","0px").css("border-collapse","collapse").css("background-color",h.background);d=h.width/a.getModuleCount();b=h.height/a.getModuleCount();for(e=0;e<a.getModuleCount();e++){f=r("<tr></tr>").css("height",b+"px").appendTo(c);for(i=0;i<a.getModuleCount();i++)r("<td></td>").css("width",
d+"px").css("background-color",a.isDark(e,i)?h.foreground:h.background).appendTo(f)}}a=c;jQuery(a).appendTo(this)})}})(jQuery);










(function($){


    $.fn.serializeObject = function(){
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };



    jsui.scrollTo = function (name, add, speed) {
        if (!speed) speed = 300
        if (!name) {
            $('html,body').animate({
                scrollTop: 0
            }, speed)
        } else {
            if ($(name).length > 0) {
                $('html,body').animate({
                    scrollTop: $(name).offset().top + (add || 0)
                }, speed)
            }
        }
    }


    jsui.is_name = function (str) {
        return /.{2,12}$/.test(str)
    }
    jsui.is_url = function (str) {
        return /^((http|https)\:\/\/)([a-z0-9-]{1,}.)?[a-z0-9-]{2,}.([a-z0-9-]{1,}.)?[a-z0-9]{2,}$/.test(str)
    }
    jsui.is_qq = function (str) {
        return /^[1-9]\d{4,13}$/.test(str)
    }
    jsui.is_mail = function (str) {
        return /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test(str)
    }



/* 
 * jsui
 * ====================================================
*/
jsui.bd = $('body')
jsui.is_signin = jsui.bd.hasClass('logged-in') ? true : false;

if( $('.widget-nav').length ){
    $('.widget-nav li').each(function(e){
        $(this).hover(function(){
            $(this).addClass('active').siblings().removeClass('active')
            $('.widget-navcontent .item:eq('+e+')').addClass('active').siblings().removeClass('active')
        })
    })
}

if( $('.sns-wechat').length ){
    $('.sns-wechat').on('click', function(){
        var _this = $(this)
        if( !$('#modal-wechat').length ){
            $('body').append('\
                <div class="modal fade" id="modal-wechat" tabindex="-1" role="dialog" aria-hidden="true">\
                    <div class="modal-dialog" style="margin-top:200px;width:340px;">\
                        <div class="modal-content">\
                            <div class="modal-header">\
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
                                <h4 class="modal-title">'+ _this.attr('title') +'</h4>\
                            </div>\
                            <div class="modal-body" style="text-align:center">\
                                <img style="max-width:100%" src="'+ _this.data('src') +'">\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            ')
        }
        $('#modal-wechat').modal()
    })
}


if( $('.carousel').length ){
    var el_carousel = $('.carousel')

    el_carousel.carousel({
        interval: 4000
    })

    tbquire(['hammer'], function(Hammer) {

        // window.Hammer = Hammer
        
        var mc = new Hammer(el_carousel[0]);

        mc.on("panleft panright swipeleft swiperight", function(ev) {
            if( ev.type == 'swipeleft' || ev.type == 'panleft' ){
                el_carousel.carousel('next')
            }else if( ev.type == 'swiperight' || ev.type == 'panright' ){
                el_carousel.carousel('prev')
            }
        });

    })
}


if( Number(jsui.ajaxpager) > 0 && ($('.excerpt').length || $('.excerpt-minic').length) ){
    tbquire(['ias'], function() {
        if( !jsui.bd.hasClass('site-minicat') && $('.excerpt').length ){
            $.ias({
                triggerPageThreshold: jsui.ajaxpager?Number(jsui.ajaxpager)+1:5,
                history: false,
                container : '.content',
                item: '.excerpt',
                pagination: '.pagination',
                next: '.next-page a',
                loader: '<div class="pagination-loading"><img src="'+jsui.uri+'/img/loading.gif"></div>',
                trigger: 'More',
                onRenderComplete: function() {
                    tbquire(['lazyload'], function() {
                        $('.excerpt .thumb').lazyload({
                            data_attribute: 'src',
                            placeholder: jsui.uri + '/img/thumbnail.png',
                            threshold: 400
                        });
                    });
                }
            });
        }

        if( jsui.bd.hasClass('site-minicat') && $('.excerpt-minic').length ){
            $.ias({
                triggerPageThreshold: jsui.ajaxpager?Number(jsui.ajaxpager)+1:5,
                history: false,
                container : '.content',
                item: '.excerpt-minic',
                pagination: '.pagination',
                next: '.next-page a',
                loader: '<div class="pagination-loading"><img src="'+jsui.uri+'/img/loading.gif"></div>',
                trigger: 'More',
                onRenderComplete: function() {
                    tbquire(['lazyload'], function() {
                        $('.excerpt .thumb').lazyload({
                            data_attribute: 'src',
                            placeholder: jsui.uri + '/img/thumbnail.png',
                            threshold: 400
                        });
                    });
                }
            });
        }
    });
}


/* 
 * lazyload
 * ====================================================
*/
tbquire(['lazyload'], function() {
    $('.avatar').lazyload({
        data_attribute: 'src',
        placeholder: jsui.uri + '/img/avatar-default.png',
        threshold: 400
    })

    $('.widget .avatar').lazyload({
        data_attribute: 'src',
        placeholder: jsui.uri + '/img/avatar-default.png',
        threshold: 400
    })

    $('.thumb').lazyload({
        data_attribute: 'src',
        placeholder: jsui.uri + '/img/thumbnail.png',
        threshold: 400
    })

    $('.widget_ui_posts .thumb').lazyload({
        data_attribute: 'src',
        placeholder: jsui.uri + '/img/thumbnail.png',
        threshold: 400
    })

    $('.wp-smiley').lazyload({
        data_attribute: 'src',
        // placeholder: jsui.uri + '/img/thumbnail.png',
        threshold: 400
    })
})



/* 
 * prettyprint
 * ====================================================
*/
$('pre').each(function(){
    if( !$(this).attr('style') ) $(this).addClass('prettyprint')
})

if( $('.prettyprint').length ){
    tbquire(['prettyprint'], function(prettyprint) {
        prettyPrint()
    })
}



/* 
 * rollbar
 * ====================================================
*/
jsui.bd.append('<div class="m-mask"></div>')


var _wid = $(window).width()

$(window).resize(function(event) {
    _wid = $(window).width()
});



var scroller = $('.rollbar-totop')
var _fix = (jsui.bd.hasClass('nav_fixed') && !jsui.bd.hasClass('page-template-navs')) ? true : false
$(window).scroll(function() {
    var h = document.documentElement.scrollTop + document.body.scrollTop

    if( _fix && h > 0 && _wid > 720 ){
        jsui.bd.addClass('nav-fixed')
    }else{
        jsui.bd.removeClass('nav-fixed')
    }

    h > 100 ? scroller.fadeIn() : scroller.fadeOut();
})






/* 
 * bootstrap
 * ====================================================
*/
$('.user-welcome').tooltip({
    container: 'body',
    placement: 'bottom'
})



/* 
 * sign
 * ====================================================
*/
if (!jsui.bd.hasClass('logged-in')) {
    tbquire(['signpop'], function(signpop) {
        signpop.init()
    })
}


/* 
 * single
 * ====================================================
*/

var _sidebar = $('.sidebar')
if (_wid>1024 && _sidebar.length) {
    var h1 = 15,
        h2 = 30
    var rollFirst = _sidebar.find('.widget:eq(' + (jsui.roll[0] - 1) + ')')
    var sheight = rollFirst.height()


    rollFirst.on('affix-top.bs.affix', function() {

        rollFirst.css({
            top: 0
        })
        sheight = rollFirst.height()

        for (var i = 1; i < jsui.roll.length; i++) {
            var item = jsui.roll[i] - 1
            var current = _sidebar.find('.widget:eq(' + item + ')')
            current.removeClass('affix').css({
                top: 0
            })
        };
    })

    rollFirst.on('affix.bs.affix', function() {

        rollFirst.css({
            top: jsui.bd.hasClass('nav-fixed')?h1+63:h1
        })

        for (var i = 1; i < jsui.roll.length; i++) {
            var item = jsui.roll[i] - 1
            var current = _sidebar.find('.widget:eq(' + item + ')')
            current.addClass('affix').css({
                top: jsui.bd.hasClass('nav-fixed')?sheight+h2+63:sheight+h2
            })
            sheight += current.height() + 15
        };
    })

    rollFirst.affix({
        offset: {
            top: _sidebar.height(),
            bottom: $('.footer').outerHeight()
        }
    })


}



$('.loop-product-filters-more').on('click', function(){
    $('.loop-product-filters > ul').slideToggle(300)
})





$('[data-event="rewards"]').on('click', function(){
    $('.rewards-popover-mask, .rewards-popover').fadeIn()
})

$('[data-event="rewards-close"]').on('click', function(){
    $('.rewards-popover-mask, .rewards-popover').fadeOut()
})


if( $('#SOHUCS').length ) $('#SOHUCS').before('<span id="comments"></span>')


/*$('.plinks a').each(function(){
    var imgSrc = $(this).attr('href')+'/favicon.ico'
    $(this).prepend( '<img src="'+imgSrc+'">' )
})*/






if( $('.post-like').length ){
    tbquire(['jquery.cookie'], function() {
        $('.content').on('click', '[etap="like"]', function(){
            var _ta = $(this)
            var pid = _ta.attr('data-pid')

            if( _ta.hasClass('actived') ) return alert('你已赞！')

            if ( !pid || !/^\d{1,}$/.test(pid) ) return;

            if( !jsui.is_signin ){
                var lslike = lcs.get('_likes') || ''
                if( lslike.indexOf(','+pid+',')!==-1 ) return alert('你已赞！')

                if( !lslike ){
                    lcs.set('_likes', ','+pid+',')
                }else{
                    if( lslike.length >= 160 ){
                        lslike = lslike.substring(0,lslike.length-1)
                        lslike = lslike.substr(1).split(',')
                        lslike.splice(0,1)
                        lslike.push(pid)
                        lslike = lslike.join(',')
                        lcs.set('_likes', ','+lslike+',')
                    }else{
                        lcs.set('_likes', lslike+pid+',')
                    }
                }
            }

            $.ajax({
                url: jsui.uri + '/action/like.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    key: 'like',
                    pid: pid
                },
                success: function(data, textStatus, xhr) {
                    if (data.error) return false;
                    _ta.toggleClass('actived')
                    _ta.find('span').html(data.response)
                }
            });
        })
    })
}





/* 
 * comment
 * ====================================================
*/
if (jsui.bd.hasClass('comment-open')) {
    tbquire(['comment'], function(comment) {
        comment.init()
    })
}


/* 
 * page u
 * ====================================================
*/
if (jsui.bd.hasClass('page-template-pagesuser-php')) {
    tbquire(['user'], function(user) {
        user.init()
    })
}


/* 
 * page nav
 * ====================================================
*/
if( jsui.bd.hasClass('page-template-pagesnavs-php') ){

    var titles = ''
    var i = 0
    $('#navs .items h2').each(function(){
        titles += '<li><a href="#'+i+'">'+$(this).text()+'</a></li>'
        i++
    })
    $('#navs nav ul').html( titles )

    $('#navs .items a').attr('target', '_blank')

    $('#navs nav ul').affix({
        offset: {
            top: $('#navs nav ul').offset().top,
            bottom: $('.footer').height() + $('.footer').css('padding-top').split('px')[0]*2
        }
    })


    if( location.hash ){
        var index = location.hash.split('#')[1]
        $('#navs nav li:eq('+index+')').addClass('active')
        $('#navs nav .item:eq('+index+')').addClass('active')
        jsui.scrollTo( '#navs .items .item:eq('+index+')' )
    }
    $('#navs nav a').each(function(e){
        $(this).click(function(){
            jsui.scrollTo( '#navs .items .item:eq('+$(this).parent().index()+')' )
            $(this).parent().addClass('active').siblings().removeClass('active')
        })
    })
}


/* 
 * page search
 * ====================================================
*/
if( jsui.bd.hasClass('search-results') ){
    var val = $('.site-search-form .search-input').val()
    var reg = eval('/'+val+'/i')
    $('.excerpt h2 a, .excerpt .note').each(function(){
        $(this).html( $(this).text().replace(reg, function(w){ return '<b>'+w+'</b>' }) )
    })
}


/* 
 * search
 * ====================================================
*/
$('.search-show').bind('click', function(){
    $(this).find('.fa').toggleClass('fa-remove')

    jsui.bd.toggleClass('search-on')

    if( jsui.bd.hasClass('search-on') ){
        $('.site-search').find('input').focus()
        jsui.bd.removeClass('m-nav-show')
    }
})

/* 
 * phone
 * ====================================================
*/

jsui.bd.append( $('.site-navbar').clone().attr('class', 'm-navbar') )

$('.m-navbar li.menu-item-has-children').each(function(){
    $(this).append('<i class="fa fa-angle-down faa"></i>')
})

$('.m-navbar li.menu-item-has-children .faa').on('click', function(){
    $(this).parent().find('.sub-menu').slideToggle(300)
})


$('.m-icon-nav').on('click', function(){
    jsui.bd.addClass('m-nav-show')

    $('.m-mask').show()

    jsui.bd.removeClass('search-on')
    $('.search-show .fa').removeClass('fa-remove') 
})

$('.m-mask').on('click', function(){
    $(this).hide()
    jsui.bd.removeClass('m-nav-show')
})




if ($('.article-content').length){
    $('.article-content img').attr('data-tag', 'bdshare')
}


video_ok()
$(window).resizeend(function(event) {
    video_ok()
});

function video_ok(){
    var cw = $('.article-content').width()
    $('.article-content embed, .article-content video, .article-content iframe').each(function(){
        var w = $(this).attr('width')||0,
            h = $(this).attr('height')||0
        if( cw && w && h ){
            $(this).css('width', cw<w?cw:w)
            $(this).css('height', $(this).width()/(w/h))
        }
    })

    rollbar_middle()

}

function rollbar_middle(){
    var a = $('.rollbar-rm')
    if( a.length ){
        a.css({
            'top': '50%',
            'margin-top': a.height()/2*-1-22
        })
    }
}



$('.rollbar-m-on .rollbar-qrcode a').on('click', function(){
    $(this).next('h6').toggle()
})



/* erphpdown 登录使用dux弹出登录框
 * ====================================================
 */
$('.erphp-login-must').each(function(){
    $(this).addClass('signin-loader')
})





$('.tbqrcode').each(function(index, el) {
    $(this).data('url') && $(this).qrcode({text:encodeURI($(this).data('url')), width:130, height:130})
});


})(jQuery)