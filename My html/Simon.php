<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:28
 */
$n=$_POST['n'];
$m=$_POST['m'];
$t=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成法表</title>
</head>
<body bgcolor="#f0f8ff">
<table border="10" align="center">
<?php

for($i=1;$i<=$m;$i++){
    echo "<tr>";
    for($j=1;$j<=$m;$j++){
        $t=$i*$j;
        echo "<td><span style='text-align: center'<h3>".$t."</h3></span><td></td>";
    }
    echo "</tr>";
}
?>
</table>
<div id="footer">
    <p>powered by Simon Chen ASIA 2017</p>
</div>
</body>

