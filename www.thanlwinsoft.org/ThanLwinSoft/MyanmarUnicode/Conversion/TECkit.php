<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>Converting from old Myanmar fonts to Unicode: TECkit</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../_shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../_shared/thanlwin.css"/>
<link href="../../_icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../_shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode fonts" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../../_shared/';myUnicode.initParse('../../_shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../_icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/InputMethods/" title="InputMethods / Keyboards - how to type Myanmar Unicode">Input Methods</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Applications/" title="Myanmar Unicode aware Applications">Applications</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Sorting/" title="Sorting/Collating Myanmar in Dictionary Order">Sorting Myanmar</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Parsing/" title="Line Breaking &amp; Tokenizing Myanmar">Parsing</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Conversion/" title="Converting from old font encodings to Unicode">Converters</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/Conversion/myanmarConverter.php" title="Converting Myanmar text from legacy fonts to Unicode">Myanmar Font Converter</a></li>
<li class="currentDoc"><span>TECkit</span></li>
</ul></li><li class="contentsDir"><a href="../../MyanmarUnicode/WebDevelopers/" title="Detecting Myanmar Support">Web Developers</a></li>
</ul></li><li class="contentsDir"><a href="../../DocCharConvert/" title="Document Character Converter">DocCharConvert</a></li>
<li class="contentsDir"><a href="../../LanguageBuddy/" title="Language Learning Software">LanguageBuddy</a></li>
<li class="contentsDir"><a href="../../Ekaya/" title="Ekaya Input Method (keyboard)">Ekaya</a></li>
<li class="contentsDir"><a href="../../../GraphiteOOoExt/" title="Graphite OpenOffice.org extension">Graphite OOo</a></li>
<li class="contentsDir"><a href="../../../myoooext/" title="Myanmar OpenOffice.org extension">Myanmar OOo</a></li>
<li class="contentsDir"><a href="../../Downloads/" title="Download Myanmar Unicode Software &amp; Tools">Downloads</a></li>
<li class="contentsDir"><a href="../../About/" title="About ThanLwinSoft">About</a></li>
</ul></div>
<div class='body'>
<h1>Converting from old Myanmar fonts to Unicode</h1>
<h2>TECkit</h2>
<div>
<p><a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&amp;cat_id=TECkit">TECkit</a> is a library created by <a href="http://scripts.sil.org/">scripts.sil.org</a> for converting from legacy byte encodings into Unicode. It supports context based reordering, which is essential for converting Burmese.</p>
<p>There are several ways of using TECkit. You can either use TECkit's own language or you can use UTR22 XML format and a perl script also developed by SIL. The Myanmar Unicode converters here use the UTR22/XML approach. </p>
<p>
Converters for the encodings used by Geocomp Academy and WinMyanmar Systems have been implemented. You can download these <a href="../../Downloads/#teckit">here</a>. 
</p>
<p>Once you have a converter file, you then need something to do the conversion. Several tools are <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&amp;item_id=EncCnvtrs">available for Windows</a> to use <tt>tec</tt> files.</p>
<p>The current author has also developed a Java front end to TECkit called <a href="../../Downloads/#teckit">DocCharConvert</a>, which works on Linux and Windows. It can read OpenOffice files in OpenDocument format, convert the text and adjust the font styles automatically.
</p>
</div>
<p class='right'><a href='../../MyanmarUnicode/WebDevelopers/'>Web Developers&gt;&gt;</a></p>
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
