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
		$style = $scss->compile('@import "21.scss";');
		file_put_contents("./css/21.css", $style);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Module-17</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo $url_path ?>/css/21.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
</head>
<body>
	<?php include '../module-21/21-content.php'; ?>
</body>
</html>