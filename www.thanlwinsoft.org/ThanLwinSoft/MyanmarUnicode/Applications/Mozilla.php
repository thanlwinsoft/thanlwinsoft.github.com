<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: Mozilla Web/Email Software</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../shared/thanlwin.css"/>
<link href="../../icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode enabled Web/Email Software" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../../shared/';myUnicode.initParse('../../shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/InputMethods/" title="InputMethods / Keyboards - how to type Myanmar Unicode">Input Methods</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Applications/" title="Myanmar Unicode aware Applications">Applications</a><br />
<ul class="contents"><li class="currentDoc"><span>Web/Email</span></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Applications/MozillaTranslation.php" title="Myanmar translation of Firefox and Thunderbird">မီးမြေခွေး</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Applications/OpenOffice.php" title="OpenOffice Word Processor, Spreadsheet etc.">OpenOffice</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Applications/MyOpenOffice.php" title="using OpenOffice with Myanmar language">Using OOo</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Applications/Pango.php" title="Gnome and GTK Applications on Linux with Pango Support">Pango/GTK</a></li>
</ul></li><li class="contentsDir"><a href="../../MyanmarUnicode/Sorting/" title="Sorting/Collating Myanmar in Dictionary Order">Sorting Myanmar</a></li>
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
<h2>Mozilla Web/Email Software</h2>
<div>
<p>It is possible to use Myanmar Unicode on the Web with normal versions of Mozilla Firefox (Web Browser) and Mozilla Thunderbird (Email) assuming that you have the latest <a href="../Fonts/UpdatingUniscribe.php">Uniscribe DLL</a> installed and are using Padauk or Myanmar3).</p>
</p>
<p>
Most versions of Linux now ship <a href="http://www.mozilla.com/">
Firefox</a> with Pango support. If you have the Pango Graphite Module installed and an appropriate font which supports Myanmar Unicode and Graphite, then it should render Myanmar correctly.
</p>
<p>A translation of Firefox into Myanmar was developed awhile back, but it is now out of date. If you are interested in helping to test this, please look at the <a href="MozillaTranslation.php">Myanmar localisation page</a>.</p>
<h3>Troubleshooting Fonts in Mozilla</h3>
<p>If you have trouble with Unicode 5.1 pages not displaying correctly, then the problem may be with the fonts that you have installed. Mozilla tries to use the font in the stylesheet for the web page first (Padauk on this site). If that font doesn't have a glyph for a specific code point, then it will use the first font it finds with that code point. If your version of Mozilla does not know how to interpret that font then it <em>will</em> be rendered wrongly. <br/>e.g. If you have Padauk installed as well as a Myanmar font, which is only partially conformant to Unicode 5.1, then if mozilla finds the other font first, then Myanmar text will be rendered wrong.</p>
<p>
 The simplest solution is to remove all non-conformant fonts from your system. You may want to install the <a href="../../../MyanmarConverter/">Myanmar Converter</a> addon to Firefox to allow you to still read pages written for ZawGyi.</p>
<p>An alternative is to artificially force Mozilla to default to a specific font when the stylesheet font fails. You can do this by adding a file <tt>chrome/userChrome.css</tt> to your profile directory. Your profile is usually located under somewhere like <tt>~/.mozilla/firefox/xxxxxxxx.default</tt> on Linux and <br/><tt>C:\Documents and Settings\userName\Application Data\Mozilla\Firefox\Profiles\xxxxxxxx.Default</tt> on Windows (<tt>Application Data</tt> is usually a hidden directory). Copy the <tt>userChrome-example.css</tt> to <tt>userChrome.css</tt> and make it look something like this:
</p>
<pre>
/*
 * Do not remove the @namespace line -- it's required for correct functioning
 */
/* set default namespace to XUL */
@namespace url("http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"); 
/*
 * Set the default font to Padauk :
 */
* {
   font-family: "Padauk", sans-serif !important;
   font-size: 12pt !important;
}
</pre>
</div>
<p class='right'><a href='../../MyanmarUnicode/Applications/MozillaTranslation.php'>မီးမြေခွေး&gt;&gt;</a></p>
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
