<html>
  <head>
    <title>Últimas actualizações</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<style>
  html {
	font-family: monospace;
  	background: black;
	color: white;
	line-height: 1.4;
  }
</style>
  <body>
<?php
$userList = scandir("/home");
$files = [];

echo "<h1>Últimas Actualizações</h1>";

function searchDir($target) {
	global $files;
	if (strpos($target, '/./') === false && strpos($target, '/../') === false) {
		echo "<!-- DEBUG: going to scandir($target) -->\n";
		$results = scandir($target);
		forEach($results as $item) {
			if(is_file($target.$item)) {
				//echo filemtime($target.$item).' '.$target.$item;
				$ext = pathinfo($target.$item, PATHINFO_EXTENSION);
				//excluded extentions
				if(!in_array($ext, ["swp"])) {
				array_push($files, ['modified' => filemtime($target.$item), 'path' =>  $target.$item]);
				}
			} else if(is_dir($target.$item)){
				searchDir($target.$item."/");
			}
		}
	}
}

forEach($userList as $user) {
if(!in_array($user, ['.', '..', 'pi'])) {
	searchDir('/home/'.$user.'/public_html/');
}
}
usort($files, function($a, $b) {
	return $b['modified'] <=> $a['modified'];
});
echo "<ul>";
for($i = 0; $i<=20; $i++) {
	$path = $files[$i]['path'];
	$path = str_replace('/home/', '/~', $path);
	$path = str_replace('/public_html', '', $path);

	echo "<li><a href=\"".$path."\">". $path .'</a> | '.   date(DATE_RFC2822, $files[$i]['modified']). '</li>';
}
echo "</ul>";


?>
</body>
</html>
