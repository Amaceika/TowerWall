<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MainPage</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<?php
	require 'src/facebook.php';
	$facebook = new Facebook(array('appId'  => '380769072050241','secret' => '8195d9e6597666efb07af8fcf386928d',));
	
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
<script src="http://d3js.org/d3.v3.min.js"></script>
</head>

<body>
  <div class="sidebar1">
   	<h1>Statusboard</h1>
  	<p>
    <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src=<?php echo($ticker); ?> width="100%" height="100%"><a href="http://finance.yahoo.com">Yahoo! Finance</a><br/><a href="http://finance.yahoo.com/q?s=^IXIC">Quote for ^IXIC</a></iframe>
    </p>
   	<div id = "dataone">
   	
   	<!-- end data one --></div>
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
    <div id = "facebook">
    
    </div>
    <!-- end .sidebar2 --></div>
</body>
<script type="text/javascript">
	window.onload =function(){
	var myHashtag = '<?php echo($hash); ?>';
	JQTWEET.search = myHashtag;
	JQTWEET.loadTweets();
	}
	var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

	var x = d3.scale.ordinal()
		.rangeRoundBands([0, width], .1);
	
	var y = d3.scale.linear()
		.rangeRound([height, 0]);
	
	var color = d3.scale.ordinal()
		.range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);
	
	var xAxis = d3.svg.axis()
		.scale(x)
		.orient("bottom");
	
	var yAxis = d3.svg.axis()
		.scale(y)
		.orient("left")
		.tickFormat(d3.format(".2s"));
	var svg = d3.select("#dataone").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  	.append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	d3.csv("AMEX.csv", function(error, data) {
	color.domain(d3.keys(data[0]).filter(function(key) { return key !== "Symbol"; }));
  
	data.forEach(function(d) {
	  var y0 = 0;
	  d.high = color.domain().map(function(name) { return {name: name, y0: y0, y1: y0 += +d[name]}; });
	  d.total = d.high[d.high.length - 1].y1;
	});
  
	data.sort(function(a, b) { return b.total - a.total; });
  
	x.domain(data.map(function(d) { return d.State; }));
	y.domain([0, d3.max(data, function(d) { return d.total; })]);
  
	svg.append("g")
		.attr("class", "x axis")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis);
  
	svg.append("g")
		.attr("class", "y axis")
		.call(yAxis)
	  	.append("text")
		.attr("transform", "rotate(-90)")
		.attr("y", 6)
		.attr("dy", ".71em")
		.style("text-anchor", "end")
		.text("Population");
  
	var symbol = svg.selectAll(".symbol")
		.data(data)
	  	.enter().append("g")
		.attr("class", "g")
		.attr("transform", function(d) { return "translate(" + x(d.Symbol) + ",0)"; });
  
	symbol.selectAll("rect")
		.data(function(d) { return d.ages; })
	  .enter().append("rect")
		.attr("width", x.rangeBand())
		.attr("y", function(d) { return y(d.y1); })
		.attr("height", function(d) { return y(d.y0) - y(d.y1); })
		.style("fill", function(d) { return color(d.name); });
  
	var legend = svg.selectAll(".legend")
		.data(color.domain().slice().reverse())
	  .enter().append("g")
		.attr("class", "legend")
		.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });
  
	legend.append("rect")
		.attr("x", width - 18)
		.attr("width", 18)
		.attr("height", 18)
		.style("fill", color);
  
	legend.append("text")
		.attr("x", width - 24)
		.attr("y", 9)
		.attr("dy", ".35em")
		.style("text-anchor", "end")
		.text(function(d) { return d; });

});

</script>
<?php $searchfb = $facebook->api('/search?q='.$hash.'&type=post'); 
	echo($searchfb);?>
</html>
