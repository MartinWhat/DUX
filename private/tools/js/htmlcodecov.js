//html代码转换javascript代码
function javascript(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	     document.getElementById("result").value="<script language=\"JavaScript\">\n<!--\n/\/\-->\n</script>";
	}
	else 
	{
	    output = "document.writeln(\"";
	    for (var c = 0; c < input.length; c++){
		    if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			    output += "\");";
			    if (c != input.length - 1) output +="\ndocument.writeln(\"";
			    c++;
			    }
		    else {
			    if (input.charAt(c) == "\"") {
				    output += "/\"";
				    }
			    else {
				    if (input.charAt(c) == "\\"){
					    output += "\\\\";
					    }

				    else {
					    output += input.charAt(c);
					    if (c == input.length -1) output += "\");";	
					    }
				    }
			    }
    		
		    }
           document.getElementById("result").value="<script language=\"JavaScript\">\n<!--\n"+output+"\n/\/\-->\n</script>";
	}
	
}

//html代码转换asp代码
function asp(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	   document.getElementById("result").value="<%\n%>";
	}
	else 
	{
	    output = "Response.Write \"";
	    for (var c = 0; c < input.length; c++){
		    if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			    output += "\"";
			    if (c != input.length - 1) output +="\nResponse.Write \"";
			    c++;
			    }
		    else {
			    if (input.charAt(c) == "\"") {
				    output += "\"\"";
				    }
			    else {
				    if (input.charAt(c) == "\\"){
					    output += "\\\\";
					    }

				    else {
					    output += input.charAt(c);
					    if (c == input.length -1) output += "\"";	
					    }
				    }
			    }
    		
		    }
        document.getElementById("result").value="<%\n"+output+"\n%>";
    }
}

//html代码转换php代码
function php(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	    document.getElementById("result").value="<?php\n?>";
	}
	else 
	{
	    output = "echo \"";
	    for (var c = 0; c < input.length; c++){
		    if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			    output += "\\n\";";
			    if (c != input.length - 1) output +="\necho \"";
			    c++;
			    }
		    else {
			    if (input.charAt(c) == "\"") {
				    output += "\\\"";
				    }
			    else {
				    if (input.charAt(c) == "\\"){
					    output += "\\\\";
					    }

				    else {
					    output += input.charAt(c);
					    if (c == input.length -1) output += "\\n\";";	
					    }
				    }
			    }
    		
		    }
           document.getElementById("result").value="<?php\n"+output+"\n?>";
       }
}

//html代码转换Jsp代码
function jsp(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	    document.getElementById("result").value="<%\n%>";
	}
	else 
	{
	    output = "out.println(\"";
	    for (var c = 0; c < input.length; c++){
		    if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			    output += "\");";
			    if (c != input.length - 1) output +="\nout.println(\"";
			    c++;
			    }
		    else {
			    if (input.charAt(c) == "\"") {
				    output += "\\\"";
				    }
			    else {
				    if (input.charAt(c) == "\\"){
					    output += "\\\\";
					    }

				    else {
					    output += input.charAt(c);
					    if (c == input.length -1) output += "\");";	
					    }
				    }
			    }
    		
		    }
           document.getElementById("result").value="<%\n"+output+"\n%>";
       }
}

//html代码转换Perl代码
function perl(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	      document.getElementById("result").value=output;
	}
	else 
	{
	    output = "print \"";
    	for (var c = 0; c < input.length; c++){
		if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			output += "\\n\";";
			if (c != input.length - 1) output +="\nprint \"";
			c++;
			}
		else {
			if (input.charAt(c) == "\"") {
				output += "\\\"";
				}
			else {
				if (input.charAt(c) == "\\"){
					output += "\\\\";
					}

				else {
					output += input.charAt(c);
					if (c == input.length -1) output += "\\n\";";	
					}
				}
			}
		
		}
       document.getElementById("result").value=output;
	}
}


//html代码转换vbnet代码
function vbnet(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	     document.getElementById("result").value="<%\n%>";
	}
	else 
	{
	    output = "Response.Write (\"";
	    for (var c = 0; c < input.length; c++){
		if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			output += "\");";
			if (c != input.length - 1) output +="\nResponse.Write (\"";
			c++;
			}
		else {
			if (input.charAt(c) == "\"") {
				output += "\"\"";
				}
			else {
				if (input.charAt(c) == "\\"){
					output += "\\\\";
					}

				else {
					output += input.charAt(c);
					if (c == input.length -1) output += "\");";	
					}
				}
			}
		
		}
       document.getElementById("result").value="<%\n"+output+"\n%>";
	}
}

//html代码转换Sws代码
function sws(){
	var input = document.getElementById("content").value;
	if(input=="")
	{
	    document.getElementById("result").value=output;
	}
	else 
	{
	    output = "STRING \"";
    	for (var c = 0; c < input.length; c++){
		if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")){
			output += "\"";
			if (c != input.length - 1) output +="\nSTRING \"";
			c++;
			}
		else {
			if (input.charAt(c) == "\"") {
				output += "\\\"";
				}
			else {
				if (input.charAt(c) == "\\"){
					output += "\\\\";
					}

				else {
					output += input.charAt(c);
					if (c == input.length -1) output += "\"";	
					}
				}
			}
		
		}
       document.getElementById("result").value=output;
	}
}

//开始转换按钮
function htmlCov()
{
   var rad=document.getElementsByName('html');
   for(i=0;i<rad.length;i++)
   {
       if(rad[i].checked)
       {
           if(rad[i].value=="javascript")
           {
                javascript();
           }
           else if(rad[i].value=="asp")
           {
                asp();
           }
           else if(rad[i].value=='Php')
           {
               php();
           }
           else if(rad[i].value=='jsp')
           {
                Jsp();
           }
           else if(rad[i].value=='perl')
           {
                Perl();
           }
           else if(rad[i].value=='sws')
           {
                Sws();
           }
           else if(rad[i].value=='vbnet')
           {
               vbnet();
           }
       }
   }
}


function copy(obj)
{
  var Result=document.getElementById(obj).value+'\n\n东子博客 www.kilvn.com';
  if(Result=="")
  {
    return ;
  }
  else 
  {
	if(window.clipboardData) {        
        window.clipboardData.clearData();        
        window.clipboardData.setData("Text",Result); 
		document.getElementById(obj).select(); 
	    window.alert('复制成功。')      
    } else if(navigator.userAgent.indexOf("Opera") != -1) {        
        window.location = Result;   
		document.getElementById(obj).select(); 
	    window.alert('复制成功。')       
    } else if (window.netscape) {        
        try {        
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");        
        } catch (e) {        
           alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true'");        
        }        
        var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);        
        if (!clip)        
          return;        
          var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);        
          if (!trans)        
               return;        
          trans.addDataFlavor('text/unicode');        
          var str = new Object();        
          var len = new Object();        
          var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);        
          var copytext = Result;        
           str.data = copytext;        
           trans.setTransferData("text/unicode",str,copytext.length*2);        
          var clipid = Components.interfaces.nsIClipboard;        
          if (!clip){return false;}
          else{
           clip.setData(trans,null,clipid.kGlobalClipboard);        
           alert("复制成功！");
          }
      }        

  }
}

function remove()
{
    document.getElementById('result').value="";
}

function saveCode()
{
  var win=window.open('','','top=10000,left=10000');
  win.document.write(document.all.result.innerText)
  win.document.execCommand('SaveAs','','文件名称.htm')
  win.close();
}