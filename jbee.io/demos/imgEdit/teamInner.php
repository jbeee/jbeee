<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<script src="../import/jQuery.js" type="text/javascript"></script> 
<script src="admin.js" type="text/javascript"></script><link href="admin.css" rel="stylesheet" type="text/css"/>
<link href="../import/main2.css" rel="stylesheet" type="text/css"/>
<script src="../import/oScript.js" type="text/javascript"></script>
<title>Team Inner</title>
<link rel="shortcut icon" href="http://www.oasis-ad.com/graphics/oasisIcon.ico" type="image/x-icon">
<style>
.absC{position:relative;width:100%;height:100%;}
.txtScroll{height:auto;position:absolute;top:0px;left:0px;}
.scrollMe{position:relative;overflow:hidden;}
.blockTitle{display:block;margin-top:7px;margin-left:10px;}


#allTeamContainer{position:relative;overflow:hidden;height:495px;width:935px}
.teamPages{position:absolute;left:0;height:100%;width:100%}
.bottomLink{cursor:pointer;height:78px;width:100%;background-color:#C5C7C8;position:relative}
.quarterSubs{background-color:#C5C7C8;margin-bottom:11px;position:relative;overflow:hidden;width:100%}
#quarter1{width:234px}
#quarter1Container{position:relative;overflow:hidden;width:225px}
#quarter2{width:280px}
#quarter2Container{position:relative;overflow:hidden;width:271px}

h5{font-size:14px;font-weight:bolder;text-transform:uppercase;display:block;padding-left:8px;padding-top:3px;line-height:16px;letter-spacing:1px}
h2{font-size:14px;font-weight:bolder;text-transform:uppercase;display:block;padding-top:3px;line-height:16px;}

.bText{position:absolute;top:0;left:0}
.bText2{position:absolute;top:0;left:0;width:100%;text-align:center;}
#quarter3{width:140px}
#quarter3Container{position:relative;overflow:hidden;width:131px}
.headShots{margin-bottom:11px;overflow:hidden;position:relative;cursor:pointer}
#quarter4{width:274px}
#quarter4Container{position:relative;overflow:hidden;width:100%;height:484px;background-color:#C5C7C8;margin-bottom:11px}
.teamTxtFormat{position:relative;overflow:hidden;font-size:17px;font-family:"Arial Narrow", Helvetica, sans-serif;color:#fff;line-height:24px;margin:11px}
.teamTxtFormat strong{font-size:20px;color:#888;font-weight:500;text-transform:lowercase}
.teamTxtFormat b{font-size:14px;font-weight:bolder;text-transform:uppercase;line-height:20px;display:inline;text-decoration:none}
.teamTxtFormat a{text-decoration:none;color:#efefef;font-size:13px;text-transform:lowercase}
.overLayTxt{position:absolute;width:131px;text-align:center;font-family:"Arial Narrow", Helvetica, sans-serif;color:#fff;font-size:14px;font-weight:bolder;text-transform:uppercase;line-height:20px;display:inline;left:0;bottom:2px}
.pOver{width:100%;height:100%;background-color:#a1a3a5;display:none;position:absolute;top:0;left:0}
.sixSubsTxt{position:relative;width:273px;height:72px;background-color:#C5C7C8;}
.ssText{font-size:13px;font-weight:bold;font-family:"Arial Narrow", Helvetica, sans-serif;color:#fff;line-height:14px;margin-left:11px;
text-transform:lowercase;letter-spacing:1px;display:block;width:273px;position:absolute;margin-top:5px;}
.ssText b{font-size:14px;font-weight:bolder;text-transform:uppercase;line-height:36px;color:fff;text-decoration:none;letter-spacing:0;}
.ssLink{display:block;}


#teamBioScroll{position:relative;overflow:hidden;width:100%;height:484px;margin-bottom:11px}
.teamBio{position:absolute;top:0;left:0;height:484px;background-color:#C5C7C8;visibility:hidden;width:274px}
#OHS0{visibility:hidden;display:none}
#bHS0{visibility:visible}
#quarter1Top,#quarter2Top,#HS0{height:160px;}
#quarter1Mid,#quarter2Mid{height:313px;}
.teamTxtFormat a:hover,.sixSubsTxt a:hover{text-decoration:none;color:#eee}
#HS1,#HS2,#HS3{height:97px}

#ssT{height:153px;background:url("graphics/team1L.jpg");}
#ssB{height:320px;background-color:#666;background:url("graphics/team1L.jpg") repeat 0px -164px;}
#tp0{z-index:10;}
#tp1,#tp2,#tp3,#tp4{visibility:hidden;z-index:5;}
.sixSubs0{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team4L.jpg");}
.sixSubsB0{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team4R.jpg");}
.sixSubs1{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team2L.jpg");}
.sixSubsB1{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team2R.jpg");}
.sixSubs2{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team3L.jpg");}
.sixSubsB2{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team3R.jpg");}
.sixSubs3{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team1L.jpg");}
.sixSubsB3{height:72px;width:100%;margin-bottom:11px;overflow:hidden;background:url("graphics/team1R.jpg");}
.sixSubs{height:72px;width:100%;background-color:#C5C7C8;margin-bottom:11px;overflow:hidden;}
#lilQuarter0{width:131px;position:relative;overflow:hidden;height:484px;background-color:#C5C7C8;margin-bottom:11px;
background:url("graphics/team4R.jpg") repeat 0px 0px;}
#ssT0{height:155px;background:url("graphics/team4L.jpg");}
#ssB0{height:318px;background-color:#666;background:url("graphics/team4L.jpg") repeat 0px -164px;}
#lilQuarter1{width:131px;position:relative;overflow:hidden;height:484px;background-color:#C5C7C8;margin-bottom:11px;
background:url("graphics/team2R.jpg") repeat -284px 0px;}
#ssT1{height:155px;background:url("graphics/team2L.jpg");}
#ssB1{height:318px;background-color:#666;background:url("graphics/team2L.jpg") repeat 0px -164px;}
#lilQuarter2{width:131px;position:relative;overflow:hidden;height:484px;background-color:#C5C7C8;margin-bottom:11px;
background:url("graphics/team3R.jpg") repeat -284px 0px;}
#ssT2{height:155px;background:url("graphics/team3L.jpg");}
#ssB2{height:318px;background-color:#666;background:url("graphics/team3L.jpg") repeat 0px -164px;}
#lilQuarter3{width:131px;position:relative;overflow:hidden;height:484px;background-color:#C5C7C8;margin-bottom:11px;
background:url("graphics/team1R.jpg");}
#ssT3{height:155px;background:url("graphics/team1L.jpg");}
#ssB3{height:318px;background-color:#666;background:url("graphics/team1L.jpg") repeat 0px -164px;}

#ssRow1{width:271px;height:auto;overflow:hidden;position:absolute; top:0px;left:0px;}
#ssRow2{width:273px; height:auto;overflow:hidden;position:absolute; top:0px;left:282px}
.quarterSS{position:relative;overflow:hidden;width:555px;height:484px;margin-right:9px;}
.quarterSAbs{position:absolute;height:auto;width:100%;top:0px;left:0px;}

#ss0{ background-position:-236px 0px;}
#ss1{ background-position:-236px -82px;}
#ss2{ background-position:-236px -165px;}
#ss3{ background-position:-236px -247px;}
#ss4{ background-position:-236px -330px;}
#ss5{ background-position:-236px -412px;}
#ss6{ background-position:0px 0px;}
#ss7{ background-position:0px -82px;}
#ss8{ background-position:0px -165px;}
#ss9{ background-position:0px -247px;}
#ss10{ background-position:0px -330px;}
#ss11{ background-position:0px -412px;}
#ss12{ background-position:0px -412px;}

.ssOver{background-color:#a1a3a5;height:100%;width:100%;position:absolute;display:none;}

#fstateContainer
{
	width:250px;
	height:120px;
	margin-left:10px;
}
#sstateContainer
{
	width:250px;
	height:280px;
	margin-left:10px;
}
#sstateContainer
{
	width:250px;
	height:280px;
	margin-left:10px;
}

#bio0{height:440px;width:255px;margin-left:10px;}
#bio1{height:440px;width:255px;margin-left:10px;}
#bio2{height:440px;width:255px;margin-left:10px;}
#bio3{height:440px;width:255px;margin-left:10px;}

h3{font-size:24px;font-weight:bold;}
</style>
<script>			 
var numSub = new Array(); numSub[0]=[false,6,-2];

numSub[1]=[false,10,(-81*10)+484];
numSub[2]=[false,8,(-81*8)+484];
numSub[3]=[false,7,(-81*8)+484]
$.support.touch = 'ontouchend' in document;
var mobile = $.support.touch;
var cBio = 0;
var busyP = false;
var busyB = false;
var cP = 0;
var me;
var moveThisSub=false;
var moveSub = false;
var cPZ = 10;

phArr.push(new pPhoto("side1","../portfolio/southernlight/southernlightST.png","226,484","","","apSide1Single","-1",".png",0));
phArr.push(new pPhoto("sideT","../portfolio/southernlight/southernlightST.png","226,170","","","apSide1Top","-1",".png",0));
phArr.push(new pPhoto("sideB","../portfolio/southernlight/southernlightSB.png","226,308","","","apSide1Bottom","-1",".png",0));
$(document).ready(function()
{
	$('#showHtmlHelp').showHtmlHelp({'l':0,'t':0,'h':'484px','w':'271px'});
	$('.editTText').editTextBox ();
	$('.editTextBtn').mouseenter(function() {$(this).css('backgroundPosition', '0px 30px');})
   			 		 .mouseleave(function(){$(this).css('backgroundPosition', '0px 61px');});
	$('.dBtn').mouseenter(function() {$(this).css('backgroundPosition', '0px 92px');})
   			  .mouseleave(function(){$(this).css('backgroundPosition', '0px 122px');});
	$('.sideNum').click(function(){
							this.value == 1;
							if(this.value == 1)
							{
								$('.singleSide').css('display','block');
								$('.doubleSide').css('display','none');
								sideNum=1;
							}
							else
							{
								$('.singleSide').css('display','none');
								$('.doubleSide').css('display','block');
								sideNum=2;
							}
							changeUploadButton('saveTeamButton');
							
							});
	$('.headShots').mousedown(function(){
				if(busyB){return;}
				var id = $(this).attr('id');				
				n = parseInt(id.substr(2));
				if(n != cBio)
				{
					switchBio(n);
					$('#O'+id).css('visibility','hidden');
				}
						});
	if(!mobile)
	{
		$('.headShots').mouseenter(function() {$('#O'+$(this).attr('id')).fadeOut(50)})
		.mouseleave(function() { $('#O'+$(this).attr('id')).fadeIn(300)});
		$('.bottomLink').mouseenter(function() {$('#O'+$(this).attr('id')).fadeIn(50); })
 		  .mouseleave(function() {$('#O'+$(this).attr('id')).fadeOut(200); });			
	   $('.sixSubsTxt').mouseenter(function() { $(this).find('.ssOver').fadeIn(100); })
       .mouseleave(function() {	$(this).find('.ssOver').fadeOut(200); });	
	}
	$('.bottomLink').mousedown(function(){
				moveSub = false;
				if(busyP){return;}					 
				$(this).css('background-color','#a1a3a5');
				var id = $(this).attr('id');
				n = parseInt(id.substr(1));
				switchPage(n);
				});
	
	$('.quarterSS').mouseenter(function(){moveSub = true; me = $(this).attr('id'); var idx = me.substr(3);
													moveThisSub=numSub[idx][0]; maxT = numSub[idx][2]; });
	$('.quarterSS').mouseleave(function(){ 
										var moveBack = 0;
										if((lY > 330)&&(moveThisSub))
										{
											moveBack = maxT;
										}
										
										moveSub = false; moveMe = 0;moveThisSub=false;$('#scroll'+me).animate({'top':moveBack+'px'},300);});

var bTime = 300;
function switchBio(n)
 {	
	  busyT = true;
	 $('#OHS'+cBio).css({'visibility':'visible','display':'none'});
	 $('#OHS'+cBio).fadeIn(bTime);
	  if(n<cBio)
	  {
	   $('#bHS'+n).css({'left':'-285px','visibility':'visible'});		 
	   $('#bHS'+n).animate({left:'0px'},bTime);	
	   $('#bHS'+cBio).animate({left:'285px'},bTime, function(){doneBSwitch(n)});
	  
	  }
	  else
	  {
	   $('#bHS'+n).css({'left':'285px','visibility':'visible'});		 
	   $('#bHS'+n).animate({left:'0px'},bTime);	
	   $('#bHS'+cBio).animate({left:'-285px'},bTime, function(){doneBSwitch(n)});
	  }
	  
 }
 
 function doneBSwitch(n)
 {
	 	$('#bHS'+cBio).css({'visibility':'hidden','top':'0px','left':'0px'});
		cBio=n;
		busyB = false;
 }
function switchPage(n)
 {
	 if(cP == n){return;}
 	  busyP=true;
      idx = n-1;
	  if(idx >= 0)
	  {
		 me = "sub"+idx; 
	  	 moveThisSub=numSub[idx][0]; 
	 	 maxT = numSub[idx][2];
	  }
	  	
	  $('#Op'+cP).css('display','block');
	  $('#p'+cP).css('background-color','#C5C7C8');
	  $('#tp'+cP).css({'z-index':'5'});
	  $('#tp'+n).css({'visibility':'visible','z-index':'10'});
	  $('#tp'+n).fadeIn(300);
	  $('#tp'+cP).fadeOut(300, function(){cP=n;busyP=false;});
	  $('#Op'+cP).fadeOut(400);	  
 }
 
 function doneSwitch(n)
 {
	 	$('#p'+cS).css({'visibility':'hidden','top':'0px','left':'0px'});
		cS=n;
		busy = false;
 }

$('.scrollMe').aScroll({'mobile':$.support.touch});
});
</script>
</head>
<body>
<center>

<div id="tFront">
<table id="quarterSegments"><tr><td align="left" valign="top" rowspan="2">
<div id="quarter1" class="quarterTops">
<div class="apImgDivFormat" style="width:224px; height:550px;position:relative;">      

<div id="apGetSide2" class="singleSide" style="width:224px;top:0px;display:none;">
<center>
<div class="showImg" id="apSide1Single" style="width:200px;height:428px;overflow:hidden;" title="side image">
</div>
<div style="width:200px;height:11px;background-color:#fff;position:absolute;top:150px;left:12px;"></div>
<div class="lilButton" style="width:200px;height:15px;"><a href="javascript:void(0)" onClick="editImg('side1',0,0);">UPDATE</a></div>
</center></div>
 
<div id="apGetSide1" class="doubleSide" style="width:224px;" >
<center><div class="showImg" id="apSide1Top" style="width:200px;height:150px;overflow:hidden;" title="top side image">
<img src="../portfolio/heavenlypoint/heavenlyST.png"></div>
<div class="lilButton" style="width:200px;height:15px;"><a href="javascript:void(0)" onClick="editImg('sideT',0,0);">UPDATE</a></div>
</center></div>
<div id="apGetSide2" class="doubleSide" style="width:224px;" >
<center><div class="showImg" id="apSide1Bottom" style="width:200px;height:272px" title="bottom side image"><img src="../portfolio/heavenlypoint/heavenlySB.png"></div>
<div class="lilButton" style="width:200px;height:15px;"><a href="javascript:void(0)" onClick="editImg('sideB',0,0);">UPDATE</a>
</center></div>
<br>
 <span class="smallRadio"><b>STYLE:</b>
<input type="radio" name="sideNum" class="sideNum" value="1" />Single
<input type="radio" name="sideNum" class="sideNum" value="2" checked/> Double</span>
</div>
</td><td>
<div id="quarter2" class="quarterTops" style="position:relative;">
<div id="quarter2Container">
<div id="quarter2Top" class="quarterSubs" style="height:160px;" >
<div class="editTextBtn" id="editTT1" title="Edit" style="position:absolute;right:5px;top:3px;"></div>
<span class="blockTitle" style="margin-bottom:5px;"><h1 id="showTT1T">FIRM STATEMENT PHILOSOPHY</h1></span>
<div id="fstateContainer" class="scrollMe"> 
<div class="txtScroll" id="showTT1">
Oasis Architecture & Design, Inc. has built its foundation on three principles: Creativity, Persistence and Understanding. Building with these has created an institution that our clients can depend on for all their design needs.
Creative thinking is a skill that Oasis uses to elevate our designs. We find alternatives to challenges and lift the limits of standard construction methods that may inhibit a client’s dreams and aspirations.
Persistence is deeply rooted in the firm commitment to a client’s vision Our clients have counted on our commitment to maintain a timely design process. The respect of our consultants affords us the ability to demand the highest quality of service and create a team that out performs our client’s expectations. 
A quality firm needs to Understand all aspects of architecture to create a synthesis that aligns with our client’s needs and works to meet the demands of the site, its position within its surroundings and in respect to its governing agencies. 
Our experience and insistence to expand our knowledge in this profession is displayed in the strength of our documents that our clients and contractors depend on. 
Oasis Architecture and Design, Inc. is composed of a strong team of talented individuals focused and dedicated to our clients. We strive to add value to our client’s homes by creating quality living environments. This is achieved through the collective hands-on experience of the team from collaborative design to construction observation.
Oasis Architecture and Design, Inc. is not limited by the size or style of your desired goals. Our projects range from small modifications to complete personalization of your home. Each dream home we have created integrates a cohesive exchange of exterior and interior design. Our team allows a client’s vision and desire to be captured and carried throughout their home.
</div>

</div>
</div>
</div>
<div id="htmlHelp"><div class="absC"><div id="closeHtmlBtn" class="dBtn"></div><table><tr><td colspan="3"><h3>HTML CODES</h3></td></tr><tr><td><input value="<b>bold text</b>" size="30" readonly></td><td width="15px"></td><td><b>bold text</b></td></tr>
<tr><td><input value="<u>underlined text</u>" size="30" readonly></td><td width="15px"></td><td><u>underlined text</u></td></tr>
<tr><td><input value="<i>italic text</i>" size="30" readonly></td><td width="15px"></td><td><i>italic text</i></td></tr>
<tr><td><input value="<h1>header text</h1>" size="30" readonly></td><td width="15px"></td><td><h1>header text</h1></td></tr>
<tr><td><input value="<p>paragraph</p>" size="30" readonly></td><td width="15px"></td><td>paragraph</td></tr>
<tr><td><input value="<br>" size="30" readonly></td><td width="15px"></td><td>line break</td></tr>
<tr><td><textarea rows=2 cols="29" readonly><a href='http://www.oasis-ad.com'>text to link</a></textarea></td><td width="15px"></td><td><a href="#">text to link</a></td></tr><tr><td valign="bottom"><textarea rows=3 cols="29" readonly><img src='http://www.oasis-ad.com/graphics/oasisOGthm.png'></textarea></td><td width="25px"></td><td>
<img src="http://www.oasis-ad.com/graphics/oasisOGthm.png" height="60px"></td></tr></table></div></div>
</div>
<div id="quarter2Mid" class="quarterSubs" style="width:271px;overflow:hidden;">
<div class="editTextBtn" id="editTT2" title="Edit" style="position:absolute;right:5px;top:3px;"></div>
<span class="blockTitle" style="margin-bottom:5px;"><h1 id="showTT2T">Sustainable Statement</h1></span>
<div id="sstateContainer" class="scrollMe">
<div class="txtScroll" id="showTT2">
Oasis Architecture & Design, Inc. is an environmentally responsible firm taking principles of Green and Sustainable Design and implementing them into our homes following the client’s intent. Our philosophy on environmentally conscientious design can be broken into two principles. 
First, we aim to design a home that is "Green," reducing the harmful impact it has on our environment and those that dwell in it. A house is like a living organism: it consumes, breathes and creates waste. Being conscientious about how it "lives" and what resources we use to create it means using a savvy selection of products, materials, and systems to give a "Green" design. 
Secondly, we create a sustainable project to align with your goal in making a home that lives indefinitely and maintains the ecosystem’s health. The long term consumption of natural resources and impact on global warming is the primary concern in a sustainable design. One way to work towards this goal is to strive for a net zero annual energy consumption from your home.
"Green" and "Sustainable" design go hand in hand. Selecting green materials can reduce the impact on the environment during its production whereas selecting green appliances and fixtures reduces the consumption of natural resources. Think of "sustainable" as the goal and "green" as the process to get there. Sustainable design works best when we take advantage of the natural resources that are freely available such as sun, wind, rain and land. The efficient use of these resources combined with our client’s vision for their built environment makes a successful and environmentally responsible project.

</div>
</div>
</div>
</div>
</td>
<td>
<div class="editTText">
<div id="showHtmlHelp" style="right:11px;top:5px;"><a href="javascript:void(0)">&lt;/?&gt;</a></div>
<input id="editTTitle" size=45 value="FIRM STATEMENT PHILOSOPHY" maxlength="45">
<textarea id="editTText" rows=10 cols=49 spellcheck=true>
<p>
Oasis Architecture & Design, Inc. has built its foundation on three principles: Creativity, Persistence and Understanding. 
</p>
<p>
Building with these has created an institution that our clients can depend on for all their design needs.
Creative thinking is a skill that Oasis uses to elevate our designs. We find alternatives to challenges and lift the limits of standard construction methods that may inhibit a client's dreams and aspirations.
</p>
<p>
Persistence is deeply rooted in the firm commitment to a client's vision Our clients have counted on our commitment to maintain a timely design process. The respect of our consultants affords us the ability to demand the highest quality of service and create a team that out performs our client's expectations. </p>
<p>
A quality firm needs to Understand all aspects of architecture to create a synthesis that aligns with our client's needs and works to meet the demands of the site, its position within its surroundings and in respect to its governing agencies. 
Our experience and insistence to expand our knowledge in this profession is displayed in the strength of our documents that our clients and contractors depend on. </p><p>
Oasis Architecture and Design, Inc. is composed of a strong team of talented individuals focused and dedicated to our clients. We strive to add value to our client's homes by creating quality living environments. This is achieved through the collective hands-on experience of the team from collaborative design to construction observation. </p><p>
Oasis Architecture and Design, Inc. is not limited by the size or style of your desired goals. Our projects range from small modifications to complete personalization of your home. Each dream home we have created integrates a cohesive exchange of exterior and interior design. Our team allows a client's vision and desire to be captured and carried throughout their home.</p>
</textarea>
</div>
</td>
</tr>
<tr><td colspan="2"><div id="saveTeamButton" class="bigSaveButtons">Save</div></td></tr>
</table>
</center>
</body>
</html>