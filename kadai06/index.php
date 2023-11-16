<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="post" action="index2.php">
<p>お名前：<input type="text" name="name" size="20"></p>
<p>MAIL:<input type="text" name="mail" size="20"></p>
<p>言語理解: <input type="text" name="language" size="20"></p>
<p>知覚推理: <input type="text" name="reasoning" size="20"></p>
<p>ワーキングメモリー: <input type="text" name="memory" size="20"></p>
<p>処理速度: <input type="text" name="speed" size="20"></p>
<p><input type="submit" value="送信"></p>
</form>

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

// ファイルを変数に格納
$filename = 'data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

//＊配列の準備
$txt = [];
while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp)); 
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        background-color: #FF0000;
    }
    </style>
</head>
<body>
    <table>

<?php 
//＊ここで表示処理
for($i=0; $i<count($txt)-1;$i++){
        echo "<tr>";
        echo "<td>".$txt[$i][0]."</td>";
        // echo "<td>".$txt[$i][1]."</td>";
        // echo "<td>".$txt[$i][2]."</td>";
        echo "</tr>";
}
?>

    </table>
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

// include("index2.php");
// $s = '<script>alert("XSS");</script>';
// echo h($s);
 
?>
