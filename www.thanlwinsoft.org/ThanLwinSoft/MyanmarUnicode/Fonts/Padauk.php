<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: Padauk Font</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../shared/thanlwin.css"/>
<link href="../../icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode fonts" lang="en" name="keywords"/><script type='text/javascript' src='../../shared/myWebDevelopment/canvas/tlsFont.js'></script>
<script type='text/javascript' src='../../shared/myWebDevelopment/canvas/tlsCanvasFont.js'></script>
<script type='text/javascript' src='../../shared/myWebDevelopment/examples/tlsGlyphDisplay.js'></script>
<script type='text/javascript' src='../../shared/myWebDevelopment/svg/Padauk.js'></script>
</head>
<body onload="thanlwinLoaded();myK.pathStem = '../../shared/';myUnicode.initParse('../../shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/Graphite.php" title="SIL Graphite">Graphite</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/OpenType.php" title="OpenType Fonts">OpenType</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/UpdatingUniscribe.php" title="Updating your Uniscribe DLL">Uniscribe</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/ThanLwin.php" title="ThanLwin Font">ThanLwin</a></li>
<li class="currentDoc"><span>Padauk</span></li>
</ul></li><li class="contentsDir"><a href="../../MyanmarUnicode/InputMethods/" title="InputMethods / Keyboards - how to type Myanmar Unicode">Input Methods</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Applications/" title="Myanmar Unicode aware Applications">Applications</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Sorting/" title="Sorting/Collating Myanmar in Dictionary Order">Sorting Myanmar</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Parsing/" title="Line Breaking &amp; Tokenizing Myanmar">Parsing</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Conversion/" title="Converting from old font encodings to Unicode">Converters</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/WebDevelopers/" title="Detecting Myanmar Support">Web Developers</a></li>
</ul></li><li class="contentsDir"><a href="../../DocCharConvert/" title="Document Character Converter">DocCharConvert</a></li>
<li class="contentsDir"><a href="../../LanguageBuddy/" title="Language Learning Software">LanguageBuddy</a></li>
<li class="contentsDir"><a href="../../Ekaya/" title="Ekaya Input Method (keyboard)">Ekaya</a></li>
<li class="contentsDir"><a href="../../../GraphiteOOoExt/" title="Graphite OpenOffice.org extension">Graphite OOo</a></li>
<li class="contentsDir"><a href="../../../myoooext/" title="Myanmar OpenOffice.org extension">Myanmar OOo</a></li>
<li class="contentsDir"><a href="../../Downloads/" title="Download Myanmar Unicode Software &amp; Tools">Downloads</a></li>
<li class="contentsDir"><a href="../../About/" title="About ThanLwinSoft">About</a></li>
</ul></div>
<div class='body'>
<h1>A Guide to Using Myanmar Unicode</h1>
<h2>Padauk Font</h2>
<div>

<canvas width="400" height="200" id="cv" style="border-style: solid; float: left;"></canvas>

<div style="float:left; width: 300px; overflow: visible;" id="glyphProperties">
<table>
<tr><td style="width: 100px;">Glyph Id: </td><td id="glyphId"></td></tr>
<tr><td>Name: </td><td id="glyphName"></td></tr>
<tr><td>Unicode(dec): </td><td id="unicodeDec"></td></tr>
<tr><td>Unicode(hex): </td><td id="unicodeHex"></td></tr>
<tr><td>Advance: </td><td id="advance"></td></tr>
</table>
<p>
<span class="playControl" onclick="glyphDisplay.reverse();">Reverse</span>
<span class="playControl" onclick="glyphDisplay.pause();">Pause</span>
<span class="playControl" onclick="glyphDisplay.play();">Play</span>
<span class="playControl" onclick="glyphDisplay.chooseGlyph(this);">Glyph</span>
</p>
</div>
<script type="text/javascript">
<!--
var glyphDisplay = new TlsGlyphDisplay('Padauk', 'cv');
document.addEventListener("load", glyphDisplay, true);
-->
</script>
<p style="clear:both;"><a href="http://scripts.sil.org/Padauk">Padauk</a> is a Myanmar Unicode 5.1 font with Graphite and OpenType tables for smart rendering. This Canvas demo just shows the raw glyphs, you need a rendering engine to select the correct glyphs. 
<a href="http://scripts.sil.org/Padauk">Download from SIL</a>
</p>
<p>
The glyphs in this font are being drawn using the Canvas browser element (it uses VML in IE). The data was generated from the Padauk font using <a href="http://scripts.sil.org/svn-view/graphite/grutils/trunk/grsvg/">grsvg</a>. The 
<a href="../WebDevelopers/myWebEg.php">Myanmar detection javascript</a> uses this technique in combination with precompiled glyph positions for Myanmar syllables to give the correct display on web pages even if the user's computer doesn't have the fonts installed.
</p>

</div>
<p class='right'><a href='../../MyanmarUnicode/InputMethods/'>Input Methods&gt;&gt;</a></p>
<div class="footer">
    <!-- Creative Commons License -->
<a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/" style="float:right; vertical-align: top;"><img alt="Creative Commons License" src="http://creativecommons.org/images/public/somerights20.gif" style="border: none;"/></a>
This website is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/">Creative Commons Attribution-ShareAlike 2.5 License</a> except where another license is explicitly stated.
<!-- /Creative Commons License -->
    <p>For more information <script type='text/javascript'>showMT('contact ThanLwinSoft.org','info','thanlwinsoft','org')</script><span class="my">သံ‌လွင်</span><br /><script type='text/javascript'><!--
myUnicode.imgPrefix = '../../shared/myWebDevelopment/';
myUnicode.checkWithMsg();
--></script></p></div>
</div></body>
</html>
