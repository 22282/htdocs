<?php
function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}
$name = $_POST["name"];
$mail = $_POST["mail"];
$language = $_POST["language"];
$reasoning = $_POST["reasoning"];
$memory = $_POST["memory"];
$speed = $_POST["speed"];

echo $name."<br>";
echo $mail."<br>";
echo $language."<br>";
echo $reasoning."<br>";
echo $memory."<br>";
echo $speed."<br>";

$d = date("Y-m-d H:i:s");
echo $d;

$s = date("s");
if($s >= 30){
    echo'<p style="color:red;">30秒以上</p>';
} else {
    echo'<p style="color:blue;">29秒以下</p>';
    echo'<p>現在:'.$s.'秒</p>';
}
?>
</body>
</html>
