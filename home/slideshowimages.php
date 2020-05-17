<!--  
'timer' :: number of seconds between each image transition
'order' :: how you want your images displayed. choose either 'sequential' or 'random'
'looping' :: if the slide show is in sequential mode, this stops the show at the last image (use 'yes' for looping, 'no' for not)
'fadeTime' :: velocity of image crossfade. Increment for faster fades, decrement for slower. Approximately equal to seconds.
'xpos' :: _x position of all loaded clips (0 is default)
'ypos' :: _y position of all loaded clips (0 is default)
-->
<gallery timer="5" order="sequential" fadetime="2" looping="yes" xpos="0" ypos="0">

<?
//this file covers the songs

$cat = "slideshowimages";

$dir = "".$cat."";

$mydir = dir($dir);

$thismanythings = 0;
while ($entry=$mydir->read()) {

if (($entry!=".")&&($entry!="..")){

//$the_name = $entry;
$the_file_name = $entry;
$the_name = substr($entry, 0, ($length-4));
$display_name = ereg_replace("_", " ", $the_name);

//add album names to array
$NameArr[] = array('display_name' => $display_name,'the_name' => $the_name,'the_file_name' => $the_file_name);
//below closes adding album names to array
$thismanythings++;
}
//end printing out foldernames we want
}

//print ("<database>\n");
//sort($NameArr);

			for ($i = 0;
			$i <= $thismanythings-1;
			$i++)
			{

print("<image path=\"".$cat."/".$NameArr[$i]['the_file_name']."\" />\n");
	}
//print "</database>";

?>

</gallery>