<?
$s_id = 1;
$navpage = $s_id;
$s_name = "home";
$tmplt = 1;
$no_photo = 0;
?>

<?
include ("../templates/".$tmplt."/header.php");
?>

</head>
<body id="home">
<?
include ("../templates/".$tmplt."/headdivs.php");
?>


<?
print("<div id=\"infoblock\">\n");

print("<div id=\"infocontainerwrap\">\n");

//include ("../templates/".$tmplt."/title.php");

//print("<div id=\"infocontainer\">\n");

$f_id = 10;
$no_nav = 1;
$no_date = 1;
$how_to_order = "ordnum";
include ("../".$acmspagesdir."/templates/default/feature_alone.php");
?>
<?
		print("<div class=\"brakeitup\"></div>\n");


print("<div id=\"flashbox\" style=\"float:left;clear:both;margin-left:10px;\">\n");
//print("<a href=\"about/\" title=\"enter\" class=\"logolink\"><img src=\"media/images/section_".$s_id.".jpg\" alt=\"enter'\" id=\"thephoto\" /></a>");


$satayname = "a.swf";
$swfname = "home.swf";
$swfheight = "212";
$swfwidth = "460";
$swfbgcolor = "#000";
//$wmode = "transparent";


print("<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0\" width=\"$swfwidth\" height=\"$swfheight\" id=\"fadein540\">\n");
print("<param name=\"movie\" value=\"$swfname\" />\n");
print("<param name=\"quality\" value=\"high\" />\n");
print("<param name=\"wmode\" value=\"$wmode\" />\n");
print("<param name=\"bgcolor\" value=\"$swfbgcolor\" />\n");
print("<embed src=\"$swfname\" quality=\"high\" bgcolor=\"$swfbgcolor\" wmode=\"$wmode\" width=\"$swfwidth\" height=\"$swfheight\" allowScriptAccess=\"sameDomain\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />\n");
print("</object>\n");

/*
print("<object type=\"application/x-shockwave-flash\" data=\"$satayname?path=$swfname\" width=\"$swfwidth\" height=\"$swfheight\">\n");
print("<param name=\"movie\" value=\"$satayname?path=$swfname\" />\n");
print("<param name=\"quality\" value=\"high\" />\n");
print("<param name=\"bgcolor\" value=\"$swfbgcolor\" />\n");
//print("<param name=\"wmode\" value=\"$wmode\" />\n");
print("</object>\n");
*/

print("</div>\n");
?>

                <!--</div> closes infocontainer div -->
                </div><!-- closes infocontainerwrap div -->
                </div><!-- closes infoblock div  -->


<?
include ("../templates/".$tmplt."/footer.php");
?>
	
