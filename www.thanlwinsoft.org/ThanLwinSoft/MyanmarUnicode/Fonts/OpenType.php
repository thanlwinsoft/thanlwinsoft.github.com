<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: OpenType</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../shared/thanlwin.css"/>
<link href="../../icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode fonts" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../../shared/';myUnicode.initParse('../../shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/Graphite.php" title="SIL Graphite">Graphite</a></li>
<li class="currentDoc"><span>OpenType</span></li>
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
<h2>OpenType</h2>
<p>Microsoft has not yet developed an implementation of Myanmar Unicode for Uniscribe, 
so it is not possible to use script specific features to produce a Myanmar Unicode compliant font.</p>
<p>However, a Myanmar Unicode font is being developed by the <a href="http://www.mcf.org.mm/">Myanmar NLP lab</a> using OpenType generic font features. This works on Windows computers with at least XP SP2 or the latest version of the Uniscribe dll. If you have an older version of Windows 2000 or XP you can just <a href="UpdatingUniscribe.php">uprade your Uniscribe DLL</a>. </p>
<p>You also need to enable Complex Text support for correct rendering. Goto Control Panel->Regional and Language Options. Click the Languages tab and make sure that there is a tick beside "Install files for Complex Script and right-to-left languages (including Thai)". You will need to insert your Windows XP CD-ROM to complete installation of complex script support.</p>
<p>In many cases Pango's OpenType layout engine may be able to render Myanmar Unicode OT fonts using generic features on Linux. An implementation is also being developed for Pango, which uses Myanmar specific OpenType features. However, there is no guarantee that the features used in this will match those used by Microsoft when they eventually release a version of Uniscribe with support for Myanmar Unicode.</p>
<p class='right'><a href='../../MyanmarUnicode/Fonts/UpdatingUniscribe.php'>Uniscribe&gt;&gt;</a></p>
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
