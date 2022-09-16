<link rel="stylesheet" href="css.style.css">
<?php
$name=$_POST['name'];
$choose0=[80,22,20,21];
$choose1=['PHP','Python','JAVA','PHP','HTML'];
$choose2=['join','select','insert','update'];
// 正解
$correct=[80,"HTML","select"];
?>
<p name="title1">お疲れ様です <?php echo $name;?> さん。</p>
<form action="answer.php" method="post"> 
<!-- //question1 -->
<h2 class="question">①ネットワークのポート番号は何番？</h2>
<?php 
foreach ($choose0 as $choose):?>
<input type="radio" name="q0" value=<?php echo $choose;?> ><?php echo $choose;?>
<?php endforeach;?>
<!-- //question2 -->
<h2 class="question">②Webページを作成するための言語は？</h2>
<?php 
foreach ($choose1 as $choose):?>
<input type="radio" name="q1" value=<?php echo $choose;?> ><?php echo $choose;?>
<?php endforeach;?>
<!-- //question3 -->
<h2 class="question">③MySQLで情報を取得するためのコマンドは？</h2>
<?php 
foreach ($choose2 as $choose):?>
<input type="radio" name="q2" value=<?php echo $choose;?> ><?php echo $choose;?>
<?php endforeach;?>
<br>
<!-- 正解 -->
<input type="hidden" name="name" value="<?php echo $name ?>" >
<input type="hidden" name="answer_hidden" value="<?php echo implode("correct",$correct) ?>">
<input class="submit1" type="submit" value="回答する">
</from>