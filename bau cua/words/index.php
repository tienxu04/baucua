<title>MyWord - Xu @ Project</title>
<link rel="stylesheet" type="text/css" href="css.css" media="screen" />
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <style>
 .question
{
	
	background: #00436c;vertical-align: middle;text-align: center;padding-top: 50px;font-size: 2.2em;color: #fff;
	width:370px;
	height:150px;
}
.answer
{
	background:#0e6e9b;
		padding:20px;
	color:#fff;
	text-align: center;
}
.solution{
	background:#539ccc;
	padding:20px;
	color:#fff;
	width:330px;
	text-align: center;
    font-size: 2em;
}
.answer input
{
padding: 7px;
    border-radius: 5px;
    width: 240px;
		background: #fff;	
		color:#000;
}
</style>
 <div class="logo">Lexucon</div>
<div class="motto">One new word a day takes the dictionary away</div>
<div class="menu">
<span><a href="admin.php" target="_blank">Admin</a></span>
<span><a href="#mywordlist">Word list</a></span>
<span><a href="very.php" target="_blank">No 'very'</a></span>
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
<!-- do you know the word -->
$(document).ready(function()
{
$("input").focus(function(){
if($(this).val()=="Your answer"){
$(this).val("");
}
});
$("input").focusout(function(){
//if blank thì đổi về enter
update=$(this).val();
if (update==""){update="Your answer";}
//$(this).val($(this).val());
$(this).val(update);
});

});
</script>
<script>
function checking()
{
result=[];
var obj={};
for (i=1;i<=3;i++)
{
	a=obj["answer_"+i]=$("#answer_"+i).val(); //get answer
	b=obj["solution_"+i]=$("div[question_no~='"+i+"']").attr("answer_no_"+i); //get solution
	result.push({answer:a,solution:b}); // add to the ans-sol set
}
for(i=0;i<=2;i++)
{
//check
//$(".tes").append(result[i].answer + "->"+ result[i].solution);
	j=i+1;
	//show result
	$("div[solu_no~='"+j+"']").html(result[i].solution+"<p id=\"sol"+j+"\"></p>");
	if (result[i].answer == result[i].solution)
	{
		$("#sol"+j).html("<img src=\"correct.png\" style=\"width: 50;margin-top: -20;\">");
	}
	else
	{
		$("#sol"+j).html("<img src=\"incorrect.png\" style=\"width: 50;margin-top: -20;\">");
	}
}
}
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
	$allword = array();
	//$t=-1;
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) {
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
//show the latest word
echo "<div class=\"latestword\">";
for ($i=0;$i<=4;$i++)
{
//wordfetcher($allword[$i]);
echo "<div style=\"margin-bottom:30px\"><span class=\"singleword\">".$keys[$i]."</span><span class=\"singlemeaning\">".$allword[$keys[$i]]."</span></div>";
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
$arraykeys = array_keys ($allword);
shuffle($arraykeys);
$shuffarr = array();
foreach($arraykeys as $key) {
$shuffarr[$key] = $allword[$key];
}
$shuffarrkey=array_keys($shuffarr);
//how to fetch word and meaning
//word=$shuffarrkey[];
//meaning=$shuffarr[$shuffarrkey[]];
?>
<h2>Do you know the word?</h2>
<h3>Type the word as per the description</h3>
<table>
<tr>
<td><div question_no="1" answer_no_1="<?php echo $shuffarrkey[3];?>" class="question"><?php echo $shuffarr[$shuffarrkey[3]];?></div></td>
<td><div question_no="2" answer_no_2="<?php echo $shuffarrkey[4];?>" class="question"><?php echo $shuffarr[$shuffarrkey[4]];?></div></td>
<td><div question_no="3" answer_no_3="<?php echo $shuffarrkey[5];?>" class="question"><?php echo $shuffarr[$shuffarrkey[5]];?></div></td>
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
echo "</div>";
echo "</div>";
//first game - flash card
echo "<h2>Flashcard</h2>";
echo "<h3>Try recalling the meaning of these words before turning the card</h3>";
echo "<div class=\"word_wrapper\">";
$output="<div onclick=\"rotateYDIV('st');\" id=\"my_st\" class=\"st\">".$shuffarrkey[0]."</div><div style=\"display:none;\" class=\"show_st\">".$shuffarr[$shuffarrkey[0]]."</div>";
$output.="<div onclick=\"rotateYDIV('nd');\" id=\"my_nd\" class=\"nd\">".$shuffarrkey[1]."</div><div style=\"display:none;\" class=\"show_nd\">".$shuffarr[$shuffarrkey[1]]."</div>";
$output.="<div onclick=\"rotateYDIV('rd');\" id=\"my_rd\" class=\"rd\">".$shuffarrkey[2]."</div><div style=\"display:none;\" class=\"show_rd\">".$shuffarr[$shuffarrkey[2]]."</div>";
echo $output;
?>
</div>
<h3><a id="mywordlist">Word list</a></h3>
<?php
//list all words
//change array
$keys2 = array_keys($iniwordarray);
for ($i=0;$i<count($iniwordarray);$i++)
{
echo "<div style=\"margin-bottom:30px\"><span class=\"singleword\">".$keys2[$i]."</span><span class=\"singlemeaning\">".$iniwordarray[$keys2[$i]]."</span></div>";
}
?>
</body>