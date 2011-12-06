<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: ThanLwin Unicode Font</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../_shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../_shared/thanlwin.css"/>
<link href="../../_icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../_shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode fonts" lang="en" name="keywords"/><script type='text/javascript' src='../../_shared/myWebDevelopment/canvas/tlsFont.js'></script>
<script type='text/javascript' src='../../_shared/myWebDevelopment/canvas/tlsCanvasFont.js'></script>
<script type='text/javascript' src='../../_shared/myWebDevelopment/examples/tlsGlyphDisplay.js'></script>
<script type='text/javascript' src='../../_shared/myWebDevelopment/svg/ThanLwin.js'></script>
</head>
<body onload="thanlwinLoaded();myK.pathStem = '../../_shared/';myUnicode.initParse('../../_shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../_icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/Graphite.php" title="SIL Graphite">Graphite</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/OpenType.php" title="OpenType Fonts">OpenType</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/UpdatingUniscribe.php" title="Updating your Uniscribe DLL">Uniscribe</a></li>
<li class="currentDoc"><span>ThanLwin</span></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/Padauk.php" title="Padauk Font">Padauk</a></li>
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
<h2>ThanLwin Unicode Font</h2>

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
var glyphDisplay = new TlsGlyphDisplay('ThanLwin', 'cv');
document.addEventListener("load", glyphDisplay, true);
-->
</script>
<p style="clear: both; margin-bottom: 1em;">&nbsp;</p>

<p>ThanLwin is a Myanmar Unicode font which covers the Burmese characters in Unicode, though it does not yet support the Mon, Karen, Shan code points.</p>
<p class="myWarning">This font is currently only an alpha release. Please <a href="http://thanlwinsoft.org/indefero/index.php/p/thanlwinfont/issues/">report</a> any problems that you find.</p>
<p>The font has been tested to work with the following rendering engines:</p>
<ul>
<li>Uniscribe (Windows)</li>
<li>Harfbuzz NG and Pango (Linux)</li>
<li>ICU</li>
<li>Adobe InDesign (set the language to None)</li>
</ul>
<p>
The font was designed using ligatures for the reordered glyphs. This drastically simplifies the OpenType and Graphite rules, which makes it a much faster font than Padauk. It also increases the number of rendering engines which support the font. The downside is that the font file is significantly larger, but this is much reduced if the font is compressed in a format like WOFF.
</p>

</div>
<h3>Downloads</h3>
<div>
<ul><li><a href='../../Downloads/Fonts/thanlwinfontsrc-0.003.tar.bz2' title='14 Feb 2011 [248KB]' style='font-size: 0.6em;'>thanlwinfontsrc-0.003.tar.bz2</a></li>
<li><a href='../../Downloads/Fonts/thanlwinfonts-0.003.zip' title='14 Feb 2011 [1,186KB]' style='font-size: 0.6em;'>thanlwinfonts-0.003.zip</a></li>
<li><a href='../../Downloads/Fonts/thanlwinfontsrc-0.002.tar.bz2' title='09 Feb 2011 [246KB]' style='font-size: 0.6em;'>thanlwinfontsrc-0.002.tar.bz2</a></li>
<li><a href='../../Downloads/Fonts/thanlwinfonts-0.002.zip' title='09 Feb 2011 [1,186KB]' style='font-size: 0.6em;'>thanlwinfonts-0.002.zip</a></li>
<li><a href='../../Downloads/Fonts/thanlwinfontsrc-0.001.tar.bz2' title='30 Sep 2010 [235KB]' style='font-size: 0.6em;'>thanlwinfontsrc-0.001.tar.bz2</a></li>
<li><a href='../../Downloads/Fonts/thanlwinfonts-0.001.zip' title='30 Sep 2010 [947KB]' style='font-size: 0.6em;'>thanlwinfonts-0.001.zip</a></li>
</ul>
</div>
<p class='right'><a href='../../MyanmarUnicode/Fonts/Padauk.php'>Padauk&gt;&gt;</a></p>
<div class="footer">
    <!-- Creative Commons License -->
<a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/" style="float:right; vertical-align: top;"><img alt="Creative Commons License" src="http://creativecommons.org/images/public/somerights20.gif" style="border: none;"/></a>
This website is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/">Creative Commons Attribution-ShareAlike 2.5 License</a> except where another license is explicitly stated.
<!-- /Creative Commons License -->
    <p>For more information <script type='text/javascript'>showMT('contact ThanLwinSoft.org','info','thanlwinsoft','org')</script><span class="my">သံ‌လွင်</span><br /><script type='text/javascript'><!--
myUnicode.imgPrefix = '../../_shared/myWebDevelopment/';
myUnicode.checkWithMsg();
--></script></p></div>
</div></body>
</html>
