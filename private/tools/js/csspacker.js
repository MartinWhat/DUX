// JavaScript Document
/*Css压缩/格式化*/
var lCSSCoder = {
        format: function (s) {//格式化代码
            s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
            s = s.replace(/;\s*;/g, ";"); //清除连续分号
            s = s.replace(/\,[\s\.\#\d]*{/g, "{");
            s = s.replace(/([^\s])\{([^\s])/g, "$1 {\n\t$2");
            s = s.replace(/([^\s])\}([^\n]*)/g, "$1\n}\n$2");
            s = s.replace(/([^\s]);([^\s\}])/g, "$1;\n\t$2");
            return s;
        },
        packAdv: function (s) {//高级压缩代码
            s = s.replace(/\/\*(.|\n)*?\*\//g, ""); //删除注释
            s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
            s = s.replace(/\,[\s\.\#\d]*\{/g, "{"); //容错处理
            s = s.replace(/;\s*;/g, ";"); //清除连续分号
            s = s.match(/^\s*(\S+(\s+\S+)*)\s*$/); //去掉首尾空白
            return (s == null) ? "" : s[1];
        },
		pack: function (s) {//普通压缩包
		s = s.replace(/\/\*(.|\n)*?\*\//g, ""); //删除注释
		s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
		s = s.replace(/\,[\s\.\#\d]*\{/g, "{"); //容错处理
		s = s.replace(/;\s*;/g, ";"); //清除连续分号
		s = s.replace(/;\s*}/g, "}"); //清除末尾分号和大括号
		s = s.replace(/([^\s])\{([^\s])/g, "$1{$2");
		s = s.replace(/([^\s])\}([^\n]s*)/g, "$1}\n$2");
		return s;
		}
};
function CSS(s){
    document.getElementById("packer").value = lCSSCoder[s](document.getElementById("code").value);
}

