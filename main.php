<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>MainPage</title>
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<?php
	if( $_POST["scrollable"] === "1" ){
		$scroll = "yes";
	}
	else{
		$scroll = "no";
	}
	$hash = "".$_POST["hashtag"].""; 
	$web = array(); 
	array_push($web,$_POST["websiteone"],  $_POST["websitetwo"]); 
	if($_POST["websitethree"] != NULL){
		array_push($web,$_POST["websitethree"]);
	};
	if($_POST["websitefour"] != NULL){
		array_push($web,$_POST["websitefour"]);
	};
	if($_POST["websitefive"] != NULL){
		array_push($web,$_POST["websitefive"]);
	};
	if( $_POST["websitesix"] != NULL){
		array_push($web, $_POST["websitesix"]);
	};
	if($_POST["websiteseven"] != NULL){
		array_push($web,$_POST["websiteseven"]);
	};
	if($_POST["websiteeight"] != NULL){
		array_push($web,$_POST["websiteeight"]);
	};
	if($_POST["websitenine"] != NULL){
		array_push($web,$_POST["websitenine"]);
	};
	if($_POST["websiteten"] != NULL){
		array_push($web,$_POST["websiteten"]);
	};
	if($_POST["websiteeleven"] != NULL){
		array_push($web,$_POST["websiteeleven"]);
	};
	if($_POST["websitetwelve"] != NULL){
		array_push($web,$_POST["websitetwelve"]);
	};
	if($_POST["websitethirteen"] != NULL){                  
		array_push($web,$_POST["websitethirteen"]);
	};
	if($_POST["websitefourteen"] != NULL){
		array_push($web,$_POST["websitefourteen"]);
	};
	if($_POST["websitefifteen"] != NULL){
		array_push($web,$_POST["websitefifteen"]);
	};
	$company ="".$_POST["company"].""; 
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.zweatherfeed.js" type="text/javascript"></script>
<script src="js/jquery.zrssfeed.js" type="text/javascript"></script>
<script src="js/jquery.vticker.js" type="text/javascript"></script>
<script src="//www.google.com/jsapi?key=AIzaSyA5m1Nc8ws2BbmPRwKu5gFradvD_hgq6G0" type="text/javascript" ></script>
<script src="twitter-oauth/jquery.jstwitter.js" type="text/javascript" ></script>
<script src="moment-develop/moment.js" type"text/javascript"></script>
<script type="text/javascript">
	
	function buildIframes(ilink){
		var ulink = ilink; 
		var iframe = document.createElement('iframe');
		iframe.frameBorder = 0; 
		iframe.width = "100%";
		iframe.height= "100%"; 
		iframe.setAttribute("src", ulink); 
		iframe.scrolling = "<?php echo $scroll;?>";
		document.getElementById("websites").appendChild(iframe); 
	}
</script>
</head>

<body>
  <div class="sidebar1">
    <div class="localinfo">
    <h1>Accenture Customer Information Network<p>Chicago, Illinois, United States</p></h1>
    <div class="information">
    <div id="date"></div>
    <ul id="clock">
    	<li id="sec"></li>
        <li id="hour"></li>
        <li id="min"></li>
    </ul>
    <div class="timeglobal"></div>
    
    <div id="local"><div id="thermo"></div></div>
    <!-- info--></div>
    <!-- local info--></div>
    <div class="regional">
    <div class="mapmain"><h3>Global Overview</h3><div class="map"><img src="img/GlobeGraphicUpdated.png"/></div></div>
    <div id="weather"><h3>Global Overview</h3><div class='timeglobal'></div></div>
    <div id="weatherTwo"><h3>Global Overview</h3><div class='timeglobal'></div></div>
    <div id="weatherThree"><h3>Global Overview</h3><div class='timeglobal'></div></div>
    <div id="weatherFour"><h3>Global Overview</h3><div class='timeglobal'></div></div>
    <div id="weatherFive"><h3>Global Overview</h3><div class='timeglobal'></div></div>
    <div id="weatherSix"><h3>Global Overview</h3><div class='timeglobal'></div></div>
    <!-- end regional--></div>
    <div class="rsshead"><h3>RSS Feed</h3><h2>Streaming Infomation Feed</h2><p>News and Information from sources around the globe</p></div>
    <div class="rss" id="feed">
   	<div class="data big" id = "dataone">
    <h2 id="titleone"></h2>
   	<!-- end data 1 --></div>
    <div class="data big" id="datatwo">
    <!-- end data 2 --></div>
    <div class="data small" id="datathree">
    <!-- end data 3 --></div>
    <div class="data small" id="datafour">
    <!-- end data 4 --></div>
    <div class="data big" id="datafive">
    <!-- end data 5 --></div>
    <div class="data small" id="datasix">
    <!-- end data 6 --></div>
    <div class="data small" id="dataseven">
    <!-- end data 7 --></div>
    <div class="data small" id="dataeight">
    <!-- end data 8 --></div>
    <div class="data small" id="datanine">
    <h2 class="rsstitle">Images</h2>
    <!-- end data 9 --></div>
    <div class="data big" id="dataten">
    <!-- end data 10 --></div>
    <div class="data big" id="dataeleven">
    <!-- end data 11 --></div>
    <div class="data big" id="datatweleve">
    <!-- end data twelve --></div> 
    <div class="data big" id="datathirteen">
    <!-- end data thirteen --></div>
    <div class="data small" id="datafourteen">
    <!-- end data fourteen --></div>
    <div class="data small" id="datafifteen">
    <!-- end data fifteen --></div>
    <div class="data big" id="datasixteen">
    <!-- end data sixteen --></div>
    <div class="data small" id="dataseventeen">
    <!-- end data seventeen --></div>
    <div class="data small" id="dataeightteen">
    <!-- end data eightteen --></div>
    <div class="data small" id="datanineteen">
    <!-- end data nineteen --></div>
    <div class="data small" id="datatwenty">
    <!-- end data twenty --></div>
    <div class="data big" id="datatwentyone">
    <!-- end data twentyone --></div>
    <div class="data " id="datatwentytwo">
    <!-- end data twentytwo --></div>
    <!-- Main div for rss--></div>
    <!-- end .sidebar1 --></div>
  <div class="content" id="websites">
 	<h1>Websites</h1>
	<?php for($i= 0; $i<count($web);$i++){
		echo '<script type="text/javascript">'
   ,'buildIframes("'.$web[$i].'");','</script>';
	}
	?>
  <!-- end .content --></div>
  <div class="sidebar2">
   	<h1>Twitter Search Feed</h1>
    <div id = "jstwitter"> </div>
    <h1><?php echo $company;?> Feed</h1>
    <div id = "jsuser"> </div>
    <!-- end .sidebar2 --></div>
</body>
<script type="text/javascript">
	window.onload =function(){
	var myHashtag = '<?php echo($hash);?>';
	JQTWEET.search = myHashtag;
	JQTWEET.numTweets = 500; 
	JQTWEET.appendTo = '#jstwitter';
	JQTWEET.loadTweets();
	}
	$(document).ready(function () {
		$('#local').weatherfeed(['USIL0225'],{
		  unit: 'f',
		  image: true,
		  city:false,
		  country: false,
		  highlow: false,
		  wind: false,
		  humidity: false,
		  visibility: false,
		  sunrise: false,
		  sunset: false,
		  forecast: false,
		  link: false
		});
		$('#weather').weatherfeed(['UKXX0085'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: false,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#weatherTwo').weatherfeed(['ITXX0042'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: false,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#weatherThree').weatherfeed(['KEXX0009'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: false,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#weatherFour').weatherfeed(['BRXX0232'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: false,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#weatherFive').weatherfeed(['INXX0087'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: false,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#weatherSix').weatherfeed(['CHXX0008'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: false,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#datasixteen').rssfeed('http://www.npr.org/rss/rss.php?id=1001',{date:false}, function(t) {
			
			$(t).find('div.rssBody').vTicker({pause:6000});
		});
		$('#dataten').rssfeed('http://feeds.bbci.co.uk/news/rss.xml',{date:false}, function(e) {
			//$(e).find('div.rssBody').vTicker();
		});
		$('#datathree').rssfeed('http://feeds.feedburner.com/springwise',{date:false,}, function(k) {
			$(k).find('div.rssBody').vTicker({pause:3000, padding:2,showItems:1.8});
		});
		$('#dataeleven').rssfeed('http://feeds.feedburner.com/trendwatching',{date:false}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		$('#datafourteen').rssfeed('http://rss.nytimes.com/services/xml/rss/nyt/HomePage.xml',{date:false}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		
		//clock function
		setInterval(function(){
		  var seconds = new Date().getSeconds();
		  var sdegree = seconds * 6; 
		  var srotate = "rotate(" + sdegree + "deg)";
		  var hours = new Date().getHours();
		  var mins = new Date().getMinutes();
		  var hdegree = hours * 30 + (mins / 2);
		  var hrotate = "rotate(" + hdegree + "deg)";
		  var mdegree = mins * 6;
		  var mrotate = "rotate(" + mdegree + "deg)";
		  $("#sec").css({"-moz-transform" : srotate,"-webkit-transform":srotate});
		  $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
		  $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
		  var globdiv = document.getElementsByClassName('timeglobal');
		  var globHour = new Array(-5,0,1,3,-3,5.5,8);
		  for(var i = 0; i<globdiv.length;i++){
			  var mom = moment.utc().add('hours',globHour[i]).format("hh:mm:ss A"); 
			  //var time = mom.add('hours',globHour[i]);
			  globdiv[i].innerHTML = '<p>Local Time</p><h2>'+mom+'</h2>';
			  //console.log(mom); 
		  }
		},1000);
		
		
        //timer function for second twitter feed
		var count=2;
		var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
		function timer()
		{
		  count=count-1;
		  if (count <= 0)
		  {
			 clearInterval(counter);
			 JQTWEET.user = '<?php echo $company;?>';
			 JQTWEET.search = ''; 
			 JQTWEET.appendTo = '#jsuser';
			 JQTWEET.loadTweets();
			 ColorChange(); 
			 return;
		  }
		}
		DisplayDate();
		
	});
	
	google.load("feeds", "1");
    function OnLoad() {
		var num = 2;
		var nume = 2;
		var query = 'site:cnn.com <?php echo($company);?>';
		var queryTwo = 'site:nytimes.com <?php echo($company);?>';
		var queryThree='site:reuters.com <?php echo($company);?>';
		var queryFour ='site:businessweek.com <?php echo($company);?>'; 
		google.feeds.findFeeds(query, findDone);
		google.feeds.findFeeds(queryTwo, findDoneTwo);
		google.feeds.findFeeds(queryThree,findDoneThree); 
		google.feeds.findFeeds(queryFour,findDoneFour);
		var feedone = new google.feeds.Feed("http://feeds.bbci.co.uk/news/world/rss.xml");
		feedone.setNumEntries(num);
		feedone.load(feedLoaded);
		var feedtwo = new google.feeds.Feed("http://rss.cnn.com/rss/cnn_topstories.rss");
		feedtwo.setNumEntries(3);
		feedtwo.load(feedLoadedTwo);
		var feedthree = new google.feeds.Feed("http://feeds.reuters.com/reuters/hotStocksNews"); 
		feedthree.setNumEntries(num);
		feedthree.load(feedLoadedThree);
		var feedfour = new google.feeds.Feed("http://feeds.reuters.com/news/economy");
		feedfour.setNumEntries(num);
		feedfour.load(feedLoadedFour);
		var feedfive = new google.feeds.Feed("http://feeds.mashable.com/Mashable");
		feedfive.setNumEntries(nume);
		feedfive.load(feedLoadedFive);
		var feedsix = new google.feeds.Feed("http://feeds.feedburner.com/AcrossTheAisle");
		feedsix.setNumEntries(nume);
		feedsix.load(feedLoadedSix);
		var feedseven = new google.feeds.Feed("http://feeds.feedburner.com/psfk/feed");
		feedseven.setNumEntries(nume);
		feedseven.load(feedLoadedSeven);
		var feedeight = new google.feeds.Feed("http://www.planetretail.net/rss/dailynewssummary");
		feedeight.setNumEntries(nume);
		feedeight.load(feedLoadedEight);
		var feednine = new google.feeds.Feed("http://www.retail-week.com/XmlServers/navsectionRSS.aspx?navsectioncode=5963");
		feednine.setNumEntries(num);
		feednine.load(feedLoadedNine);
		var feedten = new google.feeds.Feed("http://feeds.feedburner.com/TechCrunch/");
		feedten.setNumEntries(num);
		feedten.load(feedLoadedTen);
		var feedeleven = new google.feeds.Feed("http://articlefeeds.nasdaq.com/nasdaq/categories?category=Basics");
		feedeleven.setNumEntries(num);
		feedeleven.load(feedLoadedEleven);
    }
	
	function findDone(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('datatwo');
        var html = '';
		var title = '<h2 class="rsstitle">'+result.title+'</h2>';
        // Loop through the results and print out the title of the feed
        for (var i = 0; i <1; i++) {
          var entry = result.entries[i];
          html += '<p class="title">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet+ '</p>';
        }
        content.innerHTML =title+html;
      }
    }
	
    function findDoneTwo(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('datathirteen');
        var html = '';
   	 	var title = '<h2 class="rsstitle">'+result+'</h2>';
        // Loop through the results and print out the title of the feed 
        for (var i = 0; i < 2; i++) {
          var entry = result.entries[i];
          html += '<p class="title"">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = title+html;
      }
    }
	
	function findDoneThree(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('datafifteen');
        var html = '';
		var title = '<h2 class="rsstitle">'+result.title+'</h2>';
        for (var i = 0; i < 5; i++) {
          var entry = result.entries[i];
          html += '<p class="title"">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = title+html;
      }
    }
	
	function findDoneFour(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('dataeight');
        var html = '';
		var title = '<h2 class="rsstitle">'+result.title+'</h2>';
        for (var i = 0; i < 2; i++) {
          var entry = result.entries[i];
          html += '<p class="title"">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = title+html;
      }
    }
	
    function feedLoaded(result){
		if (!result.error) {
			// Grab the container we will put the results into
			var container = document.getElementById('datafive');
			var html = '';
			var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
			for (var i = 0; i < result.feed.entries.length; i++) {
				var entry = result.feed.entries[i];
				html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
			}
			container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedTwo(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('dataone');
		  var html = '';
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedThree(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datanineteen');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedFour(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datasix');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedFive(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datatweleve');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedSix(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('dataeightteen');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML =title+html; 
  		}
	}
	
	function feedLoadedSeven(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datafour');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title"">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML =title+html; 
  		}
	}
	
	function feedLoadedEight(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datatwenty');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedNine(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datatwentyone');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedTen(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('dataseventeen');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	
	function feedLoadedEleven(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('dataseven');
		  var html = ''; 
		  var title = '<h2 class="rsstitle">'+result.feed.title+'</h2>';
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p class="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = title+html; 
  		}
	}
	function DisplayDate(){
		var maindiv = document.getElementById('date');
		//var timediv=document.getElementById('time');
		var mom = moment();
		var time = mom.format(" A"); 
		var month = mom.format("MMMM");  
		var date = mom.format("Do"); 
		var day = mom.format("dddd");
		var year = mom.format("YYYY");
		var html = ''; 
		html += '<p> Today is </p><h2>' + day +'</h2><p> The day of </p><h2>'+date+'</h2><p> In the month of</p><h2>'+ month+'</h2><p>In the year</p><h2>'+ year+'</h2>';
		maindiv.innerHTML = html; 
	}
    
	function ColorChange(){
		var count=5;
		var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
		function timer(){
		  count=count-1;
		  if (count <= 0){
			clearInterval(counter);
			var timediv = document.getElementsByClassName('time');
			var textdiv = document.getElementsByClassName('user');
			var titleH2 = document.getElementsByClassName('rsstitle');
			var feedDiv = document.getElementsByClassName('data'); 
			var mycolors = new Array("#0066cc","#996699","#990033","#ff9933", "#99cc33","#33cc66","#009999","#6699cc", "#999999","#534741", "#54391e"); 
			for(var i = 0; i<timediv.length; i++){
				for(var l = 0; l<mycolors.length;l++){
					timediv[i].style.background = mycolors[i%mycolors.length];
					textdiv[i].style.color= mycolors[i%mycolors.length];
				}
			}
			for(var i = 0; i<titleH2.length; i++){
				for(var l = 0; l<mycolors.length;l++){
					titleH2[i].style.background = mycolors[i%mycolors.length];
					feedDiv[i].style.color=mycolors[i%mycolors.length];
				}
			}
		  }
		  
		}
		
	}
	google.setOnLoadCallback(OnLoad);
</script>

</html>