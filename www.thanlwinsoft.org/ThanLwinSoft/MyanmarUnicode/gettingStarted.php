<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>A Guide to Using Myanmar Unicode</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../shared/thanlwin.css"/>
<link href="../icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Getting Started with Myanmar Unicode" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../shared/';myUnicode.initParse('../shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../"><img class="fleft" src="../icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="currentDoc"><span>Getting Started</span></li>
<li class="contentsDoc"><a href="../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/InputMethods/" title="InputMethods / Keyboards - how to type Myanmar Unicode">Input Methods</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/Applications/" title="Myanmar Unicode aware Applications">Applications</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/Sorting/" title="Sorting/Collating Myanmar in Dictionary Order">Sorting Myanmar</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/Parsing/" title="Line Breaking &amp; Tokenizing Myanmar">Parsing</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/Conversion/" title="Converting from old font encodings to Unicode">Converters</a></li>
<li class="contentsDir"><a href="../MyanmarUnicode/WebDevelopers/" title="Detecting Myanmar Support">Web Developers</a></li>
</ul></li><li class="contentsDir"><a href="../DocCharConvert/" title="Document Character Converter">DocCharConvert</a></li>
<li class="contentsDir"><a href="../LanguageBuddy/" title="Language Learning Software">LanguageBuddy</a></li>
<li class="contentsDir"><a href="../Ekaya/" title="Ekaya Input Method (keyboard)">Ekaya</a></li>
<li class="contentsDir"><a href="../../GraphiteOOoExt/" title="Graphite OpenOffice.org extension">Graphite OOo</a></li>
<li class="contentsDir"><a href="../../myoooext/" title="Myanmar OpenOffice.org extension">Myanmar OOo</a></li>
<li class="contentsDir"><a href="../Downloads/" title="Download Myanmar Unicode Software &amp; Tools">Downloads</a></li>
<li class="contentsDir"><a href="../About/" title="About ThanLwinSoft">About</a></li>
</ul></div>
<div class='body'>
<h2>A Guide to Using Myanmar Unicode</h2>
<div>
<p class="enTranslation">Please select your Operating System.</p>
<p class="myTranslation">အသုံးပြုနေသော လုပ်ဆောင်ပုံနည်းစနစ်ကို ရွေးချယ်ပါ။</p>
<form id="chooseOs" action="">
<p>
<span style="display:inline-block;">
<input type="radio" name="os" value="win2k" id="os_win2k" onchange="chooseOs();"/><label for="os_win2k">Windows 2000</label>
</span>
<span style="display:inline-block;">
<input type="radio" name="os" value="winxp" id="os_winxp"  onchange="chooseOs();"  checked="on"/><label for="os_winxp">Windows XP SP2 or SP3</label>
</span>
<span style="display:inline-block;">
<input type="radio" name="os" value="vista" id="os_vista"  onchange="chooseOs();"/><label for="os_winxp">Windows Vista</label>
</span>
<span style="display:inline-block;">
<input type="radio" name="os" value="vista" id="os_win7"  onchange="chooseOs();"/><label for="os_winxp">Windows 7</label>
</span>
<span style="display:inline-block;">
<input type="radio" name="os" value="ubuntu" id="os_ubuntu"  onchange="chooseOs();"/><label for="os_ubuntu">Ubuntu Linux</label>
</span>
</p>
</form>
<div id="notsupported" style="display:none;">
<p class='myWarning'>Windows 2000 does not enable the OpenType features required to use Myanmar Unicode enabled fonts. Please upgrade to an Operating System which does.</p>
<p class='myWarning'>ဝင်းဒိုး ၂၀၀၀ သည် မြန်မာယူနီကုတ်အသုံးပြုသောဖောင့်များကိုအသုံးပြုရန် လိုအပ်သော OpenType အင်္ဂါရပ်များကို အသုံးမပြုနိုင်ပါ။ လုပ်ဆောင်ပုံနည်းစနစ်ကို ပြန်တင်ပါ။  </p>
</div>
<div id="windows" style="display:block;">
<h2 class="enTranslation">Myanmar Unicode on Windows</h2>
<h3 class="myTranslation">ဝင်းဒိုးပေါ်ရှိမြန်မာယူနီကုတ်</h3>
<div id="winxpCtl">
<h3 class="enTranslation">Enabling Complex Script Support</h3>
<h3 class="myTranslation">ရှုပ်ထွေးသော လက်ရေး/စာ ထောက်ပံ့မှု အသုံးပြုနိုင်ခြင်း</h3>
<p class="enTranslation">You must enable Complex Text support for correct rendering. Goto <em>Control Panel-&gt;Regional and Language Options</em>. 
Click the <em>Languages</em> tab and make sure that there is a tick beside 
"Install files for Complex Script and right-to-left languages (including Thai)". 
You will need to insert your Windows XP CD-ROM to complete installation of complex script support.</p>
<p class="myTranslation">မှန်ကန်သောပြသမှုအတွက် ရှုပ်ထွေးသော စာသားထောက်ပံ့မှုကိုပါ လုပ်နိုင်ရမည်။ <em>Control Panel-&gt;Regional and Language Options</em> ကိုသွားပါ။ <em>Languages</em> tab ကို ကလစ်နှိပ်ပါ။ "Install files for Complex Script and right-to-left languages (including Thai)" ဘေးတွင် အမှန်အမှတ်ရှိရမည်။ ရှုပ်ထွေးသော လက်ရေး/စာ ထောက်ပံ့မှုထည့်သွင်းခြင်း ပြည့်စုံစေရန် Windows XP CD-ROM ကို ထည့်ရန်လိုအပ်ပါလိမ့်မည်။</p>
<p  class="centre">
<img src="Fonts/RegionalLanguageOptions.png" />
</p>
</div>
<h3 class="enTranslation">Install some Myanmar Unicode Fonts</h3>
<h3 class="myTranslation">မြန်မာယူနီကုတ်ဖောင့်တချို့ကို ထည့်သွင်းပါ။</h3>
<p class="enTranslation">
Download one or more of the following Myanmar Unicode Fonts:
</p>
<p class="myTranslation">တစ်ခု (သို့) တစ်ခုထက်ပိုသော အောက်ပါမြန်မာယူနီကုတ်ဖောင့်များကို ဒေါင်းလုတ်ဆွဲပါ။</p>
<div class="centre">
<ul style="display:inline-block; text-align: left;">
<li><a href="http://scripts.sil.org/cms/scripts/render_download.php?&format=file&media_id=MH_Padauk_exe">Padauk</a></li>
<li><a href='../Downloads/Fonts/thanlwinfonts-0.003.zip'>ThanLwin</a></li>
<li><a href="http://code.google.com/p/myanmar3source/downloads/detail?name=mm3.ttf&can=2&q=">Myanmar3</a></li>
<li><a href="http://www.parabaik.info/downloads/updated/unicode52/Parabaik_UTN11-3.ttf">Parabaik</a></li>
</ul>
</div>
<p class="enTranslation">Copy the fonts into your Windows\Fonts directory.</p>
<p class="myTranslation">Windows\Fonts ဒါရိုက်ထရီတွင် ဖောင့်များကို ကူးယူထည့်ပါ။<span</p>
<h3 class="enTranslation">Install a Myanmar Unicode Keyboard</h3>
<h3 class="myTranslation">မြန်မာယူနီကုတ်ကီးဘုတ်တစ်ခုကို ထည့်သွင်းပါ။</h3>
<p class="enTranslation">You need to install a smart keyboard to type proper Myanmar Unicode. You can use the ThanLwinSoft Ekaya software. <span id="win64">Windows 7 64 bit and Vista 64 bit users will need to also install the 64 bit version of Ekaya. Use <em>Ekaya 64</em> for 64 bit applications, use <em>Ekaya</em> for 32 bit applications.</span></p>
<p class="myTranslation">အဆင်ပြေသင့်တော်သော မြန်မာယူနီကုတ်ကို ရိုက်ရန် ဆက်စပ်ဆင်ခြင်နိုင်စွမ်းသော ကီးဘုတ်တစ်ခုကို ထည့်သွင်းရန် လိုအပ်သည်။ သံလွင်ဆော့ဖ် အက္ခရာဆော့ဖ်ဝဲကို အသုံးပြုနိုင်သည်။ <span id="win64">Windows 7 64 bit နှင့် Vista 64 bit အသုံးပြုသူများသည် အက္ခရာ 64 bit version ကိုလဲထည့်သွင်းရန်လိုအပ်ပါလိမ့်မည်။ 64 bit အသုံးပြုခြင်းအတွက် <em>Ekaya 64</em> ကိုသုံးပါ။ 32 bit အသုံးပြုခြင်းအတွက် <em>Ekaya</em> ကိုသုံးပါ။</span></p>
<div class="centre">
<ul style="display:inline-block; text-align: left;">
<li>
<a href='../Downloads/Keyboards/Ekaya-0.1.9_x86.exe'>Ekaya</a></li>
<li id="ekaya64">
<a href='../Downloads/Keyboards/Ekaya-0.1.9_x86_64.exe'>Ekaya 64 bit</a></li>
</ul>
</div>
<p class="enTranslation">After installing you need to select Ekaya from the Language Bar on the Task Bar or at the top of the screen to type using a Myanmar keyboard.</p>
<p class="myTranslation">ထည့်သွင်းခြင်းပြီးသောအခါ မြန်မာကီးဘုတ်အသုံးပြုပြီး ရိုက်ရန် Task Bar (သို့) ကွန်ပျူတာမျက်နှာပြင်ထိပ်ဘက်ရှိ Language Bar မှ Ekaya ကို ရွေးချယ်ရန် လိုအပ်ပါသည်။</p>
<p class="centre">
<img src="../Ekaya/langbarEkaya.png" alt="Language Bar - Ekaya" />
</p>
</div>
</div>
<div id="ubuntu">
<h2 class="enTranslation">Myanmar Unicode on Ubuntu Linux</h2>
<h2 class="myTranslation">Ubuntu Linux ပေါ်ရှိ မြန်မာယူနီကုတ်</h2>
<p class="enTranslation">You will need an Internet Connection. Open <em>Applications/Ubuntu Software Center</em> and from the menu choose <em>Edit/Software Sources</em>. Enter your password and then on the <em>Other Software</em> tab click <em>Add</em> and type the line:</p>
<p class='myTranslation'>အင်တာနက်ဆက်သွယ်မှုရှိရန် လိုအပ်ပါလိမ့်မည်။ <em>Applications/Ubuntu Software Center</em> ကိုဖွင့်ပါ။ စကားဝှက်ရိုက်ပါ။ ထို့နောက် မန်နျူးမှ <em>Edit/Software Sources</em> ကိုရွေးချယ်ပါ။ <em>Other Software</em> တက်ဘ်နှိပ်ပြီး <em>Add</em> ကို ကလစ်နှိပ်ပါ။ ပြီးနောက် <tt>ttf-sil-padauk</tt> အောက်ပါလိုင်းကို ရိုက်ပါ။
</p>
<p class="centre"><tt>deb http://thanlwinsoft.org/ubuntu maverick main</tt></p>
<p class="enTranslation">Click <em>Add</em> again and enter the line:</p>
<p class='myTranslation'><em>Add</em> ကို ထပ်ပြီး ကလစ်နှိပ်ပါ။ ထို့နောက် အောက်ပါ SCIM နှင့် IBUS လိုင်းကို ဝင်ပါ။
</p>
<p class="centre"><tt>deb http://packages.sil.org/ubuntu maverick main</tt></p>
<p class="centre">
<img src="SoftwareSourcesThanLwinSoft.png" alt="Software Sources/Add" />
</p>
<p class="enTranslation">Install the packages <tt>ttf-sil-padauk</tt> and <tt>kmfl-keyboards-mywin</tt>. e.g. Open <em>Applications/Ubuntu Software Center</em> and search for Myanmar. Click <em>Install</em> if the packages are not already installed.</p>
<p class='myTranslation'><tt>ttf-sil-padauk</tt> နှင့် <tt>kmfl-keyboards-mywin</tt> စာထုပ်များကို ထည့်သွင်းပါ။ ဥပမာ- <em>Applications/Ubuntu Software Center</em> ကိုဖွင့်ပါ။ မြန်မာကိုရှာပါ။ စာထုပ်များ ထည့်သွင်းပြီးသားမဟုတ်လျှင် <em>Install</em> ကို ကလစ်နှိပ်ပါ။
</p>
<p class="centre">
<img src="UbuntuSoftwareCenterMyanmar.png" alt="Ubuntu Software Center/Myanmar"/>
</p>
<p class="enTranslation">There are 2 options for the Input Method: SCIM or IBUS using KMFL. The SCIM/KMFL packages are available in the Ubuntu repositories.</p>
<p class='myTranslation'>ထည့်သွင်းရန် နည်းလမ်း အတွက် ရွေးပိုင်ခွင့် ၂ နည်းရှိပါသည်- KMFL အသုံးပြုခြင်းအတွက် SCIM (သို့) IBUS ။ Ubuntu repositories တွင် SCIM/KMFL စာထုပ်များရယူနိုင်ပါသည်။
</p>
<h3 class="enTranslation">SCIM Input Method (Option 1)</h3>
<h3 class="myTranslation">SCIM ထည့်သွင်းနည်းလမ်း (ရွေးပိုင်ခွင့် ၁)</h3> 
<p class="enTranslation">Set the Input Method to <tt>scim-bridge</tt> using <em>System/Preferences/Input Method Switcher</em>.
</p>
<p class='myTranslation'><em>System/Preferences/Input Method Switcher</em> ကိုသုံးပြီး <tt>scim-bridge</tt> ထည့်သွင်းနည်းလမ်းကို ရွေးပါ။
</p>
<p class="centre">
<img src="ImSwitchScimBridge.png" alt="im-switch -z en_US -s scim-bridge"/>
</p>
<h3 class="enTranslation">IBUS (Option 2)</h3>
<h3 class="myTranslation">IBUS (ရွေးပိုင်ခွင့် ၂)</h3>
<p class="enTranslation">IBUS is a newer Input Method which solves some of the problems with SCIM. However, the IBUS-KMFL package is only available from SIL, not the Ubuntu repositories.</p>
<p class='myTranslation'>IBUS သည် SCIM နှင့်အတူ ပြဿနာတချို့ကို ဖြေရှင်းနိုင်သော ထည့်သွင်းနည်းလမ်းအသစ်တစ်ခု ဖြစ်သည်။ သို့သော်လည်း IBUS-KMFL စာထုပ်သည် SIL မှာပဲ ရယူနိုင်သည်။ Ubuntu repositories တွင်မရယူနိုင်ပါ။ 
</p>
<p class="centre">
<img src="ImSwitchIbus.png" alt="im-switch -z en_US -s ibus"/>
</p>
</div>
<h3 class="enTranslation">Firefox Fonts</h3>
<h3 class="myTranslation">Firefox ဖောင့်များ</h3>
<p class="enTranslation">Sometimes you may need to specify a Myanmar Uncode font in your Firefox preferences, especially if you also have the pseudo-Unicode font ZawGyi installed. From the <em>Tools/Options</em> or <em>Edit/Preferences</em> dialog goto the <em>Content</em> tab and click the <em>Advanced</em> button under <em>Fonts & Colors</em>. Choose Fonts for "Other Languages" and set the <em>Serif</em> and <em>Sans-serif</em> fonts to be Myanmar Unicode fonts.</p>
<p class="myTranslation">တစ်ခါတရံတွင် Firefox preferences တွင် မြန်မာယူနီကုတ်ဖောင့်ကို ရွေးချယ်ရန်လိုအပ်နိုင်သည်။ အထူးသဖြင့် အယောင်ဆောင်ယူနီကုတ်ဖြစ်သော ဇော်ဂျီဖောင့်ကို ထည့်သွင်းပြီးသားဖြစ်လျှင် ရွေးချယ်ရန်လိုအပ်လိမ့်မည်။ <em>Tools/Options</em> (သို့) <em>Edit/Preferences</em> ဒိုင်ယာလော့ဒ်မှ <em>Content</em> တက်ဘ် ကိုသွားပါ။ ထို့နောက် <em>Fonts & Colors</em> အောက်ရှိ <em>Advanced</em> အကွက်ကို ကလစ်နှိပ်ပါ။ "Other Languages" ကိုရွေးပါ။ <em>Serif</em> နှင့် <em>Sans-serif</em> အတွက် မြန်မာယူနီကုတ်ဖောင့်များကို ရွေးပါ။
</p><!-- ? -->
<p class="centre">
<img src="FirefoxAdvancedFonts.png" alt="Firefox Advanced Fonts"/>
</p>
<h3 class="enTranslation">More Information</h3>
<h3 class="myTranslation">သတင်းအချက်အလက်ပိုများ</h3>
<p class="enTranslation">For more details, please see the explanations on the rest of this site.</p>
<p class="myTranslation">သတင်းအချက်အလက်ပိုများအတွက် ဝက်ဘ်ဆိုက်ပေါ်ရှိ ကျန်ရှိသော ရှင်းလင်းချက်များကို ကြည့်ပါ။
</p>
</div>
<script type="text/javascript">
function chooseOs()
{
	var theForm = document.getElementById("chooseOs");
	var winDiv = document.getElementById("windows");
	var ubuntuDiv = document.getElementById("ubuntu");
	var notsupportedDiv = document.getElementById("notsupported");
	var winxpCtlDiv = document.getElementById("winxpCtl");
	var win64 = document.getElementById("win64");
	var ekaya64 = document.getElementById("ekaya64");
	for (var i = 0; i < theForm.os.length; i++)
	{
		if (theForm.os[i].checked)
		{
			if (theForm.os[i].value == 'win2k')
			{
				notsupportedDiv.style.display = 'block';
				winDiv.style.display = 'none';
				ubuntuDiv.style.display = 'none';
			}
			else if (theForm.os[i].value == 'ubuntu')
			{
				notsupportedDiv.style.display = 'none';
				winDiv.style.display = 'none';
				ubuntuDiv.style.display = 'block';
			}
			else if (theForm.os[i].value == 'winxp')
			{
				notsupportedDiv.style.display = 'none';
				winDiv.style.display = 'block';
				winxpCtlDiv.style.display = 'block';
				ubuntuDiv.style.display = 'none';
				win64.style.display = 'none';
				ekaya64.style.display = 'none';
			}
			else // Vista, Win 7
			{
				notsupportedDiv.style.display = 'none';
				winDiv.style.display = 'block';
				winxpCtlDiv.style.display = 'none';
				ubuntuDiv.style.display = 'none';
				win64.style.display = 'inline';
				ekaya64.style.display = 'block';				
			}
		}
	}
}
</script>
<p class='right'><a href='../MyanmarUnicode/Intro.php'>Intro&gt;&gt;</a></p>
<div class="footer">
    <!-- Creative Commons License -->
<a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/" style="float:right; vertical-align: top;"><img alt="Creative Commons License" src="http://creativecommons.org/images/public/somerights20.gif" style="border: none;"/></a>
This website is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/">Creative Commons Attribution-ShareAlike 2.5 License</a> except where another license is explicitly stated.
<!-- /Creative Commons License -->
    <p>For more information <script type='text/javascript'>showMT('contact ThanLwinSoft.org','info','thanlwinsoft','org')</script><span class="my">သံ‌လွင်</span><br /><script type='text/javascript'><!--
myUnicode.imgPrefix = '../shared/myWebDevelopment/';
myUnicode.checkWithMsg();
--></script></p></div>
</div></body>
</html>
