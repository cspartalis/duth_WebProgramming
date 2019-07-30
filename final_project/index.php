<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7"/>
<link rel="icon" href="rsun.gif" type="image/gif" sizes="16x16">
<title>
Ελεύθερη Έκφραση
</title>
<style>

body{
background: #000000;
}

div{
    animation: fadein 20s;
}

a{
    text-decoration: none;
    font: 20px lucida;
    color: black;
    font-weight: bold;
    position: relative;
    top: 34px;
    left: 12px;
}

img{
    width: 500px;
    height: 500px;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin: auto;
    z-index: -1;  /*Πρέπει να είανι πάνω από το animation*/
    transition: transform 5s;
    animation-name: sun;
    animation-duration: 5s
}

div h1{
    margin-top: 0;
    font-family:lucida console;
    font-size: 40px;
}

.text{
    text-shadow: 0px 0px 1px red;
    font: 25px courier;
}

#enter{
    width: 100px;
    height: 100px;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0; 
    margin: auto;
}

#top{
    text-align: left;
    position: absolute;
    top: 30px;
    left: 25px;
    width: 350px;
}

#bottom{
    text-align: right;
    position: absolute;
    bottom: 20px;
    right: 25px;
    width: 450px;
}

img:hover{
    transform: rotate(360deg);
}

@keyframes sun{
    0% {width: 0px; height: 0px;}
}

@keyframes fadein{
    from {opacity: 0;}
    to   {opacity: 1;}
}

</style>
</head>
<body>

<div id="top" class="text">
    <h1>Καλώς Ήρθες!</h1>
    <p>
       Η παρούσα ιστοσελίδα αποτελεί δομή ελεύθερης έκφρασης. Απευθύνεται σε όσ@ θέλουν
       να επικοινωνήσουν τα έργα τους με άτομα που τους χωρίζουν χιλιομετρικές αποστάσεις...      
    </p>
</div>

<div id="bottom" class="text">
    <p>
       ...Σε καμιά περίπτωση δε θέλει να υποκαταστήσει τη διαζώσης επικοινωνία!
    </p>
</div>

<div id="enter">
    <a href="keimena.php">είσ&#8709;δος</a>
</div> 

<img src="rsun.gif" />

<?php
$counter_name = "counter.txt";

if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f); 
?>

<?php
session_start();
$counter_name = "ip.txt";

if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}
?>

</body>
</html>