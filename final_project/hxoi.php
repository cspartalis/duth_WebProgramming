<!DOCTYPE html>
<html>
<head>

<title>Ε.Ε. Ήχοι</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7"/>
<link rel="icon" href="rsun.gif" type="image/gif" sizes="16x16">
<link type="text/css" rel="stylesheet" href="maincss.css"/>

<style>
body{
   background-color: #ddd;
   font-family: courier;
   overflow: auto;
}
</style>

</head>
<body>

<div id="logo"> <a href="index.php"><img src="rsun.gif" width="200px" height="200px"></img></a> </div>
<div id="roloi"></div>

<nav>
<ul>
  <li><a href="keimena.php">Κείμενα</a></li>
  <li><a href="eikones.php">Εικόνες</a></li>
  <li><a class="active" href="hxoi.php">Ήχοι</a></li>
  <li><a href="video.php">Βίντεο</a></li>
  <li><a href="epikoinwnia.php">Επικοινωνία</a></li>
</ul>
</nav>

<header>
   <span>Ε</span>λεύθερη <span>Έ</span>κφραση
</header>

<div id="roloi">
   <canvas id="canvas" width="150" height="150"
   style="background-color:#ddd">
   </canvas>

   <script>
   var canvas = document.getElementById("canvas");
   var ctx = canvas.getContext("2d");
   var radius = canvas.height / 2;
   ctx.translate(radius, radius);
   radius = radius * 0.90
   setInterval(drawClock, 1000);

   function drawClock() {
     drawFace(ctx, radius);
     drawNumbers(ctx, radius);
     drawTime(ctx, radius);
   }

   function drawFace(ctx, radius) {
     var grad;
     ctx.beginPath();
     ctx.arc(0, 0, radius, 0, 2*Math.PI);
     ctx.fillStyle = 'white';
     ctx.fill();
     grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
     grad.addColorStop(0, '#333');
     grad.addColorStop(0.25, 'white');
     grad.addColorStop(1, '#333');
     ctx.strokeStyle = grad;
     ctx.lineWidth = radius*0.1;
     ctx.stroke();
     ctx.beginPath();
     ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
     ctx.fillStyle = '#333';
     ctx.fill();
   }

   function drawNumbers(ctx, radius) {
     var ang;
     var num;
     ctx.font = radius*0.15 + "px arial";
     ctx.textBaseline="middle";
     ctx.textAlign="center";
     for(num = 1; num < 13; num++){
       ang = num * Math.PI / 6;
       ctx.rotate(ang);
       ctx.translate(0, -radius*0.85);
       ctx.rotate(-ang);
       ctx.fillText(num.toString(), 0, 0);
       ctx.rotate(ang);
       ctx.translate(0, radius*0.85);
       ctx.rotate(-ang);
     }
   }

   function drawTime(ctx, radius){
       var now = new Date();
       var hour = now.getHours();
       var minute = now.getMinutes();
       var second = now.getSeconds();
       //hour
       hour=hour%12;
       hour=(hour*Math.PI/6)+
       (minute*Math.PI/(6*60))+
       (second*Math.PI/(360*60));
       drawHand(ctx, hour, radius*0.5, radius*0.07);
       //minute
       minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
       drawHand(ctx, minute, radius*0.8, radius*0.07);
       // second
       second=(second*Math.PI/30);
       drawHand(ctx, second, radius*0.9, radius*0.02);
   }

   function drawHand(ctx, pos, length, width) {
       ctx.beginPath();
       ctx.lineWidth = width;
       ctx.lineCap = "round";
       ctx.moveTo(0,0);
       ctx.rotate(pos);
       ctx.lineTo(0, -length);
       ctx.stroke();
       ctx.rotate(-pos);
   }
   </script>
</div>

<div id="date">
  <p id="demo"></p>

  <script>
    var d = new Date();
    var mera = d.getDay();
    var mhnas = d.getMonth();
    var mera_mhna = d.getDate();
    var xronia = d.getYear();

    if (mera==0) mera= "Κυρ.";
    if (mera==1) mera= "Δευ.";
    if (mera==2) mera= "Τρί.";
    if (mera==3) mera= "Τετ.";
    if (mera==4) mera= "Πέμ.";
    if (mera==5) mera= "Παρ.";
    if (mera==6) mera= "Σάβ.";

    if (mhnas==0) mhnas= "Ιαν.";
    if (mhnas==1) mhnas= "Φεβ.";
    if (mhnas==2) mhnas= "Μάρ.";
    if (mhnas==3) mhnas= "Απρ.";
    if (mhnas==4) mhnas= "Μάι.";
    if (mhnas==5) mhnas= "Ιούν.";
    if (mhnas==6) mhnas= "Ιούλ.";
    if (mhnas==7) mhnas= "Αύγ.";
    if (mhnas==8) mhnas= "Σεπ.";
    if (mhnas==9) mhnas= "Οκτ.";
    if (mhnas==10) mhnas= "Νοέ.";
    if (mhnas==11) mhnas= "Δεκ.";

    xronia+= 1900;

    document.getElementById("demo").innerHTML= mera + "," + " " + mera_mhna + " " + mhnas + " " + xronia;
  </script>
</div>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'el', includedLanguages: 'el,en,es,it', multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="validator">
<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Έγκυρο CSS!" />
    </a>
</p>
</div>

<section>
<article id="hxos">
<h1 style="color: #660000" align="center">Javaspa ~ Δυτική Πλευρά</h1>
<audio controls>
  <source src="javaspa.mp3" type="audio/mpeg">
   ο υπολογιστής σου δεν υποστηρίζει το ηχητικό αρχείο
</audio>
</article>
</section>


<div id="views">
   <?php
      $f = fopen("counter.txt","r");
      $views = fread($f, filesize("counter.txt"));
      echo "Επισκέψεις: " . $views;
   ?>
</div>

<div id="viewers">
      <?php
      $f = fopen("ip.txt","r");
      $viewers = fread($f, filesize("ip.txt"));
      echo "Επισκέπτες: " . $viewers;
      ?>
</div>


</body>
</html>
