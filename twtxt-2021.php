<html>
	<head>
		<title>twtxt visualizer</title>
		<meta charset="utf-8">
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1"
		>
		<style>
			html {
				font-family: monospace;
			  	background: black;
				color: gray;
		  	}
			.index {
				text-align: right;
				vertical-align: top;
			}
		</style>
	</head>
	<body>
<?php
// config:
$filename="twtxt-2021.txt";

// TODO: turn all this into a PHP class

// turns text into HTML... more or less
function htmlify($text) {
	return str_replace('&gt;', '>', htmlspecialchars($text));
}

// turns links in text into actual HTML links
function linkify($text) {
	return preg_replace(
		'!(((f|ht)tp(s)?://)([-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=])+)!i',
		'<a href="$1">$1</a>',
		$text
	);
}

// turns tabs into four spaces
function tabs($text) {
	return str_replace('	', '&nbsp;&nbsp;&nbsp;&nbsp;', $text);
}

// TODO:
// Turn text in the twtxt format @<user http://link> into
// html <a href="http://link">@user</a>

$handle = fopen($filename, "r");
$html = "<table>";
$num = 1;
if ($handle) {
	while (($line = fgets($handle)) !== false) {
		$html .= "<tr id='$num'>";
		$html .= "<td class='index'><a href='#$num'>$num</a></td>";
		$html .= "<td>".tabs(linkify(htmlify($line)))."</td></tr>";
		$num++;
	}
	fclose($handle);
} 
echo $html;
?>
	</body>
</html>
