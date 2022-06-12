<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<?php
// 1
$answer1 = $_POST['answer1'];

// 1_2
if(isset($_POST['answer1_2'])) {
    $answer1_2 = $_POST['answer1_2'];
} else {
    $answer1_2 = $_POST['null'];
};
// 2
$answer2 = $_POST["answer2"];

// 3
$answer3_1 =$_POST["answer3_1"];
$answer3_2 =$_POST["answer3_2"];
$answer3_3 =$_POST["answer3_3"];
$answer3_4 =$_POST["answer3_4"];
// 4
$answer4 = $_POST['answer4'];
// 5
$answer5 = $_POST["answer5"];
// 6
$answer6 = $_POST['answer6'];
// 7
$answer7 = $_POST["answer7"];

$c = ",";

//文字作成
$start="<html><head><title>集計結果</title><body><table bprder='1'>"."<tr><th>回答時間</th><th>競合サービス検討</th><th>競合サービス名</th><th>高すぎて買えない</th><th>高い</th><th>安すぎて買わない</th><th>安すぎて買わない</th><th>安い</th><th>満足度</th><th>満足度の理由</th><th>改善点</th><th>感想等</th></tr>";
$result="<tr><td>".date("Y-m-d H:i:s")."</td><td>".$answer1."</td><td>".$answer1_2."</td><td>".$answer2."</td><td>".$answer3_1."</td><td>".$answer3_2."</td><td>".$answer3_3."</td><td>".$answer3_4."</td><td>".$answer4."</td><td>".$answer5."</td><td>".$answer6."</td><td>".$answer7."</td></tr>";
$end="</table></body></html>";
$str = date("m-d H:i:s").$c.$answer1.$c.$answer1_2.$c.$answer2.$c.$answer3_1.$c.$answer3_2.$c.$answer3_3.$c.$answer3_4.$c.$answer4.$c.$answer5.$c.$answer6.$c.$answer7;
//File_php書き込み
$filephp = fopen("data/data.php","a");	// ファイル読み込み
fwrite($filephp, $start.$result.$end."\n");
fclose($filephp);

$filetxt = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($filetxt, $str."\n");
fclose($filetxt);

$filecsv = fopen("data/data.csv","a");	// ファイル読み込み
fwrite($filecsv, $str."\n");
fclose($filecsv);


?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>アンケートのご回答ありがとうございました。</h1>

<ul>
<li><a href="data/data.php">表の確認はこちら</li>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>