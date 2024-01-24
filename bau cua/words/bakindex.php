<title>MyWord - Xu @ Project</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <div class="logo">Lexucon</div>
<div class="motto">One new word a day takes the dictionary away</div>
<div class="menu">
<span><a href="admin.php" target="_blank">Admin</a></span>
<span><a href="#mywordlist">Word list</a></span>
<span><a href="very.php" target="_blank">No 'very'</a></span>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="background.js"></script>
</div>
<?php

include "init.php";
//here you will be challenged with two exercises: choose the correct meanings, and choose the correct words
//other features include: random word of the day, opt to show full list word...
?>
<script>
$(document).ready(function()
{
	//hover menu
	$(".menu>span").mouseover(function(){
		$(this).css("border-bottom-color","#0e6e9b");
		});
	$(".menu>span").mouseout(function(){
		$(this).css("border-bottom-color","#00436c");
		});

//rand very
//tạo array all number = length of word, shuffle, chọn 3 con đầu
num_arr = [];
for(i=0;i<=allword.length;i++)
{
	num_arr[i]=i;
}
num_arr.sort(function() { return 0.5 - Math.random() });
//alert(allword[num_arr[0]].withvery);
$("#veryword").html(allword[num_arr[0]].withvery);
$("#noveryword").html(allword[num_arr[0]].novery);
	//expand textarea
	$("#typing").focus(function(){$(this).attr("rows","20")});
	
	
$("#typing").keyup(function()
{
newcontent=$(this).val();
newcontent=newcontent.replace(/(?:\r\n|\r|\n)/g, '<br />');
$(".showarea").html(newcontent);
});

});
</script>
<script>
<!--
var x,y,n=0,ny=0,rotINT,rotYINT,name

function rotateYDIV(e)
{
//find the correct div
y=document.getElementById("my_"+e);
name=e;
//y=document.getElementById("rotate3D")
clearInterval(rotYINT)
rotYINT=setInterval("startYRotate()",10)
//replace meaning

}
function startYRotate()
{
ny=ny+1
y.style.transform="rotateY(" + ny + "deg)"
y.style.webkitTransform="rotateY(" + ny + "deg)"
y.style.OTransform="rotateY(" + ny + "deg)"
y.style.MozTransform="rotateY(" + ny + "deg)"

if (ny==180 || ny>=360)
{
nametoshow="show_"+name;
//alert(nametoshow);
$("."+nametoshow).show(4);
$("."+name).hide(3);
//$("."+name).html($("."+nametoshow).html());
clearInterval(rotYINT)
if (ny>=360){ny=0;}
}
}
//-->
</script>

<body>
<h2>Start your day by reviewing five of the newly added words</h2>
<?php
//get data ~ all words from db and do different things for each section
//first ~ memory game - guessing the meaning of three random words
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	$sql = "SELECT * FROM word ORDER By status ASC, id DESC";
	$result = $con->query($sql);
	var $allword = array();
	//$t=-1;
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) {
			$t++;
			//$theword=$row["text"];
			//$allword[$t]=$row["text"]."===".$row["meaning"];
			$allword[$row["text"]] = $row["meaning"];
		}
	}
	else 
	{
		echo "0 results";
	}
}
//add numeric key
$keys = array_keys($allword);
for ($i=0;$i<=count($allword)-1;$i++)
{
$word = $keys[$i]; //key = word
$meaning = $allword[$key];
//echo $key." = ".$value."<p>";
}

//biến cái for thành function (pos)
function wordfetcher($str)
{
//$sep=strpos($str,"===");
//$word=substr($str,0,$sep);
//$meaning=substr($str,$sep+3,strlen($str)-$sep); //cộng 3 là trừ đi chiều dài của ===
echo "<div style=\"margin-bottom:30px\"><span class=\"singleword\">".$word."</span><span class=\"singlemeaning\">".$meaning."</span></div>";
}
function getword($arr,$f,$r)
{
$allword=$arr;
$unsepword=$allword[$f];
//removesep($unsepword);
//find seperator
$sep=strpos($unsepword,"===");
$word=substr($unsepword,0,$sep);
$meaning=substr($unsepword,$sep+3,strlen($unsepword)-$sep); //cộng 3 là trừ đi chiều dài của ===
$output=<<<EOD
<div onclick="rotateYDIV('$r');" id="my_$r" class="$r">$word</div>
<div style="display:none;" class="show_$r">$meaning</div>

EOD;
echo $output;
}
?>

<?php 
//show the latest word
echo "<div class=\"latestword\">";
for ($i=0;$i<=4;$i++)
{
wordfetcher($allword[$i]); 
}
echo "</div>";
?>
<!--Learn one no-very word a day -->
<h2 style=" margin-top: -20px;">Did you know?</h2>
<h3>Instead of saying <span id="veryword"></span>, you can say <span id="noveryword"></span></h3>
<h2>Write to memorize</h2>
<h3>Try writing anything using the above five words to memorize them</h3>
<div class="typewrapper">
<div style="display: table-cell;"><textarea style="padding:10" id="typing" cols="30" rows="10"></textarea></div>
<div class="showarea"></div>
</div>
<?php
// from this point on, the all word array will be shuffled, the 0-2 items are dedicated for random flash card

//backup 
$iniwordarray = array_merge(array(), $allword); //clone array - tuyệt
shuffle($allword);
?>
<h2>Do you know the word?</h2>
<h3>Type the word as per the description</h3>
<table>
<tr>
<td><div question_no="1" answer_no_1="heo" class="question"><?php echo $allword['3'];?></div></td>
<td><div question_no="2" answer_no_2="pig" class="question">in a way that leaves no doubt</div></td>
<td><div question_no="3" answer_no_3="cat" class="question">wildly unreasonable, illogical</div></td>
</tr>
<tr>
<td><div class="answer"><input id="answer_1" value="Your answer"></input></div></td>
<td><div class="answer"><input id="answer_2" value="Your answer"></input></div></td>
<td><div class="answer"><input id="answer_3" value="Your answer"></input></div></td>
</tr>
<tr>
<td><div solu_no="1" class="solution"></div></td>
<td><div solu_no="2" class="solution"></div></td>
<td><div solu_no="3" class="solution"></div></td>
</tr>
<tr>
<td colspan="3"><button onclick="checking()">Check</button></td></tr>
</table>
<?php
/*one random word - never duplicate with the flash card 
echo "<div class=\"latestword\">";
wordfetcher($allword['3']); */
echo "</div>";
echo "</div>";
//first game - flash card
echo "<h2>Flashcard</h2>";
echo "<h3>Try recalling the meaning of these words before turning the card</h3>";
echo "<div class=\"word_wrapper\">";
getword($allword,0,'st');
getword($allword,1,'nd');
getword($allword,2,'rd');
?>
</div>
<h3><a id="mywordlist">Word list</a></h3>
<?php
//list all words

	//wordfetcher($iniwordarray[$i]);
for ($i=0;$i<=count($allword)-1;$i++)
{
$worda = $keys[$i]; //key = word
$meaninga = $allword[$key];
echo "<div style=\"margin-bottom:30px\"><span class=\"singleword\">".$worda."</span><span class=\"singlemeaning\">".$meaninga."</span></div>";
}
	
?>
</body>