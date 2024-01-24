<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include "init.php";
?>
<style>
th, td{
	text-align: left;
	width:300px;
	border: 1px solid;
}
tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}
#statusbar{
	 padding: 10px;
    /* border: 1px solid; */
    background: #c6c6c6;
    font-style: italic;
    opacity: 0.7;
    font-weight: bold;
 display:none;
}
</style>
<script>
//mousehover
function hoverbutton()
{
$(".rowitem").mouseover(function(){
	//chỉ hiện đúng row đó thôi
	$(this).css("cursor","pointer");
	mainrowid=$(this).attr("mainrowid");
        $(".edital_"+mainrowid).css("display", "inline");
		$(".del_"+mainrowid).css("display", "inline");
    });
    $(".rowitem").mouseout(function(){
        $(".edital_"+mainrowid).css("display", "none");
		$(".del_"+mainrowid).css("display", "none");
    });
}
</script>
<script>
$(document).ready(function()
{
	//select class with prefix --- cooollll
$('[class^="edital"]').click(function(){ 
//$(".edital").click(function(){
//get row id
myid=$(this).attr("rowid");
//find the row
myrow="row_"+myid;
//change the content
savecontent=$("#"+myrow+"").attr("def");
//defaultcontent=$("#"+myrow+"").html();
$("#"+myrow+"").html("<input id=\"update_no_"+myid+"\" value=\""+savecontent+"\" length=\"35\" onkeypress=\"return AddKeyPress('',"+myid+");\"></input>");
//auto move cursor to input
$("#update_no_"+myid).select();

//escape?
$("input").on('keyup',function(evt) {
    if (evt.keyCode == 27) {
	 $("#"+myrow+"").html(savecontent);
	 $(canceltoshow).css("display","none");
	 
    }
});

//cancel to show
canceltoshow="#cancel_"+myid;
$(canceltoshow).css("display","inline");
});
$(".canc").click(function(){
$("#"+myrow+"").html(savecontent);
$(canceltoshow).css("display","none");
});
}); 
function AddKeyPress(e,n) { 
        // look for window.event in case event isn't passed in
        e = e || window.event;
        if (e.keyCode == 13) {
           //new content from input
		   newcontent=$("#update_no_"+n+"").val();
		   $("#"+myrow+"").html(newcontent);
		//do ajax
		var posting = $.post( "update.php", { newmeaning: newcontent , wordtoupdate: n } );
		posting.done(function( data ) {
			$("#statusbar").html("New meaning updated!");
			$("#statusbar").show();
			setTimeout(function() { $("#statusbar").hide();}, 1200);

			//live update your UI
			icotoshow="load_no_"+wid;
			rowtoupdate="meaning_row_no_"+wid;
			//alert(icotoshow);
			 $("#"+icotoshow+"").fadeIn("slow",function() {
					$("#"+rowtoupdate+"").html(toupdate);

				});
		});
		   //hide cancel
		   $(canceltoshow).css("display","none");
		   //update new savecontent
		   rowtoupdatenewcontent="row_"+n;
		   $("#"+rowtoupdatenewcontent+"").attr("def",newcontent);

        }
		if (e.keyCode == 27) { alert ("eee");}
		
        return true;
    }
</script>
<script>
$(document).ready(hoverbutton);
</script>
<script>

function xoa()
{
	$('[class^="del"]').click(function()
	{
		//get the id of the word to be updated
		delid = $(this).attr("xoaid");
		//confirm and do the ajax
		r=confirm("Are you sure you want to delete this item?"+delid);
		if (r == true)
		{
			var deleting = $.post( "del.php", { wordtodel: delid } );
		deleting.done(function( data ) {
			//alert("deleted");
			rowtohide="row_no_"+delid;
			//$("#"+rowtohide+"").css("display","none");
			$("tr[mainrowid~='"+delid+"']").css("display","none"); // tìm by attribute, quá hay
			//status updated
			$("#statusbar").html("Word deleted!");
			$("#statusbar").show();
			setTimeout(function() { $("#statusbar").hide();}, 1200);
			});
		}
		else{
			return false;
		}
	}
	);
}
function myajax()
{
	
	$("button").click(function()
	{
		
		//get the id of the word to be updated
		wid = $(this).val();
		//wid = wid.substr(wid.length-1,1);
		//alert(wid);
		//get the meaning to update by getting the id of the button and grab the input with the same id
		inputid = "word_no_"+wid;
		toupdate = $("#"+inputid+"").val();
		//alert(toupdate);
		//now find the row with #wid and update its #meaning column with #toupdate
		var posting = $.post( "update.php", { newmeaning: toupdate , wordtoupdate: wid } );
		posting.done(function( data ) {
			//alert("xong");
			//live update your UI
			icotoshow="load_no_"+wid;
			rowtoupdate="meaning_row_no_"+wid;
			//alert(rowtoupdate);
			//alert(icotoshow);
			 $("#"+icotoshow+"").fadeIn("slow",function() {
					$("#"+rowtoupdate+"").html(toupdate);
					//$("p").fadeOut("slow");
				});
//			$("#"+icotoshow+"").css("display","block").fadeIn(1000);
	//		$("#"+rowtoupdate+"").html(toupdate);	
			//$("#"+icotoshow+"").css("display","none");
			
			
			
		});
		//test if the update.php works
		//url="testupdate.php?newmeaning="+toupdate+"&wordtoupdate="+wid;
		//window.open(url,"_blank");

	});
}
</script>
<script>
$(window).ready(xoa);
</script>
<script>
$(window).ready(myajax);
</script>

<!--<body onload="myajax();">-->
<body>
<h2>Vocabulary Management</h2>
<div class="left" style="float: left;width: 24%;flex:1;background:#55a0ff;padding:10px;height:100%;">
<div class="nav"><h3>Navigation</h3>
<a href="index.php" target="_blank">Home</a>
</div>
</div>
<div class="right" style="float: left;width: 72%;background:#55a0ff;padding:10px;height:100%;">
<?php
include "init.php";
//list all words
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		$sql = "SELECT * FROM word ORDER By status ASC, id DESC";
		$result = $con->query($sql);
		//count results select status = 0 echo num_rows
			$countsql = "SELECT * FROM word WHERE status = 0";
		$countresult = $con->query($countsql);
		if ($result->num_rows > 0) {
			
			echo "Tổng số từ hiện có: <b>".$result->num_rows."</b>";
			echo "<br/>";
			echo "Còn <b>".$countresult->num_rows."</b> từ chưa điền nghĩa";
			
			echo "<p><p>";
			echo "<div id=\"statusbar\"></div>";
			echo "<table cellpadding=\"10px\" cellspacing=\"5px\"  width=\"900px\"><tr><th>Name</th><th>Meaning</th><th>Update</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
		
$wordid=$row["id"];
$word=$row["text"];
$wordmeaning=$row["meaning"];
if($wordmeaning==""){
$wordmeaning="no meaning yet";
}
$skin = <<<EOD
<tr class="rowitem" mainrowid="$wordid"><td>$word</td><td id="row_$wordid" class="editable" def="$wordmeaning">$wordmeaning</td><td><span style="display:none;" class="edital_$wordid" rowid="$wordid">Edit</span><span style="display:none;" class="canc" id="cancel_$wordid"> || Cancel</span><span class="del_$wordid" style="color:red;display:none;" xoaid="$wordid"> || Delete</span></td></tr>
EOD;
echo $skin;

}
		echo "</table>";
		} 
		else {
			echo "0 results";
			}
	
	$con->close();
	}
?>
</div>
<div style="clear:both;"></div>
</body>