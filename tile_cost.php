<?php
/**
 * Created by PhpStorm.
 * User: rDx.LoRD
 * Date: 10/15/2015
 * Time: 10:46 PM
 */
function cost_calc($height, $width, $cost) {
    echo "Cost of $width x $height is ". ($height * $width * $cost);
}
if(isset($_POST["submit"]) && $_POST["width"] && $_POST["height"] && $_POST["cost"]) {
    cost_calc($_POST["height"],$_POST["width"],$_POST["cost"]);
}
?>
<html>
<head>
    <title>Cost Calculator</title>
</head>
<body>
<center>
    <h3>Cost Calculator</h3>
    <form action="" method="post">
        <label>Width</label>
        <input type="text" placeholder="Width" name="width">
        <label>Height</label>
        <input type="text" placeholder="Height" name="height">
        <label>Cost</label>
        <input type="text" placeholder="Cost" name="cost">
        <input type="submit" name="submit" value="Generate">
    </form>
</center>
</body>
</html>