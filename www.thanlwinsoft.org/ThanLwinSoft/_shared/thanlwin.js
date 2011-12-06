
var background = "#fffff0";
var contentsBackground = "#ffffd0";

function showMT(display, user, domA, domB)
{
  document.writeln("<a href='mailto:" + user + "@" + domA + "." + domB + "'>" + 
                     display + "</a>");
}

function thanlwinLoaded()
{
    var contentsBar = document.getElementById('contentsBar');
    if (contentsBar && (typeof myKeyboardMover != 'undefined') &&
        (myKeyboardMover.windowSize().height < contentsBar.offsetHeight))
    {
        contentsBar.style.position = 'absolute';
    }
}

function showTab(link, target)
{
    var tabList = document.getElementById("tabList");
    if (tabList)
    {
        var links = tabList.getElementsByTagName("li");
        for (var j = 0; j < links.length; j++)
        {
            links.item(j).style.backgroundColor = contentsBackground;
        }
    }
    var tabsDiv = document.getElementById("tabs");
    if (tabsDiv)
    {
        var divs = tabsDiv.getElementsByTagName("div");
        for (var i = 0; i < divs.length; i++)
        {
            var course = divs.item(i);
            if (course.id == target)
            {
                course.style.display = "";
                link.style.backgroundColor = background;
            }
            else
            {
                course.style.display = "none";
            }
        }
    }
}
function removeEclipseLinks()
{
    if (String(window.location).toLowerCase().indexOf("thanlwinsoft") > -1)
    {
        docCharConvertInEclipse = false;
    }
    if (!docCharConvertInEclipse)
    {
        var links = document.body.getElementsByTagName("a");
        for (var i = 0; i < links.length; i++)
        {
            var a = links.item(i);
            if (a.href.indexOf("org.eclipse.ui.intro") > -1)
            {
                a.href = "introduction.xhtml";
            }
        }
    }
}

myUnsupported = '<p class=\"myWarning\">Your Web Browser does not support Myanmar Unicode, please see <a href=\"/ThanLwinSoft/MyanmarUnicode/WebDevelopers/#detect\">here</a> to get a browser with Myanmar Unicode Support.</p>';


