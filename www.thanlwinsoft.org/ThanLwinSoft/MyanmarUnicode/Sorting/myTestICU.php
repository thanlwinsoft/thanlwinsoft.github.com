<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>Myanmar Sorting: Test Myanmar ICU Collation</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../shared/thanlwin.css"/>
<link href="../../icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Unicode, collation, sorting" lang="en" name="keywords"/></head>
<body onload="thanlwinLoaded();myK.pathStem = '../../shared/';myUnicode.initParse('../../shared/myWebDevelopment/');myK.registerKeyboard(['my']);">
<div class="contentsBar" id="contentsBar">
<ul class="contents"><li><h1><a href="../../../"><img class="fleft" src="../../icons/ThanLwin.jpg" alt="ThanLwinSoft Logo"/></a><span class="my">သံ‌လွင်</span> Soft</h1></li><li class="contentsDoc"><a href="../../" title="ThanLwinSoft">Home</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/" title="Unicode for the Myanmar/Burmese Script"> Myanmar Unicode</a><br />
<ul class="contents"><li class="contentsDoc"><a href="../../MyanmarUnicode/gettingStarted.php" title="Getting Started with Myanmar Unicode">Getting Started</a></li>
<li class="contentsDoc"><a href="../../MyanmarUnicode/Intro.php" title="Introduction">Intro</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Fonts/" title="Myanmar Unicode Fonts">Fonts</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/InputMethods/" title="InputMethods / Keyboards - how to type Myanmar Unicode">Input Methods</a></li>
<li class="contentsDir"><a href="../../MyanmarUnicode/Applications/" title="Myanmar Unicode aware Applications">Applications</a></li>
<li class="currentDir"><a href="../../MyanmarUnicode/Sorting/" title="Sorting/Collating Myanmar in Dictionary Order">Sorting Myanmar</a><br />
<ul class="contents"><li class="currentDoc"><span>Myanmar ICU</span></li>
</ul></li><li class="contentsDir"><a href="../../MyanmarUnicode/Parsing/" title="Line Breaking &amp; Tokenizing Myanmar">Parsing</a></li>
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
<h1>Myanmar Sorting</h1>
<h2>Test Myanmar ICU Collation</h2>
<script type="text/javascript">
function loadSample(name)
{
    var text2sort = document.getElementById('text2sort');
    var sample = document.getElementById(name);
    if (sample)
    {
        text2sort.value = sample.innerHTML;
    }
    document.forms[0].submit();
}
</script>
<div>
<p>Please enter your Myanmar data below (conformant to Unicode 5.1). Or, try some of the sample data:
<a onclick="loadSample('syllables')" style="cursor: pointer; text-decoration: underline;">Syllables</a>
<a onclick="loadSample('consonants')" style="cursor: pointer; text-decoration: underline;">Consonants</a>
<a onclick="loadSample('medials')" style="cursor: pointer; text-decoration: underline;">Medials</a>
<a onclick="loadSample('vowels')" style="cursor: pointer; text-decoration: underline;">Vowels</a>
<a onclick="loadSample('tones')" style="cursor: pointer; text-decoration: underline;">Tones</a>
</p>
<p style="display: none;" id="empty"></p>
<div class="tlsNoConvert">
<p style="display: none;" id="syllables">

က
ကာ
ကိ
ကီ
ကု
ကူ
ကေ
ကဲ
ကံ
ကျ
ကြ
ကွ
ကား
ကူး
ကဲ့
ကော
ကို
ကက်
ကင်
ကစ်
ကတ်
ကဒ်
ကန်
ကပ်
ကမ်
ကုံ
ကယ်
ကျီ
ကျူ
ကျေ
ကျံ
ကြာ
ကြီ
ကြေ
ကြဲ
ကြံ
ကွာ
ကွဲ
ကြွ
ကော်
ကို့
ကိုး
ကင်း
ကည်း
ကုတ်
ကန့်
ကန်း
ကိန်
ကုန်
ကုပ်
ကမ်း
ကိမ်
ကျား
ကျီး
ကျုး
ကျူး
ကျေး
ကျော
ကျို
ကျက်
ကျင်
ကျစ်
ကျန်
ကျပ်
ကျယ်
ကြား
ကြိး
ကြီး
ကြူး
ကြေး
ကြော
ကြို
ကြက်
ကြင်
ကြဉ်
ကြည်
ကြတ်
ကြပ်
ကြုံ
ကြယ်
ကွား
ကွေ့
ကွက်
ကွန်
ကွပ်
ကွယ်
ကျွံ
ကြွေ
ကောက်
ကိုက်
ကောင်
ကိုင်
ကိစ္စ
ကုန်း
ကမ္ဘာ
ကိုယ်
ကျော့
ကျော်
ကျိုး
ကျင့်
ကျင်း
ကျဉ်း
ကျည်း
ကျိတ်
ကျန်း
ကျိန်
ကျိပ်
ကျုပ်
ကျမ်း
ကျုံ့
ကျုံး
ကြော်
ကြိုး
ကြဉ်း
ကြည့်
ကြည်း
ကြိတ်
ကြုတ်
ကြုန်
ကြမ်း
ကြိမ်
ကြုံး
ကွင်း
ကျွေး
ကျွတ်
ကျွန်
ကြွား
ကြွေး
ကြွက်
ကြွပ်
ကြွယ်
ကောင်း
ကိုင်း
ကိစ္ဆာ
ကိတ္တိ
ကုတ္တု
ကုတ္တေ
ကန္ဒက်
ကိန္တု
ကျောက်
ကျိန်း
ကြောက်
ကြိုက်
ကြိုင်
ကြိမ်း
ကျွန်း
ကျွမ်း
ကြွင်း
ကျောင်း
ကျိုင်း
ကြောင့်
ကြောင်း
ကြိုင်း
ကျွန်ုပ်
</p>
<p style="display: none;" id="consonants">
၀
၁
၂
၃
၄
၅
၆
၇
၈
၉
က
ခ
ဂ
ဃ
င
စ
ဆ
ဇ
ဈ
ဉ
ည
ဋ
ဌ
ဍ
ဎ
ဏ
တ
ထ
ဒ
ဓ
န
ပ
ဖ
ဗ
ဘ
မ
ယ
ရ
လ
ဝ
သ
ဟ
ဠ
အ
ဢ
ဣ
ဤ
ဥ
ဦ
ဧ
ဨ
ဩ
ဪ
ဿ
ၐ
ၑ
ၒ
ၓ
ၔ
ၕ
ၚ
ၛ
ၜ
ၝ
ၡ
ၥ
ၦ
ၮ
ၯ
ၰ
ၵ
ၶ
ၷ
ၸ
ၹ
ၺ
ၻ
ၼ
ၽ
ၾ
ၿ
ႀ
ႁ
ႎ

</p>
<p style="display: none;" id="medials">
◌ၞ
◌ၟ
◌ျ
◌ြ
◌ၠ
◌ွ
◌ႂ
◌ှ
</p>
<p style="display: none;" id="vowels">
◌ာ
◌ါ
◌ႃ
◌ၲ
◌ိ
◌ၱ
◌ီ
◌ဳ
◌ၧ
◌ၨ
◌ု
◌ၳ
◌ၢ
◌ၴ
◌ူ
◌ၖ
◌ၗ
◌ၘ
◌ၙ
◌ေ
◌ႄ
◌ဵ
◌ႅ
◌ဲ
◌ဴ
◌ံ
◌ၣ
◌ႆ
</p>
<p style="display: none;" id="tones">
◌ၩ
◌့
◌ႇ
◌ႋ
◌ၪ
◌ၢ်
◌ႈ
◌ႌ
◌ၫ
◌ာ်
◌း
◌ၬ
◌့း
◌ႉ
◌ၭ
◌ၣ်
◌ႊ
◌ႍ
◌ႏ
◌ၤ
</p>
</div>
<div style="float: right; width: 40%;">
Please enter some lines to sort.</div>
<form action="myTestICU.php" method="POST" enctype="multipart/form-data">
<div style="float: left; width: 40%;">
<textarea name="text2sort" id="text2sort" style="min-height: 300px;"></textarea><br />
<button name="submitButton" type="submit">Sort</button>
<a onclick="loadSample('empty')" style="cursor: pointer; text-decoration: underline;">Clear</a>
</div>
<div style="clear:both;">
</div>
<div style='display: none;' id='bug'><h2>Sorting Bug Report</h2>
<p>Your Email Address: 
<input type="text" name="email" />
</p>
<p>Please enter the correct sort order:</p>
<textarea name="corrected" id="corrected" style="min-height: 300px;">
</textarea>
<p>Please explain why you believe this is correct. For example, give a reference to an example that uses this sort order.</p>
<textarea name="explanation" id="explanation" rows="5"></textarea>
<p>If possible, please scan the page that shows the correct sort order and attach it below. (Maximum size: 1Mb)</p>
<input type="file" name="evidence" />
<button type="submit" name="send" value='bug'>Send</button>
</div></form>
</div>
<p class='right'><a href='../../MyanmarUnicode/Parsing/'>Parsing&gt;&gt;</a></p>
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
