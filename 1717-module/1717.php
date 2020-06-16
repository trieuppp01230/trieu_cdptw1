<?php 

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once "libs/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;
$scss = new Compiler();
$sass = file_get_contents("sass/style.scss");
$style = $scss->compile($sass);
file_put_contents("css/styles.css",$style);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/styles.css">
    </head>
    <body >
        <?php include '1717-content.php'; ?>
    </body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/1717.js"></script>

</html>