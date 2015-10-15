<?php
/**
 * Created by PhpStorm.
 * User: rDx.LoRD
 * Date: 10/15/2015
 * Time: 9:32 PM
 */
function fibonacci($limit) {
    $first = 0;
    $second = 1;
    echo $first." ".$second." ";
    for($i=2;$i<$limit;$i++) {
        $next = $first + $second;
        $first = $second;
        $second = $next;
        echo $next. " ";
    }
}
if(isset($_POST["submit"]) && isset($_POST["limit"])) {
    fibonacci($_POST["limit"]);
}
?>
<html>
<head>
    <title>Fibonacci Generator</title>
</head>
<body>
<center>
    <h3>Fibonacci Sequence Generator</h3>
    <form action="" method="post">
        <label>Sequence Limit</label>
        <input type="text" placeholder="Sequence Limit" name="limit">
        <input type="submit" name="submit" value="Generate">
    </form>
</center>
</body>
</html>