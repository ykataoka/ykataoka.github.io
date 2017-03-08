<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
if($id=="stop"){
exec("killall mplayer");
}else{
exec("killall mplayer");
exec("mplayer -playlist http://yp.shoutcast.com/sbin/tunein-station.pls?id=" .$id. );
}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width">
</head>
<body>
<p><a href="index.php?id=stop">stop</a></p>
<ul>
<li><a href="index.php?id=172098">SmoothJazz.com Global Radio</a></li>
<li><a href="index.php?id=709809">ABC Lounge</a></li>
<li><a href="index.php?id=209680">ABC Jazz</a></li>
<li><a href="index.php?id=190282">Jazzradio</a></li>
<li><a href="index.php?id=98600" >TheJazzGroove.com</a></li>
</ul>
</body>
</html>