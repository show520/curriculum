<link rel="stylesheet" href="css.style.css">
<?php
$name = $_POST["name"];
$q0 =$_POST["q0"];
$q1 =$_POST["q1"];
$q2 =$_POST["q2"];
?>
<?php $correct=[80,"HTML","select"];?>
<p  name="title1" name="name"><?php echo $name;?> さんの結果は・・・？</p>
<p>①の答え</p><?php echo $q0 ?>
<br>
<?php
   if(in_array($q0,$correct) ){
     echo "正解！";
   } 
   else{
      echo "残念...";
   }
?>
<p>②の答え</p><?php echo $q1 ?>
<br>
<?php
   if(in_array($q1,$correct) ){
     echo "正解！";
   } 
   else{
      echo "残念...";
   }
?>
<p>③の答え</p><?php echo $q2 ?>
<br>
<?php
   if(in_array($q2,$correct) ){
     echo "正解！";
   } 
   else{
      echo "残念...";
   }
?>