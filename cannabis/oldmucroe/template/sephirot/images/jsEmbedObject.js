function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function selBoxLink(value) {
	if (value != "") {
		window.open (value, "", "");
	}
}


document.onkeydown = function() {
	if (event.keyCode == 116) {
		event.keyCode = 505;	
	}
	if (event.keyCode == 505) { 
		return false;	
	}
}

function hidestatus(){
window.status='MU CONTINENT of LEGEND'
return true
}

if (document.layers)
document.captureEvents(Event.MOUSEOVER | Event.MOUSEOUT)
document.onmouseover=hidestatus
document.onmouseout=hidestatus



function fnWriteObjectFlash(strMovie, strAllowScript, intWidth, intHeight, strName)
{	
    
    var strBase = "http://image.muonline.co.kr/SWF/";
    //var strMovie = "http://image.muonline.co.kr/SWF/sub_navi_contents.swf";
    //var strAllowScript = "always";
    
	var strObject;
	
		
	strObject	=	"<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='"+intWidth+"' height='"+intHeight+"' id='"+strName+"' align='middle' VIEWASTEXT>"+
											"<param name='allowScriptAccess' value='"+strAllowScript+"' />"+
											"<param name='base' value='"+strBase+"' />"+
											"<param name='movie' value='"+strMovie+"' />"+
											"<param name='menu' value='false' />"+
											"<param name='quality' value='high' />"+
											"<param name='wmode' value='transparent' />"+
											"<param name='bgcolor' value='#ffffff' />"+
											"<embed src='"+strMovie+"' base='"+strBase+"' menu='false' quality='high' wmode='transparent' bgcolor='#ffffff' width='"+intWidth+"' height='"+intHeight+"' name='"+strName+"' align='middle' allowScriptAccess='"+strAllowScript+"' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
											"</object>"
	document.write(strObject);
}



function fnWriteClientDownload(strMovie, strSection)
{	
	var strObject;

	if(strSection == '1')
	{
		strObject	 =	"<object id='report' name='report' classid='clsid:4D390092-2A93-4E4D-BE7F-12E7C8C245EB'  width='0' height='0' codebase='"+strMovie+"' onError='loadError();'>"+	
					"</object>"
	}

	else if(strSection == '2')
	{	
		strObject	=	"<object id='report' name='report' classid='clsid:4D390092-2A93-4E4D-BE7F-12E7C8C245EB'  width='0' height='0' codebase='"+strMovie+"'>"+	
					"</object>"
	}

	else if(strSection == '3')
	{
		strObject	=	"<OBJECT id='NeffyClient' classid='CLSID:0CBF7EDC-17EC-442C-8AE9-5E804707B6CA' CODEBASE='http://dist.cdnetworks.co.kr/cdndist/neffy/Neffy.cab#VERSION=1,1,0,8' width=352 height=447 VIEWASTEXT>"+
				    	"<PARAM NAME='KeyCode' VALUE='29460'>"+
    					"<PARAM NAME='Protocol' VALUE='HTTP'>"+
				    	"<PARAM NAME='HttpLink' VALUE='"+strMovie+"'>"+
					"<PARAM NAME='HttpSkin' VALUE='http://muweb.nefficient.co.kr/muweb/Download/Default.zip'>"+
				    	"<PARAM NAME='SkinPath' VALUE='WebZen/'>"+
				    	"<PARAM NAME='SkinVersion' VALUE='1'>"+
				    	"<PARAM NAME='MaxSpeed' VALUE='0'>"+
				    	"<PARAM NAME='AutoStart' VALUE='true'>"+
				    	"<PARAM NAME='AutoClose' VALUE='true'>"+
					"</OBJECT>"
	}
	
	document.write(strObject);
}


function fnWriteBugReport(strMovie, strSection)
{	
	var strObject;

	if(strSection == '1')
	{
		strObject	 =	"<object id='report' name='report' classid='clsid:4D390092-2A93-4E4D-BE7F-12E7C8C245EB'  width='0' height='0' codebase='"+strMovie+"' onError='loadError();'>"+	
					"</object>"
	}

	else if(strSection == '2')
	{	
		strObject	=	"<object id='report' name='report' classid='clsid:4D390092-2A93-4E4D-BE7F-12E7C8C245EB'  width='0' height='0' codebase='"+strMovie+"' >"+
					"<param name='PostUrl' value='"+strHttpUploadDir+"'RnDBugReport/NewBugReportSystemProcess.asp'>"+
					"<param name='IsSendBug' value='true'>"+
					"</object>"
	}
	
	document.write(strObject);
}

function fnSearchPcbang()
{
  url = 'http://pcbang.webzen.com/Common/PCSearch/popfindMuPCBang.asp'
  window.open(url,'PcbangPopup','width=644,height=200,resizable=no,status=no,scrollbars=yes,left=500,top=0'); 
}

function fnThemeGuideObject(strMovie, strName, strBase, intWidth, intHeight)
{
	var strObject;
	strObject	=	"<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='"+intWidth+"' height='"+intHeight+"' id='"+strName+"'>"+
											"<param name='movie' value='"+strMovie+"' />"+
											"<param name='allowScriptAccess' value='always' />"+
											"<param name='menu' value='false' />"+
											"<param name='quality' value='high' />"+
											"<param name='wmode' value='transparent' />"+
											"<param name='base' value='" + strBase + "'>" +
											"<embed src='"+strMovie+"' base='" + strBase + "' allowScriptAccess='always' menu='false' quality='high' wmode='transparent' width='"+intWidth+"' height='"+intHeight+"' name='"+strName+"' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
											"</object>"
	document.write(strObject);
}


function GnxFlashActivate(strFlashUrl, n4Witdh, n4Height, strWmode, strId, strClassName, strFlashvar) {

    if (n4Witdh != 0) {
        objSize_attribute = " width='" + n4Witdh + "' height='" + n4Height + "'";
    } else {
        objSize_attribute = "";
    }

    if (strId != 0) {
        objId_attribute = " id='" + strId + "'";
        objId_IE_attribute = " id='" + strId + "'";
    } else {
        objId_attribute = "";
        objId_IE_attribute = "";
    }

    if (strClassName != 0) {
        className_attribute = " class='" + strClassName + "'";
    } else {
        className_attribute = "";
    }

    if (strWmode != 0) {
        wmode_param = "<param name='wmode' value='" + strWmode + "' />";
        wmode_attribute = " wmode='" + strWmode + "'";
    } else {
        wmode_param = "";
        wmode_attribute = "";
    }

    if (strFlashvar != 0) {
        Flashvar_param = "<param name='flashvars' value='" + strFlashvar + "' />";
        Flashvar_attribute = " Flashvars='" + strFlashvar + "'";
    } else {
        Flashvar_param = "";
        Flashvar_attribute = "";
    }

    document.writeln("<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' " + objSize_attribute + objId_IE_attribute + className_attribute + ">");
    document.writeln("<param name='movie' value='" + strFlashUrl + "' />");
    document.writeln("<param name='quality' value='high' />");
    document.writeln("<param name='menu' value='0' />");
    document.writeln("<param name='allowScriptAccess' value='always' />");
    document.writeln("<param name='allowFullScreen' value='true' />");
    document.writeln(wmode_param);
    document.writeln(Flashvar_param);
    document.writeln("<!-- Hixie method -->");
    document.writeln("<!--[if !IE]> <-->");
    document.writeln("<object type='application/x-shockwave-flash' allowScriptAccess='always' data='" + strFlashUrl + "'" + Flashvar_attribute + objSize_attribute + objId_attribute + wmode_attribute + className_attribute + "></object>");
    document.writeln("<!--> <![endif]-->");
    document.writeln("</object>");
}


var Embed = {

Flash: function(strFlashUrl, n4Witdh, n4Height, strWmode, strId, strClassName, strFlashvar) {

        if (n4Witdh != 0) {       
            objSize_attribute = " width='" + n4Witdh + "' height='" + n4Height + "'";
        } else {
            objSize_attribute = "";
        }

        if (strId != 0) {
            objId_attribute = " id='" + strId + "'";
            objId_IE_attribute = " id='" + strId + "'";
        } else {
            objId_attribute = "";
            objId_IE_attribute = "";
        }

        if (strClassName != 0) {
            className_attribute = " class='" + strClassName + "'";
        } else {
            className_attribute = "";
        }

        if (strWmode != 0) {
            wmode_param = "<param name='wmode' value='" + strWmode + "' />";
            wmode_attribute = " wmode='" + strWmode + "'";
        } else {
            wmode_param = "";
            wmode_attribute = "";
        }

        if (strFlashvar != 0) {
            Flashvar_param = "<param name='flashvars' value='" + strFlashvar + "' />";
            Flashvar_attribute = " Flashvars='" + strFlashvar + "'";
        } else {
            Flashvar_param = "";
            Flashvar_attribute = "";
        }

        document.writeln("<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' " + objSize_attribute + objId_IE_attribute + className_attribute + ">");
        document.writeln("<param name='movie' value='" + strFlashUrl + "' />");
        document.writeln("<param name='quality' value='high' />");
        document.writeln("<param name='menu' value='0' />");
        document.writeln("<param name='allowScriptAccess' value='always' />");
        document.writeln("<param name='allowFullScreen' value='true' />");
        document.writeln(wmode_param);
        document.writeln(Flashvar_param);
        document.writeln("<!-- Hixie method -->");
        document.writeln("<!--[if !IE]> <-->");
        document.writeln("<object type='application/x-shockwave-flash' allowScriptAccess='always' data='" + strFlashUrl + "'" + Flashvar_attribute + objSize_attribute + objId_attribute + wmode_attribute + className_attribute + "></object>");
        document.writeln("<!--> <![endif]-->");
        document.writeln("</object>");
    }
}