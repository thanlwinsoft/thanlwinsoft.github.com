<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><title>Myanmar Searching: Using Nutch with Myanmar</title>
<meta content="text/html; charset=UTF-8;" http-equiv="Content-Type"/>
<link type="text/css" rel="stylesheet" href="../../_shared/myWebDevelopment/myKeyboard.css"/>
<link type="text/css" rel="stylesheet" href="../../_shared/thanlwin.css"/>
<link href="../../_icons/shortcut.png" rel="SHORTCUT ICON"/>
<script  type="text/javascript" src="../../_shared/thanlwin.js">//padding to keep end tag</script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/common/tlsCommon.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myDetection.js"></script>
<script type="text/javascript" src="../../_shared/myWebDevelopment/myKeyboard.js"></script>
<meta content="Myanmar Nutch" lang="en" name="keywords"/></head>
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
<li class="currentDir"><a href="../../MyanmarUnicode/Parsing/" title="Line Breaking &amp; Tokenizing Myanmar">Parsing</a><br />
<ul class="contents"><li class="currentDoc"><span>Searching</span></li>
</ul></li><li class="contentsDir"><a href="../../MyanmarUnicode/Conversion/" title="Converting from old font encodings to Unicode">Converters</a></li>
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
<h1>Myanmar Searching</h1>
<h2>Using Nutch with Myanmar</h2>
/var/www<div>
<p><a href="http://lucene.apache.org/nutch/">Nutch</a> uses <a href="http://lucene.apache.org/java/docs/index.html">Lucene</a> to index and search documents on the Web. Normally, it tokenizes text based on whitespace. However, it is easy to specify language specific tokenizers. An implementation of a Myanmar Tokenizer and associated files is available below.
</p>
<h2>Instructions</h2>
<p>Download <a href="http://lucene.apache.org/nutch/">Nutch</a> and <a href="http://lucene.apache.org/java/docs/index.html">Lucene</a> from Apache and then download the following Myanmar specific files.</p>
/var/www/ThanLwinSoft/Downloads/Searching/ not found<p>These instructions assume that you have a suitable Java JDK (1.4 or higher) and <a href="http://ant.apache.org/">ant</a> and installed. Create a directory to contain the files e.g. /opt/nutch and place the downloaded files in it, then run this script:</p>
<pre>
#!/bin/bash
## This script assumes that it is run as a user who has write permission in /opt/nutch
## Update these variables to the versions that you are using
export BASE_DIR=/opt/nutch
export LUCENE=lucene-1.9.1
export ORIG_LUCENE_VER=1.9-rc1
export NEW_LUCENE_VER=1.9.2
export NUTCH=nutch-0.8.1
export MY_NUTCH_DATE=20070302
export CATALINA_HOME=/opt/apache-tomcat-6.0.10

missing=0
if ! (test -f $BASE_DIR/$LUCENE-src.tar.gz) then missing=1; fi
if ! (test -f $BASE_DIR/$NUTCH.tar.gz) then missing=1; fi
if ! (test -f $BASE_DIR/nutch-analysis-my-$MY_NUTCH_DATE.zip) then missing=1; fi
if ! (test -f $BASE_DIR/lucene-analysis-my-$MY_NUTCH_DATE.zip) then missing=1; fi
if ! (test -f $BASE_DIR/myNgram-$MY_NUTCH_DATE.zip) then missing=1; fi
if test $missing
then
echo WARNING: $BASE_DIR/$LUCENE-src.tar.gz $BASE_DIR/$NUTCH.tar.gz $BASE_DIR/nutch-analysis-my-$MY_NUTCH_DATE.zip 
echo $BASE_DIR$BASE_DIR/lucene-analysis-my-$MY_NUTCH_DATE.zip $BASE_DIR/myNgram-$MY_NUTCH_DATE.zip not found.
return 1
fi

cd $BASE_DIR
tar -zxvf $LUCENE-src.tar.gz
cd $LUCENE
ant
cd $BASE_DIR/$LUCENE/contrib/analyzers/src/java/
unzip $BASE_DIR/lucene-analysis-my-$MY_NUTCH_DATE.zip
cd $BASE_DIR/$LUCENE/contrib/analyzers
ant
cd $BASE_DIR/$LUCENE/contrib/miscellaneous
ant
cd $BASE_DIR

tar -zxvf $NUTCH.tar.gz
cd $NUTCH
ant
## use your locally built lucene-analyzers
cd $BASE_DIR/$NUTCH/src/plugin/lib-lucene-analyzers
cp plugin.xml plugin.xml.orig
## update the version to the one that you are using
cat plugin.xml.orig | sed s/$ORIG_LUCENE_VER/$NEW_LUCENE_VER/g > plugin.xml
cd lib
ln -s ../../../../../$LUCENE/build/contrib/analyzers/lucene-analyzers-$NEW_LUCENE_VER-dev.jar
## build the myanmar nutch analysis wrapper
cd $BASE_DIR/$NUTCH/src/plugin
unzip $BASE_DIR/nutch-analysis-my-$MY_NUTCH_DATE.zip
cd analysis-my
ant
cd ../
## You may want to create your own ngrams
## e.g. if you have a large UTF-8 encoded Myanmar text file called myanmar.txt in your base directory
# cd $BASE_DIR/$NUTCH/src/plugin/languageidentifier/src/java/org/apache/nutch/analysis/lang/
# java -cp $BASE_DIR/$NUTCH/build/plugins/language-identifier/language-identifier.jar:$BASE_DIR/$NUTCH/lib/commons-logging-1.0.4.jar  org.apache.nutch.analysis.lang.NGramProfile -create my $BASE_DIR/myanmar.txt  UTF-8
## otherwise you can just use this one:
unzip $BASE_DIR/myNgram-$MY_NUTCH_DATE.zip
cd languageidentifier
ant
cd $BASE_DIR/$NUTCH
mkdir oldlib
mv lib/lucene-core*.jar oldlib
mv lib/lucene-misc*.jar oldlib
cd $BASE_DIR/$NUTCH/lib
ln -s ../../$LUCENE/build/lucene-core-$NEW_LUCENE_VER-dev.jar
ln -s ../../$LUCENE/build/contrib/misc/lucene-misc-$NEW_LUCENE_VER-dev.jar
cd $BASE_DIR/$NUTCH
## get rid of the original versions of the plugins that we have rebuilt
## so they don't get picked up on the class path accidentally
rm -rf plugins/lib-lucene-analyzers
rm -rf plugins/language-identifier

echo Edit nutch-site.xml as appropriate
echo Make sure that the plugin.includes property value includes 
echo language-identifier\|analysis-my
gedit conf/nutch-site.xml
echo Edit src/web/include/style.html to include a suitable Myanmar font
echo e.g. add a style: "
* {
  font-family: Padauk, Myanmar3, Arial, Helvetica, sans-serif;
  line-height: 1.5em; 
}"
gedit src/web/include/style.html
## build the war file with the configuration data
ant war
if test -f $CATALINA_HOME/webapps
then 
    cp $NUTCH/build/$NUTCH.war $CATALINA_HOME/webapps
else
echo now copy $NUTCH/build/$NUTCH.war into your Tomcat catalina webapps directory
fi
echo Follow the instructions at http://lucene.apache.org/nutch/tutorial8.html
echo to build an index e.g. in /opt/nutch/crawl and then test searching.

</pre>
<p>When this script runs, you will be asked to edit a couple of files. You will need to update your nutch-0.8.1/conf/nutch-site.xml to specify the language plugins and your crawl directory as in the example below. The searcher.dir property must match the one that you use in the -dir option to bin/nutch/crawl as described in the <a href="http://lucene.apache.org/nutch/tutorial8.html">Nutch Tutorial</a>.</p>
<pre>
&lt;property&gt;
  &lt;name&gt;plugin.includes&lt;/name&gt;
  &lt;value&gt;protocol-http|urlfilter-regex|parse-(text|html)|index-basic|query-(basic|site|url)|summary-basic|scoring-opic|language-identifier|analysis-(my)&lt;/value&gt;
  &lt;description&gt;Regular expression naming plugin directory names to
  include.  Any plugin not matching this expression is excluded.
  In any case you need at least include the nutch-extensionpoints plugin. By
  default Nutch includes crawling just HTML and plain text via HTTP,
  and basic indexing and search plugins.
  &lt;/description&gt;
&lt;/property&gt;
&lt;property&gt;
    &lt;name&gt;searcher.dir&lt;/name&gt;
    &lt;value&gt;/opt/nutch/crawl&lt;/value&gt;
&lt;/property&gt;
</pre>
<p>You will probably want to edit the styles in nutch-0.8.1/src/web/include/style.html e.g.</p>
<pre>
/* Default to a Myannmar font compliant to the latest Unicode proposal */
* {
  font-family: PadaukOT, Myanmar2, Padauk, Arial, Helvetica, sans-serif;
  line-height: 1.5em;
  font-size: 12px;
}
/* Underline doesn't look great with Myanmar, so use a bottom border instead */
a {
  text-decoration: none;
  border-bottom-style: solid;
  border-bottom-width: 1px;
}
</pre>
<p>The Apache Tomcat $CATALINA_HOME/conf/server.xml file needs to be modified to support UTF-8 queries. Make sure that the HTTP connector has the URIEncoding attribute set. e.g.</p>
<pre>
&lt;Connector port="8080" protocol="HTTP/1.1" 
               maxThreads="150" connectionTimeout="20000" 
               redirectPort="8443" 
               URIEncoding="UTF-8" /&gt;
</pre>
<p>You are now ready to follow the instructions in the <a href="http://lucene.apache.org/nutch/tutorial8.html">Nutch Tutorial</a> to create an index and then test searching using the Tomcat interface.</p>
</div>
<p class='right'><a href='../../MyanmarUnicode/Conversion/'>Converters&gt;&gt;</a></p>
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
