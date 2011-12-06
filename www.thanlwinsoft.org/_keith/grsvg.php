<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE
 html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xmlns:svg="http://www.w3.org/2000/svg"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.w3.org/MarkUp/SCHEMA/xhtml11.xsd"
	xml:lang="en" >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gr SVG</title>
<style type="text/css">
h1 { font-size: 20px; border-color: white; border-style: dashed; 
    position: absolute; right: 0px; top: 0px; margin: 0px;
    background-color: #b0d0d0;
}
h1 a:visited, h1 a:link {text-decoration: none;}
div#form { margin: 20px; background-color: #b0d0d0; border-style: solid; border-width: 1px; border-color: black; padding: 5px; }
div#form textarea { float: left; margin-left: 2px; margin-right: 20px; }
div.options { float: left; margin: 2px;}
ul.options { padding-top: 0px; padding-bottom: 0px; margin: 0px;}
p.submit {text-align: right; clear: both; margin-bottom: 0px; }
.warning { color: red; }
.command { font-family: fixed; }
div.grSvg { margin: 20px; border-style: solid; border-width: 1px; border-color: black; padding: 0px; overflow: scroll; }
</style>
<script type="text/javascript">
<![CDATA[
function increment(idName, delta)
{
	var elem = document.getElementById(idName);
	if (elem)
	{
		var v = new Number(elem.value);
		if (v <= 0 || v > 2048)
		{
			v = 300;
		}
		else
		{
			v = v + delta;
		}
		if (v <= 0) elem.value = "";
		else elem.value = v;
		var theForm = document.getElementById('grsvg');
		theForm.submit();
	}
}
]]>
</script>
</head>
<body>
<div id="form">
<form action="grsvg.php" method="post" id="grsvg" name="grsvg">
<textarea id="grText" name="grText" cols="40" rows="10"></textarea><h1><a href="http://scripts.sil.org/RenderingGraphite">Gr</a><a href="http://www.w3.org/Graphics/SVG/">SVG</a></h1>
<div class='options'>
<ul class='options'>
<li>Font:
<select id="grFont" name="grFont" onchange="document.getElementById('grsvg').submit();"><option id='CharisSILR' value='CharisSILR' >CharisSILR</option><option id='DoulosSILR' value='DoulosSILR' >DoulosSILR</option><option id='Padauk' value='Padauk' >Padauk</option><option id='Padauk-Bold' value='Padauk-Bold' >Padauk-Bold</option></select>
</li>
<li>Font size: 
<select id="grFontSize" name="grFontSize" onchange="document.getElementById('grsvg').submit();">
<option value='12' selected='on'>12</option><option value='14'>14</option><option value='16'>16</option><option value='20'>20</option><option value='36'>36</option><option value='72'>72</option><option value='100'>100</option><option value='150'>150</option></select>
</li>
<li>Renderers:<br />
    <input type="checkbox" name="graphite" checked="yes" value="graphite"></input> 
<span style="color: green;">Graphite</span>
    <input type="checkbox" name="harfbuzz" value="harfbuzz"></input>
<span style="color: magenta;">HarfBuzz</span>
    <input type="checkbox" name="icu" value="icu"></input>
<span style="color: blue;">ICU</span>
</li>
<li>Output as: 
    <input type="radio" name="grOutput" checked="yes" value="html"></input>HTML 
    <input type="radio" name="grOutput" value="svg"></input>SVG
    <input type="radio" name="grOutput" value="png"></input>PNG
</li>
<li>Fill:
<select name='grFill' onchange='this.style.color=this.value;'><option value=''></option><option value='maroon' style='color:maroon' >maroon</option><option value='red' style='color:red' >red</option><option value='purple' style='color:purple' >purple</option><option value='fuchsia' style='color:fuchsia' >fuchsia</option><option value='green' style='color:green' >green</option><option value='lime' style='color:lime' >lime</option><option value='olive' style='color:olive' >olive</option><option value='yellow' style='color:yellow' >yellow</option><option value='navy' style='color:navy' >navy</option><option value='blue' style='color:blue' >blue</option><option value='teal' style='color:teal' >teal</option><option value='aqua' style='color:aqua' >aqua</option><option value='black' style='color:black' >black</option><option value='silver' style='color:silver' >silver</option><option value='gray' style='color:gray' >gray</option><option value='white' style='color:white; background-color:black;' >white</option></select></li>
<li>Stroke:
<select name='grStrokeColor' onchange='this.style.color=this.value;'><option value=''></option><option value='maroon' style='color:maroon' >maroon</option><option value='red' style='color:red' >red</option><option value='purple' style='color:purple' >purple</option><option value='fuchsia' style='color:fuchsia' >fuchsia</option><option value='green' style='color:green' >green</option><option value='lime' style='color:lime' >lime</option><option value='olive' style='color:olive' >olive</option><option value='yellow' style='color:yellow' >yellow</option><option value='navy' style='color:navy' >navy</option><option value='blue' style='color:blue' >blue</option><option value='teal' style='color:teal' >teal</option><option value='aqua' style='color:aqua' >aqua</option><option value='black' style='color:black' >black</option><option value='silver' style='color:silver' >silver</option><option value='gray' style='color:gray' >gray</option><option value='white' style='color:white; background-color:black;' >white</option></select></li>
<li>Background:
<select name='grBackground' onchange='this.style.color=this.value;'><option value=''></option><option value='maroon' style='color:maroon' >maroon</option><option value='red' style='color:red' >red</option><option value='purple' style='color:purple' >purple</option><option value='fuchsia' style='color:fuchsia' >fuchsia</option><option value='green' style='color:green' >green</option><option value='lime' style='color:lime' >lime</option><option value='olive' style='color:olive' >olive</option><option value='yellow' style='color:yellow' >yellow</option><option value='navy' style='color:navy' >navy</option><option value='blue' style='color:blue' >blue</option><option value='teal' style='color:teal' >teal</option><option value='aqua' style='color:aqua' >aqua</option><option value='black' style='color:black' >black</option><option value='silver' style='color:silver' >silver</option><option value='gray' style='color:gray' >gray</option><option value='white' style='color:white; background-color:black;' >white</option></select></li>
</ul>
</div>

<div class='options'>
<ul class='options'>
<li>Features: <input type='text' name='grFeatures' id='grFeatures' value='' title='Enter features in format: 1001=1&amp;1002=2;'/></li>
<li>Width: <input type='text' name='grWidth' id='grWidth' value=''/><a style="cursor:pointer;" onclick="increment('grWidth', 10);" href="#">+</a>
<a style="cursor:pointer;" onclick="increment('grWidth', -10);" href="#">-</a>
</li>
<li>Text Alignment: <select name="grAlign">
<option value='' selected='on'></option><option value='left'>left</option><option value='right'>right</option><option value='center'>center</option><option value='justify'>justify</option></select>
</li>
<li>
<input type='checkbox' name='grRtl' />Right to left</li>
<li>
<input type='checkbox' name='grShowReorder' />Show Reordering</li>
<li>
<input type='checkbox' name='grAnnotate' />Show Annotation</li>
<li>
<input type='checkbox' name='grOverlay' />Overlay renderings</li>
<li>
<input type='checkbox' name='grBBox' checked='on'/>Adjust bounding box</li>
</ul>
</div>
<p class="submit"><span class='warning'></span>
<button type="submit" id="grRender" name="grRender">Render</button>
</p>
</form>
</div>
<div id="args:">
</div>
<div class="grSvg">
</div>
<div class="command"></div>
<div class="footer">
<p style="font-size: 8pt;">Processed in: 0 seconds.</p>
</div>
</body>
</html>

