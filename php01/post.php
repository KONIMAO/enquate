<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<html>
<head>
<meta charset="utf-8">
<title>事後アンケート</title>
<script src="js/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="/php01/style.css">
</head>
<body>
<header><img src="./img/logo.png" alt=""></header>
<h1>事後アンケートのお願い</h1>
<p>この度は、コネクトスクエアにご登録頂きましてありがとうございました。
	<br>今後、より良いサービスを作っていきたいと思っています。ぜひ、お客様の声を聞かせてください！
</p>
<form action="write.php" method="post" style="margin: auto; width:90%;">
<table width= "100%" border="3px" bordercolor="skyblue">
	<tr>
		<td>①</td>
		<td>
			<dt>本サービスを利用する際に他のサービスと迷いましたか？</dt>
			<dd>
			<label>
				<input class="answer1" type="radio" name="answer1" value="はい" onclick="formSwitch()" required>はい
			</label>

			<label>
				<input class="answer1" type="radio" name="answer1" value="いいえ" onclick="formSwitch()">いいえ
			</label>
			<span id="sample1">　どのようなサービスと迷いましたか？：<input type="text" name="answer1_2"id="answer1_2"> </span>
			</dd>
		</td>
	</tr>
		<td>②</td>
		<td>
			<dt>他にも様々なサービスがある中で、本サービスに申し込んだ決め手は何ですか？</dt>
			<dd><input type="text" name="answer2" required></dd>
		</td>
	</tr>
	<tr>
		<td>③</td>
		<td>
			<dt>本サービスの内容に関し以下の価格を教えてください</dt>
			<dd>
			1.「高すぎて参加しない」と感じ始める価格　：<input type="number" name="answer3_1" required>円<br>
			2.「高い」と感じ始める価格　　　　　　　　：<input type="number" name="answer3_2" required>円<br>
			3.「安すぎて参加しない」と感じる価格　　　：<input type="number" name="answer3_3" required>円<br>
			4.「安い」と感じ始める価格　　　　　　　　：<input type="number" name="answer3_4" required>円
			</dd>
		</td>
	</tr>
	<tr>
		<td>④</td>
		<td>
			<dt>本サービスの満足度を教えてください</dt>
			<dd>
				<label><input type="radio" name="answer4" value="100" onclick="formSwitch()" required>満足</label><br>
				<label><input type="radio" name="answer4" value="75" onclick="formSwitch()">どちらかというと満足</label><br>
				<label><input type="radio" name="answer4" value="50" onclick="formSwitch()">どちらかというと不満</label><br>
				<label><input type="radio" name="answer4" value="25" onclick="formSwitch()">不満</label><br>
			</dd>
		</td>
	</tr>
	<tr>
		<td>⑤</td>
		<td>
			<dt>満足度の理由を教えてください</dt>
			<dd><input type="text" name="answer5" required></dd>
		</td>
	</tr>
	<tr id="sample2">
		<td>⑥</td>
		<td>
			<dt>(④で「1.満足」を選ばれなかった方)どうなれば評価がもう一段階上がりますか？</dt>
			<dd><input type="text" name="answer6"></dd>
		</td>
	</tr>
	<tr>
		<td>⑦</td>
		<td>
			<dt>本サービスの感想・良かった点を教えてください</dt>
			<dd><input type="text" name="answer7" required></dd>
		</td>
	</tr>
</table>
	<input type="submit" value="送信する" class="btn">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>

<script>
// 競合調査
	var selecterBox = document.getElementById('sample1');

	function formSwitch() {
		check = document.getElementsByClassName('answer1')
		if (check[0].checked) {
			selecterBox.style.display = "block";

		} else if (check[1].checked) {
			selecterBox.style.display = "none";

		} else {
			selecterBox.style.display = "none";
		}
	}
	window.addEventListener('load', formSwitch());

	function entryChange2(){
	if(document.getElementById('changeSelect')){
	id = document.getElementById('changeSelect').value;
	}
	}

	// 満足度
	// var selecterBox2 = document.getElementById('sample2');

	// function formSwitch() {
	// 	check = document.getElementsByClassName('answer4')
	// 	if (check[0].checked) {
	// 		selecterBox2.style.display = "none";
	// 	} else if (check[1].checked) {
	// 		selecterBox2.style.display = "display";
	// 	} else if (check[2].checked) {
	// 		selecterBox2.style.display = "display";
	// 	} else if (check[3].checked) {
	// 		selecterBox2.style.display = "display";
	// 	} else {
	// 		selecterBox2.style.display = "display";
	// 	};
	// }
	// window.addEventListener('load', formSwitch());

	// function entryChange3(){
	// if(document.getElementById('changeSelect')){
	// id = document.getElementById('changeSelect').value;
	// }
	// }
</script>
</body>
</html>