<?php
include_once "gen.php"
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>привет новости тут</title>
    </head>
    <body>
        <h1>Текущие новости в tproger</h1>
        <?php
		gen_table();
        ?>
    </body>
</html>