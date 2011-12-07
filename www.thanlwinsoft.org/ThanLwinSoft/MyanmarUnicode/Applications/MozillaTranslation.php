<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: Firefox/Thunderbird Localisation</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../shared/thanlwin.css"/>
<link href="../../icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode translations of Firefox/Thunderbird" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../../shared/';myUnicode.initParse('../../shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/InputMethods/" title="InputMethods / Keyboards - how to type Myanmar Unicode">Input Methods</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Applications/" title="Myanmar Unicode aware Applications">Applications</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/Applications/Mozilla.php" title="Mozilla Firefox (Web Browser) and Thunderbird (Email)">Web/Email</a></li>
<li class="currentDoc"><span>မီးမြေခွေး</span></li>
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
<h2>Firefox/Thunderbird Localisation</h2>
<p>A translation of Firefox and Thunderbird into Myanmar was partially completed, however, it is now rather out of date. It can be installed as a <a href="../../Downloads/#moz">Myanmar Language Pack extension</a> for Firefox 1.5.0.x and Thunderbird 1/5.0.x. They assume that you have the latest version of the <a href="http://scripts.sil.org/Padauk">Padauk font</a>.</p>
<p>You can switch backwards and forwards between English and Myanmar by choosing Tools->Extensions, right clicking on the Myanmar Language pack and choosing Options. You need to do this once after installing the language pack, to enable Myanmar. The change will take affect for all new windows, but restart Firefox/Thunderbird to make sure. (The locale can also be manually chosen by setting the preference <tt>general.useragent.locale</tt> to be <tt>my-MM</tt> [Myanmar] or <tt>en-US</tt> [US English] by typing <tt>about:config</tt> in the location bar).</p>
<h3><a id="feedback">Feedback</a></h3>
<p>There is currenly very little software that has been localised into Myanmar language, so there is still a lot of debate about what is the best translation for a particular computer term. There is always a balance between translating into Myanmar by giving an explanation and adopting English words and just writing them in the Myanmar script. If you would like to see particular words or phrases translated differently or if you spot genuine errors, please fill out the form below.</p>
<p>You can switch the locale temporarily back to English using Tools->Extensions, Options (<span style="my">ကိရိယာများ၊ တိုးချဲ့မှုများ။ စိတ်ဝင်စားမှု</span>) as described above.</p>
<script type="text/javascript" src="../../shared/myKeyboard.js"></script>
<form action="MozillaTranslationThanks.php" method="get" accept-charset="UTF-8" >
<table>
<tr><td>English translation:</td><td><input type="text" size="60" name="enText" /></td></tr>
<tr><td>Current Myanmar Translation:
</td><td class="my"><input class="my" type="text" size="60" name="myOrig" id="myOrig" onclick="switchInput('myOrig');"/>
</td></tr>
<tr><td>Suggested correction:</td>
<td class="my"><input class="my" type="text" size="60" name="myNew" id="myNew" onclick="switchInput('myNew');"/></td></tr>
<tr><td>Location of word (menu, dialog etc.):</td>
<td><input class="my" type="text" size="60" name="location" id="location" onclick="switchInput('location');"/></td></tr>
<tr><td>Why do you want this change?</td>
<td class="my"><textarea class="my" rows="5" cols="50" name="note" id="note" onclick="switchInput('note');"></textarea></td></tr>
<tr><td>Email address  (optional):</td><td><input type="text" size="60" name="email" /></td></tr>
<tr><td></td><td><input type="submit" value="Send"/></td></tr>
</table>
</form>

﻿<!-- 
Copyright 2005,2006 ThanLwinSoft.org

You are free to use this on your website and modify it 
subject to a Creative Commons license. 
http://creativecommons.org/licenses/by-sa/2.5/

However, please add a link to www.thanlwinsoft.org 
on every page that uses this script. For more info
and contact details see www.thanlwinsoft.org.

This copyright statement must not be removed.
===========================================================
You will need to add a link to the accompanying script
in your page header. The page uses the UTF-8 Unicode Encoding.
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<script type="text/javascript" src="xmlRequest.js"></script>
<script type="text/javascript" src="myKeyboard.js"></script>
<link type="text/css" rel="stylesheet" href="myKeyboard.css"/>
</head>
<body id='body' onload="myK.registerKeyboard('my');">...</body>
The keyboard will not be displayed until you click on a 
link which calls java script code similar to:
<a href="javascript:toggleLangKeyboard('my')">
ခလုတ်ကွက်ပြ
</a>
If you use the onload function, then it will automatically add some links.
In PHP you can use an include to load this keyboard, otherwise, the keyboard is loaded
by the myK.registerKeyboard('my'); call usin an AJAX based technique.
-->
<div class="keyboard" id="my_keyboard" style="display:none;">
<!-- If you remove this link please add a link to www.thanlwinsoft.org somewhere else on every page that uses this script + html code. -->
<div  id='keyboardTopBar' class='keyboardTopBar' onmousedown="myKeyboardMover.startMove(event)">
<p title="Click &amp; drag to move. Reclick to end move."><span><a href='http://www.thanlwinsoft.org' class="keyboard"><img src='/ThanLwinSoft/MyanmarUnicode/Applications/ThanLwinIcon.png' alt='ThanLwinSoft' title="Myanmar Unicode technology from www.ThanLwinSoft.org"/></a></span><a href="javascript:myK.hideKeyboard('my')" class="closeWindow" title='Hide Keyboard'>&#x00D7;</a></p>
</div>
<table><tr><td>
<table class="consonants">
<colgroup>
<col class="consonants" span="5"/>
<col class="consWide" />
</colgroup>
<!-- 2nd arg is order in syllable -->
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1000" href="javascript:myK.typeChar('\u1000', 1)">က</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1001" href="javascript:myK.typeChar('\u1001', 1)">ခ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1002"  href="javascript:myK.typeChar('\u1002', 1)">ဂ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1003"  href="javascript:myK.typeChar('\u1003', 1)">ဃ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1004"  href="javascript:myK.typeChar('\u1004', 1)">င</a></td>
<td class="keyboard"><a class="keyboard" id="my_kinzi" href="javascript:myK.typeChar('\u1004\u103a\u1039', 0)">င်္◌</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1005"  href="javascript:myK.typeChar('\u1005', 1)">စ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1006"  href="javascript:myK.typeChar('\u1006', 1)">ဆ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1007"  href="javascript:myK.typeChar('\u1007', 1)">ဇ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1008"  href="javascript:myK.typeChar('\u1008', 1)">ဈ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1009"  href="javascript:myK.typeChar('\u1009', 1)">ဉ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u100a"  href="javascript:myK.typeChar('\u100a', 1)">ည</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u100b"  href="javascript:myK.typeChar('\u100b', 1)">ဋ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u100c"  href="javascript:myK.typeChar('\u100c', 1)">ဌ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u100d"  href="javascript:myK.typeChar('\u100d', 1)">ဍ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u100e"  href="javascript:myK.typeChar('\u100e', 1)">ဎ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u100f"  href="javascript:myK.typeChar('\u100f', 1)">ဏ</a></td>
<td class="keyboard"></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1010"  href="javascript:myK.typeChar('\u1010', 1)">တ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1011"  href="javascript:myK.typeChar('\u1011', 1)">ထ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1012"  href="javascript:myK.typeChar('\u1012', 1)">ဒ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1013"  href="javascript:myK.typeChar('\u1013', 1)">ဓ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1014"  href="javascript:myK.typeChar('\u1014', 1)">န</a></td>
<td class="keyboard"></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1015"  href="javascript:myK.typeChar('\u1015', 1)">ပ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1016" href="javascript:myK.typeChar('\u1016', 1)">ဖ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1017"  href="javascript:myK.typeChar('\u1017', 1)">ဗ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1018"  href="javascript:myK.typeChar('\u1018', 1)">ဘ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1019"  href="javascript:myK.typeChar('\u1019', 1)">မ</a></td>
<td class="keyboard"></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u101a"  href="javascript:myK.typeChar('\u101a', 1)">ယ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u101b"  href="javascript:myK.typeChar('\u101b', 1)">ရ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u101c"  href="javascript:myK.typeChar('\u101c', 1)">လ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u101d"  href="javascript:myK.typeChar('\u101d', 1)">ဝ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u101e"  href="javascript:myK.typeChar('\u101e', 1)">သ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u103F"  href="javascript:myK.typeChar('\u103F', 1)">ဿ</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u101f"  href="javascript:myK.typeChar('\u0020', 1)">_</a></td>
<td class="keyboard"><a class="keyboard" id="my_u101f"  href="javascript:myK.typeChar('\u101f', 1)">ဟ</a></td>
<td class="keyboard"><a class="keyboard"  id="my_u1020" href="javascript:myK.typeChar('\u1020', 1)">ဠ</a></td>
<td class="keyboard"><a class="keyboard"  id="my_u1021" href="javascript:myK.typeChar('\u1021', 1)">အ</a></td>
<td class="keyButton" colspan="2"><a class="keyboard"  id="my_stack" href="javascript:myK.toggleStack('my')">က
<span class="arrow">↔</span>◌္က</a></td>
</tr>
</table>
</td><td>
<table class="vowels">
<colgroup><col span="5" class="vowels"/>
<col span="1" class="wideCol" /></colgroup>
<tr>
<td class="keyboard"><a class="keyboard" id="my_medYa" href="javascript:myK.typeChar('\u103b', 3)">◌ျ</a></td>
<td class="keyboard"><a class="keyboard" id="my_medRa" href="javascript:myK.typeChar('\u103c', 3)">◌ြ</a></td>
<td class="keyboard"><a class="keyboard" id="my_medWa" href="javascript:myK.typeChar('\u103d', 4)">◌ွ</a></td>
<td class="keyboard"><a class="keyboard" id="my_medHa" href="javascript:myK.typeChar('\u103e', 5)">◌ှ</a></td>
<td class="keyboard"><a class="keyboard" id="my_killer" href="javascript:myK.typeChar('\u103A', 11)">◌်</a></td>
<td class="keyButton"><a class="keyboard" id="my_hideKeyboard" href="javascript:myK.hideKeyboard('my')">ဝှက်ပါ</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1023" href="javascript:myK.typeChar('\u1023', 1)">ဣ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1024" href="javascript:myK.typeChar('\u1024', 1)">ဤ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1025" href="javascript:myK.typeChar('\u1025', 1)">ဥ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1026" href="javascript:myK.typeChar('\u1026', 1)">ဦ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1027" href="javascript:myK.typeChar('\u1027', 1)">ဧ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u102a" href="javascript:myK.typeChar('\u102a', 1)">ဪ</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u102d" href="javascript:myK.typeChar('\u102d', 7)">◌ိ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u102e" href="javascript:myK.typeChar('\u102e', 7)">◌ီ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u102f" href="javascript:myK.typeChar('\u102f', 8)">ု,◌ု</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1030" href="javascript:myK.typeChar('\u1030', 8)">ူ,◌ူ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1031" href="javascript:myK.typeChar('\u1031', 6)">​ေ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1029" href="javascript:myK.typeChar('\u1029', 1)">ဩ</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1032" href="javascript:myK.typeChar('\u1032', 7)">◌ဲ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1036" href="javascript:myK.typeChar('\u1036', 10)">◌ံ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1037" href="javascript:myK.typeChar('\u1037', 12)">◌့</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1038" href="javascript:myK.typeChar('\u1038', 13)">◌း</a></td>
<td class="keyboard"><a class="keyboard" id="my_u102c" href="javascript:myK.typeChar('\u102c', 9)">◌ာ</a></td>
<td class="keyboard"><a class="keyboard" id="my_u102b" href="javascript:myK.typeChar('\u102b', 9)">◌ါ</a></td>

</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u104c" href="javascript:myK.typeChar('\u104c', 1)">၌</a></td>
<td class="keyboard"><a class="keyboard" id="my_u104d" href="javascript:myK.typeChar('\u104d', 1)">၍</a></td>
<td class="keyboard"><a class="keyboard" id="my_u104e" href="javascript:myK.typeChar('\u104e', 1)">၎</a></td>
<td class="keyboard"><a class="keyboard" id="my_u104f" href="javascript:myK.typeChar('\u104f', 1)">၏</a></td>
<td class="keyboard"><a class="keyboard" id="my_u104a" href="javascript:myK.typeChar('\u104a', 14)">၊</a></td>
<td class="keyboard"><a class="keyboard" id="my_u104b" href="javascript:myK.typeChar('\u104b', 14)">။</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1040" href="javascript:myK.typeChar('\u1040', 1)">၀</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1041" href="javascript:myK.typeChar('\u1041', 1)">၁</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1042" href="javascript:myK.typeChar('\u1042', 1)">၂</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1043" href="javascript:myK.typeChar('\u1043', 1)">၃</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1044" href="javascript:myK.typeChar('\u1044', 1)">၄</a></td>
<td class="keyButton" rowspan="2"><a class="keyboard" href="javascript:myK.deleteChar()">←<br/>ဖျက်ပါ</a></td>
</tr>
<tr>
<td class="keyboard"><a class="keyboard" id="my_u1045" href="javascript:myK.typeChar('\u1045', 1)">၅</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1046" href="javascript:myK.typeChar('\u1046', 1)">၆</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1047" href="javascript:myK.typeChar('\u1047', 1)">၇</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1048" href="javascript:myK.typeChar('\u1048', 1)">၈</a></td>
<td class="keyboard"><a class="keyboard" id="my_u1049" href="javascript:myK.typeChar('\u1049', 1)">၉</a></td>
</tr>
</table>
</td></tr></table>

</div>
</div>
<p class='right'><a href='../../MyanmarUnicode/Applications/OpenOffice.php'>OpenOffice&gt;&gt;</a></p>
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
