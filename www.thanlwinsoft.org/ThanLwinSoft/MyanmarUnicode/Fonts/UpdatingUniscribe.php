<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode: Updating your Uniscribe DLL</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../_shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../_shared/thanlwin.css"/>
<link href="../../_icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../_shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Updating your Uniscribe DLL" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../../_shared/';myUnicode.initParse('../../_shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../_icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/Graphite.php" title="SIL Graphite">Graphite</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Fonts/OpenType.php" title="OpenType Fonts">OpenType</a></li>
<li class="currentDoc"><span>Uniscribe</span></li>
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
<h2>Updating your Uniscribe DLL</h2>

<div class="readme">
<div class="enInstructions">
<p>Microsoft software uses the Uniscribe library <tt>usp10.dll</tt> to support complex text rendering. 
Unfortunately only Windows XP Service Pack 2 and later have the required features (ligature and context specific positioning) installed. 
However, if you have Windows 2000 or Windows XP without Service Pack 2, you can still update the <tt>usp10.dll</tt> file by following the instructions below. 
</p>
<p>The easiest way to upgrade your Uniscribe DLL is to download <a href="http://download.microsoft.com/download/6/5/6/656F7AED-2857-40EF-8165-E632BB019619/VOLTSupplementalFiles.exe">VOLTSupplementalFiles</a> from Microsoft. Next, download <a href="installUsp10.bat">installUsp10.bat</a> into the same directory as <tt>VOLTSupplementalFiles.exe</tt> and double click on <tt>installUsp10.bat</tt> in Windows Explorer. If this does not work, please follow the instructions below.</p>
<p>You may get a Windows File Protection Message. Click Cancel, then Yes.</p>
</div>
<!--
<div  class="myInstructions">
<p>
Microsoft ဆောဖ်၀ဲလ်သည် ရှုတ်ထွေးသော စာသား ပြသမှုကို ထောက်ပံ့ရန် Uniscribe Library <tt>usp10.dll</tt> ကို သုံးသည်။
၀မ်းနည်းဖွယ်ရာကောင်းသည်မှာ Windows XP Service Pack 2 နှင့် Windows 2003 သည်သာလျှင် စတင် အသုံးပြု စီမံသည့် တိကျသော နေရာယူသည့် အဆက်အတွယ်နှင့် စကားစပ် (Ligature and context specific positioning) အင်္ဂါရပ်များ လိုအပ်ပြီး ဖြစ်သည်။
သို့သော်လည်း၊ အကယ်၍ Service Pack 2 မပါဘဲ Windows 2000 (သို့) Windows XP ရှိလျှင် <tt>usp10.dll</tt> ဖိုင်ကို နောက်ဆုံးပေါ်အခြေအနေအထိ လုပ်နိုင်လိမ့်မည်။</p>
<p>
စီဒီရွန်ပေါ် <tt>installers</tt> အညွှန်းမှ <tt>installUsp10.bat</tt> ကို ကလစ် နှစ်ကြိမ် နှိပ်ရန် သင့် Uniscribe DLL ပိုမို စွမ်းအားကောင်းအောင် မြှင့်တင်ရန် အလွယ်ကူဆုံး နည်းလမ်း ဖြစ်သည်။ ( Windows Explorer တွင် My Computer အောက်ရှိ CD-Drive ပရိုဂရမ်သင်္ကေတ(အိုင်ကွန်) ပေါ် ညာဖက် ကလစ်လည်းပဲ နှိပ်နိုင်သည်)။ အကယ်၍ အလုပ် မလုပ်ပါက၊ အောက်ပါ လမ်းညွှန်ချက်များ နောက်သို့ လိုက်ပေးပါ။</p>
<p>
Windows File Protection Message တစ်ခု ရလိမ့်မည်။ Cancel ကလစ်နှိပ်ပြီး၊ Yes ကို လုပ်ပါ။
</p>
</div>-->
</div>
<h2>Enabling Complex Script Support</h2>
<p>You must also enable Complex Text support for correct rendering. Goto Control Panel-&gt;Regional and Language Options. 
Click the Languages tab and make sure that there is a tick beside 
"Install files for Complex Script and right-to-left languages (including Thai)". 
You will need to insert your Windows XP CD-ROM to complete installation of complex script support.</p>
<img src="RegionalLanguageOptions.png" />
 <div class="readme">
<h2>Manually</h2>
<p>Updating your Uniscribe DLL by hand is slightly difficult because you have to copy the <tt>usp10.dll</tt> to your <tt>C:\Windows\System32</tt> directory while in Safe Mode. If you have Microsoft Office installed, you will also need to update the dll in <tt>C:\Program Files\Common Files\Microsoft Shared\Office10</tt>. This is because <tt>usp10.dll</tt> is in constant use in normal Windows.
</p>
<ol>
<li>Run the <a href="VOLTSupplementalFiles.exe">Uniscribe Library extractor.</a></li>
<li>Give a location to extract the files when asked e.g. <tt>C:\Windows\Temp\Volt</tt></li>
<li>Browse to <tt>C:\Windows\Temp\Volt</tt> (or wherever you extracted the files)</li>
<li>Extract the file <tt>usp.cab</tt> so that <tt>usp10.dll</tt> should appear in the <tt>C:\Windows\Temp\Volt</tt> directory</li>
<li>Reboot windows and before Windows starts press F8 to get the Windows start Menu</li>
<li>Choose the option to start in Safe Mode with Command Prompt</li>
<li>Login if necessary and when a command prompt appears type the command:<br />
<pre>
move C:\Windows\System32\usp10.dll C:\Windows\System32\usp10-old.dll
copy c:\Windows\Temp\Volt\usp10.dll C:\Windows\System32\
move "C:\Program Files\Common Files\Microsoft Shared\Office10\usp10.dll" "C:\Program Files\Common Files\Microsoft Shared\Office10\usp10-old.dll"
copy c:\Windows\Temp\Volt\usp10.dll "C:\Program Files\Common Files\Microsoft Shared\Office10"
exit
</pre>
</li>
<li>Type Ctrl-Alt-Del and Reboot your computer</li>
<li>You should now see Myanmar text rendered correctly in Internet Explorer and Notepad when using the font PadaukOT.</li>
</ol>
<p>If you have problems, it is possible that the dll is being used from another place. You can try running <tt>regedit.exe</tt> and searching for <tt>usp10.dll</tt>.</p>
</div>
<p class='right'><a href='../../MyanmarUnicode/Fonts/ThanLwin.php'>ThanLwin&gt;&gt;</a></p>
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
