<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MainPage</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<?php
	$ticker = "http://api.finance.yahoo.com/instrument/1.0/%5EIXIC,". $_POST["stockticker"]. "/badge;chart=1y;news=5;quote/HTML?AppID=uUgxr99KQXZ2R20aO9ARcumHyb0-&sig=UQlaBp.ieoSXr6YGVUkyF91QH00-&t=1377107415157";
	$hash = "".$_POST["hashtag"].""; 
	$webone = $_POST["websiteone"];
	$webtwo = $_POST["websitetwo"]; 
	$webthree = $_POST["websitethree"]; 
	$webfour = $_POST["websitefour"]; 
	$webfive = $_POST["websitefive"]; 
	$websix = $_POST["websitesix"]; 
	$webseven = $_POST["websiteseven"]; 
	$webeight = $_POST["websiteeight"]; 
	$webnine = $_POST["websitenine"]; 
	$webten = $_POST["websiteten"]; 
	$webeleven = $_POST["websiteeleven"]; 
	$webtwelve = $_POST["websitetwelve"]; 
	$webthirteen = $_POST["websitethirteen"]; 
	$webfourteen = $_POST["websitefourteen"]; 
	$webfifteen = $_POST["websitefifteen"]; 
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="twitter-oauth/jquery.gridalicious.min.js"></script>
<script type="text/javascript" src="twitter-oauth/jquery.jstwitter.js"></script>
</head>

<body>
  <div class="sidebar1">
   	<h1>Analytics</h1>
  	<p>
    <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src=<?php echo($ticker); ?> width="300px" height="1028px"><a href="http://finance.yahoo.com">Yahoo! Finance</a><br/><a href="http://finance.yahoo.com/q?s=^IXIC">Quote for ^IXIC</a></iframe>
    </p>
    <!-- end .sidebar1 --></div>
  <div class="content">
 	<h1>Websites</h1>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webone);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webtwo);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webthree);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webfour);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webfive);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($websix);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webseven);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webeight);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webnine);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webten);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webeleven);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webtwelve);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webthirteen);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webfourteen);?>  width="100%" height="50%" > </iframe>
    <p></p>
    <iframe allowtransparency="true" frameborder="0" scrolling="no" src=<?php echo($webfifteen);?>  width="100%" height="50%" > </iframe>
    <p></p>
    
  <!-- end .content --></div>
  <div class="sidebar2">
   	<h1>Social Media</h1>
    <p></p>
    <div id = "jstwitter"> </div>
    
    <!-- end .sidebar2 --></div>
</body>
<script type="text/javascript">
	window.onload =function(){
	var myHashtag = '<?php echo($hash); ?>';
	JQTWEET.search = myHashtag;
	JQTWEET.loadTweets();
	}
	
	var textareaWidth = document.getElementById("textarea").scrollWidth;
	document.getElementById("wrapper").style.width = textareaWidth + 'px';
</script>
</html>
