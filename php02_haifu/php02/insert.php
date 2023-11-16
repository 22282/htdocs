<?php
//1. POSTデータ取得
// <label>年齢：<input type="text" name="age"></label><br>
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];
$age    = $_POST["age"];


//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root',''); //MAMP 'root'
} catch (PDOException $e) {
  exit('DB_CONNECTION:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO gs_an_table(name,email,naiyou,age,indate)VALUES(:name,:email,:naiyou,:age,sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age', $age, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();//実行する

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL Error:".$error[2]);//処理をとめる
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>
