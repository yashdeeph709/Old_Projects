<!DOCTYPE html>
<html xml:lang="en">
<head>
<!--FOR GETTING THE SLIDESHOW KEEP THE SLIDE FOLDER IN URL NEXT DIRECTORY-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[Tarrunyam 2013]</title>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/eventd.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/forkit.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/featurify.min.js"></script>
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
pre{
	text-align:center;
	font-size:24px;
	font-weight:500;
}
</style>
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
      <input type="text" name="mno" placeholder="Mobile No." />
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
    <select name="rate">
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
<div id="events" class="divisions">
<span class="pagehead">Events</span>
<hr/>
<div id="eventtiles">
<ul class="eli" style="float:left;">
    <li id="robowaro" class="sec1 tile">Robowar</li></a>
    <li id="robosoccero" class="sec2 tile">RoboSoccer</li>
    <li id="robotracko" class="sec3 tile">Robo track</li>
    <li id="robodirtraceo" class="sec1 tile">Robo Dirt race</li>
    <li id="linefollowero" class="sec2 tile">Line Follower</li>
    <li id="dozertroneo" class="sec3 tile">Dozertrone</li>
<br>
    <li id="hacko" class="sec1 tile">Hack Attack</li>
    <li id="ccdo" class="sec1 tile">Crack the code</li>
    <li id="wdo" class="sec3 tile">Web Designing</li>
    <li id="bbdo" class="sec1 tile">Bread board Designing</li>
    <li id="jeo" class="sec2 tile">Junkyard Electronics</li>
<br>
    <li id="leadindiao" class="sec1 tile">Lead India</li>
    <li id="quizo" class="sec2 tile">Quizottica</li>
    <li id="mco" class="sec3 tile">Mock Campus</li>
    <li id="pjo" class="sec3 tile">Project Innovation</li>
    <li id="wso" class="sec2 tile">War of Strings</li>
    <li id="voto" class="sec3 tile">Voice T2k13</li>
<br>
	<li id="foo" class="sec2 tile">Face Off</li>
    <li id="pso" class="sec3 tile">PS-2</li>
    <li id="lgo" class="sec1 tile">LanGaming</li>
    <li id="vgo" class="sec2 tile">Virtual Gaming</li>
    <li id="fitho" class="sec3 tile">Fire in the hole</li>
    <li id="mmo" class="sec3 tile">Matlab Mania</li>
    <li id="chesso" class="sec1 tile">Chess</li>
<br>
    <li id="roadieso" class="sec2 tile">Roadies</li>
    <li id="tho" class="sec3 tile">Treasure hunt</li>
    <li id="sho" class="sec1 tile">Scavenger hunt</li>
    <li id="mwo" class="sec1 tile">Minute to Win it</li>
    <li id="runo" class="sec2 tile">RunBhoomi</li>
    <li id="amo" class="sec2 tile">Art mela</li>
    <li id="pixelso" class="sec3 tile">Pixels</li>
<br>
    <li id="fifao" class="sec2 tile">Fifa T'13</li>
    <li id="streeto" class="sec3 tile">Street Soccer</li>
    <li id="gullyo" class="sec1 tile">Gully cricket</li>
    <li id="basketballo" class="sec2 tile">Basket ball</li>
    <li id="volleyballo" class="sec2 tile">Volley ball</li>
    <li id="tabteo" class="sec2 tile">Table Tennis</li>
    <li id="caromo" class="sec3 tile">Carom</li>
<br>
<br>
    </ul>
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
<a href="index.php"><img src="images/DOCK/images (6).png"/></a>
				</li>

                
                <li class="active">
				<span>Contact us</span>
<a href="index.php"><img src="images/DOCK/images.png"></a>
				</li>
                
				
				<li class="active">
				<span>Competitions</span>
				<a href="index.php"><img src="images/DOCK/Competitions.png"></a>
				</li>
                
                <li class="active">
				<span>HOME</span>
<a href="index.php"><img src="images/DOCK/images (21).png"></a>
				</li>

                <li class="active">
				<span>Sponsers</span>
<a href="index.php"><img src="images/DOCK/sponsers1.png"></a>
				</li>
                
                <li class="active">
				<span>Workshops</span>
<a href="index.php"><img src="images/DOCK/workshops.png"></a>
				</li>

                <li class="active">
				<span>Gallery</span>
<a href="index.php"><img src="images/DOCK/gallery-icon.png"></a>
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

<!--robos-->
<!--robowar on-->
<div id="robowar" title="RoboWar">
<p class="text-center" >
<img src="images/events/robo.jpg" class="size3"/>
</p>
ROBO-WAR is a combat robotics competition in which robots can be assembled with any kind of Mechanical Weapons such as Blades, Saw, Claws, etc. to design a manually operated machine which would be able to fight with other robots  in accordance to the rules.<br>
<pre>
Event Head:Ayush Khede (Ex)
Contact:8305797695
</pre>
<br/>
</div>
<!--robowar off-->

<!--robosoccer on-->
<div id="robosoccer" title="RoboSoccer">
<p class="text-center" >
<img src="images/events/robosoc.jpg" class="size3"/>
</p>
Robot soccer makes heavy demands in all the key areas of robot technology, mechanics, sensors and intelligence. It does so in a competitive setting that people around the world can understand and enjoy.
<pre>
Event Head:Aditya Kajle (EX)
Contact:9009410431
Entry Fee:200/-
</pre>
<br/>
</div>
<!--robosoccer off-->

<!--robotrack on-->
<div id="robotrack" title="Robo Track">
<p class="text-center" >
<img src="images/events/robotrack.jpg" class="size3"/>
</p>
Robot soccer makes heavy demands in all the key areas of robot technology, mechanics, sensors and intelligence. It does so in a competitive setting that people around the world can understand and enjoy.
<pre>
Event Head:Ravi Soni (EC)
Contact:9752059566
Entry Fee:300/-
</pre>
<br/>
</div>
<!--robotrack off-->

<!--dozertrone on-->
<div id="dozertrone" title="Dozer-Trone">
<p class="text-center" >
<img src="images/events/dozertrone.JPG" class="size3"/>
</p>
This year  taarunyam  hosts a very exciting competition for beginner robots. It is one of the newest robotic competitions in the Taarunyam- DOZERTRON. The task for dozertron is  to drag the ball from zone 1 to deposite pit.
NOTE:- !! If  you do not have robo…. Don't worry Robo for dozertron will be provided by   us at event venue!! 
<pre>
Event Head:Abhilasha Saxena (EX)
Contact:8871475004
Entry Fee:50/-
</pre>
<br/>
</div>
<!--dozertrone off-->

<!--robodirtrace on-->
<div id="robodirtrace" title="Robo-Dirt-Race">
<p class="text-center" >
<img src="images/events/robodirt.jpg" class="size3" />
</p>
This year  taarunyam  hosts a very exciting competition for beginner robots. It is one of the newest robotic competitions in the Taarunyam- DOZERTRON. The task for dozertron is  to drag the ball from zone 1 to deposite pit.
NOTE:- !! If  you do not have robo…. Don't worry Robo for dozertron will be provided by   us at event venue!! 
<pre>
Event Head:Chetan Patel (EX)
Contact:900902238
Entry Fee:200/-
</pre>
<br/>
</div>
<!--robodirtrace off-->

<!--linefollower on-->
<div id="linefollower" title="Line Follower">
<p class="text-center" >
<img src="images/events/linefollow.jpg" class="size3"/>
</p>
Robot soccer makes heavy demands in all the key areas of robot technology, mechanics, sensors and intelligence. It does so in a competitive setting that people around the world can understand and enjoy.
<pre>
Event Head:Chetan Patel (EX)
Contact:900902238
Entry Fee:200/-
</pre>
<br/>
</div>
<!--linefollower off-->
<!--robo over-->

<!---sports on-->
<div id="runbhoomi" title="Run Bhoomi">
<p class="text-center" >
<img src="images/events/runbhoomi.jpg" />
</p>
It is an event for "CRICKET".Cricket is a multi-faceted sport with multiple formats based around both the standard of play, the desired level of formality and the time available. An important division in terms of professional cricket is between matches limited by time in which the teams have two innings apiece, and those limited by number of overs, in which they have a single innings each.
A cricket match is divided into periods called innings. It is decided before the match whether each team will have either one innings or two innings each. During an innings, one team fields and the other bats. The two teams switch between fielding and batting after each innings. All eleven members of the fielding team take the field, but only two members of the batting team (two batsmen) are on the field at any given time. All the rules remain same.
<pre>
Event Head:Vivek Singh Rathore(ME)
Contact:7879433338
Entry Fee:1000/-
</pre>
<br/>
</div>

<div id="fifa" title="Fifa T'13">
<p class="text-center" >
<img src="images/events/fifa.jpg" style="width:100%;" />
</p>
Football is the most popular sport in the United States. 
Fifa is about leading your team to score big and ride through the glory of championship. It takes a lot of hard work (running, running and running).
Football game usually lasts longer and the participants wear uniforms. Also, there are usually more casualties in a football game. The object of the game is to move a ball past the other team's goal line. This counts as six points.
It is played at the youth, high school, college and professional level. The Super Bowl is the annual professional championship played by the champions of the American Football Conference and the National Football Conference of the National Football League. It is annually the highest rated broadcast program of the year on television and it represents the popularity of the game.
The game is played on a 100-yard field with two end zones, each 10 yards deep, between two teams consisting of 11 players on offense and 11 players on defense. The offense is made up of a quarterback, who handles the ball every snap, a running back, full back, receivers and linemen. Defense is made up of down linemen, linebackers and defensive backs.
<pre>
Event Head:Abhishek Pratap Singh(EC)
Contact:8989935950
Entry Fee:800/-
</pre>
<br/>
</div>


<div id="street" title="Street Soccer">
<p class="text-center" >
<img src="images/events/fifa.jpg" />
</p>
Often the most basic of set-ups will involve just a ball with a wall or fence used as a goal, or items such as clothing being used for goal posts (hence the phrase "jumpers for goalposts"). The ease of playing these informal games explains why they are popular all over the world. You got chance lead your team to win the game against the opponent team. A play-field covered with nets and thorns is provided. The team with maximum goals in given amount of time wins and
 claims the prizes.
<pre>
Event Head:Garvesh Yadav(CS)
Contact:9893266928
Entry Fee:300/-
</pre>
<br/>
</div>


<div id="gully" title="Gully Cricket">
<p class="text-center" >
<img src="images/events/gully.jpg"/>
</p>
Street cricket or gully cricket is a stripped-down version of the international sport of cricket, popular across the South Asia and in other cricket-playing nations. In the countryside, dried lakes and river beds are often used as playgrounds for cricket. In cities, it is played in apartment corridors, apartment parking lots, parks etc. People typically play street cricket in narrow by lanes and streets. Here, we are organizing the same event in a room. Definitely, you will have fun. Come , play and enjoy!
<pre>
Event Head:Abhishek Taweda(EC)
Contact:9165565776
Entry Fee:150/-
</pre>
<br/>
</div>

<div id="basketball" title="Basket Ball">
<p class="text-center">
<img src=""/>
</p>
"Basketball enthusiasts swear that the game is the purpose of life."Basketball is a sport played by two teams of five players  on a rectangular court. The objective is to shoot a ball through a hoop 18 inches (46 cm) in diameter and 10feet (3.0 m) high mounted to a backboard at each end. Basketball is one of the world's most popular and widely viewed sports.
<pre>
Event Head:
Contact:
Entry Fee:600/-
</pre>
<br/>
</div>


<div id="volleyball" title="Volley Ball">
<p class="text-center">
<img src="images/events/volleyball club.jpg" />
</p>
<pre>
Event Head:Abhay Raguwanshi(ME)
Contact:9827033227
Entry Fee:650/-
</pre>
<br/>
</div>



<div id="bad" title="Badminton">
<br/>
</div>

<div id="tabte" title="Table Tennis">
<p class="text-center">
<img src="images/events/tt.gif" />
</p>
Table tennis is a sport in which two or four players hit a lightweight ball back and forth using table tennis rackets. Except for the initial serve, players must allow a ball played toward them only one bounce on their side of the table and must return it so that it bounces on the opposite side. Points are scored when a player fails to return the ball within the rules. Quick reaction is the key to win in this indoor game and get gifts and prizes.
<br/>
<pre>
Entry Fee:80/-
</pre>
</div>


<div id="carom" title="Carom">
<p class="text-center">
<img src="images/events/carom.jpg" />
</p>
It's all about striking good to shoot well and winning. In this event 
you have to play carrom and reach to the top defeating other 3 players near you.
The prizes are impeccable. After all it's the world's most popular game! Try your hands and be the winner.
<br/>
<pre>
Event head:reena sheikh
Contact:
Entry Fee:30 single
          50 double
</pre>
</div>

<div id="chess" title="chess">
Chess is a two-player strategy board game played on a chessboard, a checkered game board with 64 squares arranged in an eight-by-eight grid. It is one of the world's most popular games. Feel the same ambience of competition at Taarunyam 2k13. Best chess players visit here to mentor others. Try your excellence in this event and win prizes.
<br/>
</div>
<!--sports off-->

<!--Crypto on-->
<div id="hack" title="Hack Attack">
<br/>
<p class="text-center" >
<img src="images/events/hackattack.jpg" />
</p>
<pre>
Event Head:
Contact:

</pre>
</div>

<div id="ccd" title="Crack the Code">
<br/>
<div class="text-center">
<img src="images/events/programmer.jpg">
</div>

<div class="text-center">Welcome to <div style="text-decoration:blink;font-weight:bold;color:#09F;">The Planet Of Programming.<br></div></div>
<div>You've entered an arena where demented computer programmers compete for glory and for some cool prizes.The Silver Light of  Taarunyam13 is filled flavours of 'Crack D Code' Contest aswell.
</div>
Four Rounds Of this Programming Contest are eagerly waiting for the participants to test their skills in  C\C++  and   JAVA  .
<div class="text-center">
<br>First of all You need to Select your Domain: 
<br>A.	  C & C++
<br>B.	JAVA<br>
<button class="btn btn-danger">Click to Attempt Sample Test</button>
</div>
<pre>
<div style="font-size:18px;">
Entry Fee                         :50/-

Round  1-->Objective Type  I  
                                   No. of Questions  :- 20
                                   Time limit  :- 20 minutes
Round  2-->Rapid Fire Test
                                   No. of Questions  :- 10
                                   Time limit  :- 20 minutes
Round  3-->Output Prediction
                                   No. of Questions  :- 5
                                   Time limit  :- 20 minutes
Round 4-->Programming Task
                                   <strong>Event Head:</strong>
                                    
                                   Gurvinder Singh (8085763785)

                                   Varun Bhave(8602865600)

                                   Rakshant Mishra (9981607258)

                                   Harshal Nikam (9074299052)
                                   </div>
</pre>
</div>

<div id="wd" title="Web Designing">
<br/>
<p class="text-center" >
<img src="images/events/webdesigning.jpg" />
</p>
<pre>
Event Head:
Contact:
Entry Fee:50/-
</pre>
</div>

<div id="mm" title="Matlab Mania">
<br/>
<p class="text-center" >
<img src="images/events/matlab mania.jpg" />
</p>
<pre>
Event Head:Ayush Bafna
Contact:9202288055
Entry Fee:/-
</pre>
</div>

<div id="je" title="Junkyard Electronicx">
<br/>
<p class="text-center" >
<img src="images/events/junckyard.jpg" />
</p>
<pre>
Event Head:
Contact:
Entry Fee:/-
</pre>
</div>

<div id="bbd" title="BreadBoard Designing">
<br/>
<p class="text-center" >
<img src="images/events/bbd.jpg" class="size3" style="float:left"/>
</p>
Breadboard Designing Competition is a competition of 
creating different types and variety of circuits in
a given time period on a breadboard Where all the 
elements for designing are provided by us.There are a
large no. of EC engineers in indore today who takes 
Breadboard Designing an art more than science of 
combining different type of electronic components.
<pre>
Event Head:Ayush Bafna
Contact:9202288055
Entry Fee:50/-
</pre>
</div>

<!--crypto off-->

<!--ozone on-->

<div id="Dtd" title="Dare to Dance">
<br/>
<p class="text-center" >
<img src="images/events/faceoff.jpg" />
</p>
<pre>
Event Head:Chirag Bhawasar (CE),Madhura Kulkarni(CS)
Contact:8109035253
Entry Fee:250/- for single
          400/- for duet
          150/- for per-person in group
</pre>
</div>

<div id="fo" title="Face Off">
<br/>
<p class="text-center" >
<img src="images/events/faceoff.jpg" />
</p>
<pre>
Event Head:Parvez Khan (IT)
Contact:7415776586
Entry Fee: 250-single,500-group/-
</pre>
</div>

<div id="ws" title="War of strings">
<br/>
<p class="text-center" >
<img src="images/events/war of string.jpg" />
</p>
<pre>
Event Head:Harshit gupta
Contact:8989667732
Entry Fee:1000/- for group
          200 per person
</pre>
</div>

<div id="vot" title="Voice of Taarunyam">
<br/>
<p class="text-center" >
<img src="images/events/voice of taarunyam.jpg"/>
</p>
<pre>
Event Head:Dhawal Dighe (IT)
Contact:8871888070
Entry Fee:200-single,300-duet,400-group
</pre>
</div>
<!--ozone off-->
<!--endeavours on-->
<div id="mw" title="Minute To Win It
">
<br/>
<p class="text-center" >
<img src="images/events/m2w.jpg" />
</p>
<pre>
Event Head:Palash Jain (CS)
Contact:9407100144
Entry fees:30-single
50-double
</pre>
</div>

<div id="roadies" title="Roadies">
<br/>
<p class="text-center" >
<img src="images/events/roadies.jpg" />
</p>
<pre>
Event Head:Romit Agarwal(CS)
Contact:9009247004
Entry Fee:50/person
</pre>
</div>

<div id="th" title="Treasure Hunt">
<br/>
<p class="text-center" >
<img src="images/events/treasure-hunt.jpg" />
</p>
<pre>
Event Head:Ruchi Mishra (EC)
Contact:8109640447
Entry Fee:100 per group
</pre>
</div>

<div id="sh" title="Scavenger Hunt
">
<br/>
<p class="text-center" >
<img src="images/events/scavenger_hunt_2.png"/>
</p>
<pre>
Event Head:Ruchi Mishra
Contact:8109640447
Entry Fee:per group
</pre>
</div>
<!--endeavours off-->
<!--BrainWaive on-->
<div id="leadindia" title="Lead India">
<br/>
<p class="text-center" >
<img src="images/events/lead_india.jpg" />
</p>
<pre>
Event Head:
Contact:
</pre>
</div>

<div id="mc" title="mockcampus">
<br/>
<p class="text-center" >
<img src="images/events/mock.jpg" />
</p>
<pre>
Event Head:Pulkit Jain(CS)
Contact:7415134314
Entry Fee:50/- 
</pre>
</div>

<div id="quiz" title="Quizzotica">
<br/>
<p class="text-center" >
<img src="images/events/Quizzotica-2013.jpg" />
</p>
<pre>
Event Head: Pulkit Jain(CS)
Contact:7415134314
Entry Fee:100 per group
</pre>
</div>

<div id="pj" title="Project Innovation">
<br/>
<p class="text-center" >
<img src="images/events/project innovation.jpg" />
</p>
<pre>
Event Head:
Contact:
</pre>
</div>
<!--BrainWaive off-->
<!--Battlefield on-->
<div id="ps" title="PS2">
<br/>
<p class="text-center" >
<img src="images/events/ps.jpg" />
</p>
<pre>
Event Head:Ankit Yadav(CS)
Contact:8435176768
Entry Fee:40 single
Entry Fee:70 double
</pre>
</div>

<div id="lg" title="Lan Gaming">
<br/>
<p class="text-center" >
<img src="images/events/lan gaming.jpg" />
</p>
<pre>
Event Head:Parag Agrawal(IT)
Contact:9575594952
Entry Fee:40 per nfs
Entry Fee:200 per counter strike
</pre>
</div>

<div id="vg" title="Virtual Gaming">
<br/>
<p class="text-center" >
<img src="images/events/virtual gaming.jpg" />
</p>
<pre>
Event Head:Ankita Maheshwari(EC)
Contact:9753337527
Entry Fee:100 per group
</pre>
</div>

<div id="fith" title="Fire in the hole">
<br/>
<p class="text-center" >
</p>
<pre>
Event Head:
Contact:
</pre>
</div>
<!--Battlefield off-->
<!--extra events-->
<div id="Befuddle" title="Befuddle">
<br/>
<pre>
Event Head:Tanya Kulshreshta(CS)
Contact:9770109363
</pre>
</div>
<!--extra events off-->
<!--Insight on-->
<div id="am" title="Art Mela">
<br/>
<p class="text-center" >
<img src="images/events/art mela.jpg" />
</p>
<pre>
Event Head:2nd Year Students
Contact:9770109363
</pre>
</div>
<div id="pixels" title="Pixels">
<br/>
<p class="text-center" >
<img src="images/events/pixels.jpg" />
</p>
<pre>
Event Head:2nd Year Students
Contact:9770109363
</pre>
</div>

<!--insight off-->

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

