<?php
require_once 'scssphp/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
		$scss = new Compiler();
		$scss->setImportPaths('scss/');
		$style = $scss->compile('@import "48.scss";');
		file_put_contents("css/48.css", $style);

?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Module-48</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link href="<?php echo $url_path ?>/css/48.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 	<script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
 	<script src="<?php echo $url_path ?>/js/popper.min.js"></script>
 	<script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include '../module-48/48-content.php'; ?>
</body>
</html>