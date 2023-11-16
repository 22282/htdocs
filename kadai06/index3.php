<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>知能検査</title>
</head>
<body>

<form method="post" action="submit.php">
    <p>お名前：<input type="text" name="name" size="20"></p>
    <p>MAIL:<input type="text" name="mail" size="20"></p>
    <p>言語理解: <input type="text" name="language" size="20"></p>
    <p>知覚推理: <input type="text" name="reasoning" size="20"></p>
    <p>ワーキングメモリー: <input type="text" name="memory" size="20"></p>
    <p>処理速度: <input type="text" name="speed" size="20"></p>
    <input type="submit" value="送信">
</form>

</body>
</html>
<?php
session_start();

function h($val){
    return htmlspecialchars($val, ENT_QUOTES);
}

$name = isset($_POST["name"]) ? h($_POST["name"]) : "名前が入力されていません";
$mail = isset($_POST["mail"]) ? h($_POST["mail"]) : "メールが入力されていません";
$language = isset($_POST["language"]) ? intval($_POST["language"]) : 0;
$reasoning = isset($_POST["reasoning"]) ? intval($_POST["reasoning"]) : 0;
$memory = isset($_POST["memory"]) ? intval($_POST["memory"]) : 0;
$speed = isset($_POST["speed"]) ? intval($_POST["speed"]) : 0;

// ここで偏差値の計算を行う（サンプル計算）
$language_deviation = 50 + 10 * ($language - 50) / 10;
$reasoning_deviation = 50 + 10 * ($reasoning - 50) / 10;
$memory_deviation = 50 + 10 * ($memory - 50) / 10;
$speed_deviation = 50 + 10 * ($speed - 50) / 10;

// データの保存、ログ処理、メール送信などをここで行う

// 結果の表示
echo "<p>お名前: " . $name . "</p>";
echo "<p>MAIL: " . $mail . "</p>";
echo "<p>言語理解の偏差値: " . $language_deviation . "</p>";
echo "<p>知覚推理の偏差値: " . $reasoning_deviation . "</p>";
echo "<p>ワーキングメモリーの偏差値: " . $memory_deviation . "</p>";
echo "<p>処理速度の偏差値: " . $speed_deviation . "</p>";

?>

<div>
    <ul>
        <li>aaaa</li>
        <li>iiii</li>
        <li>uuuu</li>
        <li>eeee</li>
        <li>oooo</li>
    </ul>
</div>
</body>
</html>

<?php
session_start();

$_SESSION["name"]="やまざき";
$_SESSION["num"]=1000;

echo $_SESSION["name"];
echo $_SESSION["num"];

$num = 1;
if($num > 10){
    echo $num."は10より大きいです";
} else {
    echo $num."は10より小さいです";
}

$num = 1;
if($num >= 10){
    echo $num."は10以上です";
} else {
    echo$num."は10未満です";
}

$num = 1;
if($num == 10){
    echo$num."は10と等しいです";
} else {
    echo$num."は10と等しくない";
}

$num = 1;
if($num!=10){
    echo $num."は10と等しくない";
} else {
    echo$num."は10と等しい";
}

$num = 1;
if($num == 1){
    echo $num."は1と等しい";
} else if ($num == 2){
    echo $num."は2と等しい";
} else if ($num ==3 ){
    echo $num."は3と等しい";
} else {
    echo $num."は1,2,3以外です";
}
$num = rand(1,5);
if( $num == 1){
    echo"あたり".$num;
} else {
    echo"はずれ".$num;
}
$ar_base = array("PHP4","PHP5","PHP7");
var_dump($ar_base);

$str_base = "PHP4_PHP5_PHP7";
$str = str_replace("PHP5","PHP5.5",$str_base);
echo $str;

$str_base = "PHP4,PHP5,PHP7,PHP8";
$str = explode(",",$str_base);
var_dump($str);
echo $str[0]."<br>";
echo $str[3]."<br>";

include("index2.php");
$s = '<script>alert("XSS");</script>';
echo h($s);

?>