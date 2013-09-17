<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>MainPage</title>
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
<script src="js/jquery.zrssfeed.min.js" type="text/javascript"></script>
<script src="js/jquery.vticker.js" type="text/javascript"></script>
<script src="//www.google.com/jsapi?key=AIzaSyA5m1Nc8ws2BbmPRwKu5gFradvD_hgq6G0" type="text/javascript" ></script>
<script src="twitter-oauth/jquery.gridalicious.min.js" type="text/javascript" ></script>
<script src="twitter-oauth/jquery.jstwitter.js" type="text/javascript" ></script>
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
   	<h1>Accenture Customer Information Network</h1>
    <div class="localinfo">
    <div id="local">
    </div>
    <ul id="clock">
    	<li id="sec"></li>
        <li id="hour"></li>
        <li id="min"></li>
    </ul>
    </div>
    <div class="map"> </div>
    <div id="weather"> 
    <!-- end data weather --></div> 
   	<div class="data" id = "dataone">
   	<!-- end data 1 --></div>
    <div class="data" id="datatwo">
    <!-- end data 2 --></div>
    <div class="data" id="datathree">
    <!-- end data 3 --></div>
    <div class="data" id="datafour">
    <!-- end data 4 --></div>
    <div class="data" id="datafive">
    <!-- end data 5 --></div>
    <div class="data" id="datasix">
    <!-- end data 6 --></div>
    <div class="data" id="dataseven">
    <!-- end data 7 --></div>
    <div class="data" id="dataeight">
    <!-- end data 8 --></div>
    <div class="data" id="datanine">
    <!-- end data 9 --></div>
    <div class="data" id="dataten">
    <!-- end data 10 --></div>
    <div class="data" id="dataeleven">
    <!-- end data 11 --></div>
    <div class="data" id="datatweleve">
    <!-- end data twelve --></div> 
    <div class="data" id="datathirteen">
    <!-- end data twelve --></div>
    <div class="data" id="datafourteen">
    <!-- end data twelve --></div>
    <div class="data" id="datafifteen">
    <!-- end data twelve --></div>
    <div class="data" id="datasixteen">
    <!-- end data twelve --></div>
    <div class="data" id="dataseventeen">
    <!-- end data twelve --></div>
    <div class="data" id="dataeightteen">
    <!-- end data twelve --></div>
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
   	<h1>Social Media</h1>
    <p></p>
    <div id = "jstwitter"> </div>
    <div id = "facebook">
    
    </div>
    <!-- end .sidebar2 --></div>
</body>
<script type="text/javascript">
	window.onload =function(){
	var myHashtag = '<?php echo($hash);?>';
	JQTWEET.search = myHashtag;
	JQTWEET.loadTweets();
	
	}
	$(document).ready(function () {
		$('#local').weatherfeed(['USIL0225'],{
		  unit: 'f',
		  image: true,
		  country: false,
		  highlow: true,
		  wind: false,
		  humidity: false,
		  visibility: false,
		  sunrise: false,
		  sunset: false,
		  forecast: false,
		  link: false
		});
  		$('#weather').weatherfeed(['UKXX0085','ITXX0042','KEXX0009','BRRN0834','INXX0087','CHXX0008'],{
		  unit: 'f',
		  image: false,
		  country: false,
		  highlow: true,
		  wind: false,
		  visibility: false,
		  forecast: false,
		  link: false
		});
		$('#dataeight').rssfeed('http://www.npr.org/rss/rss.php?id=1001',{}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		$('#datanine').rssfeed('http://feeds.bbci.co.uk/news/rss.xml',{}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		$('#dataeleven').rssfeed('http://feeds.feedburner.com/springwise',{}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		$('#datathirteen').rssfeed('http://feeds.feedburner.com/trendwatching',{}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		$('#dataseventeen').rssfeed('http://rss.nytimes.com/services/xml/rss/nyt/HomePage.xml',{}, function(e) {
			$(e).find('div.rssBody').vTicker();
		});
		
		//clock functions
		setInterval(function(){
		  var seconds = new Date().getSeconds();
		  var sdegree = seconds * 6; 
		  var srotate = "rotate(" + sdegree + "deg)";
		  $("#sec").css({"-moz-transform" : srotate,"-webkit-transform":srotate});
		},1000);
		setInterval( function() {
		  var hours = new Date().getHours();
		  var mins = new Date().getMinutes();
		  var hdegree = hours * 30 + (mins / 2);
		  var hrotate = "rotate(" + hdegree + "deg)";
		  
		  $("#hour").css({"-moz-transform" : hrotate, "-webkit-transform" : hrotate});
			  
       	}, 1000 );
		setInterval( function() {
		  var mins = new Date().getMinutes();
		  var mdegree = mins * 6;
		  var mrotate = "rotate(" + mdegree + "deg)";
		  $("#min").css({"-moz-transform" : mrotate, "-webkit-transform" : mrotate});
			  
		}, 1000 );
         
	});
	google.load("feeds", "1");
    function OnLoad() {
		var num = 10;
		var nume = 4
		var query = 'site:cnn.com <?php echo($company);?>';
		var queryTwo = 'site:nytimes.com <?php echo($company);?>';
		var queryThree='site:reuters.com <?php echo($company);?>';
		var queryFour ='site:bbc.com <?php echo($company);?>'; 
		google.feeds.findFeeds(query, findDone);
		google.feeds.findFeeds(queryTwo, findDoneTwo);
		google.feeds.findFeeds(queryThree,findDoneThree); 
		google.feeds.findFeeds(queryFour,findDoneFour);
		var feedone = new google.feeds.Feed("http://feeds.bbci.co.uk/news/world/rss.xml");
		feedone.setNumEntries(num);
		feedone.load(feedLoaded);
		var feedtwo = new google.feeds.Feed("http://rss.cnn.com/rss/cnn_topstories.rss");
		feedtwo.setNumEntries(num);
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
    }
	function findDone(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('dataone');
        var html = '';
    
        // Loop through the results and print out the title of the feed
        for (var i = 0; i < result.entries.length; i++) {
          var entry = result.entries[i];
          html += '<p id="title">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = html;
      }
    }
    function findDoneTwo(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('datatwo');
        var html = '';
    
        // Loop through the results and print out the title of the feed 
        for (var i = 0; i < result.entries.length; i++) {
          var entry = result.entries[i];
          html += '<p id="title">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = html;
      }
    }
	function findDoneThree(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('datathree');
        var html = '';
        for (var i = 0; i < result.entries.length; i++) {
          var entry = result.entries[i];
          html += '<p id="title">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = html;
      }
    }
	function findDoneFour(result) {
      // Make sure we didn't get an error.
      if (!result.error) {
        // Get the right content div
        var content = document.getElementById('dataten');
        var html = '';
        for (var i = 0; i < result.entries.length; i++) {
          var entry = result.entries[i];
          html += '<p id="title">' + entry.title + '</p><p id="rsscontent">'+ entry.contentSnippet + '</p>';
        }
        content.innerHTML = html;
      }
    }
    function feedLoaded(result){
		if (!result.error) {
			// Grab the container we will put the results into
			var container = document.getElementById('datafour');
			var html = ''; 
			for (var i = 0; i < result.feed.entries.length; i++) {
				var entry = result.feed.entries[i];
				html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
			}
			container.innerHTML = html; 
  		}
	}
	function feedLoadedTwo(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datafive');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedThree(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datasix');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedFour(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('dataseven');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedFive(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datatweleve');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedSix(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datafourteen');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedSeven(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datafifteen');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedEight(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('datasixteen');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
	function feedLoadedNine(result){
		if (!result.error) {
		  // Grab the container we will put the results into
		  var container = document.getElementById('dataeightteen');
		  var html = ''; 
		  //instead of putting the feed in to a div i put it in a <p> much easier to manage for some content
		  for (var i = 0; i < result.feed.entries.length; i++) {
			var entry = result.feed.entries[i];
			html +='<p id="title">'+entry.title+'</p><p id="rsscontent">' + entry.contentSnippet+'</p>';
		  }
		  container.innerHTML = html; 
  		}
	}
    google.setOnLoadCallback(OnLoad);
	
</script>

</html>
