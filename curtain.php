 <!DOCTYPE html>
<html lang="en">
<head>
<title>[Taarunyam 2k13]</title>
<script>
function reload()
{
	window.location="mainpage.php";
}
setTimeout('reload()',10000);
</script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script><link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>  
<script type="text/javascript" src="js/loadingPage.js"></script>
<script type="text/javascript" src="js/jstween-1.1.min.js"></script>
<link href="css/Primary.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon (2).ico" />
<style type="text/css">

	#background {      
background:  url(images/midground.png) 70% 70%,url(images/foreground.png) 70% 70%,#333 90% 110%;
    top: 0px;
    left: 0;
    right: 0;
    bottom: 0;
    position: fixed;
    -webkit-transition: left 80s linear;
    -moz-transition: left 80s linear;
    -o-transition: left 80s linear;
    -ms-transition: left 80s linear;
    transition: left 80s linear;*/
}
#experiment:target #background {
    left: -5000px;
	opacity:0;
}
#experiment:hover #background {
    left: -9999px;
}
#content {
    margin: 0em 0em;
    opacity: 0.95;
    color: #ccc;
	width:100%;
}
#content h2 {
    margin: 1em 0;
    font-weight: bold;
    font-size: 26px;
}
#ribbon{
height:40px;
width:100%;
background-color:#9C3;
position:fixed;
}
#contentarea{
width:400px;
height:400px;
margin-top:10%;
margin-left:30%;
text-align:center;
}
#k13{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:24px;
color:#09F;
}
@font-face{
	font-family:armalite;
	src:url('font/armalite.ttf')
}
@font-face{
	font-family:angel;
	src:url('font/AngelicWar.ttf')
	,url('font/AngelicWar.otf');
}
</style>
<script type="text/javascript">
$(document).ready(
function(){
$('#logo').hide('slow');
$('#contentarea').hide('slow');
});
function anim(){
$('#contentarea').show(1500);
$('#logo').fadeIn(6000);
}

</script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body id="experiment">
<div id="background"></div>
<div id="content">

<div class="leftcurtain"><img src="images/darkcurtain.jpg" style="height:720px;"/></div>
<div class="rightcurtain"><img src="images/darkcurtain.jpg" style="height:720px;"/></div>
<br/>  
<br/>
<h1 style="color:#2DC9EA;text-align:center;font-size:50px; font-family: 'Berkshire Swash', cursive;">Swami Vivekanand College of Engineering <br><br>
<span style="font-size:30px;color:#C72CB7;font-family:armalite;">-presents-</span></h1>
<div id="contentarea" style="margin-top:100px; background-image:url(images/taar1.png);">
<img id="logo" style="margin-top:130px;width:320px;" src="images/dock/flyer.png" />
</div>

</div>
</div>
</div>
<a class="rope" onClick="anim()"><img src="images/rope.png" /> </a>

</body>
</html>