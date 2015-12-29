<!DOCTYPE html>
<html>
<head>
<title>ProjectOne - Home</title>
<?php include 'head.php'?>
</head>
<body>
	<?php include 'header.php'?>
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
				</form></li>
			<li id="listsTab" class="tab"><a href="/lists/">questions <strong>LISTS</strong>
			</a></li>
		</ul>
	</div>
	<a href="quiz.php" style="color: black" class="imager">Take a quiz now</a>
	<a href="quiz.php" style="color: black" class="imager">Lets Practice</a><br/><hr>
	<a href="quiz.php" style="color: black" class="imager">Timeout Quiz</a>
</body>
</html>