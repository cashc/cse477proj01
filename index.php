<?php
require __DIR__ . '/lib/steampunked.inc.php';
$steampunked = new \Steampunked\Steampunked();
$view = new \Steampunked\View($steampunked);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Steampunked Game</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <img class="title" src="images/title.png" width="700" height="95" alt="Steampunked Title">
</head>
<body>
<?php echo $view->present(); ?>
</body>
</html>