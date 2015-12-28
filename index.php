<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>ProjectOne - Home</title>
<link href="css/style4.css" rel="stylesheet" type="text/css">
<script src="js/js1.js"></script>
</head>
<body>
	<div class="topBanner">
		<div class="centeredContent">
			<div class="loginTools">
				<a href="/signup">Sign Up</a>| <a href="/login/?success=/">Log
					In</a>
			</div>
			<ul class="nav">
				<li class="selected"><a href="/">Home</a></li> |
				<li><a href="/educator-edition/">Give Test</a></li> |
				<li><a href="/leaderboards/">Practise</a></li> |
				<li><a href="/blog/">Leaderboards</a></li> |
				<li><a href="/help/">Help</a></li>
			</ul>
		</div>
	</div>
	<div class="tabPanelContainer">
		<ul class="tabPanel">
			<li id="challengeTab" class="tab selected"
				style="-webkit-user-select: none;"><a href="/play/">THE <strong>CHALLENGE</strong></a></li>
			<li id="dictionaryTab" class="tab"><a href="/dictionary/">THE
					<strong>q bank</strong>
			</a>
				<form action="/search" onsubmit="return false;"
					accept-charset="utf-8">
					<input autocomplete="off" tabindex="1" type="text" name="q"
						id="search" value="">
					<button onclick="showContent('5')">
						<b>Load 5 Questions</b>
					</button>
				</form></li>
			<li id="listsTab" class="tab"><a href="/lists/">questions <strong>LISTS</strong>
			</a></li>
		</ul>
	</div>
	
			<div id = "questionArea"  style="color:white">Questions : </div>
</body>
</html>