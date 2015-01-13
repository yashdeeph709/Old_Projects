<!DOCTYPE html>
<html xml:lang="en">
<head>
<!--FOR GETTING THE SLIDESHOW KEEP THE SLIDE FOLDER IN URL NEXT DIRECTORY-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[Tarrunyam 2013]</title>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/forkit.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/featurify.min.js"></script>
<script type="text/javascript">
windowWidth = window.innerWidth;
if (screen.width <= 767 || windowWidth <= 767) {
    window.location = "http://www.taarunyam.com/mobile/";
}
</script>
<link href='http://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/forkit.css" />
<link rel="stylesheet" href="css/demo.css" />
<link rel="stylesheet" href="css/MyCSS.css"/>	
<link rel="stylesheet" href="css/normalize.min.css" />
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="shortcut icon" href="images/favicon (2).ico"/>
<style type="text/css">
	#background {      
background:  url(images/midground.png) 70% 70%,url(images/foreground.png) 70% 70%,#222 90% 110%;
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
.pagehead{
font-family: 'Kavoon', cursive;
}
.intro{
font-family: 'Junge', serif;

}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('#eventc').click(function (){
$('#home').hide('slow');
$('#events').show('slow');
$('#sponsers').hide('slow');
$('#workshops').hide('slow');
$('#contactus').hide('slow');
$('#gallarydiv').hide('slow');
$('#school').hide('slow');
$('#curtains').hide('slow');
});

$('#homec').click(function (){
$('#events').hide('slow');
$('#home').show('slow');
$('#sponsers').hide('slow');
$('#workshops').hide('slow');
$('#contactus').hide('slow');
$('#gallarydiv').hide('slow');
$('#school').hide('slow');
$('#curtains').show();
});

$('#sponsersc').click(function (){
$('#events').hide('slow');
$('#home').hide('slow');
$('#sponsers').show('slow');
$('#workshops').hide('slow');
$('#contactus').hide('slow');
$('#gallarydiv').hide('slow');
$('#school').hide('slow');
$('#curtains').hide('slow');
});

$('#workshopsc').click(function (){
$('#events').hide('slow');
$('#home').hide('slow');
$('#sponsers').hide('slow');
$('#workshops').show('slow');
$('#contactus').hide('slow');
$('#gallarydiv').hide('slow');
$('#school').hide('slow');
$('#curtains').hide('slow');
});

$('#contactusc').click(function (){
$('#events').hide('slow');
$('#home').hide('slow');
$('#sponsers').hide('slow');
$('#workshops').hide('slow');
$('#contactus').show('slow');
$('#gallarydiv').hide('slow');
$('#school').hide('slow');
$('#curtains').hide('slow');
});

$('#gallaryc').click(function (){
$('#events').hide('slow');
$('#home').hide('slow');
$('#sponsers').hide('slow');
$('#workshops').hide('slow');
$('#contactus').hide('slow');
$('#gallarydiv').show('slow');
$('#school').hide('slow');
$('#curtains').hide('slow');
});

$('#schoolc').click(function (){
$('#events').hide('slow');
$('#home').hide('slow');
$('#sponsers').hide('slow');
$('#workshops').hide('slow');
$('#contactus').hide('slow');
$('#gallarydiv').hide('slow');
$('#school').show('slow');
$('#curtains').hide('slow');
});

$('#tagofcurtain').click(function(){
$('#sample1').hide();
$('#sample3').hide('slow');
$('#dock').hide('slow');
});
$('#close').click(function(){
$('#sample3').show();
$('#sample1').show();
$('#dock').show();
});

});
</script>
</head>
<body id="experiment">
<div id="background"></div>
<div id="content">
<!-----curtian--------started---->
<div id="curtains">
<div class="forkit-curtain">
<!--content to be displayed in curtain should be herer-->
<div class="container text-center">
<div class="span8"  style="background-color:#999;margin-left:100px;margin-top:-100px;">
<form class="form-horizontal text-center" action="thank.php" method="post">
<legend class="text-center">Register for an event</legend>
  <div class="control-group">
    <label class="control-label">Name :</label>
    <div class="controls">
      <input type="text" name="name" placeholder="Enter your name">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email :</label>
    <div class="controls">
      <input type="text" name="email" placeholder="Enter your Email ID" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Choose Event :</label>
    <div class="controls">
    <select name="event">
  <option>RoboTicx</option>
  <option>RoboSoccer</option>
  <option>RoboTrack</option>
  <option>Robo Dirt Race</option>
  <option>Line follower</option>
  <option>Dozertrone</option>
  <option>Crack the code</option>
  <option>Web Designing</option>
  <option>Bread board Designing</option>
  <option>Junkyard Electronics</option>
  <option>Matlab Mania</option>
  <option>Lead India</option>
  <option>Quizottica</option>
  <option>Mock Campus</option>
  <option>FootLoose</option>
  <option>War of Strings</option>
  <option>Rythm of T2k13</option>
  <option>RJ VJ DJ hunt</option>
  <option>Face Off</option>
  <option>PS-2</option>
  <option>LanGaming</option>
  <option>Virtual Gaming</option>
  <option>Fire in the hole</option>
  <option>War of paints</option>
  <option>Rodies</option>
  <option>Treasure hunt</option>
  <option>Scavenger hunt</option>
  <option>Minute to Win it</option>
  <option>RunBhoomi</option>
  <option>Fifa T'13</option>
  <option>Street Soccer</option>
  <option>Gully cricket</option>
  <option>Basket ball</option>
  <option>Volley ball</option>
  <option>badminton</option>
  <option>Table Tennis</option>
  <option>Carom</option>
  <option>Chess</option>
  <option>Art mela</option>
  <option>Pixels</option>
  <option>Project Inovation</option>
  <option>workshop Roboticx</option>
  <option>workshop cloud computing</option>
  <option>workshop Autocad and pro-E</option>
  <option>workshop Dance</option>
  <option>workshop wordpress</option>
</select>
       </div>
  </div>
   
  <div class="control-group">
    <label class="control-label">Mobile No:</label>
    <div class="controls">
      <input type="text" name="No" placeholder="Mobile No." />
    </div>
  </div>

   
  <div class="control-group">
    <label class="control-label">Collage Name:</label>
    <div class="controls">
      <input type="text" name="collage" placeholder="Collage Name" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">Rate Our Website:</label>
    <div class="controls">
    <select name="siterecomm">
    <option>Good</option>
    <option>Average</option>
    <option>Could be Better</option>
    <option>Very Bad</option>
    </select>  
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      <button type="submit" name="submit" class="btn">Register</button>
    </div>
  </div>
 </form>
</div>
</div>
<div class="close-button" id="close"></div>
</div>
<a class="forkit" id="tagofcurtain"  data-text="Register For Event" data-text-detached="Dare to Drag>">
<img id="MyCurtain" src="images/ribbon.png"/>
</a>
<script src="js/forkit.js"></script>
</div>
<!--------end-------
--->
<div id="panel">
<!--home started-->
<div id="home" class="divisions">
<div id="gallarya">
<!--left side column--->
<div id="slideshow" style="float:left;clear:right;">
<!--logo of taarunyam -->
<img src="images/DOCK/tk13.jpg"/>
<!--sponser slide-->
<div id="sample3">
<h3 class="btn btn-primary">SPONSERS</h3>
<ul>
<li>
<a href="#"><img class="size2" src="images/sponser/seasons.jpg" />
</a>
</li>
<li>
<a href="#"><img class="size2" src="images/sponser/logo with website R.jpg" />
</a>
</li>
<li>
<a href="#"><img class="size2" src="images/sponser/barbarian style studio logo(1) (2).jpg" />
</a>
</li>
<li>
<a href="#"><img class="size2" src="images/sponser/mc donads.jpg" />
</a>
</li>
<li>
<a href="#"><img class="size2" src="images/sponser/union bank of india.gif" />
</a>
</li>
<li>
<a href="#"><img class="size2" src="images/sponser/5 D Logo.jpg" />
</a>
</li>
</ul>
<br>
<br>
<span style="text-align:right" >
<a href="http://www.facebook.com/taarunyam2k13">
<img src="images/social/fc-webicon-facebook-m.png" /></a>
<a href="http://www.google.com/taarunyam2k13">
<img src="images/social/fc-webicon-googleplus-m.png" />
</a>
<a href="http://www.linkedin.com/taarunyam2k13">
<img src="images/social/fc-webicon-linkedin-m.png" />
</a>
<a href="http://www.twitter.com/taarunyam2k13">
<img src="images/social/fc-webicon-twitter-m.png" />
</a>
</span>
</div>
<!-----sponser slider over-->
</div>
<!----left side column over--->
</div>
<!--gallary div over---->
<!-- text on home-->
<div id="text" class="intro">
<br>
<span class="pagehead">Taarunyam 2k13</span>
<hr>
<div id="description" style="color:#09F;">
<ul>
<li>
<h4>VISION:</h4>
T 2k13 intends to provide a tremendous platform for development of technical knowledge, social interaction, art essence, communication ability and leadership qualities along with enhancing the talent in fields of interests.
</li>
<br>
<li><h4>MISSION:</h4> 
The mission of the T 2k13 is to provide this opportunity via conducting numerous technical events (14), non-technical events (26), workshops (5). Conduction of these events and participating in them would be the polish to make individuals shine. 
</li>
<br>
<li>
<a class="btn btn-success" href="https://www.facebook.com/sharer/sharer.php?u=https://www.taarunyam.com" target="_blank">
Share on Facebook
</a>
</li>
<br>
<br>
<br>
<li>
</li>

</ul>

</div>
</div>
</div>
<div id="events" class="divisions">
<span class="pagehead">Events</span>
<hr/>
<div id="eventtiles">
<ul>
<!--    <li><a href="#tabs-1">Roboholic</a></li>
    <li><a href="#tabs-2">Crypto</a></li>
    <li><a href="#tabs-3">Brainwaves</a></li>
    <li><a href="#tabs-4">Ozone</a></li>
    <li><a href="#tabs-5">Battlefield</a></li>
    <li><a href="#tabs-6">Endeavors</a></li>
    <li><a href="#tabs-7">Sports</a></li>
    <li><a href="#tabs-8">Insight</a></li>
    <li><a href="#tabs-9">Sci-fi</a></li>
-->
</ul>
    <ul class="eli" style="float:left;">
    <li id="robowaro" class="sec1 tile">Robowar</li></a>
    <li id="robosoccero" class="sec2 tile">RoboSoccer</li>
    <li id="robotracko" class="sec3 tile">Robo track</li>
    <li id="robodirtraceo" class="sec1 tile">Robo Dirt race</li>
    <li id="linefollowero" class="sec2 tile">Line Follower</li>
    <li id="dozertroneo" class="sec3 tile">Dozertrone</li>
<br>
    <li id="ccdo" class="sec1 tile">Crack the code</li>
    <li id="hackattacko" class="sec2 tile">Hack Attack</li>
    <li id="webdesigno" class="sec3 tile">Web Designing</li>
    <li id="bbdo" class="sec1 tile">Bread board Designing</li>
    <li id="jeleco" class="sec2 tile">Junkyard Electronics</li>
    <li id="matmano" class="sec3 tile">Matlab Mania</li>
<br>
    <li id="leadindiao" class="sec1 tile">Lead India</li>
    <li id="quizo" class="sec2 tile">Quizottica</li>
    <li id="mocko" class="sec3 tile">Mock Campus</li>
    <li id="leadindiao" class="sec1 tile">FootLoose</li>
    <li id="quizo" class="sec2 tile">War of Strings</li>
    <li id="mocko" class="sec3 tile">Rythm of T2k13</li>
<br>
    <li id="mocko" class="sec1 tile">RJ VJ DJ hunt</li>
	<li id="mocko" class="sec2 tile">Face Off</li>
    <li id="ps2o" class="sec3 tile">PS-2</li>
    <li id="lano" class="sec1 tile">LanGaming</li>
    <li id="vgameo" class="sec2 tile">Virtual Gaming</li>
    <li id="fitho" class="sec3 tile">Fire in the hole</li>
<br>
    <li id="wopo" class="sec1 tile">War of paints</li>
    <li id="roadieso" class="sec2 tile">Rodies</li>
    <li id="trehunto" class="sec3 tile">Treasure hunt</li>
    <li id="scahunto" class="sec1 tile">Scavenger hunt</li>
    <li id="min2wino" class="sec1 tile">Minute to Win it</li>
    <li id="runo" class="sec2 tile">RunBhoomi</li>
<br>
    <li id="fifao" class="sec2 tile">Fifa T'13</li>
    <li id="streeto" class="sec3 tile">Street Soccer</li>
    <li id="gullyo" class="sec1 tile">Gully cricket</li>
    <li id="bbo" class="sec2 tile">Basket ball</li>
    <li id="volleyo" class="sec2 tile">Volley ball</li>
    <li id="bado" class="sec1 tile">badminton</li>
<br>
    <li id="tto" class="sec2 tile">Table Tennis</li>
    <li id="caromo" class="sec3 tile">Carom</li>
    <li id="chesso" class="sec1 tile">Chess</li>
    <li id="artmelao" class="sec2 tile">Art mela</li>
    <li id="pixelso" class="sec3 tile">Pixels</li>
    <li id="projecto" class="sec1 tile">Project Inovation</li>
<br>
    </ul>
</div>
</div>
<div id="sponsers" >
<span class="pagehead">Sponsers</span>
<hr/>
<ul style="float:left;width:250px;">
<li><img class="size5" src="images/sponser/5 D Logo.jpg" /></li>
<li><img class="size5" src="images/sponser/barbarian style studio logo(1) (2).jpg" /></li>
<li><img class="size5" src="images/sponser/x-fun.jpg" /></li>
</ul>
<ul style="float:left;width:250px">
<li><img class="size5" src="images/sponser/mc donads.jpg" /></li>
<li><img class="size5" src="images/sponser/btv.jpg" /></li>
<li><img class="size5" src="images/sponser/logob.jpg" /></li>
</ul>

<ul style="float:right;width:250px;">
<li><img class="size5" src="images/sponser/union bank of india.gif" /></li>
<li><img class="size5" src="images/sponser/seasons.jpg" /></li>
<li><img class="size5"  src="images/sponser/logo with website R.jpg" /></li>
</ul>
</div>

<div id="workshops">
<span class="pagehead">Workshops</span>
<hr/>
<div id="wtabs">
  <ul>
    <li><a href="#wtabs-1">Roboticx</a></li>
    <li><a href="#wtabs-2">AutoCad And Pro-E</a></li>
    <li><a href="#wtabs-3">Cloud Computing</a></li>
    <li><a href="#wtabs-4">Web Designing</a></li>
    <li><a href="#wtabs-5">Dance</a></li>
  </ul>
  <div id="wtabs-1">
<hr/>
<h3 style="color:#09C" class="text-center">RoboTicx Workshop</h3>
<hr/>

  <div class="text-center">
  <img class="img-polaroid" src="images/sponser/logo with website R.jpg"/>
  </div>

The workshop on Robotics is being organized in the annual Tech-Fest Taarunyam 2K13.
The workshop will be two-days of extreme ecstasy. 
You'll be taught building Robots from scratch with tools provided at the time of registration. Anyone be it a amateur to a pro can attend and learn the tips and tricks of robotics.
The workshop will be taken by <Name/Org>, a professional in the field of robotics and engineering. Certificate of participation will be awarded to everyone who participates in this workshop.
There will be a 'on the spot' robot build-up competition after the workshop for you to try your hands on the robot building right from the first day itself. Also during your process of building up your very own robot, continuous feedback and suggestions will be provided by the experts. 
Robotics Workshop by ROBOTRONiX on" Wireless Communication"
Visit us:- www.robotronix.co.in 
0731-4700998, 96170-19498
 Fee:- 1900- for a single student, 2600- for a team of two students (Including tool kit, study material & service tax)
  </div>
  

<div id="wtabs-2">
<hr/>
<h3 style="color:#09C" class="text-center">AutoCad Workshop</h3>
<hr/>
<div class="text-center">
<img class="img-polaroid" src="images/events/wcad.jpg" />
</div>
The ultimate AutoCAD workshop is here  again. The last year's highly popular and full of creativeness workshop aimed  to teach delicacies of AutoCAD is here again. Don't miss the chance to be left  in waiting line this year. Come join on first come, first serve basis with  limited seats.AutoCAD from Autodesk Inc. is the  highly productive and the most favourite software used to create drawings be it  architectural or engineering drawings. It is used all over the world by  designers, architectures, engineers and curators to turn their imagination to  reality.Eventually with the latest version  Autodesk AutoCAD 2014, there have been a lot of new features and improvements.  Along with an impeccable workshop to thrill you with the easiness of creating  with AutoCAD, a hands-on presentation will be aimed at AutoCAD 2014 too. In  this you will know how to avail student discount and other offers.The certificates of participation will  be awarded to everyone participating in the workshop. So instead of hiding your  creative side, come show everyone what you got. 
</div>

<div id="wtabs-3">
<hr/>
<h3 style="color:#09C" class="text-center">Cloud Computing Workshop</h3>
<hr/>
<div class="text-center">
<img class="img-polaroid" src="images/events/wcloud.jpg" />
</div>
It's not a coincidence that Cloud Computing and Technology got it name from the cloud above us. It's said clouds have infinite dimensions and legacy, so is cloud computing. To be in Cloud means to be present on the servers which keeps on running everytime. The photos you share on facebook, the albums we make are all on cloud. You can access them anytime, anywhere and make changes in them. This is the power of cloud. Highly popular Online Storage services like Dropbox, Google Drive, Box and others are based on Cloud Computing.
Cloud has ultimate intimacy and importance in today's world. You may loose your pen drive or your hard disk but you won't loose your data stored over the cloud. The servers are always running and even though if there is some problem, people are up to solve them.
The Workshop on Cloud Computing aims at providing a detailed introduction at how this technology works. Talks on how to build up your own cloud based storage service will take place. There will be interactive session on how much you know about cloud and it's hidden features.
You will be taught about how to keep your data secure using encryption (https), 2-step verification and passwords to avoid any unauthorized access and loss. Every participant will be given a certificate of participation.
</div>

<div id="wtabs-4">
</div>

  <div id="wtabs-5">
<hr/>
<h3 style="color:#09C" class="text-center">Dance Workshop</h3>
<hr/>
  <div class="text-center">
<img class="img-polaroid" src="images/events/wdance.gif" />
</div>

Learn dancing with your friends at the Dance Workshop being organised at Taarunyam 2K13. Don't miss this chance to curate your hidden creativity and expertise in dance.
 
Various categories of dance on which the workshop will take place are listed:
<ul style="display:block;">
<li>Western</li>
<li>Hip-Hop</li>
<li>Classical</li>
<li>&lt;more&gt;</li>
 
The workshop will be taken by Mr/Ms <name here> of <this institute>. Nothing's better than learning from the experts of dance industry. The workshop will enable you to learn various types of dancing techniques popular across the world. Ever seen Dancing With The Stars or DID? Here's your chance to be a pro in dancing.
 
Every participant will be given a certificate of participation to successfully complete the workshop. So come join the workshop and enhance your dancing skills and yes, Rock The Floor.
</div>
</div>
</div>
<div id="contactus">
<span class="pagehead">Contact Us:</span>
<hr/>
<ul>
<li>Technical:
<br><br>
+91 83496-92454<br><br>
+91 86022-20659<br>
</li><br><br><br>
<li>
Non Technical<br><br>
+91 81090-58714<br><br><br>
</li>
<li>
Sports<br><br>
+91 98932-36562<br><br><br>
</li>
<li>
Workshops<br><br> 
+91 98066-66634
</li>
</ul>
</div>

<div id="school">
<span class="pagehead">Our Team</span>
<hr/>
<img src="images/team/team.jpg" class="size4" />
</div>

<div id="gallarydiv" >
<span class="pagehead">Gallery</span>
<hr/>
<div id="sample2"  class="sample">
<!--<ul style="text-align:center;">
<li>
<img src="http://127.0.0.1/slides/Picture 026.jpg" class="size4" />
</li>
<li>
<img src="http://127.0.0.1/slides/Picture 028.jpg" class="size4" />
</li>
<li>
<img src="http://127.0.0.1/slides/Picture 055.jpg" class="size4" />
</li>
<li>
<img src="http://127.0.0.1/slides/Picture 039.jpg" class="size4" />
</li>
<li>
<img src="http://127.0.0.1/slides/Picture 042.jpg" class="size4" />
</li>
</ul>-->
</div>
</div>
</div>
</div>
<!--dock-->

<div id="dock">
<div id="dockContainer">
<div id="dockWrapper">
	<div class="cap left"></div>
			<ul class="osx-dock" >
                <li class="active">
				<span>About Us:</span>
<a id="Aboutuso"><img src="images/DOCK/about us.png" style="width:100px;height:50px;"/></a>
				</li>

                                  
                <li class="active">
				<span>Our Team:</span>
<a id="schoolc"><img src="images/DOCK/images (6).png"/></a>
				</li>

                
                <li class="active">
				<span>Contact us</span>
<a id="contactusc"><img src="images/DOCK/images.png"></a>
				</li>
                
				
				<li class="active">
				<span>Competitions</span>
				<a href="event.php"><img src="images/DOCK/Competitions.png"></a>
				</li>
                
                <li class="active">
				<span>HOME</span>
<a id="homec"><img src="images/DOCK/images (21).png"></a>
				</li>

                <li class="active">
				<span>Sponsers</span>
<a id="sponsersc"><img src="images/DOCK/sponsers1.png"></a>
				</li>
                
                <li class="active">
				<span>Workshops</span>
<a id="workshopsc"><img src="images/DOCK/workshops.png"></a>
				</li>

                <li class="active">
				<span>Gallery</span>
<a id="gallaryc"><img src="images/DOCK/gallery-icon.png"></a>
				</li>
                
                <li class="active">
				<span>Web Designing Team</span>
<a id="messo">
<img  src="images/DOCK/www.png"></a>
				</li>   
      </ul>
		</div>
	</div>
</div>
</div>
<!--end dock--->
<!--web team-->
<div id="mess" title="Web Development Team">
<table>
<tr>
   	      	<td><img class="img-web" src="images/team/yash.png" /></td>
            <td><img class="img-web" src="images/team/hello.jpg" /></td>
            <td><img style="width:400px;height:280px;" src="images/team/IMG-20130927-WA0004.jpg" /></td>
</tr>
<tr>
   	      	<td>Yashdeep Hinge<br>Web Designer and Developer</td>
            <td>Parag Agarwal<br>Designer </td>
            <td>Akshata Puranik<br>Creative head
     <span style="float:right">Shuchita Tripathi<br>Web Promotion Admin</span></td>
		    <td></td>
</tr>
</table>  
<strong>For any Complaint or suggestions Mail-At:<a mail:to="yashdeeph709@taarunyam.com">Yashdeeph709@gmail.com</a> </strong>
<strong>If you like this site than follow and like the link below : <a href="http://www.facebook.com/vengics" style="text-decoration:blink;">Yashdeeph709@gmail.com</a></strong>

<br/>
</div>
<div id="Aboutus" title="About Us">
<img src="images/logo.JPEG" class="img-web" style="float:left;" />
<p style="width:700px;float:right;">
Taarunyam'13 (T-2k13) is the annual technical fest of SVCE, Indore. Each year Taarunyam has grown bigger and better and is now one of central India's biggest and most anticipated event with thousands of students participating every year.
<br>
THIS TIME IN TAARUNYAM:
We are organizing 14 technical and 26 non-technical events this year, so that more students would become eager and interested to participate in t-2k13 and will gain more knowledge in every possible field they can because we want our students to get as much benefit as they can in technical and non-technical section.
<br/>
</p>
</div>
<!--about and web team closed-->
<!--divisions of dialogs--> 
</div>
</div>
</body>
</html>

