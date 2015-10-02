<?php
require_once dirname(__FILE__) . '/php-activerecord/ActiveRecord.php';
require 'config/DbConfig.php';
$getData = Member::find('all');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Untitled 3</title>
</head>

<body>


<table>
    <tr>
        <td>No</td>
        <td>Name</td>
    </tr>
    <?php $n=1; foreach($getData as $vals){ ?>
        <tr>
            <td><?= $n; ?></td>
            <td><?= $vals->name; ?></td>
        </tr>
    <?php $n++; } ?>
    
</table>
</body>
</html>