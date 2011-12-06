<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: Graphite Fonts</title>
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
<li class="currentDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a><br />
<ul class="contents"><li class="currentDoc"><span>Graphite</span></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/OpenType.php" title="OpenType Fonts">OpenType</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/UpdatingUniscribe.php" title="Updating your Uniscribe DLL">Uniscribe</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/ThanLwin.php" title="ThanLwin Font">ThanLwin</a></li>
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
<h2>Graphite Fonts</h2>
<div>
<p>
Graphite fonts are normal TTF fonts, with an extra &ldquo;Silf&rdquo; table. The Graphite rules are written in the Graphite Description Language (GDL), with a C like syntax. An existing TTF font can then be compiled into a Graphite font using the Graphite Compiler and the GDL file. For more details see the <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&amp;cat_id=RenderingGraphite">SIL Scripts website</a>.
</p>
<p>
The SIL <a href="http://scripts.sil.org/Padauk">Padauk Graphite</a> font is available from their <a href="http://scripts.sil.org/Padauk">website</a> and now includes both Graphite and OpenType tables. 
</p>
<h3>Installing fonts</h3>
<p>On Windows just run the installer, or if you downloaded the <tt>.tgz</tt> file copy the <tt>.ttf</tt> files into your <tt>C:\Windows\Fonts</tt> directory.</p>
<p>On Linux the directory varies depending on distribution. On Fedora, you can copy the fonts into <tt>/usr/share/fonts/default/TTF</tt> (as the root user). You probably then need to change to that directory and run the following commands (as root):</p>
<pre>
cd /usr/share/fonts/default/TTF
fc-cache
mkfontscale
mkfontdir
</pre>
<p>
You can also just install into your user font directory <tt>~/.fonts</tt> and run <tt>fc-cache</tt>.
</p>
<p><b>Beaware</b> that the Padauk font package that was distributed in Fedora 10 has no OpenType or Graphite tables and so will render wrongly. Please install the latest font from the SIL website or use the newer sil-padauk-fonts package instead.
</div>
<p class='right'><a href='../../MyanmarUnicode/Fonts/OpenType.php'>OpenType&gt;&gt;</a></p>
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
